<?php





if($_POST)
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['msg'];
$recipient = "info@ammaphysiotherapyclinic.com";
$subject = "Equire Form";
$mailheader = "From: $email \r\n";

$email_message = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    
    
    
    
    
mail($recipient, $subject, $email_message, $mailheader) or die("Error!");
 	?>
    
    <div class="success">
    <h1>Thank you for contacting us.</h1>
    <p>We will be in touch with you very soon.</p>
    <p>&nbsp;</p>
    </div>
    <?php
	
}

?>











