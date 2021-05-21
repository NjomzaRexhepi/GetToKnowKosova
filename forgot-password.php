<?php

include 'config.php';

session_start();

if (isset($_SESSION["user_id"])) {
  header("Location: welcome.php");
}

if (isset($_POST["resetPassword"])) {
  $email = $_POST["email"];
  $pdo = config::getConnection();
  $tsql = "SELECT * FROM users WHERE email= '$email' ";
  $stmt = $pdo->prepare($tsql);
  $stmt->execute();
  $check_email = $stmt->rowCount();

  if ($check_email > 0) {
      $data = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
      
      $to = $email;
      $base_url = "http://localhost:8080/registerFinal/";
      $subject = "Reset Password - GetToKnowKosova";
      $token = md5($data['id'].$data['full_name']);
      if ($data['token'] != ""){
        $token = $data['token'];
      }else{
        $sql = "UPDATE users SET token = '$token' WHERE id = '{$data['id']}'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
      }
    
      $message = "
      <html>
      <head>
      <title>{$subject}</title>
      </head>
      <body>
      <p><strong>Dear {$data['full_name']},</strong></p>
      <p>Forgot Password? Not a problem. Click below link to reset your password.</p>
      <p><a href='{$base_url}reset-password.php?token={$token}'>Reset Password</a></p>
      </body>
      </html>
      ";
    
      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
      // More headers
     $sender = "From: njomzaarexhepii@gmail.com";
     // ini_set();
      if (mail($to,$subject,$message,$sender)) {
        echo "<script>alert('We have sent a reset password link to your email - {$email}.');</script>";
      } else {
        echo "<script>alert('Mail not sent. Please try again.');</script>";
      }
  } else {
      echo "<script>alert('Email not found.');</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Forgot Password</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Reset Password</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email Address" name="email" value="" required />
          </div>
          <input type="submit" value="Send Verification Link" name="resetPassword" class="btn solid" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Forgot Password ?</h3>
          <p>
            You can reset the password by having access to the email !
          </p>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>

</html>