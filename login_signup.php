
<?php
include 'config.php';
include 'Validator.php';

error_reporting(0);
session_start();

if(isset($_SESSION["user_id"])){
    header("Location: explore.php");
}

if(isset($_POST['signup']))
{
    $full_name = $_POST['signup_full_name'];
    $email = $_POST['signup_email'];
    $password = $_POST['signup_password'];
    $cpassword = $_POST['signup_cpassword'];
    $hash_password = md5($_POST['signup_password']);
    $hash_cpassword = md5($_POST['signup_cpassword']);
    $pdo = config::getConnection(); 
    //checks
    $check_fullname = Validator::validateFullName($full_name);
    $check_email = Validator::validateEmail($email);
    if (!$check_fullname){
      echo "<script>alert('Please check your full name !');</script>";
    }else if (!$check_email){
      echo "<script>alert('Please check your email  !');</script>";
    }else if (strlen($password) < 6 || strlen($cpassword) < 6){
      echo "<script>alert('Password should be with 6 or more characters !');</script>";
    }else if ($hash_password !== $hash_cpassword){
      echo "<script>alert('Password did not match !');</script>";
    }else{

      $tsql = "SELECT * FROM users WHERE email= '$email' ";
      $stmt = $pdo->prepare($tsql);
      $stmt->execute();
      $check_email = $stmt->rowCount();
      
      if($check_email>0){
         echo "<script>alert('Email already exists in our database!');</script>";
      }else{
          $sql="INSERT INTO users (id,full_name, email, password,role) VALUES(NULL,'$full_name','$email','$hash_password','0')";
          $stmt = $pdo->prepare($sql);
          $result = $stmt->execute();
          if($result){
              $_POST["signup_full_name"]="";
              $_POST["signup_email"]="";
              $_POST["signup_password"]="";
              $_POST["signup_cpassword"]="";
              echo "<script>alert('User registration successfully.');</script>";
          }else{
              echo "<script>alert('User registration failed.');</script>";

          }
      }
    }
    //
}
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $check_email = Validator::validateEmail($email);
    if (!$check_email){
      echo "<script>alert('Please check your email  !');</script>";
    }else{
      $pdo = config::getConnection();
      $tsql = "SELECT * FROM users WHERE email= '$email'";
      $stmt = $pdo->prepare($tsql);
      $stmt->execute();
      $rows = $stmt->rowCount();
      if ($rows > 0){//email ekziston
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($data[0]['password'] != $password){
          echo "<script>alert('The Password is incorrect !');</script>";
        }else{
          $_SESSION["user_id"] = $data[0]['id'];
		  $_SESSION['role'] = $data[0]['role'];
          header("Location: explore.php");
        }
      }else{
        echo "<script>alert('Email is not found . Please try again.');</script>";
      }
    
    }
    
  }


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <title>Register</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="loginStyle.css">
    <link rel="stylesheet" href="usernameStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon.png">
  </head>
  <body onload = 'document.login_form.login_email.focus()'>
    <div class="mbul">
      <div class="title-text">
        <div class="title login">
Login Form</div>
<div class="title signup">
Signup Form</div>
</div>
<div class="kuti">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab">
</div>
</div>
<div class="te_dhenat">
 <form action="" method="post" class="login" name="login_form">
 <div class="username field">
 <input type="text" class="email-field" id="email-field" name="email" placeholder="Email Address" value="<?php echo $_POST['email']; ?>" required>
 </div>
 
            <div class="field">
              <input type="password" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="pass-link">
            <a href="forgot-password.php">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit"  name="login" value="Login" onclick="ValidateEmail(document.login_form.login_email)">
            </div>
<div class="signup-link">
Not a member? <a href="">Signup now</a></div>
</form>

<form action="" class="signup" method="post" name="signup_form" onload='document.signup_form.signup_email.focus()'>
            <div class="field">
              <input type="text" placeholder="Full name" name="signup_full_name" value="<?php echo $_POST["signup_full_name"]; ?>" required>
            </div>
            <div class="field">
              <input type="email" placeholder="Email Address" name="signup_email"  value="<?php echo $_POST["signup_email"]; ?>"required>
            </div>
<div class="field">
              <input type="password" placeholder="Password" name="signup_password" value="<?php echo $_POST["signup_password"]; ?>" required>
            </div>
<div class="field">
              <input type="password" placeholder="Confirm password" name="signup_cpassword" value="<?php echo $_POST["signup_cpassword"]; ?>" required>
            </div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" name="signup" value="Signup" onclick="ValidateEmail(document.signup_form.signup_email)">
            </div>
</form>
</div>
</div>
</div>
<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>
    <script src="subloginMain.js"></script>
    <script src="usernameMain.js"></script>
  </body>
</html>
