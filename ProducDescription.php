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
<script src="assets/js/ProductDescription.js" defer></script>
  <title>PeakPerformance</title>
</head>
<style>
  a.gts {
  color: #fff;
  text-decoration: none;
}
.fa-basket-shopping{
  color:#088178;
}
</style>
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
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php" class="active">Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="profile.php">Sign up</a></li>
        <button id="lg-bag" type="button"><a href="shop2.php"><i class="fa-solid fa-basket-shopping"></i></a></button>
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
  <!-- Description Start -->
  <section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="assets/images/HomePageImages/ashwapic1.webp" alt="" width="100%" id="MainImg">
    
    <div class="small-image-group">
      <div class="small-img-col">
          <img src="assets/images/HomePageImages/Ashwapic2.png" alt="" width="100%" class="small-img">
      </div>
    <div class="small-img-col">
        <img src="assets/images/HomePageImages/ashwapic1.webp" alt="" width="100%" class="small-img">
        </div>
        <div class="small-img-col">
            <img src="assets/images/HomePageImages/ashwapic4.webp" alt="" width="100%" class="small-img">
        </div>
       
        
      </div>
    </div>
    <div class="single-pro-details">
      <h6>Vitamins</h6>
      <h4>BioTechUSA Ashwagandha</h4>
      <h2><del>20$</del>&nbsp;  &nbsp; 16$  </h2>
      <!-- <input type="number" name="" value="1" min="1" max="10"> -->
      <button class="normal"><a href="shop2.php" class="gts">Go to shop</a></button>
      <h4>Product Details</h4>
      <span>BioTechUSA Ashwagandha Root Extract Capsules to support your immune system and optimal stress level. Dietary supplement capsules containing Ashwagandha extract.
      </span>
    </div>
  </section>

  <!-- Description End -->

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
      
  </section>
  <!-- Featured products End -->


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
      <p><b>Address: </b></p>
      <p><b>Phone: </b> <a href="tel:+96181059460">81059460</a> / <a href="tel:+96176026658">76026658</a></p>
      <p><b>Hours: </b></p>

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
      <a href="">View Cart</a>
      <a href="">Checkout</a>
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