<?php 
session_start();

if (isset($_POST['accesscheck'])) {
  $email = $_POST['username'];
  $mobile = $_POST['pwd'];
  $role = $_POST['role']; // Get the selected role

  include 'connect.php';

  $stmt = $conn->prepare("SELECT * FROM student_details WHERE email = ? AND mobile = ? AND role = ?");
  $stmt->bind_param("ssi", $email, $mobile, $role); // Update the binding
  $stmt->execute();
  $result = $stmt->get_result()->fetch_assoc();

  if ($result) {
    // Valid credentials, set the session and redirect based on the role
    $_SESSION["access"] = "personalized";
    $_SESSION["user-id"] = $email;
    
    if ($role == 0) {
      // Student role, redirect to student_dashboard.php
      header("Location: student_dashboard.php");
      exit();
    } elseif ($role == 1) {
      // Teacher role, redirect to teacher_dashboard.php (replace with actual teacher page)
      header("Location: ./Teacher/index.php");
      exit();
    }
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
?>