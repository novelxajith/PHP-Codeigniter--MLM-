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
      
            <script>
         const html = document.querySelector("html");
         const svg1 = document.getElementById("svg1");
         const svg2 = document.getElementById("svg2");
         const svg3 = document.getElementById("svg3");
         const svg4 = document.getElementById("svg4");
         
         if (html.classList.contains("light-style")) {
           svg1.style.display = "block";
           svg2.style.display = "none";
           svg3.style.display = "block";
           svg4.style.display = "none";
         } else if (html.classList.contains("dark-style")) {
           svg1.style.display = "none";
           svg2.style.display = "block";
           svg3.style.display = "none";
           svg4.style.display = "block";
         } else {
           svg1.style.display = "none";
           svg2.style.display = "none";
           svg3.style.display = "none";
           svg4.style.display = "none";
         }
      </script> 
      
   </head>
   <style>

      .step{
        display:none;
      }
 
 svg#svg1 {
     top: 22px;
     position: absolute;
     left: 34px;
 }
 svg#svg2{
     top: 22px;
     position: absolute;
     left: 34px;
 }
 
 svg#svg4 {
     top: 14px;
     left: 57px;
     position: absolute;
 }
 svg#svg3 {
     top: 14px;
     left: 57px;
     position: absolute;
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
                  <div class="app-brand justify-content-center mt-5">
                     <a href="index.html" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                           <span>
                              <svg id="svg1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.6 77.6">
                                 <defs>
                                    <clipPath id="a">
                                       <path style="fill:none" d="M-98.2-708.5h595.3v834.1H-98.2z"/>
                                    </clipPath>
                                 </defs>
                                 <g style="clip-path:url(#a)">
                                    <path d="M65 33.1c-11.6 6.4-24.8 13.4-36.5 20-1.8 1-3.7 2.1-5.5 3.1 4.3-8 8.7-16.1 12.9-24.1l4.6.1c8.4.2 17 .3 25.5.4-.4.2-.7.4-1 .5m9.5-10.3c-5 0-10.1.1-15.1.2 9.1-4.8 18.8-10 27.8-14.9l10.6-5.8c-3.9.2-13.9.5-17.6.7-13.2.6-26.5 1.2-39.7 2.2 11.1 1 22.3 1.8 33.4 2.5-.3.2-.6.3-.9.4-10.6 4.7-21.7 9.7-32.3 14.6 1.4-2.6 2.7-5.3 4.1-7.9-8.4.5-17.2 1-25.5 1.7 5.7.5 11.4 1 17.1 1.4l2.8.2c-1.8 2.6-3.5 5.3-5.3 7.9-1.3 2-2.7 4.1-4 6.1-1.8 2.7-3.6 5.5-5.3 8.2C16.7 52.1 8.5 65.2 1 77.3c10-5 22.1-11 31.9-16C57 49 82 35.6 105.8 22.7c-7.6 0-23.9 0-31.3.1" style="fill:#5a5ee1"/>
                                 </g>
                              </svg>
                              <svg version="1.1" id="svg2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 106.8 77.8" style="enable-background:new 0 0 106.8 77.8" xml:space="preserve">
                                 <style>.st0{clip-path:url(#SVGID_00000062896588943378590130000000917463745368126088_)}</style>
                                 <defs>
                                    <path id="SVGID_1_" d="M-98.2-708.5h595.3v834.1H-98.2z"/>
                                 </defs>
                                 <clipPath id="SVGID_00000111180404560355822130000003878532866338977691_">
                                    <use xlink:href="#SVGID_1_" style="overflow:visible"/>
                                 </clipPath>
                                 <g style="clip-path:url(#SVGID_00000111180404560355822130000003878532866338977691_)">
                                    <path d="M65 33.1c-11.8 6.4-24.8 13.4-36.5 20-1.8 1-3.7 2.1-5.5 3.1 4.3-8 8.7-16.1 12.9-24.1l4.6.1c8.4.2 17 .3 25.5.4-.4.2-.7.4-1 .5m9.5-10.3c-5 0-10.1.1-15.1.2 9.1-4.8 18.8-10 27.8-14.9l10.6-5.8c-3.9.2-13.9.5-17.6.7-13.2.6-26.5 1.2-39.7 2.2 11.1 1 22.3 1.8 33.4 2.5-.3.2-.6.3-.9.4-10.6 4.7-21.7 9.7-32.3 14.6 1.4-2.6 2.7-5.3 4.1-7.9-8.4.5-17.2 1-25.5 1.7 5.7.5 11.4 1 17.1 1.4l2.8.2c-1.8 2.6-3.5 5.3-5.3 7.9-1.3 2-2.7 4.1-4 6.1-1.8 2.7-3.6 5.5-5.3 8.2C16.7 52.1 8.5 65.2 1 77.3c10-5 22.1-11 31.9-16C57 49 82 35.6 105.8 22.7c-7.6 0-23.9 0-31.3.1" style="fill:#fff"/>
                                 </g>
                              </svg>
                           </span>
                        </span>
                        <span class="app-brand-text demo text-heading fw-bold">
                           <svg width="182" height="32" id="svg3" class="light-style customizer-hide" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.5 84.7">
                              <defs>
                                 <clipPath id="a">
                                    <path style="fill:none" d="M-92.1-701.5h595.3v834.1H-92.1z"/>
                                 </clipPath>
                              </defs>
                              <g style="clip-path:url(#a)">
                                 <path d="M34.19 33.54c2.97 0 4.81-.28 5.52-3.4.57-2.97-1.27-3.11-4.1-3.11H22.02l-1.27 6.51H34.2Zm-.85 14.44c2.41 0 4.39-.14 4.95-3.26.71-3.11-1.27-3.26-3.54-3.26H19.04l-1.42 6.51h15.71ZM10.7 17.55h28.03c11.46 0 16.14 3.96 14.72 10.9-.85 3.96-4.1 6.94-8.35 8.21 4.53 1.42 7.93 4.25 6.51 10.9-1.13 5.38-6.09 9.91-17.41 9.91H2.21l8.49-39.92Zm52.08 0-8.63 39.91h13.3l8.49-39.91H62.78ZM95.2 46.42h13.59c.14 2.55 2.69 3.82 7.93 3.82 6.37 0 8.78-.85 9.2-2.69.42-1.7-1.98-2.83-6.94-3.11l-4.67-.42c-12.46-.85-17.98-4.67-16.42-11.75 1.27-6.23 8.92-9.34 21.94-9.34 13.87 0 20.81 3.96 21.09 11.18h-13.59c-.57-2.12-3.26-3.4-8.35-3.4s-7.64.71-7.93 2.26c-.42 1.7.85 2.26 6.94 2.83l4.39.42c12.74 1.13 17.98 4.81 16.42 12.17-1.56 6.94-8.49 10.19-22.65 10.19S95.34 54.62 95.2 46.41m48.55.01h13.59c.14 2.55 2.69 3.82 7.78 3.82 6.37 0 8.78-.85 9.2-2.69.42-1.7-1.98-2.83-7.08-3.11l-4.53-.28c-12.46-.85-17.98-4.67-16.42-11.75 1.27-6.23 8.92-9.34 21.94-9.34 13.87 0 20.81 3.96 21.09 11.18h-13.59c-.57-2.12-3.26-3.4-8.35-3.4s-7.64.71-7.93 2.26c-.42 1.7.85 2.26 7.08 2.83l4.39.42c12.74 1.13 17.98 4.81 16.42 12.17-1.56 6.94-8.49 10.19-22.65 10.19s-20.81-4.1-20.95-12.31m56.06-28.86h19.53L233.63 46l6.09-28.45h13.45l-8.63 39.91h-19.53l-14.15-28.87-6.23 28.87h-13.59l8.78-39.91Zm76.71 30.99c6.94 0 12.17-2.83 13.02-7.22 1.13-5.1-2.83-8.35-9.77-8.35s-12.03 2.83-13.02 7.22c-.99 5.1 2.83 8.35 9.77 8.35m-22.5-9.48c2.12-9.77 12.46-16.14 26.33-16.14 15.85 0 24.63 7.78 22.08 19.53-1.98 9.77-12.46 16.14-26.33 16.14-15.85 0-24.63-7.78-22.08-19.53m52.22-15h13.02l6.51 24.35 16.98-24.35h15l-23.35 33.4h-19.11l-9.06-33.4Zm71.34 23.92c6.79 0 11.89-2.69 12.88-6.94.99-4.39-2.97-7.22-9.91-7.22s-11.89 2.83-12.74 6.94c-.99 4.39 2.83 7.22 9.77 7.22m10.62 3.4c-4.1 4.67-10.05 7.22-17.27 7.22-12.17 0-18.97-7.78-16.56-19.25 2.12-10.19 10.76-16.28 23.35-16.28 7.36 0 12.74 2.97 14.86 7.93l1.42-6.79h13.3l-7.22 33.4h-13.3l1.42-6.23ZM79.77 31.56l-5.66 25.9h13.3l7.22-33.4-14.86 7.5Zm6.37-14.01-1.56 7.5 14.86-7.5h-13.3Z" style="fill:#5a5ee1"/>
                              </g>
                           </svg>
                           <svg width="182" height="32" id="svg4" class="light-style customizer-hide" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.5 84.7">
                              <defs>
                                 <clipPath id="a">
                                    <path style="fill:none" d="M-92.1-701.5h595.3v834.1H-92.1z"/>
                                 </clipPath>
                              </defs>
                              <g style="clip-path:url(#a)">
                                 <path d="M34.19 33.54c2.97 0 4.81-.28 5.52-3.4.57-2.97-1.27-3.11-4.1-3.11H22.02l-1.27 6.51H34.2Zm-.85 14.44c2.41 0 4.39-.14 4.95-3.26.71-3.11-1.27-3.26-3.54-3.26H19.04l-1.42 6.51h15.71ZM10.7 17.55h28.03c11.46 0 16.14 3.96 14.72 10.9-.85 3.96-4.1 6.94-8.35 8.21 4.53 1.42 7.93 4.25 6.51 10.9-1.13 5.38-6.09 9.91-17.41 9.91H2.21l8.49-39.92Zm52.08 0-8.63 39.91h13.3l8.49-39.91H62.78ZM95.2 46.42h13.59c.14 2.55 2.69 3.82 7.93 3.82 6.37 0 8.78-.85 9.2-2.69.42-1.7-1.98-2.83-6.94-3.11l-4.67-.42c-12.46-.85-17.98-4.67-16.42-11.75 1.27-6.23 8.92-9.34 21.94-9.34 13.87 0 20.81 3.96 21.09 11.18h-13.59c-.57-2.12-3.26-3.4-8.35-3.4s-7.64.71-7.93 2.26c-.42 1.7.85 2.26 6.94 2.83l4.39.42c12.74 1.13 17.98 4.81 16.42 12.17-1.56 6.94-8.49 10.19-22.65 10.19S95.34 54.62 95.2 46.41m48.55.01h13.59c.14 2.55 2.69 3.82 7.78 3.82 6.37 0 8.78-.85 9.2-2.69.42-1.7-1.98-2.83-7.08-3.11l-4.53-.28c-12.46-.85-17.98-4.67-16.42-11.75 1.27-6.23 8.92-9.34 21.94-9.34 13.87 0 20.81 3.96 21.09 11.18h-13.59c-.57-2.12-3.26-3.4-8.35-3.4s-7.64.71-7.93 2.26c-.42 1.7.85 2.26 7.08 2.83l4.39.42c12.74 1.13 17.98 4.81 16.42 12.17-1.56 6.94-8.49 10.19-22.65 10.19s-20.81-4.1-20.95-12.31m56.06-28.86h19.53L233.63 46l6.09-28.45h13.45l-8.63 39.91h-19.53l-14.15-28.87-6.23 28.87h-13.59l8.78-39.91Zm76.71 30.99c6.94 0 12.17-2.83 13.02-7.22 1.13-5.1-2.83-8.35-9.77-8.35s-12.03 2.83-13.02 7.22c-.99 5.1 2.83 8.35 9.77 8.35m-22.5-9.48c2.12-9.77 12.46-16.14 26.33-16.14 15.85 0 24.63 7.78 22.08 19.53-1.98 9.77-12.46 16.14-26.33 16.14-15.85 0-24.63-7.78-22.08-19.53m52.22-15h13.02l6.51 24.35 16.98-24.35h15l-23.35 33.4h-19.11l-9.06-33.4Zm71.34 23.92c6.79 0 11.89-2.69 12.88-6.94.99-4.39-2.97-7.22-9.91-7.22s-11.89 2.83-12.74 6.94c-.99 4.39 2.83 7.22 9.77 7.22m10.62 3.4c-4.1 4.67-10.05 7.22-17.27 7.22-12.17 0-18.97-7.78-16.56-19.25 2.12-10.19 10.76-16.28 23.35-16.28 7.36 0 12.74 2.97 14.86 7.93l1.42-6.79h13.3l-7.22 33.4h-13.3l1.42-6.23ZM79.77 31.56l-5.66 25.9h13.3l7.22-33.4-14.86 7.5Zm6.37-14.01-1.56 7.5 14.86-7.5h-13.3Z" style="fill:#ffff"/>
                              </g>
                           </svg>
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
                                  <form class="my-form" method="post" action="<?=base_url('user/register'); ?>">
                                 <div class="row g-4">
                                    
                                    <div class="col-sm-6">
                                      <div class="form-floating form-floating-outline mb-3">
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="username"
                                          placeholder="Enter your Sponsor ID"
                                          autofocus
                                          value="<?=$this->input->post('username');?>"
                                        >
                                        <label for="username">Sponsor ID</label>
                                      </div><span id="username-error"></span>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="name"
                                          placeholder="Enter your Sponsor Name"
                                          autofocus
                                          value="<?=$this->input->post('name');?>" 
                                        >
                                        <label for="username">Sponsor Name</label>
                                      </div>
                                    </div>
                                  
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-select" name="ref_id" value="<?=$this->input->post('ref_id');?>" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option value="">Select Wing </option>
                                        <option value="" id="center">Wing 1</option>
                                        <option value="" id="left">Wing 2</option>
                                        <option value="" id="right">Wing 3</option>
                                    </select><?=form_error('ref_id') ?>

                                          <label for="exampleFormControlSelect1">Wing</label>
                                  </div>
                                    </div>
                                      <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-4">
                                     <select class="form-select" value="<?=$this->input->post('position');?>" name="position" id="exampleFormControlSelect1" aria-label="Default select example">
                                            <option value="">Select Team </option>
                                            <option value="left">Team A</option>
                                            <option value="right">Team B</option>
                                          </select>
                                          <label for="exampleFormControlSelect1">Team</label>
                                  </div><?=form_error('position') ?>
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
                                           <span id="firstname-error"></span><?=form_error('first_name') ?>
                                          <input type="text" id="first-name" name="first_name"  value="<?=$this->input->post('first_name');?>" class="form-control" placeholder="As per the PAN or National ID" />
                                          <label for="first-name">First Name</label>
                                       </div><span style="color:red;">(As per the PAN or National ID card)</span>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-floating form-floating-outline">
                                           <span id="lastname-error"></span><?=form_error('last_name') ?>
                                          <input type="text" id="last-name" name="last_name" value="<?=$this->input->post('last_name');?>" class="form-control" placeholder="As per the PAN or National ID" />
                                          <label for="last-name">Last Name</label>
                                       </div>
                                        <span style="color:red;">(As per the PAN or National ID card)</span>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="phone-number"
                                            name="mobile"
                                            value="<?=$this->input->post('mobile');?>"
                                            placeholder="Enter your phone number"
                                            autofocus />
                                          <label for="Mobile No">Mobile No</label>
                                        </div><span id="phone-error"></span><?=form_error('mobile') ?>
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
                                      </div><span id="email-error"></span><?=form_error('email') ?>
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
                                  </div><span id="employment-error"></span>
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
                                        </div><span id="address1-error"></span><?=form_error('address1') ?>
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
                                        </div><span id="address2-error"></span><?=form_error('address2') ?>
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
                                        </div><span id="pincode-error"></span><?=form_error('pincode') ?>
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
                                        </div><span id="city-error"></span><?=form_error('city') ?>
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
                                        </div><span id="district-error"></span><?=form_error('district') ?>
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
                                        </div><span id="state-error"></span><?=form_error('state') ?>
                                    </div>
                                
                                    
                                    <!--<div class="col-sm-6">-->
                                    <!--<div class="form-floating form-floating-outline mb-3">-->
                                    <!--      <input-->
                                    <!--        type="text"-->
                                    <!--        class="form-control"-->
                                    <!--        id="firm_name"-->
                                    <!--        name="firm_name"-->
                                    <!--        placeholder="Enter your Firm Name"-->
                                    <!--        autofocus />-->
                                    <!--      <label for="State">Firm Name</label>-->
                                    <!--    </div><?=form_error('firm_name') ?>-->
                                    <!--</div>-->
                                    <!--<div class="col-sm-6">-->
                                    <!--<div class="form-floating form-floating-outline mb-3">-->
                                    <!--      <input-->
                                    <!--        type="text"-->
                                    <!--        class="form-control"-->
                                    <!--        id="gst"-->
                                    <!--        name="gst"-->
                                    <!--        placeholder="Enter your GST"-->
                                    <!--        autofocus />-->
                                    <!--      <label for="Pincode">GST Number</label>-->
                                    <!--    </div><?=form_error('gst') ?>-->
                                    <!--</div>-->
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
                                            autofocus /><?=form_error('aadhar_no') ?>
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
                                            autofocus /><?=form_error('pan_no') ?>
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
                                            autofocus /><?=form_error('bank_name') ?>
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
                                            autofocus /><?=form_error('branch') ?>
                                          <label for="Branch Name">Branch Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-floating form-floating-outline mb-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="Account-No"
                                            name="acc_no"
                                            placeholder="Enter your  Account No "
                                            autofocus /><?=form_error('acc_no') ?>
                                          <label for="Account No "> Account No </label>
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
                                            autofocus /><?=form_error('ifsc') ?>
                                          <label for="IFSC code ">IFSC code +</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex justify-content-between">
                                       <div class="form-check">
                                          <input class="form-check-input" required type="checkbox" id="remember-me">
                                          <a href="https://demo-web-site.com/blissnova/newdev/dist">agree the terms & condition</a>
                                       </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                       <a class="btn btn-outline-secondary btn-prev">
                                       <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                                       <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                       </a>
                                       <button type="submit" class="btn btn-primary ">Submit</button>
                                      <!--<a href="<?=BASEURL?>user/registrationsucesspage"<button type="submit" class="btn btn-primary btn-submit">Submit</button></a>-->
                                    </div>
                                 </div>
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
        url: "<?=base_url('user/get_user_data'); ?>",
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
        url: "<?=base_url('user/check_username'); ?>",
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
function showToast() {
var toastEl = document.getElementById('my-toast');
var toast = new bootstrap.Toast(toastEl);
toast.show();
}
</script>

// <script>

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



// </script>

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
            const position = document.querySelector('select[name="position"]');

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
            const phonenumber = document.querySelector('input#phone-number');
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

            if (lastName.value.trim() === "") {
               lastName.classList.add("error");
               $('#lastname-error').text('Please enter your lastname');
               return false;
            } else {
               lastName.classList.remove("error");
               $('#lastname-error').text('');
            }
            
            if (phonenumber.value.trim() === "") {
               phonenumber.classList.add("error");
               $('#phone-error').text('Please enter your mobile number');
               return false;
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