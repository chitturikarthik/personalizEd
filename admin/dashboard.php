<?php
session_start();
include '../connect.php';

$query = "SELECT COUNT(*) FROM student_details";
$result = $conn->query($query);

if (!$result) {
	die("Query failed: " . $conn->error);
}
$row = $result->fetch_row();
$alumni = $row[0];

$query_teacher = "SELECT COUNT(*) FROM teacher_details";
$result2 = $conn->query($query_teacher);

if (!$result2) {
	die("Query failed: " . $conn->error);
}
$row2 = $result2->fetch_row();
$inactive = $row2[0];

$query_subjects = "SELECT COUNT(*) FROM subjects";
$result4 = $conn->query($query_subjects);

if (!$result4) {
	die("Query failed: " . $conn->error);
}
$row4 = $result4->fetch_row();
$active = $row4[0];

$query_contents = "SELECT COUNT(*) FROM contents";
$result5 = $conn->query($query_contents);

if (!$result5) {
	die("Query failed: " . $conn->error);
}
$row5 = $result5->fetch_row();
$pending = $row5[0];


$selectQuery = "SELECT * FROM student_details";
$result = $conn->query($selectQuery);

if (!$result) {
	die("Query failed: " . $conn->error);
}



$sql = "SELECT learning_intelligence FROM student_details";
$result1 = $conn->query($sql);

if (!$result1) {
	die("Query failed: " . $conn->error);
}

// Initialize an associative array to store the intelligence data
$intelligenceCounts = array();
// Fetch and process the data
while ($row = $result1->fetch_assoc()) {
	$intelligences = explode(",", $row['learning_intelligence']);
	foreach ($intelligences as $intelligence) {
		$intelligence = trim($intelligence);
		if (!empty($intelligence)) {
			if (isset($intelligenceCounts[$intelligence])) {
				$intelligenceCounts[$intelligence]++;
			} else {
				$intelligenceCounts[$intelligence] = 1;
			}
		}
	}
}

$jsIntelligenceData = '[';
foreach ($intelligenceCounts as $intelligence => $count) {
	$jsIntelligenceData .= '["' . $intelligence . '", ' . $count . '],';
}
$jsIntelligenceData = rtrim($jsIntelligenceData, ',') . ']';




$sql = "SELECT topic_name, learning_intelligence FROM contents";
$result = $conn->query($sql);

if (!$result) {
	die("Query failed: " . $conn->error);
}

// Initialize an associative array to store data for the pie chart
$pieChartData = array();

// Fetch and process the data
while ($row = $result->fetch_assoc()) {
	$content = $row['topic_name'];
	$intelligence = $row['learning_intelligence'];

	// Check if the intelligence already exists in the array
	if (isset($pieChartData[$intelligence])) {
		$pieChartData[$intelligence]++;
	} else {
		$pieChartData[$intelligence] = 1;
	}
}

// Convert the pie chart data to JavaScript format
$jsPieChartData = '[';
foreach ($pieChartData as $intelligence => $count) {
	$jsPieChartData .= '{ label: "' . $intelligence . '", data: [[' . $count . ']] },';
}
$jsPieChartData = rtrim($jsPieChartData, ',') . ']';

?>

<!DOCTYPE html>
<html class="fixed">

<head>
	<!-- Basic -->
	<meta charset="UTF-8" />

	<title>
		Saana Dashboard
	</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template" />
	<meta name="author" content="okler.net" />

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css" />
 -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- <link href="https://fonts.googleapis.com/css2?family=Andika:wght@400;700&display=swap" rel="stylesheet"> -->
	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="vendor/animate/animate.css" />

	<link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="vendor/select2/css/select2.css" />
	<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
	<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="css/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css" />

	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<style>
		body {
			font-family: 'Poppins', sans-serif;
		}
	</style>
</head>

<body>
	<section class="body">
		<!-- start: header -->
		<?php include 'topbar.php' ?>
		<!-- end: header -->

		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<?php include 'sidebar.php' ?>
			<!-- end: sidebar -->

			<section role="main" class="content-body">

				<!-- start: page -->

				<h5 class="text-dark mb-3 mt-3">Alumni Insights</h5>
				<div class="row">
					<div class="col-lg-6">
						<section class="card card-featured-left card-featured-quaternary mb-4">
							<div class="card-body">
								<div class="widget-summary">
									<div class="widget-summary-col widget-summary-col-icon">
										<div class="summary-icon bg-quaternary">
											<i class="fas fa-user"></i>
										</div>
									</div>
									<div class="widget-summary-col">
										<div class="summary"><br>
											<h4 class="title">Students</h4>
											<div class="info">
												<strong class="amount"><?php echo $alumni ?></strong>
												<span class="text-muted">(Totla number of students)</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>

					<div class="col-lg-6">
						<section class="card card-featured-left card-featured-primary mb-4">
							<div class="card-body">
								<div class="widget-summary">
									<div class="widget-summary-col widget-summary-col-icon">
										<div class="summary-icon bg-primary">
											<i class="fas fa-user-clock"></i>
										</div>
									</div>
									<div class="widget-summary-col">
										<div class="summary"><br>
											<h4 class="title">Teachers</h4>
											<div class="info">
												<strong class="amount"><?php echo $inactive ?></strong>
												<span class="text-muted">(Totla number of teachers)</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>

					<div class="col-lg-6">
						<section class="card card-featured-left card-featured-secondary mb-4">
							<div class="card-body">
								<div class="widget-summary">
									<div class="widget-summary-col widget-summary-col-icon">
										<div class="summary-icon bg-secondary">
											<i class="fas fa-user-check"></i>
										</div>
									</div>
									<div class="widget-summary-col">
										<div class="summary"><br>
											<h4 class="title">Subjects</h4>
											<div class="info">
												<strong class="amount"><?php echo $active ?></strong>
												<span class="text-muted">(Totla subjects till added!)</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>

					<div class="col-lg-6">
						<section class="card card-featured-left card-featured-tertiary mb-4">
							<div class="card-body">
								<div class="widget-summary">
									<div class="widget-summary-col widget-summary-col-icon">
										<div class="summary-icon bg-tertiary"><i class="fas fa-comment-dollar"></i>
										</div>
									</div>
									<div class="widget-summary-col">
										<div class="summary"><br>
											<h4 class="title">Contents</h4>
											<div class="info">
												<strong class="amount"><?php echo $pending ?></strong>
												<span class="text-muted">(Total content uploaded till now!)</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>


				<div class="row">
					<div class="col-lg-6">
						<section class="card">
							<header class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
								</div>

								<h2 class="card-title">Student Insights</h2>
								<p class="card-subtitle">Students data by their learning_intelligences</p>
							</header>
							<div class="card-body">
								<!-- Flot: Bars -->
								<div class="chart chart-md" id="flotBars"></div>
								<script type="text/javascript">
									var flotBarsData = <?php echo $jsIntelligenceData; ?>;
								</script>

							</div>
						</section>
					</div>
					<div class="col-lg-6">
						<section class="card">
							<header class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
								</div>

								<h2 class="card-title">Pie Chart</h2>
								<p class="card-subtitle">Default Pie Chart</p>
							</header>
							<div class="card-body">

								<!-- Flot: Pie -->
								<div class="chart chart-md" id="flotPie"></div>
								<script type="text/javascript">
									var flotPieData = [{
										label: "Visual",
										data: [
											[1, 60]
										],
										color: '#0088cc'
									}, {
										label: "L",
										data: [
											[1, 10]
										],
										color: '#2baab1'
									}, {
										label: "Series 3",
										data: [
											[1, 15]
										],
										color: '#734ba9'
									}, {
										label: "Series 4",
										data: [
											[1, 15]
										],
										color: '#E36159'
									}];

									// See: js/examples/examples.charts.js for more settings.
								</script>

							</div>
						</section>
					</div>
				</div>




				<!-- end: page -->
			</section>
		</div>
	</section>
	<!-- Vendor -->

	<!-- Vendor -->
	<script src="vendor/jquery/jquery.js"></script>
	<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="vendor/popper/umd/popper.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.js"></script>
	<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="vendor/common/common.js"></script>
	<script src="vendor/nanoscroller/nanoscroller.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>

	<!-- Specific Page Vendor -->
	<script src="vendor/select2/js/select2.js"></script>
	<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
	<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>
	<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>
	<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>
	<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>
	<script src="vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
	<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>
	<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

	<!-- Examples -->
	<script src="js/examples/examples.datatables.default.js"></script>
	<script src="js/examples/examples.datatables.row.with.details.js"></script>
	<script src="js/examples/examples.datatables.tabletools.js"></script>


	<!-- Specific Page Vendor -->
	<script src="vendor/jquery-appear/jquery.appear.js"></script>
	<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.js"></script>
	<script src="vendor/flot/jquery.flot.js"></script>
	<script src="vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
	<script src="vendor/flot/jquery.flot.pie.js"></script>
	<script src="vendor/flot/jquery.flot.categories.js"></script>
	<script src="vendor/flot/jquery.flot.resize.js"></script>
	<script src="vendor/jquery-sparkline/jquery.sparkline.js"></script>
	<script src="vendor/raphael/raphael.js"></script>
	<script src="vendor/morris/morris.js"></script>
	<script src="vendor/gauge/gauge.js"></script>
	<script src="vendor/snap.svg/snap.svg.js"></script>
	<script src="vendor/liquid-meter/liquid.meter.js"></script>
	<script src="vendor/chartist/chartist.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

	<!-- Examples -->
	<style>
		#ChartistCSSAnimation .ct-series.ct-series-a .ct-line {
			fill: none;
			stroke-width: 4px;
			stroke-dasharray: 5px;
			-webkit-animation: dashoffset 1s linear infinite;
			-moz-animation: dashoffset 1s linear infinite;
			animation: dashoffset 1s linear infinite;
		}

		#ChartistCSSAnimation .ct-series.ct-series-b .ct-point {
			-webkit-animation: bouncing-stroke 0.5s ease infinite;
			-moz-animation: bouncing-stroke 0.5s ease infinite;
			animation: bouncing-stroke 0.5s ease infinite;
		}

		#ChartistCSSAnimation .ct-series.ct-series-b .ct-line {
			fill: none;
			stroke-width: 3px;
		}

		#ChartistCSSAnimation .ct-series.ct-series-c .ct-point {
			-webkit-animation: exploding-stroke 1s ease-out infinite;
			-moz-animation: exploding-stroke 1s ease-out infinite;
			animation: exploding-stroke 1s ease-out infinite;
		}

		#ChartistCSSAnimation .ct-series.ct-series-c .ct-line {
			fill: none;
			stroke-width: 2px;
			stroke-dasharray: 40px 3px;
		}

		@-webkit-keyframes dashoffset {
			0% {
				stroke-dashoffset: 0px;
			}

			100% {
				stroke-dashoffset: -20px;
			}

			;
		}

		@-moz-keyframes dashoffset {
			0% {
				stroke-dashoffset: 0px;
			}

			100% {
				stroke-dashoffset: -20px;
			}

			;
		}

		@keyframes dashoffset {
			0% {
				stroke-dashoffset: 0px;
			}

			100% {
				stroke-dashoffset: -20px;
			}

			;
		}

		@-webkit-keyframes bouncing-stroke {
			0% {
				stroke-width: 5px;
			}

			50% {
				stroke-width: 10px;
			}

			100% {
				stroke-width: 5px;
			}

			;
		}

		@-moz-keyframes bouncing-stroke {
			0% {
				stroke-width: 5px;
			}

			50% {
				stroke-width: 10px;
			}

			100% {
				stroke-width: 5px;
			}

			;
		}

		@keyframes bouncing-stroke {
			0% {
				stroke-width: 5px;
			}

			50% {
				stroke-width: 10px;
			}

			100% {
				stroke-width: 5px;
			}

			;
		}

		@-webkit-keyframes exploding-stroke {
			0% {
				stroke-width: 2px;
				opacity: 1;
			}

			100% {
				stroke-width: 20px;
				opacity: 0;
			}

			;
		}

		@-moz-keyframes exploding-stroke {
			0% {
				stroke-width: 2px;
				opacity: 1;
			}

			100% {
				stroke-width: 20px;
				opacity: 0;
			}

			;
		}

		@keyframes exploding-stroke {
			0% {
				stroke-width: 2px;
				opacity: 1;
			}

			100% {
				stroke-width: 20px;
				opacity: 0;
			}

			;
		}
	</style>
	<script src="js/examples/examples.charts.js"></script>
</body>

</html>