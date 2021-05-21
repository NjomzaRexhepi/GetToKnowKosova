<?php

include "subscribehead.php";

?>

<input type="checkbox" id="toggle">
  <label for="toggle" class="show-btn">Subscribe</label>
  <div class="wrapper">
    <label for="toggle">
    <i class="cancel-icon fas fa-times"></i>
    </label>
   
    <div class="con">
      <header>Subscribe</header>
      <p>Get inform about the news of tourism in Kosovo through our website and explore Kosovo virtually from us!</p>
    </div>
    <form action="subscribe.php" method="POST">
    <?php 
    $userEmail = ""; 
    include 'ValidatorSubscribe.php';
    $pdo = config::getConnection();
    
    if(isset($_POST['subscribe'])){ 
      $userEmail = $_POST['email']; 
      $checkUserEmail = Validator::validateEmail($userEmail);
      if (!$checkUserEmail){
        echo "<script>alert('Invalid email!');</script>";
      }


      elseif(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ 
        $subject = "Thanks for Subscribing us GetToKnowKosova";
        $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
        $sender = "From: njomzaarexhepii@gmail.com";
       
        if(mail($userEmail, $subject, $message, $sender)){
          ?>
          
          <div class="alert success-alert">
           
            <?php 
           define("GREETING", "Thanks for Subscribing us!!");
           echo GREETING;
            ?>
          </div>
          <?php
          $tsql = "INSERT INTO subscribers VALUES(NULL,'$userEmail')";
          $stmt = $pdo->prepare($tsql);
          $stmt->execute();
          $userEmail = "";
        }else{
          ?>
          
          <div class="alert error-alert">
          <?php echo "Failed while sending your mail!" ?>
          </div>
          <?php
        }
      }else{
        ?>
        
        <div class="alert error-alert">
          <?php echo "$userEmail is not a valid email address!" ?>
        </div>
        <?php
      }
    }
    ?>
      <div class="field">
        <input type="text" class="email" name="email" placeholder="@example.com" required value="<?php echo $userEmail ?>">
      </div>
      <div class="field btn">
        <div class="layer"></div>
        <button type="submit" name="subscribe">Subscribe</button>
      </div>
    </form>
    <div class="text"></div>
  </div>
 


<?php 

// include "footer.php";

?>
