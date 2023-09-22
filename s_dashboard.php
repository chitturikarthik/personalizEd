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
                                    <a class="nav-link active" data-bs-toggle="tab" href="#beginner_tab">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#intermediate_tab">CSS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#advanced_tab">JAVASCRIPT</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content profile-tab-cont">

                            <!-- Personal Details Tab -->
                            <div class="tab-pane fade show active" id="beginner_tab">

                                <!-- Personal Details -->
                                <div class="row">


                                    <div class="col-lg-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-10 col-lg-12">
                                                        <div class="blog grid-blog flex-fill">
                                                            <div class="blog-image">
                                                                <a href=""><img class="img-fluid" src="assets/html_begin/1.png" alt="Post Image"></a>
                                                                <div class="blog-views">
                                                                    <i class="feather-eye me-1"></i> 225
                                                                </div>
                                                            </div>
                                                            <div class="blog-content">
                                                                <ul class="entry-meta meta-item">
                                                                    <li>
                                                                        <div class="post-author">
                                                                            <a href="profile.html">
                                                                                <img src="img/login-user.jpg" alt="Post Author">
                                                                                <span>
                                                                                    <span class="post-title">Vincent</span>
                                                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec 2022</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <h3 class="blog-title"><a href="blog-details.html">Learning is an objective, Lorem Ipsum is not </a></h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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