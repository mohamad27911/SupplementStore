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
        <li><a href="shop.php" class="active">Shop</a></li>
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
  <!-- Cart End -->  <!--Hero Start -->
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
        <img src="assets/images/WeightLoss/wl2.jpg" class="product-img" alt="" />
        <div class="des">
          <span> Old School Labs</span>
          <h5 class="product-title">Vintage Burn Fat Burner</h5>
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

      <div class="pro Whey">
        <img src="assets/images/Vitamins/v4.png" class="product-img" alt="" />
        <div class="des">
          <span>Optimum Nutrition</span>
          <h5 class="product-title">Opti-Men Multivitamin</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 class="price">$45</h4>
        </div>
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro vitamin">
        <img src="assets/images/PreWorkout/pw4.jpeg" class="product-img" alt="" />
        <div class="des">
          <span>Evlution Nutrition</span>
          <h5 class="product-title">ENGN Shred Pre Workout Powder</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 class="price">$34.99</h4>
        </div>
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>

      </div>
      <div class="pro preworkout">
        <img src="assets/images/Creatine/cr3.jpeg" class="product-img" alt="" />
        <div class="des">
          <span>Myprotein</span>
          <h5 class="product-title">Creatine Monohydrate Powder</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 class="price">$16</h4>
        </div>
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro vitamin">
        <img src="assets/images/Protein/pr3.jpeg" class="product-img" alt="" />
        <div class="des">
          <span>Dymatize</span>
          <h5 class="product-title">ISO100 Hydrolyzed Protein Powder</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 class="price">$79.99</h4>
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
        <img src="assets/images/Protein/mg1.jpeg" class="product-img" alt="" />
        <div class="des">
          <span>MuscleTech</span>
          <h5 class="product-title">Nitro-Tech Whey Protein <br> (+ free shaker)</h5>
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
      <div class="pro WeightLoss">
        <img src="assets/images/fit/f3.webp" class="product-img" alt="" />
        <div class="des">
          <span>Xtend</span>
          <h5 class="product-title">Scivation Xtend BCAA Powder</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 class="price">$22.99</h4>
        </div>
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro Whey">
        <img src="assets/images/PreWorkout/pw3.jpeg" class="product-img" alt="" />
        <div class="des">
          <span>JYM Supplement Science</span>
          <h5 class="product-title">Pre JYM Pre Workout Powder</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 class="price">$37.99</h4>
        </div>
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro preworkout">
        <img src="assets/images/WeightLoss/wl4.jpeg" class="product-img" alt="" />
        <div class="des">
          <span>NOW Sports</span>
          <h5 class="product-title">L-Carnitine Liquid</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 class="price">$16.99</h4>
        </div>
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro creatine">
        <img src="assets/images/Creatine/cr4.jpeg" class="product-img" alt="" />
        <div class="des">
          <span>Kaged Muscle</span>
          <h5 class="product-title">Creatine HCl Powder </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 class="price">$21.99</h4>
        </div>
        <button type="button" class="cart-icon add-cart"><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="pro vitamin">
        <img src="assets/images/WeightLoss/wl3.png" class="product-img" alt="" />
        <div class="des">
          <span>Evlution Nutrition</span>
          <h5 class="product-title">LeanMode Fat Burner</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4 class="price">$24.99</h4>
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
    <a href="shop.php" ><i class="fa-solid fa-arrow-left"></i></a>
    <a href="shop2.php"class="active">2</a>
    <a href="shop3.php"><i class="fa-solid fa-arrow-right"></i></a>
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