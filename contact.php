
    <?php
     session_start(); 
     include './header.php';
     ?>
     
              <!-- *Breadcrumbs Start Here -->
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
                 <a href="./contact.php" class="activ">Contact Us</a>
              </li>
           </ul>
        </div>
     </section>
     <!-- *Breadcrumbs End Hear -->

    <!-- *Details fill Section start -->
     <section id="details">
        <div class="container">
            <div class="row f-row">
                <div class="col-lg-3 col-12 leftSide">
                    <div class="row">
                        <div class="col-12">
                            <div class="cntBox text-center">
                                <img class="img-fluid" src="./images/Map Pin.png" alt="">
                                <p>2715 Ash Dr. San Jose, South Dakota 83475</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="cntBox text-center">
                                <img class="img-fluid" src="./images/Email.png" alt="">
                                <a href="mailto:ecobazar@gmail.com" target="_blank">
                                   <p>Proxy@gmail.com
                                       Help.proxy@gmail.com</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="cntBox text-center">
                                <img class="img-fluid" src="./images/PhoneCall.png" alt="">
                                <a href="tel:2195550114">
                                   <p>(219) 555-0114</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-12 rightSide">
                    <div class="formCnt">
                        <div class="formd">
                            <span class="alert-box alert alert-warning alert-dismissible fade <?= getShowClass('show') ?>" role="alert">
                                <strong><?= $_SESSION['success'] ?? '' ?></strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-x"></i></button>
                            </span>
                            <h4>Just Say Hello!</h4>
                            <p>Do you fancy saying hi to me or you want to get started with your project and you need my help? Feel free to contact me.</p>

                             <form action="./controller/ContactStoreController.php" method="POST">
                                <div class="d-flex">
                                    <div class="error-box-parent">
                                        <input class="form-control <?= getErrorClass('fname_error') ?>" value="<?= $_SESSION['old']['fname'] ?? '' ?>" name="fname" type="text" placeholder="Full Name">
                                        <span class="<?= getActiveClass('fname_error') ?> error-box"><?= $_SESSION['errors']['fname_error'] ?? '' ?></span>
                                    </div>

                                    <div class="error-box-parent">
                                        <input class="form-control <?= getErrorClass('email_error') ?>" value="<?= $_SESSION['old']['email'] ?? null ?>" name="email" type="email" placeholder="youremail@gmail.com">
                                        <span class="<?= getActiveClass('email_error') ?> error-box"><?= $_SESSION['errors']['email_error'] ?? '' ?></span>
                                    </div>

                                </div>
                                <div class="error-box-parent">
                                    <input class="sub form-control <?= getErrorClass('subject_error') ?>" value="<?= $_SESSION['old']['subject'] ?? null ?>" name="subject" type="text" placeholder="Subject">
                                    <span class="<?= getActiveClass('subject_error') ?> error-box"><?= $_SESSION['errors']['subject_error'] ?? '' ?></span>
                                </div>

                                <div class="error-box-parent">
                                    <textarea class="form-control <?= getErrorClass('subject_error') ?>" name="message" id="" placeholder="Message"><?= $_SESSION['old']['message'] ?? null ?></textarea>
                                    <span class="<?= getActiveClass('message_error') ?> error-box"><?= $_SESSION['errors']['message_error'] ?? '' ?></span>
                                </div>

                                <button type="submit">Send Message</button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- *Details fill Section end -->

      <!-- *Map Section start -->
     <section id="Map">
         <div class="containe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8700197525127!2d91.83677857434643!3d22.35853624078379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad277ab0cff8a7%3A0x13eb8ccef8a22dde!2sCreative%20IT%20Institute%2C%20Chattogram%20Branch!5e0!3m2!1sen!2sbd!4v1733474173038!5m2!1sen!2sbd" width="100%" height="400px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
         </div>
     </section>
     <!-- *Map Section end -->

     <?php
      include './footer.php';
       session_unset(); 
     ?>
  
