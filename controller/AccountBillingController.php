<?php
session_start();
// ACCOUNT SETTINGS VALIDATION
$fname = $_REQUEST['bfname'];
$lname = $_REQUEST['blname'];
$email = $_REQUEST['bemail'];
$street = $_REQUEST['bstreet'];
$country = $_REQUEST['bcountry'];
$states = $_REQUEST['bstates'];        
$zipcode = $_REQUEST['bzipcode'];
$fullemail = $_REQUEST['bfullemail'];
$phone = $_REQUEST['bphone'];
$errors = [];
// FIRST NAME VALIDATION
if (empty($fname)) {
    $errors['bfname_error'] = "Please Enter Your First Name";
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
    $errors['bfname_error'] = "Only letters and white space allowed";
} else if (strlen($fname) < 3) {
    $errors['bfname_error'] = "First Name must be at least 3 characters";
} else{
    isset($_SESSION['old']['bfname']) ? $_SESSION['old']['bfname'] : '';
}
// LAST NAME VALIDATION
if (empty($lname)) {
    $errors['blname_error'] = "Please Enter Your Last Name";
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
    $errors['blname_error'] = "Only letters and white space allowed";
} else if (strlen($lname) < 3) {
    $errors['blname_error'] = "Last Name must be at least 3 characters";
}
// EMAIL VALIDATION
if (empty($email)) {
    $errors['bemail_error'] = "Please Enter Your Email Name";
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $email)) {
    $errors['bemail_error'] = "Only letters and white space allowed";
} else if (strlen($email) < 4) {
    $errors['bemail_error'] = "Email Name must be at least 4 characters";
}
// STREET VALIDATION
if (empty($street)) {
    $errors['bstreet_error'] = "Please Enter Your street";
}  else if (strlen($street) < 3) {
    $errors['bstreet_error'] = "Street must be at least 3 characters";
}
// COUNTRY VALIDATION
if (empty($country)) {
    $errors['bcountry_error'] = "Please Enter Your Country Name";
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $country)) {
    $errors['bcountry_error'] = "Only letters and white space allowed";
} else if (strlen($country) < 3) {
    $errors['bcountry_error'] = "Country Name must be at least 3 characters";
}
// STATES VALIDATION
if (empty($states)) {
    $errors['bstates_error'] = "Please Enter Your States Name";
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $states)) {
    $errors['states_error'] = "Only letters and white space allowed";
} else if (strlen($states) < 3) {
    $errors['states_error'] = "States Name must be at least 3 characters";
}
// ZIPCODE VALIDATION
if (empty($zipcode)) {
    $errors['bzipcode_error'] = "Please Enter Your Zip Code";
} else if (strlen($zipcode) < 3) {
    $errors['bzipcode_error'] = "Zip Code must be at least 3 characters";
}
// EMAIL VALIDATION
if (empty($fullemail)) {
    $errors['bfullemail_error'] = "Please Enter Your Full Email";
} else if (!filter_var($fullemail, FILTER_VALIDATE_EMAIL)) {
    $errors['bfullemail_error'] = "Invalid Email Format";
}
// PHONE VALIDATION
if (!empty($phone)) {
    if (strlen($phone) != 11) {
        $errors['bphone_error'] = "Please enter a correct phone number";
    }
} else if (!preg_match("/^[0-9]*$/", $phone)) {
    $errors['bphone_error'] = "Only numbers allowed";
} 

if(count($errors) > 0){
    //  redirect to dashboard page
      $_SESSION['old'] = $_REQUEST;
      $_SESSION['errors'] = $errors;
       header("Location: ../dashboard.php");
    // print_r($_SESSION);
    
  } else {
    //  store
    require "../database/env.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fname = mysqli_real_escape_string($conn, $_POST['bfname']);
        $lname = mysqli_real_escape_string($conn, $_POST['blname']);
        $email = mysqli_real_escape_string($conn, $_POST['bemail']);
        $street = mysqli_real_escape_string($conn, $_POST['bstreet']);
        $country = mysqli_real_escape_string($conn, $_POST['bcountry']);
        $states = mysqli_real_escape_string($conn, $_POST['bstates']);
        $zipcode = mysqli_real_escape_string($conn, $_POST['bzipcode']);
        $fullemail = mysqli_real_escape_string($conn, $_POST['bfullemail']);
        $phone = mysqli_real_escape_string($conn, $_POST['bphone']);
        
        $queries = "INSERT INTO accountsettingsbills (fname, lname, email, street, country, states, zipcode, fullemail, phone) VALUES ('$fname','$lname','$email','$street','$country','$states','$zipcode','$fullemail','$phone')";
        $resbills = mysqli_query($conn, $queries);
        if ($resbills) {
            header("Location: ../dashboard.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
  }
}
