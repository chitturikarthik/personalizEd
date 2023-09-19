<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Login</title>

  <meta name="keywords" content="WebSite Template" />
  <meta name="description" content="Porto - Multipurpose Website Template" />
  <meta name="author" content="okler.net" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no" />

  <!-- Web Fonts  -->
  <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css" />

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="vendor/animate/animate.compat.css" />
  <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css" />
  <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css" />

  <!-- Theme CSS -->
  <link rel="stylesheet" href="css/theme.css" />
  <link rel="stylesheet" href="css/theme-elements.css" />
  <link rel="stylesheet" href="css/theme-blog.css" />
  <link rel="stylesheet" href="css/theme-shop.css" />

  <!-- Skin CSS -->
  <link id="skinCSS" rel="stylesheet" href="css/skins/default.css" />

  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="css/custom.css" />

  <!-- Head Libs -->
  <script src="vendor/modernizr/modernizr.min.js"></script>
</head>

<body>

  <div class="body m-5" style="align-items:center;place-items:center;">
    <div role="main" class="main">
      <div id="examples" class="container p-5">

        <div class="featured-box featured-box-primary text-start w-50">
          <div class="box-content">
            <h4 class="color-primary font-weight-semibold text-4 mb-3 text-center">
              Login to your account!
            </h4>
            <form action="access_check.php" id="frmSignIn" method="post" class="needs-validation">
              <div class="row">
                <div class="form-group col">
                  <label class="form-label">Email Address</label>
                  <input type="email" name="username" id="username" value="" class="form-control form-control-md" required autocomplete="on" />
                </div>
              </div>
              <div class="row">
                <div class="form-group col">
                  <!-- <a class="float-end" href="#">(Lost Password?)</a> -->
                  <label class="form-label">Password</label>
                  <input type="password" name="pwd" id="pwd" value="" class="form-control form-control-md" required autocomplete="on" />
                </div>
              </div>

              <div class="row">
                <div class="form-group col">
                  <label class="form-label">Who are you?</label>
                  <select class="form-control form-control-md" name="role" id="role">
                    <option>Select your role</option>
                    <option value="0">Student</option>
                    <option value="1">Teacher</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="form-group col">

                </div>
                <div class="form-group col-lg-6">
                  <a class="btn btn-danger btn-modern float-end m-2" href="index.php">Go Back</a>
                  <button type="submit" name="accesscheck" class="btn btn-primary btn-modern float-end m-2">Login<button>
                </div>

              </div class="row">
              <p class="text-center">New to here? <a href="register.php">Create an account!</a></p>
              <div>

              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Vendor -->
  <script src="vendor/plugins/js/plugins.min.js"></script>

  <!-- Theme Base, Components and Settings -->
  <script src="js/theme.js"></script>

  <!-- Current Page Vendor and Views -->
  <script src="js/examples/examples.forms.js"></script>

  <!-- Theme Custom -->
  <script src="js/custom.js"></script>

  <!-- Theme Initialization Files -->
  <script src="js/theme.init.js"></script>
</body>

</html>