<?php
session_start();
include '../connect.php';

$selectQuery = "SELECT * FROM teacher_details ORDER BY id";
$result = $conn->query($selectQuery);

if (!$result) {
    die("Query failed: " . $conn->error);
}

$users = array();
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}
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
                <div class="row">
                    <div class="col">
                        <section class="card">
                            <header class="card-header">
                                <div class="card-actions">
                                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                                </div>

                                <h2 class="card-title">Teacher Details</h2>
                            </header>
                            <div class="card-body">
                                <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                                    <thead>
                                        <tr>
                                            <th>Teacher Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $user) :  ?>
                                            <tr>
                                                <td><?php echo $user['teacher_name'] ?></td>
                                                <td><?php echo $user['email'] ?></td>
                                                <td><?php echo $user['mobile'] ?></td>
                                                <td><?php echo $user['address'] ?></td>
                                                <td><?php echo $user['date_of_birth'] ?></td>
                                            </tr>

                                        <?php endforeach;  ?>
                                    </tbody>
                                </table>
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
</body>

</html>