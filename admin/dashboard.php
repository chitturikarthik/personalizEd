<?php
session_start();
include '../connect.php';

$query = "SELECT COUNT(*) FROM student_details"; // Corrected the column name to "username"
$result1 = mysqli_query($conn, $query);

if ($result1) {
	$row = mysqli_fetch_row($result1);
	$student_number = $row[0];
} else {
	// Handle the query error here
	echo "Error: " . mysqli_error($conn);
}

$query_videos = "SELECT COUNT(*) FROM contents"; // Corrected the column name to "username"
$result2 = mysqli_query($conn, $query_videos);

if ($result2) {
	$row2 = mysqli_fetch_row($result2);
	$video_number = $row2[0];
} else {
	// Handle the query error here
	echo "Error: " . mysqli_error($conn);
}

$query_teacher = "SELECT COUNT(*) FROM teacher_details"; // Corrected the column name to "username"
$result3 = mysqli_query($conn, $query_teacher);

if ($result3) {
	$row3 = mysqli_fetch_row($result3);
	$teacher_number = $row3[0];
} else {
	// Handle the query error here
	echo "Error: " . mysqli_error($conn);
}

$query_subjects = "SELECT COUNT(*) FROM subjects"; // Corrected the column name to "username"
$result4 = mysqli_query($conn, $query_subjects);

if ($result4) {
	$row4 = mysqli_fetch_row($result4);
	$subject_number = $row4[0];
} else {
	// Handle the query error here
	echo "Error: " . mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Admin Dashboard</title>

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
	<div class="main-wrapper">

		<!-- Header -->
		<?php include 'top_bar.php' ?>
		<!-- /Header -->

		<!-- Sidebar -->
		<?php include 'sidebar.php' ?>
		<!-- /Sidebar -->

		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-sub-header">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active">Admin</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<!-- Overview Section -->
				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card bg-comman w-100">
							<div class="card-body">
								<div class="db-widgets d-flex justify-content-between align-items-center">
									<div class="db-info">
										<h6>Students</h6>
										<h3><?php echo $student_number ?></h3>
									</div>
									<div class="db-icon">
										<img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card bg-comman w-100">
							<div class="card-body">
								<div class="db-widgets d-flex justify-content-between align-items-center">
									<div class="db-info">
										<h6>Content Uploaded</h6>
										<h3><?php echo $video_number ?></h3>
									</div>
									<div class="db-icon">
										<img src="assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card bg-comman w-100">
							<div class="card-body">
								<div class="db-widgets d-flex justify-content-between align-items-center">
									<div class="db-info">
										<h6>Teachers</h6>
										<h3><?php echo $teacher_number ?></h3>
									</div>
									<div class="db-icon">
										<img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card bg-comman w-100">
							<div class="card-body">
								<div class="db-widgets d-flex justify-content-between align-items-center">
									<div class="db-info">
										<h6>Subjects</h6>
										<h3><?php echo $subject_number ?></h3>
									</div>
									<div class="db-icon">
										<img src="assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Overview Section -->



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

		<!-- Chart JS -->
		<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
		<script src="assets/plugins/apexchart/chart-data.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

</body>

</html>