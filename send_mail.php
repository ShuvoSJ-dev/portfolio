<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "shuvosj001@gmail.com";
    $subject = "New Portfolio Contact from $name";
    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Message sent successfully!</h2>";
        echo "<a href='index.html'>Back to Home</a>";
    } else {
        echo "<h2>Sorry, message could not be sent.</h2>";
    }
}
?>
