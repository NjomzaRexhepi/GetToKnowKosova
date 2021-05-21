<?php

include 'config.php';

session_start();

if (isset($_SESSION["user_id"])) {
  header("Location: welcome.php");
}

if (!isset($_GET["token"])){
  echo "<script>alert('You can not change password without token!');</script>";
}

if (isset($_POST["resetPassword"]) && isset($_GET["token"])) {
  $password = md5($_POST["new_password"]);
  $cpassword = md5($_POST["cnew_password"]);
  $pdo = config::getConnection();
  if ($password === $cpassword) {
    $token = $_GET["token"];

    $sql = "UPDATE users SET password = '$password' WHERE token='$token'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE users SET token = '' WHERE password='$password'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    header("Location: index.php");
  } else {
      echo "<script>alert('Password not matched.');</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="cssnew/style.css" />
  <title>Reset Password</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Reset Password</h2>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="New Password" name="new_password" value="" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm New Password" name="cnew_password" value="" required />
          </div>
          <input type="submit" value="Reset Password" name="resetPassword" class="btn solid" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Reset Password ?</h3>
          <p>
            <?php echo substr("Reset Reset Password",6); ?>
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