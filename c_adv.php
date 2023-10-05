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
                                    <a class="nav-link active" data-bs-toggle="tab" href="#beginner_tab">REACT JS</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#intermediate_tab">MONGO DB</a>
                                </li>
                            </ul>
                        </div>
                        </form>

                        <div class="tab-content profile-tab-cont">

                            <!-- Personal Details Tab -->
                            <div class="tab-pane fade show active" id="beginner_tab">

                                <div class="row">
                                    <!-- Blog Post -->
                                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                                        <div class="blog grid-blog flex-fill">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="ratio ratio-16x9">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/SqcY0GlETPk?si=weLy3mQT27gYd4rn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                                        <div class="blog grid-blog flex-fill">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="ratio ratio-16x9">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/2LsOyOaobrc?si=4tm41_M8fryKEv92" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                                        <div class="blog grid-blog flex-fill">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="ratio ratio-16x9">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/6DP7cMN99zQ?si=UzVWvZgpbex-R53J" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- /Blog Post -->

                            </div>

                            <div id="intermediate_tab" class="tab-pane fade">

                                <div class="row">
                                    <!-- Blog Post -->
                                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                                        <div class="blog grid-blog flex-fill">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="ratio ratio-16x9">
                                                        <iframe src="https://www.youtube.com/embed/6bzTrChjEdc?autohide=0&amp;showinfo=0&amp;controls=0"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                                        <div class="blog grid-blog flex-fill">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="ratio ratio-16x9">
                                                        <iframe src="https://www.youtube.com/embed/6bzTrChjEdc?autohide=0&amp;showinfo=0&amp;controls=0"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                                        <div class="blog grid-blog flex-fill">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="ratio ratio-16x9">
                                                        <iframe src="https://www.youtube.com/embed/6bzTrChjEdc?autohide=0&amp;showinfo=0&amp;controls=0"></iframe>
                                                    </div>
                                                </div>
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
            <!-- /Page Wrapper -->

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