document.addEventListener('DOMContentLoaded', function() {
//Showing the bars on responsive screen
const bar = document.getElementById("bar");
const close = document.getElementById("close");
const nav = document.getElementById("navbar");

if (bar) {
  bar.addEventListener("click", function () {
    nav.classList.add("active");
  });
}

if (close) {
  close.addEventListener("click", function () {
    nav.classList.remove("active");
  });
}

// Cart

// Open The Cart And Close It
let cartIcon = document.querySelector("#lg-bag");
let mobileCartIcon = document.querySelector("#mobile #lg-bag");
let cart2 = document.querySelector(".cart");
let closeCart = document.querySelector("#close-cart");

cartIcon.addEventListener("click", () => {
  cart2.classList.toggle("active2");
});

mobileCartIcon.addEventListener("click", () => {
  cart2.classList.toggle("active2");
});

closeCart.addEventListener("click", () => {
  cart2.classList.remove("active2");
});

const addToCartButtons = document.querySelectorAll('.add-cart');

// Create empty cart object
const cart = {};

// Loop through each add to cart button
addToCartButtons.forEach((button) => {
  // Add event listener to each button
  button.addEventListener('click', () => {
    // Select product information
    const productContainer = button.parentElement;
    const productImg = productContainer.querySelector('.product-img').src;
    const productTitle = productContainer.querySelector('.product-title').textContent;
    const productPrice = productContainer.querySelector('.price').textContent;

    // Add product to cart object
    if (cart[productTitle]) {
      cart[productTitle].quantity += 1;
    } else {
      cart[productTitle] = {
        img: productImg,
        price: productPrice,
        quantity: 1
      };
    }

    // Update cart UI
    updateCartUI();
  });
});

// Function to update cart UI
function updateCartUI() {
  // Select cart element
  const cartElement = document.querySelector('.cart-content');

  // Check if cart object is empty
  if (Object.keys(cart).length === 0) {
    cartElement.innerHTML = '<h3>Your cart is empty</h3>';
    document.querySelector('.total-price').textContent = '0$';
    return;
  }

  // Create HTML for each cart item
  let cartHTML = '';
  for (const [productTitle, productInfo] of Object.entries(cart)) {
    cartHTML += `
      <div class="cart-item">
        <img src="${productInfo.img}" alt="" class="cart-img">
        <div class="detail-box">
          <div class="cart-product-title">${productTitle}</div>
          <div class="cart-price">${productInfo.price}</div>      
          <input type="number" value="${productInfo.quantity}" min="1" max="50" class="cart-quantity" name="" id="">
        </div>
        <!-- Remove Cart -->
        <i class="fa-solid fa-trash-can cart-remove" data-product-title="${productTitle}"></i>
      </div>
    `;
  }

  // Update cart element HTML
  cartElement.innerHTML = cartHTML;

  // Add event listener to each trash can icon
  const removeButtons = document.querySelectorAll('.cart-remove');
  removeButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const productTitle = button.dataset.productTitle;
      delete cart[productTitle];
      updateCartUI();
    });
  });

  // Add event listener to each input element
  const quantityInputs = document.querySelectorAll('.cart-quantity');
  quantityInputs.forEach((input) => {
    input.addEventListener('change', () => {
      const productTitle = input.parentElement.querySelector('.cart-product-title').textContent;
      const newQuantity = Number(input.value);
      cart[productTitle].quantity = newQuantity;
      updateCartUI();
    });
  });

  // Update total price
  updateTotalPrice();
}

// Function to update total price
function updateTotalPrice() {
  // Select total price element
  const totalPriceElement = document.querySelector('.total-price');

  // Calculate total price
  let totalPrice = 0;
  for (const [productTitle, productInfo] of Object.entries(cart)) {
    totalPrice += parseFloat(productInfo.price.replace('$', '')) * productInfo.quantity;
  }

  // Update total price element
  totalPriceElement.textContent = totalPrice.toFixed(2) + '$';
}

//Search bar

const searchButton = document.getElementById('search-button');
const searchInput = document.getElementById('search-input');
const productList = document.getElementById('product-list');
const noResults = document.getElementById('no-results');

function searchProducts() {
  const searchTerm = searchInput.value.toLowerCase();
  let matchFound = false;
  
  for (let i = 0; i < productList.children.length; i++) {
    const product = productList.children[i];
    const title = product.querySelector('.product-title').textContent.toLowerCase();
    
    if (title.includes(searchTerm)) {
      product.style.display = 'block';
      matchFound = true;
    } else {
      product.style.display = 'none';
    }
  }
  
  if (matchFound) {
    noResults.style.display = 'none';
  } else {
    noResults.style.display = 'block';
  }
}
const buyButton = document.querySelector('.btn-buy');

searchButton.addEventListener('click', searchProducts);
searchInput.addEventListener('keyup', function(event) {
  if (event.key === 'Enter') {
    searchProducts();
  }
});



buyButton.addEventListener('click', () => {
  // Check if the cart is empty
  if (Object.keys(cart).length === 0) {
    alert("Your cart is empty!");
    return;
  }

  // Display "Thank you for your purchase" message
  function JSalert() {
    Swal.fire({
      title: "Alert",
      text: "Your cart will be cleared After purshase!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "OK"
    }).then((result) => {
      if (result.isConfirmed) {
        // Code to clear the cart goes here
        for (const productTitle in cart) {
          delete cart[productTitle];
        }
        // Update cart UI
        updateCartUI();
        Swal.fire(
          "Success",
          "Your cart has been cleared!",
          "success"
        );
      }
    });
  }

  // Call the JSalert function only if the cart is not empty
  if (Object.keys(cart).length !== 0) {
    JSalert();
  }
});

});