<?php

require_once 'PHPMailerAutoload.html';
 
$results_messages = array();
 
$mail = new PHPMailer(true);
$mail->CharSet = 'utf-8';
 
class phpmailerAppException extends phpmailerException {}
 
try {
$to = 'prajil@srvinfotech.in';
if(!PHPMailer::validateAddress($to)) {
  throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
}
$mail->isSMTP();
$mail->SMTPDebug  = 0;
$mail->Host       = "smtp.gmail.com";
$mail->Port       = "587";
$mail->SMTPSecure = "tls";
$mail->SMTPAuth   = true;
$mail->Username   = "rahul@srvinfotech.in";
$mail->Password   = "t+sUAyTCg_]5";
$mail->addReplyTo("rahul@srvinfotech.in", "Rahul");
$mail->From       = "rahul@srvinfotech.in";
$mail->FromName   = "Rahul";
$mail->addAddress("prajil@srvinfotech.in", "Prajil");
$mail->addBCC("sinju@srvinfotech.in");
$mail->addCC("swathi@srvinfotech.in");
$mail->Subject  = "PHP Mailer(PHPMailer test using SMTP)";
$body = <<<'EOT'
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>PHPMailer Test</title>
</head>
<body>
  <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
    <h1>This is a test of PHPMailer.</h1>
    <div align="center">
      <a href="https://github.com/PHPMailer/PHPMailer/"><img src="images/phpmailer.png" height="90" width="340" alt="PHPMailer rocks"></a>
    </div>
    <p>This example uses <strong>HTML</strong>.</p>
    <p>The PHPMailer image at the top has been embedded automatically.</p>
  </div>
</body>
</html>
 
EOT;
$mail->WordWrap = 80;
$mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images
$mail->addAttachment('phpmailer_mini.png','phpmailer_mini.png');  // optional name
$mail->addAttachment('phpmailer.png', 'phpmailer.png');  // optional name
 
try {
  $mail->send();
  $results_messages[] = "Message has been sent using SMTP";
}
catch (phpmailerException $e) {
  throw new phpmailerAppException('Unable to send to: ' . $to. ': '.$e->getMessage());
}
}
catch (phpmailerAppException $e) {
  $results_messages[] = $e->errorMessage();
}
 
if (count($results_messages) > 0) {
  echo "<h2>Run results</h2>\n";
  echo "<ul>\n";
foreach ($results_messages as $result) {
  echo "<li>$result</li>\n";
}
echo "</ul>\n";
}

?>