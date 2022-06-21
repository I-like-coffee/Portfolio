<?php

if (isset($_POST['submit'])) {
    $Pass = false

    if (isset($_POST["emai"]) && $_POST["email"] != '') {
        $Pass = true
    }

    if filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) {
        $Pass = ($Pass != false) && true
    }

    if $Pass {
        // submit form
        $nameErr = $emailErr = "";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "taboez4life@gmail.com"
        $body = "";

        $body .= "From: ".$email."\r\n";
        $body .= "Name: ".$name."\r\n";
        $body .= "Message: ".$message."\r\n";

        mail($to, $subject, $body);
    }
}

>