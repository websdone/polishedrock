<?php

/* Configuration */
$subject = 'Submission received'; // Set email subject line here
$mailto  = 'mariana@touchscreenrentals.co.uk'; // Email address to send form submission to
/* END Configuration */

$firstName      = $_POST['name'];
$email          = $_POST['email'];
$message    	= $_POST['message'];
$subject          = $_POST['subject'];
$callTime       = $_POST['callTime'];
$timestamp = date("F jS Y, h:iA.", time());
// HTML for email to send submission details
$body = "
<br>
<p>The following information was submitted through the contact form on your website:</p>
<p><b>Name</b>: $name <br>
<b>Email</b>: $email<br>
<b>Subject</b>: $subject<br>
<b>Message</b>: $message<br>
<p>This form was submitted on <b>$timestamp</b></p>
";

// Success Message
$success = "
<div class=\"row-fluid\">
    <div class=\"span12\">
        <h3>Submission successful</h3>
        <p>Thank you for contactiong us, we will get back to you shortly </p>
</div>
";

$headers = "From: $name <$email> \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message = "<html><body>$body</body></html>";

if (mail($mailto, $subject, $message, $headers)) {
    echo "$success"; // success
} else {
    echo 'Form submission failed. Please try again...'; // failure
}

?>