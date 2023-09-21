<?php
session_start();

if (isset($_POST['accesscheck'])) {
  $email = $_POST['email'];
  $mobile = $_POST['pwd'];
  echo $mobile;
  echo $email;
  include 'connect.php'; 

  $stmt = $conn->prepare("SELECT * FROM teacher_details WHERE email = ? AND mobile = ?");
  $stmt->bind_param("ss", $email, $mobile);
  $stmt->execute();
  $result = $stmt->get_result()->fetch_assoc();

  if ($result) {
    // Valid credentials, set the session and redirect to student_dashboard.php
    $_SESSION["access"] = "personalized";
    $_SESSION["user-id"] = $email;
    header("Location: t_dashboard.php");
    exit(); 
  } else {
    // Invalid credentials, redirect to index.php
    header("Location: index.php");
    exit();
  }

  // $stmt->close();s
} else {
  // Clear session from globals
  $_SESSION = array();
  // Clear session from disk
  session_destroy();
  header("Location: index.php");
  exit();
}
