<?php 

include "accomodationhead.php";
include "header.php"
?>

 <!-- Navbar -->

<div class="navbar" style="padding-top: 70px;">
    <div class="container flex">
        <h1 class="logo" style="font-family: 'Satisfy', cursive;color: #D4AF37;">Plan your trip</h1>
        <nav>
            <ul style="font-family: 'Lato', sans-serif;">
                <li><a href="PracticalInfo.php">Practical Info</a></li>
                <li><a href="Accomodation.php" id="onclick">Accomodation</a></li>
                <li><a href="Transport.php">Transport</a></li>
            </ul>
        </nav>
    </div>
 </div>

 <div>
        <div class="theContainer">
            
             <section class="banner" id="banner">
              <div class="content">
                  <h1>Find hotels in some of the most popular cities in Kosovo</h1>
       
               <p>Enhancing Life around great food in our restuarants</p>
             <a href="#" class="btn btn-dark">Book Table</a>
       
              </div>
          </section>
          <section class="about" id="about">
            <div class="row">
              <div class="col50">
                <h2 class="titleText" style="color: #D4AF37;"><span style="color: #caa734; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">O</span>ur hotels </h2>
                    <dl>
                        <lh style="font-size: 1.8rem; color: #D4AF37;">Hotels Facilities & Guest Service</lh>
                        <dt>Hotels Facilities<dd><ul> 
                            <li>&#9830; Spa</li>
                            <li>&#9830; Semi open & outdoor restaurant</li>
                            <li>&#9830; Poolside bar</li>
                            <li>&#9830; Car parking</li>
                            <li>&#9830; Gift shop</li>
                            <li>&#9830; 24 Hour security</li>
                          </ul>
                        <dt>Guest Service<dd><ul>
                            <li>&#9830; 24-Hour room service</li>
                            <li>&#9830; E-Bike & horse cart rental</li>
                            <li>&#9830; Laundry service</li>
                            <li>&#9830; Tour & excursions</li>
                            <li>&#9830; 24-Hour doctor on call</li>
                          </ul>
                        </dl>
       
              </div>
              <div class="col50">
                <div class="imgBx">
                  <img src="planYourTrip/lux.jpg" alt="lux">
       
                </div>
              </div>
            </div>
          </section>
      
             <div class="content-wrapper">
                 <div class="portfolio-items-wrapper">
                     <div class="portfolio-item-wrapper">
                         <div class="portfolio-img-background" style="background-image:url(planYourTrip/ress.jpg);"> </div>
                        <div class="img-text-wrapper">
       
                            <div class="subtitle">Serving you better Food</div>
                        </div>
                      </div>
       
                       <div class="profile-content-wrapper">
                          <h1 style="color:  #D4AF37;">The most memorable rest time starts here.</h1>
                          <p style="color: white;">
                            Whether you’re planning a relaxing weekend away or a weeklong escape, we’ve a top selection of spa hotels in fantastic locations. So go on, treat yourself to one of our superb deals.               
                          </p>
                          
       
                        </div>
       
       
                       <div class="portfolio-item-wrapper">
                          <div class="portfolio-img-background" style="background-image:url(planYourTrip/fourpoints.jpg);"> </div>
                         <div class="img-text-wrapper">
       
                             <div class="subtitle">Relax, refresh, recharge in our spas!</div>
                         </div>
                       </div>
                  </div>
             </div>
          </div>
       
       
         <!--Newwwww-->
         <section class="hotels">
           <div class="theContainer">
             <h5 class="section-head" style="text-align: center; color: rgb(228, 228, 130);" >
               <span class="heading" >EXPLORE</span>
               <span class="sub-heading" >Our  top beautiful hotels</span>
       
             </h5>
             <div class="grids">
               <div class="grids-item featured-hotels">
                 <img src="planYourTrip/fourpoints1.jpg" alt="" class="hotel-image">
                 <h5 class="hotel-name">Four Points by Sheraton</h5>
                 <span class="hotel-price">From &euro;150/Night</span>
                 <div class="hotel-rating">
       
                  <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half"></i>
                 </div>
                     
                 <a href="#" class="btn-accomodation btn-accomodation-gradient">Book Now
                   <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                 </a>
               </div>
             </div>
             <div class="grids">
              <div class="grids-item featured-hotels">
               <img src="planYourTrip/emidhom.jpg" class="hotel-image" alt="pic"> 
              <h5 class="hotel-name">Emerald Hotel</h5>
              <span class="hotel-price">From &euro;200/Night</span>
              <div class="hotel-rating">
       
                <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
              </div> 
              <a href="#" class="btn-accomodation btn-accomodation-gradient">Book now
                  <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
              </a>
          </div>
          </div>
       
          <div class="grids">
            <div class="grids-item featured-hotels">
             <img src="planYourTrip/prnfp-fitness-center-6600-hor-clsc.jpg" alt="" class="hotel-image"> 
            <h5 class="hotel-name">Venus Hotel</h5>
            <span class="hotel-price">From &euro;200/Night</span>
            <div class="hotel-rating">
       
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <a href="#" class="btn-accomodation btn-accomodation-gradient">Book now
                <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
            </a>
        </div>
        </div>
           </div>
         </section>
        </div>

        
    <script>
        const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper');
 
        portfolioItems.forEach(portfolioItem => {
          portfolioItem.addEventListener('mouseover', () => {
            console.log(portfolioItem.childNodes[1].classList)
            portfolioItem.childNodes[1].classList.add('image-blur');
          });
 
          portfolioItem.addEventListener('mouseout', () => {
            console.log(portfolioItem.childNodes[1].classList)
            portfolioItem.childNodes[1].classList.remove('image-blur');
          });
        });
    </script>


<?php 

include "footer.php"

?>
