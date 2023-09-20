<?php session_start(); ?>
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
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="" class="logo">
                    <img src="./img/logo-default-slim.png" alt="Logo" width="250" height="70">
                </a>
                <a href="" class="logo logo-small">
                    <img src="./img/logo-default-slim.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->

            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <!-- Search Bar -->
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <!-- /Search Bar -->

            <!-- Mobile Menu Toggle -->
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>
            <!-- /Mobile Menu Toggle -->

            <!-- Header Right Menu -->
            <ul class="nav user-menu">
                <li class="nav-item dropdown language-drop me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="assets/img/icons/header-icon-01.svg" alt="">
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:;"><i class="flag flag-lr me-2"></i>English</a>
                        <a class="dropdown-item" href="javascript:;"><i class="flag flag-bl me-2"></i>Francais</a>
                        <a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
                    </div>
                </li>
                <!-- Notifications -->
                <li class="nav-item dropdown noti-dropdown me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="assets/img/icons/header-icon-05.svg" alt="">
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <!-- /Notifications -->
                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list">
                        <img src="assets/img/icons/header-icon-04.svg" alt="">
                    </a>
                </li>

                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor">
                            <div class="user-text">
                                <h6>Ryan Taylor</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Ryan Taylor</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="inbox.html">Inbox</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
                <!-- /User Menu -->

            </ul>
            <!-- /Header Right Menu -->

        </div>
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
                            <li class="active"><a href="blog.html">Active Blog</a></li>
                            <li><a href="pending-blog.html">Pending Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <a href="add-blog.html" class="btn btn-primary btn-blog mb-3"><i class="feather-plus-circle me-1"></i> Add New</a>
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
                                                <img src="assets/img/profiles/avatar-01.jpg" alt="Post Author">
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
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.html" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a>
                                        <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i> Delete</a>
                                    </div>
                                    <div class="text-end inactive-style">
                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteNotConfirmModal"><i class="feather-eye-off me-1"></i> Inactive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                    <!-- Blog Post -->
                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.html"><img class="img-fluid" src="assets/img/category/blog-2.jpg" alt="Post Image"></a>
                                <div class="blog-views">
                                    <i class="feather-eye me-1"></i> 132
                                </div>

                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.html">
                                                <img src="assets/img/profiles/avatar-02.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Lois A</span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec 2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.html">Discussion Increase student learning</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.html" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a>
                                        <a href="edit-blog.html" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i></i> Delete</a>
                                    </div>
                                    <div class="text-end inactive-style">
                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteNotConfirmModal"><i class="feather-eye-off me-1"></i> Inactive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                    <!-- Blog Post -->
                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.html"><img class="img-fluid" src="assets/img/category/blog-3.jpg" alt="Post Image"></a>
                                <div class="blog-views">
                                    <i class="feather-eye me-1"></i> 344
                                </div>

                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.html">
                                                <img src="assets/img/profiles/avatar-03.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Levell Scott</span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec 2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.html">Music reduces stress,Lorem Ipsum is not </a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.html" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a>
                                        <a href="edit-blog.html" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i></i> Delete</a>
                                    </div>
                                    <div class="text-end inactive-style">
                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteNotConfirmModal"><i class="feather-eye-off me-1"></i> Inactive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                    <!-- Blog Post -->
                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.html"><img class="img-fluid" src="assets/img/category/blog-4.jpg" alt="Post Image"></a>
                                <div class="blog-views">
                                    <i class="feather-eye me-1"></i> 215
                                </div>

                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.html">
                                                <img src="assets/img/profiles/avatar-04.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Calvin</span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec 2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.html">Sports reduced risk of obesity, Lorem Ipsum is not </a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.html" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a>
                                        <a href="edit-blog.html" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i></i> Delete</a>
                                    </div>
                                    <div class="text-end inactive-style">
                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteNotConfirmModal"><i class="feather-eye-off me-1"></i> Inactive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                    <!-- Blog Post -->
                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.html"><img class="img-fluid" src="assets/img/category/blog-5.jpg" alt="Post Image"></a>
                                <div class="blog-views">
                                    <i class="feather-eye me-1"></i> 285
                                </div>

                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.html">
                                                <img src="assets/img/profiles/avatar-05.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Aaliyah </span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec 2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.html">Yoga can ease arthritis symptoms</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.html" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a>
                                        <a href="edit-blog.html" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i></i> Delete</a>
                                    </div>
                                    <div class="text-end inactive-style">
                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteNotConfirmModal"><i class="feather-eye-off me-1"></i> Inactive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                    <!-- Blog Post -->
                    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                        <div class="blog grid-blog flex-fill">
                            <div class="blog-image">
                                <a href="blog-details.html"><img class="img-fluid" src="assets/img/category/blog-1.jpg" alt="Post Image"></a>
                                <div class="blog-views">
                                    <i class="feather-eye me-1"></i> 654
                                </div>

                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="profile.html">
                                                <img src="assets/img/profiles/avatar-06.jpg" alt="Post Author">
                                                <span>
                                                    <span class="post-title">Malynne</span>
                                                    <span class="post-date"><i class="far fa-clock"></i> 4 Dec 2022</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details.html">Education gives Greater Sense of Disciplinet</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="row">
                                <div class="edit-options">
                                    <div class="edit-delete-btn">
                                        <a href="edit-blog.html" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a>
                                        <a href="edit-blog.html" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i> Delete</a>
                                    </div>
                                    <div class="text-end inactive-style">
                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteNotConfirmModal"><i class="feather-eye-off me-1"></i> Inactive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Post -->


                </div>
                <!-- Pagination -->
                <div class="row ">
                    <div class="col-md-12">
                        <div class="pagination-tab  d-flex justify-content-center">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="feather-chevron-left mr-2"></i>Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next<i class="feather-chevron-right ml-2"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Pagination -->
                <!-- Modal -->
                <div class="modal fade contentmodal" id="deleteModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content doctor-profile">
                            <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="delete-wrap text-center">
                                    <div class="del-icon"><i class="feather-x-circle"></i></div>
                                    <h2>Sure you want to delete</h2>
                                    <div class="submit-section">
                                        <a href="blog.html" class="btn btn-success me-2">Yes</a>
                                        <a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal -->
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