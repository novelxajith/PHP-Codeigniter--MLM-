<!DOCTYPE html>

<html
  lang="en"
  class="light-style"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?=BASEURL?>assets/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Invoice</title>

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

    <!-- Page CSS -->

    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/app-invoice-print.css" />
    <!-- Helpers -->
    <script src="<?=BASEURL?>assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?=BASEURL?>assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?=BASEURL?>assets/js/config.js"></script>
  </head>
<style>
    span.h4.mb-0.app-brand-text.fw-bold {
    position: absolute;
    margin-left: 20px;
}
</style>
  <body>
    <!-- Content -->

    <div class="invoice-print p-4">
      <div class="d-flex justify-content-between flex-row">
        <div class="mb-4">
          <div class="d-flex svg-illustration align-items-center gap-2 mb-4">
             <span class="app-brand-logo demo">
                              <span>
                               <svg id="svgnew1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.8 77.8"><defs><clipPath id="a"><path style="fill:none" d="M-98.2-708.5h595.3v834.1H-98.2z"/></clipPath></defs><g style="clip-path:url(#a)"><path d="M65 33.1c-11.8 6.4-24.8 13.4-36.5 20-1.8 1-3.7 2.1-5.5 3.1 4.3-8 8.7-16.1 12.9-24.1l4.6.1c8.4.2 17 .3 25.5.4-.4.2-.7.4-1 .5m9.5-10.3c-5 0-10.1.1-15.1.2 9.1-4.8 18.8-10 27.8-14.9l10.6-5.8c-3.9.2-13.9.5-17.6.7-13.2.6-26.5 1.2-39.7 2.2 11.1 1 22.3 1.8 33.4 2.5-.3.2-.6.3-.9.4-10.6 4.7-21.7 9.7-32.3 14.6 1.4-2.6 2.7-5.3 4.1-7.9-8.4.5-17.2 1-25.5 1.7 5.7.5 11.4 1 17.1 1.4l2.8.2c-1.8 2.6-3.5 5.3-5.3 7.9-1.3 2-2.7 4.1-4 6.1-1.8 2.7-3.6 5.5-5.3 8.2C16.7 52.1 8.5 65.2 1 77.3c10-5 22.1-11 31.9-16C57 49 82 35.6 105.8 22.7c-7.6 0-23.9 0-31.3.1" style="fill:#828393"/></g></svg>
     
                              </span>
                            </span>
                            <span class="h4 mb-0 app-brand-text fw-bold"> 
                                <svg width="182" height="32" id="svgnew3" class="light-style customizer-hide" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.5 84.7"><defs><clipPath id="a"><path style="fill:none" d="M-92.1-701.5h595.3v834.1H-92.1z"/></clipPath></defs><g style="clip-path:url(#a)"><path d="M34.19 33.54c2.97 0 4.81-.28 5.52-3.4.57-2.97-1.27-3.11-4.1-3.11H22.02l-1.27 6.51H34.2Zm-.85 14.44c2.41 0 4.39-.14 4.95-3.26.71-3.11-1.27-3.26-3.54-3.26H19.04l-1.42 6.51h15.71ZM10.7 17.55h28.03c11.46 0 16.14 3.96 14.72 10.9-.85 3.96-4.1 6.94-8.35 8.21 4.53 1.42 7.93 4.25 6.51 10.9-1.13 5.38-6.09 9.91-17.41 9.91H2.21l8.49-39.92Zm52.08 0-8.63 39.91h13.3l8.49-39.91H62.78ZM95.2 46.42h13.59c.14 2.55 2.69 3.82 7.93 3.82 6.37 0 8.78-.85 9.2-2.69.42-1.7-1.98-2.83-6.94-3.11l-4.67-.42c-12.46-.85-17.98-4.67-16.42-11.75 1.27-6.23 8.92-9.34 21.94-9.34 13.87 0 20.81 3.96 21.09 11.18h-13.59c-.57-2.12-3.26-3.4-8.35-3.4s-7.64.71-7.93 2.26c-.42 1.7.85 2.26 6.94 2.83l4.39.42c12.74 1.13 17.98 4.81 16.42 12.17-1.56 6.94-8.49 10.19-22.65 10.19S95.34 54.62 95.2 46.41m48.55.01h13.59c.14 2.55 2.69 3.82 7.78 3.82 6.37 0 8.78-.85 9.2-2.69.42-1.7-1.98-2.83-7.08-3.11l-4.53-.28c-12.46-.85-17.98-4.67-16.42-11.75 1.27-6.23 8.92-9.34 21.94-9.34 13.87 0 20.81 3.96 21.09 11.18h-13.59c-.57-2.12-3.26-3.4-8.35-3.4s-7.64.71-7.93 2.26c-.42 1.7.85 2.26 7.08 2.83l4.39.42c12.74 1.13 17.98 4.81 16.42 12.17-1.56 6.94-8.49 10.19-22.65 10.19s-20.81-4.1-20.95-12.31m56.06-28.86h19.53L233.63 46l6.09-28.45h13.45l-8.63 39.91h-19.53l-14.15-28.87-6.23 28.87h-13.59l8.78-39.91Zm76.71 30.99c6.94 0 12.17-2.83 13.02-7.22 1.13-5.1-2.83-8.35-9.77-8.35s-12.03 2.83-13.02 7.22c-.99 5.1 2.83 8.35 9.77 8.35m-22.5-9.48c2.12-9.77 12.46-16.14 26.33-16.14 15.85 0 24.63 7.78 22.08 19.53-1.98 9.77-12.46 16.14-26.33 16.14-15.85 0-24.63-7.78-22.08-19.53m52.22-15h13.02l6.51 24.35 16.98-24.35h15l-23.35 33.4h-19.11l-9.06-33.4Zm71.34 23.92c6.79 0 11.89-2.69 12.88-6.94.99-4.39-2.97-7.22-9.91-7.22s-11.89 2.83-12.74 6.94c-.99 4.39 2.83 7.22 9.77 7.22m10.62 3.4c-4.1 4.67-10.05 7.22-17.27 7.22-12.17 0-18.97-7.78-16.56-19.25 2.12-10.19 10.76-16.28 23.35-16.28 7.36 0 12.74 2.97 14.86 7.93l1.42-6.79h13.3l-7.22 33.4h-13.3l1.42-6.23ZM79.77 31.56l-5.66 25.9h13.3l7.22-33.4-14.86 7.5Zm6.37-14.01-1.56 7.5 14.86-7.5h-13.3Z" style="fill:#828393"/></g></svg>
             
                </span>
          </div>
           <?php $data=$this->db->where('id',$id)->get('invoice')->row_array(); ?>
      <?php $dataa=$this->db->where('username',$data['username'])->get('user_role')->row_array(); ?>


          <p class="mb-1">BlissNova Pvt. Ltd.</p>
          <p class="mb-1">Registered Office</p>
          <p class="mb-1">Athicode Post Office</p>
          <p class="mb-1">Kozhinjampara, Palakkad District</p>
          <p class="mb-1">Kerala, 678554.</p>
        </div>
        <div>
          <h5>INVOICE #<?=$data['invoice_no']?></h5>
                          <div class="mb-1">
                            <span>Date Issues:</span>
                            <span><?=date("Y-m-d",strtotime($data['entry_date']))?></span>
                          </div>
        </div>
      </div>

      <hr />
<?php $dataa=$this->db->where('username',$data['username'])->get('user_role')->row_array(); ?>
      <div class="d-flex justify-content-between mb-4">
        <div class="my-2">
          <h6>Invoice To:</h6>
                                    <?php $namee=$this->db->where('username',$dataa['username'])->get('user_role')->row_array(); ?>
                                     <p class="mb-1"><?=$dataa['username']?></p>
                          <p class="mb-1"><?=$namee['first_name']?> <?=$namee['last_name']?></p>
                         
                          <p class="mb-1"><?=$dataa['address1']?>, <?=$dataa['address2']?></p>
                          <p class="mb-1"><?=$dataa['city']?>, <?=$dataa['district']?></p>
                          <p class="mb-1"><?=$dataa['state']?>, <?=$dataa['pincode']?></p>
                          <p class="mb-1"><?=$dataa['mobile']?></p>
                          <p class="mb-0"><?=$dataa['email']?>.</p>
        </div>
        
      </div>

      <div class="table-responsive">
        <table class="table m-0">
          <thead class="table-light border-top">
            <tr>
              <th>Item</th>
              <th>Description</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-nowrap"><?=$data['pack']?></td>
                <td class="text-nowrap">Purchase Consignment advance</td>
                <td><?=$data['value']?></td>
            </tr>
           
            <tr>
              <td class="align-top px-4 py-3">
              
                <span>Thanks for your business</span>
              </td>
              <td class="text-end px-4 py-3">
                <p class="mb-2">Subtotal:</p>
                  <p class="mb-2">Tax:</p>
                  <p class="mb-0">Total:</p>
              </td>
              <td class="px-4 py-3">
                <p class="fw-semibold mb-2 text-end">₹<?=$data['value']?></p>
                  <?php if($data['value'] == 1100){
                      $gst=$data['value']*0.18;
                  }else if($data['value'] == 10000){
                      $gst=0;
                  }
                  ?>
                  <p class="fw-semibold mb-2 text-end">₹<?=$gst?></p>
                  <p class="fw-semibold mb-0 text-end">₹<?=$data['value']+$gst;?></p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="row">
        <div class="col-12">
          <span class="fw-bold">Note:</span>
          <span
            > “This is computer generated invoice no signature required.” Thank You!</span
          >
        </div>
      </div>
    </div>

    <!-- / Content -->

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

    <!-- Main JS -->
    <script src="<?=BASEURL?>assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?=BASEURL?>assets/js/app-invoice-print.js"></script>
  </body>
</html>
