<?php

include "transporthead.php";
include "header.php";

?>

<div class="navbar">
        <div class="container flex">
            <h1 class="logo">Plan your trip</h1>
            <nav>
                <ul>
                    <li><a href="PracticalInfo.php">Practical Info</a></li>
                    <li><a href="Accomodation.php">Accomodation</a></li>
                    <li><a href="Transport.php" id="onclick">Transport</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Head under navbar -->
    <section class="showcase transport-head bg-primary py-3">
        <div class="container grid">
            <div>
                <h1 class="md">TRANSPORTATION </h1>
                <h1 class="sm">IN KOSOVO</h1>
                <p>The airport is the only port of entry for air travelers to Kosovo. 
                    It is named in honour of Adem Jashari, the founder of the Kosovo Liberation Army, 
                    which fought for the secession of Kosovo from the Federal 
                    Republic of Yugoslavia during the 1990s.
                </p>
                <a href="http://www.airportpristina.com/" class="btn btn-dark">Take me there</a>
            </div>
            <div class="preload py-3">
                <img class="airplane" src="images/airplane.png" alt="airplane">
            </div>
        </div>
    </section>
    <!-- Transport main -->
    <section class="transport-main my-5">
        <div class="container grid">
            <div class="card bg-light p-3" id="backgroundChange">
                <h3 class="my-2">Essentials</h3>
                <nav>
                    <ul>
                        <li><a class="text-primary my-1" href="#">Getting to Kosova</a></li>
                        <li><a class="text-primary" href="#">Getting around Kosova</a></li>
                        <li><a class="text-primary" href="#">Keep exploring</a></li>
                    </ul>
                </nav>
                <h3 class="my-2">Transport tickets</h3>
                <nav>
                    <ul>
                        <li><a class="text-primary" href="https://us.jetcost.com/en/flights/kosovo/XK?aw_campaign_id=6624912454&gclid=Cj0KCQiA3NX_BRDQARIsALA3fIKcfNw-MEeEaeRmyIXGTb_9Z_4QI4mKH9u1L3osrE97XwB5o8tO9hoaAr9SEALw_wcB">Flights Kosovo</a></li>
                        <li><a class="text-primary" href="https://gjirafa.biz/Kategori/Hotele-dhe-Udhetime/Transport/Taksi--Radio-Taksi">Taxi Kosovo</a></li>
                        <li><a class="text-primary" href="https://www.busradar.com/coach/country/kosovo/">Bus Kosovo</a></li>
                        <li><a class="text-primary" href="https://www.economybookings.com/?btag=google&gclid=Cj0KCQiA3NX_BRDQARIsALA3fIKkuNg06cfF9xpANNAbSydFleHs7nsC168FKgub3lHcepZJT2Pv2UQaAps0EALw_wcB">RentCar Kosova</a></li>
                    </ul>
                </nav>
                
                <!-- Weather app -->
                <div class="input py-1" style="display: flex;">
                    <input list="citys" type="text" class="inputValue" name="city" id="city">
                    <datalist id="citys">
                        <option value="uh">Select a City</option>
                        <option value="Pristina">Prishtin&#235;</option>
                        <option value="Malisevo"><a id="forhide">Malishev&#235;</a></option>
                        <option value="Prizren">Prizren</option>
                        <option value="Ferizaj">Ferizaj</option>
                        <option value="Pec">Pej&#235;</option>
                        <option value="Kacanik">Ka&#231;anik</option>
                    </datalist>
                    <input type="submit" value="Submit" id="submitW" class="submitW btn btn-primary">
                </div>
                <div class="box-shape" id="box-shape">
                    <p class="paragraph-style py-2">Weather</p>
                    <div class="weather-icon py-3" id="weather-icon">
                    
                    </div>
                    <div class="others p-3">
                        <div class="temperature">
                            <p class="paragraph-style p-first py-1"></p>
                            <span id="span-1">&#8728;</span>
                            <span id="span-2">C</span>
                        </div>
                        
                        <p class="paragraph-style p-second"></p>
                        <p class="paragraph-style p-third"></p>
                    </div>
                </div>
                <!-- Output -->
                <div class="exchangeCK my-2 py-1">
                    <p style="padding: 0; margin: 0; font-size: 12px;">Choose between [-50,50] in Celsius:</p>
                    <form oninput="Kelvin.value=parseInt(Celsius.value)+273" id="theformbelow">
                        <input type="range" id="Celsius" value="0" min="-50" max="50">
                        <span id="dy" value="273"> + 273</span>
                        = <output name="Kelvin" for="Celsius dy"></output>K
                    </form>
                </div>
                <h3 class="my-2">Give us a rate!</h3>
                <!-- Rating part -->
                <nav>
                    <div class="kon">
                        <div class="kont2">
                          <div class="tteksti">
                              Thanks for rating us!
                          </div>
                          <div class="edit">EDIT</div>
                        </div>
                        <div class="review_stars">
                          <input type="radio" name="rate" id="rate-5">
                          <label for="rate-5" class="fas fa-star"></label>
                          <input type="radio" name="rate" id="rate-4">
                          <label for="rate-4" class="fas fa-star"></label>
                          <input type="radio" name="rate" id="rate-3">
                          <label for="rate-3" class="fas fa-star"></label>
                          <input type="radio" name="rate" id="rate-2">
                          <label for="rate-2" class="fas fa-star"></label>
                          <input type="radio" name="rate" id="rate-1">
                          <label for="rate-1" class="fas fa-star"></label>
                          <form action="#">
                            <header></header>
                            
                              <ttekstiare cols="30" placeholder="Describe your experience"></ttekstiare>  <br />
                              <div class="btn btn-primary">
                                  <button type="submit">Share</button>
                              </div>
                          </form>
                        </div>
                    </div>
                </nav>
                
                <script>
                    $(document).ready(function(){
                        
                        if($(".inputValue").value == "uh"){
                            $("#box-shape").hide();
                        }else {
                            $("#box-shape").show();
                        }
                        /*$("#id").click(function(){
                            $("#box-shape").show();
                        });*/
                });
                </script>
                <!-- Geolocation -->
                <a href="#" id="embedMap-show" class="btn btn-primary my-1" onclick="showPosition();">Current Location</a>
                <div id="embedMap" style="width: 500px; height: 300px;">
                    <!--Google map will be embedded here-->
                </div>
                <!-- Hide style of embedMap first -->
                <script>
                    $(document).ready(function(){
                        $("#embedMap").hide();
                        $("#embedMap-show").click(function(){
                            $("#embedMap").show();
                    });
                });
                </script>
            </div>
            
            <div class="card">
                <h4 class="my-2 text-primary">Getting to Kosovo</h4>
                <h2> Transport in Kosovo is relatively developed</h2>
                <p> Since the declaration of the independence, there have been many improvements in the infrastructure and urban transport.</p>
                <div class="alert alert-success">
                    <i class="fas fa-intro"></i>
                    <canvas id="myCanvas" width="20" height="30" style="background-color: transparent;"
                    ></canvas>
                    Airports  Railways Roads CarHire  Bus Taxi  
                </div>
                <h3>Airports</h3>
                <p>Pristina International Airport (PIA)  Adem Jashari (IATA: PRN, ICAO: BKPR) is an international airport located 15 km southwest of Prishtina. Since 2010, PIA is being managed by Limak and Aeroports de Lyon through Public Private Partnership Agreement.  It has a 42,000 meters square modern terminal, handling over a million passengers per year.</p>
                <a href="http://www.airportpristina.com/ " target="_blank" class="btn btn-primary">Read more</a>
                <h4 class="my-2 text-primary">Getting around Kosovo</h4>
                <h3>Railways</h3>
                <p>Domestic destinations accessible by rail include Pristina, Peja, Fushë Kosovë, Gracanica, Han I Elezit and Mitrovica. There is also a service to Skopje in Macedonia. Internal rail services are generally poor and less reliable then buses unfortunately. Nevertheless, if you do have the time to head out to/from Skopje by train the view will amaze you considering that it is very scenic.</p>
                <a href="http://www.kosovorailway.com/ " target="_blank" class="btn btn-primary">Read  more</a>
                <h3>Roads</h3>
                <p>Traffic drives on the right. Road are not that good; however, they are getting better as most of them are being constructed or reconstructed.</p>
                <h3>Car Hire </h3>
                <p>Car rental is the best way to solve your traveling problem. Both major international and local firms offer car hire at airports and larger towns. The daily cost for a small economical car is around Euro 60 per car.</p>
                <a href="http://www.www.beinkosovo.com/ " target="_blank" class="btn btn-primary">Read  more</a>
                <h3>Bus</h3>
                <p>There are services between most towns, and most buses are comfortable with air-conditioning. Tickets are usually paid directly if there are any seats available. </p>
                <a href="http://www.kosovorailway.com/ " target="_blank" class="btn btn-primary">Read  more</a>
                <h3>Taxi </h3>
                <p>Main cities have metered taxis. It is possible to negotiate a fare when the meters are not in use. However, we suggest you to take a metered taxi as you will pay only the regular rate per km. In both cases ask if the car has a meter or agree a fare before setting off.</p>
                <a href="https://gjirafa.biz/Kategori/Hotele-dhe-Udhetime/Transport/Taksi--Radio-Taksi/ " target="_blank" class="btn btn-primary">Wanna know more</a>
                <h4 class="my-2 text-primary">Keep exploring...</h4>
                <ul>
                    <li>There is so much to see and explore</li>
                 </ul>
                
            </div>
            
        </div>
    </section>

    <script src="Header/JavaScript.js"></script>
    <script src="js/Geolocation.js"></script>
    <script src="js/weatherAppmain.js"></script>
    <!-- Rate us! script -->
    <script>
        const btn = document.querySelector("button");
        const kont2 = document.querySelector(".kont2");
        const widget = document.querySelector(".review_stars");
        const editBtn = document.querySelector(".edit");
        btn.onclick = ()=>{
          widget.style.display = "none";
          kont2.style.display = "block";
          editBtn.onclick = ()=>{
            widget.style.display = "block";
            kont2.style.display = "none";
          }
          return false;
        }

        var c = document.getElementById("myCanvas");
        var ctx = c.getContext("2d");
        var grd = ctx.createRadialGradient(15,20,5,20,10,10);
        grd.addColorStop(0,"rgb(210, 168, 81)");
        grd.addColorStop(1,"#f4f4f4");
        
        ctx.fillStyle = grd;
        ctx.fillRect(10,10,150,80);
    </script>

<?php

include "footer.php";

?>