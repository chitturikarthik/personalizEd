<?php
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection settings (modify with your own)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "personalized";
    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Retrieve form data
    $teacher_id = $_POST['teacher_id'];
    $c_title = $_POST["c_title"];
    $c_topic = $_POST["c_topic"];
    $description = $_POST["description"];
    $c_type = $_POST["c_type"];
    $subject = $_POST["subject"];
    $diff_level = $_POST["diff_level"];
    $li_type = $_POST["li_type"];
    $video_path = '';

    // Upload video
    if ($_FILES["video"]["error"] == 0) {
        $video_name = $_FILES["video"]["name"];
        $video_tmp_name = $_FILES["video"]["tmp_name"];
        $video_path = "uploads/" . $video_name; // Specify your upload directory

        if (move_uploaded_file($video_tmp_name, $video_path)) {
            // Insert data into the database
            $sql = "INSERT INTO contents (teacher_id , c_title,topic_name, c_about, content_type, subject, difficulty_level, learning_intelligence, video_path) 
                    VALUES ('$teacher_id','$c_title','$c_topic', '$description', '$c_type', '$subject', '$diff_level', '$li_type', '$video_path')";
            if ($conn->query($sql) === TRUE) {
                echo " 
                <script>
                alert('Content Uploaded Successfully');
                </script>";
                header("Location: add-content.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error uploading the video.";
        }
    } else {
        echo "Video upload error: " . $_FILES["video"]["error"];
    }

    $conn->close();
}
