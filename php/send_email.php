<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
$name =$_POST['name'];
$email =$_POST['email'];
$message =$_POST['message'];

$to ="mercyshimon393@gmail.com";
$subject ="New message from $name";
$body ="Name: $name\nEmail: $email\nMessage:\n$message";
$headers="From:$email";

if (mail($to, $subject, $body, $headers)){
    echo "Email successfully sent!";
} else {
    echo "Email sending failed.";
}
 }
?>