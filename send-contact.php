<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'tackochlov@gmail.com';
  $subject = 'New message from your website';
  $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Thank you for contacting us. We will get back to you as soon as possible.';
  } else {
    echo 'There was a problem sending your message. Please try again later.';
  }
}
?>
