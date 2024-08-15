<?php
    //get data from form  
    $name = $_POST['fullName'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $country= $_POST['country'];
    $message= $_POST['message'];
    $to = "akhtarraza30@gmail.com,hhhlll74@gmail.com";
    $subject = "Akhtar Raza UI/UX - ";
    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone =" . $phone . "\r\n Country =" . $country . "\r\n Message =" . $message;
    $headers = "From: akhtarraza@akhtarraza.onrender.com" . "\r\n" .
    "CC: akhtarraza30@gmail.com,nazranaansari186@gmail.com";
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    header("Location:success.html");
?>