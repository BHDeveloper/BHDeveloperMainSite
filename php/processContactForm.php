<?php
if ($_POST["submit"]) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailAddress = $_POST['emailAddress'];
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];
    $to = 'admin@bhdeveloper.com';
    $subject = 'Message for BHDeveloper from Contact Form';

    $errorMessage = '';

    if($firstName == ''){
        $errorMessage .= "Please enter your first name.<br>";
    }

    if($emailAddress == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errorMessage .= "Please enter a valid email address.<br>";
    }

    if($errorMessage){
        exit($errorMessage);
    }

    $from ="BHDeveloper Contact Form: $emailAddress";

    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';

    $message.= "\n\n$ipaddress\n\n";

    $body = "From: $firstName $lastName\n E-Mail: $emailAddress\n Phone: $phoneNumber\n Message:\n $message";

    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }

    exit($result);
}
?>