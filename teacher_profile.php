<?php
// session_start();
include 'connect.php';
// $teacher_id = $_SESSION['teacher-mail'];
$teacher_id = $_GET['mail'];
$teacher_data = "SELECT * FROM teacher_details WHERE email = '$teacher_id' ";
$result = $conn->query($teacher_data);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$teacherName = $row['teacher_name'];
	$teacherdob = $row['date_of_birth'];
	$teacherAddress = $row['address'];
	$teacherMobile = $row['mobile'];
} else {
	$teacherName = "Student Name not found";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Teacher Profile</title>

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
	<?php echo $teacherAddress; ?>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<?php include 't_dash_topbar.php'; ?>
		<!-- /Header -->

		<!-- Sidebar -->
		<?php include 't_dash_sidebar.php'; ?>
		<!-- /Sidebar -->

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Profile</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item active">Profile</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-md-12">
						<div class="profile-header">
							<div class="row align-items-center">
								<div class="col-auto profile-image">
									<a href="#">
										<img class="rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
									</a>
								</div>
								<div class="col ms-md-n2 profile-user-info">
									<h4 class="user-name mb-0"><?php echo $teacherName; ?></h4>
									<h6 class="text-muted">UI/UX Design Team</h6>
									<!-- <div class="user-Location"><i class="fas fa-map-marker-alt"></i></div> -->
									<div class="about-text"></div>
								</div>
								<div class="col-auto profile-btn">
									<a href="" class="btn btn-primary">
										Edit
									</a>
								</div>
							</div>
						</div>
						<div class="profile-menu">
							<ul class="nav nav-tabs nav-tabs-solid">
								<li class="nav-item">
									<a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
								</li>
							</ul>
						</div>
						<div class="tab-content profile-tab-cont">

							<!-- Personal Details Tab -->
							<div class="tab-pane fade show active" id="per_details_tab">

								<!-- Personal Details -->
								<div class="row">
									<div class="col-lg-9">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title d-flex justify-content-between">
													<span>Personal Details</span>
													<a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i class="far fa-edit me-1"></i>Edit</a>
												</h5>
												<?php

												echo '
												<div class="row">
													<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
													<p class="col-sm-9">' . $teacherName . '</p>
												</div>
												<div class="row">
													<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date of Birth</p>
													<p class="col-sm-9">' . $teacherdob . '</p>
												</div>
												<div class="row">
													<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
													<p class="col-sm-9">' . $teacherMail . '</p>
												</div>
												<div class="row">
													<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
													<p class="col-sm-9">' . $teacherMobile . '</p>
												</div>
												<div class="row">
													<p class="col-sm-3 text-muted text-sm-end mb-0">Address</p>
													<p class="col-sm-9 mb-0">4663 Agriculture Lane,<br>
														Miami,<br>
														Florida - 33165,<br>
														United States.</p>
												</div>';
												?>
											</div>
										</div>

									</div>

									<div class="col-lg-3">

										<!-- Account Status -->
										<div class="card">
											<div class="card-body">
												<h5 class="card-title d-flex justify-content-between">
													<span>Account Status</span>
													<a class="edit-link" href="#"><i class="far fa-edit me-1"></i> Edit</a>
												</h5>
												<button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button>
											</div>
										</div>
										<!-- /Account Status -->

										<!-- Skills -->
										<div class="card">
											<div class="card-body">
												<h5 class="card-title d-flex justify-content-between">
													<span>Skills </span>
													<a class="edit-link" href="#"><i class="far fa-edit me-1"></i> Edit</a>
												</h5>
												<div class="skill-tags">
													<span>Html5</span>
													<span>CSS3</span>
													<span>WordPress</span>
													<span>Javascript</span>
													<span>Android</span>
													<span>iOS</span>
													<span>Angular</span>
													<span>PHP</span>
												</div>
											</div>
										</div>
										<!-- /Skills -->

									</div>
								</div>
								<!-- /Personal Details -->

							</div>
							<!-- /Personal Details Tab -->

							<!-- Change Password Tab -->
							<div id="password_tab" class="tab-pane fade">

								<div class="card">
									<div class="card-body">
										<h5 class="card-title">Change Password</h5>
										<div class="row">
											<div class="col-md-10 col-lg-6">
												<form>
													<div class="form-group">
														<label>Old Password</label>
														<input type="password" class="form-control">
													</div>
													<div class="form-group">
														<label>New Password</label>
														<input type="password" class="form-control">
													</div>
													<div class="form-group">
														<label>Confirm Password</label>
														<input type="password" class="form-control">
													</div>
													<button class="btn btn-primary" type="submit">Save Changes</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Change Password Tab -->

						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>