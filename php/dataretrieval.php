<?php
require 'db.php';
require './assets/PHPMailer-master/src/PHPMailer.php';
require './assets/PHPMailer-master/src/SMTP.php';
require './assets/PHPMailer-master/src/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST)){
  $email = $_POST['email'];
  $password = $_POST['password'];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Please enter a valid email!";
  } else {
    if ($_POST['whatToDo'] == 'insert'){
        $sql = "select * from account where email='$email'";
        $checkIfUserIsNew = $db->query($sql)->fetch(PDO::FETCH_ASSOC);
        if (!$checkIfUserIsNew) {
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $sql = "insert into account(email, fname, lname, password) values (?, ?, ?, ?)";
          $stmt = $db->prepare($sql);
          $affected = $stmt->execute(array($email, $fname, $lname, $password));

          if ($affected){
            $verification_code = $_POST['verification'];

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = "true";
            $mail->SMTPSecure = "tls";
            $mail->Port = "587";
            $mail->Username = "mobileshopee256@gmail.com";
            $mail->Password = "lmkgweyxtleiocxp";
            $mail->Subject = "[Verification Code]";
            $mail->setFrom("mobileshopee256@gmail.com");
            $mail->Body = "This code is to verify your account: $verification_code";
            $mail->addAddress($email);
            if ($mail->Send()){
              echo "Check your email for a verification code!";
            } else {
              echo "Error sending the verification email!";
            }
            $mail->smtpClose();
          }
        } else {
          echo "There is an existing account using this email!";
        }
    } else {
      $sql = "select * from account where email='$email' and password='$password'";
      $currentUser = $db->query($sql)->fetch(PDO::FETCH_ASSOC);

      if (!$currentUser){
        echo "There is something wrong with the email and password!";
      } else {
        if ($currentUser['verified'] == 1) {
          session_start();

          $_SESSION['account_id'] = $currentUser['account_id'];
          $_SESSION['email'] = $currentUser['email'];
          $_SESSION['fname'] = $currentUser['fname'];
          $_SESSION['lname'] = $currentUser['lname'];
          $_SESSION['password'] = $currentUser['password'];

          header("Location: index.php");
        }
      }
      echo "We here now";
    }
}
}
?>