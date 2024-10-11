<?php
require_once "Mail.php";

$from = '<fromaddress@gmail.com>';
$to = '<abinashjena419@gmail.com>';
$subject = 'Hello world';
$body = "Hi,\n\nHow are you?";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => '220720100140@cutm.ac.in',
        'password' => 'bsre zgvj uruk yeou'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}
?>
