<?php
//get data from form  
$name = $_POST['ime'];
$email= $_POST['email'];
$message= $_POST['tekst'];
$to = "a.domagoj@hotmail.com";
$subject = "Mail o upitu za tecaj";
$txt ="Name = ". $ime . "\r\n  Email = " . $email . "\r\n Message =" . $tekst;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.php");
?>