<?php





if($_POST)
{
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['msg'];
$phone = $_POST['phone'];
$recipient = "info@proworks.in";
$subject = "Equire Form";
$mailheader = "From: $email \r\n";

$email_message = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    
    
    
    
    
    
mail($recipient, $subject, $email_message, $mailheader) or die("Error!");
 	?>
    
    <div class="success">
    <p>Thank you for contacting us.</p>
    <p>We will be in touch with you very soon.</p>
    <p>&nbsp;</p>
    </div>
    <?php
	
}

?>











