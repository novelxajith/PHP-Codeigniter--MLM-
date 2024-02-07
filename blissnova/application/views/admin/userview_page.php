<?php include 'header.php';?>
<!-- Page CSS -->
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/page-profile.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/flatpickr/flatpickr.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">

<style>
a.nav-link.active.waves-effect.waves-light{
    margin:0px!important;
    padding:10px!important;
}

  a.nav-link.waves-effect.waves-light {
    font-size: 13px!important;
}
    .col-sm-12 {
    overflow: auto;
}
ul.nav.nav-pills.mb-3 {
    display: flex;
    justify-content: space-evenly;
}
     a.nav-link.waves-effect.waves-light {
    font-size: 13px!important;
}

   ul.nav.nav-pills.mb-3 {
   display: flex;
   justify-content: space-evenly;
   }

ul.nav.nav-pills.flex-sm-row.mb-4 {
    overflow: auto;
}
span.new {
    display: flex;
    align-items: center;
    justify-content: center;
}


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
<div class="container-xxl flex-grow-1 container-p-y">
   <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin Profile </span> </h4>
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
      <img id="confirm-img" src="<?=BASEURL?>assets/images/<?=$user_data['profile_image']?>" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" onclick="document.getElementById('upload').click();">
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
           
                  <div
                     class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                     <div class="user-profile-info">
                        <h4><?=$user_data['first_name']?> <?=$user_data['last_name']?></h4>
                        <ul
                           class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                           <li class="list-inline-item">
                              <i class="mdi mdi-map-marker-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"><?=$user_data['city']?> City</span>
                           </li>
                           <li class="list-inline-item">
                              <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"> Joined <?=(new DateTime($user_data['entry_date']))->format('F j, Y h:i A');?></span>
                           </li>
                           <li class="list-inline-item">
                              <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"> Activated on <?=(new DateTime($user_data['activated_date']))->format('F j, Y h:i A');?></span>
                           </li>
                            
                        </ul>
                     </div>
                     <a href="javascript:void(0)" class="btn btn-success">
                     <i class="mdi mdi-account-check-outline me-1"></i><?=$user_data['status']?>
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
         <ul class="nav nav-pills flex-sm-row mb-4">
            <li class="nav-item">
               <a class="nav-link active" href="<?=BASEURL?>admin/userview_page/<?=$user_data['username']?>"
                  ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/bank/<?=$user_data['username']?>"
                  ><i class="mdi mdi-bank me-1 mdi-20px"></i>Bank</a
                  >
            </li>
           
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/kyc/<?=$user_data['username']?>"
                  ><i class="mdi mdi-account-details me-1 mdi-20px"></i>KYC</a
                  >
            </li>
              <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/myearning_points/<?=$user?>"
                  ><i class="mdi mdi mdi-star-plus me-1 mdi-20px"></i>Point Statement</a
                  >
            </li>
          <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/withdrawal_statement/<?=$user?>"
                  ><i class="mdi mdi-cash me-1 mdi-20px"></i>Withdrawal Statement</a
                  >
            </li>
          <!--<li class="nav-item">-->
          <!--     <a class="nav-link" href="<?=BASEURL?>admin/left_team/<?=$user?>"-->
          <!--        ><i class="mdi mdi-account-arrow-left me-1 mdi-20px"></i>Left Team</a-->
          <!--        >-->
          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--     <a class="nav-link" href="<?=BASEURL?>admin/right_team"-->
          <!--        ><i class="mdi mdi-account-arrow-right me-1 mdi-20px"></i>Right Team</a-->
          <!--        >-->
          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--     <a class="nav-link" href="<?=BASEURL?>admin/direct_team/<?=$user?>"-->
          <!--        ><i class="mdi mdi-account-switch-outline me-1 mdi-20px"></i>Direct Team</a-->
          <!--        >-->
          <!--  </li>-->
             <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/user_pinrequesthistory/<?=$user?>"
                  ><i class="mdi mdi-pin me-1 mdi-20px"></i>Pin Request</a
                  >
            </li>
             <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/user_withdrawalhistory/<?=$user?>"
                  ><i class="mdi mdi-cash-check me-1 mdi-20px"></i>Withdrawal History</a
                  >
            </li>
             <li class="nav-item">
               <a class="nav-link " href="<?=BASEURL?>admin/user_activationhistory/<?=$user?>"
                  ><i class="mdi mdi-hand-pointing-up me-1 mdi-20px"></i>Activation History</a
                  >
            </li>
  
         </ul>
      </div>
   </div>
   <!--/ Navbar pills -->
   <!-- User Profile Content -->
   <div class="row">
      <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
         <!-- User Card -->
         <div class="card mb-4">
            <div class="card-body">
               <div class="user-avatar-section">
                  <div class="d-flex align-items-center flex-column">
                     <img class="img-fluid rounded mb-3 mt-4" src="../../assets/img/avatars/10.png" height="120" width="120" alt="User avatar">
                     <div class="user-info text-center">
                        <h4><?=$user_data['first_name']?> <?=$user_data['last_name']?></h4>
                     </div>
                  </div>
               </div>
              
             

               <h5 class="pb-3 border-bottom mb-3">Details</h5>
         
               <div class="info-container">
                  <ul class="list-unstyled mb-4">
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Name:</span>
                        <span><?=$user_data['first_name']?> <?=$user_data['last_name']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Mobile No:</span>
                        <span><?=$user_data['mobile']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Email:</span>
                        <span><?=$user_data['email']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Gender:</span>
                        <span><?=$user_data['gender']?></span>
                     </li>
                     <!--<li class="mb-3">-->
                     <!--   <span class="fw-semibold text-heading me-2">Nominee Name:</span>-->
                     <!--   <span><?=$user_data['nominee_name']?></span>-->
                     <!--</li>-->
                     <!--<li class="mb-3">-->
                     <!--   <span class="fw-semibold text-heading me-2">Nominee relation:</span>-->
                     <!--   <span><?=$user_data['nominee_relation']?></span>-->
                     <!--</li>-->
                     <!--<li class="mb-3">-->
                     <!--   <span class="fw-semibold text-heading me-2">Status:</span>-->
                     <!--   <span class="badge bg-label-success"><?=$user_data['status']?></span>-->
                     <!--</li>-->
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Address:</span>
                        <span><?=$user_data['address1']?> <?=$user_data['address2']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">City:</span>
                        <span><?=$user_data['city']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">District:</span>
                        <span><?=$user_data['district']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">State:</span>
                        <span><?=$user_data['state']?></span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Pincode:</span>
                        <span><?=$user_data['pincode']?></span>
                     </li>
                     <!--<li class="mb-3">-->
                     <!--   <span class="fw-semibold text-heading me-2">Referral ID:</span>-->
                     <!--   <span><?=$user_data['ref_id']?></span>-->
                     <!--</li>-->
                     <!--<li class="mb-3">-->
                     <!--   <span class="fw-semibold text-heading me-2">Referral Name:</span>-->
                     <!--   <span><?=$ref['first_name']?> <?=$ref['last_name']?></span>-->
                     <!--</li>-->
                  </ul>
                  <div class="d-flex justify-content-center">
                     <a href="javascript:;" class="btn btn-primary me-3 waves-effect waves-light" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
                     <!--<a href="javascript:;" class="btn btn-danger waves-effect">Block</a>-->
                  </div>
               </div>
            </div>
         </div>
         <!-- /User Card -->
      </div>
      <div class="col-xl-8 col-lg-7 col-md-7">
         <!-- Activity Timeline -->
         <div class="col-12 col-xl-6 col-md-12">
                <div class="card" style="width:800px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1">Activity Timeline</h5>
                        </div>
                    </div>
                    <?php $log_date=$this->db->select('log_date')->where('username',$user_data['username'])->get('user_role')->row()->log_date ;
                    $logout_date=$this->db->select('logout_date')->where('username',$user_data['username'])->get('user_role')->row()->logout_date ; 
                    
                    $log_date_last=$this->db->select('login_date_last')->where('username',$user_data['username'])->get('user_role')->row()->login_date_last ;
                    $logout_date_last=$this->db->select('logout_date_last')->where('username',$user_data['username'])->get('user_role')->row()->logout_date_last ; 
                    ?>
                    <div class="card-body pt-4 pb-1">
                        <ul class="timeline card-timeline mb-0">
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-info"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-2 fw-semibold">Login on 😍</h6>
                                        <small class="text-muted"><?= date('d F Y', strtotime($log_date_last)) ?></small>
                                    </div>
                                    <p class="text-muted mb-2"><?= date('h:i A', strtotime($log_date_last)) ?></p>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent border-0">
                                <span class="timeline-point timeline-point-warning"></span>
                                <div class="timeline-event pb-1">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-2 fw-semibold">Logout On</h6>
                                        <small class="text-muted"><?= date('d F Y', strtotime($logout_date_last)) ?></small>
                                    </div>
                                    <p class="text-muted mb-2"><?= date('h:i A', strtotime($logout_date_last)) ?></p>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-info"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-2 fw-semibold">Login on 😍</h6>
                                        <small class="text-muted"><?= date('d F Y', strtotime($log_date)) ?></small>
                                    </div>
                                    <p class="text-muted mb-2"><?= date('h:i A', strtotime($log_date)) ?></p>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent border-0">
                                <span class="timeline-point timeline-point-warning"></span>
                                <div class="timeline-event pb-1">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-2 fw-semibold">Logout On</h6>
                                        <small class="text-muted"><?= date('d F Y', strtotime($logout_date)) ?></small>
                                    </div>
                                    <p class="text-muted mb-2"><?= date('h:i A', strtotime($logout_date)) ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
         <!--/ Activity Timeline -->
         <div class="row">
          
            <!-- Teams -->
            <!--<div class="col-lg-12 col-xl-12">-->
            <!--   <div class="card card-action mb-4">-->
            <!--      <div class="card-header align-items-center">-->
            <!--         <h5 class="card-action-title mb-0">Teams</h5>-->
            <!--         <div class="card-action-element">-->
            <!--            <div class="dropdown">-->
            <!--               <button-->
            <!--                  type="button"-->
            <!--                  class="btn dropdown-toggle hide-arrow p-0"-->
            <!--                  data-bs-toggle="dropdown"-->
            <!--                  aria-expanded="false">-->
            <!--               <i class="mdi mdi-dots-vertical mdi-24px text-muted"></i>-->
            <!--               </button>-->
            <!--               <ul class="dropdown-menu dropdown-menu-end">-->
            <!--                  <li><a class="dropdown-item" href="javascript:void(0);">Share teams</a></li>-->
            <!--                  <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>-->
            <!--                  <li>-->
            <!--                     <hr class="dropdown-divider" />-->
            <!--                  </li>-->
            <!--                  <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>-->
            <!--               </ul>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--      <div class="card-body">-->
            <!--         <ul class="list-unstyled mb-0">-->
            <!--            <li class="mb-3">-->
            <!--               <div class="d-flex align-items-center">-->
            <!--                  <div class="d-flex align-items-start">-->
            <!--                     <div class="avatar me-3">-->
            <!--                        <img-->
            <!--                           src="<?=BASEURL?>assets/img/icons/brands/react-label.png"-->
            <!--                           alt="Avatar"-->
            <!--                           class="rounded-circle" />-->
            <!--                     </div>-->
            <!--                     <div class="me-2">-->
            <!--                        <h6 class="mb-0">React Developers</h6>-->
            <!--                        <small class="text-muted">72 Members</small>-->
            <!--                     </div>-->
            <!--                  </div>-->
            <!--                  <div class="ms-auto">-->
            <!--                     <a href="javascript:;"-->
            <!--                        ><span class="badge bg-label-danger rounded-pill">Developer</span></a-->
            <!--                        >-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--            </li>-->
            <!--            <li class="mb-3">-->
            <!--               <div class="d-flex align-items-center">-->
            <!--                  <div class="d-flex align-items-start">-->
            <!--                     <div class="avatar me-3">-->
            <!--                        <img-->
            <!--                           src="<?=BASEURL?>assets/img/icons/brands/support-label.png"-->
            <!--                           alt="Avatar"-->
            <!--                           class="rounded-circle" />-->
            <!--                     </div>-->
            <!--                     <div class="me-2">-->
            <!--                        <h6 class="mb-0">Support Team</h6>-->
            <!--                        <small class="text-muted">122 Members</small>-->
            <!--                     </div>-->
            <!--                  </div>-->
            <!--                  <div class="ms-auto">-->
            <!--                     <a href="javascript:;"-->
            <!--                        ><span class="badge bg-label-primary rounded-pill">Support</span></a-->
            <!--                        >-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--            </li>-->
            <!--            <li class="mb-3">-->
            <!--               <div class="d-flex align-items-center">-->
            <!--                  <div class="d-flex align-items-start">-->
            <!--                     <div class="avatar me-3">-->
            <!--                        <img-->
            <!--                           src="<?=BASEURL?>assets/img/icons/brands/figma-label.png"-->
            <!--                           alt="Avatar"-->
            <!--                           class="rounded-circle" />-->
            <!--                     </div>-->
            <!--                     <div class="me-2">-->
            <!--                        <h6 class="mb-0">UI Designers</h6>-->
            <!--                        <small class="text-muted">7 Members</small>-->
            <!--                     </div>-->
            <!--                  </div>-->
            <!--                  <div class="ms-auto">-->
            <!--                     <a href="javascript:;"-->
            <!--                        ><span class="badge bg-label-info rounded-pill">Designer</span></a-->
            <!--                        >-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--            </li>-->
            <!--            <li class="mb-3">-->
            <!--               <div class="d-flex align-items-center">-->
            <!--                  <div class="d-flex align-items-start">-->
            <!--                     <div class="avatar me-3">-->
            <!--                        <img-->
            <!--                           src="<?=BASEURL?>assets/img/icons/brands/vue-label.png"-->
            <!--                           alt="Avatar"-->
            <!--                           class="rounded-circle" />-->
            <!--                     </div>-->
            <!--                     <div class="me-2">-->
            <!--                        <h6 class="mb-0">Vue.js Developers</h6>-->
            <!--                        <small class="text-muted">289 Members</small>-->
            <!--                     </div>-->
            <!--                  </div>-->
            <!--                  <div class="ms-auto">-->
            <!--                     <a href="javascript:;"-->
            <!--                        ><span class="badge bg-label-danger rounded-pill">Developer</span></a-->
            <!--                        >-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--            </li>-->
            <!--            <li class="mb-3">-->
            <!--               <div class="d-flex align-items-center">-->
            <!--                  <div class="d-flex align-items-start">-->
            <!--                     <div class="avatar me-3">-->
            <!--                        <img-->
            <!--                           src="<?=BASEURL?>assets/img/icons/brands/twitter-label.png"-->
            <!--                           alt="Avatar"-->
            <!--                           class="rounded-circle" />-->
            <!--                     </div>-->
            <!--                     <div class="me-w">-->
            <!--                        <h6 class="mb-0">Digital Marketing</h6>-->
            <!--                        <small class="text-muted">24 Members</small>-->
            <!--                     </div>-->
            <!--                  </div>-->
            <!--                  <div class="ms-auto">-->
            <!--                     <a href="javascript:;"-->
            <!--                        ><span class="badge bg-label-secondary rounded-pill">Marketing</span></a-->
            <!--                        >-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--            </li>-->
            <!--            <li class="text-center">-->
            <!--               <a href="javascript:;">View all teams</a>-->
            <!--            </li>-->
            <!--         </ul>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--</div>-->
            <!--/ Teams -->
         </div>
         <!-- Projects table -->
         <!--<div class="card mb-4">-->
         <!--   <div class="card-datatable table-responsive">-->
         <!--      <table class="datatables-projects table">-->
         <!--         <thead>-->
         <!--            <tr>-->
         <!--               <th></th>-->
         <!--               <th></th>-->
         <!--               <th>Name</th>-->
         <!--               <th>Leader</th>-->
         <!--               <th>Team</th>-->
         <!--               <th class="w-px-200">Status</th>-->
         <!--               <th>Action</th>-->
         <!--            </tr>-->
         <!--         </thead>-->
         <!--      </table>-->
         <!--   </div>-->
         <!--</div>-->
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
            <form id="editUserForm" class="row g-4" action="<?=BASEURL?>admin/user_profile_edit" method="post">
               <div class="row g-4">
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline">
                         <input type="hidden" id="first-name" class="form-control" name="username" value="<?=$user_data['username']?>"  >
                        <input type="text" id="first-name" class="form-control" name="first_name" value="<?=$user_data['first_name']?>" placeholder="John"  oninput="this.value = this.value.toUpperCase()">
                        <label for="first-name">First Name</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline">
                        <input type="text" id="last-name" class="form-control" value="<?=$user_data['last_name']?>" name="last_name" placeholder="Doe" oninput="this.value = this.value.toUpperCase()">
                        <label for="last-name">Last Name</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="phone number" name="mobile" value="<?=$user_data['mobile']?>" placeholder="Enter your phone number" autofocus="" />
                        <label for="Mobile No">Mobile No</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="Email" class="form-control" id="Email" name="email" value="<?=$user_data['email']?>" placeholder="Enter your Email" autofocus="" />
                        <label for="Email">Email</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Address1" name="address1" value="<?=$user_data['address1']?>" placeholder="Enter your Address1" autofocus="">
                        <?php echo form_error('address1'); ?>
                      
                        <label for="Address1">Address1</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Address2" name="address2" value="<?=$user_data['address2']?>" placeholder="Enter your Address2" autofocus="">
                        <?php echo form_error('address2'); ?>
                        <label for="Address2">Address2</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="City" name="city" placeholder="Enter your City" value="<?=$user_data['city']?>" autofocus="">
                        <?php echo form_error('city'); ?>
                        <label for="City">City</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="District" name="district" value="<?=$user_data['district']?>" placeholder="Enter your District" autofocus="">
                        <?php echo form_error('district'); ?>
                        <label for="District">District</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="State" name="state" value="<?=$user_data['state']?>" placeholder="Enter your State" autofocus="">
                        <?php echo form_error('state'); ?>
                        <label for="State">State</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Pincode" name="pincode" value="<?=$user_data['pincode']?>" placeholder="Enter your Pincode" autofocus="">
                        <?php echo form_error('pincode'); ?>
                        <label for="Pincode">Pincode</label>
                     </div>
                  </div>
                  <!--<div class="col-sm-6">-->
                  <!--   <div class="form-floating form-floating-outline mb-3">-->
                  <!--      <input type="text" class="form-control" id="Nomineerelation" name="nominee_relation" value="<?=$user_data['nominee_relation']?>" placeholder="Enter your Nominee relation " autofocus="">-->
                  <!--      <?php echo form_error('nominee_relation'); ?>-->
                  <!--      <label for="Nominee relation ">Nominee relation </label>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <!--<div class="col-sm-6">-->
                  <!--   <div class="form-floating form-floating-outline mb-3">-->
                  <!--      <input type="text" class="form-control" id="Nominee Name " name="nominee_name" value="<?=$user_data['nominee_name']?>" placeholder="Enter your Nominee Name " autofocus="">-->
                  <!--      <?php echo form_error('nominee_name'); ?>-->
                  <!--      <label for="Nominee Name ">Nominee Name </label>-->
                  <!--   </div>-->
                  <!--</div>-->
       <div class="col-sm-6">
           <div class="row">
              <label class="col-sm-3 col-form-label text-sm-end">Gender</label>
              <div class="col-sm-9">
                 <div class="form-check mb-2">
            <input name="gender" class="form-check-input" type="radio" value="male" id="collapsible-genderType-male" <?php if($user_data['gender']=='male')echo ('checked') ?  : ''; ?>>
                    <label class="form-check-label" for="collapsible-genderType-male">Male</label>
                 </div>
                 <div class="form-check">
                    <input name="gender" class="form-check-input" type="radio" value="female" id="collapsible-genderType-female"<?php if($user_data['gender']=='female')echo ('checked') ?  : ''; ?>>
                    <label class="form-check-label" for="collapsible-genderType-female">Female</label>
                 </div>
              </div>
           </div>
        </div>


                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-4">
                        <input class="form-control" type="date" id="html5-date-input" name="dob" value="<?=date("Y-m-d",strtotime($user_data['dob']))?>">
                        <?php echo form_error('dob'); ?>
                        <label for="html5-date-input">DOB</label>
                     </div>
                  </div>
                  <!--<div class="col-sm-6">-->
                  <!--   <div class="form-floating form-floating-outline mb-4">-->
                  <!--      <input class="form-control" type="date" id="html5-date-input" value="<?=date("Y-m-d",strtotime($user_data['entry_date']))?>" />-->
                  <!--      <label for="html5-date-input">DOJ</label>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <!--<div class="col-sm-6">-->
                  <!--   <div class="form-floating form-floating-outline mb-3">-->
                  <!--      <input type="text" class="form-control" id="Referral ID " value="<?=$user_data['ref_id']?>" placeholder="Enter your Referral ID " autofocus="" />-->
                  <!--      <label for="Referral ID ">Referral ID </label>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <!--<div class="col-sm-6">-->
                  <!--   <div class="form-floating form-floating-outline mb-3">-->
                  <!--      <input type="text" class="form-control"  id="Referral Name" name="Referral Name" value="<?=$ref['first_name']?> <?=$ref['last_name']?>" placeholder="Enter your Referral Name " autofocus="" />-->
                  <!--      <label for="Referral Name ">Referral Name</label>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <div class="col-12 text-center">
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
<?php include 'footer.php';?>

<!--/ Edit User Modal -->
<script src="<?=BASEURL?>assets/vendor/libs/flatpickr/flatpickr.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

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
          url: '<?=BASEURL?>admin/onclickupdate',
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


