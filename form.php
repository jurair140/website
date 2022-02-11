<?php
//get data from form  

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subjec = $_POST['sub'];
$to = "jurair140@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ."\r\n subject =" . $subject;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:page4.html");
?>