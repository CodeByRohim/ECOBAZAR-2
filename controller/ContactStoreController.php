<?php
 session_start();
$fname = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
$errors = [];

// FIRST NAME VALIDATION
if(empty($fname)){
    $errors['fname_error'] = "Please Enter Your Full Name";

} else if(!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
    $errors['fname_error'] = "Only letters and white space allowed";
} else if(strlen($fname) < 3){
    $errors['fname_error'] = "First Name must be at least 3 characters";
}

// EMAIL VALIDATION
if(empty($email)){
    $errors['email_error'] = "Please Enter Your Email";
} else if(!filter_var($email, @FILTER_VALIDATE_EMAIL)){
    $errors['email_error'] = "Invalid Email Format";
}

// SUBJECT VALIDATION
if(empty($subject)){
    $errors['subject_error'] = "Please Enter Your Subject";
} else if(strlen($subject) <= 4){
  $errors['subject_error'] = "Subject must be at least 5 characters";
} 

// MESSAGE VALIDATION
if(empty($message)){
  $errors['message_error'] = "Please Enter Your Message";

} else if(strlen($message) <= 9 || strlen($message) > 200){
$errors['message_error'] = "Message must be at least 10 characters and not more than 200 characters";
} 


// IF ERRORS OCCURED
if(count($errors) > 0){
  //  redirect to contact page
    $_SESSION['old'] = $_REQUEST;
    $_SESSION['errors'] = $errors;
    header("Location: ../contact.php");
    
} else {
    // IF NO ERRORS OCCURED
    // unset($_SESSION['errors']);
    // unset($_SESSION['old']);
    $_SESSION['success'] = "Message Sent Successfully";
    header("Location: ../contact.php");
    exit();
}


//  END OF FORM VALIDATION FOR CONTACT PAGE 

