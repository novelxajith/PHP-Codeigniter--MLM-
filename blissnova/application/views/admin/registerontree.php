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
      <title>Registeration</title>
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
      <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
   </head>
   <style>

     .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input, .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=text], .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=tel] {
    padding-left: 82px;
    max-width: 100%;
    height: 51px;
}
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
                     <a href="index.html" class="app-brand-link gap-2">
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
                              <div id="account-details" class="content">
                                 <div class="content-header mb-3">
                                    <h6 class="mb-0">Team Details</h6>
                                    <small>Enter Your Team Details.</small>
                                 </div>
                            <!--=form_open_multipart('admin/register')   -->
                             <form id="myForm" class="my-form" method="post" action="<?php echo base_url('admin/register_ontree'); ?>">
                                 <div class="row g-4">
                                    
                                    <div class="col-sm-6">
                                      <div class="form-floating form-floating-outline mb-3">
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="username"
                                          placeholder=""
                                          autofocus
                                          value=""
                                          oninput="this.value = this.value.toUpperCase()"
                                        >
                                        
                                        <label for="username">Sponsor ID</label>
                                      </div><span id="username-error"></span>
                                    </div>
                                    <input
                                          type="hidden"
                                          class="form-control"
                                          value="<?=$ref?>"
                                          name="parent_id"
                                        oninput="this.value = this.value.toUpperCase()">
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="name"
                                          placeholder="Enter your Sponsor Name"
                                          autofocus
                                          value=""
                                        >
                                        <label for="username">Sponsor Name</label>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-select" name="ref_id" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option value="">Select Wing </option>
                                        <option value="" id="center">Wing 1</option>
                                        <option value="" id="left">Wing 2</option>
                                        <option value="" id="right">Wing 3</option>
                                    </select><?php echo form_error('ref_id') ?>

                                          <label for="exampleFormControlSelect1">Wing</label>
                                  </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-4">
                                          <input
                                          type="text"
                                          name="position"
                                          class="form-control"
                                          id="position"
                                          autofocus
                                          value="<?=$position?>"
                                          readonly
                                        >
                                          <label for="exampleFormControlSelect1">Team</label>
                                  </div><?php echo form_error('position') ?>
                                    </div>
                                    
                                    
                                 </div>
                                
                                 <div class="row">
                                 <div class="col-12 d-flex justify-content-between">
                                       <a class="btn btn-outline-secondary btn-prev" disabled>
                                       <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                                       <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                       </a>
                                       <a class="btn btn-primary btn-next">
                                       <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                       <i class="mdi mdi-arrow-right"></i>
                                       </a>
                                    </div>
                                    </div>
                              </div>
                              
                              
                              
                              <!-- Personal Info -->
                                 <div id="personal-info" class="content">
                                 <div class="content-header mb-3">
                                    <h6 class="mb-0">Personal Info</h6>
                                    <small>Enter Your Personal Info.</small>
                                 </div>
                                
                                 
                                 <div class="row g-4">
                                    <div class="col-sm-6">
                                  <div class="form-floating form-floating-outline">
                                           
                                          <input type="text" id="first-name" name="first_name"  value="" class="form-control" placeholder="Firstname"  oninput="this.value = this.value.toUpperCase()"/>
                                          <label for="first-name">First Name</label>
                                       </div>
                                        <span id="firstname-error" style="color:red;"></span><?=form_error('first_name') ?>
                                       <span style="color:red;">(As per Bank Passbook)</span>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-floating form-floating-outline">
                                           
                                          <input type="text" id="last-name" name="last_name" value="" class="form-control" placeholder="Lastname"  oninput="this.value = this.value.toUpperCase()"/>
                                          <label for="last-name">Last Name</label>
                                       </div>
                                       <span id="lastname-error" style="color:red;"></span><?=form_error('last_name') ?>
                                       <span style="color:red;">(As per Bank Passbook)</span>
                                    </div>
                                    <!--<div class="col-sm-6">-->
                                    <!--<div class="form-floating form-floating-outline mb-3">-->
                                    <!--      <input-->
                                    <!--        type="text"-->
                                    <!--        class="form-control"-->
                                    <!--        id="phone-number"-->
                                    <!--        name="mobile"-->
                                    <!--        placeholder="Enter your phone number"-->
                                    <!--        autofocus />-->
                                    <!--      <label for="Mobile No">Mobile No</label>-->
                                    <!--    </div>-->
                                    <!--    <span id="phone-error" style="color:red;"><?php echo form_error('mobile') ?>-->
                                    <!--</div>-->
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="phone"
                                            name="mobile"
                                            placeholder="Enter your phone number"
                                            autofocus />
                                            <input id="hphone" class="form-control"  type="hidden">
                                          <label for="Mobile No">Mobile No</label>
                                        </div><span id="phone-error" style="color:red;"></span><?php echo form_error('mobile') ?>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="Email"
                                          name="email"
                                          placeholder="Enter your Email"
                                          autofocus />
                                        <label for="Email">Email</label>
                                      </div><span id="email-error"  style="color:red;"></span><?php echo form_error('email') ?>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-4">
                                      <select class="form-select" name="employment" id="Employment" aria-label="Default select example" >
                                            <option value="">Select </option>
                                            <option value="Employed">Employed</option>
                                            <option value="Self Employed">Self Employed</option>
                                            <option value="Unemployed">Unemployed</option>
                                            <option value="Student">Student</option>
                                          </select>
                                          <label for="exampleFormControlSelect1">Employment Status</label>
                                  </div><span id="employment-error" style="color:red;"></span>
                                    </div>
                               
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="Address1"
                                            name="address1"
                                            placeholder="Enter your Address1"
                                            autofocus />
                                          <label for="Address1">Address1</label>
                                        </div><span id="address1-error" style="color:red;"></span><?php echo form_error('address1') ?>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="Address2"
                                            name="address2"
                                            placeholder="Enter your Address2"
                                            autofocus />
                                          <label for="Address2">Address2</label>
                                        </div><span id="address2-error" style="color:red;"></span><?php echo form_error('address2') ?>
                                    </div> 
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="Pincode"
                                            name="pincode"
                                            placeholder="Enter your Pincode"
                                            autofocus />
                                          <label for="Pincode">Pincode</label>
                                        </div><span id="pincode-error" style="color:red;"></span><?php echo form_error('pincode') ?>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="City"
                                            name="city"
                                            placeholder="Enter your City"
                                            autofocus />
                                          <label for="City">City</label>
                                        </div><span id="city-error" style="color:red;"></span><?php echo form_error('city') ?>
                                    </div>
                             
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="District"
                                            name="district"
                                            placeholder="Enter your District"
                                            autofocus />
                                          <label for="District">District</label>
                                        </div><span id="district-error" style="color:red;" ></span><?php echo form_error('district') ?>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="State"
                                            name="state"
                                            placeholder="Enter your State"
                                            autofocus />
                                          <label for="State">State</label>
                                        </div><span id="state-error" style="color:red;"></span><?php echo form_error('state') ?>
                                    </div>
                                  
                                 </div>
                                 <div class="row">
                                 <div class="col-12 d-flex justify-content-between">
                                       <a class="btn btn-outline-secondary btn-prev">
                                       <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                                       <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                       </a>
                                       <a class="btn btn-primary btn-next">
                                       <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                       <i class="mdi mdi-arrow-right"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <!-- KYC Details -->
                              <div id="social-links" class="content">
                                 <div class="content-header mb-3">
                                    <h6 class="mb-0">KYC Details(optional)</h6>
                                    <small>Enter Your KYC Details.</small>
                                 </div>
                                 
                                 <div class="row g-4">
                                 <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="Aadharnumber"
                                            name="aadhar_no"
                                            placeholder="Enter your Aadhar number"
                                            autofocus />
                                          <label for="Aadhar number">Aadhar number</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="PANnumber"
                                            name="pan_no"
                                            placeholder="Enter your PAN number"
                                            autofocus />
                                          <label for="PAN number">PAN number</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="Bank Name "
                                            name="bank_name"
                                            placeholder="Enter your Bank Name "
                                            autofocus />
                                          <label for="Bank Name ">Bank Name </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="Branch Name"
                                            name="branch"
                                            placeholder="Enter your Branch Name"
                                            autofocus />
                                          <label for="Branch Name">Branch Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="Account No "
                                            name="acc_no"
                                            placeholder="Enter your  Account No "
                                            autofocus />
                                          <label for="Account No "> Account No </label>
                                        </div>
                                    </div>
                                        <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="Account Holder Name "
                                            name="acc_name"
                                            placeholder="Enter your Account Holder Name "
                                            autofocus />
                                          <label for="Account Holder Name"> Account Holder Name </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="IFSC code "
                                            name="ifsc"
                                            placeholder="Enter your IFSC code "
                                            autofocus />
                                          <label for="IFSC code ">IFSC code +</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex justify-content-between">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="remember-me" required>
                                        <a href="https://demo-web-site.com/blissnova/newdev/dist">agree the terms & condition</a>
                                       </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                       <a class="btn btn-outline-secondary btn-prev">
                                       <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                                       <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                       </a>
                                       <button type="submit" id="submit" class="btn btn-primary ">Submit</button>
                                      <!--<a href="<?=BASEURL?>user/registrationsucesspage"<button type="submit" class="btn btn-primary btn-submit">Submit</button></a>-->
                                    </div>
                                 </div>
<!--=form_close();-->
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


      <script>
          
     $(document).ready(function() {
        
      $('#username').on('input', function() {
         
        var username = $(this).val();
        if (username != '') {
          $.ajax({
            url: "<?php echo base_url('user/get_user_data'); ?>",
            method: "POST",
            data: {username: username},
            dataType: "json",
            success: function(data) {
              if (data.left_user && data.right_user) {
                $('#left').val(data.left_user);
                $('#right').val(data.right_user);
                $('#center').val(username);
                $('#name').val(data.name);
                 
    
              } else {
                $('#left').val('');
                $('#right').val('');
                $('#center').val('');
                $('#name').val('');
                
              }
            }
          });
        } else {
          $('#left').val('');
          $('#right').val('');
          $('#center').val('');
          $('#name').val('');
          
        }
      });
    });
    
    </script>
    
     <script>
    $(document).ready(function() {
      $('#username').on('input', function() {
        var username = $(this).val();
        if (username != '') {
          $.ajax({
            url: "<?php echo base_url('user/check_username'); ?>",
            method: "POST",
            data: {username: username},
            dataType: "json",
            success: function(data) {
              if (data.status == 'error') {
                // username is not available
                $('#username-error').text('Invalid Sponsor Id');
              } else {
                // username is available
                $('#username-error').text('');
              }
            }
          });
        } else {
          $('#username-error').text('');
        }
      });
    });
    </script>
    
<script>
  $(document).ready(function() {
   
    $('#Email').on('input', function() {
      var email = $(this).val();
      if (email != '') {
        $.ajax({
          url: "<?php echo base_url('user/check_email'); ?>",
          method: "POST",
          data: {email: email},
          dataType: "json",
          success: function(data) {
            if (data.status === 'error') {
              // email already exists
              $('#email-error').text('Email Already Exists');
            } else {
              // email is available
              $('#email-error').text('');
            }
          }
        });
      } else {
        $('#email-error').text('');
      }
    });
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
  // Combine the event listeners for the "input" event on the "Pincode" input field
  $(document).ready(function() {
    $('#Pincode').on('input', function() {
      fetchLocationData();
    });

    function fetchLocationData() {
      var pincode = document.getElementById("Pincode").value;
      var url = "https://api.postalpincode.in/pincode/" + pincode;

      fetch(url)
        .then(function(response) {
          return response.json();
        })
        .then(function(data) {
          if (data[0].Status === "Success") {
            // Extract the desired location information from the response
            var city = data[0].PostOffice[0].Name;
            var district = data[0].PostOffice[0].District;
            var state = data[0].PostOffice[0].State;

            // Set the values in the corresponding input fields
            document.getElementById("City").value = city;
            document.getElementById("District").value = district;
            document.getElementById("State").value = state;
          } else {
            console.log("Invalid PIN code");
          }
        })
        .catch(function(error) {
          console.log("Error fetching location data:", error);
        });
    }
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
   document.addEventListener("DOMContentLoaded", function() {
      const form = document.querySelector(".my-form");
      const sections = Array.from(document.querySelectorAll(".content"));
      const prevButtons = Array.from(document.querySelectorAll(".btn-prev"));
      const nextButtons = Array.from(document.querySelectorAll(".btn-next"));

      let currentSectionIndex = 0;

      function showSection(index) {
         sections.forEach((section, i) => {
            if (i === index) {
               section.style.display = "block";
            } else {
               section.style.display = "none";
            }
         });

         if (index === 0) {
            prevButtons[0].disabled = true;
            prevButtons[1].disabled = true;
         } else {
            prevButtons[0].disabled = false;
            prevButtons[1].disabled = false;
         }

         if (index === sections.length - 1) {
            nextButtons[0].style.display = "none";
            nextButtons[1].style.display = "none";
         } else {
            nextButtons[0].style.display = "block";
            nextButtons[1].style.display = "block";
         }
      }

      function validateSection() {
         // Perform validation for each section here

        // Example validation for the "account-details" section
         if (currentSectionIndex === 0) {
            const username = document.querySelector('input#username');
            const refId = document.querySelector('select[name="ref_id"]');
           const position = document.querySelector('input#position');

            if (username.value.trim() === "") {
               username.classList.add("error");
               return false;
            } else {
               username.classList.remove("error");
            }

            if (refId.value.trim() === "") {
               refId.classList.add("error");
               return false;
            } else {
               refId.classList.remove("error");
            }

            if (position.value.trim() === "") {
               position.classList.add("error");
               return false;
            } else {
               position.classList.remove("error");
            }
         }

         // Example validation for the "personal-info" section
         if (currentSectionIndex === 1) {
            const firstName = document.querySelector('input#first-name');
            const lastName = document.querySelector('input#last-name');
            const phonenumber = document.querySelector('input#phone');
            const phonenumbersecond = document.querySelector('input#hphone');
            const email = document.querySelector('input#Email');
            const employment = document.querySelector('select[name="employment"]');
            const address1 = document.querySelector('input#Address1');
            const address2 = document.querySelector('input#Address2');
            const city = document.querySelector('input#City');
            const district = document.querySelector('input#District');
            const state = document.querySelector('input#State');
            const pincode = document.querySelector('input#Pincode');

            if (firstName.value.trim() === "") {
               firstName.classList.add("error");
               $('#firstname-error').text('Please enter your firstname');
               return false;
            } else {
               firstName.classList.remove("error");
               $('#firstname-error').text('');
            }

            // if (lastName.value.trim() === "") {
            //   lastName.classList.add("error");
            //   $('#lastname-error').text('Please enter your lastname');
            //   return false;
            // } else {
            //   lastName.classList.remove("error");
            //   $('#lastname-error').text('');
            // }
            
            // if (phonenumber.value.trim() === "") {
            //   phonenumber.classList.add("error");
            //   $('#phone-error').text('Please enter your mobile number');
            //   return false;
            // } else {
            //   phonenumber.classList.remove("error");
            //   $('#phone-error').text('');
            // }
            
        //     if (phonenumber.value.trim() === "") {
        //     phonenumber.classList.add("error");
        //     $('#phone-error').text('Please enter your mobile number');
        //     return false;
        // } else {
        //     phonenumber.classList.remove("error");
        //     $('#phone-error').text('');
        // }
        
         if (phonenumber.value.trim() === "") {
            phonenumber.classList.add("error");
            $('#phone-error').text('Please enter your mobile number');
            return false;
            
        }else if(phonenumber.value.trim() != ""){
            
            $.ajax({
              url: "<?php echo base_url('user/mobile_check');?>",
              method: "POST",
              data: {mobile: phonenumber.value.trim()},
              dataType: "json",
              success: function(data) {
                if (data.status === 'error') {
                  // mobile number already exists
                  $('#phone-error').text('Mobile Number Already Exists');
                  return false;
                } else {
                  // mobile number is available
                  $('#phone-error').text('');
                }
              }
            });
            
        } else {
            phonenumber.classList.remove("error");
            $('#phone-error').text('');
        }

            
            if (email.value.trim() === "") {
              email.classList.add("error");
              $('#email-error').text('Please enter your email id');
              return false;
            } else {
              email.classList.remove("error");
              $('#email-error').text('');
            }
            
            const emailPattern = /^\S+@\S+\.\S+$/;
            if (!emailPattern.test(email.value.trim())) {
              email.classList.add("error");
              $('#email-error').text('Invalid email id');
              return false;
            } else {
              email.classList.remove("error");
              $('#email-error').text('');
            }
            
            
            if (employment.value.trim() === "") {
              employment.classList.add("error");
              $('#employment-error').text('Please select employment status');
              return false;
            } else {
              employment.classList.remove("error");
              $('#employment-error').text('');
            }
            
            if (address1.value.trim() === "") {
               address1.classList.add("error");
               $('#address1-error').text('Please enter your Address1');
               return false;
            } else {
               address1.classList.remove("error");
               $('#address1-error').text('');
            }
            
            if (address2.value.trim() === "") {
               address2.classList.add("error");
               $('#address2-error').text('Please enter your Address2');
               return false;
            } else {
               address2.classList.remove("error");
               $('#address2-error').text('');
            }
            
            if (city.value.trim() === "") {
               city.classList.add("error");
               $('#city-error').text('Please enter your city');
               return false;
            } else {
               city.classList.remove("error");
               $('#city-error').text('');
            }
            
            if (district.value.trim() === "") {
               district.classList.add("error");
               $('#district-error').text('Please enter your district');
               return false;
            } else {
               district.classList.remove("error");
               $('#district-error').text('');
            }
            
            if (state.value.trim() === "") {
               state.classList.add("error");
               $('#state-error').text('Please enter your state');
               return false;
            } else {
               state.classList.remove("error");
               $('#state-error').text('');
            }
            
            if (pincode.value.trim() === "") {
               pincode.classList.add("error");
                $('#pincode-error').text('Please enter your pincode');
               return false;
            } else {
               pincode.classList.remove("error");
                $('#pincode-error').text('');
            }
         }
         
            // Validate Aadhar number (12 digits)
            function isValidAadhar(aadhar) {
              const aadharRegex = /^\d{12}$/;
              return aadharRegex.test(aadhar);
            }
            
            // Validate PAN number (format: ABCD1234A)
            function isValidPan(pan) {
              const panRegex = /^[A-Z]{5}\d{4}[A-Z]{1}$/;
              return panRegex.test(pan);
            }
            
            // Validate account number (numeric format)
            function isValidAccountNumber(accountNumber) {
              const accountNumberRegex = /^\d+$/;
              return accountNumberRegex.test(accountNumber);
            }
            
            // Validation in Section 3
            if (currentSectionIndex === 3) {
              const aadhar = document.querySelector('input#Aadharnumber');
              const pan = document.querySelector('input#PANnumber');
              const accountnumber = document.querySelector('input#ccount-No');
            
              if (aadhar.value.trim() !== "" && !isValidAadhar(aadhar.value.trim())) {
                aadhar.classList.add("error");
                return false;
              } else {
                aadhar.classList.remove("error");
              }
            
              if (pan.value.trim() !== "" && !isValidPan(pan.value.trim())) {
                pan.classList.add("error");
                return false;
              } else {
                pan.classList.remove("error");
              }
            
              if (accountnumber.value.trim() !== "" && !isValidAccountNumber(accountnumber.value.trim())) {
                accountnumber.classList.add("error");
                return false;
              } else {
                accountnumber.classList.remove("error");
              }
            }

         // Add validation for other sections if needed

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
    $('#myForm').on('submit', function () {
    $('#submit').attr('disabled', 'disabled');
});
</script>
<script>
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

 <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>-->

    <script>
        
//     var telInput = $("#phone"),
//       errorMsg = $("#error-msg"),
//       validMsg = $("#valid-msg");
    
//     // initialise plugin
//     telInput.intlTelInput({
    
//       allowExtensions: true,
//       formatOnDisplay: true,
//       autoFormat: true,
//       autoHideDialCode: true,
//       autoPlaceholder: true,
//       defaultCountry: "in",
//       ipinfoToken: "yolo",
    
//       nationalMode: false,
//       numberType: "MOBILE",
//       //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
//       preferredCountries: ['sa', 'ae', 'qa','om','bh','kw','ma'],
//       preventInvalidNumbers: true,
//       separateDialCode: true,
//       initialCountry: "auto",
//       geoIpLookup: function(callback) {
//       $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
//         var countryCode = (resp && resp.country) ? resp.country : "";
//         callback(countryCode);
//       });
//     },
//       utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
//     });
    
//     var reset = function() {
//       telInput.removeClass("error");
//       errorMsg.addClass("hide");
//       validMsg.addClass("hide");
//     };
    
//     // // on blur: validate
//     // telInput.keyup(function() {
//     //   reset();
//     //   $("#hphone").val('');
//     //   if ($.trim(telInput.val())) {
//     //     if (telInput.intlTelInput("isValidNumber")) {
//     //         var ttttt =$(".selected-dial-code").text();
//     //         $("#hphone").val(ttttt+telInput.val());
//     //       validMsg.removeClass("hide");
//     //     } else {
//     //       telInput.addClass("error");
//     //       errorMsg.removeClass("hide");
//     //     }
//     //   }
//     // });
    
//     // // on keyup / change flag: reset
//     // telInput.on("keyup change", reset);
    
//     telInput.on("input", function() {
//     reset();
//     $("#hphone").val('');
//     if ($.trim(telInput.val())) {
//       if (telInput.intlTelInput("isValidNumber")) {
//         var ttttt = $(".selected-dial-code").text();
//         $("#hphone").val(ttttt + telInput.val());
//         validMsg.removeClass("hide");
//       } else {
//         telInput.addClass("error");
//         errorMsg.removeClass("hide");
//       }
//     }
//   });

//   // on input / change flag: reset
//   telInput.on("input change", reset);
    
    
    
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