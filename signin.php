<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>EcoBazar</title>
   <link rel="shortcut icon" href="./assets/img/fav.png" type="image/x-icon">
   <link rel="stylesheet" href="./css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link rel="stylesheet" href="./css/bootstrap.min.css">
   <link rel="stylesheet" href="./css/slick.css">
   <link rel="stylesheet" href="./css/venobox.min.css">
   <link rel="stylesheet" href="./css/styles.css"> 
   <link rel="stylesheet" href="./css/contact.css">
   <link rel="stylesheet" href="./css/productDetails.css">
   <link rel="stylesheet" href="./css/checkout.css">
   <link rel="stylesheet" href="./css/sign and sign up.css">
   <link rel="stylesheet" href="./css/responsive.css"> 
   <link rel="stylesheet" href="./css/newsletter and footer.css">
</head>

<body>
<?php include 'header.php';?>
    <!-- *Main PART START HERE -->
     <main>
              <!-- Breadcrumbs Start Here -->
      <section id="Breadcrumbs">
        <div class="container">
           <ul>
              <li class="d-flex align-items-center">
                 <a href="index.html" class="homeIcom">
                    <iconify-icon icon="fluent:home-16-regular" width="20" height="22"></iconify-icon>
                 </a>
                 <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
              </li>
              <li class="d-flex align-items-center">
                 <a href="#" class="activ">Account</a>
              </li>
              <li class="d-flex align-items-center">
                <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
                <a href="./signin.html" class="activ">Login</a>
             </li>
           </ul>
        </div>
     </section>
      <!-- Breadcrumbs End Hear -->
      <!-- Sign In start Here -->
      <section id="signIn">
        <div class="container">
           <div class="row">
                 <div class="signInForm">
                    <h2 class="text-center">Sign In</h2>
                    <form action="">
                       <div class="formGroup">
                          <input type="email" id="email" placeholder="Email">
                       </div>

                       <div class="formGroup formGroupPassword">
                          <input class="password" type="password" id="password" placeholder="Password">
                          <button type="button" class="passwordToggler"><i class="bi bi-eye-slash"></i></button>
                       </div>  

                       <div class="formGroup d-flex justify-content-between align-items-center">
                          <div class="check-remember">
                            <input type="checkbox" id="rememberMe">
                            <label for="rememberMe">Remember me</label>
                          </div>
                          <a class="forgot" href="#">Forgot Password?</a>
                       </div>

                       <div class="formGroup">
                        <button class="login" type="submit">Login</button>
                     </div>

                      <div class="formGroup">
                          <p class="text-center sign-text">Don't have an account? <a href="./signup.php">Register</a></p>
                        </div>
                    </form> 
                 </div>
               </div>
             </div>
      </section>
     <!-- Sign In End Here -->

     <!-- *MAIN CONTENT ENDS HERE -->
     <?php include 'footer.php';?>

</main>
<script>
     $(document).ready(function() {
      $('.venobox').venobox(); // Initialize VenoBox
    });
  </script>
  <script>
    // PASSWORD TOGGLER ICON
let passwordToggler = document.querySelector(".passwordToggler");
let passwordInput = document.querySelector(".formGroup .password");

function passwordShow(){
  if(passwordInput.type == "password"){
  passwordInput.type = "text";
  passwordToggler.innerHTML = '<i class="bi bi-eye"></i>'
  } else{
    passwordInput.type = "password";
     passwordToggler.innerHTML = '<i class="bi bi-eye-slash"></i>'
  }
}
passwordToggler.addEventListener("click", passwordShow);
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