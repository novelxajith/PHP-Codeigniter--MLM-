<!DOCTYPE html>
<html
   lang="en"
   class="light-style layout-navbar-fixed layout-menu-fixed"
   dir="ltr"
   data-theme="theme-default"
   data-assets-path="<?=BASEURL?>assets/"
   data-template="vertical-menu-template" id="htmlnew" >
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
      <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/apex-charts/apex-charts.css" />
      <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/swiper/swiper.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Helpers -->
      <script src="<?=BASEURL?>assets/vendor/js/helpers.js"></script>
      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
      <script src="<?=BASEURL?>assets/vendor/js/template-customizer.js"></script>
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src="<?=BASEURL?>assets/js/config.js"></script>
   </head>
   <style>
      svg#svg3 {
      top: 14px;
      left: 43px;
      position: absolute;
      }
      svg#svg4 {
      top: 14px;
      left: 43px;
      position: absolute;
      }
      .layout-menu-100vh .layout-menu, .layout-menu-100vh .layout-overlay {
      height: 100vh !important;
      }
      .menu-item.d-flex {
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      }
      .menu-item.socialmedia {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-direction: row;
      }
      .layout-menu-100vh.dark-style.layout-menu-fixed .menu-item.socialmedia {
      flex-direction: row;
      }
      .layout-menu-100vh.dark-style.layout-menu-fixed.layout-menu-collapsed .menu-item.socialmedia {
      flex-direction: column;
      }
      .toast.bs-toast {
      top: 10px;
      z-index: 1095;
      position: absolute;
      right: 15px;
      }
   </style>
   <body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
      <!-- Menu -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
         <div class="app-brand demo">
            <a href="<?=BASEURL?>staff" class="app-brand-link">
               <span class="app-brand-logo demo">
                  <span>
                     <svg id="svg1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.8 77.8">
                        <defs>
                           <clipPath id="a">
                              <path style="fill:none" d="M-98.2-708.5h595.3v834.1H-98.2z"/>
                           </clipPath>
                        </defs>
                        <g style="clip-path:url(#a)">
                           <path d="M65 33.1c-11.8 6.4-24.8 13.4-36.5 20-1.8 1-3.7 2.1-5.5 3.1 4.3-8 8.7-16.1 12.9-24.1l4.6.1c8.4.2 17 .3 25.5.4-.4.2-.7.4-1 .5m9.5-10.3c-5 0-10.1.1-15.1.2 9.1-4.8 18.8-10 27.8-14.9l10.6-5.8c-3.9.2-13.9.5-17.6.7-13.2.6-26.5 1.2-39.7 2.2 11.1 1 22.3 1.8 33.4 2.5-.3.2-.6.3-.9.4-10.6 4.7-21.7 9.7-32.3 14.6 1.4-2.6 2.7-5.3 4.1-7.9-8.4.5-17.2 1-25.5 1.7 5.7.5 11.4 1 17.1 1.4l2.8.2c-1.8 2.6-3.5 5.3-5.3 7.9-1.3 2-2.7 4.1-4 6.1-1.8 2.7-3.6 5.5-5.3 8.2C16.7 52.1 8.5 65.2 1 77.3c10-5 22.1-11 31.9-16C57 49 82 35.6 105.8 22.7c-7.6 0-23.9 0-31.3.1" style="fill:#5a5ee1"/>
                        </g>
                     </svg>
                     <svg id="svg2" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.8 77.8">
                        <defs>
                           <clipPath id="a">
                              <path style="fill:none" d="M-98.2-708.5h595.3v834.1H-98.2z"/>
                           </clipPath>
                        </defs>
                        <g style="clip-path:url(#a)">
                           <path d="M65 33.1c-11.8 6.4-24.8 13.4-36.5 20-1.8 1-3.7 2.1-5.5 3.1 4.3-8 8.7-16.1 12.9-24.1l4.6.1c8.4.2 17 .3 25.5.4-.4.2-.7.4-1 .5m9.5-10.3c-5 0-10.1.1-15.1.2 9.1-4.8 18.8-10 27.8-14.9l10.6-5.8c-3.9.2-13.9.5-17.6.7-13.2.6-26.5 1.2-39.7 2.2 11.1 1 22.3 1.8 33.4 2.5-.3.2-.6.3-.9.4-10.6 4.7-21.7 9.7-32.3 14.6 1.4-2.6 2.7-5.3 4.1-7.9-8.4.5-17.2 1-25.5 1.7 5.7.5 11.4 1 17.1 1.4l2.8.2c-1.8 2.6-3.5 5.3-5.3 7.9-1.3 2-2.7 4.1-4 6.1-1.8 2.7-3.6 5.5-5.3 8.2C16.7 52.1 8.5 65.2 1 77.3c10-5 22.1-11 31.9-16C57 49 82 35.6 105.8 22.7c-7.6 0-23.9 0-31.3.1" style="fill:#ffff"/>
                        </g>
                     </svg>
                  </span>
               </span>
               <span class="app-brand-text demo menu-text fw-bold ms-2">
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
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
               <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
                     fill="currentColor"
                     fill-opacity="0.6" />
                  <path
                     d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
                     fill="currentColor"
                     fill-opacity="0.38" />
               </svg>
            </a>
         </div>
         <div class="menu-inner-shadow"></div>
         <ul class="menu-inner py-1" >
            <li >
            <li class="menu-item <?php if($page_name=="dashboard" ){ echo "active";} ?>">
               <a href="<?=BASEURL?>staff" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-home"></i>
                  <i class=""></i>
                  <div data-i18n="Dashboard">Dashboard</div>
               </a>
            </li>
            
            <?php if($this->session->userdata('staffrole') == "Verification officer") {?>
            <?php
               $chatcount = $this->db->where('receiver_id','Blissadmin')->where('status','unread')->count_all_results('chat_messages')+0;
               ?>
            <li class="menu-item <?php if($page_name=="chat"){ echo "active";} ?>">
               <a href="<?=BASEURL?>staff/chat" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-message-badge"></i>
                  <div data-i18n="Chat">Chat</div>
                  <?php if ($chatcount > 0) { ?>
                  <div class="badge bg-danger rounded-pill ms-auto"><?php echo $chatcount; ?></div>
                  <?php } ?>
               </a>
            </li>
            <li class="menu-item <?php if($page_name=="pinrequesthistory"){ echo "active";} ?>">
               <a href="<?=BASEURL?>staff/pinrequesthistory" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-pin"></i>
                  <div data-i18n="Pin Request History">Pin Request History</div>
                  <?php $pincount = $this->db->where('status','Request')->count_all_results('investment')+0;?>
                  <div class="badge bg-danger rounded-pill ms-auto"><?=$pincount ?></div>
               </a>
            </li>
            <li class="menu-item">
               <?php $kyc_count=$this->db->where('status','Requested')->count_all_results('kyc_history');?>
               <a href="<?=BASEURL?>staff/kycrequest" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-card-account-details"></i>
                  <div data-i18n="KYC Request "> KYC Request</div>
                  <div class="badge bg-danger rounded-pill ms-auto"><?=$kyc_count ?></div>
               </a>
            </li>
               <li class="menu-item <?php if($page_name=="shop_registration"){ echo "active";} ?>">
               <a href="<?=BASEURL?>staff/shop_registration" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-pin"></i>
                  <div data-i18n="Shop Registration">Shop Registration</div>
               </a>
            </li>
            <?php }?>
            
            
            <li class="menu-item <?php if($page_name=="payout_management"){ echo "active";} ?>">
               <a href="<?=BASEURL?>staff/payout_management" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-cash-clock"></i>
                  <div data-i18n="Payout Management">Payout Management</div>
                  <?php if ($paycount > 0) { ?>
                  <div class="badge bg-danger rounded-pill ms-auto"><?php echo $paycount; ?></div>
                
               </a>
            </li>
            
                 <li class="menu-item <?php if($page_name=="pin_request_history_accountant"){ echo "active";} ?>">
               <a href="<?=BASEURL?>staff/pin_request_history_accountant" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-pin"></i>
                  <div data-i18n="Pin Request History">Pin Request History</div>
               </a>
            </li>
            
            
            
            
            <?php } ?>
            
             <li class="menu-item <?php if($page_name=="invoice_list"){ echo "active";} ?>">
               <a href="<?=BASEURL?>staff/invoice_list" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-receipt-text"></i>
                  <div data-i18n="Invoice">Invoice</div>
               </a>
            </li>
            
            <li class="menu-item <?php if($page_name=="dashboard_reset_password"){ echo "active";} ?>">
               <a href="<?=BASEURL?>staff/dashboard_reset_password" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-lock-reset"></i>
                  <div data-i18n="Reset password">Reset Password</div>
               </a>
            </li>
            <li class="menu-item" >
               <a href="<?=BASEURL?>staff/logout_all_devices" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-logout"></i>
                  <div data-i18n="Logout "> Logout</div>
               </a>
            </li>
            <!--<li class="menu-header fw-light ">-->
            <!--   <span class="menu-header-text">   Social Media -->
            <!--   </span>-->
            <!--</li>-->
            <!--<li class="menu-item">-->
            <!--   <a href="https://instagram.com/blissnovaonline?igshid=MzNlNGNkZWQ4Mg=="target="#blank" class="menu-link">-->
            <!--      <img id="insta1" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/insta1.svg" alt="insta1">-->
            <!--      <img id="insta2" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/insta2.svg" alt="insta2">-->
            <!--      <div data-i18n="Instagram">Instagram</div>-->
            <!--   </a>-->
            <!--</li>-->
            <!--<li class="menu-item">-->
            <!--   <a href="https://www.facebook.com/profile.php?id=100093071779903&mibextid=ZbWKwL" target="#blank" class="menu-link">-->
            <!--      <img id="fb1" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/fb1.svg" alt="fb1">-->
            <!--      <img id="fb2" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/fb2.svg" alt="fb2">-->
            <!--      <div data-i18n="Facebook">Facebook</div>-->
            <!--   </a>-->
            <!--</li>-->
            <!--<li class="menu-item">-->
            <!--   <a href="https://youtube.com/@BlissNovaOnline"target="#blank" class="menu-link">-->
            <!--      <img id="you1" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/you1.svg" alt="you1">-->
            <!--      <img id="you2" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/you2.svg" alt="you2">-->
            <!--      <div data-i18n="Youtube">Youtube</div>-->
            <!--   </a>-->
            <!--</li>-->
            <!--<li class="menu-item">-->
            <!--   <a href="https://twitter.com/BlissNovaOnline" target="#blank" class="menu-link">-->
            <!--      <img id="twit1" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/twit1.svg" alt="twit1">-->
            <!--      <img id="twit2" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/twit2.svg" alt="twit2">-->
            <!--      <div data-i18n="Twitter">Twitter</div>-->
            <!--   </a>-->
            <!--</li>-->
            <!--<li class="menu-item">-->
            <!--   <a href="https://t.me/BlissNovaOnline"target="#blank" class="menu-link">-->
            <!--      <img id="tele1" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/tele1.svg" alt="tele1">-->
            <!--      <img id="tele2" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/tele2.svg" alt="tele2">-->
            <!--      <div data-i18n="Telegram">Telegram</div>-->
            <!--   </a>-->
            <!--</li>-->
            <!--<li class="menu-item fw-light mt-4">-->
            <!--   <span class="menu-header-text"></span>-->
            <!--</li>-->
            <!--<li class="menu-item fw-light mt-4">-->
            <!--   <span class="menu-header-text"></span>-->
            <!--</li>-->
            <!--<li class="menu-item fw-light mt-4">-->
            <!--   <span class="menu-header-text"></span>-->
            <!--</li>-->
         </ul>
      </aside>
      <!-- / Menu -->
      <!-- Layout container -->
      <div class="layout-page">
      <!-- Navbar -->
      <nav
         class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
         id="layout-navbar">
         <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="mdi mdi-menu mdi-24px"></i>
            </a>
         </div>
         <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
               <div class="nav-item navbar-search-wrapper mb-0">
                  <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
                  <i class="mdi mdi-magnify mdi-24px scaleX-n1-rtl"></i>
                  <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                  </a>
               </div>
            </div>
            <!-- /Search -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">

               <!-- Style Switcher -->
               <li class="nav-item me-1 me-xl-0">
                  <a
                     class="nav-link btn btn-text-secondary rounded-pill btn-icon style-switcher-toggle hide-arrow"
                     href="javascript:void(0);">
                  <i class="mdi mdi-24px"></i>
                  </a>
               </li>
               <!--/ Style Switcher -->
             
               <!-- Notification -->
               <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                  <a
                     class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                     href="javascript:void(0);"
                     data-bs-toggle="dropdown"
                     data-bs-auto-close="outside"
                     aria-expanded="false">
                  <i class="mdi mdi-bell-outline mdi-24px"></i>
                  <?php
                     $paycount = $this->db->where('status','Request')->count_all_results('payout')+0;
                     
                     $total_notification=$kyc_count + $paycount +$pincount;
                     
                     if($total_notification == 0){
                        
                        $redlight="";
                     }else{
                        
                        $redlight="danger";
                     }
                     
                     ?>
                  <span  class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-<?=$redlight?> mt-2 border"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end py-0">
                     <div class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                           <h6 class="mb-0 me-auto">Notification</h6>
                           <span class="badge rounded-pill bg-label-primary"><?=$kyc_count + $paycount +$pincount?></span>
                        </div>
                     </div>
                     <li class="dropdown-notifications-list scrollable-container" >
                        <ul class="list-group list-group-flush">
                           <a href="<?=BASEURL?>staff/kycrequest">
                              <li class="list-group-item list-group-item-action dropdown-notifications-item" <?php if($kyc_count == 0){echo "hidden";}?>>
                                 <div class="d-flex gap-2">
                                    <div class="flex-shrink-0">
                                       <div class="avatar me-1">
                                          <img src="<?=BASEURL?>assets/images/notification/kyc.png" alt class="w-px-40 h-auto rounded-circle" />
                                       </div>
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                       <h6 class="mb-1 text-truncate">KYC Request </h6>
                                    </div>
                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                       <small class="text-muted">
                                          <div class="badge bg-danger rounded-pill ms-auto"><?=$kyc_count ?></div>
                                       </small>
                                    </div>
                                 </div>
                              </li>
                           </a>
                           <a href="<?=BASEURL?>staff/payout_management">
                              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read" <?php if($paycount == 0){echo "hidden";}?>>
                                 <div class="d-flex gap-2">
                                    <div class="flex-shrink-0">
                                       <div class="avatar me-1">
                                          <img src="<?=BASEURL?>assets/images/notification/payout.png" alt class="w-px-40 h-auto rounded-circle" />
                                       </div>
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                       <h6 class="mb-1 text-truncate">Payout Request </h6>
                                    </div>
                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                       <small class="text-muted">
                                          <div class="badge bg-danger rounded-pill ms-auto"><?=$paycount ?></div>
                                       </small>
                                    </div>
                                 </div>
                              </li>
                           </a>
                           <a href="<?=BASEURL?>staff/pinrequesthistory">
                              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read" <?php if($pincount == 0){echo "hidden";}?>>
                                 <div class="d-flex gap-2">
                                    <div class="flex-shrink-0">
                                       <div class="avatar me-1">
                                          <img src="<?=BASEURL?>assets/images/notification/pinrequest.png" alt class="w-px-40 h-auto rounded-circle" />
                                       </div>
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                       <h6 class="mb-1 text-truncate">PIN Request </h6>
                                    </div>
                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                       <small class="text-muted">
                                          <div class="badge bg-danger rounded-pill ms-auto"><?=$pincount ?></div>
                                       </small>
                                    </div>
                                 </div>
                              </li>
                           </a>
                        </ul>
                     </li>
                     <div class="dropdown-menu-footer border-top p-2">
                        <a href="<?=BASEURL?>staff/viewnotification" class="btn btn-primary d-flex justify-content-center">
                        View all notifications
                        </a>
                     </div>
                  </ul>
               </li>
               <!-- Notification -->

                 <!--Announcement-->
            
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                  <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow waves-effect waves-light " href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                    <i class="mdi mdi-bullhorn-outline mdi-24px"></i>
                    
                    <?php
                $msg = $this->db->where('viewed_username NOT LIKE', '%' . $this->session->userdata('staffusername') . '%')->where('view_for',$this->session->userdata('staffrole'))->count_all_results('announcement');?>
                      <?php if(!empty($msg)){ ?>
                    <span class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
                    <?php } ?>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end py-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h6 class="mb-0 me-auto">Announcement</h6>
                        <span class="badge rounded-pill bg-label-primary"><?=$msg?> New</span>
                      </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container ps">
                      <ul class="list-group list-group-flush">
                     <?php
                            $annouce=$this->db->order_by('id','DESC')->limit(5)->where('view_for', $this->session->userdata('staffrole'))->get('announcement')->result_array();
                            foreach($annouce as $key){?>
                            <a href="<?=BASEURL?>staff/announcement/<?=$key['id']?>">
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read waves-effect waves-light">
                           
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <span class="avatar-initial rounded-circle bg-label-success"><i class="mdi mdi-cart-outline"></i></span>
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate"><?=$key['title']?></h6>
                             <br>
                              <small class="text-muted"><?=date('d-m-y h:i A',strtotime($key['entry_date']))?></small>
                            </div>
                          </div>
                         
                        </li>
                        </a>
                        <?php
                         }?>
                      </ul>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                    <li class="dropdown-menu-footer border-top p-2">
                      <a href="<?=BASEURL?>staff/announcement" class="btn btn-primary d-flex justify-content-center waves-effect waves-light">
                        View all Announcement
                      </a>
                    </li>
                  </ul>
                </li>
                
                 <!--/Announcement-->
                
               
               
               
               
               
               
               
               <!-- User -->
               <?php $staff=$this->db->where('username',$this->session->userdata('staffusername'))->get('staff_panel')->row_array(); ?>
               <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                     <div class="avatar avatar-online">
                        <img src="<?=BASEURL?>assets/images/<?=$staff['profile_image']?>" alt class="w-px-40 h-auto rounded-circle" />
                     </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                     <li>
                        <a class="dropdown-item" href="#">
                           <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                 <div class="avatar avatar-online">
                                    <img src="<?=BASEURL?>assets/images/<?=$staff['profile_image']?>" alt class="w-px-40 h-auto rounded-circle" />
                                 </div>
                              </div>
                              <div class="flex-grow-1">
                                 <span class="fw-semibold d-block"><?=$staff['name']?></span>
                                 <small class="text-muted"><?=$staff['employe_role']?></small>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <div class="dropdown-divider"></div>
                     </li>
                     <li>
                        <a class="dropdown-item" href="<?=BASEURL?>staff/user_profile">
                        <i class="mdi mdi-account-outline me-2"></i>
                        <span class="align-middle">My Profile</span>
                        </a>
                     </li>
             
                     <!--<li>-->
                     <!--   <a class="dropdown-item" href="<?=BASEURL?>staff/invoice_list">-->
                     <!--      <span class="d-flex align-items-center align-middle">-->
                     <!--         <i class="flex-shrink-0 mdi mdi-credit-card-outline me-2"></i>-->
                     <!--         <span class="flex-grow-1 align-middle">Billing</span>-->
                     <!--         <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>-->
                     <!--      </span>-->
                     <!--   </a>-->
                     <!--</li>-->
             
                     <li>
                        <a class="dropdown-item" href="<?=BASEURL?>staff/logout_all_devices" >
                        <i class="mdi mdi-logout me-2"></i>
                        <span class="align-middle">Log Out</span>
                        </a>
                     </li>
                  </ul>
               </li>
               <!--/ User -->
            </ul>
         </div>
         <!-- Search Small Screens -->
         <div class="navbar-search-wrapper search-input-wrapper d-none">
            <input
               type="text"
               class="form-control search-input container-xxl border-0"
               placeholder="Search..."
               aria-label="Search..." />
            <i class="mdi mdi-close search-toggler cursor-pointer"></i>
         </div>
      </nav>
      <!-- Content wrapper -->
      <div class="content-wrapper">
      <!-- Content -->
      <div class="bs-toast toast fade" id="my-toast" role="alert" aria-live="assertive" aria-atomic="true">
         <div class="toast-header">
            <i class="mdi mdi-check-circle text-success me-2"></i>
            <div class="me-auto fw-semibold">Success</div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
         </div>
         <div class="toast-body">
            <?php echo $this->session->flashdata('success_message'); ?>
         </div>
      </div>
      <div class="bs-toast toast fade" id="my-toast1" role="alert" aria-live="assertive" aria-atomic="true">
         <div class="toast-header">
            <i class="mdi mdi-alert-circle text-danger me-2"></i>
            <div class="me-auto fw-semibold">Error</div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
         </div>
         <div class="toast-body">
            <?php echo $this->session->flashdata('error_message'); ?>
         </div>
      </div>