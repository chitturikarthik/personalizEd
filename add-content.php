<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Add Content</title>

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

	<!-- Ckeditor CSS-->
	<link rel="stylesheet" href="assets/css/ckeditor.css">

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
		<?php include 't_dash_topbar.php' ?>
		<!-- /Header -->

		<!-- Sidebar -->
		<?php include 't_dash_sidebar.php' ?>
		<!-- /Sidebar -->

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="row">
					<div class="col-xl-12">

						<!-- Page Header -->
						<div class="page-header">
							<div class="row">
								<div class="col-sm-12">
									<h3 class="page-title">Add Content</h3>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<div class="card">
							<div class="card-body">
								<div class="bank-inner-details">
									<form method="post" action="submit_content.php" enctype="multipart/form-data">
										<div class="row">
											<div class="col-lg-12 col-md-12">
												<div class="form-group">
													<label>Title<span class="text-danger">*</span></label>
													<input name="c_title" id="c_title" type="text" class="form-control">
												</div>
											</div>
											<div class="col-lg-12 col-md-12">
												<div class="form-group">
													<label>Content Image(Thumbnail)</label>
													<div class="change-photo-btn">
														<div>
															<p>Add Image</p>
														</div>
														<input name="c_image" id="c_image" type="file" class="upload">
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-12">
												<div class="form-group">
													<label>Description</label>
													<input name="editor" id="editor"></input>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-3 col-md-12">
													<div class="form-group">
														<label>Content Type</label>
														<select name="c_type" id="c_type" class="form-control">
															<option>Select Content Type</option>
															<option value="pdf">PDF</option>
															<option value="video">VIDEO</option>
															<option value="ppt">PPT</option>
															<option value="docx">DOCX</option>
														</select>
													</div>
												</div>
												<div class="col-lg-3 col-md-12">
													<div class="form-group">
														<label>Subject</label>
														<select name="subject" id="subject" class="form-control">
															<option>Select Subject</option>
															<option value="C">C Language</option>
															<option value="Web Technologies">Web Technologies</option>
															<option value="Python">Python</option>
														</select>
													</div>
												</div>
												<div class="col-lg-3 col-md-12">
													<div class="form-group">
														<label>Difficulty Level</label>
														<select name="diff_level" id="diff_level" class="form-control">
															<option value="">Select Difficulty Level</option>
															<option value="0">Basic</option>
															<option value="1">Intermediate</option>
															<option value="2">Expert</option>
														</select>
													</div>
												</div>
												<div class="col-lg-3 col-md-12">
													<div class="form-group">
														<label>Intelligence Type</label>
														<select name="li_type" id="li_type" class="form-control">
															<option value="">Select Intelligence Type</option>
															<option value="visual">Visual Smart</option>
															<option value="verbal">Verbal Smart</option>
															<option value="logical">Logical Smart</option>
															<option value="existential">Real world smart</option>
														</select>
													</div>
												</div>
											</div>
										</div>

								</div>
							</div>
							<div class=" blog-categories-btn pt-0">
								<div class="bank-details-btn ">
									<a type="submit" name="submit" class="btn bank-cancel-btn me-2">Post Content</a>
								</div>
							</div>
							</form>
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

	<!-- Select JS-->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Feathericon js -->
	<script src="assets/js/feather.min.js"></script>

	<!-- ckeditor JS -->
	<script src="assets/js/ckeditor.js"></script>

	<!-- Bootstrap Tagsinput JS -->
	<script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>