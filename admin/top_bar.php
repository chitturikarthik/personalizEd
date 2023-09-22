<?php
if (isset($_GET['logout'])) {
	// Clear all session variables
	$_SESSION = array();

	// Destroy the session
	session_destroy();

	// Redirect to the login page
	header("Location: index.php");
	exit();
}
?>

<div class="header">

	<!-- Logo -->
	<div class="header-left">
		<a href="index.html" class="logo">
			<img src="assets/img/logo.png" alt="Logo">
		</a>
		<a href="index.html" class="logo logo-small">
			<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
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

		<!-- User Menu -->
		<li class="nav-item dropdown has-arrow new-user-menus">
			<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
				<span class="user-img">
					<img class="rounded-circle" src="assets/img/icons/dash-icon-01.svg" width="31" alt="Ryan Taylor">
					<div class="user-text">
						<h6>PersonalizEd</h6>
						<p class="text-muted mb-0">Administrator</p>
					</div>
				</span>
			</a>
			<div class="dropdown-menu">
				<div class="user-header">
					<div class="avatar avatar-sm">
						<img src="assets/img/icons/dash-icon-01.svg" alt="User Image" class="avatar-img rounded-circle">
					</div>
					<div class="user-text">
						<h6>Ryan Taylor</h6>
						<p class="text-muted mb-0">Administrator</p>
					</div>
				</div>
				<a class="dropdown-item" href="?logout=1">Logout</a>
			</div>
		</li>
		<!-- /User Menu -->

	</ul>
	<!-- /Header Right Menu -->

</div>