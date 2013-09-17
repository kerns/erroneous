<?php
if ($error_code >= 500) {
$headers = 'From: WebServer <postmaster> ' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
  if ($_SERVER['HTTPS']) {
    $proto = "https://";
  } else {
    $proto = "http://";
  }
$mail_message="
Hi,

The code $error_code have just been raised with the URL:
$proto$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]

Client IP: $_SERVER[REMOTE_ADDR]

Have a good day !
";
mail("postmaster", "Error $error_code on $_SERVER[HTTP_HOST]", $mail_message, $headers);
}
?>

<a class="btn back" href="javascript:window.history.back()">Go Back</a>
<p>Or visit the <a href="/">front page</a> of this site.</p>