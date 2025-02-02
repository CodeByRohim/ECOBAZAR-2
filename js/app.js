// position fixed
$(window).scroll(function () {
  let scrollTop = $(window).scrollTop();

  if (scrollTop >= 100) {
    $("nav").addClass("fixed").removeClass("fixed2");
  } else {
    $("nav").removeClass("fixed").addClass("fixed2");
  }
});


// SM SEARCH BTN 
$(document).ready(function () {
  $(".smSearchBtn .searchIcon").click(function () {
    $(this).hide(); 
    $(".smSearchBtn .closeIcon").show(); 
    $(".smMsearch").addClass("searchSm2");
  });

  $(".smSearchBtn .closeIcon").click(function () {
    $(this).hide(); 
    $(".smSearchBtn .searchIcon").show(); 
    $(".smMsearch").removeClass("searchSm2"); 
  });

  // SLIDER FOR BANNER
  $(".slider").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    prevArrow: "#bannerLeftArrow",
    nextArrow: "#bannerRightArrow",
    dotsClass: "banner-dots",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          dots: false,
        },
      },
    ],
  });

  // SLIDER FOR ABOUT US TEAM
  $(".cardMslider").slick({
    lazyLoad: "ondemand",
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: "#teamLeftBtn",
    nextArrow: "#teamRightBtn",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // SLIDER FOR TESTIMONIAL
  $(".testMslider").slick({
    lazyLoad: "ondemand",
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: "#testLeftBtn",
    nextArrow: "#testRightBtn",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  //  FOR INDEX PAGE MIXED  SLIDER
  if(document.querySelector('.mixit')){
  var mixer = mixitup(".mixit");
  };
  // syn
});


// darkmode on/off
$(".darkModeBtn").click(function () {
  $("body").toggleClass("darkMode");
});

//  preloader remove
$(window).on("load", function () {
  $("#preloader").fadeOut(1500);
});

// BACK TO TOP BUTTON
$("#backToTop").click(function () {
  $("html,body").animate({ scrollTop: 0 }, 500);
});

//  back to top button show/hide
$(window).scroll(function () {
  let scrollTop = $(window).scrollTop();
  if (scrollTop > 0) {
    $("#backToTop").addClass("backToTop");
  } else {
    $("#backToTop").removeClass("backToTop");
  }
});

// FOR VIDEO RUN
if(document.querySelector('.venobox')){
$(document).ready(function () {
  $(".venobox").venobox(); // Initialize VenoBox
});
$(".venobox").venobox({
  bgcolor: "#fff", 
  overlayClose: false,
  spinner: "cube-grid", 
  titleattr: "data-title", 
  numeratio: true, 
  infinigall: true, 
});
};

// PRODUCT DETAIL PAGE
$(".slider-for").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: ".slider-nav",
});

$(".slider-nav").slick({
  slidesToShow: 4, // Show smaller thumbnails
  slidesToScroll: 1,
  asNavFor: ".slider-for",
  dots: false,
  centerMode: true,
  prevArrow: false,
  nextArrow: false,
  useTransform: true,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4, //3
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4, //2
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 4, //1
        slidesToScroll: 1,
      },
    },
  ],
});

// POPUP WINDOW START
if (document.getElementById('popup')){
document.addEventListener("DOMContentLoaded", () => {
  const popup = document.getElementById("popup");
  const closeBtn = document.querySelector(".close-btn");

  popup.classList.add("show");

  const popupDuration = 100000; // 5000ms = 5 seconds
  setTimeout(() => {
    popup.classList.remove("show");
  }, popupDuration);

  closeBtn.addEventListener("click", () => {
    popup.classList.remove("show");
  });
});
};
// POPUP WINDOW END

// PRODUCT INCREMENT AND DECREMENT
/*let incrementBtn = document.querySelector(".incrementBtn");
let decrementBtn = document.querySelector(".decrementBtn");
let quantityInput = document.querySelector(".quantity input");

function increment() {
  let value = Number(quantityInput.value);
  quantityInput.value = value + 1;

  let price = Number(document.getElementById("price").innerText); // Assuming price is a numeric value inside an element
  let subtotal = document.getElementById("subtotal");

  // Update subtotal
  subtotal.innerText = (value + 1) * price;
}

incrementBtn.addEventListener("click", increment);

function decrement() {
  let value = Number(quantityInput.value);
  if (value > 1) {
    quantityInput.value = value - 1;

    let price = Number(document.getElementById("price").innerText);
    let subtotal = document.getElementById("subtotal");

    // Update subtotal
    subtotal.innerText = (value - 1) * price;
  }
}
decrementBtn.addEventListener("click", decrement);

function convertToPositiveNumber() {
  let value = Math.abs(Number(quantityInput.value)); // Ensure it's a positive number
  quantityInput.value = value;

  let price = Number(document.getElementById("price").innerText);
  let subtotal = document.getElementById("subtotal");

  // Update subtotal
  subtotal.innerText = value * price;
}
quantityInput.addEventListener("keyup", convertToPositiveNumber);
*/

// HOME PAGE COUNTDOWN TIMER
if (document.getElementById('getting-started')){
$(document).ready(function() {
  $("#getting-started").countdown("2025/1/12", function(event) {
    $("#days").text(event.strftime('%D'));
    $("#hours").text(event.strftime('%H'));
    $("#minutes").text(event.strftime('%M'));
    $("#seconds").text(event.strftime('%S'));
  });
});
};


// SHOP PAGE FILTER
let faqs = document.querySelectorAll(".faq");
function toggleFAQ(event){
for (faq of faqs){
   faq.classList.remove('active');
}
event.currentTarget.classList.toggle("active");
}
for (faq of faqs){
faq.addEventListener('click',toggleFAQ);
}

// PRICE RANGE START
const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

// PRICE RANGE END
// FILTER START
if (document.getElementById('shopFilter')){
const toggleButton = document.getElementById("toggleButton");
const leftContent = document.getElementById("leftContent");
const leftHeader = document.getElementById("leftHeader");
leftHeader.addEventListener("click", () => {
    leftContent.classList.remove("show");
});
toggleButton.addEventListener("click", () => {
    leftContent.classList.toggle("show");
});
};
// NEWSLETTER CSS CHANGE FOR INDEX PAGE
if (window.location.pathname.includes("index.php")) {
  if (document.getElementById("newsletter")) {
    const element = document.getElementById("newsletter");
    element.style.padding = "345px 0px 40px 0px";
  }
}

// PASSWORD TOGGLE FOR DASHBOARD
// if (window.location.pathname.includes("dashboard.php")){
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
// };

// SAME PAGE LINK 

// Select all links targeting the #v-pills-settings tab
document.querySelectorAll('a[href="#v-pills-settings"]').forEach(function (link) {
  link.addEventListener('click', function (e) {
      e.preventDefault(); 

      var myTabTrigger = new bootstrap.Tab(document.querySelector('#v-pills-settings-tab'));
      var myTab = new bootstrap.Tab(document.querySelector('#v-pills-settings'));
      
      myTabTrigger.show();
      myTab.aria-selected(true);
  });
});
// SAME PAGE LINK END

// FORM VALIDATION ONCE
// Select all forms with the class 'validation-form'
// document.querySelectorAll('.validation-form').forEach(function (form) {
//   form.addEventListener('submit', function (e) {
      

//       // Perform validation only for the current form
//       const inputs = form.querySelectorAll('input');
//       let isValid = true;

     
//   });
// });

