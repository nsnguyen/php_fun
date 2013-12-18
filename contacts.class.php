<?php
session_start();
ob_start();
class ContactForm{

    public $sendTo ="";
    public $email ='';
    public $name = '';
    public $message ='';
    public $subject = "";
    public $code = '';

    function sendEmail(){
        $subject =$this->subject;
        $from = "From: $this->name <$this->email>\r\n";
        $content = $this->message;

        $content = wordwrap($content,70);
        @mail($this->sendTo,$subject,$content,$from);
    }

    function reDirect(){
        header("Location:/done.php");
        die();
    }


    function showForm(){
        echo '<form id="contact-form" class="contact-form" action="'.$_SERVER['PHP_SELF'].'" method = "post" >
            <div class="col-lg-8">

                <p class="name">
                    <input id="name" type="text" placeholder="Full Name" value="'.$this->name.'" name="name" required ="required"/>
                </p>
                <p class="email">
                    <input id="email" type="email" placeholder="Email Address" value="'.$this->email.'" name="email" required = "required"/>
                </p>
                <p class="text">
                    <textarea id="text" placeholder="Your Message" value = "'.$this->message.'" name="message" rows="15" cols="25" required = "required"></textarea>
                </p>



                <input id ="submit-button" type="submit" value="Send" name="submit-button" />

            </div>
        </form> ';
    }

    function processForm(){

        if(isset($_POST['submit-button'])){
            if(!empty($_POST['email']) && !empty($_POST['email']) && !empty($_POST['message'])){
            $this->email = $_POST['email'] ? trim($_POST['email']) : '';
            $this->name = $_POST['name'] ? trim($_POST['name']) : '';
            $this->message = $_POST['message'] ? trim($_POST['message']) : '';
            $sanitized_email = filter_var($this->email,FILTER_SANITIZE_EMAIL);
            if(filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)){
                $this->sendEmail();
                unset($this->email,$this->name, $this->message, $_POST['submit-button']);
                $this->reDirect();
            }
        }
        }else{
            $this->showForm();
        }

    }
}
?>
