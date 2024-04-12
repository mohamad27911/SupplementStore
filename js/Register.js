
const form = document.getElementById('form');
const username = document.getElementById('username');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const email = document.getElementById('email');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();
});

function checkInputs() {
    const emailValue = email.value.trim();
    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();
    const cpasswordValue = password2.value.trim();

    if (usernameValue === '') {
        setErrorFor(username, 'Username cannot be blank');
    }
    else {
        setSuccessFor(username);
    }


    if (emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
    }
    else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Email is not valid');
    }
    else {
        setSuccessFor(email);
    }


    if (passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
    }
    else if (passwordValue.length < 8) {
        setErrorFor(password, 'Passwords must have at least 8 characters');
      }
      else if(!/[\W_]/.test(passwordValue)){
        setErrorFor(password, 'Password must contain at least one special character');
      }
      
    else {
        setSuccessFor(password);
    }


    if (cpasswordValue === '') {
        setErrorFor(password2, 'Password cannot be blank');
    }
    else if (cpasswordValue !== passwordValue) {
        setErrorFor(password2, 'Password doesn\'t match');
    }
    else {
        setSuccessFor(password2);
    }

}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    small.innerText = message;
    formControl.className = 'form-control error';
}
function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}
function isEmail(email) {
    return /^(([^[\]\\,;:\s@"]+(\.[^()[\]\\,;:\s@"]+)*)|(".+"))@[a-zA-Z0-9-.]+\.[a-zA-Z]{2,}$/.test(email);
}
