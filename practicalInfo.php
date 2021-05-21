<?php

include "practicalInfohead.php";
include "header.php";
?>

<div class="navbar">
        <div class="container flex">
            <h1 class="logo">Plan your trip</h1>
            <nav>
                <ul>
                    <li><a href="PracticalInfo.php" id="onclick">Practical Info</a></li>
                    <li><a href="Accomodation.php">Accomodation</a></li>
                    <li><a href="Transport.php">Transport</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Showcase -->
    <section class="showcase">
        <div class="container grid">
            <div class="showcase-text">
                <h1>Practical Information</h1>
                <p>
                    Need to change money? Don't know what to wear? <br> We've got you covered.
                </p>
               
                   <a href="https://wikitravel.org/en/Kosovo" class="btn btn-dark">
                    Read More
                </a>
            </div>
			
			<script>
			function showHint(str) {
				if (str.length == 0) {
					document.getElementById("txtHint").innerHTML = "";
					return;
				} else {
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							alert(xmlhttp.responseText);
							document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
						}
					};
					xmlhttp.open("GET", "gethint.php?q=" + str,true);
					xmlhttp.send();
				}
			}
			</script>

            <div class="showcase-form card text-center">
                <h3>Search places if they exist we will have a pop up message with its name</h3>
				<form name="data_form" id="data_form" autocomplete="on">
                    <div class="form-control">
                        <input type="text" name="txtHint" id="txtHint" onkeyup="showHint(this.value)" placeholder="Hint" size="20" required>
                    </div>
					
                
            
            </div>
        </div>
    </section>
    <!-- Stats -->
    <section class="stats">
        <div class="container">
            <h2 class="stats-heading text-center my-1 text-dark">
                KOSOVA STATS
            </h2>

            <div class="grid grid-4 text-center my-4">
                <div>
                    <i class="fas fa-scroll fa-3x py-2"></i>
                    <h3>2008</h3>
                    <p class="text-secondary">DECLERATION OF INDEPENDENCE</p>
                </div>
                <div>
                    <i class="fas fa-project-diagram fa-3x py-2"></i>
                    <h3>2000+</h3>
                    <p class="text-secondary">YEARS OF HISTORY
                        </p>
                </div>
                <div>
                    <i class="far fa-flag fa-3x py-2"></i>
                    <h3>10,877</h3>
                    <p class="text-secondary">KM&sup2;, SQUARE</p>
                </div>
                <div>
                    <i class="fas fa-user-friends fa-3x py-2"></i>
                    <h3>1,883,018</h3>
                    <p class="text-secondary">POPULATION
                        </p>
                </div>
            </div>
        </div>
    </section>

    <!-- body-section -->
    <section class="body-section">
        <h1 class="text-center" style="font-size: 35px;">Our beautiful nature</h1>
        <div class="container grid" style="display: flex; height: 500px;">
            
            <div class="center">
                <input type="radio" checked name="active" id="tab-1">
                <input type="radio" name="active" id="tab-2">
                <input type="radio"  name="active" id="tab-3">
                <input type="radio"  name="active" id="tab-4">
                <div class="sliders">
                    <label for="tab-1"><img src="practicalinfoImages/cubeImages/5.jpg"></label>
                    <label for="tab-2"><img src="practicalinfoImages/cubeImages/6.jpg"></label>
                    <label for="tab-3"><img src="practicalinfoImages/cubeImages/7.jpg"></label>
                    <label for="tab-4"><img src="practicalinfoImages/cubeImages/8.jpg"></label>
                </div>
                <div class="img-card">
                    <img src="practicalinfoImages/cubeImages/5.jpg">
                    <img src="practicalinfoImages/cubeImages/6.jpg">
                    <img src="practicalinfoImages/cubeImages/7.jpg">
                    <img src="practicalinfoImages/cubeImages/8.jpg">
                </div>
            </div>
        </div>  
        
    </section>
    <!-- Cloud -->
    <section class="cloud bg-primary my-2 py-2">
        <div class="container grid grid-3">
            <div class="text-center">
                <h2 class="lg">What you need to know</h2>
                <p class="lead my-1">Kosovo is a diverse melting pot where almost all attires and cultural expressions are accepted. Swimwear is permissible at beaches, waterparks, public pools and spa areas but is not considered appropriate in areas such as business districts and shopping malls.
                </p>
                <a href="https://en.wikipedia.org/wiki/Kosovo" class="btn btn-dark">Read More</a>
            </div>
            <div class="door-open text-center">
                <i class="fas fa-door-open fa-3x py-2" style="font-size: 100px; color: #fff"></i>
            </div>
            <div class="text-center">
                <h2 class="lg">Kosova Population</h2>
                <p class="lead my-1">
                    According to the 2011 census (excluding North Kosovo) the main minority groups are Bosniaks (1.6 per cent), 
                    Serbs (1.5 per cent), Turkish (1.1 per cent), Askhali (0.9 per cent), Egyptian (0.7 per cent),
                    and Roma (0.5 per cent).
                </p>
                <a class="btn btn-dark" onclick="FunctionExec()">Show Kosovo's minorities</a>
                <p id="minorities"></p>
            </div>
        </div>
    </section>

    <!-- Universities -->
    <section class="universities">
        <h2 class="md text-center my-2">
            Public Universities
        </h2>
        <div class="container flex" style="height: auto;">
            <div class="card">
                <h4>University of Prishtina</h4>
                <a href="https://www.uni-pr.edu/"><img src="practicalinfoImages/UniversityOfPrishtina.png"></a>
            </div>
            <div class="card">
                <h4>University of Mitrovica</h4>
                <a href="https://www.umib.net/"><img src="practicalinfoImages/UniversityOfMitrovica.png"></a>
            </div>
            <div class="card">
                <h4>University of Peja</h4>
                <a href="http://unhz.eu/"><img src="practicalinfoImages/UniversityOfPeja.png"></a>
            </div>
        </div>
            
        <h2 class="md text-center my-2">
            Private Universities
        </h2>
        <div class="container flex" id="privateU">
            <div class="card">
                <h5>University of Business and Technology</h5>
                <a href="https://www.ubt-uni.net/sq/ballina"><img src="practicalinfoImages/UBT.png"></a>
            </div>
            <div class="card">
                <h5>Rezonanca</h5>
                <a href="https://rezonanca-rks.com/"><img src="practicalinfoImages/Rezonanca.png"></a>
            </div>
        </div>
        </div>
    </section>
    <script src="Header/JavaScript.js"></script>
    <script src="js/nameValidation.js"></script>

<?php 

include "footer.php";

?>