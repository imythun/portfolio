<?php

require_once($DOC_ROOT.'includes/Mail/PHPMailerAutoload.html');
//require_once($DOC_ROOT.'includes/php/Mail.html');
//require_once($DOC_ROOT.'includes/php/Mail/mime.html');
function Send_Authenticated_Mail($from, $from_name='', $to, $to_name='', $cc, $bcc, $subject='', $content='', $attachments, $username, $password, $host, $port){

  $results_messages = array();

  $mail = new PHPMailer(true);
  $mail->CharSet = 'utf-8';

  //class phpmailerAppException extends phpmailerException {}

  try {
  if(!PHPMailer::validateAddress($to)) {
    throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
  }
  $mail->isSMTP();
  $mail->SMTPDebug  = 2;
  $mail->Host       = $host;
  $mail->Port       = $port;
  $mail->SMTPSecure = "tls";
  $mail->SMTPAuth   = true;
  $mail->Username   = $username;
  $mail->Password   = $password;
  $mail->addReplyTo($from, $from_name);
  $mail->From       = $from;
  $mail->FromName   = $from_name;
  $mail->addAddress($to, $to_name);
 
  if (!empty($bcc)) {
    if (is_array($bcc)) {
      foreach ($bcc as $s_bcc) {
        $mail->addBCC($s_bcc);
      }
    }
    else{
      $mail->addBCC($bcc);
    }
  }
  if (!empty($cc)) {
    if (is_array($cc)) {
      foreach ($cc as $s_cc) {
        $mail->addCC($s_cc);
      }
    }
    else{
      $mail->addCC($cc);
    }
  }

  $mail->Subject  = $subject;
  $body = '
      <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
      <html>
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>'.$subject.'</title>
      </head>
      <body>'.$content.'</body>
      </html>';

  $mail->WordWrap = 80;
  $mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images

  if (!empty($attachments)) {
    if (is_array($attachments)) {
      foreach ($attachments as $attachment) {
        $mail->addAttachment($attachment, $attachment);
      }
    }
    else{
      $mail->addAttachment($attachments, $attachments);
    }
  }

  try {
    $mail->send();
    $results_messages[] = "Message has been sent using SMTP";
  }
  catch (phpmailerException $e) {
    //throw new phpmailerAppException('Unable to send to: ' . $to. ': '.$e->getMessage());
  //throw 'Unable to send to: ' . $to. ': '.$e->getMessage();
  }
  }
  catch (phpmailerAppException $e) {
    $results_messages[] = $e->errorMessage();
  }

  $out = "";

  if (count($results_messages) > 0) {
    $out .= "Run results\n";

    foreach ($results_messages as $result) {
      $out .= "$result\n";
    }
  }
  unset($mail);
  return $out;

}


?>
