<!DOCTYPE html>

	<head>
		<title>A simple Blackjack Game</title>
	</head>
	
	<body>

<?php 


$suits = array ("s", "h", "c", "d");

$faces = array ( 
    "2"=>2, "3"=>3, "4"=>4, "5"=>5, "6"=>6, "7"=>7, "8"=>8,
    "9"=>9, "t"=>10, "j"=>10, "q"=>10, "k"=>10, "a"=>11 
); 

function evaluateHand($hand) { 
    global $faces; 
    $value = 0; 
    foreach ($hand as $card) { 
        if ($value > 11 && $card['face'] == 'Ace') { 
            $value = $value + 1; 
        } else { 
            $value = intval($value) + intval($faces[$card['face']]); 
        } 
    } 
    return $value; 
} 


$deck = array(); 

foreach ($suits as $suit) { 
    $keys = array_keys($faces); 
    foreach ($keys as $face) { 
        $deck[] = array('face'=>$face, 'suit'=>$suit); 
    } 
} 



$hand = array(); 

if (empty($_POST)) { 
     
    for ($i = 0; $i < 2; $i++) {
        shuffle($deck); 	 
        $hand[] = array_shift($deck); 
        $dealer[] = array_shift($deck); 

    } 

    $handstr = serialize($hand); 
    $deckstr= serialize($deck); 
    $dealerstr= serialize($dealer); 
} else if ($_POST['submit'] == 'stay') { 
    $dealer = unserialize($_POST['dealerstr']); 
    $hand = unserialize($_POST['handstr']); 
    $deck = unserialize($_POST['deckstr']); 
    while(evaluateHand($dealer) < 17) { 
        $dealer[] = array_shift($deck); 
    } 
    echo "Dealer hit " . evaluateHand($dealer) . "<br />\n"; 
    echo "You hit " . evaluateHand($hand) . "<br />\n"; 
    $handstr = $_POST['handstr']; 
    $dealerstr = serialize($dealer); 
    $deckstr= serialize($deck); 
} 
else 

if ($_POST['submit'] == 'hit me') 
{ 
    $dealer = unserialize($_POST['dealerstr']); 
    $hand = unserialize($_POST['handstr']); 
    $deck = unserialize($_POST['deckstr']); 
    $hand[] = array_shift($deck); 
    $dealerstr = $_POST['dealerstr']; 
    $handstr = serialize($hand); 
    $deckstr= serialize($deck);} 


printf( 
   "<form method='post'><fieldset> 
   <input type='hidden' name='handstr' value='%s' /> 
   <input type='hidden' name='deckstr' value='%s' /> 
   <input type='hidden' name='dealerstr' value='%s' />", 
   htmlspecialchars($handstr, ENT_QUOTES), 
   htmlspecialchars($deckstr, ENT_QUOTES), 
   htmlspecialchars($dealerstr, ENT_QUOTES) 
); 

foreach ($hand as $card) { 
    //echo $card['face'] . ' of ' . $card['suit'] . "<br />"; 
print( "<img src=\"cards/{$card[face]}{$card[suit]}.gif\">");
	
}



?> 
<p>You have : <?php echo evaluateHand($hand); ?></p> 
<p>
	<?php

    //echo $dealer[0]['face'] 	
	//?>
	  <?php //echo $dealer[0]['suit'] ?></p>
	 
<p>

</p>  
<input type='submit' name='submit' value='hit me' /> 
<input type='submit' name='submit' value='stay' /> 


</fieldset></form> 
<a href='Project.php'>Try Again</a>

	</body>
</html>
