<?
if (array_key_exists('email', $_POST)) {
   $to  = 'admin@raibf.com' . ', ';
   $to .= 'info@raibf.com';

   $subject = 'Заполнена контактная форма с '.$_SERVER['HTTP_REFERER'];
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Email: ".$_POST['email']."\nIP: ".$_SERVER['REMOTE_ADDR'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
   $headers .= 'From: lp.raibf.com' . "\r\n";
   mail($to, $subject, $message, $headers);
   echo $_POST['email'];
}
?>