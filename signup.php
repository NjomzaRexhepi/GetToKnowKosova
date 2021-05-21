<?php 
include "signuphead.php";
// include "header.php";
?>

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
          <form action="#" class="login" name="login_form">
            <div class="username field">
              <input type="text" class="username-field" id="username-field" name="login_email" placeholder="Username" required>
            </div>
            <div class="messages">
              <p class="username-rules" style="font-size: 12px;">
                <i class="fas fa-exclamation-circle"></i>
                 Your username must be between 8 to 30 characters.
              </p>
              <p class="hidden username-success" style="font-size: 13px;">
                <i class="fas fa-check-circle"></i>
                 Congrats, that username is valid
              </p>
            </div>
<div class="field">
              <input type="password" placeholder="Password" required>
            </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" value="Login" onclick="ValidateEmail(document.login_form.login_email)">
            </div>
<div class="signup-link">
Not a member? <a href="">Signup now</a></div>
</form>

<form action="#" class="signup" name="signup_form" onload='document.signup_form.signup_email.focus()'>
            <div class="field">
              <input type="text" placeholder="Email Address" name="signup_email" required>
            </div>
<div class="field">
              <input type="password" placeholder="Password" required>
            </div>
<div class="field">
              <input type="password" placeholder="Confirm password" required>
            </div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" value="Signup" onclick="ValidateEmail(document.signup_form.signup_email)">
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
    <script src="js/subloginMain.js"></script>
    <script src="js/usernameMain.js"></script>