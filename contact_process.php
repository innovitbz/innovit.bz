<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "zayel13.boss@gmail.com"; // Enter your email address here
    $subject = "Message from $name";
    $body = "From: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "<p>Thank you for your message. We will get back to you soon!</p>";
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
}
?>
