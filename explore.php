<?php 
include "explorehead.php";
include "header.php";
?>


<section class="showcase">
            
            <video src="this.mp4" muted loop autoplay></video>
            <div class="overlay"></div>
            <div class="text">
              <h2 style="color: #f4f4f4bf;">Discover Kosovo</h2> 
              <h3 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: #f4f4f4bf;">
              <?php 
                $txt = "Where you are always Welcome!"; 
                if(isset($_POST['submit-login'])) // ktu duhet me kqyr te login qysh e ka butoni submit emrin 
                  str_replace("you are", $_POST['full_name'].' is ', $txt);
                   echo $txt;

              ?>
              </h3>
              <form action="explore.php" method = "GET">
              <button type = 'submit' name = 'submit-readmore' style = 'margin-top: 25px; padding:10px; color: white; background-color: black;'> Read More</button>
              </form>

              <?php 
              
              if(isset($_GET['submit-readmore'])){
              $filename = "gettoknowkosovafile.txt";
              $file = fopen( $filename, "r" );
         
              if( $file == false ) {
                 echo ( "Error in opening file" );
                 exit();
              }
         
              $filesize = filesize( $filename );
              $filetext = fread( $file, $filesize );
              fclose( $file );
         
              // echo ( "File size : $filesize bytes" );
              echo ( "<p style='color: #f4f4f4bf;'>$filetext</p>" );
              }

              ?>
           </div>
            <ul class="social">
              <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
              <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
              <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
            </ul>
          </section>
          <script src="Header/JavaScript.js"></script>

<?php 
    include "footer.php"
?>