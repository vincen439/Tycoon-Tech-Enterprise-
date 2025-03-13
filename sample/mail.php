<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Set your email address where you want to receive messages
  $to = "detycoonvincent.com";
  $subject = "New Message from $name";

  // Compose the email body
  $body = "Name: $name\n";
  $body .= "Email: $email\n\n";
  $body .= "Message:\n$message";

  // Set headers
  $headers = "From: $email";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message.";
  }
}
?>