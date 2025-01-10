
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
    <link rel="stylesheet" href="./css/wishlist.css">
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
                        <a href="./dashboard.html" class="activ">Account</a>
                    </li>
                    <li class="d-flex align-items-center">
                        <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
                        <a href="./dashboard.html" class="activ">Dashboard</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Breadcrumbs End Hear -->
        <!-- Dashboard Start Here -->
        <section id="dashboard">
            <div class="container">
                <!-- Vertically centered scrollable modal -->
                <!-- Trigger Button -->
                <button type="button" class="btn btn-primary d-lg-none d-block smTrigerBtn" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="fa-solid fa-grip"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="navi-parent flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <h2>Navigation</h2>
                                    <button class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-dashboard" type="button" role="tab"
                                        aria-controls="v-pills-dashboard" aria-selected="true"><img
                                            src="./images/dashboard 2.svg" alt=""> Dashboard</button>

                                    <button class="nav-link" id="v-pills-history-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-history" type="button" role="tab"
                                        aria-controls="v-pills-history" aria-selected="false"><i
                                            class="fa-solid fa-rotate"></i>Order History</button>

                                    <button class="nav-link" id="v-pills-wishlist-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-wishlist" type="button" role="tab"
                                        aria-controls="v-pills-wishlist" aria-selected="false"><i
                                            class="fa-regular fa-heart"></i>Wishlist</button>

                                    <button class="nav-link" id="v-pills-shopCart-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-shopCart" type="button" role="tab"
                                        aria-controls="v-pills-shopCart" aria-selected="false"><span
                                            class="iconify-icon">
                                            <img src="./images/Rectangle.svg" alt=""></span>Shopping Cart</button>

                                    <button class="nav-link <?php echo $currentTab == 'settings' ? 'active' : ''; ?>" id="v-pills-settings-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-settings" type="button" role="tab"
                                        aria-controls="v-pills-settings" aria-selected="false"><i
                                            class="fa-solid fa-gear"></i>Settings</button>

                                    <button class="nav-link" id="v-pills-logout-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-logout" type="button" role="tab"
                                        aria-controls="v-pills-logout" aria-selected="false"><i
                                            class="fa-solid fa-arrow-right-to-bracket"></i>Log-out</button>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary smCloseBtn"
                                    data-bs-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of modal -->
                <div class="d-flex align-items-start">
                    <div class="navi-parent flex-column nav-pills me-3 d-none d-lg-block" id="v-pills-tab"
                        role="tablist" aria-orientation="vertical">
                        <h2>Navigation</h2>
                        <button class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-dashboard" type="button" role="tab"
                            aria-controls="v-pills-dashboard" aria-selected="true"><img src="./images/dashboard 2.svg"
                                alt=""> Dashboard</button>

                        <button class="nav-link" id="v-pills-history-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-history" type="button" role="tab" aria-controls="v-pills-history"
                            aria-selected="false"><i class="fa-solid fa-rotate"></i>Order History</button>

                        <button class="nav-link" id="v-pills-wishlist-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-wishlist" type="button" role="tab" aria-controls="v-pills-wishlist"
                            aria-selected="false"><i class="fa-regular fa-heart"></i>Wishlist</button>

                        <button class="nav-link" id="v-pills-shopCart-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-shopCart" type="button" role="tab" aria-controls="v-pills-shopCart"
                            aria-selected="false"><span class="iconify-icon">
                                <img src="./images/Rectangle.svg" alt=""></span>Shopping Cart</button>

                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false"><i class="fa-solid fa-gear"></i>Settings</button>

                        <button class="nav-link" id="v-pills-logOut-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-logOut" type="button" role="tab" aria-controls="v-pills-logOut"
                            aria-selected="false"><i class="fa-solid fa-arrow-right-to-bracket"></i>Log-out</button>
                    </div>


                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- DASHBOARD -->
                        <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel"
                            aria-labelledby="v-pills-dashboard-tab">
                            <!-- profile-bill-parent start -->
                            <div class="profile-bill-parent">
                                <!-- profilePic start -->
                                <div class="profilePic col-12 col-lg-6">
                                    <div class="profileImg">
                                        <img class="img-fluid" src="./images/Ellipse 5.png" alt="">
                                    </div>
                                    <div class="profileText">
                                        <h3>John Doe</h3>
                                        <p>Customer</p>
                                        <h6>Edit Profile</h6>
                                    </div>
                                </div>
                                <!-- profilePic end -->
                                <!-- Bill address start -->
                                <div class="billAddress col-12 col-lg-6">
                                    <h4>Billing Address</h4>
                                    <h3>Dainne Russell</h3>
                                    <div class="billAdd">
                                        <div class="billAdd1">
                                            <p>4140 Parker Rd. Allentown, New Mexico 31134</p>
                                        </div>
                                        <div class="billAdd2">
                                      <?php  $email = htmlspecialchars($_POST['email'] ?? ''); ?>
                                            <a href="tel:dainne.ressell@gmail.com" class=""></a>
                                        </div>
                                        <div class="billAdd3">
                                            <p><a href="tel:(671) 555-0110">(671) 555-0110</a></p>
                                        </div>
                                        <div class="billAdd4">
                                            <p><a href="#">Edit Address</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bill address end -->
                            </div>
                            <!-- profile-bill-parent end -->

                            <!-- recent order history start -->
                            <div class="recentOrderHistory col-12 col-lg-12">
                                <div class="headerAndView">
                                    <h4>Recent Order History</h4>
                                    <a href="#">View All</a>
                                </div>
                                <div class="orderHeaderInfo">
                                    <div class="orderHeader">
                                        <div class="col-3">
                                            <h4>Order ID</h4>
                                        </div>
                                        <div class="col-2">
                                            <h4>DATE</h4>
                                        </div>
                                        <div class="col-3">
                                            <h4>TOTAL</h4>
                                        </div>
                                        <div class="col-2">
                                            <h4>STATUS</h4>
                                        </div>
                                        <div class="col-2">
                                            <h4></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- 1 -->
                                <div class="orderHistory">
                                    <div class="orderId col-3">
                                        <h4>#730</h4>
                                    </div>
                                    <div class="orderDate col-2">
                                        <h4>6 Sep,2020</h4>
                                    </div>
                                    <div class="orderTotal col-3">
                                        <h4>$135.00 (5 Products)</h4>
                                    </div>
                                    <div class="orderStatus col-2">
                                        <h4>Processing</h4>
                                    </div>
                                    <div class="orderDetails col-2 text-end">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <!--2  -->
                                <div class="orderHistory">
                                    <div class="orderId col-3">
                                        <h4>#730</h4>
                                    </div>
                                    <div class="orderDate col-2">
                                        <h4>6 Sep,2020</h4>
                                    </div>
                                    <div class="orderTotal col-3">
                                        <h4>$135.00 (5 Products)</h4>
                                    </div>
                                    <div class="orderStatus col-2">
                                        <h4>Processing</h4>
                                    </div>
                                    <div class="orderDetails col-2 text-end">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="orderHistory">
                                    <div class="orderId col-3">
                                        <h4>#730</h4>
                                    </div>
                                    <div class="orderDate col-2">
                                        <h4>6 Sep,2020</h4>
                                    </div>
                                    <div class="orderTotal col-3">
                                        <h4>$135.00 (5 Products)</h4>
                                    </div>
                                    <div class="orderStatus col-2">
                                        <h4>Processing</h4>
                                    </div>
                                    <div class="orderDetails col-2 text-end">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <!-- 4 -->
                                <div class="orderHistory">
                                    <div class="orderId col-3">
                                        <h4>#730</h4>
                                    </div>
                                    <div class="orderDate col-2">
                                        <h4>6 Sep,2020</h4>
                                    </div>
                                    <div class="orderTotal col-3">
                                        <h4>$135.00 (5 Products)</h4>
                                    </div>
                                    <div class="orderStatus col-2">
                                        <h4>Processing</h4>
                                    </div>
                                    <div class="orderDetails col-2 text-end">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <!-- 5 -->
                                <div class="orderHistory">
                                    <div class="orderId col-3">
                                        <h4>#730</h4>
                                    </div>
                                    <div class="orderDate col-2">
                                        <h4>6 Sep,2020</h4>
                                    </div>
                                    <div class="orderTotal col-3">
                                        <h4>$135.00 (5 Products)</h4>
                                    </div>
                                    <div class="orderStatus col-2">
                                        <h4>Processing</h4>
                                    </div>
                                    <div class="orderDetails col-2 text-end">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <!-- 6 -->
                                <div class="orderHistory">
                                    <div class="orderId col-3">
                                        <h4>#730</h4>
                                    </div>
                                    <div class="orderDate col-2">
                                        <h4>6 Sep,2020</h4>
                                    </div>
                                    <div class="orderTotal col-3">
                                        <h4>$135.00 (5 Products)</h4>
                                    </div>
                                    <div class="orderStatus col-2">
                                        <h4>Processing</h4>
                                    </div>
                                    <div class="orderDetails col-2 text-end">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <!-- recent order history end -->

                            </div>
                        </div>
                        <!-- HISTORY -->
                        <div class="tab-pane fade" id="v-pills-history" role="tabpanel"
                            aria-labelledby="v-pills-history-tab">
                            <div class="mainOrderHistory recentOrderHistory">
                                <div class="headerAndView">
                                    <h4>Recent Order History</h4>
                                    <a href="#">View All</a>
                                </div>
                                <div class="orderHeaderInfo">
                                    <div class="orderHeader">
                                        <div class="col-3">
                                            <h4>Order ID</h4>
                                        </div>
                                        <div class="col-2">
                                            <h4>DATE</h4>
                                        </div>
                                        <div class="col-3">
                                            <h4>TOTAL</h4>
                                        </div>
                                        <div class="col-2">
                                            <h4>STATUS</h4>
                                        </div>
                                        <div class="col-2">
                                            <h4></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- 1 -->
                                <div class="orderHistory">
                                    <div class="orderId col-3">
                                        <h4>#730</h4>
                                    </div>
                                    <div class="orderDate col-2">
                                        <h4>6 Sep,2020</h4>
                                    </div>
                                    <div class="orderTotal col-3">
                                        <h4>$135.00 (5 Products)</h4>
                                    </div>
                                    <div class="orderStatus col-2">
                                        <h4>Processing</h4>
                                    </div>
                                    <div class="orderDetails col-2 text-end">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <!--2  -->
                                <div class="orderHistory">
                                    <div class="orderId col-3">
                                        <h4>#730</h4>
                                    </div>
                                    <div class="orderDate col-2">
                                        <h4>6 Sep,2020</h4>
                                    </div>
                                    <div class="orderTotal col-3">
                                        <h4>$135.00 (5 Products)</h4>
                                    </div>
                                    <div class="orderStatus col-2">
                                        <h4>Processing</h4>
                                    </div>
                                    <div class="orderDetails col-2 text-end">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="orderHistory">
                                    <div class="orderId col-3">
                                        <h4>#730</h4>
                                    </div>
                                    <div class="orderDate col-2">
                                        <h4>6 Sep,2020</h4>
                                    </div>
                                    <div class="orderTotal col-3">
                                        <h4>$135.00 (5 Products)</h4>
                                    </div>
                                    <div class="orderStatus col-2">
                                        <h4>Processing</h4>
                                    </div>
                                    <div class="orderDetails col-2 text-end">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <!-- 4 -->
                                <div class="orderHistory">
                                    <div class="orderId col-3">
                                        <h4>#730</h4>
                                    </div>
                                    <div class="orderDate col-2">
                                        <h4>6 Sep,2020</h4>
                                    </div>
                                    <div class="orderTotal col-3">
                                        <h4>$135.00 (5 Products)</h4>
                                    </div>
                                    <div class="orderStatus col-2">
                                        <h4>Processing</h4>
                                    </div>
                                    <div class="orderDetails col-2 text-end">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <!-- 5 -->
                                <div class="orderHistory">
                                    <div class="orderId col-3">
                                        <h4>#730</h4>
                                    </div>
                                    <div class="orderDate col-2">
                                        <h4>6 Sep,2020</h4>
                                    </div>
                                    <div class="orderTotal col-3">
                                        <h4>$135.00 (5 Products)</h4>
                                    </div>
                                    <div class="orderStatus col-2">
                                        <h4>Processing</h4>
                                    </div>
                                    <div class="orderDetails col-2 text-end">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <!-- 6 -->
                                <div class="orderHistory">
                                    <div class="orderId col-3">
                                        <h4>#730</h4>
                                    </div>
                                    <div class="orderDate col-2">
                                        <h4>6 Sep,2020</h4>
                                    </div>
                                    <div class="orderTotal col-3">
                                        <h4>$135.00 (5 Products)</h4>
                                    </div>
                                    <div class="orderStatus col-2">
                                        <h4>Processing</h4>
                                    </div>
                                    <div class="orderDetails col-2 text-end">
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <!-- recent order history end -->

                            </div>
                        </div>
                        <!-- WISHLIST -->
                        <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel"
                            aria-labelledby="v-pills-wishlist-tab">
                            <!-- *WISHLIST START HERE -->
                            <section id="wishlist">
                                <!-- Shopping Cart Start Here -->
                                <section id="ShoppingCart">
                                    <div class="container">
                                        <h2 class="text-center">My Wishlist</h2>
                                        <div class="row justify-content-between">
                                            <div class="col-12">
                                                <div class="heading">
                                                    <ul class="cartList">
                                                        <div class="col-lg-5">
                                                            <li class="">
                                                                <h4>PRODUCT</h4>
                                                            </li>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <li class="">
                                                                <h4>PRICE</h4>
                                                            </li>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <li class="">
                                                                <h4>Stock Status</h4>
                                                            </li>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <li class="">
                                                                <h4></h4>
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
                                                <div class="cartItem">
                                                    <div
                                                        class="cartItemWrapper d-flex align-items-center justify-content-betwee">
                                                        <div class="col-lg-5 cartItemImg d-flex align-items-center">
                                                            <img class="img-fluid"
                                                                src="./images/product img/Image(1).svg" alt="">
                                                            <div class="cartItemText">
                                                                <h4>Green Capsicum</h4>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2 cartItemPrice">
                                                            <h4>$14.00 <del>$20.99</del></h4>
                                                        </div>
                                                        <div class="col-lg-2 cartItemQuantity">
                                                            <div class="quantity">
                                                                <!-- <button>-</button>
                                            <input type="text" value="1">
                                            <button>+</button> -->
                                                                <p>In Stock</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2 cartItemTotal">
                                                            <a class="green d-none d-lg-inline" href="#">Add to Cart</a>
                                                            <a class="d-lg-none" href="#"><span class="iconify-icon">
                                                                    <img class="img-fluid" src="./images/Rectangle.svg"
                                                                        alt=""></span></a>
                                                        </div>
                                                        <div class="col-lg-1 cartItemAction text-end">
                                                            <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product 2 -->
                                                <div class="cartItem">
                                                    <div
                                                        class="cartItemWrapper d-flex align-items-center justify-content-betwee">
                                                        <div class="col-lg-5 cartItemImg d-flex align-items-center">
                                                            <img class="img-fluid"
                                                                src="./images/product img/cabbage.png" alt="">
                                                            <div class="cartItemText">
                                                                <h4>Chinese Cabbage</h4>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2 cartItemPrice">
                                                            <h4>$45.00 <del></del></h4>
                                                        </div>
                                                        <div class="col-lg-2 cartItemQuantity">
                                                            <div class="quantity">
                                                                <p>In Stock</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 cartItemTotal">
                                                            <a class="green d-none d-lg-inline" href="#">Add to Cart</a>
                                                            <a class="d-lg-none" href="#"><span class="iconify-icon">
                                                                    <img class="img-fluid" src="./images/Rectangle.svg"
                                                                        alt=""></span></a>
                                                        </div>
                                                        <div class="col-lg-1 cartItemAction text-end">
                                                            <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product 3 -->
                                                <div class="cartItem">
                                                    <div
                                                        class="cartItemWrapper d-flex align-items-center justify-content-betwee">
                                                        <div class="col-lg-5 cartItemImg d-flex align-items-center">
                                                            <img class="img-fluid" src="./images/product img/Image.svg"
                                                                alt="">
                                                            <div class="cartItemText">
                                                                <h4>Fresh Sujapuri Mango</h4>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2 cartItemPrice">
                                                            <h4>$9.00 <del></del></h4>
                                                        </div>
                                                        <div class="col-lg-2 cartItemQuantity">
                                                            <div class="quantity out">
                                                                <p>Out Of Stock</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 cartItemTotal">
                                                            <a class="out d-none d-lg-inline" href="#">Add to Cart</a>
                                                        </div>
                                                        <div class="col-lg-1 cartItemAction text-end">
                                                            <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product return and update -->
                                                <div class="cartItem ReturnUpdate">
                                                    <div
                                                        class="cartItemWrapper d-flex align-items-center justify-content-betwee">
                                                        <div class="social-payment">
                                                            <p>Share:</p>
                                                            <div class="social">
                                                                <a href="#"><img class="img-fluid"
                                                                        src="./drink-img/facebook 1.svg" alt=""></a>
                                                                <a href="#"><img class="img-fluid"
                                                                        src="./drink-img/twitter 1.svg" alt=""></a>
                                                                <a href="#"><img class="img-fluid"
                                                                        src="./drink-img/pinterest 1.svg" alt=""></a>
                                                                <a href="#"><img class="img-fluid"
                                                                        src="./drink-img/instagram 1.svg" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- coupon code -->

                                            </div>
                                        </div>
                                </section>
                                <!-- Shopping Cart End Here -->
                            </section>
                            <!-- *WISHLIST END HERE -->
                        </div>
                        <!-- SHOPPING CART -->
                        <div class="tab-pane fade" id="v-pills-shopCart" role="tabpanel"
                            aria-labelledby="v-pills-shopCart-tab"><p>shop cart Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sapiente ea repellat, aspernatur voluptas quia? Perferendis laborum eius tempore, nam rem magni explicabo odio culpa.</p></div>
                        <!-- SETTINGS -->
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <div class="settings">
                                <!-- <div class="settingsWrapper"> -->
                                <div class="accountSettings">
                                    <h2>Account Settings</h2>
                                    <hr>
                                    <div class="formWrapper">
                                        <div class="name order-2 order-lg-1 col-lg-7">
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">First Name</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Dianne">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail2">Last Name</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail2"
                                                        aria-describedby="emailHelp" placeholder="Russell">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail3">Email</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail3"
                                                        aria-describedby="emailHelp"
                                                        placeholder="dianne.russel@gmail.com">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail4">Phone Number</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail4"
                                                        aria-describedby="emailHelp" placeholder="(603) 555-0123">
                                                </div>
                                            </form>
                                            <button>Save Changes</button>
                                        </div>
                                        <div class="photo order-1 order-lg-2 col-lg-5">
                                            <img class="img-fluid" src="./images/Ellipse 5.png" alt="">
                                            <div class="mb-3">
                                                <!-- <label for="formFile" class="form-label"></label> -->
                                                <input class="fileIn form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="billingSettings">
                                    <h2>Billing Address</h2>
                                    <hr>
                                    <div class="billWrapper">
                                        <form action="">
                                            <div class="nameWrap">
                                                <div class="form-group">
                                                    <label for="exampleInput1">First Name</label>
                                                    <input type="text" class="form-control" id="exampleInput1"
                                                        aria-describedby="emailHelp" placeholder="Dianne">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInput2">Last Name</label>
                                                    <input type="text" class="form-control" id="exampleInput2"
                                                        aria-describedby="emailHelp" placeholder="Russell">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInput3">Email</label>
                                                    <input type="text" class="form-control" id="exampleInput3"
                                                        aria-describedby="emailHelp" placeholder="zakirsoft">
                                                </div>
                                            </div>
                                            <div class="streetAddress form-group">
                                                <label for="exampleInput4">Street Address</label>
                                                <input type="text" class="form-control" id="exampleInput4"
                                                    aria-describedby="emailHelp" placeholder="4140 Par|">
                                            </div>
                                            <div class="countryWrap">
                                                <div class="form-group">
                                                    <label for="exampleInput4">Country / Region</label>
                                                    <input type="text" class="form-control" id="exampleInput4"
                                                        aria-describedby="emailHelp" placeholder="United State">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInput5">States</label>
                                                    <input type="text" class="form-control" id="exampleInput5"
                                                        aria-describedby="emailHelp" placeholder="New Mexico">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInput6">Zip Code</label>
                                                    <input type="text" class="form-control" id="exampleInput6"
                                                        aria-describedby="emailHelp" placeholder="31134">
                                                </div>
                                            </div>
                                            <div class="email-phone">
                                                <div class="form-group">
                                                    <label for="exampleInput7">Email</label>
                                                    <input type="text" class="form-control" id="exampleInput7"
                                                        aria-describedby="emailHelp"
                                                        placeholder="dianne.russel@gmail.com">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInput8">Phone</label>
                                                    <input type="text" class="form-control" id="exampleInput8"
                                                        aria-describedby="emailHelp" placeholder="(603) 555-0123">
                                                </div>
                                            </div>
                                            <button>Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="changePassword">
                                    <h2>Change Password</h2>
                                    <hr>
                                    <div class="passwordWrapper">
                                        <form action="">
                                            <div class="form-group formGroup  formGroupPassword">
                                                <label for="exampleInput9">Current Password</label>                                               
                                                <div>
                                                    <input class="password form-control" type="password"
                                                        id="exampleInput9" aria-describedby="emailHelp"
                                                        placeholder="Password">
                                                    <button type="button" class="passwordToggler"><i
                                                            class="bi bi-eye-slash"></i></button>
                                                </div>
                                            </div>
                                            <div class="new-confirm">
                                                <div class="formGroup formGroupPassword">
                                                    <label for="exampleInput10">New Password</label>
                                                    <div>
                                                        <input class="password form-control" type="password"
                                                            id="exampleInput10" aria-describedby="emailHelp"
                                                            placeholder="Password">
                                                        <button type="button" class="passwordToggler"><i
                                                                class="bi bi-eye-slash"></i></button>
                                                    </div>
                                                </div>
                                                <div class="formGroup formGroupPassword">
                                                    <label for="exampleInput11">Confirm Password</label>
                                                    <div>
                                                        <input class="password form-control" type="password"
                                                            id="exampleInput11" aria-describedby="emailHelp"
                                                            placeholder="Confirm Password">
                                                        <button type="button" class="passwordToggler"><i
                                                                class="bi bi-eye-slash"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- LOGOUT -->
                        <div class="tab-pane fade" id="v-pills-logOut" role="tabpanel"
                            aria-labelledby="v-pills-logOut-tab">
                            <p class="">logout Lorem, ipsum dolor sit amet consectetur adipisicing elit. In
                                commodi nobis cupiditate exercitationem quae blanditiis. Lorem ipsum dolor sit amet
                                consectetur, adipisicing elit. Minus, rerum!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dashboard End Here -->

        <!-- *MAIN CONTENT ENDS HERE -->
        <?php include 'footer.php';?>
    </main>
    <script>
        let passwordTogglers = document.querySelectorAll(".passwordToggler");
        function passwordShow(event) {
            let toggler = event.currentTarget;
            let passwordInput = toggler.closest(".formGroup").querySelector(".password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggler.innerHTML = '<i class="bi bi-eye"></i>';
            } else {
                passwordInput.type = "password";
                toggler.innerHTML = '<i class="bi bi-eye-slash"></i>';
            }
        }
        passwordTogglers.forEach(toggler => {
            toggler.addEventListener("click", passwordShow);
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