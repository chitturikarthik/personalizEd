<?php
session_start();
include 'connect.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Student Dashborad</title>

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
        <?php include 's_dash_topbar.php'; ?>
        <!-- /Header -->

        <!-- Sidebar -->
        <?php include 's_dash_sidebar.php'; ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Your Contents</h3>

                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-md-12">

                        <div class="profile-menu">
                            <ul class="nav nav-tabs nav-tabs-solid">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#beginner_tab">Beginner</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#intermediate_tab">Intermediate</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#advanced_tab">Advnaced</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content profile-tab-cont">

                            <!-- Personal Details Tab -->
                            <div class="tab-pane fade show active" id="beginner_tab">

                                <!-- Personal Details -->
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <!-- <h5 class="card-title">Beginner</h5> -->
                                                <div class="row">
                                                    <div class="col-md-10 col-lg-6">
                                                        <h3>BEGINNER CONTENTS WILL BE DISPLAYED HERE</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /Personal Details -->

                            </div>
                            <!-- /Personal Details Tab -->

                            <!-- Change Password Tab -->
                            <div id="intermediate_tab" class="tab-pane fade">

                                <div class="card">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title">Intermediate</h5> -->
                                        <div class="row">
                                            <div class="col-md-10 col-lg-6">
                                                <h3>INTEMEDIATE CONTENTS WILL BE DISPLAYED HERE</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Change Password Tab -->

                            <div id="advanced_tab" class="tab-pane fade">

                                <div class="card">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title">Advanced</h5> -->
                                        <div class="row">
                                            <div class="col-md-10 col-lg-6">
                                                <h3>ADVANCED CONTENTS WILL BE DISPLAYED HERE</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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