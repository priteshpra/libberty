<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  
  
  
  $receiving_email_address = 'sales@libertyexclusive.com';
  

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }
  
  $secretKey = '6LfENjcqAAAAAIWGkkzH8R8YHHEmmTXVeXBqpShF';

// Verify the reCAPTCHA response
$recaptchaResponse = $_POST['g-recaptcha-response'];
$remoteIp = $_SERVER['REMOTE_ADDR'];

$recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
$response = file_get_contents($recaptchaUrl . '?secret=' . $secretKey . '&response=' . $recaptchaResponse . '&remoteip=' . $remoteIp);
$responseKeys = json_decode($response, true);

// if (intval($responseKeys["success"]) !== 1) {
//     echo 'Please complete the reCAPTCHA challenge.';
//     exit;
// }
  
  $name = htmlspecialchars(trim($_POST['name']));
  $contact_no = htmlspecialchars(trim($_POST['contact_number']));
  $message = htmlspecialchars(trim($_POST['message']));
  $hall = !empty($_POST['hall']) ? $_POST['hall'] : '-';
  $event_date = !empty($_POST['event_date']) ? date('d/m/Y',strtotime($_POST['event_date'])) : '-';
  $number_of_guest = !empty($_POST['number_of_guest']) ? $_POST['number_of_guest'] : '-';
  $package = !empty($_POST['package']) ? $_POST['package'] : '-';
  $time_to_call = !empty($_POST['time_to_call']) ? date("h:i A", strtotime($_POST['time_to_call'])) : '-';
  $reference = !empty($_POST['reference']) ? htmlspecialchars(trim($_POST['reference'])) : '-';
 
  

    if (empty($name) || empty($contact_no) || empty($message)) {
        // Return error if any field is empty
       
        echo 'Please fill in all the fields.';
        exit;
    }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $name;
  $contact->from_email ='sales@libertyexclusive.com';
  $contact->subject ='Enquiry from website';
  $contact->cc = array('teamhospitrendia@gmail.com');

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message($name, 'From');
  $contact->add_message($contact_no, 'Contact No');
  $contact->add_message($event_date, 'Event Date');
  $contact->add_message($hall, 'Hall');
  $contact->add_message($number_of_guest, 'Number Of Guest');
  $contact->add_message($package, 'Package');
  $contact->add_message($time_to_call, 'Any preferred time for a callback');
  $contact->add_message($reference, 'Reference');
  $contact->add_message($message, 'Message');

  echo $contact->send();
?>
