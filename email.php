
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/SMTP.php';
 
    $con = mysqli_connect('localhost', 'root', '', 'mylead');
    $regions_id = $_SESSION['login_regions_id'];
   // $email = 'moseskairamnoka@gmail.com';
    $subject = 'NEW LEAD';
    $message = 'Dear all! There is a new Lead. Click on the link to open http://localhost/lead/ ';
    $regions_id = $_POST['regions_id'];

   
    //Load composer's autoloader

    $mail = new PHPMailer(true);                            
    try {
        //Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.gmail.com';  
       // $mail->Port = 25;                    
        $mail->SMTPAuth = true;                             
        $mail->Username = 'mtllead@gmail.com';     
        $mail->Password = 'gglaavhbmnfrtodq';             
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );                         
        $mail->SMTPSecure = 'ssl';                           
        $mail->Port = 465;                                   

        //Send Email
        $mail->setFrom('mtllead@gmail.com');
        
        //Recipients
        $result = mysqli_query($con, "SELECT email FROM users WHERE type = 1 AND regions_id = $regions_id");
/* fetch associative array */
while ($row = $result->fetch_array()) {
   
    $user['email'][] = $row["email"];
}
foreach($user['email'] as $key => $email) {
    $mail->AddAddress($email);
    
    // Clear all addresses and attachments for next loop
    // $mail->clearAddresses();
   // mysqli_free_result($result);
   // mysqli_close($con);
}
       // $mail->addAddress($email);              
        $mail->addReplyTo('mtllead@gmail.com');
        
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
		
       $_SESSION['result'] = 'Message has been sent';
	   $_SESSION['status'] = 'ok';
    } catch (Exception $e) {
	   $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
	   $_SESSION['status'] = 'error';
    }
	

