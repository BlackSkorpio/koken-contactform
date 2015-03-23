<?php
// contact.php version: 2015032213:31
// MUST BE ANSI NOT UTF-8
// Uncomment for trouble shooting
//error_reporting (E_ALL ^ E_NOTICE);


// Make sure that we get the settings
//require_once($_SERVER['DOCUMENT_ROOT'].'/contactform/settings.php');
include ('settings.php');
// Generate correct date and mail id
$date = date(DATE_RFC2822);
$mid = "<" . sha1(microtime()) . "@" . $_SERVER['HTTP_HOST'] . ">";

$post = (!empty($_POST)) ? true : false;
if ($post) {
  $name = stripslashes($_POST['name']);
  // Ensure that we keep foregin charaters intact in the name
  $isoname= iconv("UTF-8", "ISO-8859-1", $name);
  $email = trim($_POST['email']);
  $message = stripslashes($_POST['message']);
  // Ensure that we keep foregin chararters intact mail body
  $isomessage = iconv("UTF-8", "ISO-8859-1", $message);
  $subject = stripslashes($_POST['subject']);
  // Ensure that we keep foregin chararters intact in the mail subject
  $isosubject = iconv("UTF-8", "ISO-8859-1", $sub_open.$subject);
/*
$headers - <<<EOT
From: $isoname <$email>
Reply-To: $email
Cc: $email
Date: $date
Message-ID: $mid
MIME-Version: 1.0
Content-Type: text/plain; charset="UTF-8"
Content-Transfer-Encoding: quoted-printable
EOT;
		$mail = $mailfunction("$recipientname <$recipient>", $isosubject, $isomessage, $headers, "-f$email");
*/

		$mail = $mailfunction("$recipientname <$recipient>", $isosubject, $isomessage,
               "From: ".$isoname." <".$email.">\r\n"
              ."Reply-To: ".$email."\r\n"
			  ."Cc: ".$email."\r\n"
			  ."Date: ".$date."\r\n"
			  ."Message-ID: ".$mid."\r\n"
			  ."MIME-Version: 1.0\r\n"
              ."Content-Type: text/plain; charset=UTF-8\r\n"
			  ."Content-Transfer-Encoding: quoted-printable\r\n"
			  ,"-f$email"
			  ); 
  if ($mail) { echo 'OK'; } else { echo '<div class="notification_error">'.$error_notice.'</div>'; }
}
?>