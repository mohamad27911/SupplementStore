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
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    if (!empty($name) && !empty($email) && !empty($password) && !empty($password2) && $password === $password2) {
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$password')";
      if (mysqli_query($conn, $sql)) {
        header("Location: login.php");
        exit();
      } else {
        echo "Error creating record: " . mysqli_error($conn);
      }
    } else {
      echo "Please fill in all fields and make sure your passwords match";
    }
  }
  mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/86e9731b96.js"
      crossorigin="anonymous"
    ></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;700&display=swap"
      rel="stylesheet"
    />


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/86e9731b96.js"
      crossorigin="anonymous"
    ></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;700&display=swap"
      rel="stylesheet"
    />
    <!-- CSS File -->
    <link rel="stylesheet" href="assets/css/Register.css" />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h2>Create Account</h2>
      </div>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form" id="form">
        <div class="form-control">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" placeholder="user_1831" />
          <i class="fa-solid fa-circle-check"></i>
          <i class="fa-solid fa-circle-exclamation"></i>
          <small class="error-message" id="username-error"></small>
        </div>
        <div class="form-control">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="user_1831@gmail.com" />
          <i class="fa-solid fa-circle-check"></i>
          <i class="fa-solid fa-circle-exclamation"></i>
          <small class="error-message" id="email-error"></small>
        </div>
        <div class="form-control">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Password" />
          <i class="fa-solid fa-circle-check"></i>
          <i class="fa-solid fa-circle-exclamation"></i>
          <small class="error-message" id="password-error"></small>
        </div>
        <div class="form-control">
          <label for="password">Confirm Password</label>
          <input type="password" name="password2" id="password2" placeholder="Password" />
          <i class="fa-solid fa-circle-check"></i>
          <i class="fa-solid fa-circle-exclamation"></i>
          <small class="error-message" id="password2-error"></small>
        </div>
        <button type="submit">
          <div class="signup">Sign Up</div>
        </button>
        <div class="already">
          Already have an account ? <a href="login.php">Sign in</a>
        </div>
      </form>
    </div>
<!-- <script>
const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
  e.preventDefault();
  checkInputs();
});

function checkInputs() {
  // Get the values from the input fields
  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  const password2Value = password2.value.trim();

  // Check the username field
  if (usernameValue === '') {
    setErrorFor(username, 'Username cannot be blank');
  } else if (!/^[a-zA-Z0-9_]+$/.test(usernameValue)) {
    setErrorFor(username, 'Username should be alphanumeric and underscore only');
  } else {
    setSuccessFor(username);
  }

  // Check the email field
  if (emailValue === '') {
    setErrorFor(email, 'Email cannot be blank');
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, 'Email is not valid');
  } else {
    setSuccessFor(email);
  }

  // Check the password field
  if (passwordValue === '') {
    setErrorFor(password, 'Password cannot be blank');
  } else if (!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,20}$/.test(passwordValue)) {
    setErrorFor(password, 'Password should contain at least one uppercase letter, one lowercase letter, one number, one special character, and be between 8-20 characters long');
  } else {
    setSuccessFor(password);
  }

  // Check the confirm password field
  if (password2Value === '') {
    setErrorFor(password2, 'Confirm password cannot be blank');
  } else if (passwordValue !== password2Value) {
    setErrorFor(password2, 'Passwords do not match');
  } else {
    setSuccessFor(password2);
  }

  // If all fields are valid, submit the form
  if (username.classList.contains('success') && email.classList.contains('success') && password.classList.contains('success') && password2.classList.contains('success')) {
    sendData(usernameValue, emailValue, passwordValue);
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');
  const checkIcon = formControl.querySelector('.fa-circle-check');
  const exclamationIcon = formControl.querySelector('.fa-circle-exclamation');
  // Remove check icon and add exclamation icon
  checkIcon.style.display = 'none';
  exclamationIcon.style.display = 'inline-block';
  // Add error message and class
  small.innerText = message;
  formControl.classList.add('error');
  formControl.classList.remove('success');
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');
  const checkIcon = formControl.querySelector('.fa-circle-check');
  const exclamationIcon = formControl.querySelector('.fa-circle-exclamation');
  // Remove exclamation icon and add check icon
  checkIcon.style.display = 'inline-block';
  exclamationIcon.style.display = 'none';
  // Remove error message and add class
  small.innerText = '';
  formControl.classList.remove('error');
  formControl.classList.add('success');
}
function isEmail(email) {
  return /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email);
}
</script>  </body> -->
</html>
