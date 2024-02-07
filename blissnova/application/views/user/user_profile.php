<?php include 'header.php';?>
<!-- Page CSS -->
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/page-profile.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/flatpickr/flatpickr.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">

<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">-->
<style>
   .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input, .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=text], .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=tel] {
       padding-left: 82px;
       max-width: 100%;
       height: 51px;
   }

   .image-preview {
   max-width: 200px;
   margin-top: 10px;
   }
 
   img#confirm-img {
   width: 150px!important;
   height: 150px!important;
   }
   img#other-image {
   width: 150px!important;
   height: 150px!important;
   }
   span.new {
   display: flex;
   align-items: center;
   justify-content: center;
   }
   .flex-shrink-0.mt-n2.mx-sm-0.mx-auto {
   display: flex;
   flex-direction: column;
   align-items: center;
   }
   @media (max-width: 576px) {
   .modal-dialog {
   max-width: 100%;
   margin: 1rem;
   }
   }
</style>
<style>
   .disp-none{
   display:none;
   }
   .container-form{
   width:100%;
   display:flex;
   justify-content: center;
   align-items: center;
   padding:50px;
   padding-bottom:0;
   }
   .container-image{
   width:100%;
   display:flex;
   justify-content: center;
   align-items: center;
   padding:20px;
   }
   #confirm-img{
   height: 218px;
   border-radius: 4px;
   }
   div#crop-image-container {
   width: 100%;
   height: 400px!important;
   }
</style>
<?php
$counts=$this->db->where('username',$this->session->userdata('ublisusername'))->get('prime_rank_achivers')->row_array();
$next_rank_counts=0;
 if ($counts["level1"] < 3 ) {
    $rank = "";
    $current=$counts["level1"];
    $next_rank_counts=3;
    $next_rank="Bliss Beginner";
}

elseif ($counts["level1"] >= 3 ) {
    $rank = "Bliss Beginner";
    $current=$counts["level2"];
    $next_rank_counts=9;
    $next_rank = "Bliss Achiever";
    
        if ($counts["level2"] >= 9 ) {
        $rank = "Bliss Achiever";
        $current=$counts["level3"];
        $next_rank_counts=27;
        $next_rank = "Bliss Coach";
        
         if ($counts["level3"] >= 27 ) {
            $rank = "Bliss Coach";
            $current=$counts["level4"];
            $next_rank_counts=81;
            $next_rank = "Bliss Strategist";
            
            if ($counts["level4"] >= 81 ) {
                $rank = "Bliss Strategist";
                $current=$counts["level5"];
                $next_rank_counts=243;
                $next_rank = "Bliss Mentor";
                
                 if ($counts["level5"] >= 243 ) {
                    $rank = "Bliss Mentor";
                    $current=$counts["level6"];
                    $next_rank_counts=729;
                    $next_rank = "Bliss Consultant";
                    
                     if ($counts["level6"] >= 729 ) {
                        $rank = "Bliss Consultant";
                        $current=$counts["level7"];
                        $next_rank_counts=2187;
                        $next_rank = "Bliss Associate";
                        
                         if ($counts["level7"] >= 2187 ) {
                            $rank = "Bliss Associate";
                            $current=$counts["level8"];
                            $next_rank_counts=6561;
                            $next_rank = "Bliss Specialist";
                            
                            if ($counts["level8"] >= 6561 ) {
                                $rank = "Bliss Specialist";
                                $current=$counts["level9"];
                                $next_rank_counts=19683;
                                $next_rank = "Bliss Coordinator";
                                
                                if ($counts["level9"] >= 19683 ) {
                                    $rank = "Bliss Coordinator";
                                    $current=$counts["level10"];
                                    $next_rank_counts=59049;
                                    $next_rank = "Bliss Supervisor";
                                    
                                     if ($counts["level10"] >= 59049 ) {
                                        $rank = "Bliss Supervisor";
                                        $current=$counts["level11"];
                                        $next_rank_counts=177147;
                                        $next_rank = "Bliss Executive";
                                        
                                        if ($counts["level11"] >= 177147 ) {
                                            $rank = "Bliss Executive";
                                            $current=$counts["level12"];
                                            $next_rank_counts=531441;
                                            $next_rank = "Bliss Chief";
                                            
                                            if ($counts["level12"] >= 531441 ) {
                                                $rank = "Bliss Chief";
                                                $current=$counts["level13"];
                                                $next_rank_counts=1594323;
                                                $next_rank = "Bliss Leader";
                                                
                                                if ($counts["level13"] >= 1594323 ) {
                                                    $rank = "Bliss Leader";
                                                    $current=$counts["level14"];
                                                    $next_rank_counts=4782969;
                                                    $next_rank = "Bliss Ambassador";
                                                    
                                                    if ($counts["level14"] >= 4782969 ) {
                                                        $rank = "Bliss Ambassador";
                                                        $current=$counts["level15"];
                                                        $next_rank_counts=14348907;
                                                        $next_rank = "Bliss Crown";
                                                        
                                                        if ($counts["level15"] >= 14348907) {
                                                            $rank = "Bliss Crown";
                                                            $next_rank="Milestone Completed";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } 
    }
} ?>
<div class="container-xxl flex-grow-1 container-p-y">
   <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User Profile /</span> Profile</h4>
   <!-- Header -->
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="user-profile-header-banner">
               <img src="<?=BASEURL?>assets/img/logo/bliss.svg" alt="Banner image" class="rounded-top" />
            </div>
           
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
    <input id="selectedFile" class="disp-none" type="file" accept=".png, .jpg, .jpeg, .svg">
    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
      <img id="confirm-img" src="<?=BASEURL?>assets/images/<?=$user['profile_image']?>" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" onclick="document.getElementById('upload').click();">
      <button id="upload-aphoto" class="btn-primary btn btn-sm new ms-0 ms-sm-4">Change Profile</button>
    </div>
    <div class="modal fade " id="imageModalContainer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content modal-content1">
          <div class="modal-header">
            <h5 class="modal-title" id="imageModal">Crop Image</h5>
          </div>
          <div class="modal-body modal-body1" style="height: 430px;">
            <div id="crop-image-container"></div>
          </div>
          <div class="modal-footer mt-4">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary save-modal">Save</button>
          </div>
        </div>
      </div>
    </div>
    <div class="flex-grow-1 mt-3 mt-sm-5">
      <?php $user=$this->db->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row_array(); ?>
      <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
        <div class="user-profile-info">
          <h4><?=$user['first_name']?> <?=$user['last_name']?></h4>
          <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
            <li class="list-inline-item">
              <i class="mdi mdi-map-marker-outline me-1 mdi-20px"></i><span class="fw-semibold"><?=$user['city']?> City</span>
            </li>
            <li class="list-inline-item">
              <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i><span class="fw-semibold"> Joined <?=(new DateTime($user['entry_date']))->format('F j, Y h:i A');?></span>
            </li>
            <li class="list-inline-item">
              <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i><span class="fw-semibold"> Activated on <?=(new DateTime($user['activated_date']))->format('F j, Y h:i A');?></span>
            </li>
          </ul>
        </div>
        <a href="<?=BASEURL?>user/idcard" class="btn btn-primary">
          <i class="mdi mdi-account-check-outline me-1"></i>ID Card
        </a>
      </div>
    </div>
  </div>

         </div>
      </div>
   </div>
   <!--/ Header -->
   <!-- Navbar pills -->
   <div class="row">
      <div class="col-md-12">
         <ul class="nav nav-pills flex-column flex-sm-row mb-4">
            <li class="nav-item">
               <a class="nav-link active" href="<?=BASEURL?>user/user_profile"
                  ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>user/bank"
                  ><i class="mdi mdi-account-multiple-outline me-1 mdi-20px"></i>Bank</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>user/kyc"
                  ><i class="mdi mdi-view-grid-outline me-1 mdi-20px"></i>KYC</a
                  >
            </li>
         </ul>
      </div>
   </div>
   <!--/ Navbar pills -->
   <!-- User Profile Content -->
   <div class="row justify-content-center">
      <div class="col-xl-12 col-lg-5 col-md-5 order-1 order-md-0">
         <!-- User Card -->
         <div class="card mb-4">
            <div class="card-body">
               <div class="user-avatar-section">
                  <div class="d-flex align-items-center flex-column">
                     <img class="img-fluid rounded mb-3 mt-4"  id="other-image" src="<?=BASEURL?>assets/images/<?=$user['profile_image']?>" height="120" width="120" alt="User avatar">
                     <div class="user-info text-center">
                        <h4><?=$user['first_name']?> <?=$user['last_name']?></h4>
                     </div>
                  </div>
               </div>
               <div class="d-flex justify-content-between flex-wrap my-2 py-3">
                  <div class="d-flex align-items-center me-4 mt-3 gap-3">
                     <div class="avatar">
                        <div class="avatar-initial bg-white rounded">
                           <!--<i class="mdi mdi-check mdi-24px"></i>-->
                           <?php $badge_for_user=$this->db->select_max('credit')->where('username',$this->session->userdata('ublisusername'))->where('remark','Activation')->get('pin')->row()->credit; 
                           if($badge_for_user == 1100){
                               $badge_image="plusbadge.png";
                               $packname="Plus";
                               $rank_name="NOT ELIGIBLE";
                           }
                           if($badge_for_user == 10000){
                              $badge_image="primebadge.png"; 
                               $packname="Prime";
                               $rank_name=$next_rank;
                           }
                           ?>
                           <img src="<?=BASEURL?>assets/images/badges/<?=$badge_image?>" alt="" class="img-thumbnail rounded-circle">
                        </div>
                     </div>
                     <div>
                        <h5 class="mb-0 fw-normal"><?=$packname?> User</h5>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mt-3 gap-3">
                     <div class="avatar">
                        <div class="avatar-initial bg-white rounded">
                           <!--<i class="mdi mdi-star-outline mdi-24px"></i>-->
                           <img src="<?=BASEURL?>assets/img/illustrations/trophy.png" class="img-thumbnail" alt="view sales">
                        </div>
                     </div>
                     <div>
                        <h5 class="mb-0 fw-normal"><?=$rank_name?></h5>
                     </div>
                  </div>
               </div>
               <h5 class="pb-3 border-bottom mb-3">Details</h5>
               <div class="info-container">
                  <ul class="list-unstyled mb-4">
                     <?php $user=$this->db->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row_array(); ?>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Name:</span>
                        <span><?=$user['first_name']?> <?=$user['last_name']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Mobile No:</span>
                        <span><?=$user['mobile']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Email:</span>
                        <span><?=$user['email']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Gender:</span>
                        <span><?=$user['gender']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Nominee Name:</span>
                        <span><?=$user['nominee_name']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Nominee relation:</span>
                        <span><?=$user['nominee_relation']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Status:</span>
                        <span class="badge bg-label-success"><?=$user['status']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Address:</span>
                        <span><?=$user['address1']?> <?=$user['address2']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">City:</span>
                        <span><?=$user['city']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">District:</span>
                        <span><?=$user['district']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">State:</span>
                        <span><?=$user['state']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Pincode:</span>
                        <span><?=$user['pincode']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Referral ID:</span>
                        <span><?=$user['ref_id']?></span>
                     </li>
                     <?php $ref=$this->db->where('username',$user['ref_id'])->get('user_role')->row_array(); ?>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Referral Name:</span>
                        <span><?=$ref['first_name']?> <?=$ref['last_name']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Firm Name:</span>
                        <span><?=$user['firm_name']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">GST Number:</span>
                        <span><?=$user['gst']?></span>
                     </li>
                  </ul>
                  <div class="d-flex justify-content-center">
                     <a href="javascript:;" class="btn btn-primary me-3 waves-effect waves-light" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- /User Card -->
      </div>
      <div class="col-xl-8 col-lg-7 col-md-7"style="display:none;">
         <!-- Activity Timeline -->
         <div class="card card-action mb-4">
            <div class="card-header align-items-center">
               <h5 class="card-action-title mb-0">
                  <i class="mdi mdi-format-list-bulleted mdi-24px me-2"></i>Activity Timeline
               </h5>
               <div class="card-action-element">
                  <div class="dropdown">
                     <button
                        type="button"
                        class="btn dropdown-toggle hide-arrow p-0"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                     <i class="mdi mdi-dots-vertical mdi-24px text-muted"></i>
                     </button>
                     <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="javascript:void(0);">Share timeline</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                        <li>
                           <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="card-body pt-3 pb-0">
               <ul class="timeline mb-0">
                  <li class="timeline-item timeline-item-transparent">
                     <span class="timeline-point timeline-point-danger"></span>
                     <div class="timeline-event">
                        <div class="timeline-header mb-1">
                           <h6 class="mb-0">Client Meeting</h6>
                           <span class="text-muted">Today</span>
                        </div>
                        <p class="text-muted mb-2">Project meeting with john @10:15am</p>
                        <div class="d-flex flex-wrap">
                           <div class="avatar me-3">
                              <img id="user-image" src="<?=BASEURL?>assets/images/<?=$user['profile_image']?>" alt="Avatar" class="rounded-circle" />
                           </div>
                           <div>
                              <h6 class="mb-0">Lester McCarthy (Client)</h6>
                              <span class="text-muted">CEO of Infibeam</span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="timeline-item timeline-item-transparent">
                     <span class="timeline-point timeline-point-primary"></span>
                     <div class="timeline-event">
                        <div class="timeline-header mb-1">
                           <h6 class="mb-0">Create a new project for client</h6>
                           <span class="text-muted">2 Day Ago</span>
                        </div>
                        <p class="text-muted mb-0">Add files to new design folder</p>
                     </div>
                  </li>
                  <li class="timeline-item timeline-item-transparent">
                     <span class="timeline-point timeline-point-warning"></span>
                     <div class="timeline-event">
                        <div class="timeline-header mb-1">
                           <h6 class="mb-0">Shared 2 New Project Files</h6>
                           <span class="text-muted">6 Day Ago</span>
                        </div>
                        <p class="text-muted mb-2">
                           Sent by Mollie Dixon
                           <img
                              id="user-image"
                              src="<?=BASEURL?>assets/images/<?=$user['profile_image']?>"
                              class="rounded-circle me-3"
                              alt="avatar"
                              height="24"
                              width="24" />
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                           <a href="javascript:void(0)" class="me-3">
                           <img
                              src="<?=BASEURL?>assets/img/icons/misc/doc.png"
                              alt="Document image"
                              width="15"
                              class="me-2" />
                           <span class="fw-medium text-body">App Guidelines</span>
                           </a>
                           <a href="javascript:void(0)">
                           <img
                              src="<?=BASEURL?>assets/img/icons/misc/xls.png"
                              alt="Excel image"
                              width="15"
                              class="me-2" />
                           <span class="fw-medium text-body">Testing Results</span>
                           </a>
                        </div>
                     </div>
                  </li>
                  <li class="timeline-item timeline-item-transparent border-0">
                     <span class="timeline-point timeline-point-info"></span>
                     <div class="timeline-event">
                        <div class="timeline-header mb-1">
                           <h6 class="mb-0">Project status updated</h6>
                           <span class="text-muted">10 Day Ago</span>
                        </div>
                        <p class="text-muted mb-0">Woocommerce iOS App Completed</p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <!--/ Activity Timeline -->
         <div class="row">
            <!-- Teams -->
            <div class="col-lg-12 col-xl-12">
               <div class="card card-action mb-4">
                  <div class="card-header align-items-center">
                     <h5 class="card-action-title mb-0">Teams</h5>
                     <div class="card-action-element">
                        <div class="dropdown">
                           <button
                              type="button"
                              class="btn dropdown-toggle hide-arrow p-0"
                              data-bs-toggle="dropdown"
                              aria-expanded="false">
                           <i class="mdi mdi-dots-vertical mdi-24px text-muted"></i>
                           </button>
                           <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="javascript:void(0);">Share teams</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                              <li>
                                 <hr class="dropdown-divider" />
                              </li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <ul class="list-unstyled mb-0">
                        <li class="mb-3">
                           <div class="d-flex align-items-center">
                              <div class="d-flex align-items-start">
                                 <div class="avatar me-3">
                                    <img
                                       src="<?=BASEURL?>assets/img/icons/brands/react-label.png"
                                       alt="Avatar"
                                       class="rounded-circle" />
                                 </div>
                                 <div class="me-2">
                                    <h6 class="mb-0">React Developers</h6>
                                    <small class="text-muted">72 Members</small>
                                 </div>
                              </div>
                              <div class="ms-auto">
                                 <a href="javascript:;"
                                    ><span class="badge bg-label-danger rounded-pill">Developer</span></a
                                    >
                              </div>
                           </div>
                        </li>
                        <li class="mb-3">
                           <div class="d-flex align-items-center">
                              <div class="d-flex align-items-start">
                                 <div class="avatar me-3">
                                    <img
                                       src="<?=BASEURL?>assets/img/icons/brands/support-label.png"
                                       alt="Avatar"
                                       class="rounded-circle" />
                                 </div>
                                 <div class="me-2">
                                    <h6 class="mb-0">Support Team</h6>
                                    <small class="text-muted">122 Members</small>
                                 </div>
                              </div>
                              <div class="ms-auto">
                                 <a href="javascript:;"
                                    ><span class="badge bg-label-primary rounded-pill">Support</span></a
                                    >
                              </div>
                           </div>
                        </li>
                        <li class="mb-3">
                           <div class="d-flex align-items-center">
                              <div class="d-flex align-items-start">
                                 <div class="avatar me-3">
                                    <img
                                       src="<?=BASEURL?>assets/img/icons/brands/figma-label.png"
                                       alt="Avatar"
                                       class="rounded-circle" />
                                 </div>
                                 <div class="me-2">
                                    <h6 class="mb-0">UI Designers</h6>
                                    <small class="text-muted">7 Members</small>
                                 </div>
                              </div>
                              <div class="ms-auto">
                                 <a href="javascript:;"
                                    ><span class="badge bg-label-info rounded-pill">Designer</span></a
                                    >
                              </div>
                           </div>
                        </li>
                        <li class="mb-3">
                           <div class="d-flex align-items-center">
                              <div class="d-flex align-items-start">
                                 <div class="avatar me-3">
                                    <img
                                       src="<?=BASEURL?>assets/img/icons/brands/vue-label.png"
                                       alt="Avatar"
                                       class="rounded-circle" />
                                 </div>
                                 <div class="me-2">
                                    <h6 class="mb-0">Vue.js Developers</h6>
                                    <small class="text-muted">289 Members</small>
                                 </div>
                              </div>
                              <div class="ms-auto">
                                 <a href="javascript:;"
                                    ><span class="badge bg-label-danger rounded-pill">Developer</span></a
                                    >
                              </div>
                           </div>
                        </li>
                        <li class="mb-3">
                           <div class="d-flex align-items-center">
                              <div class="d-flex align-items-start">
                                 <div class="avatar me-3">
                                    <img
                                       src="<?=BASEURL?>assets/img/icons/brands/twitter-label.png"
                                       alt="Avatar"
                                       class="rounded-circle" />
                                 </div>
                                 <div class="me-w">
                                    <h6 class="mb-0">Digital Marketing</h6>
                                    <small class="text-muted">24 Members</small>
                                 </div>
                              </div>
                              <div class="ms-auto">
                                 <a href="javascript:;"
                                    ><span class="badge bg-label-secondary rounded-pill">Marketing</span></a
                                    >
                              </div>
                           </div>
                        </li>
                        <li class="text-center">
                           <a href="javascript:;">View all teams</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!--/ Teams -->
         </div>
         <!-- Projects table -->
         <div class="card mb-4">
            <div class="card-datatable table-responsive">
               <table class="datatables-projects table">
                  <thead>
                     <tr>
                        <th></th>
                        <th></th>
                        <th>Name</th>
                        <th>Leader</th>
                        <th>Team</th>
                        <th class="w-px-200">Status</th>
                        <th>Action</th>
                     </tr>
                  </thead>
               </table>
            </div>
         </div>
         <!--/ Projects table -->
      </div>
   </div>
   <!--/ User Profile Content -->
</div>
<!-- / Content -->
<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-lg modal-simple modal-edit-user">
      <div class="modal-content p-3 p-md-5">
         <div class="modal-body py-3 py-md-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-4">
               <h3 class="mb-2">Edit User Information</h3>
            </div>
            <!--<form id="editUserForm" class="row g-4" action="<?=BASEURL?>user/user_profile" method="POST">-->
            <form  class="row g-4" action="<?=BASEURL?>user/user_profile" method="POST">
               <div class="row g-4">
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline">
                        <input type="text" id="first-name" class="form-control" placeholder="John" value="<?=$user['first_name']?>"  oninput="this.value = this.value.toUpperCase()"/readonly>
                        <!--<input type="hidden"  value="<?=$this->session->userdata('ublisusername')?>" name="username">-->
                        <label for="first-name">First Name</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline">
                        <input type="text" id="last-name" class="form-control" placeholder="Doe" name="last_name" value="<?=$user['last_name']?>"  oninput="this.value = this.value.toUpperCase()"/readonly>
                        <label for="last-name">Last Name</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="phone number" name="mobile" placeholder="Enter your phone number" autofocus="" value="<?=$user['mobile']?>" >
                        <label for="Mobile No">Mobile No</label>
                     </div>
                  </div>
                  <!--<div class="col-sm-6">-->
                  <!--      <div class="form-floating form-floating-outline mb-3">-->
                  <!--          <input-->
                  <!--              value=""-->
                  <!--              type="text"-->
                  <!--              class="form-control"-->
                  <!--              id="phone"-->
                  <!--              placeholder="Enter your phone number"-->
                  <!--              autofocus />-->
                  <!--          <input id="hphone" class="form-control" name="mobile" type="hidden">-->
                  <!--              <label for="Mobile No">Mobile No</label>-->
                  <!--      </div><span id="phone-error" style="color:red;"></span><?php echo form_error('mobile') ?>-->
                  <!--  </div>-->
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Email" name="email" placeholder="Enter your Email" autofocus="" value="<?=$user['email']?>" >
                        <label for="Email">Email</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Address1" name="address1" placeholder="Enter your Address1" autofocus="" value="<?=$user['address1']?>">
                        <label for="Address1">Address1</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Address2" name="address2" placeholder="Enter your Address2" autofocus="" value="<?=$user['address2']?>">
                        <label for="Address2">Address2</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="street" name="street" placeholder="Enter your street" autofocus="" value="<?=$user['street']?>">
                        <label for="Street">Street</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="City" name="city" placeholder="Enter your City" autofocus="" value="<?=$user['city']?>">
                        <label for="City">City</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="District" name="district" placeholder="Enter your District" autofocus="" value="<?=$user['district']?>">
                        <label for="District">District</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="State" name="state" placeholder="Enter your State" autofocus="" value="<?=$user['state']?>">
                        <?=form_error('state')?>
                        <label for="State">State</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="State" name="country" placeholder="Enter your State" autofocus="" value="<?=$user['country']?>" >
                        <?=form_error('country')?>
                        <label for="Country">Country</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3"> 
                        <input type="text" class="form-control" id="Pincode" name="pincode" placeholder="Enter your Pincode" autofocus="" value="<?=$user['pincode']?>">
                        <label for="Pincode">Pincode</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Nomineerelation" name="nominee_relation" value="<?=$user['nominee_relation']?>" placeholder="Enter your Nominee relation " autofocus="">
                        <?=form_error('nominee_relation')?>
                        <label for="Nominee relation ">Nominee relation </label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Nominee Name " value="<?=$user['nominee_name']?>" name="nominee_name" placeholder="Enter your Nominee Name " autofocus=""><?=form_error('nominee_name')?>
                        <label for="Nominee Name ">Nominee Name </label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="row">
                        <label class="col-sm-3 col-form-label text-sm-end">Gender</label>
                        <div class="col-sm-9">
                            <?php 
                              if($user['gender']=='Male'){ $gender='checked';}
                              if($user['gender']=='Female'){ $genderr='checked';} 
                              ?>

                           <div class="form-check mb-2">
                           <input name="gender" class="form-check-input" type="radio"  <?=$gender ?> value="Male">
                           <label class="form-check-label" for="collapsible-genderType-male">
                           Male
                           </label>
                        </div>
                        <div class="form-check">
                           <input name="gender" class="form-check-input" type="radio" <?=$genderr ?> value="Female" >
                           <label class="form-check-label" for="collapsible-genderType-female">
                           Female
                           </label>
                        </div>

                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-4">
                        <input class="form-control" type="date" id="html5-date-input" name="dob" value="<?=date("Y-m-d",strtotime($user['dob']))?>">
                        <label for="html5-date-input">DOB</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-4">
                        <input class="form-control" type="date" id="html5-date-input" value="<?=date("Y-m-d",strtotime($user['entry_date']))?>" /readonly>
                        <label for="html5-date-input">DOJ</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Referral ID " name="Referral ID " value="<?=$user['ref_id']?>" placeholder="Enter your Referral ID " autofocus="" /readonly>
                        <label for="Referral ID ">Referral ID </label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Referral Name" name="Referral Name" placeholder="Enter your Referral Name " autofocus=""  oninput="this.value = this.value.toUpperCase()" value="<?=$ref['first_name']?> <?=$ref['last_name']?>" /readonly>
                        <label for="Referral Name ">Referral Name  </label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="firm_name " name="firm_name" value="<?=$user['firm_name']?>" placeholder="Enter your Firm Name" autofocus="" >
                        <label for="firm_name ">Firm Name</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="gst" name="gst" placeholder="Enter your GST Number" autofocus="" value="<?=$user['gst']?>">
                        <label for="Referral Name ">GST Number</label>
                     </div>
                  </div>
                  <div class="col-12  d-flex text-center justify-content-center">
                     <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                     <button
                        type="reset"
                        class="btn btn-outline-secondary"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                     Cancel
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!--/ Edit User Modal -->
<script src="<?=BASEURL?>assets/vendor/libs/flatpickr/flatpickr.js"></script>
<?php include 'footer.php';?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>


<script>
    $(document).on('click', '#upload-aphoto', function() {
      document.getElementById('selectedFile').click();
    });

    $('#selectedFile').change(function() {
      if (this.files[0] == undefined)
        return;
      compressAndDisplayImage(this.files[0]);
    });

    function compressAndDisplayImage(file) {
      var reader = new FileReader();
      reader.onload = function(event) {
        var img = new Image();
        img.onload = function() {
          var canvas = document.createElement('canvas');
          var maxWidth = 800; // Adjust the maximum width as needed
          var maxHeight = 800; // Adjust the maximum height as needed
          var width = img.width;
          var height = img.height;

          if (width > height && width > maxWidth) {
            height *= maxWidth / width;
            width = maxWidth;
          } else if (height > maxHeight) {
            width *= maxHeight / height;
            height = maxHeight;
          }

          canvas.width = width;
          canvas.height = height;
          var ctx = canvas.getContext('2d');
          ctx.drawImage(img, 0, 0, width, height);
          var compressedImageData = canvas.toDataURL('image/jpeg', 0.7); // Adjust the compression quality (0.0 - 1.0) as needed

          $('#imageModalContainer').modal('show');
          window.src = compressedImageData;
          $('#selectedFile').val('');
          croppi.bind({
            url: compressedImageData,
          }).then(function() {
            croppi.setZoom(0);
          });
        };
        img.src = event.target.result;
      };
      reader.readAsDataURL(file);
    }

    let croppi;
    $('#imageModalContainer').on('shown.bs.modal', function() {
      let width = document.getElementById('crop-image-container').offsetWidth - 20;
      $('#crop-image-container').height((width - 80) + 'px');
      croppi = new Croppie($('#crop-image-container')[0], {
        viewport: {
          width: width,
          height: width
        },
      });
      $('.modal-body1').height(document.getElementById('crop-image-container').offsetHeight + 50 + 'px');
      croppi.bind({
        url: window.src,
      }).then(function() {
        croppi.setZoom(0);
      });
    });

    $('#imageModalContainer').on('hidden.bs.modal', function() {
      croppi.destroy();
    });

    $(document).on('click', '.save-modal', function(ev) {
      croppi.result({
        type: 'base64',
        format: 'jpeg,jpg,png',
        size: 'original'
      }).then(function(resp) {
        // Update the profile picture with the new image immediately
        document.getElementById('confirm-img').src = resp;

        // Update other image elements with the new image immediately
        let imageElements = document.querySelectorAll('.img-fluid.rounded.mb-3.mt-4#other-image');
        for (let i = 0; i < imageElements.length; i++) {
          imageElements[i].src = resp;
        }

        // Update the image in the specified <img> tag
        $('.w-px-40.h-auto.rounded-circle').attr('src', resp);

        // Send the cropped image data to the server
        $.ajax({
          url: '<?=BASEURL?>user/onclickupdate',
          method: 'POST',
          data: {
            image: resp
          },
          success: function(response) {
            // Handle the server's response
            console.log('Image saved successfully.');
          },
          error: function(error) {
            // Handle any errors that occur during the request
            console.error('Error saving image:', error);
          }
        });
      });

      // Hide the modal dialog
      $('#imageModalContainer').modal('hide');
    });

  </script>
  
 <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>-->

      
      

 <!--   <script>-->
        
 <!--   var telInput = $("#phone"),-->
 <!--     errorMsg = $("#error-msg"),-->
 <!--     validMsg = $("#valid-msg");-->
    
    <!--// initialise plugin-->
 <!--   telInput.intlTelInput({-->
    
 <!--     allowExtensions: true,-->
 <!--     formatOnDisplay: true,-->
 <!--     autoFormat: true,-->
 <!--     autoHideDialCode: true,-->
 <!--     autoPlaceholder: true,-->
 <!--     defaultCountry: "in",-->
 <!--     ipinfoToken: "yolo",-->
    
 <!--     nationalMode: false,-->
 <!--     numberType: "MOBILE",-->
      <!--//onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],-->
 <!--     preferredCountries: ['sa', 'ae', 'qa','om','bh','kw','ma'],-->
 <!--     preventInvalidNumbers: true,-->
 <!--     separateDialCode: true,-->
 <!--     initialCountry: "auto",-->
 <!--     geoIpLookup: function(callback) {-->
 <!--     $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {-->
 <!--       var countryCode = (resp && resp.country) ? resp.country : "";-->
 <!--       callback(countryCode);-->
 <!--     });-->
 <!--   },-->
 <!--      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"-->
 <!--   });-->
    
 <!--   var reset = function() {-->
 <!--     telInput.removeClass("error");-->
 <!--     errorMsg.addClass("hide");-->
 <!--     validMsg.addClass("hide");-->
 <!--   };-->
    
    
 <!--   telInput.on("input", function() {-->
 <!--   reset();-->
 <!--   $("#hphone").val('');-->
 <!--   if ($.trim(telInput.val())) {-->
 <!--     if (telInput.intlTelInput("isValidNumber")) {-->
 <!--       var ttttt = $(".selected-dial-code").text();-->
 <!--       $("#hphone").val(ttttt + telInput.val());-->
 <!--       validMsg.removeClass("hide");-->
 <!--     } else {-->
 <!--       telInput.addClass("error");-->
 <!--       errorMsg.removeClass("hide");-->
 <!--     }-->
 <!--   }-->
 <!-- });-->

  <!--// on input / change flag: reset-->
 <!-- telInput.on("input change", reset);-->
    
    
    
 <!--   </script>-->



