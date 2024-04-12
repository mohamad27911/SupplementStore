<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "mydatabase";
  $conn = mysqli_connect($host, $user, $password, $dbname);
  
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!empty($email) && !empty($password)) {
  
      
  
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
  
        if (mysqli_num_rows($result) == 1) {
          header("Location: home.php");
          exit();
        } 
      }
    
  }
  mysqli_close($conn);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
     <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/86e9731b96.js" crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;700&display=swap"
    rel="stylesheet" />
    <!-- Css File -->
    <link rel="stylesheet" href="assets/css/Register.css">
    
    <!-- <script src="assets/js/Login.js" defer></script>  -->
</head>
<body id="login">
    <div class="container">
        <div class="header">
            <h2>Login</h2>
        </div>
        <form action="login.php" method="POST" class="form" id="form">
                <div class="form-control">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"  placeholder="user_1831@gmail.com">
            <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-circle-exclamation"></i>
            <small>Error Message</small>
        </div>
        <div class="form-control">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
            <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-circle-exclamation"></i>
            <small>Error Message</small>
        </div>
      <button type="submit" class="login">Sign in</button>
      <div class="already">Don't have an account ? <a href="Register.php">Register</a></div>
      </form>
    </div>
    <!-- <script>const form = document.getElementById("form");
const email = document.getElementById("email");
const password = document.getElementById("password");

form.addEventListener("submit", (event) => {
  event.preventDefault();
  validateForm();
});

function validateForm() {
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();

  if (emailValue === "") {
    setError(email, "Email cannot be blank");
  } else if (!isValidEmail(emailValue)) {
    setError(email, "Please enter a valid email address");
  } else {
    setSuccess(email);
  }

  if (passwordValue === "") {
    setError(password, "Password cannot be blank");
  } else {
    setSuccess(password);
  }

  if (emailValue !== "" && passwordValue !== "") {
    form.submit();
  }
}

function setError(input, message) {
  const formControl = input.parentElement;
  const errorMessage = formControl.querySelector("small");

  input.classList.remove("success");
  input.classList.add("error");
  errorMessage.innerText = message;
}

function setSuccess(input) {
  const formControl = input.parentElement;

  input.classList.remove("error");
  input.classList.add("success");
}

function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}
</script> -->
</body>
</html>