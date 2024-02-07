<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?=BASEURL?>assets/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>BlissNova</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=BASEURL?>assets/img/logo/fav2.svg" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/fonts/fontawesome.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="<?=BASEURL?>assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?=BASEURL?>assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?=BASEURL?>assets/js/config.js"></script>
  </head>
<style>
 
img#image1 {
    width: 280px;
}
img#image2 {
    width: 280px;
}
  </style>

  <body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover">
      <!-- Logo -->

<a href="index.html" class="auth-cover-brand d-flex align-items-center justify-content-center justify-content-md-start gap-2">
  <span class="app-brand-logo demo">
    <span>
      <img id="image1" src="<?=BASEURL?>assets/img/logo/logo1.png" alt="Image 1">
      <img id="image2" src="<?=BASEURL?>assets/img/logo/logo2.png" alt="Image 2">
    </span>
  </span>
  <span class="app-brand-text demo text-heading fw-bold"></span>
</a>
    
      <!-- /Logo -->
      <div class="authentication-inner row m-0">
        <!-- /Left Section -->
        <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-5 pb-2">
          <img
            src="<?=BASEURL?>assets/img/illustrations/auth-login-illustration-light.png"
            class="auth-cover-illustration w-100"
            alt="auth-illustration"
            data-app-light-img="illustrations/auth-login-illustration-light.png"
            data-app-dark-img="illustrations/auth-login-illustration-dark.png" />
          <img
            src="<?=BASEURL?>assets/img/illustrations/auth-cover-login-mask-light.png"
            class="authentication-image"
            alt="mask"
            data-app-light-img="illustrations/auth-cover-login-mask-light.png"
            data-app-dark-img="illustrations/auth-cover-login-mask-dark.png" />
        </div>
        <!-- /Left Section -->

        <!-- Login -->
        <div
          class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-5 px-4 py-4">
          <div class="w-px-400 mx-auto pt-5 pt-lg-0">
            <h4 class="mb-2 fw-semibold">Welcome to BlissNova! 👋</h4>
            <p class="mb-4">sign-in to your account and start the bliss!</p>

           <form id="formAuthentication" class="mb-3" action="<?=BASEURL?>user/login" method="POST">
              <div class="form-floating form-floating-outline mb-3">
                  <?php $user=$this->db->where('id','4')->get('user_role')->row_array(); ?>
                <input
                  type="text"
                  class="form-control"
                  id="login_id"
                  name="login_id"
                  value=""
                  placeholder="Enter your phone,email or user ID"
                  autofocus   oninput="this.value = this.value.toUpperCase()"/>
                <label for="userid">User ID <?=form_error('login_id'); ?></label>
              </div>
              <div class="mb-3">
                <div class="form-password-toggle">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                        
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        value=""
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                      <label for="password">Password <?php echo form_error('password'); ?></label>
                    </div>
                    <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                  </div>
                </div>
              </div>
              <div class="mb-3 d-flex justify-content-between">
                  <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me">
                  <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>  
                <a href="<?=BASEURL?>user/forgetpassword" class="float-end mb-1">
                  <span>Forgot Password?</span>
                </a>
              </div>
              <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
            </form>
          </div>
        </div>
        <!-- /Login -->
      </div>
    </div>

    <!-- / Content -->
 <script>
    const html = document.querySelector("html");
    const image1 = document.getElementById("image1");
    const image2 = document.getElementById("image2");

    if (html.classList.contains("light-style")) {
      image1.style.display = "block";
      image2.style.display = "none";
    } else if (html.classList.contains("dark-style")) {
      image1.style.display = "none";
      image2.style.display = "block";
    } else {
      image1.style.display = "none";
      image2.style.display = "none";
    }
  </script>
  
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?=BASEURL?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?=BASEURL?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="<?=BASEURL?>assets/vendor/libs/hammer/hammer.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/i18n/i18n.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="<?=BASEURL?>assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?=BASEURL?>assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <!-- Main JS -->
    <script src="<?=BASEURL?>assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?=BASEURL?>assets/js/pages-auth.js"></script>
  </body>
</html>
