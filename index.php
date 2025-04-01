<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--use for responsiveness-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link to css-->
    <link rel="stylesheet" href="style.css">
     <!--link to js -->
     <script src="index.js" defer></script>
     <!--Link To Scroll Reveal, in description-->
     <script src="https://unpkg.com/scrollreveal"></script>

     <!--For Icons-->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/solid.min.css">


     <integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcv7"
     crossorigin="anonymous"
     referrerpolicy="no-referrer"
     />


    <title>VINTAGE CAR RENTALS</title>
</head>
<body>
    <!--Navbar-->
    <nav>
        <a href="index.php" class="brand">
           <h1>Metro<b class="accent">Rentally</b></h1> 
        </a>
        <div class="menu">
            <div class="btn">
                <i class="fas fa-times close-btn"></i>

            </div>
            <a href="index.php">HOME</a>
            <a href="collection.html">CARS</a>
            <a href="index.php#about">ABOUT</a>
            <a href="index.php#testimonials">REVIEWS</a>
        </div>

        <button class="btn-2" onclick="window.location.href='contact.html'">
           Get Started 
        </button>

        <div class="btn">
            <i class="fas fa-bars menu-btn"></i>

        </div>
    </nav>
    <!--Navbar End-->

    <!--Hero Section-->
    <div class="hero-page">
        <div class="hero-headlines">
            <h1>
             Easy And Fast Way To <b class="accent">Rent</b> A car with MetroRentally.
            </h1>
            <p>
                We offer a wide extend of rental cars to suit your needs, whether
                you're arranging a weekend travel or a business trip.
            </p>
            <button class="btn-2 btn-hero" onclick="window.location.href='contact.html'"
            >
             Get Started

            </button>
            <div class="download-buttons">
                
                <img src="img/apple store logo.jpg" alt="img" />
                <img src="img/google-play-button.avif" alt="img" />
               

            </div>

        </div>
        <img src="img/shelpy paper.jpg" class="hero-page-img" alt="img" />

    </div>
    <!--Hero Section End-->

     <!--About Section-->
     <section class="about" id="about">
        <div class="about-container">
            <h1>Your Premier Choice For Effortless Car Rentals</h1>
            <p class="about-subline">
                Experience the ultimate convenience with MetroRentally, where renting a
                car is as easy as a few clicks.
            </p>

            <div class="about-info">
                <div class="about-info-item">
                    <hr class="about-hr" />
                    <img src="img/efficiency icon.jpg" alt="img" >
                    <h5>Efficiency</h5>
                    <p>
                       MetroRentally stands out for its streamlined rental process, ensuring
                       customers can quickly and easily book their desired vehicles.
                    </p>

                </div>

                <div class="about-info">
                    <div class="about-info-item">
                        <hr class="about-hr" />
                        <img src="img/div icon.webp" alt="img" >
                        <h5>Diverse Fleet</h5>
                        <p>
                           MetroRentally stands out for its streamlined rental process, ensuring
                           customers can quickly and easily book their desired vehicles.
                        </p>
    
                    </div>

                    <div class="about-info">
                        <div class="about-info-item">
                            <hr class="about-hr" />
                            <img src="img/excp icon.jpg" alt="img" >
                            <h5>Exeptional Service</h5>
                            <p>
                               Beyond just providing vehicles, MetroRentally is committed to
                               delivering exceptional customer service at every touchpoint.
                            </p>
        
                        </div>

            </div>
             
        </div>

     </section>
     <!--About Section End-->

      <!--Collecion Section-->
      <section class="collection" id="collection">
        <h1>Our Car Collections</h1>

        <div class="collection-container">
            <!--Car #1-->
            <div class="collection-car-item">
                <img src="img/dmc.jpg" alt="img">
                <div class="car-info-container">
                    <div class="car-info">
                        <div class="car-price">
                            <h5>Ksh 8000</h5>
                            <h6>/Day</h6>

                        </div>
                        <div class="car location">
                            <i class="fa-solid fa-location-dot"></i>
                            <h6>California</h6>

                        </div>

                    </div>
                    <h2>DMC Delorean</h2>
                    <button class="btn-2 btn-car">
                        <p>Book Now</p>
                        <i class="fa-solid fa-phone"></i>
                    </button>

                </div>
          
            </div>

          <!--Car #2-->
          <div class="collection-car-item">
            <img src="img/shelby mustang GT500.jpg" alt="img">
            <div class="car-info-container">
                <div class="car-info">
                    <div class="car-price">
                        <h5>Ksh 9000</h5>
                        <h6>/Day</h6>

                    </div>
                    <div class="car location">
                        <i class="fa-solid fa-location-dot"></i>
                        <h6>Tokyo</h6>

                    </div>

                </div>
                <h2>Mustang GT500</h2>
                <button class="btn-2 btn-car">
                    <p>Book Now</p>
                    <i class="fa-solid fa-phone"></i>
                </button>

            </div>
      
        </div>


        <!--Car #3-->
        <div class="collection-car-item">
            <img src="img/1962 ferrari gto.jpg" alt="img">
            <div class="car-info-container">
                <div class="car-info">
                    <div class="car-price">
                        <h5>Ksh 7000</h5>
                        <h6>/Day</h6>

                    </div>
                    <div class="car location">
                        <i class="fa-solid fa-location-dot"></i>
                        <h6>Italy</h6>

                    </div>

                </div>
                <h2>1992 Ferrari GTO</h2>
                <button class="btn-2 btn-car">
                    <p>Book Now</p>
                    <i class="fa-solid fa-phone"></i>
                </button>

            </div>
      
        </div>

        <!--Car #4-->
        <div class="collection-car-item">
            <img src="img/MERCEDES BENZ 300SL.jpg" alt="img">
            <div class="car-info-container">
                <div class="car-info">
                    <div class="car-price">
                        <h5>Ksh 10,000</h5>
                        <h6>/Day</h6>

                    </div>
                    <div class="car location">
                        <i class="fa-solid fa-location-dot"></i>
                        <h6>London</h6>

                    </div>

                </div>
                <h2>Mercedes Benz 300sl</h2>
                <button class="btn-2 btn-car">
                    <p>Book Now</p>
                    <i class="fa-solid fa-phone"></i>
                </button>

            </div>
      
        </div>


        <!--Car #5-->
        <div class="collection-car-item">
            <img src="img/chevy monte carlo pink.jpg" alt="img">
            <div class="car-info-container">
                <div class="car-info">
                    <div class="car-price">
                        <h5>Ksh 12,000</h5>
                        <h6>/Day</h6>

                    </div>
                    <div class="car location">
                        <i class="fa-solid fa-location-dot"></i>
                        <h6>Hong Kong</h6>

                    </div>

                </div>
                <h2>Chevy Monte Carlo</h2>
                <button class="btn-2 btn-car">
                    <p>Book Now</p>
                    <i class="fa-solid fa-phone"></i>
                </button>

            </div>
      
        </div>


        <!--Car #6-->
        <div class="collection-car-item">
            <img src="img/JAGUAR XK120.jpg" alt="img">
            <div class="car-info-container">
                <div class="car-info">
                    <div class="car-price">
                        <h5>Ksh 12,000</h5>
                        <h6>/Day</h6>

                    </div>
                    <div class="car location">
                        <i class="fa-solid fa-location-dot"></i>
                        <h6>Las Vegas</h6>

                    </div>

                </div>
                <h2>1950 Jaguar XK120</h2>
                <button class="btn-2 btn-car">
                    <p>Book Now</p>
                    <i class="fa-solid fa-phone"></i>
                </button>

            </div>
      
        </div>


        </div>

        <button class="btn-car btn-herocar">
            <p>See All Cars</p>
            <i class="fa-solid fa-arrow-right-long"></i>
        </button>




      </section>
      <!--Collection Section End-->


      <!--Review Section-->
      <section class="review" id="review">
        <h1>Hear What Our Clients Say ✨</h1>
        <div class="review-container">
             <!--Review #1-->
            <div class="review-item">
                 <p>
                    Renting with <b class="accent">MetroRentally</b> was an absolute breeze!
                    From booking online to picking up the car, everthing was smooth and 
                    efficient. 
                 </p>
                 <div class="review-people">
                    <img src="img/per2.jpg" alt="image">
                    <h5>Sarah H.</h5>

                 </div>
            </div>


             <!--Review #2-->
            <div class="review-item">
                <p>
                   I can't recommend <b class="accent">MetroRentally</b> enough! Their
                   diverse fleet allowed me to choose the perfect car for my weekend 
                   gateaway.
                </p>
                <div class="review-people">
                   <img src="img/per1.jpg" alt="image">
                   <h5>Mark W.</h5>

                </div>
           </div>


             <!--Review #3-->
           <div class="review-item">
            <p>
               <b class="accent">MetroRentally</b> exceeded all my expectations! Their
               flexibility and good service made me want to work with them even more.
            </p>
            <div class="review-people">
               <img src="img/per3.jpg" alt="image">
               <h5>Shallom B.</h5>

            </div>
       </div>

        </div>
      </section>
      <!--Review Section End-->


      <!--Footer Section-->
      <footer class="index-footer">
        <div class="callout">
            <h2>Let's drive with MetroRentally Today!</h2>
            <p class="callout-description">
                Need assistance or ready to reverse your wheels? Contact us now for 
                prompt service and effortless booking!
             </p>
             <div class="callout-button">
                <button class="btn-2 btn-callout" onclick="window.location.href='collection.html'">
                    <p>Check Our Cars</p>
                    <i class="fa fa-arrow-right"></i>
                </button>


                <button class="btn-2 btn-callout btn-callout-black" onclick="window.location.href='contact.html'">
                    <p>Book Now</p>
                    <i class="fa fa-phone"></i>
                </button>

             </div>
        </div>


        <div class="footer-bottom">
            <a href="/" class="footer-brand">Metro<b class="accent">Rentally</b></a>
            <div class="socials">
                <a href="/" class="social-item">
                    <i class="fa-brands fa-facebook-f"></i>
                </a> 
                <a href="/" class="social-item">
                    <i class="fa-brands fa-instagram"></i>
                </a> 
                <a href="/" class="social-item">
                    <i class="fa-brands fa-twitter"></i>
                </a> 
                <a href="/" class="social-item">
                    <i class="fa-brands fa-telegram"></i>
                </a> 
            </div>
        </div>
        <a href="https://wa.me/254740621373" class="whatsapp-chat" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png" alt="WhatsApp Chat">
        </a>
        

      </footer>
      <!--Footer Section End-->

</body>
</html>
