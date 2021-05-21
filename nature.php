<?php
include 'naturehead.php';
include 'header.php';
?>



	<div class="navbar" style="height: 70px;">
        <div class="nav-container flex">
            <h1 class="logo" style="font-family: 'Satisfy', cursive;">Things To Do</h1>
            <nav>
                <ul>
                    <li><a href="Nature.php" id="onclick">Nature</a></li>
					
                </ul>
            </nav>
        </div>
    </div>

    <div id="wrapper">
        <h2>Hiking and other fun activites in the nature of Kosova</h2>
        <div>
            <section id="foto"><img src="images/hiking.jpg" id="slider-nature">
            </section>
            <ul class="navigation">
                <li onmouseover="imgSlider('images/hiking.jpg')" id="foto1">
                    <figcaption id="fig">Fig.1 - Sharr mountain, Prizren, Kosova</figcaption>
                    <button class="mini"><figure><img src="images/hiking-mini.jpg"></figure></button></li>
                <li onmouseover="imgSlider('images/viaf.jpg')" id="foto2">
                    <figcaption id="fig">Fig.2 - Rugova, Peja, Kosova</figcaption>
                    <button class="mini"><figure><img  src="images/viaf-mini.jpg"></figure></button></li>
                <li onmouseover="imgSlider('images/snow4.jpg')" id="foto3">
                    <figcaption id="fig">Fig.3 - Brezovica, Kosova</figcaption>
                    <button class="mini"><figure><img  src="images/snow4_mini.jpg"></figure></button></li>
                <li onmouseover="imgSlider('images/Kayak.jpg')" id="foto4">
                    <figcaption id="fig">Fig.4 - Badoci Lake, Prishtina, Kosova</figcaption>
                    <button class="mini"><figure><img src="images/Kayak-mini.jpg"></figure></button></li>
                <li onmouseover="imgSlider('images/paragliding.jpg')" id="foto5">
                    <figcaption id="fig">Fig.5 - Prizren, Kosova</figcaption>
                    <button class="mini"><figure><img src="images/paragliding-mini.jpg"></figure></button></li>
            </ul>
        </div>
        </div>
        <?php 
			include 'config.php';
            $pdo = config::getConnection();
            $sql = "select image_path, image_name, image_caption, title, txt, link1, link1_txt, link2, link2_txt, paragraph from nature1";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $queryResult = $stmt->rowCount();
            $i = 0;
			//include 'natureaddform.php';
			if (isset($_SESSION['role'])) {
				if(($_SESSION['role']) == 1){
					include 'natureaddform.php';
				}
				
			}
            while ($i < $queryResult)
                {
                    $rows = $result[$i];
        ?>
            <div style="margin-top: 75px; padding: 30px; "> 
                 <img src="<?php echo $rows['image_path'].$rows['image_name']?>">
                 <figcaption ><?php echo $rows['image_caption'] ?> </figcaption>

            </div>
                        <li>
                    <div id="hiking-textpart">
                        <h3><?php echo $rows['title']?></h3>
                        <p style="outline-offset: 2em;">
                           <?php echo $rows['txt'] ?>
                            <ul id="lista-hiking">
                                <li>
                                    <a href="<?php echo $rows['link1'] ?>" target="_blank" rel="noreferrer noopener" style="color: black;">
                                        <mark id="mark" style="background-color: rgba(128, 128, 128, 0.199);"> <?php echo $rows['link1_txt'] ?></mark></a>
                                </li>
                                <li>
                                    <a href="<?php echo $rows['link2'] ?> " target="_blank" rel="noreferrer noopener" style="color: black;">
                                        <mark style="background-color: rgba(128, 128, 128, 0.199);"> <?php echo $rows['link2_txt'] ?> </mark></a>
                                </li>
                            </ul>
                            <p> <?php echo $rows['paragraph']?> </p>
                        </p>
                    </div>
                </li>
                <?php 
                $i++;
                    } 
                 
                    
                ?>

          
            <!-- pjesa e calendarit-->
            <div id="cal-wrap">
                <!-- [PERIOD SELECTOR] -->
                <h3 style="color:#002240; margin-top:30px; padding-bottom: 3%;"><b>Select the year and the month you want to save your events!</b> </h3>
                <div id="cal-date" style="width: 600px;">

                    <select id="cal-mth"></select>
                    <select id="cal-yr"></select>
                    <input id="cal-set" type="button" value="GO" />
                </div>

                <!-- [CALENDAR] -->
                <div id="cal-container"></div>

                <!-- [EVENT] -->
                <div id="cal-event">

                </div>
            </div>


            
            <script>
                {

                    function imgSlider(anything) {
                        document.getElementById("slider-nature").src = anything;
                    }
                }
            </script>
            <script src="js/slider-hiking.js"></script>
            <script src="js/regexig.js"></script>
            <script src="calendar.js"></script>
            <script src="Header/JavaScript.js"></script>

<?php 
include 'footer.php'
?>