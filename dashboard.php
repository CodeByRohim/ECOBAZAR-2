
     <?php 
     session_start();
     include 'header.php';
     require "./database/env.php";
     $query = "SELECT id, fname AS full_name, lname, email, phone FROM accountsettings ORDER BY id DESC";
     $res = mysqli_query($conn, $query);
     $accounts = mysqli_fetch_assoc($res);

    //  FETCH USER PROFILE IMAGE DATA
    $sql = "SELECT image_name, image_path, uploaded_at FROM profileimages ORDER BY id DESC";
    $resimg = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($resimg);

    // FETCH USER PROFILE BILLING DATA
    $queries ="SELECT id, fname, lname, email, street, country, states, zipcode, fullemail, phone FROM accountsettingsbills ORDER BY id DESC";
    $resbills = mysqli_query($conn, $queries);
    $rowbill = mysqli_fetch_assoc($resbills);
    // var_dump($rowbill);
?>                
            
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
                <button type="button" class="btn btn-primary d-lg-none d-block    smTrigerBtn" data-bs-toggle="modal"
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
                                        <!-- <img class="img-fluid" src="./images/Ellipse 5.png" alt=""> -->
                                        <img style="width: 120px; height:120px" class="img-fluid rounded-circle" src="controller/<?= $row['image_path'] ?>" alt="<?= $row['image_name'] ?>">
                                    </div>
                                    <div class="profileText">
                                        <h3><?= $accounts['full_name'] . '' ?> <?= $accounts['lname'] .'' ?></h3>
                                        <p>Customer</p>
                                        
                                        <a class="nav-link active" href="#v-pills-settings" data-bs-toggle="pill">
                                            <h6>Edit Profile</h6>
                                        </a>
                                        <!-- <a href="./controller/AccountDeleteController.php?id=  $accounts['id']?>">delete</a> --> 
                                    </div>
                                </div>
                                <!-- profilePic end -->
                                <!-- Bill address start -->
                                <div class="billAddress col-12 col-lg-6">
                                    <h4>Billing Address</h4>
                                    <h3><?= $rowbill['fname'] . ''?> <?= $rowbill['lname'] . ''?></h3>                           
                                                       
                                    <div class="billAdd">
                                        <div class="billAdd1">
                                            <p><?= $rowbill['zipcode'] . ''?> <?= $rowbill['street'] . ''?> <?= $rowbill['states'] . ''?>, <?= $rowbill['country'] . ''?> 31134</p>
                                        </div>
                                        <div class="billAdd2">                                     
                                            <a href="tel:<?= $rowbill['fullemail'] . ''?> " class=""><?= $rowbill['fullemail'] . ''?></a>
                                        </div>
                                        <div class="billAdd3">
                                            <p><a href="tel:<?= $rowbill['phone'] . ''?>"><?= $rowbill['phone'] . ''?></a></p>
                                        </div>
                                        <div class="billAdd4">
                                            <p><a class="nav-link active" href="#v-pills-settings" data-bs-toggle="pill">Edit Address</a></p>
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
                                    <form action="./controller/AccountPrStoreController.php" method="post" id="accountForm" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?= $accounts['id'] ?>">
                                                <div class="form-group error-box-parent">
                                                    <label for="exampleInputEmail1">First Name</label>
                                                    <input type="text" class="form-control <?= getErrorClass('fname_error') ?>" value="<?= $_SESSION['old']['fname'] ?? '' ?>" name="fname" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Dianne">
                                                        <span class=" <?= getActiveClass('fname_error') ?> error-box"><?= $_SESSION['errors']['fname_error'] ?? '' ?></span>                                                           
                                                </div>

                                                <div class="form-group error-box-parent">
                                                    <label for="exampleInputEmail2">Last Name</label>
                                                    <input type="text" class="form-control <?= getErrorClass('lname_error') ?>" value="<?= $_SESSION['old']['lname'] ?? '' ?>" name="lname" id="exampleInputEmail2"
                                                        aria-describedby="emailHelp" placeholder="Russell">
                                                        <span class=" <?= getActiveClass('lname_error') ?> error-box"><?= $_SESSION['errors']['lname_error'] ?? '' ?></span>
                                                </div>
                                                <div class="form-group error-box-parent">
                                                    <label for="exampleInputEmail3">Email</label>                                                   
                                                    <input type="email" class="form-control <?= getErrorClass('email_error') ?>" value="<?= $_SESSION['old']['email'] ?? null ?>" name="email" id="exampleInputEmail3"
                                                        aria-describedby="emailHelp"
                                                        placeholder="dianne.russel@gmail.com">
                                                        <span class="<?= getActiveClass('email_error') ?> error-box"><?= $_SESSION['errors']['email_error'] ?? '' ?></span>
                                                </div>
                                                <div class="form-group error-box-parent">
                                                    <label for="exampleInputEmail4">Phone Number</label>
                                                    <input type="number" class="form-control <?= getErrorClass('phone_error') ?>" value="<?= $_SESSION['old']['phone'] ?? null ?>" name="phone" id="exampleInputEmail4"
                                                        aria-describedby="emailHelp" placeholder="(603) 555-0123">
                                                        <span class="<?= getActiveClass('phone_error') ?> error-box"><?= $_SESSION['errors']['phone_error'] ?? '' ?></span>
                                                </div>
                                               <button name="submit" type="submit">Save Changes</button>                                                                                                                             
                                        </div>

                                        <div class="photo order-1 order-lg-2 col-lg-5">                                                                             
                                        <img  class="img-fluid" src="controller/<?= $row['image_path'] ?>" alt="<?= $row['image_name'] ?>">                                        
                                            <!-- src="./images/Ellipse 5.png" -->
                                            <div class="mb-3">                            
                                                <input class="fileIn form-control" type="file" name="image" id="image">          
                                                       
                                                </form>
                                            </div>
                                        </div>
                                </div>                                     
                                </div>
                                
                                <div class="billingSettings">
                                    <h2>Billing Address</h2>
                                    <hr>
                                    <div class="billWrapper">
                                        <!-- <form class="validation-form" action="./controller/AccountBillingController.php" method="post" id="accountForm" enctype="multipart/form-data"> -->
                                        <form action="./controller/AccountBillingController.php" method="post" id="accountForm">
                                            <div class="nameWrap">
                                                <div class="form-group error-box-parent">
                                                    <label for="exampleInput1">First Name</label>
                                                    <input name="bfname" type="text" class="form-control <?= getErrorClass('bfname_error') ?>" value="<?= $_SESSION['old']['bfname'] ?? null ?>" id="exampleInput1"
                                                        aria-describedby="emailHelp" placeholder="Dianne">
                                                        <span class="<?= getActiveClass('bfname_error') ?> error-box"><?= $_SESSION['errors']['bfname_error'] ?? '' ?></span>    
                                                </div>
                                                <div class="form-group error-box-parent">
                                                    <label for="exampleInput2">Last Name</label>
                                                    <input name="blname" type="text" class="form-control <?= getErrorClass('blname_error') ?>" value="<?= $_SESSION['old']['blname'] ?? null ?>" id="exampleInput2"
                                                        aria-describedby="emailHelp" placeholder="Russell">
                                                        <span class="<?= getActiveClass('blname_error') ?> error-box"><?= $_SESSION['errors']['blname_error'] ?? '' ?></span>  
                                                </div>
                                                <div class="form-group error-box-parent">
                                                    <label for="exampleInput3">Email</label>
                                                    <input name="bemail" type="text" class="form-control <?= getErrorClass('bemail_error') ?>" value="<?= $_SESSION['old']['bemail'] ?? null ?>" id="exampleInput3"
                                                        aria-describedby="emailHelp" placeholder="zakirsoft">
                                                        <span class="<?= getActiveClass('bemail_error') ?> error-box"><?= $_SESSION['errors']['bemail_error'] ?? '' ?></span>
                                                </div>
                                            </div>
                                            <div class="streetAddress form-group error-box-parent">
                                                <label for="exampleInput4">Street Address</label>
                                                <input name="bstreet" type="text" class="form-control <?= getErrorClass('bstreet_error') ?>" value="<?= $_SESSION['old']['bstreet'] ?? null ?>" id="exampleInput4"
                                                    aria-describedby="emailHelp" placeholder="4140 Par|">
                                                    <span class="<?= getActiveClass('bstreet_error') ?> error-box"><?= $_SESSION['errors']['bstreet_error'] ?? '' ?></span>
                                            </div>
                                            <div class="countryWrap">
                                                <div class="form-group error-box-parent">
                                                    <label for="exampleInput5">Country / Region</label>
                                                    <input name="bcountry" type="text" class="form-control <?= getErrorClass('bcountry_error') ?>" value="<?= $_SESSION['old']['bcountry'] ?? null ?>" id="exampleInput5"
                                                        aria-describedby="emailHelp" placeholder="United State">
                                                        <span class="<?= getActiveClass('bcountry_error') ?> error-box"><?= $_SESSION['errors']['bcountry_error'] ?? '' ?></span>
                                                </div>
                                                <div class="form-group error-box-parent">
                                                    <label for="exampleInput6">States</label>
                                                    <input name="bstates" type="text" class="form-control <?= getErrorClass('bstates_error') ?>" value="<?= $_SESSION['old']['bstates'] ?? null ?>" id="exampleInput6"
                                                        aria-describedby="emailHelp" placeholder="New Mexico">
                                                        <span class="<?= getActiveClass('bstates_error') ?> error-box"><?= $_SESSION['errors']['bstates_error'] ?? '' ?></span>
                                                </div>
                                                <div class="form-group error-box-parent">
                                                    <label for="exampleInput7">Zip Code</label>
                                                    <input name="bzipcode" type="text" class="form-control <?= getErrorClass('bzipcode_error') ?>" value="<?= $_SESSION['old']['bzipcode'] ?? null ?>" id="exampleInput7"
                                                        aria-describedby="emailHelp" placeholder="31134">
                                                        <span class="<?= getActiveClass('bzipcode_error') ?> error-box"><?= $_SESSION['errors']['bzipcode_error'] ?? '' ?></span>  
                                                </div>
                                            </div>
                                            <div class="email-phone">
                                                <div class="form-group error-box-parent">
                                                    <label for="exampleInput8">Email</label>
                                                    <input name="bfullemail" type="text" class="form-control <?= getErrorClass('bfullemail_error') ?>" value="<?= $_SESSION['old']['bfullemail'] ?? null ?>" id="exampleInput8"
                                                        aria-describedby="emailHelp"
                                                        placeholder="dianne.russel@gmail.com">
                                                        <span class="<?= getActiveClass('bfullemail_error') ?> error-box"><?= $_SESSION['errors']['bfullemail_error'] ?? '' ?></span>
                                                </div>
                                                <div class="form-group error-box-parent">
                                                    <label for="exampleInput9">Phone</label>
                                                    <input name="bphone" type="text" class="form-control <?= getErrorClass('bphone_error') ?>" value="<?= $_SESSION['old']['bphone'] ?? null ?>" id="exampleInput9"
                                                        aria-describedby="emailHelp" placeholder="(603) 555-0123">
                                                        <span class="<?= getActiveClass('bphone_error') ?> error-box"><?= $_SESSION['errors']['bphone_error'] ?? '' ?></span>
                                                </div>
                                            </div>
                                            <button type="submit" name="bill">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="changePassword">
                                    <h2>Change Password</h2>
                                    <hr>
                                    <div class="passwordWrapper">
                                        <form action="./controller/AccountBillingController.php" method="post">
                                            <div class="form-group formGroup  formGroupPassword">
                                                <label for="exampleInput10">Current Password</label>                                               
                                                <div>
                                                    <input class="password form-control" type="password"
                                                        id="exampleInput10" aria-describedby="emailHelp"
                                                        placeholder="Password">
                                                    <button type="button" class="passwordToggler"><i
                                                            class="bi bi-eye-slash"></i></button>
                                                </div>
                                            </div>
                                            <div class="new-confirm">
                                                <div class="formGroup formGroupPassword">
                                                    <label for="exampleInput11">New Password</label>
                                                    <div>
                                                        <input class="password form-control" type="password"
                                                            id="exampleInput11" aria-describedby="emailHelp"
                                                            placeholder="Password">
                                                        <button type="button" class="passwordToggler"><i
                                                                class="bi bi-eye-slash"></i></button>
                                                    </div>
                                                </div>
                                                <div class="formGroup formGroupPassword">
                                                    <label for="exampleInput12">Confirm Password</label>
                                                    <div>
                                                        <input class="password form-control" type="password"
                                                            id="exampleInput12" aria-describedby="emailHelp"
                                                            placeholder="Confirm Password">
                                                        <button type="button" class="passwordToggler"><i
                                                                class="bi bi-eye-slash"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- LOGOUT -->
                        <div class="tab-pane fade" id="v-pills-logOut" role="tabpanel"
                            aria-labelledby="v-pills-logOut-tab">
                           <button class="btn btn-primary" id="logout">Logout</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dashboard End Here -->
        <?php 
        include 'footer.php';
        session_unset();
        ?>