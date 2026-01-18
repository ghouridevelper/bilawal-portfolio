<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "bilawalxtylishking@gmail.com";
    $subject = "New Portfolio Contact";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    mail($to, $subject, $body);

    echo "<script>alert('Message Sent Successfully');window.location.href='index.php';</script>";
}
?>