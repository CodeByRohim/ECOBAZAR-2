<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoBazar </title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/venobox.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/shop.css">
    <link rel="stylesheet" href="./css/shopping cart.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/newsletter and footer.css">
</head>

<body> -->
<?php include 'header.php';?>
<!-- *MAIN CONTENT START HERE -->

 <!-- Breadcrumbs Start Here -->
 <section id="Breadcrumbs">
   <div class="container">
      <ul>
         <li class="d-flex align-items-center">
            <a href="./index.html" class="homeIcom">
               <iconify-icon icon="fluent:home-16-regular" width="20" height="22"></iconify-icon>
            </a>
            <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
         </li>
         <li class="d-flex align-items-center">
            <a href="#" class="activ">Shopping Cart</a>
         </li>
      </ul>
   </div>
</section>
<!-- Breadcrumbs End Hear -->

<!-- Shopping Cart Start Here -->
 <section id="ShoppingCart">
  <div class="container">
    <h2>My Shopping Cart</h2>
    <div class="row justify-content-between">
      <div class="col-12 col-lg-8">
       <div class="heading">
        <ul class="cartList">
          <div class="col-lg-4">
            <li class="">
              <h4>PRODUCT</h4>
              </li>
          </div>
          <div class="col-lg-2">
            <li class="">
              <h4>PRICE</h4>
            </li>
          </div>
          <div class="col-lg-3">
            <li class="">
              <h4>QUANTITY</h4>
            </li>
          </div>
          <div class="col-lg-2">
            <li class="">
              <h4>SUBTOTAL</h4>
            </li>
          </div>
          <div class="col-lg-1 d-none d-lg-block">
            <li class="">
              <h4></h4>
            </li>
          </div>
        </ul>
       </div>
       <!-- product 1 -->
        <div class="cartItem"  data-item-id="1">
          <div class="cartItemWrapper d-flex align-items-center justify-content-betwee">
            <div class="col-lg-4 cartItemImg d-flex align-items-center">
              <img class="img-fluid" src="./images/product img/Image.svg" alt="">
              <div class="cartItemText">
                <h4>Organic Mango</h4>
              </div>
            </div>
            
            <div class="col-lg-2 cartItemPrice">
              <h4>$<span class="price">14.00</span></h4>
            </div>
            <div class="col-lg-3 cartItemQuantity">
              <div class="quantity">
                <button class="decrementBtn">-</button>
                <input class="quantity2" type="number" value="1">
                <button class="incrementBtn">+</button>
              </div>
            </div>
            <div class="col-lg-2 cartItemTotal">
              <h4>$<span class="subtotal">14.00</span></h4>
            </div>
            <div class="col-lg-1 cartItemAction text-end">
              <a href="#"><i class="fa-solid fa-xmark"></i></a>
            </div>
          </div>
      </div>
      <!-- product 2 -->
      <div class="cartItem"  data-item-id="2">
        <div class="cartItemWrapper d-flex align-items-center justify-content-betwee">
          <div class="col-lg-4 cartItemImg d-flex align-items-center">
            <img class="img-fluid" src="./images/product img/capsicum.png" alt="">
            <div class="cartItemText">
              <h4>Red Capsicum</h4>
            </div>
          </div>
          
          <div class="col-lg-2 cartItemPrice">
            <h4>$<span class="price">14.00</span></h4>
          </div>
          <div class="col-lg-3 cartItemQuantity">
            <div class="quantity">
                <button class="decrementBtn">-</button>
                <input class="quantity2" type="number" value="1">
                <button class="incrementBtn">+</button>
            </div>
          </div>
          <div class="col-lg-2 cartItemTotal">
            <h4>$<span class="subtotal">14.00</span></h4>
          </div>
          <div class="col-lg-1 cartItemAction text-end">
            <a href="#"><i class="fa-solid fa-xmark"></i></a>
          </div>
        </div>
    </div>
   
<!-- product return and update -->
<div class="cartItem ReturnUpdate">
  <div class="cartItemWrapper d-flex align-items-center justify-content-betwee">
    <div class="col-lg-6 cartItemImg">
        <a class="bottomBtn" href="#">Return to shop</a>
    </div>

    <div class="col-lg-6 cartItemAction text-end">
      <a class="bottomBtn" href="#">Update Cart</a>
    </div>
  </div>
</div>
<!-- coupon code -->
<div class="cartItem coupon">
  <div class="cartItemWrapper d-flex align-items-center">
    <div class="col-lg-3 cartCoupon">
        <p class="bottomBtn">Coupon Code</p>
    </div>

    <div class="col-lg-9 couponInput text-end">
      <!-- <a class="bottomBtn" href="#">Update Cart</a> -->
       <input type="text" placeholder="Enter code">
       <button>Apply Coupon</button>
    </div>
  </div>
</div>
</div>


       <!-- right side -->
       <div class="right col-12 col-lg-4">
        <div class="card">
          <div class="card-header">
            Cart Total
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between br">Subtotal: <span>$<span class="total">84.00</span></span></li>
            <li class="list-group-item d-flex justify-content-between br">Shipping: <span>Free</span></li>
            <li class="list-group-item d-flex justify-content-between">Total: <span>$ <span id="total">84.00</span></span></li>
          </ul>
          <!--  -->
          <a class="checkout" href="./checkout.html">
              <!-- <button> -->
               Proceed to checkout
            <!-- </button> -->
            </a>
        </div>
       </div>
       </div>
 </section>
<!-- Shopping Cart End Here -->

<!-- *MAIN CONTENT ENDS HERE -->
<?php include 'footer.php';?>
</main>
<!-- <script>
      let incrementBtn = document.querySelector(".incrementBtn");
      let quantityInput = document.querySelector(".quantity input");

    function increment() {
      let value = Number(quantityInput.value);
      quantityInput.value = value + 1;
      let price = document.getElementById("price");
      let subtotal = document.getElementById("subtotal");
    increment.value = value*price;

    }

    incrementBtn.addEventListener("click", increment);

    let decrementBtn = document.querySelector(".decrementBtn");

    function decrement() {
      let value = Number(quantityInput.value);
      if (value > 1) {
        quantityInput.value = value - 1;
      }
    }
    decrementBtn.addEventListener("click", decrement);

    function convertToPositiveNumber() {
      let positiveNum = Math.abs(quantityInput.value);
      quantityInput.value = positiveNum;
    }
    quantityInput.addEventListener("keyup", convertToPositiveNumber);
</script> -->

<!-- <script>
  let incrementBtn = document.querySelector(".incrementBtn");
  let decrementBtn = document.querySelector(".decrementBtn");
  let quantityInput = document.querySelector(".quantity input");

  function updateSubtotalAndTotal() {
    let price = Number(document.getElementById("price").innerText); // Price of a single item
    let quantity = Number(quantityInput.value); // Current quantity
    let subtotal = document.getElementById("subtotal");
    let total = document.getElementById("total");
    let stotal = document.getElementById("stotal");
    // Calculate and update subtotal
    let subtotalValue = price * quantity;
    subtotal.innerText = subtotalValue;

    // Assuming other costs like tax/shipping can be included; for now, total equals subtotal
    total.innerText = subtotalValue;
    stotal.innerText = subtotalValue;
  }

  function increment() {
    let value = Number(quantityInput.value);
    quantityInput.value = value + 1;

    // Update subtotal and total
    updateSubtotalAndTotal();
  }

  function decrement() {
    let value = Number(quantityInput.value);
    if (value > 1) {
      quantityInput.value = value - 1;

      // Update subtotal and total
      updateSubtotalAndTotal();
    }
  }

  function convertToPositiveNumber() {
    let value = Math.abs(Number(quantityInput.value)); // Ensure positive number
    quantityInput.value = value > 0 ? value : 1; // Default to 1 if 0 or negative

    // Update subtotal and total
    updateSubtotalAndTotal();
  }

  incrementBtn.addEventListener("click", increment);
  decrementBtn.addEventListener("click", decrement);
  quantityInput.addEventListener("keyup", convertToPositiveNumber);


</script> -->

<script>
  function updateCartItemSubtotal(cartItem) {
  let price = Number(cartItem.querySelector(".price").innerText); // Get price
  let quantity = Number(cartItem.querySelector(".quantity2").value); // Get quantity
  let subtotal = cartItem.querySelector(".subtotal"); // Subtotal element

  // Calculate subtotal
  let subtotalValue = price * quantity2;
  subtotal.innerText = subtotalValue;

  // Update the total for all items
  updateCartTotal();
}

function updateCartTotal() {
  let cartItems = document.querySelectorAll(".cartItem"); // Get all cart items
  let total = 0;

  // Loop through each cart item and calculate the total
  cartItems.forEach((item) => {
    let subtotal = Number(item.querySelector(".subtotal").innerText);
    total += subtotal;
  });

  // Update the total in the DOM
  document.getElementById("total").innerText = total;
}

// Event listeners for increment and decrement buttons
document.querySelectorAll(".incrementBtn").forEach((button) => {
  button.addEventListener("click", function () {
    let cartItem = this.closest(".cartItem"); // Find the parent cart item
    let quantityInput = cartItem.querySelector(".quantity");
    quantityInput.value = Number(quantityInput.value) + 1;

    // Update subtotal and total
    updateCartItemSubtotal(cartItem);
  });
});

document.querySelectorAll(".decrementBtn").forEach((button) => {
  button.addEventListener("click", function () {
    let cartItem = this.closest(".cart-item");
    let quantityInput = cartItem.querySelector(".quantity");
    let currentValue = Number(quantityInput.value);

    if (currentValue > 1) {
      quantityInput.value = currentValue - 1;
      updateCartItemSubtotal(cartItem);
    }
  });
});

// Event listener for manual quantity input
document.querySelectorAll(".quantity2").forEach((input) => {
  input.addEventListener("keyup", function () {
    let cartItem = this.closest(".cartItem");
    let value = Math.abs(Number(this.value)) || 1; // Ensure positive value
    this.value = value; // Set valid value
    updateCartItemSubtotal(cartItem);
  });
});

</script>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/jquery-3.7.1.min.js"></script>
<script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
<script src="./js/slick.min.js"></script>
 <script src="./js/mixitup.min.js"></script>
<script src="./js/venobox.min.js"></script> 
<script src="./js/app.js"></script>
<!-- <script src="./js/header and footer.js"></script> -->
</body>
</html>