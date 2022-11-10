<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once '../phpmailer/Exception.php';
require_once '../phpmailer/PHPMailer.php';
require_once '../phpmailer/SMTP.php';

$mail = new PHPMailer(true);


$alert = '';
  
  try{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $mail->isSMTP();
    $mail->Host = 'pop3.aruba.it';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@seavav.it'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Sea1256!@'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '995';

    $mail->setFrom('info@seavav.it'); // Gmail address which you used as SMTP server
    $mail->addAddress('youranyemail@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
    $mail->SMTPOptions=array('ssl'=>array(
      'verify_peer'=>false,
      'verify_peer_name'=>false,
      'allow_self_signed'=>false
    ));
    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";



      if (!$mail->send())
          echo $mail->ErrorInfo;
  

  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
    
              echo $alert;
  }

?>

<!--<html>-->
<!--  <head>-->
<!--    -->
<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
<!--  </head>-->
<!--  <body>-->
<!--  <script>-->
<!--      swal({-->
<!--          title: "Messaggio Inviato",-->
<!--          text: "Grazie per aver lasciato un messaggio." + "\n" +  " Sarà ricontattato nel più breve tempo" ,-->
<!--          icon: "success",-->
<!--          button: "Torna alla Home!",-->
<!--      })-->
<!--          .then((value) => {-->
<!--              window.location = '../home.php';-->
<!--          });-->
<!--  </script>-->
<!--  </body>-->
<!--  </html>-->