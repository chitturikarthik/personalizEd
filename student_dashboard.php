<?php
session_start();
include 'connect.php';
$userid = $_SESSION['user-id'];

if (!isset($_SESSION['access'])) {
	header("Location:index.php");
	exit(); // Make sure to exit after redirection
}
// Logout logic
if (isset($_GET['logout'])) {
	$_SESSION = array();
	session_destroy();
	header("Location: index.php");
	exit();
}

$query = "SELECT student_name FROM student_details WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $userid);
$stmt->execute();
$stmt->bind_result($studentName);
$stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>

	<meta name="keywords" content="WebSite Template" />
	<meta name="description" content="Porto - Multipurpose Website Template">
	<meta name="author" content="okler.net">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.min.js"></script>

</head>

<body data-plugin-page-transition>

	<div class="body">

		<div role="main" class="main">

			<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
				<div class="container">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<h1 class="text-dark font-weight-bold text-8">Welcome back,</h1>
							<span class="sub-title text-dark"><?php echo $studentName ?></span>
						</div>
						<div class="col-md-12 align-self-center order-1">
							<ul class="breadcrumb d-block text-center">
								<!-- <li><a class="btn btn-outline btn-rounded btn-primary" href="index.php">Go to Home</a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</section>

			<div class="container py-4">

				<div class="row">
					<div class="col-lg-3">
						<aside class="sidebar">
							<h5 class="font-weight-semi-bold pt-4"><a class="btn btn-rounded btn-quaternary" style="letter-spacing:0.5px;">available contents</a></h5>
							<ul class="nav nav-list flex-column mb-5">
								<li class="nav-item">
									<a class="nav-link active" href="#">C LANGUAGE (2)</a>
									<ul>
										<li class="nav-item"><a class="nav-link" href="#">Arrays</a></li>
										<li class="nav-item"><a class="nav-link" href="#">Pointers</a></li>
									</ul>
								</li>
							</ul>

							<h5 class="font-weight-semi-bold pt-4"><a class="btn btn-outline btn-rounded btn-primary" href="?logout=1">Log out</a></h5>
						</aside>
					</div>
					<div class="col-lg-9">
						<div class="blog-posts">

							<div class="row px-3">

								<div class="col-sm-6">
									<article class="post post-medium border-0 pb-0 mb-5">
										<div class="post-image">
											<a href="student_content.php">
												<img src="img/blog/medium/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
											</a>
										</div>

										<div class="post-content">

											<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="https://www.youtube.com/watch?v=zaittayn5hw&list=PLhb7SOmGNUc4EBVjd7x5TiEyOKXt71whE&index=2" target="_blank">Master C Programming & Pointers</a></h2>
											<p>In this animated tutorial, we introduce you to the basic concepts of computer memory address which will be the foundation for the upcoming pointer tutorials.</p>

											<!-- <div class="post-meta">
												<span><i class="far fa-user"></i> By <a href="#">Bob Doe</a> </span>
												<span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
												<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
												<span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
											</div> -->

										</div>
									</article>
								</div>

								<div class="col-sm-6">
									<article class="post post-medium border-0 pb-0 mb-5">
										<div class="post-image">
											<a href="blog-post.html">
												<img src="img/blog/medium/blog-2.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
											</a>
										</div>

										<div class="post-content">

											<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="https://www.youtube.com/watch?v=zaittayn5hw&list=PLhb7SOmGNUc4EBVjd7x5TiEyOKXt71whE&index=3" target="_blank">Basics of Computer Memory Address</a></h2>
											<p>In this animated tutorial, we introduce you to the basic concepts of computer memory address which will be the foundation for the upcoming pointer tutorials.</p>
											<!-- 
											<div class="post-meta">
												<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
												<span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
												<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
												<span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
											</div> -->

										</div>
									</article>
								</div>

								<div class="col-sm-6">
									<article class="post post-medium border-0 pb-0 mb-5">
										<div class="post-image">
											<a href="blog-post.html">
												<img src="img/blog/medium/blog-3.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
											</a>
										</div>

										<div class="post-content">

											<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="https://www.youtube.com/watch?v=2-JtIawbaTw&list=PLhb7SOmGNUc4EBVjd7x5TiEyOKXt71whE&index=3" target="_blank">Address of a Variable in C</a></h2>
											<p>In this animated tutorial, we introduce you to the basic concepts of computer memory address which will be the foundation for the upcoming pointer tutorials.</p>



										</div>
									</article>
								</div>

								<div class="col-sm-6">
									<article class="post post-medium border-0 pb-0 mb-5">
										<div class="post-image">
											<a href="blog-post.html">
												<img src="img/blog/medium/blog-3.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
											</a>
										</div>

										<div class="post-content">

											<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="https://www.youtube.com/watch?v=oODmPKjczg0&list=PLhb7SOmGNUc4EBVjd7x5TiEyOKXt71whE&index=5" target="_blank">Unlimited Ways</a></h2>
											<p>In this animated tutorial, we introduce you to the basic concepts of computer memory address which will be the foundation for the upcoming pointer tutorials.</p>


										</div>
									</article>
								</div>

							</div>

						</div>
					</div>
				</div>

			</div>

		</div>

		+<?php include 'footer.php'; ?>
	</div>

	<!-- Vendor -->
	<script src="vendor/plugins/js/plugins.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

</body>

</html>