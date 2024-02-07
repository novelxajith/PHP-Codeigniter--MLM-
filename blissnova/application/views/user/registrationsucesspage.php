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
   </head>
   <style>
  
img#image1 {
    width: 200px;
}
 img#image2 {
  width: 200px;
}
      .row.center {
    display: flex;
    justify-content: center;
}

 .par {
     
        margin: 20px auto;
        /*max-width:600px;*/
        text-align: justify;
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 2;
    
       }
       p {
           display: flex;
    justify-content: center;
           text-align:justify;
}
p.regreds {
    flex-direction: column;
    flex-wrap: wrap;
}
   </style>
   <body>
      <!-- Content -->
      
  <div class="col-lg-8 container-fluid container-p-y">
   <div class="authentication-inner py-4">
      <!-- Register Card -->
      <div class="card p-2">
         <!-- Logo -->
         <div class="app-brand justify-content-center mt-5">
            <a href="<?=BASEURL?>user" class="app-brand-link gap-2">
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
         <div class="card-body ">
            <div class="row justify-content-center ">
               <div class="col-md-12 text-center">
                  <h1 style="font-size:20px; line-height: 1.33em; font-weight: bold;">Registration Successfull</h1>
                  <div class="row center">
                     <div class="col-5 col-span-8 center">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_DRGoXH.json" mode="bounce" background="transparent" speed="0.63" class="lottie--playa" loop="" autoplay=""></lottie-player>
                     </div>
                  </div>
                  <div class="row text-justified">
                     <div class="col-lg-12 ">
                        <h4>Hey there <?=$first?> <?=$last?>!</h4>
                        <h6>Welcome to the <a href="#"><span class="mb-1 fw-semibold">BlissNova</span></a> fam!<br>
                        </h6>
                        <p>We're stoked to have you on board and can't wait to see what you bring to the table.</p>
                       <p>We're all about personal growth and success, and we're here to help you crush your goals and live your best life. As a member of our community, you'll get access to some seriously awesome services and a business opportunity that can take you places you've never been before.</p>
                        <p>But the best part? You're not alone. You're now part of a global crew of like-minded people who are all about cheering each other on and sharing the good vibes. We're here to support you every step of the way.</p>
                        <p>So get ready to get blissed out, my friend! We're pumped to see what you'll achieve with us.</p>
                        <p class="regreds">Stay blissed,</p>
                         <p class="regreds">Team BlissNova!</p>
                        </p>
                        
                       
                     </div>
                     <div class="row center">
                          <p style="font-size: 1.2em; line-height: 1.5em;"><span class="badge bg-primary"><strong>UserID</strong>: <strong><?=$user?></strong></span></p>
                        <p style="font-size: 1.2em; line-height: 1.5em;"><span class="badge bg-primary"><strong>Password</strong>: <?=$pass?></span></p>
                        <div class="col col-span-8">
                           <button class="btn btn-primary  waves-effect" id="downloadButton">
                           <span class="align-middle"  id="download-btn">Download</span>  
                           </button>
                           <a  href="https://blissnova.online/user/logout_all_devices" class="btn btn-primary  waves-effect">
                           <span class="align-middle">Login</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Register Card -->
         <img alt="mask" src="https://demo-web-site.com/blissnova/newdev/assets/img/illustrations/auth-basic-register-mask-light.png" class="authentication-image d-none d-lg-block" data-app-light-img="illustrations/auth-basic-register-mask-light.png" data-app-dark-img="illustrations/auth-basic-register-mask-dark.png">
      </div>
   </div>
</div>
 
     
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

      <!-- Core JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNSxN6P" crossorigin="anonymous"></script>
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
      <script>
   const downloadButton = document.getElementById('downloadButton');

  downloadButton.addEventListener('click', () => {
    // Disable the button while processing
    downloadButton.disabled = true;

    // Delay the screenshot capture to ensure all page elements are rendered
    setTimeout(() => {
      // Get the dimensions of the page's content
      const width = document.documentElement.scrollWidth;
      const height = document.documentElement.scrollHeight;

      // Create a canvas element with the same dimensions as the page
      const canvas = document.createElement('canvas');
      canvas.width = width;
      canvas.height = height;
      const context = canvas.getContext('2d');

      // Capture the entire page and draw it on the canvas
      window.scrollTo(0, 0);
      context.drawWindow(window, 0, 0, width, height, 'rgb(255,255,255)');

      // Convert the canvas content to an image URL
      const dataURL = canvas.toDataURL('image/png');

      // Create a temporary anchor element for downloading the image
      const downloadLink = document.createElement('a');
      downloadLink.href = dataURL;
      downloadLink.download = 'page_screenshot.png';

      // Trigger the download
      downloadLink.click();

      // Enable the button after processing
      downloadButton.disabled = false;
    }, 500); // Adjust the delay if necessary
  });
</script>
<script>
    $(document).ready(function() {
        $('#download-btn').click(function(e) {
            e.preventDefault();
            html2canvas(document.body, {
                onrendered: function(canvas) {
                    canvas.toBlob(function(blob) {
                        saveAs(blob, 'blissnova.png');
                    });
                }
            });
        });
    });
</script>

   </body>
</html>













