<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  if(
  
  $fromName = $_POST['name'];
  $fromEmail = $_POST['email'];
  $messageSubject = $_POST['subject'];
  $message = $_POST['message'];


  $to = $receiving_email_address;
  $body = "";

  $body .= "From: ".$fromName. "\r\n";
  $body .= "Email: ".$fromEmail. "\r\n";
  $body .= "Message: ".$message. "\r\n";


  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
