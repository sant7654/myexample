<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer3/src/PHPMailer.php';
require 'phpmailer3/src/SMTP.php';
require 'phpmailer3/src/Exception.php';

//require 'phpmailer3/src/PHPMailer.php';

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'sant7654@gmail.com';
$mail->Password = 'jery@1997';

$mail->setFrom('sant7654@gmail.com', 'Santhosh Jery');
$mail->addAddress('santhosh@logicvalley.in');
$mail->Subject = 'SMTP email test';
$mail->Body = 'this is some body';

if ($mail->send())
    echo "Mail sent";
else
	echo "Failed". $mail->ErrorInfo;
?>