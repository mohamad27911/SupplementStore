<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- css file -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/86e9731b96.js" crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;700&display=swap"
    rel="stylesheet" />
  <!-- JavaScript File -->
  <script src="assets/js/main.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <title>PeakPerformance</title>
  <style>
    .asale{
      color: #fff;
    }
  </style>
</head>

<body>
    <!-- NavBar Start -->
    <header id="header">
      <nav class="navbar">
          <a href="#" class="logo-link">
              <img src="assets/images/HomePageImages/whey.png " class="logo" alt="" />
              <div class="LogoName">
                  <span class="Peak">Peak<span class="perfo">Performance</span></span>
              </div>
          </a>
      </nav>
      <div>
          <ul id="navbar">
              <li><a  href="home.php" class="active">Home</a></li>
              <li><a href="shop.php">Shop</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="index.php">Sign out</a></li>
              <button id="lg-bag" type="button"><i class="fa-solid fa-basket-shopping"></i></button>
              <a href="#" id="close"><i class="fa-solid fa-x"></i></a>
          </ul>
      </div>
      <div id="mobile">
          <button id="lg-bag" type="button"><i class="fa-solid fa-basket-shopping"></i></button>
          <i id="bar" class="fa-solid fa-bars"></i>
      </div>
  </header>
  <!-- NavBar End -->


 <!-- Cart Start -->
 <div class="container">
  <div class="cart">
    <h2 class="cart-title">Your Cart</h2>
    <div class="cart-content">
      <!-- Cart items will be added here -->
    </div>
    <!-- Total -->
    <div class="total">
      <div class="total-title">Total</div>
      <div class="total-price">0$</div>
    </div>
    <!-- Buy Button -->
    <button type="button" class="btn-buy">Buy Now</button>
    <i class="fa-solid fa-xmark" id="close-cart"></i>
  </div>
</div>
<!-- Cart End -->

  <!--Hero Start -->
  <section id="hero">
    <h4>Exclusive Offers</h4>
    <h2>Get Fit and Stay Healthy</h2>
    <h1>With Our Premium Supplements</h1>
    <p>Save more with coupons &amp; up to 70% off!</p>
    <button>Shop Now</button>
  </section>
  <!--Hero End -->

  <marquee behavior="scroll" scrollamount="20">
    <h2>Save Up to <span class="sale50">50% Off</span> on the new Ashwagandha Supplement</h2>
  </marquee>
  
  
  
  <!-- Banner Start -->
  <section id="banner " class="section-m1 banner1">
   
   
    <img src="assets/images/HomePageImages/ashwaghanda.png" alt="">
    <div class="infoc">
    <h1 class="asale">BioTechUSA Ashwagandha Sale</h1>
    <a href="ProducDescription.php">
      <button class="normal ashwa">Shop Now</button>
    </a>
    </div>
    
  </section>
  <!-- Banner End -->

  <hr>

  <!-- Featured products Start -->

    <section id="product1" class="section-p1">
      <h2>Featured Products</h2>
      <p>Boost Your Performance with Our New Range of Sports Supplements</p>
      <div class="pro-container">
        <div class="pro">
          <img src="assets/images/Creatine/cr1.jpg" class="product-img" alt="" />
          <div class="des">
            <span>Levrone</span>
            <h5 class="product-title">Gold Creatine</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4 class="price">20$</h4>
          </div>
          <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
        </div>
          <div class="pro">
            <img src="assets/images/Protein/pr1.jpg" class="product-img" alt="" />
            <div class="des">
              <span>Optimum Nutrition</span>
              <h5 class="product-title">Gold Standard Whey Protein</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4 class="price">87$</h4>
            </div>
            <button type="button" class="cart-icon add-cart" ><i class="fa-solid fa-cart-shopping"></i></button>
          </div>
          <div class="pro">
            <img src="assets/images/Vitamins/v1.jpg"  class="product-img" alt="" />
            <div class="des">
              <span>HealthKart</span>
              <h5 class="product-title">HealthKart Multivitamin</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4 class="price">8$</h4>
            </div>
            <button type="button" class="cart-icon add-cart" ><i class="fa-solid fa-cart-shopping"></i></button>
          </div>
          <div class="pro">
            <img src="assets/images/PreWorkout/pw1.jpg" class="product-img" alt="" />
            <div class="des">
              <span>BSN</span>
              <h5 class="product-title">No-Xplode Preworkout</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4 class="price">$36.95</h4>
            </div>
            <button type="button" class="cart-icon add-cart" ><i class="fa-solid fa-cart-shopping"></i></button>
          </div>
          <div class="pro">
            <img src="assets/images/Vitamins/v2.jpg" class="product-img" alt="" />
            <div class="des">
              <span>Nature Made</span>
              <h5 class="product-title">Fish Oil 1000mg</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4 class="price">10$</h4>
          </div>
            <button type="button" class="cart-icon add-cart" ><i class="fa-solid fa-cart-shopping"></i></button>
          </div>
          <div class="pro">
            <img src="assets/images/Fit/f1.jpeg" class="product-img" alt="" />
            <div class="des">
              <span>Honey Badger</span>
              <h5 class="product-title">BCAA Amino Acids</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4 class="price">27.95$</h4>
            </div>
            <button type="button" class="cart-icon add-cart" ><i class="fa-solid fa-cart-shopping"></i></button>
          </div>
          <div class="pro">
            <img src="assets/images/Fit/f2.webp" class="product-img" alt="" />
            <div class="des">
              <span>Gaspari Nutrition</span>
              <h5 class="product-title">Glutamine 300g</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4 class="price">20$</h4>
            </div>
            <button type="button" class="cart-icon add-cart" ><i class="fa-solid fa-cart-shopping"></i></button>
          </div>
          <div class="pro">
            <img src="assets/images/WeightLoss/wl1.jpg" class="product-img" alt="" />
            <div class="des">
              <span>Dietary Supplements</span>
              <h5 class="product-title">Fat Burner</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4 class="price">$28.75</h4>
            </div>
            <button type="button" class="cart-icon add-cart" ><i class="fa-solid fa-cart-shopping"></i></button>
          </div>
  </section>
  <!-- Featured products End -->

  <!-- Banner Start -->
  <section id="banner" class="section-m1">
    <h4>Supplement Deals</h4>
    <h2>Save Up to <span>70% Off</span> on All Supplements & Vitamins</h2>
    <button class="normal">Explore More</button>
  </section>
  <!-- Banner End -->

  <!-- New Arrival Start -->
  <section id="product1" class="section-p1">
    <h2>New Arrival</h2>
    <p>Boost Your Performance with Our New Range of Sports Supplements</p>
    <div class="pro-container">
      <div class="pro">
        <img src="assets/images/Protein/pr2.jpg" class="product-img" alt="" />
        <div class="des">
          <span>MusclePharm</span>
          <h5 class="product-title">Combat Whey Protein</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 class="price">$49.99</h4>
        </div>
        <button type="button" class="cart-icon add-cart" ><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro">
        <img src="assets/images/PreWorkout/pw2.jpg" class="product-img" alt="" />
        <div class="des">
          <span>Cellucor</span>
          <h5 class="product-title">C4 Original Pre-Workout</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 class="price">$29.99</h4>
        </div>
        <button type="button" class="cart-icon add-cart" ><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro">
        <img src="assets/images/Creatine/cr2.jpeg" class="product-img" alt="" />
        <div class="des">
          <span>MuscleTech</span>
          <h5 class="product-title">Platinum Creatine Monohydrate</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 class="price">$24</h4>
        </div>
        <button type="button" class="cart-icon add-cart" ><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro">
        <img src="assets/images/Vitamins/v3.jpg" class="product-img" alt="" />
        <div class="des">
          <span>Now Foods</span>
          <h5 class="product-title">Omega-3 Fish Oil</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 class="price">$12.99 </h4>
        </div>
        <button type="button" class="cart-icon add-cart" ><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
  </section>
  <!-- New Arrival End -->

  <!-- Text Banner Start -->
  <section id="banner3">
    <div class="banner-box banner-box1">
      <h2>Fuel Your Body</h2>
      <h3>With Premium Supplements</h3>
    </div>
    <div class="banner-box banner-box2">
      <h2>Unlock Your Potential</h2>
      <h3>With Science-Backed Supplements</h3>
    </div>
    <div class="banner-box banner-box3">
      <h2>Elevate Your Performance</h2>
      <h3>With High-Quality Supplements</h3>
    </div>
  </section>
  <!-- Text Banner End -->

  <!-- Footer Start -->
  <footer class="section-p1">
    <div class="col">
      <div class="logo2">
        <nav class="navbar">
          <a href="#" class="logo-link">
            <img src="assets/images/HomePageImages/whey.png" class="logo" alt="" />
            <div class="LogoName">
              <span class="Peak">Peak<span class="perfo">Performance</span></span>
            </div>
      </div>
      </a>
      </nav>
      <h4>Contact</h4>
      <p><b>Address: </b>Anout main road</p>
      <p><b>Phone: </b> <a href="tel:+96181059460">81059460</a> / <a href="tel:+96176026658">76026658</a></p>
      <p><b>Hours: </b>9:00am to 7:00pm</p>

      <div class="follow">
        <h4>Follow us</h4>
        <div class="icon">
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-youtube"></i>
          <i class="fa-brands fa-twitter"></i>
        </div>
      </div>
    </div>
    <div class="col">
      <h4>About</h4>
      <a href="about.php">About Us</a>
      <a href="contact.php">Contact Us</a>
    </div>
    <div class="col">
      <h4>My Profile</h4>
      <a href="">Sign In</a>
      <a href="">Feedback</a>
    </div>
    <br>

  </footer>
  <!-- Footer End -->

   <!-- Copyright -->
   <div class="copyright">
    <p>&copy; 2023 Mohamad Abdel Rahman & Omar Mrad . All rights reserved PeakPerformance</p>
  </div>
<!-- JavaScript file -->
<script src="assets/js/main.js"></script>


</body>

</html>