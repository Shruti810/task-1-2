

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title> 
        <link rel="stylesheet" href="style.css" />
        <link
         rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body>
        <nav>
            <div class="left dflex">
                <div class="item">
                    <i class="fa fa-map-marker"></i>
                    <p>Hello,</p>
                    <h5>enter your address</h5>
                </div>
            </div>
            <div class="SearchBox dflex">
                <div class="box">
                    <div class="dflex">
                        <button class="all" type="button">
                            All<i class="fa fa-caret-down"></i>
                        </button>
                        <input type="text">
                        <button class="search" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="right dflex">
                <div class="item">
                    <i class="fa fa-flag"></i><i class="fa fa-caret-down"></i>
                </div>
                <div class="item">
                    
                <button style="background-color: black;"><a  href="login.php">login</a></button>
                </div>
                <div class="item">
                    <p>Refund</p>
                    <h5>& Order</h5>
                </div>
                <div class="item">
                    <i class="fa fa-cart-plus fa-2x">Cart</i>
                </div>
            </div>
        </nav>
        <nav class="subnavigation">
        <ul class="submenu">
            <a href="#"><i class="fa fa-bars"></i><li>All</li></a>
            <a href="#"><li>Gift Cards</li></a>
            <a href="#"><li>Pet Suppplies</li></a>
            <a href="#"><li>Business <i class="fa fa-sort-desc"></i></li></a>
            <a href="#"><li>video games</li></a>
            <a href="#"><li>coupons</li></a>
            
        </ul>
        <ul>
            <a href="#">
                <i class="fa fa-amazon bg"></i>
                <li class="li">Shopping made easy|Download the app</li>
            </a>
        </ul>
        </nav>
          <div class="slideshow-container">
          
            <div class="mySlides fade">
              <img src="slide1.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <img src="slide2.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <img src="slide3.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
              <img src="slide4.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
              <img src="slide5.jpg" style="width:100%">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            </div>
            <script>
                var slideIndex = 1;
                showSlides(slideIndex);
                
                // Next/previous controls
                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }
                
                // Thumbnail image controls
                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }
                
                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                }
                </script>
                <h1 class="align-center" style="color:black">Products</h1>
            <section class="product-list">
                
                    <div class="card">
                       <div class="title" style="color:black">Sneakers</div>
                       <div class="image">
                           <img src="1.jpg">
                           
                       </div>
                       <div class="text" style="color:black">Under $999</div>
                       
                            <button class="buy-button">
                                Buy Now
                            </button>
                       
                    </div>
                <div class="card">
                    <div class="title" style="color:black">Women's Shirt</div>
                 <div class="image">
                     <img src="21.jpg">
                 </div>
                 <div class="text" style="color:black">
                    $350
                </div>
                <button class="buy-button">Buy NOW</button>
                </div>
                <div class="card">
                    <div class="title" style="color:black">Wrist Watch

                    </div>
                 <div class="image">
                     <img src="33.jpg">
                 </div>
                 <div class="text" style="color:black">
                    $1,500
                </div>
                <button class="buy-button"><a  href="pd.html">Buy Now</a></button>
                </div>
                <div class="card">
                    <div class="title" style="color:black">APPLE iPhone

                    </div>
                 <div class="image">
                     <img src="41.jpeg">
                 </div>
                 <div class="text" style="color:black">
                    $32,999
                </div>
                <button class="buy-button">Buy NOW</button>
                </div>
            </section>
            <footer class="footer">
                <div class="down">
                    <div class="row">
                        <div class="footer-col">
                            <h4>company</h4>
                            <ul>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">our services</a></li>
                                <li><a href="#">privacy policy</a></li>
                                
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>get help</h4>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">shipping</a></li>
                                <li><a href="#">returns</a></li>
                                <li><a href="#">order status</a></li>
                                <li><a href="#">payment options</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>online shop</h4>
                            <ul>
                                <li><a href="#">watch</a></li>
                                <li><a href="#">bag</a></li>
                                <li><a href="#">shoes</a></li>
                                <li><a href="#">dress</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>follow us</h4>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
           </footer>
         

           
    </body>
    </html>
