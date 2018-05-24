<?php
if(!isset($_POST['submit']))
{
    //need to submit form error
    echo "error: you need to submit the form.";
}
$name = $_POST['name'];
$phone_number = $_POST['phone-number'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_message['message'];

//validate
if(empty($name))||empty($phone_number)||empty($email)||empty($subject)||empty($message))
{
    echo "Every field is required to be filled";
    exit;
}
$email_form = 'matteo.alessandro@forwardpass.io';   // recipient's email
$email_subject = "Form submission: $subject"
$email_body =   "name: $name;\n".
                "phone number: $phone_number;\n".
                "\n".
                "$message".
$to = 'matteo.alessandro@forwardpass.io';   // recipient's email
$headers = "From: $email_form \r\n";

//Send email
mail($to,$email_subject,$email_body,$headers);
?>
