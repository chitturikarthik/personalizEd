<?php session_start();
include 'connect.php';

if (!isset($_SESSION['access'])) {
    header("Location:index.php");
    exit();
}
// Logout logic
if (isset($_GET['logout'])) {
    // Clear all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header("Location: s_login.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Student Dashboard</title>
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
</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <?php include 's_dash_topbar.php' ?>
        <!-- /Header -->

        <!-- Sidebar -->
        <?php include 's_dash_sidebar.php' ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Blog List -->
                <div class="row">
                    <div class="col-md-9">
                        <ul class="list-links mb-4">
                            <li class="active"><a href="blog.html">Beginner</a></li>
                            <li><a href="pending-blog.html">Intermediate</a></li>
                            <li><a href="pending-blog.html">Advanced</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">

                    <!-- Blog Post -->
                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="topic_content.php"><img class="img-fluid" src="assets/img/category/blog-6.jpg" alt="Post Image"></a>
                                <div class="blog-views">
                                    <i class="feather-eye me-1"></i> 225
                                </div>

                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.html">
                                                <img class="img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Teacher Name</span>

                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.html">Video Title </a><span class="post-date"><i class="far fa-clock"></i> Uploaded Date</span></h3>
                                <p>About Video</p>
                            </div>
                            <!-- <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.html" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a>
                                        <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </div> -->
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

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

</html>