<?php
session_start();
// ACCOUNT SETTINGS VALIDATION
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$errors = [];
// FIRST NAME VALIDATION
if (empty($fname)) {
    $errors['fname_error'] = "Please Enter Your First Name";
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
    $errors['fname_error'] = "Only letters and white space allowed";
} else if (strlen($fname) < 3) {
    $errors['fname_error'] = "First Name must be at least 3 characters";
} else{
    isset($_SESSION['old']['fname']) ? $_SESSION['old']['fname'] : '';
}
// LAST NAME VALIDATION
if (empty($lname)) {
    $errors['lname_error'] = "Please Enter Your Last Name";
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
    $errors['lname_error'] = "Only letters and white space allowed";
} else if (strlen($lname) < 3) {
    $errors['lname_error'] = "Last Name must be at least 3 characters";
}
// EMAIL VALIDATION
if (empty($email)) {
    $errors['email_error'] = "Please Enter Your Email";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email_error'] = "Invalid Email Format";
}
// PHONE VALIDATION
if (!empty($phone)) {
    if (strlen($phone) != 11) {
        $errors['phone_error'] = "Please enter a correct phone number";
    }
} else if (!preg_match("/^[0-9]*$/", $phone)) {
    $errors['phone_error'] = "Only numbers allowed";
} 

if(count($errors) > 0){
    //  redirect to dashboard page
      $_SESSION['old'] = $_REQUEST;
      $_SESSION['errors'] = $errors;
      header("Location: ../dashboard.php");
    
  } else {
    //  store
    require "../database/env.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    
        $query = "INSERT INTO accountsettings (fname, lname, email, phone) VALUES ('$fname', '$lname', '$email', '$phone')";
        $res = mysqli_query($conn, $query);
    
        if ($res) {
            header("Location: ../dashboard.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
  }
}

// PROFILE PICTURE UPLOAD

// Check if the form is submitted
if (isset($_POST['submit'])) {
   
    // Get the image file information
    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageSize = $_FILES['image']['size'];
    $imageError = $_FILES['image']['error'];
    $imageType = $_FILES['image']['type'];

    // Allow only specific file types (e.g., JPG, PNG)
    $allowed = ['jpg', 'jpeg', 'png','webp'.'svg'];
    $imageExt = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

    if (in_array($imageExt, $allowed)) {
        if ($imageError === 0) {
            if ($imageSize < 8000000) { 
                // Create a unique name for the file
                $newImageName = uniqid('', true) . '.' . $imageExt;

                // Specify the upload directory
                $uploadDir = 'uploads/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true); // Create the directory if it doesn't exist
                }

                // Move the file to the upload directory
                $uploadPath = $uploadDir . $newImageName;
                if (move_uploaded_file($imageTmpName, $uploadPath)) {
                    // Save the file path to the database
                     $sql = "INSERT INTO profileimages (image_name, image_path) VALUES (?, ?)";
                   
              
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param('ss',$newImageName, $uploadPath);

                    if ($stmt->execute()) {
                        header('Location: ../dashboard.php');         
                    } else {
                        echo "Database error: " . $conn->error;
                    }
                } else {
                    echo "Failed to upload the image.";
                }
            } else {
                echo "File size is too large.";
            }
        } else {
            echo "There was an error uploading the file.";
        }
    } else {
        echo "Invalid file type. Only JPG, JPEG, and PNG are allowed.";
    }
}