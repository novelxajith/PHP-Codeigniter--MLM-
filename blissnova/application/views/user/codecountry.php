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
      <title>Register Basic - Pages | Materialize - Material Design HTML user Template</title>
      <meta name="description" content="" />
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="<?=BASEURL?>assets/img/favicon/favicon.ico" />
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
      <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/bs-stepper/bs-stepper.css" />
      <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
      <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/select2/select2.css" />
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
      
      
      
      
       <!-- Include flag-icon-css library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

  <!-- Include intl-tel-input CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">

  <!-- Include jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Include intl-tel-input JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
   </head>
   <style>

      .step{
        display:none;
      }
 

img#image1 {
    width: 200px;
}
 img#image2 {
  width: 200px;
}
a.btn.btn-primary.btn-next.waves-effect.waves-light {
    color: white;
}
   </style>
     <!--for form error  -->
 <style>
   .error {
      border: 2px solid red;
   }
   
</style>

   <body>
      <!-- Content -->
      <div class="position-relative">
         <div class="col-lg-6 container-fluid container-p-y">
            <div class="authentication-inner py-4">
               <!-- Register Card -->


                  <!-- Logo -->
                  <div class="app-brand justify-content-center mb-5">
                     <a href="<?=BASEURL?>admin" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                           <span>
                              <img id="image1" src="<?=BASEURL?>assets/img/logo/logo1.png" alt="Image 1">
                               <img id="image2" src="<?=BASEURL?>assets/img/logo/logo2.png" alt="Image 2">
                           </span>
                        </span>
                        <span class="app-brand-text demo text-heading fw-bold">
                          </span>
                     </a>
                  </div>
                  <!-- /Logo -->
                  <div class="card-body mt-2">
                      <h4 class="mb-2 fw-semibold">Bliss Starts From Here 🚀</h4>
                     <p class="mb-4">Your Data is Safe & Secure With Us. </p>
                     <div class="bs-stepper wizard-numbered mt-2">
                        <div class="step" data-target="#account-details">
                           <button type="button" class="step-trigger"></button>
                        </div>
                        <div class="step" data-target="#personal-info">
                           <button type="button" class="step-trigger"></button>
                        </div>
                        <div class="step" data-target="#social-links">
                           <button type="button" class="step-trigger"></button>
                        </div>
                        <div class="bs-stepper-content">
                          
                              <!-- Team Details -->
                  
                              <form class="my-form" method="post" action="<?php echo base_url('user/insertcountry'); ?>">
                              <!-- Personal Info -->
                        
                                
                                 <div class="row g-4">
                        
                                   
                    <div class="col-sm-6">
                                        <div class="form-floating form-floating-outline mb-3">
                                          <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="country-code">
                                                <div class="intl-tel-input">
                                                  <div class="selected-flag"></div>
                                                  <input type="tel" id="phone-number" placeholder="Enter phone number">
                                                </div>
                                              </span>
                                            </div>
                                          </div>
                                          <label for="phone-number">Mobile No</label>
                                        </div>
                                        <span id="phone-error" style="color:red;"></span>

                                            </div>

                                   <button class="btn btn-primary" type="submit"> submit</button>
                                  
                                 </form>
                              </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Register Card -->
               <img
                  alt="mask"
                  src="<?=BASEURL?>assets/img/illustrations/auth-basic-register-mask-light.png"
                  class="authentication-image d-none d-lg-block"
                  data-app-light-img="illustrations/auth-basic-register-mask-light.png"
                  data-app-dark-img="illustrations/auth-basic-register-mask-dark.png" />
            </div>
         </div>
      </div>
      <!-- / Content -->
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-V8ki3sc+W3chIY5z5V5Rg8x0IsXwnflB0peudltDRfR6y+kg6p/mcxb/0hC1J+6UFlv6Z3/f6lKKJlDhWwAbJw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Bootstrap 5 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-dv9XHcTJFhPpRw+Rzp0Gp6cY0bdTY1/Y6ir1UdZ3qoLgnh6JaaD2wEiCUl3qNgyFKYojI5N/bR/T/Od/9Xu+zA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      
      
 <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/intlTelInput.min.js"></script>
  <script>
    var input = document.querySelector("#phone-number");
    var iti = window.intlTelInput(input, {
      // Optional: You can add any configuration options here
      // Example:
      // preferredCountries: ["us", "gb"],
      // initialCountry: "us",
      // separateDialCode: true
    });
  </script>
      
      
     



     
     
     <script>
  $(document).ready(function() {
    // alert("hii");
    $('#phone-number').on('input', function() {
      var mobile = $(this).val();
      if (mobile != '') {
        $.ajax({
          url: "<?php echo base_url('user/mobile_check');?>",
          method: "POST",
          data: {mobile: mobile},
          dataType: "json",
          success: function(data) {
            if (data.status === 'error') {
              // mobile number already exists
              $('#phone-error').text('Mobile Number Already Exists');
            } else {
              // mobile number is available
              $('#phone-error').text('');
            }
          }
        });
      } else {
        $('#phone-error').text('');
      }
    });
  });
</script>

     


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

<script>
function showToast() {
var toastEl = document.getElementById('my-toast');
var toast = new bootstrap.Toast(toastEl);
toast.show();
}
</script>

 <script>

// document.addEventListener('DOMContentLoaded', function() {
//   const forms = document.querySelectorAll('.my-form');
//   const submitBtn = forms[forms.length - 1].querySelector('button[type="submit"]');

//   submitBtn.addEventListener('click', function(e) {
//     e.preventDefault();

//     forms.forEach((form) => {
//       form.target = 'hidden-iframe';
//       form.submit();
//     });
//   });
// });


 </script>

<script>
   document.addEventListener("DOMContentLoaded", function() {
      const form = document.querySelector(".my-form");
      const sections = Array.from(document.querySelectorAll(".content"));
      const prevButtons = Array.from(document.querySelectorAll(".btn-prev"));
      const nextButtons = Array.from(document.querySelectorAll(".btn-next"));

      let currentSectionIndex = 0;

      function validateSection() {
       
         if (currentSectionIndex === 1) {
     
            const phonenumber = document.querySelector('input#phone-number');
       
        
            
             if (phonenumber.value.trim() === "") {
                phonenumber.classList.add("error");
                $('#phone-error').text('Please enter your mobile number');
                return false;
            } else if (!/^[0-9]+$/.test(phonenumber.value.trim())) {
                phonenumber.classList.add("error");
                $('#phone-error').text('Please enter a valid numeric mobile number');
                return false;
            } else {
                phonenumber.classList.remove("error");
                $('#phone-error').text('');
            }
            
           
         

         return true;
      }

      function navigateToNextSection() {
         if (validateSection()) {
            currentSectionIndex++;
            showSection(currentSectionIndex);
         }
      }

      function navigateToPrevSection() {
         currentSectionIndex--;
         showSection(currentSectionIndex);
      }

      prevButtons[0].addEventListener("click", navigateToPrevSection);
      prevButtons[1].addEventListener("click", navigateToPrevSection);
      prevButtons[2].addEventListener("click", navigateToPrevSection);
      nextButtons[0].addEventListener("click", navigateToNextSection);
      nextButtons[1].addEventListener("click", navigateToNextSection);

      showSection(currentSectionIndex);
   });
</script>

<script>
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>


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
      <!-- Vendors JS -->
      <script src="<?=BASEURL?>assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
      <script src="<?=BASEURL?>assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
      <script src="<?=BASEURL?>assets/vendor/libs/select2/select2.js"></script>
      <!-- Main JS -->
      <script src="<?=BASEURL?>assets/js/main.js"></script>
      <!-- Page JS -->
      <script src="<?=BASEURL?>assets/js/form-wizard-numbered.js"></script>
      <script src="<?=BASEURL?>assets/js/form-wizard-validation.js"></script>
      <!-- Main JS -->
      <script src="<?=BASEURL?>assets/js/main.js"></script>
      <!-- Page JS -->
      <script src="<?=BASEURL?>assets/js/pages-auth.js"></script>
   </body>
</html>