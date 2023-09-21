<?php
include 'connect.php';
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $Fullname = $_POST["fullname"];
    $Email = $_POST["email"];
    $Mobile = $_POST["mobile"];
    $Dateofbirth = $_POST['dateofbirth'];
    $Address = $_POST['address'];

    // Insert data into the "student_details" table
    $sql = "INSERT INTO student_details (student_name, email, mobile, date_of_birth, address) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $Fullname, $Email, $Mobile, $Dateofbirth, $Address);

    if ($stmt->execute()) {
        header("Location: s_login.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Student Register</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Fontfamily -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="assets/img/login.png" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Student Sign Up</h1>
                            <p class="account-subtitle">Enter details to create your account</p>

                            <!-- Form -->
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label>Full Name <span class="login-danger">*</span></label>
                                    <input required autocapitalize="on" name="fullname" class="form-control" type="text">
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="login-danger">*</span></label>
                                    <input required name="email" class="form-control" type="text">
                                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Mobile <span class="login-danger">*</span></label>
                                    <input required name="mobile" class="form-control pass-input" type="text">
                                    <span class="profile-views feather-eye toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth <span class="login-danger">*</span></label>

                                    <input required name="dateofbirth" class="form-control" type="date">

                                </div>

                                <div class="form-group">
                                    <label>Address <span class="login-danger">*</span></label>
                                    
                                    
                                    <textarea name='address' class="form-control" id="addressTextarea" placeholder="Street: , Area: , City: , Pincode: , State:"></textarea>
                                </div>





                                <div class=" dont-have">Already Registered? <a href="s_login.php">Login</a></div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit" name="accesscheck">Register</button>
                                </div>
                            </form>
                            <!-- /Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

</html>