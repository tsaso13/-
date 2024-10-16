<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);

    echo "<h1>Thank you for your appointment, $name!</h1>";
    echo "<p>Your appointment for $date has been confirmed. We will send a confirmation to $email.</p>";
}
?>
