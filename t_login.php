<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Teacher Login</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.png">

	<!-- Fontfamily -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/plugins/feather/feather.css">

	<!-- Pe7 CSS -->
	<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

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
						<img class="img-fluid" src="img/login/2.png" alt="Logo">
					</div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Welcome to PersonalizEd</h1>
							<p class="account-subtitle">Need an account? <a href="t_register.php">Register</a></p>
							<h2>Teacher Log in</h2>
							<!-- Form -->
							<form method="post" action="teacher_access_check.php">
								<div class="form-group">
									<label>Username <span class="login-danger">*</span></label>
									<input class="form-control" type="email" name="email" id="email" required>
									<span class="profile-views"><i class="fas fa-user-circle"></i></span>
								</div>
								<div class="form-group">
									<label>Password <span class="login-danger">*</span></label>
									<input class="form-control pass-input" type="number" name="pwd" id="pwd" required>
									<span class="profile-views feather-eye toggle-password"></span>
								</div>

								<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit" name="teachercheck">Login</button>
								</div>
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								<div class="form-group text-center">
									<a class="text-primary" href="index.php">Go Home</a>
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

	<!-- Bootstrap Core JS -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>