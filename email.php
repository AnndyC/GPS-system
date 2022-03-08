<?php

if (isset($_POST['email_btn'])){
require 'PHPMailerAutoload.php';

  $mail = new PHPMailer();
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['mail'];

      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'chantysimons10@gmail.com';
      $mail->Password   = 'Designatedsurvivor10';
      $mail->SMTPSecure = 'tls';//PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port       = 587;

      //Recipients
      $mail->addAddress('daninatasha782@gmail.com');
      $mail->setFrom('chantysimons10@gmail.com', ''.$name.'' );

      $mail->isHTML(true);
      $mail->Subject = $subject;
      $mail->Body    = $message;
      $mail->AltBody = $message;

      if($mail->send()){;
        ?>
        <script>
          alert('Hello your mail has been sent. We will get back to you soon!!')
          window.open('aboutus.php','_self')
        </script>
          <?php
    }
   else {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
 ?>
