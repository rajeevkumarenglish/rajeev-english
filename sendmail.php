<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "train2talk@gmail.com";  // CHANGE if needed
    $subject = "New Website Enquiry";

    $body = "New Enquiry Received:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you! Your enquiry has been sent successfully.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again.'); window.location.href='index.html';</script>";
    }
}
?>
