<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?=BASEURL?>assets/"
  data-template="vertical-menu-template" id="htmlnew">
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

    <!-- Page CSS -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/cards-statistics.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/cards-analytics.css" />
    <!-- Helpers -->
    <script src="<?=BASEURL?>assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?=BASEURL?>assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?=BASEURL?>assets/js/config.js"></script>
    <style>
.menu-vertical .menu-item .menu-link {
    font-size: 15px;
    letter-spacing: 0.15px;
}
img#image1 {
    width: 30px;
    position: relative;
}
img#image2 {
    width: 30px;
    position: relative;
}

img#image4 {
    width: 166px;
    left: 55px;
    position: absolute;
    top: 15px;
}
img#image3 {
    width: 166px;
    left: 55px;
    position: absolute;
    top: 15px;
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
span.badge.rounded-pill.bg-label-primary {
    top: unset!important;
    position: unset!important;
}
img.w-px-40.h-auto.rounded-circle.notification {
    width: 80px!important;
    height: 73px;
    margin-left: -23px;
    margin-top: -14px;
}

    </style>
      
  </head>

  <body>
     
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="<?=BASEURL?>user" class="app-brand-link">
              <span class="app-brand-logo demo">
                <span>
                 <img id="image1" src="<?=BASEURL?>assets/img/logo/fav1.svg" alt="Image 1" style="display:none;">
                 <img id="image2" src="<?=BASEURL?>assets/img/logo/fav2.svg" alt="Image 2" style="display:none;">
        
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">
                   <img id="image3" src="<?=BASEURL?>assets/img/logo/bliss1.png" alt="Image 3" style="display:none;">
                   <img id="image4" src="<?=BASEURL?>assets/img/logo/bliss2.png" alt="Image 4" style="display:none;">
               
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

          
           <ul class="menu-inner py-1">
                
                  <li class="menu-item <?php if($page_name=="dashboard"){ echo "active";} ?>">
                     <a href="<?=BASEURL?>user/index" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-home"></i>
                     <div data-i18n="Dashboards">Dashboards</div>
                     </a>
                  </li>
                  <!--<li class="menu-item <?php if($page_name=="team_management"){ echo "active";} ?>">-->
                  <!--   <a href="<?=BASEURL?>user/team_management" class="menu-link">-->
                  <!--  <i class="menu-icon tf-icons mdi mdi-account-multiple"></i>-->
                  <!--   <div data-i18n="Team Management">Team Management</div>-->
                  <!--   </a>-->
                  <!--</li>-->
                  
                  <li class="menu-item <?php if($page_name=="left_team" || $page_name=="right_team" || $page_name=="direct_team" || $page_name=="team_management"){ echo "active open";} ?>">
                     <a href="#"class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-account-multiple"></i>
                      <div data-i18n="Organization Matrix">Organization Matrix</div>
                     </a>
                     <ul class="menu-sub ">
                       <li class="menu-item <?php if($page_name=="team_management"){ echo "active";} ?>"><a href="<?=BASEURL?>user/team_management"  class="menu-link">Team Management</a></li>
                       <li class="menu-item <?php if($page_name=="left_team"){ echo "active";} ?>"><a href="<?=BASEURL?>user/left_team"  class="menu-link">A team</a></li>
                        <li class="menu-item <?php if($page_name=="right_team"){ echo "active";} ?>"><a href="<?=BASEURL?>user/right_team"  class="menu-link">B team</a></li>
                       <li class="menu-item <?php if($page_name=="direct_team"){ echo "active";} ?>"><a href="<?=BASEURL?>user/direct_team"  class="menu-link">Direct team</a></li>
                        </ul>
                  </li> 
                    
                    <li class="menu-item <?php if($page_name=="pinrequest"){ echo "active";} ?>">
                       <a href="<?=BASEURL?>user/pinrequest" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-pin"></i>
                          <div data-i18n="Pin Request">Pin Request</div>
                         
                       </a>
                    </li>

                    <li class="menu-item <?php if($page_name=="mypingallery"){ echo "active";} ?>">
                     <a href="<?=BASEURL?>user/mypingallery" class="menu-link">
                     <i class="menu-icon tf-icons mdi mdi-playlist-edit"></i>
                      <div data-i18n="My Pin Gallery">My Pin Gallery</div>
                      <div class="badge bg-danger rounded-pill ms-auto">
                    <?=$this->db->where('username', $this->session->userdata('ublisusername'))->where('status','Unused') ->count_all_results('e_pin')+0; ?></div>
                     </a>
                  </li>
                    <li class="menu-item <?php if($page_name=="activation"){ echo "active";} ?>">
                     <a href="<?=BASEURL?>user/activation" class="menu-link">
                     <i class="menu-icon tf-icons mdi mdi-account-star"></i>
                      <div data-i18n="Activation">Activation</div>
                     </a>
                  </li>
                  <li class="menu-item <?php if($page_name=="withdrawrequest"){ echo "active";} ?>">
                     <a href="<?=BASEURL?>user/withdrawrequest" class="menu-link">
                     <i class="menu-icon tf-icons mdi mdi-cash"></i>
                      <div data-i18n="Withdraw Request">Withdraw Request</div>
                     </a>
                  </li>
                  <li class="menu-item <?php if($page_name=="calender"){ echo "active";} ?>">
                     <a href="<?=BASEURL?>user/calender" class="menu-link">
                     <i class="menu-icon tf-icons mdi mdi-calendar-month-outline"></i>
                     
                      <div data-i18n="Calender">Calender</div>
                      <div class="badge bg-danger rounded-pill ms-auto">new</div>
                     </a>
                  </li>
                  
                    <li class="menu-item <?php if($page_name=="prime_rank_achievers" || $page_name=="prime_ceiling_achievers" || $page_name=="prime_achievers" || $page_name=="primeplus_achievers" ||$page_name=="plus_ceiling_achievers"){ echo "active open";} ?>">
                     <a href="<?=BASEURL?>user/Achievers"class="menu-link menu-toggle">
                     <i class="menu-icon tf-icons mdi mdi-trophy"></i>
                      <div data-i18n="Achievers">Achievers</div>
                     </a>
                     <ul class="menu-sub ">
                       <li class="menu-item <?php if($page_name=="prime_rank_achievers"){ echo "active";} ?>"><a href="<?=BASEURL?>user/prime_rank_achievers"  class="menu-link">Prime Rank Achievers</a></li>
                        <li class="menu-item <?php if($page_name=="prime_achievers"){ echo "active";} ?>"><a href="<?=BASEURL?>user/prime_achievers"  class="menu-link">Prime Star Achievers</a></li>
                       <li class="menu-item <?php if($page_name=="primeplus_achievers"){ echo "active";} ?>"><a href="<?=BASEURL?>user/primeplus_achievers"  class="menu-link">Star Achievers</a></li>
                       <li class="menu-item <?php if($page_name=="prime_ceiling_achievers"){ echo "active";} ?>"><a href="<?=BASEURL?>user/prime_ceiling_achievers"  class="menu-link">Prime Ceiling Achievers</a></li>
                       <li class="menu-item <?php if($page_name=="plus_ceiling_achievers"){ echo "active";} ?>"><a href="<?=BASEURL?>user/plus_ceiling_achievers"  class="menu-link">Plus Ceiling Achievers</a></li>
                        <!--<li class="menu-item"><a href="<?=BASEURL?>user/star_achievers"  class="menu-link">Ceiling Star Achievers</a></li>-->
                        </ul>
                  </li>
                  <li class="menu-item <?php if($page_name=="invoice_list" || $page_name=="invoice"){ echo "active";} ?>">
                     <a href="<?=BASEURL?>user/invoice_list" class="menu-link">
                     <i class="menu-icon tf-icons mdi mdi-receipt-text"></i>
                      <div data-i18n="Invoice">Invoice</div>
                     </a>
                  </li>
                   <li class="menu-item <?php if($page_name=="wallet"){ echo "active";} ?>">
                     <a href="<?=BASEURL?>user/wallet" class="menu-link">
                      <i class="menu-icon tf-icons mdi mdi-wallet"></i>
                      <div data-i18n="Wallet">Wallet</div>
                     </a>
                  </li>
                
                   <li class="menu-item <?php if($page_name=="self_purschase" || $page_name=="direct_income" || $page_name=="binary_income" || $page_name=="repurchase_income"|| $page_name=="royality_bonus"|| $page_name=="checkback_benifit"){ echo "active open";} ?>">
                     <a href="<?=BASEURL?>user/Income"class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons mdi mdi-cash-multiple"></i>
                       <div data-i18n="Incentive">Incentive</div>
                     </a>
                     <ul class="menu-sub ">
                       <!--<li class="menu-item <?php if($page_name=="self_purschase"){ echo "active";} ?>"><a href="<?=BASEURL?>user/self_purschase"  class="menu-link">Self Purchase Incentive</a></li>-->
                        <li class="menu-item <?php if($page_name=="direct_income"){ echo "active";} ?>"><a href="<?=BASEURL?>user/direct_income"  class="menu-link">Affiliate Incentive</a></li>
                       <li class="menu-item <?php if($page_name=="binary_income"){ echo "active";} ?>"><a href="<?=BASEURL?>user/binary_income"  class="menu-link">Team Incentive</a></li>
                        <!--<li class="menu-item <?php if($page_name=="repurchase_income"){ echo "active";} ?>"><a href="<?=BASEURL?>user/repurchase_income"  class="menu-link">Repurchase Incentive</a></li>-->
                        <!--  <li class="menu-item <?php if($page_name=="royality_bonus"){ echo "active";} ?>"><a href="<?=BASEURL?>user/royality_bonus"  class="menu-link">Royality Bonus</a></li>-->
                        <!--<li class="menu-item <?php if($page_name=="checkback_benifit"){ echo "active";} ?>"><a href="<?=BASEURL?>user/checkback_benifit"  class="menu-link">Cashback Benifit</a></li>-->
                    
                        </ul>
                  </li>
                  
                   <?php
                    $badgecount = $this->db->where('receiver_id',$this->session->userdata('ublisusername'))->where('status=','unread')->count_all_results('chat_messages')+0;
                    ?>
                     <li class="menu-item <?php if($page_name=="chat"){ echo "active";} ?>">
                     <a href="<?=BASEURL?>user/chat" class="menu-link">
                     <i class="menu-icon tf-icons mdi mdi-message-badge"></i>
                      <div data-i18n="Chat">Chat</div>
                       <?php if ($badgecount > 0) { ?>
                          <div class="badge bg-danger rounded-pill ms-auto"><?php echo $badgecount; ?></div>
                          <?php } ?>
                     </a>
                  </li>
                
                  <li class="menu-item <?php if($page_name=="reset_password"){ echo "active";} ?>">
                     <a href="<?=BASEURL?>user/reset_password" class="menu-link">
                     <i class="menu-icon tf-icons mdi mdi-lock-reset"></i>
                      <div data-i18n="Reset password">Reset Password</div>
                     </a>
                  </li>
                  <li class="menu-item <?php if($page_name=="logout_all_devices"){ echo "active";} ?>">
                     <a href="<?=BASEURL?>user/logout_all_devices" class="menu-link">
                     <i class="menu-icon tf-icons mdi mdi-logout"></i>
                      <div data-i18n="Logout">Logout</div>
                     </a>
                  </li>
                  
                  <li class="menu-header fw-light ">
              <span class="menu-header-text">   Social Media 
                       </span>
            </li>
                    <li class="menu-item">
                     <a href="https://instagram.com/blissnovaonline?igshid=MzNlNGNkZWQ4Mg=="target="#blank" class="menu-link">
                     <img id="insta1" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/insta1.svg" alt="insta1">
                     <img id="insta2" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/insta2.svg" alt="insta2">
                     <div data-i18n="Instagram">Instagram</div>
                     </a>
                     </li>
                     <li class="menu-item">
                      <a href="https://www.facebook.com/profile.php?id=100093071779903&mibextid=ZbWKwL" target="#blank" class="menu-link">
                       <img id="fb1" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/fb1.svg" alt="fb1">
                     <img id="fb2" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/fb2.svg" alt="fb2">
                     <div  data-i18n="Facebook">Facebook</div>
                     </a>
                     </li>
                      <li class="menu-item">
                      <a href="https://youtube.com/@BlissNovaOnline"target="#blank" class="menu-link">
                    <img id="you1" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/you1.svg" alt="you1">
                     <img id="you2" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/you2.svg" alt="you2">
                      <div data-i18n="Youtube">Youtube</div>
                     </a>
                       </li>
                        <li class="menu-item">
                     <a href="https://twitter.com/BlissNovaOnline" target="#blank" class="menu-link">
                      <img id="twit1" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/twit1.svg" alt="twit1">
                     <img id="twit2" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/twit2.svg" alt="twit2">
                      <div data-i18n="Twitter">Twitter</div>
                     </a>
                     </li>
                       <li class="menu-item">
                     <a href="https://t.me/BlissNovaOnline"target="#blank" class="menu-link">
                    <img id="tele1" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/tele1.svg" alt="tele1">
                     <img id="tele2" class="menu-icon tf-icons " src="<?=BASEURL?>assets/img/icons/tele2.svg" alt="tele2">
                     <div data-i18n="Telegram">Telegram</div>
                     </a>
                  </li>
                  
                <li class="menu-item fw-light mt-4">
              <span class="menu-header-text"></span>
            </li>  
             <li class="menu-item fw-light mt-4">
              <span class="menu-header-text"></span>
            </li> 
             <li class="menu-item fw-light mt-4">
              <span class="menu-header-text"></span>
            </li> 
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
              <!--<div class="navbar-nav align-items-center">-->
              <!--  <div class="nav-item navbar-search-wrapper mb-0">-->
              <!--    <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">-->
              <!--      <i class="mdi mdi-magnify mdi-24px scaleX-n1-rtl"></i>-->
              <!--      <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>-->
              <!--    </a>-->
              <!--  </div>-->
              <!--</div>-->
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Language -->
                <!--<li class="nav-item dropdown-language dropdown me-1 me-xl-0">-->
                <!--  <a-->
                <!--    class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"-->
                <!--    href="javascript:void(0);"-->
                <!--    data-bs-toggle="dropdown">-->
                <!--    <i class="mdi mdi-translate mdi-24px"></i>-->
                <!--  </a>-->
                <!--  <ul class="dropdown-menu dropdown-menu-end">-->
                <!--    <li>-->
                <!--      <a class="dropdown-item" href="javascript:void(0);" data-language="en">-->
                <!--        <span class="align-middle">English</span>-->
                <!--      </a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a class="dropdown-item" href="javascript:void(0);" data-language="fr">-->
                <!--        <span class="align-middle">French</span>-->
                <!--      </a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a class="dropdown-item" href="javascript:void(0);" data-language="de">-->
                <!--        <span class="align-middle">German</span>-->
                <!--      </a>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--      <a class="dropdown-item" href="javascript:void(0);" data-language="pt">-->
                <!--        <span class="align-middle">Portuguese</span>-->
                <!--      </a>-->
                <!--    </li>-->
                <!--  </ul>-->
                <!--</li>-->
                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item me-1 me-xl-0">
                  <a
                    class="nav-link btn btn-text-secondary rounded-pill btn-icon style-switcher-toggle hide-arrow"
                    href="javascript:void(0);">
                    <i class="mdi mdi-24px"></i>
                  </a>
                </li>
                <!--/ Style Switcher -->

                <!-- Quick links  -->
                <!--<li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-1 me-xl-0">-->
                <!--  <a-->
                <!--    class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"-->
                <!--    href="javascript:void(0);"-->
                <!--    data-bs-toggle="dropdown"-->
                <!--    data-bs-auto-close="outside"-->
                <!--    aria-expanded="false">-->
                <!--    <i class="mdi mdi-view-grid-plus-outline mdi-24px"></i>-->
                <!--  </a>-->
                <!--  <div class="dropdown-menu dropdown-menu-end py-0">-->
                <!--    <div class="dropdown-menu-header border-bottom">-->
                <!--      <div class="dropdown-header d-flex align-items-center py-3">-->
                <!--        <h5 class="text-body mb-0 me-auto">Shortcuts</h5>-->
                <!--        <a-->
                <!--          href="javascript:void(0)"-->
                <!--          class="dropdown-shortcuts-add text-muted"-->
                <!--          data-bs-toggle="tooltip"-->
                <!--          data-bs-placement="top"-->
                <!--          title="Add shortcuts"-->
                <!--          ><i class="mdi mdi-view-grid-plus-outline mdi-24px"></i-->
                <!--        ></a>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--    <div class="dropdown-shortcuts-list scrollable-container">-->
                <!--      <div class="row row-bordered overflow-visible g-0">-->
                <!--        <div class="dropdown-shortcuts-item col">-->
                <!--          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">-->
                <!--            <i class="mdi mdi-calendar fs-4"></i>-->
                <!--          </span>-->
                <!--          <a href="app-calendar.html" class="stretched-link">Calendar</a>-->
                <!--          <small class="text-muted mb-0">Appointments</small>-->
                <!--        </div>-->
                <!--        <div class="dropdown-shortcuts-item col">-->
                <!--          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">-->
                <!--            <i class="mdi mdi-file-document-outline fs-4"></i>-->
                <!--          </span>-->
                <!--          <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>-->
                <!--          <small class="text-muted mb-0">Manage Accounts</small>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--      <div class="row row-bordered overflow-visible g-0">-->
                <!--        <div class="dropdown-shortcuts-item col">-->
                <!--          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">-->
                <!--            <i class="mdi mdi-account-outline fs-4"></i>-->
                <!--          </span>-->
                <!--          <a href="app-user-list.html" class="stretched-link">User App</a>-->
                <!--          <small class="text-muted mb-0">Manage Users</small>-->
                <!--        </div>-->
                <!--        <div class="dropdown-shortcuts-item col">-->
                <!--          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">-->
                <!--            <i class="mdi mdi-shield-check-outline fs-4"></i>-->
                <!--          </span>-->
                <!--          <a href="app-access-roles.html" class="stretched-link">Role Management</a>-->
                <!--          <small class="text-muted mb-0">Permission</small>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--      <div class="row row-bordered overflow-visible g-0">-->
                <!--        <div class="dropdown-shortcuts-item col">-->
                <!--          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">-->
                <!--            <i class="mdi mdi-chart-pie-outline fs-4"></i>-->
                <!--          </span>-->
                <!--          <a href="index.html" class="stretched-link">Dashboard</a>-->
                <!--          <small class="text-muted mb-0">User Profile</small>-->
                <!--        </div>-->
                <!--        <div class="dropdown-shortcuts-item col">-->
                <!--          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">-->
                <!--            <i class="mdi mdi-cog-outline fs-4"></i>-->
                <!--          </span>-->
                <!--          <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>-->
                <!--          <small class="text-muted mb-0">Account Settings</small>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--      <div class="row row-bordered overflow-visible g-0">-->
                <!--        <div class="dropdown-shortcuts-item col">-->
                <!--          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">-->
                <!--            <i class="mdi mdi-help-circle-outline fs-4"></i>-->
                <!--          </span>-->
                <!--          <a href="pages-help-center-landing.html" class="stretched-link">Help Center</a>-->
                <!--          <small class="text-muted mb-0">FAQs & Articles</small>-->
                <!--        </div>-->
                <!--        <div class="dropdown-shortcuts-item col">-->
                <!--          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">-->
                <!--            <i class="mdi mdi-dock-window fs-4"></i>-->
                <!--          </span>-->
                <!--          <a href="modal-examples.html" class="stretched-link">Modals</a>-->
                <!--          <small class="text-muted mb-0">Useful Popups</small>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</li>-->
                <!-- Quick links -->

                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                  <a id="updateButton"
                    class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false" onclick="myFunction()">
                    <i class="mdi mdi-bell-outline mdi-24px"></i>
              <?php
                $count = $this->db->where('username', $this->session->userdata('ublisusername'))->where('status','New')
                  ->from('notifications')
                  ->count_all_results();
?>

                    <?php if(!empty($count)){ ?>
                    <span class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span> <?php } ?>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end py-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h6 class="mb-0 me-auto">Notifications</h6>
                
                        <span class="badge rounded-pill bg-label-primary"></span>
                      </div>
                    </li> 
                    
                    <li class="dropdown-notifications-list scrollable-container">
                          
                      <ul class="list-group list-group-flush">
                           <?php $notification=$this->db->order_by('id','DESC')->limit(5)->where('username',$this->session->userdata('ublisusername'))->get('notifications')->result_array();
                          foreach($notification as $key=>$noti){ ?>
                          <a href="<?=BASEURL?>user/viewnotification">
                       <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">

                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <!--<span class="avatar-initial rounded-circle bg-label-warning"><i class="mdi mdi-alert-circle-outline"></i></span>-->
                                <img src="<?=BASEURL?>assets/images/notification/<?=$noti['image']?>" alt class="w-px-40 h-auto rounded-circle notification" />
                              </div>
                            </div>
                   
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                             <h6 class="mb-1"><?=$noti['remark']?></h6>
                              <!--<small class="text-truncate text-body"-->
                              <!--  >CPU Utilization Percent is currently at 88.63%,</small-->
                             
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted"><?=$noti['entry_date']?></small>
                            </div>
                            </div>
                                 
                          
                        </li>
                        </a>
                        
                        <?php } ?> 
                        <?php $pincount = $this->db->where('username',$this->session->userdata('ublisusername'))->where('status','Request')->count_all_results('investment')+0?>
                        
                      
                             <li class="list-group-item list-group-item-action dropdown-notifications-item" <?php if ($pincount == 0) { echo 'style="display:none;"'; } ?>>
                                  
                        <div class="d-flex gap-2" >

                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <img src="<?=BASEURL?>assets/images/thumbs-up.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">PIN Request</h6>
                              <small class="text-truncate text-body">Your have new message from Jane</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted"> <span class="badge rounded-pill bg-label-primary"><?=$pincount?></span></small>
                            </div>
                          </div>
                           
                        </li>   
                       

                      </ul>
                    </li>
                    <li class="dropdown-menu-footer border-top p-2">
                      <a href="<?=BASEURL?>user/viewnotification" class="btn btn-primary d-flex justify-content-center">
                        View all notifications
                      </a>
                    </li>
                    
                    
                  </ul>
                </li>
                <!--/ Notification -->
                
                
                <!--Announcement-->
            
                
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                  <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow waves-effect waves-light " href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                    <i class="mdi mdi-bullhorn-outline mdi-24px"></i>
                    
                    <?php
                $msg = $this->db->where('viewed_username NOT LIKE', '%' . $this->session->userdata('ublisusername') . '%')->count_all_results('announcement');?>
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
                            $annouce=$this->db->order_by('id','DESC')->limit(5)->where('view_for','User')->get('announcement')->result_array();
                            foreach($annouce as $key){?>
                            <a href="<?=BASEURL?>user/announcement/<?=$key['id']?>">
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
                      <a href="<?=BASEURL?>user/announcement" class="btn btn-primary d-flex justify-content-center waves-effect waves-light">
                        View all Announcement
                      </a>
                    </li>
                  </ul>
                </li>
                
                 <!--/Announcement-->
                

              <!-- User -->
               <?php $user=$this->db->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row_array(); ?>
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?=BASEURL?>assets/images/<?=$user['profile_image']?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                            
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?=BASEURL?>assets/images/<?=$user['profile_image']?>" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
           
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?=$user['first_name']?> <?=$user['last_name']?></span>
                            <small class="text-muted"><?=$this->session->userdata('ublisusername')?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?=BASEURL?>user/user_profile">
                        <i class="mdi mdi-account-outline me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <!--<li>-->
                    <!--  <a class="dropdown-item" href="pages-account-settings-account.html">-->
                    <!--    <i class="mdi mdi-cog-outline me-2"></i>-->
                    <!--    <span class="align-middle">Settings</span>-->
                    <!--  </a>-->
                    <!--</li>-->
                    <li>
                      <a class="dropdown-item"  href="<?=BASEURL?>user/invoice_list">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 mdi mdi-credit-card-outline me-2"></i>
                          <span class="flex-grow-1 align-middle">Invoice</span>
                          <!--<span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>-->
                        </span>
                      </a>
                    </li>
                    <!--<li>-->
                    <!--  <div class="dropdown-divider"></div>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--  <a class="dropdown-item" href="pages-help-center-landing.html">-->
                    <!--    <i class="mdi mdi-lifebuoy me-2"></i>-->
                    <!--    <span class="align-middle">Help</span>-->
                    <!--  </a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--  <a class="dropdown-item" href="pages-faq.html">-->
                    <!--    <i class="mdi mdi-help-circle-outline me-2"></i>-->
                    <!--    <span class="align-middle">FAQ</span>-->
                    <!--  </a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--  <a class="dropdown-item" href="pages-pricing.html">-->
                    <!--    <i class="mdi mdi-currency-usd me-2"></i>-->
                    <!--    <span class="align-middle">Pricing</span>-->
                    <!--  </a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--  <div class="dropdown-divider"></div>-->
                    <!--</li>-->
                    <li>
                      <a class="dropdown-item" href="<?=BASEURL?>user/logout_all_devices">
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
            <script src="https://cdn.example.com/js/my-script.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>

function myFunction() {
 $.ajax({
 //alert('status');
    type: "POST",

    url: "<?=BASEURL?>user/notification_update",

    data: {
      'status': "old"
 },

    success: function(response) {

      console.log(response);

      //alert(response);

    },

    error: function(xhr, status, error) {

      console.log(xhr.responseText);

    }

  });

}

</script>
     







