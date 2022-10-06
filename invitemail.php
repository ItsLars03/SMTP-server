<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

</head>
<body>
      <?php
        error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);
        ini_set('display_errors', 1);
        include "classes/class.phpmailer.php";
        
        //Receiver Info
	      $email = "receiver@example.com";
	      $name = "Receiver123";

	    //Sender Info
		  $sender_name = "Sender123"; //naam van de 
	      $sender_email = "sender@example.com";
	      $sender_password = "P4SSW0RD";
	
	      $mail_subject = "IT'S WORKING";
	      $message = '<html>Your message</html>'; 
	
	      $mail = new PHPMailer;
	      $mail->IsSMTP();
	      $mail->Host = "mail.example.com";
	      $mail->Port = 465;
	      $mail->SMTPAuth = true;
	      $mail->SMTPDebug = 1;
	      $mail->SMTPSecure = "ssl";
	      $mail->Username = $sender_email;
	      $mail->Password = $sender_password;
	      $mail->AddReplyTo($sender_email, $sender_name);
	      $mail->SetFrom($sender_email,$sender_name);
	      $mail->Subject = $mail_subject;
	      $mail->AddAddress($email, $name);
	      $mail->MsgHTML($message);
	      $send = $mail->Send();

?>