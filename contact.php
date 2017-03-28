<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

mail_to = 'dragongamer36014@gmail.com';
$subject = 'Message from Wildfire Gaming visitor ' . $field_name;

$body_message = 'From: '.field_name."\n";
$body_message = 'Email: '.field_email."\n";
$body_message = 'Message: '.field_message."\n";

$headers = ‘From: ‘.$field_email.”rn”;
$headers .= ‘Reply-To: ‘.$field_email.”rn”;
$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message failed. Please, send an email to dragongamer36014.com');
		window.location = 'contact.html';
    </script>
<?php
}?>