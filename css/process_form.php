<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "omoruyiwally@gmail.com"; // Replace with your email address
        $subject = "New Email Subscription";
        $message = "You have a new subscriber: $email";
        $headers = "From: no-reply@gmail.com\r\n"; // Replace with a valid domain email

        if (mail($to, $subject, $message, $headers)) {
            echo "<h2 style='text-align: center;'>Thank you for staying connected!</h2>";
        } else {
            echo "<h2 style='text-align: center; color: red;'>Failed to send email. Please try again later.</h2>";
        }
    } else {
        echo "<h2 style='text-align: center; color: red;'>Invalid email address. Please enter a valid email.</h2>";
    }
} else {
    echo "<h2 style='text-align: center; color: red;'>Invalid request method.</h2>";
}
?>
