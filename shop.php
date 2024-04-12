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
        <li><a href="index.php" >Home</a></li>
        <li><a href="shop.php" class="active" >Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="Register.php">Sign up</a></li>
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
  <section id="page-header">
    <h2>#stayhome</h2>
    <p>Save more with coupons &amp; up to 70% off!</p>
  </section>
  <!--Hero End -->

  <hr>

 
  <section id="product1" class="section-p1">
    <h2>Our Products</h2>
    <p>Boost Your Performance with Our New Range of Sports Supplements</p>
    <div class="searchBox">
      <input type="text" class="searchInput" maxlength="15" id="search-input" placeholder="Search for products...">
      <button type="button" class="searchButton" id="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
    <div id="product-list" class="pro-container">
      <div class="pro creatine">
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

      <div class="pro Whey">
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
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro vitamin">
        <img src="assets/images/Vitamins/v1.jpg" class="product-img" alt="" />
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
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>

      </div>
      <div class="pro preworkout">
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
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro vitamin">
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
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro Fit">
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
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro Fit">
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
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro WeightLoss">
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
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro Whey">
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
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro preworkout">
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
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro creatine">
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
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro vitamin">
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
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
    </div>
    <p id="no-results" style="display:none">No results found.</p>
  </section>

  <!-- Products Start -->
  <!-- Featured products Start -->




  <!-- Products End -->

  <section id="pagination" class="section-p1">
    <a href="shop.php" class="active">1</a>
    <a href="shop2.php">2</a>
    <a href="shop2.php"><i class="fa-solid fa-arrow-right"></i></a>
  </section>

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



</body>

</html>