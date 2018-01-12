<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<?
  //Simple CMS
  //Extremely Simple CMS system
  //Andy Harris for PHP/MySQL Adv. Beg 2nd Ed.
  
//kg: There were several issues with the original script as follows:
//
// - GET parameters are used. Since register_globals is off in the ciswebs php.ini file
//      extract($_GET) has been added.
// - The links on the original menu.html file did not work. On ciswebs, the include statement
//      does not allow an absolute URL as the argument. A replacement menu.html file has been
//      provided with links to HTML files in the ph08 folder.
// - The logoTrans.gif file is missing. It is referenced by the top.html file.
//      The img tag has been changed to reference the die1.jpg file.
// - The default.html file was missing. A replacement file has been provided.

extract($_GET); //kg: added because register_globals is off on ciswebs

  if (empty($menu)){
    $menu = "menu.html";
  } // end if

  if (empty($content)){
    $content = "default.html";
  } // end if

  include ("menuLeft.css");
  include ("top.html");

  print "<span class = \"menuPanel\"> \n";
  include ($menu);
  print "</span> \n";

  print "<span class = \"item\"> \n";
  include ($content);
  print "</span> \n";

?>


</body>
</html>




