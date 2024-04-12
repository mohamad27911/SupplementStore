<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- css file -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/86e9731b96.js" crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;700&display=swap" rel="stylesheet" />
  <!-- Js File -->
  <script src="assets/js/main.js" defer></script>
  <title>PeakPerformance</title>
<style>
  .mailt{
    color: #465b52;
    text-decoration: none;
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
        <li><a href="index.php" >Home</a></li>
        <li><a href="shop.php" >Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
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
  <!--contact Start -->
  <section id="page-header" class="about-header">
    <h2>#let's_talk</h2>
    <p>LEAVE A MESSAGE, We love to hear from you!</p>
  </section>

  <section id="contact-details" class="section-p1">
    <div class="details">
      <span>GET IN TOUCH</span>
      <h2>Visit one of our agency locations or contact us today</h2>
      <h3>Head Office</h3>
      <div>
        <li>
          <i class="fa-solid fa-location-dot"></i>
          <p>Anout main road</p>
        </li>
        <li>
          <i class="far fa-envelope"></i>
          <p><a href="mailto:mohamad.mar72@gmail.com" class="mailt">mohamad.mar72@gmail.com</a></p>
        </li>
        <li>
          <i class="fas fa-phone-alt"></i>
          <p><a href="tel:+96176026658" class="mailt">76026658</a></p>
        </li>
        <li>
          <i class="far fa-clock"></i>
          <p>Monday to Saturday: 9:00am to 7:00pm </p>
        </li>
      </div>
    </div>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13289.168358523688!2d35.474709946383534!3d33.62366774090489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slb!4v1683045783434!5m2!1sen!2slb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <section id="from-details">
    <form action="">
      <span>LEAVE A MESSAGE</span>
      <h2>We love to hear from you</h2>
      <input type="text" placeholder="Your Name">
      <input type="text" placeholder="E-mail">
      <input type="text" placeholder="Subject">
      <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
      <button class="normal">Submit</button>
      <br>
    </form>
  </section>




  <!--contact End -->


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