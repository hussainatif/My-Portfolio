<?php
if(isset($_POST['submit'])){
    $to = "atif.hussain2k@gmail.com";



    $name = $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $body= $_POST['body'];
    $headers = 'From: '.$email . "\r\n";


    $body = "name : ".$name. "\r\n" .
    		"Message : " . $body;
    if(mail($to, $subject, $body , $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?>