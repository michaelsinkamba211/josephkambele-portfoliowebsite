<?php
 
  $receiving_email_address = 'kambelejoseph8@gmail.com';

  if( file_exists($php_email_form = './assets/vendor/php-email-form/contact.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
  $contact->message = $_POST['message'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'kambelejoseph.online',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_name( $_POST['name'], 'From');
  $contact->add_email( $_POST['email'], 'Email');
  $contact->add_subject( $_POST['subject'], 'Subject');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
