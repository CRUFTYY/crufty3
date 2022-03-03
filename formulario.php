<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['message']) && !
      empty ($_POST['email'])) {
      $name = $_POST['name'];
      $asunto =  $_POST['message'];
      $message = $_POST['asunto'];
      $phone   = $_POST['phone'];
      $subject = $_POST['subject'];         
      $email 
      $header = "From: noreply@example.com"  .  "\r\n";
      $header.= "Reply-To: noreply@example.com"  .  "\r\n";
      $header.= "X-Mailer: PHP/". phpversion();
      $mail = @mail($email,$asunto, $message, $header);
      if ($mail) {
    }         echo "<h4>¡ Mail enviado exitosamente!</h4>";
  }      
}