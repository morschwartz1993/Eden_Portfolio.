<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$textarea=$_POST['textarea'];

if(!empty($email) && !empty($textarea)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $receiver="morschwartz1993@gmail.com";
        $subject="From: $name <$email>";
        $body="Name: $name\nEmail: $email\nPhone: $phone\nTextarea: $textarea\n\nRegards";
        $sender="From: $email";
        if(mail($receiver, $subject, $body, $sender)){
            echo "Your message has been sent!";
        }else{
            echo "Sorry, failed to send your message!";
        }
    }else{
        echo "Email and password field is required!";
    }
}
?>
