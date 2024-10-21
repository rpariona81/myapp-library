<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
class Phpmailer_lib {

	public function __construct(){
        log_message('Debug', 'PHPMailer class is loaded.');
    }

	public function load(){
        
        $mail = new PHPMailer;
        return $mail;
    }
	/*public function send($sender, $recipient, $subject, $message, $fileUpload)
	{
		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
			//Server settings
			$mail->CharSet = 'UTF-8';
			//$mail->SMTPDebug = 0;                                 // 2=Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = getenv('MAIL_HOST');   		  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = getenv('MAIL_USERNAME');        // SMTP username
			$mail->Password = getenv('MAIL_PASSWORD');          // SMTP password
			$mail->SMTPSecure = getenv('MAIL_ENCRYPTION');     // Enable TLS 
			$mail->Port = getenv('MAIL_PORT');            // TCP port to connect to

			//reply to before setfrom: https://stackoverflow.com/questions/10396264/phpmailer-reply-using-only-reply-to-address
			$mail->AddReplyTo($sender);
			$mail->setFrom( getenv('MAIL_USERNAME') );

			$mail->addAddress($recipient);     // Add a recipient

			//Content
			$mail->isHTML(true);               // Set email format to HTML
			$mail->Subject = $subject;
			$mail->Body    = $message;
			$mail->AltBody = strip_tags($message);
			$mail->addAttachment($fileUpload,$test);
			$mail->send();
			
		} catch (Exception $e) {
			log_message('error',"MAIL ERROR: " .$mail->ErrorInfo);
			
		}

	}*/
}