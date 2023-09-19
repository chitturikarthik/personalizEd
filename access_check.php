<?php
session_start();

if (isset($_POST['accesscheck'])) {
  $email = $_POST['username'];
  $mobile = $_POST['pwd'];
  include 'connect.php';

  $stmt = $conn->prepare("SELECT * FROM student_details WHERE email = ? AND mobile = ?");
  $stmt->bind_param("ss", $email, $mobile);
  $stmt->execute();
  $result = $stmt->get_result()->fetch_assoc();

  if ($result) {
    // Valid credentials, set the session and redirect to student_dashboard.php
    $_SESSION["access"] = "personalized";
    $_SESSION["user-id"] = $email;
    header("Location: student_dashboard.php");
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
