<?php
session_start();
include 'connect.php';
$teacher_id = $_SESSION['teacher-id'];
$teacher_data = "SELECT * FROM teacher_details WHERE email = '$teacher_id' ";
$result = $conn->query($teacher_data);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $teacherName = $row['teacher_name'];
    $teacherMail = $row['email'];
} else {
    $teacherName = "Student Name not found";
}

define('PROFILE_URL', 'http://localhost/personalizEd/teacher_profile.php?mail=' . $teacherMail);

if (!isset($_SESSION['teacher_access'])) {
    header("Location:index.php");
    exit();
}
// Logout logic
if (isset($_GET['logout'])) {
    // Clear all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header("Location: t_login.php");
    exit();
}
?>

<div class="header">
    <!-- Logo -->
    <div class="header-left">
        <a href="" class="logo">
            <img src="./img/logo-default-slim.png" alt="Logo" width="250" height="70">
        </a>
        <a href="" class="logo logo-small">
            <img src="./img/logo-default-slim.png" alt="Logo" width="30" height="30">
        </a>
    </div>
    <!-- /Logo -->

    <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    <!-- Mobile Menu Toggle -->
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>
    <!-- /Mobile Menu Toggle -->

    <!-- Header Right Menu -->
    <ul class="nav user-menu">
        <!-- /Notifications -->
        <li class="nav-item zoom-screen me-2">
            <a href="#" class="nav-link header-nav-list">
                <img src="assets/img/icons/header-icon-04.svg" alt="">
            </a>
        </li>

        <!-- User Menu -->
        <li class="nav-item dropdown has-arrow new-user-menus">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img">
                    <img class="rounded-circle" src="assets/img/profiles/avatar-02.jpg" width="31">
                    <div class="user-text">
                        <h6><?php echo $teacherName ?></h6>
                        <p class="text-muted mb-0"><?php echo $teacher_id ?></p>
                    </div>
                </span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo PROFILE_URL; ?>">My Profile</a>
                <a class="dropdown-item" href="?logout=1">Logout</a>
            </div>
        </li>
        <!-- /User Menu -->

    </ul>
    <!-- /Header Right Menu -->

</div>