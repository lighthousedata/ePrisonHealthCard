<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

session_start();

$to = 'toSenderEmail@xxxxx.xxxxx';
$subject = 'Subject xxxxx xxxxxx';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=charset=utf-8\r\n";
$headers .= "From: " . $_POST['email'] . "\r\n";
//$headers .= "Reply-To: ". $_POST['email'] . "\r\n";
$headers .= "CC: xxx@xxxxx.xxx\r\n";



$message = "<html><body>";

$message .= '<table style="border-color: #666; background: #eee; cellpadding="10">';
$message .= "<tr><td><strong>Name:</strong> </td><td>" . $_POST['username'] . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . $_POST['email'] . "</td></tr>"; 


$message .= "</table>";
$message .= "</body></html>";


echo $message;
//echo $headers;



$response=mail($to, $subject, $message, $headers);

if($response==1)
{
echo "<script language='javascript' type='text/javascript'>
        
       window.location = 'index.html';
    </script>";

}
else{
echo 
"<script language='javascript' type='text/javascript'>
        alert('mail send failed');
    </script>";
}



?>