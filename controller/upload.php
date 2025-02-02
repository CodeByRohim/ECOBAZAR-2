<?php
// Database connection
require "../database/env.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
            if ($imageSize < 8000000) { // Max size: 8MB
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
?>
