<?php
session_start();

if (isset($_POST['submit'])) {
    $c_title = $_POST['c_title'];
    $c_type = $_POST['c_type'];
    $subject = $_POST['subject'];
    $diff_level = $_POST['diff_level'];
    $li_type = $_POST['li_type'];
    include 'connect.php';
    $target_directory = "uploads/";
    $target_file = $target_directory . basename($_FILES["c_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the file is an image or video (you can add more validation here)
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "mp4") {
        echo "Sorry, only JPG, JPEG, PNG, and MP4 files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk) {
        if (move_uploaded_file($_FILES["c_image"]["tmp_name"], $target_file)) {
            // File uploaded successfully, now insert data into the database
            $sql = "INSERT INTO contents (c_title, c_image, c_type, subject, diff_level, li_type) 
                    VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssss", $c_title, $target_file, $c_type, $subject, $diff_level, $li_type);

            if ($stmt->execute()) {
                header("Location: t_dashboard.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            // File upload failed, handle the error
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Close the database connection (if needed)
    // $conn->close();
} else {
    // Handle the case where the form was not submitted
    // You can redirect or display an error message
    header("Location: add-content.php");
    exit();
}
