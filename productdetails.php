<!-- <!DOCTYPE html>
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
   <link rel="stylesheet" href="./css/test.css">
   <link rel="stylesheet" href="./css/responsive.css"> 
   <link rel="stylesheet" href="./css/newsletter and footer.css">
</head>

<body> -->
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
                 <a href="./productdetails.html" class="activ">Product Details</a>
              </li>
           </ul>
        </div>
     </section>
     <!-- Breadcrumbs End Hear -->

     <!-- Details Products Start Here -->
      <section id="productDetails">
        <div class="container">
          <div class="row">
            <!-- Left Side -->
                 <div class="slider-wrap d-flex justify-content-between col-12 col-lg-6" >

                <div class="nav-cnt col-lg-3">
                    <button class="up prevArrow"><i class="fa-solid fa-angle-up"></i></button>
                    <div class="slider-nav">
                        
                      <div class="product2">
                        <img class="img-fluid" src="./images/product img/Product Image Slider.svg" alt="product">
                      </div>
                      <div class="product2">
                        <img class="img-fluid" src="./images/product img/Product Image Slider(1).svg" alt="product1">
                      </div>
                      <div class="product2">
                        <img class="img-fluid" src="./images/product img/Product Image Slider(2).svg" alt="product2">
                      </div>
                      <div class="product2">
                        <img class="img-fluid" src="./images/product img/Product Image Slider(3).svg" alt="product3">
                      </div>
                    </div>
                    <button class="down nextArrow"><i class="fa-solid fa-angle-down"></i></button>
                </div>
                <div class="for-cnt col-lg-9">
                    <div class="slider-for">
                      <div class="product1">
                        <img class="img-fluid" src="./images/product img/Product Image Slider.svg" alt="product">
                      </div>
                      <div class="product1 ">
                        <img class="img-fluid " src="./images/product img/Product Image Slider(1).svg" alt="product1">
                      </div>
                      <div class="product1">
                        <img class="img-fluid" src="./images/product img/Product Image Slider(2).svg" alt="product2">
                      </div>
                      <div class="product1">
                        <img class="img-fluid" src="./images/product img/Product Image Slider(3).svg" alt="product3">
                      </div>
                    </div>
                </div>
              </div>           
            <!-- Right Side -->
            <div class="stock col-12 col-lg-6">
              <h2 class="d-flex align-items-center">Chinese Cabbage<span>In Stock</span></h2>
              <span class="groupStar">
                <i class="fa fa-star fa-star-checked orange"></i>
                <i class="fa fa-star fa-star-checked orange"></i>
                <i class="fa fa-star fa-star-checked orange"></i>
                <i class="fa fa-star fa-star-checked orange"></i>
                <i class="fa fa-star fa-star-checked "></i>
                <p> 4 Reviews </p>
                <span class="dot d-flex align-items-center">.</span>
                <h6 class="">SKU: <span>2,51,594</span></h6>
              </span>
              <div class="price">
                  <h3>$48.00</h3>
                  <span class="green"> $17.28</span>
                  <span class="off">64% Off</span>
              </div>
              <hr>
              <!-- brand name and social link  -->
              <div class="brand-social">
                
                  <div class="brand">
                      <h4 class="">Brand: <img class="img-fluid" src="./images/brand.png" alt="">
                  </div>
                    <div class="social-link">
                        <h4>Share item:</h4>
                    <div class="social">
                        
                        <a href="#"><img class="img-fluid active" src="./drink-img/facebook 1.svg" alt=""></a>
                        <a href="#"><img class="img-fluid" src="./drink-img/twitter 1.svg" alt=""></a>
                        <a href="#"><img class="img-fluid" src="./drink-img/pinterest 1.svg" alt=""></a>
                        <a href="#"><img class="img-fluid" src="./drink-img/instagram 1.svg" alt=""></a>
                    </div>
                              </h4>
                              </div>
              </div>
              <!-- text -->
              <p class="text-details">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla varius magna a consequat pulvinar. </p>

              <hr>
              <!-- quantity -->
              <div class="cartItemQuantity">
                <div class="quantity">
                  <button>-</button>
                  <input type="text" value="1">
                  <button>+</button>
                </div>
                <div class="cartAddBtn">
                    <button>Add to Cart 
                        <!-- <div class="cartIcon"> -->
                        <span class="iconify-icon">
                            <img width="34" height="26" src="./images/Rectangle.svg" alt="">                            
                            <span>
                    <!-- </div> -->
                </button>
                </div>
                <a class="heart" href="#">
                    <span class="iconify-icon">
                        <img width="20" height="22" src="./images/circum--heart.svg" alt="">
                    </span>
                    </span>
                </a>
              </div>
              <hr>
              <!-- category -->
               <span class="category">Category: <span>Vegetables</span></span>
               <!-- tag -->
                <p class="tag">Tag: <span>Vegetables Healthy <a href="#">Chinese</a> Cabbage Green Cabbage</span></p>
          </div>
        <!-- *END OF VEGETABLE PART -->
         
          <!-- Description and Additional info part start-->
          
              <div id="navAndTab" class="description">
                  <nav class="col-12">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Descriptions</button>
                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Additional Information</button>
                      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Customer Feedback</button>
                    </div>
                  </nav>   
                 
                  <div class="tab-content" id="nav-tabContent">
                    <!-- description  -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">                       
                        <div class="descript d-flex justify-content-between">
                            <div class="txt col-12 col-lg-6"><p>Sed commodo aliquam dui ac porta. Fusce ipsum felis, imperdiet at posuere ac, viverra at mauris. Maecenas tincidunt ligula a sem vestibulum pharetra. Maecenas auctor tortor lacus, nec laoreet nisi porttitor vel. Etiam tincidunt metus vel dui interdum sollicitudin. Mauris sem ante, vestibulum nec orci vitae, aliquam mollis lacus. Sed et condimentum arcu, id molestie tellus. Nulla facilisi. Nam scelerisque vitae justo a convallis. Morbi urna ipsum, placerat quis commodo quis, egestas elementum leo. Donec convallis mollis enim. Aliquam id mi quam. Phasellus nec fringilla elit.<span>Nulla mauris tellus, feugiat quis pharetra sed, gravida ac dui. Sed iaculis, metus faucibus elementum tincidunt, turpis mi viverra velit, pellentesque tristique neque mi eget nulla. Proin luctus elementum neque et pharetra.</span></p>
                            <span class="d-block checks"><i class="fa-solid fa-check check"></i>100 g of fresh leaves provides.</span>
                            <span class="d-block checks"><i class="fa-solid fa-check check"></i>Aliquam ac est at augue volutpat elementum.</span>
                            <span class="d-block checks"><i class="fa-solid fa-check check"></i>Quisque nec enim eget sapien molestie.</span>
                            <span class="d-block checks"><i class="fa-solid fa-check check"></i>Proin convallis odio volutpat finibus posuere.</span>
                            <p class="mt-1">Cras et diam maximus, accumsan sapien et, sollicitudin velit. Nulla blandit eros non turpis lobortis iaculis at ut massa. </p>
                                                </div>
                                                <div class="veno-parent col-12 col-lg-6">
                            <a class="venobox" data-vbtype="video" href="./video/istockphoto-2123071364-640_adpp_is.mp4"><img src="./images/description thumnail.png" alt=""></a>
                                                   <!-- box start-->
                            <div class="d-flex justify-content-end">
                                <div class="box">
                                    <div class="discount d-flex align-items-center justify-content-between flex-wra">
                                        <img class="img-fluid text-start" src="./images/price-tag 1.png" alt="">
                                        <div>
                                            <h5 class="text-start">64% Discount</h5>
                                            <p class="text-start">Save your 64% money with us</p>
                                        </div>
                                    </div>
                                    <div class="organic d-flex align-items-center justify-content-between flex-wra">
                                        <img class="img-fluid text-start" src="./images/leaf 1.png" alt="">
                                        <div>
                                            <h5 class="text-start">100% Organic</h5>
                                            <p class="text-start">100% Organic Vegetables</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- box end -->
                                                </div>
                        </div>
                    </div>
                <!-- additional -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="additional d-flex justify-content-between">
                            <div class="addInfo col-12 col-lg-6">
                               <p>Weight:<span class="three">03</span></p>
                               <p>Type:<span class="organic">Organic</span></p>
                               <p>Category:<span class="vege">Vegetables</span></p>
                               <p>Stock Status:<span class="avail">Available (5,413)</span></p>
                               <p>Tags:<span class="health">Vegetables,  Healthy, Chinese, Cabbage, Green Cabbage.</span></p>
                            </div>
                            <div class="veno-parent col-12 col-lg-6">
                                <a class="venobox" data-vbtype="video" href="./video/istockphoto-2123071364-640_adpp_is.mp4"><img src="./images/description thumnail.png" alt=""></a>
                               <!-- box start-->
                                <div class="d-flex justify-content-end">
                                    <div class="box">
                                        <div class="discount d-flex align-items-center justify-content-between flex-wra">
                                            <img class="img-fluid text-start" src="./images/price-tag 1.png" alt="">
                                            <div>
                                                <h5 class="text-start">64% Discount</h5>
                                                <p class="text-start">Save your 64% money with us</p>
                                            </div>
                                        </div>
                                        <div class="organic d-flex align-items-center justify-content-between flex-wra">
                                            <img class="img-fluid text-start" src="./images/leaf 1.png" alt="">
                                            <div>
                                                <h5 class="text-start">100% Organic</h5>
                                                <p class="text-start">100% Organic Vegetables</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- box end -->
                            </div>
                        </div>
                       </div>
                       <!-- feedback -->
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contacr-tab">
                        <div class="feedback d-flex justify-content-between">
                            <div class="col-12 col-lg-7">     
                            
                                <!-- Review Card 1-->
                                <div class="review-card">
                                  <div class="review-header">
                                    <div class="d-flex align-items-center">
                                      <img src="./drink-img/profile1.png" alt="Profile Picture">
                                      <div class="review-details">
                                        <h5 class="mb-0">Kristin Watson</h5>
                                        <div class="review-stars">
                                          &#9733;&#9733;&#9733;&#9733;&#9734; <!-- 4/5 stars -->
                                        </div>
                                      </div>
                                    </div>
                                    <div class="review-date">
                                        2 min ago     
                                    </div>
                                  </div>
                                  <div class="review-text">
                                    <p>
                                        Duis at ullamcorper nulla, eu dictum eros.
                                    </p>
                                  </div>
                                </div>
                                 <!-- Review Card 2-->
                                 <div class="review-card">
                                    <div class="review-header">
                                      <div class="d-flex align-items-center">
                                        <img src="./drink-img/Profile2.png" alt="Profile Picture">
                                        <div class="review-details">
                                          <h5 class="mb-0">Jane Cooper</h5>
                                          <div class="review-stars">
                                            &#9733;&#9733;&#9733;&#9733;&#9734; <!-- 4/5 stars -->
                                          </div>
                                        </div>
                                      </div>
                                      <div class="review-date">
                                        30 Apr, 2021
                                      </div>
                                    </div>
                                    <div class="review-text">
                                      <p>
                                        Keep the soil evenly moist for the healthiest growth. If the sun gets too hot, Chinese cabbage tends to "bolt" or go to seed; in long periods of heat, some kind of shade may be helpful. Watch out for snails, as they will harm the plants.
                                      </p>
                                    </div>
                                  </div>
                                   <!-- Review Card 3-->
                                <div class="review-card">
                                    <div class="review-header">
                                      <div class="d-flex align-items-center">
                                        <img src="./drink-img/profile3.png" alt="Profile Picture">
                                        <div class="review-details">
                                          <h5 class="mb-0">Jacob Jones</h5>
                                          <div class="review-stars">
                                            &#9733;&#9733;&#9733;&#9733;&#9734; <!-- 4/5 stars -->
                                          </div>
                                        </div>
                                      </div>
                                      <div class="review-date">
                                        2 min ago     
                                      </div>
                                    </div>
                                    <div class="review-text">
                                      <p>
                                        Vivamus eget euismod magna. Nam sed lacinia nibh, et lacinia lacus.
                                      </p>
                                    </div>
                                  </div>
                                   <!-- Review Card 4-->
                                <div class="review-card">
                                    <div class="review-header">
                                      <div class="d-flex align-items-center">
                                        <img src="./drink-img/profile4.png" alt="Profile Picture">
                                        <div class="review-details">
                                          <h5 class="mb-0">Ralph Edwards</h5>
                                          <div class="review-stars">
                                            &#9733;&#9733;&#9733;&#9733;&#9734; <!-- 4/5 stars -->
                                          </div>
                                        </div>
                                      </div>
                                      <div class="review-date">
                                        2 min ago
                                      </div>
                                    </div>
                                    <div class="review-text">
                                      <p>
                                        200+ Canton Pak Choi Bok Choy Chinese Cabbage Seeds Heirloom Non-GMO Productive Brassica rapa VAR. chinensis, a.k.a. Canton's Choice, Bok Choi, from USA

                                      </p>
                                    </div>
                                  </div>
                                  <button>Learn More</button>
                        </div>
                        <div class="col-lg-5"></div>
                    </div>
                  </div>
              </div>
          
           <!--  Description and Additional info part start -->

              </div>
        </div>  
      </section>
      <!-- Details Products end Here -->
       <!-- Related Products Start Here -->
        <section id="relatedProduct">
            <div class="container">
                <h2>Related Products</h2>
                 <!-- PRODUCTS START -->
              <div class="col-12">
                <div class="row shopProduct">
                    <!-- Product Cards -->
                   <!-- THIRD SECTION STARTS HERE -->
         <section id="third-section">

                <div class="row mixit justify-content-between">
                    <!-- product 1 start -->

                    <div class="productCard col-lg-3 mix category-b" data-order="2">
                        <!-- <span class="product-img"> -->
                        <img class="img-fluid" src="./images/product img/Image.svg" alt="">
                        <!-- </span> -->
                        <div class="product-text d-flex align-items-center justify-content-between">
                            <div class="cnt">
                                <h3>Surjapur Mango</h3>
                                <h2>$14.99 </h2>
                                <span class="groupStar">
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd"></i>
                                </span>
                            </div>
                            <div class="bag"><span><img src="./images/Rectangle.svg" alt=""></span></div>
                        </div>
                        <div class="overlay">
                            <div class="sale">
                                <div class=""><span>
                                        <p class="text-start">Sale 50%</p>
                                    </span></div>
                                <div class="heart"><span class="heart-icon"><img width="24px"
                                            src="./images/Heart(1).svg" alt=""></span></div>
                            </div>
                            <div class="eye d-inline-block"><span class="eye-icon"><img class="" width="24px"
                                        src="./images/product img/Eye 1.svg" alt=""></span></div>
                            <div class="bag newBag"><span><img src="./images/product img/Rectangle.svg" alt=""></span>
                            </div>

                        </div>
                    </div>
                    <!-- produts 1 end -->


                    <!-- products 2 start -->
                    <div class="productCard col-lg-3 mix category-b" data-order="2">

                        <img class="img-fluid" src="./images/product img/Product Image.svg" alt="">

                        <div class="product-text d-flex align-items-center justify-content-between">
                            <div class="cnt">
                                <h3>Green Apple</h3>
                                <h2>$14.99 <span>$20.99</span></h2>
                                <span class="groupStar">
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd"></i>
                                </span>
                            </div>
                            <div class="bag"><span><img src="./images/Rectangle.svg" alt=""></span></div>
                        </div>
                        <div class="overlay">
                            <div class="sale">
                                <div class=""><span>
                                        <p class="text-start">Sale 50%</p>
                                    </span></div>
                                <div class="heart"><span class="heart-icon"><img width="24px"
                                            src="./images/Heart(1).svg" alt=""></span></div>
                            </div>
                            <div class="eye d-inline-block"><span class="eye-icon"><img width="24px"
                                        src="./images/product img/Eye 1.svg" alt=""></span></div>
                            <div class="bag newBag"><span><img src="./images/product img/Rectangle.svg" alt=""></span>
                            </div>

                        </div>
                    </div>                   
                    <!-- products 2 end -->


                    <!-- products 3 start -->
                    <div class="productCard col-lg-3 mix category-a" data-order="1">

                        <img class="img-fluid" src="./images/product img/Product Image(2).svg" alt="">

                        <div class="product-text d-flex align-items-center justify-content-between">
                            <div class="cnt">
                                <h3>Fresh Cauliflower</h3>
                                <h2>$14.99 <!--<span>$20.99</span>--></h2>
                                <span class="groupStar">
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd"></i>
                                </span>
                            </div>
                            <div class="bag"><span><img src="./images/Rectangle.svg" alt=""></span></div>
                        </div>
                        <div class="overlay">
                            <div class="sale">
                                <div class=""><span>
                                        <p class="text-start">Sale 50%</p>
                                    </span></div>
                                <div class="heart"><span class="heart-icon"><img width="24px"
                                            src="./images/Heart(1).svg" alt=""></span></div>
                            </div>
                            <div class="eye d-inline-block"><span class="eye-icon"><img width="24px"
                                        src="./images/product img/Eye 1.svg" alt=""></span></div>
                            <div class="bag newBag"><span><img src="./images/product img/Rectangle.svg" alt=""></span>
                            </div>

                        </div>
                    </div>
                    <!-- products 3 end -->

                    <!-- product 4 start -->
                    <div class="productCard col-lg-3 mix category-a" data-order="1">

                        <img class="img-fluid" src="./images/product img/Product Image(3).svg" alt="">

                        <div class="product-text d-flex align-items-center justify-content-between">
                            <div class="cnt">
                                <h3>Green Lettuce</h3>
                                <h2>$14.99 <!--<span>$20.99</span>--></h2>
                                <span class="groupStar">
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd orange"></i>
                                    <i class="fa-sharp-duotone fa-solid fa-star fa-star-chekd"></i>
                                </span>
                            </div>
                            <div class="bag"><span><img src="./images/Rectangle.svg" alt=""></span></div>
                        </div>
                        <div class="overlay">
                            <div class="sale">
                                <div class=""><span>
                                        <p class="text-start">Sale 50%</p>
                                    </span></div>
                                <div class="heart"><span class="heart-icon"><img width="24px"
                                            src="./images/Heart(1).svg" alt=""></span></div>
                            </div>
                            <div class="eye d-inline-block"><span class="eye-icon"><img width="24px"
                                        src="./images/product img/Eye 1.svg" alt=""></span></div>
                            <div class="bag newBag"><span><img src="./images/product img/Rectangle.svg" alt=""></span>
                            </div>

                        </div>
                    </div>
                    <!-- product 4 end -->
                
            </div>
        </section>
        <!-- THIRD SECTION ENDS HERE -->
                </div>
               </div>
               <!-- PRODUCTS END -->
            </div>
        </section>
       <!-- Related Products End Here -->


     <!-- *MAIN CONTENT ENDS HERE -->
     </main>
 <?php include 'footer.php';?>
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