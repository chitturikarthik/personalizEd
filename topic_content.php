<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Preskool - Profile</title>

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

	<!-- Select CSS  -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<style>
		.custom-video-container {
			position: relative;
		}

		#custom-video {
			width: 100%;
		}

		.custom-controls {
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			background: rgba(0, 0, 0, 0.5);
			padding: 10px;
			display: flex;
			justify-content: space-between;
		}

		.custom-controls button,
		.custom-controls input {
			background: none;
			border: none;
			color: white;
			cursor: pointer;
		}
	</style>
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<?php include 's_dash_topbar.php' ?>
		<!-- /Header -->

		<!-- Sidebar -->
		<?php include 's_dash_sidebar.php'; ?>
		<!-- /Sidebar -->

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="row justify-content-center">
					<div class="col-lg-10 col-xl-9">

						<!-- Blog Details-->
						<div class="blog-view">
							<div class="blog-single-post">
								<a href="s_dashboard.php" class="back-btn"><i class="feather-chevron-left"></i> Back</a>
								<div class="custom-video-container">
									<video id="custom-video" src="content/Web Development/HTML Course _ World's most premium HTML Course _ Lecture 2.mp4" controls>
										<!-- Your browser does not support the video tag. -->
									</video>
									<div id="watch-time" class="watch-time">00:00</div>
									<script>
										const video = document.getElementById('custom-video');
										const watchTimeElement = document.getElementById('watch-time');

										let startTime = 0;
										let totalWatchTime = 0;
										let isVideoPlaying = false;

										video.addEventListener('play', () => {
											startTime = Date.now() - totalWatchTime;
											isVideoPlaying = true;
											updateWatchTime();
										});

										video.addEventListener('pause', () => {
											if (isVideoPlaying) {
												totalWatchTime += (Date.now() - startTime);
												isVideoPlaying = false;
											}
										});

										video.addEventListener('seeked', () => {
											if (isVideoPlaying) {
												startTime = Date.now() - totalWatchTime;
											}
										});

										function updateWatchTime() {
											const elapsedMilliseconds = isVideoPlaying ? (Date.now() - startTime) : 0;
											const elapsedSeconds = elapsedMilliseconds / 1000;
											const playbackRate = video.playbackRate || 1; // Default to 1 if playbackRate is not available

											const watchedDuration = elapsedSeconds / playbackRate;
											const hours = Math.floor(watchedDuration / 3600);
											const minutes = Math.floor((watchedDuration % 3600) / 60);
											const seconds = Math.floor(watchedDuration % 60);

											const formattedTime = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

											watchTimeElement.textContent = `Total Watch Time: ${formattedTime}`;

											if (isVideoPlaying) {
												requestAnimationFrame(updateWatchTime);
											}
										}
									</script>
								</div>
								<h3 class="blog-title">HTML Course _ World's most premium HTML Course _ Lecture 2</h3>
								<div class="blog-info">
									<div class="post-list">
										<ul>
											<li>
												<div class="post-author">
													<a href="profile.html"><img src="assets/img/profiles/avatar-14.jpg" alt="Post Author"> <span>by Dr.Suresh Mudunuri </span></a>
												</div>
											</li>
											<li><i class="feather-clock"></i> Dec 6, 2017</li>
											<li><i class="feather-message-square"></i> 40 Comments</li>
											<!-- <li><i class="feather-grid"></i> Set Theory, Mathematician</li> -->
										</ul>
									</div>
								</div>
								<div class="blog-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
								</div>
							</div>

							<!-- About Author -->
							<div class="card author-widget clearfix">
								<div class="card-header">
									<h4 class="card-title">About Author</h4>
								</div>
								<div class="card-body">
									<div class="about-author">
										<div class="about-author-img">
											<div class="author-img-wrap">
												<a href="profile.html"><img class="img-fluid" alt="" src="assets/img/profiles/avatar-10.jpg"></a>
											</div>
										</div>
										<div class="author-details">
											<a href="profile.html" class="blog-author-name">Prof. Darren Elder <span>Biologist, Male, 40 Years Old</span></a>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- /About Author -->


							<!-- Leave Comment -->
							<div class="card new-comment clearfix">
								<div class="card-header">
									<h4 class="card-title">Leave Comment</h4>
								</div>
								<div class="card-body">
									<form>
										<div class="form-floating mb-3">
											<input type="text" class="form-control" id="floatingInput" placeholder="Enter your name">
											<label for="floatingInput">Name<span class="text-danger">*</span></label>
										</div>
										<div class="form-floating mb-3">
											<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
											<label for="floatingInput">Your Email address<span class="text-danger">*</span></label>
										</div>
										<div class="form-group">
											<textarea rows="4" class="form-control bg-grey" placeholder="Comments"></textarea>
										</div>
										<div class="submit-section">
											<button class="submit-btn btn-primary btn-blog" type="submit">Submit</button>
										</div>
									</form>
								</div>
							</div>
							<!-- /Leave Comment -->

							<div class="card blog-share clearfix">
								<div class="card-header">
									<h4 class="card-title">Share the post</h4>
								</div>
								<div class="card-body">
									<ul class="social-share">
										<li><a href="#"><i class="feather-twitter"></i></a></li>
										<li><a href="#"><i class="feather-facebook"></i></a></li>
										<li><a href="#"><i class="feather-linkedin"></i></a></li>
										<li><a href="#"><i class="feather-instagram"></i></a></li>
										<li><a href="#"><i class="feather-youtube"></i></a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- /Blog Details-->

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

	<!-- Select JS-->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Feathericon js -->
	<script src="assets/js/feather.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>