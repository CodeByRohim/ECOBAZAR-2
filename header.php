  <?php 
function getErrorClass($errors): string {
    return isset($_SESSION['errors'][$errors]) ? 'is-invalid' : '';
}
?>
  <?php 
function getActiveClass($errors): string {
    return isset($_SESSION['errors'][$errors]) ? 'active' : '';
}
?>    
<?php 
function getShowClass(): string {
    return isset($_SESSION['success']) ? 'show' : '';
}
?>
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
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/shop.css">
    <link rel="stylesheet" href="./css/shopping cart.css">
    <link rel="stylesheet" href="./css/sign and sign up.css">
    <link rel="stylesheet" href="./css/wishlist.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/error.css">
    <link rel="stylesheet" href="./css/valid.css">
    <link rel="stylesheet" href="./css/blog.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/newsletter and footer.css">
</head>
<body>

    <!-- PRELOADER START HERE -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- PRELOADER END HERE -->
      <!-- HEADER STARTS HERE -->
    <header>
        <!-- HEADER TOP STARTS -->
        <section id="headerTop">
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-6 r">
                        <p class="d-flex align-items-center justify-content-center justify-content-lg-start">
                            <span class="iconify-icon "><iconify-icon icon="system-uicons:location" width="17"
                                    height="20"></iconify-icon></span>
                            Store Location: Lincoln- 344, Illinois, Chicago, USA
                        </p>
                    </div>


                    <div class="col-lg-6 text-end d-none d-lg-block">
                        <ul>
                            <li class="d-inline-block">
                                <form action="">
                                    <select>
                                        <option value="">Eng</option>
                                        <option value="">Bng</option>
                                    </select>
                                    <select>
                                        <option value="">USD</option>
                                        <option value="">BDT</option>
                                    </select>
                                </form>
                            </li>
                            <li class="d-inline-block">
                                <a href="./signin.php">Sign In / Sign Up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- HEADER TOP ENDS -->
        <!-- HEADER MIDDLE STARTS -->
        <section id="headerMiddle">
            <div class="container d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="logo col-lg-3"><img class="img-fluid" src="./images/Logo.svg" alt=""></div>

                    <div class="search col-lg-6 ">
                        <form class="" action="search.php" method="GET">
                            <div class="formGroup d-sm-none d-lg-block">
                                <span class="iconify-icon"><iconify-icon icon="weui:search-outlined" width="20"
                                        height="21"></iconify-icon></span> <input type="text" name="query" placeholder="Search">
                            </div>
                            <button type="submit">Search</button>
                            <!-- Display Results -->
                                <?php
                                    if (isset($_GET['query'])) {
                                        include 'search.php';
                                    }
                                ?>
                                
                        </form>
                    </div>

                    <div class="quickLinks col-lg-3 d-sm-none d-lg-block">
                        <ul class="text-center">

                            <li class="d-inline-block"><a href="./wishlist.php">
                                    <span class="iconify-icon">                                       
                                        <img class="img-fluid" width="30" height="32" src="./images/circum--heart.svg" alt="">
                                    </span>
                                    </span></a></li>
                            <li class="d-inline-block">
                                <a href="./shopping cart.php">
                                    <div class="d-flex cart">
                                        <div class="cartIcon">
                                            <span class="iconify-icon">
                                                <img class="img-fluid" width="34" height="26" src="./images/Rectangle.svg" alt="">
                                                <span class="cartCount">3</span>
                                                <span>
                                        </div>
                                        <div class="text">
                                            <span class="d-flex">Shopping cart:</span>
                                            <h4 class="text-start">$57.00</h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- SM MIDDLE NAVBAR START HERE -->

            <div class="container smMiddle d-lg-none">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="menuSm">
                        <a href="#smSidebar" data-bs-toggle="offcanvas" role="button" aria-controls="smSidebar">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo"><img class="img-fluid" src="./images/Logo.svg" alt=""></div>
                    <div class="smSearchBtn">
                        <button class="searchIcon"><span><i class="bi bi-search"></i></span></button>
                        <button class="closeIcon" style="display: none;"><span><i
                                    class="bi bi-x-lg"></i></span></button>
                    </div>
                </div>


                <!-- SM MENU OFFCANVAS START HERE -->
                <div class="offcanvas smSidebar offcanvas-start" tabindex="-1" id="smSidebar"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header justify-content-between">
                        <span class="offcanvas-title" id="offcanvasExampleLabel"><img class="img-fluid"
                                src="./images/Logo.svg" alt=""></span>
                        <button type="button" class=" closeBtn justify-content-end" data-bs-dismiss="offcanvas"
                            aria-label="Close"><i class="bi bi-x-lg"></i></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="" aria-labelledby="">
                            <li class=""><a class="d-flex justify-content-between align-items-center"
                                    href="index.php">Home <i class="fa-solid fa-angle-right"></i></a></li>

                            <li class="">
                                <div class="dropdown">
                                    <a href="./shop.php" class="dropdownBtn d-flex justify-content-between align-items-center"
                                         id="dropdownMenuButton1" data-bs-toggle="dropdow"
                                        aria-expanded="false">
                                        Shop <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Fish</a></li>
                                        <li><a class="dropdown-item" href="#">Meat</a></li>
                                        <li><a class="dropdown-item" href="#">Fruit</a></li>
                                        <li><a class="dropdown-item" href="#">Vegetable</a></li>
                                        <li><a class="dropdown-item" href="#">Organic Vegetable</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class=""><a class="d-flex justify-content-between align-items-center" href="./productdetails.php">Pages <i class="fa-solid fa-angle-right"></i></a></li>
                            <li class=""><a class="d-flex justify-content-between align-items-center" href="./blog.php">Blog <i class="fa-solid fa-angle-right"></i></a></li>
                            <li class=""><a class="d-flex justify-content-between align-items-center" href="./about.php">About Us
                                    <i class="fa-solid fa-angle-right"></i></a></li>
                            <li class=""><a class="d-flex justify-content-between align-items-center"
                                    href="./contact.php">Contact Us <i class="fa-solid fa-angle-right"></i></a></li>

                            <div class="d-flex align-items-center justify-content-evenly mt-3">

                                <li><a href="tel:+219-555-0114"><img src="./images/Group.svg" alt="">(219) 555-0114</a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <!-- SM MENU OFFCANVAS ENDS HERE -->

                <!--sm container-->
                <!-- SM MIDDLE NAVBAR ENDS HERE -->
                <!-- search in sm starts-->
                <section id="">
                    <div class="smMsearch d-none">
                        <div class="search">
                            <form class="" action="">
                                <div class="formGroup d-flex">
                                    <span class="iconify-icon text-end"><iconify-icon icon="weui:search-outlined"
                                            width="20" height="21"></iconify-icon></span>
                                    <input type="search" placeholder="Search">
                                    <button>Search</button>
                                </div>
                            </form>
                            <div class="searchResult">
                                <p class="result">total results 250</p>
                                <div class="row">
                                    <!-- Product Cards -->
                                    <div class="col-6">
                                        <div class="product-card">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="img-fluid" src="./images/product img/Image.svg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-text">
                                                <p>Mango</p>
                                                <h4>14.99 <del>20.99</del></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Repeat as necessary -->
                                    <div class="col-6">
                                        <div class="product-card">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="img-fluid" src="./images/chinease cabbage.svg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-text">
                                                <p> cabbage</p>
                                                <h4>14.99 <del>20.99</del></h4>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <div class="product-card">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="img-fluid" src="./images/product img/Image.svg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-text">
                                                <p>Mango</p>
                                                <h4>14.99 <del>20.99</del></h4>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <div class="product-card">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="img-fluid" src="./images/product img/Image.svg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-text">
                                                <p>Mango</p>
                                                <h4>14.99 <del>20.99</del></h4>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- search in sm ends  -->
        </section>
        <!-- HEADER MIDDLE ENDS -->
        <!-- HEADER BOTTOM STARTS -->
        <section id="headerBottom">
            <div class="container d-lg-block">
                <div class="row">

                    <div class="col-lg-2 d-none d-lg-block">

                        <form action="/submit-category" method="POST" class="category-form">

                            <div class="d-flex align-items-center">
                                <span class="iconify-icon">
                                    <img src="./images/menu 1.svg" alt="Menu Icon" width="24" height="24">
                                </span>
                                <select id="categorySelect" name="category" class="form-selects">
                                    <option value="" disabled selected>All Categories</option>
                                    <option class="">Baby Food</option>
                                    <option class="">Home & Kitchen</option>
                                    <option class="">Fashion</option>
                                    <option class="">Food</option>
                                </select>

                                <span class="down"><i class="bi bi-chevron-down"></i></span>
                            </div>
                        </form>
                    </div>
                    <!-- SM ALL CATEGORIES START -->
                    <ul
                        class="navbar-nav d-flex align-items-center flex-row gap-3 overflow-scroll categories d-lg-none categorie">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Meat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Vegetable</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Snacks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fish</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Breakfast</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Organic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mixture</a>
                        </li>

                    </ul>
                    <!------ SM ALL CATEGORIES END ------->
                   
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="container">

                            <div class="row">
                                <nav class="navbar-expand-lg ">
                                    <ul class="d-flex align-items-center justify-content-lg-start">
                                        <li class="nav-item"><a href="./index.php" class="nav-link">Home<span class="down"><i
                                                        class="bi bi-chevron-down"></i></span></a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a href="./shop.php" class="nav-link" id="homeDropdown"
                                                data-bs-toggle="dropdow" aria-expanded="fals">Shop<span
                                                    class="down"><i class="bi bi-chevron-down"></i></span>
                                                </a>
                                            <ul class="dropdown-menu" aria-labelledby="homeDropdown">                                                
                                                <li><a class="dropdown-item" href="#">HoneyS</a></li>
                                                <li><a class="dropdown-item" href="#">Poultry & Meat</a></li>
                                                <li><a class="dropdown-item" href="#">Nuts & Dates</a></li>
                                                <li><a class="dropdown-item" href="#">Spices</a></li>
                                                <li><a class="dropdown-item" href="#">Super Food</a></li>
                                                <li><a class="dropdown-item" href="#">Tea & Coffee</a></li>
                                            </ul>
                                        </li>


                                        <li class="nav-item"><a href="./productdetails.php" class="nav-link">Pages<span class="down"><i
                                                        class="bi bi-chevron-down"></i></span></a></li>
                                        <li class="nav-item"><a href="./blog.php" class="nav-link">Blog<span class="down"><i
                                                        class="bi bi-chevron-down"></i></span></a></li>
                                        <li class="nav-item"><a href="./about.php" class="nav-link">About Us<span class="down"><i
                                                        class="bi bi-chevron-down"></i></span></a></li>
                                        <li class="nav-item"><a href="./contact.php" class="nav-link">Contact Us<span
                                                    class="down"><i class="bi bi-chevron-down"></i></span></a></li>
                                    </ul>
                            </div>
                            </nav>
                        </div>
                    </div>


                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="container">
                            <div class="row">
                                <a href="tel:+219-555-0114">
                                    <p class="contact"><span><img class="phone" src="./images/Group.svg"
                                                alt=""></span>(219)
                                        555-0114</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- HEADER BOTTOM ENDS -->
        <!-- SM BOTTOM NAVBAR START HERE -->
        <section id="smBottomNav" class="d-lg-none">
            <div class="container">

                <div class="d-flex align-items-center justify-content-evenly">
                    <a href="./index.php" class="iconify-icon actives
                        "><img class="img-fluid" width="25" height="22" src="./images/mdi-light--home.svg" alt="">
                    </a>

                    <a href="./wishlist.php" class="iconify-icon actives
                        "><img class="img-fluid" width="25" height="22" src="./images/mdi-light--heart.svg" alt="">
                    </a>

                    <a href="./shopping cart.php" class="iconify-icon actives"><img width="29" height="22"
                            src="./images/lets-icons--bag-alt-light.svg" alt="">
                    </a>
                    <a href="./dashboard.php" class="iconify-icon actives
                        "><img class="img-fluid" width="25" height="25"
                            src="./images/material-symbols-light--account-circle-outline.svg" alt="">
                    </a>
                </div>
            </div>
        </section>
        <!-- SM BOTTOM NAVBAR END HERE -->
    </header>
    <!-- HEADER ENDS HERE -->
     <main>