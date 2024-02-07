<?php include 'header.php';?>
<!-- Page CSS -->
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/page-profile.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/flatpickr/flatpickr.css">

<style>

  a.nav-link.waves-effect.waves-light {
    font-size: 13px!important;
}
</style>
<div class="container-xxl flex-grow-1 container-p-y">
   <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User Profile /</span> Profile</h4>
   <!-- Header -->
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="user-profile-header-banner">
               <img src="<?=BASEURL?>assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top" />
            </div>
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
               <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                  <img
                     src="<?=BASEURL?>assets/img/avatars/1.png"
                     alt="user image"
                     class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" />
               </div>
               <div class="flex-grow-1 mt-3 mt-sm-5">
                  <div
                     class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                     <div class="user-profile-info">
                        <h4>John Doe</h4>
                        <ul
                           class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                           <li class="list-inline-item">
                              <i class="mdi mdi-map-marker-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold">Vatican City</span>
                           </li>
                           <li class="list-inline-item">
                              <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"> Joined 13 April 2021</span>
                           </li>
                           <li class="list-inline-item">
                              <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"> Acitivate 16 April 2021</span>
                           </li>
                        </ul>
                     </div>
                     <a href="javascript:void(0)" class="btn btn-success">
                     <i class="mdi mdi-account-check-outline me-1"></i>Activated
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
               <a class="nav-link active" href="<?=BASEURL?>admin/user_profile"
                  ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/bank"
                  ><i class="mdi mdi-account-multiple-outline me-1 mdi-20px"></i>Bank</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/kyc"
                  ><i class="mdi mdi-view-grid-outline me-1 mdi-20px"></i>KYC</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/myearning_points"
                  ><i class="mdi mdi-view-grid-outline me-1 mdi-20px"></i>Point Statement</a
                  >
            </li>
          <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/withdrawal_statement"
                  ><i class="mdi mdi-view-grid-outline me-1 mdi-20px"></i>Withdrawal Statement</a
                  >
            </li>
          <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/left_team"
                  ><i class="mdi mdi-view-grid-outline me-1 mdi-20px"></i>Left Team</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/right_team"
                  ><i class="mdi mdi-view-grid-outline me-1 mdi-20px"></i>Right Team</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/direct_team"
                  ><i class="mdi mdi-view-grid-outline me-1 mdi-20px"></i>Direct Team</a
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
                        <h4>Violet Mendoza</h4>
                     </div>
                  </div>
               </div>
               <div class="d-flex justify-content-between flex-wrap my-2 py-3">
                  <div class="d-flex align-items-center me-4 mt-3 gap-3">
                     <div class="avatar">
                        <div class="avatar-initial bg-white rounded">
                           <!--<i class="mdi mdi-check mdi-24px"></i>-->
                           <img src="https://demo-web-site.com/blissnova/newdes/assets/images/badges/primebadge.png" alt="" class="img-thumbnail rounded-circle">
                        </div>
                     </div>
                     <div>
                        <h5 class="mb-0 fw-normal">Prime User</h5>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mt-3 gap-3">
                     <div class="avatar">
                        <div class="avatar-initial bg-white rounded">
                           <!--<i class="mdi mdi-star-outline mdi-24px"></i>-->
                           <img src="https://demo-web-site.com/blissnova/newdes/assets/img/illustrations/trophy.png" class="img-thumbnail" alt="view sales">
                        </div>
                     </div>
                     <div>
                        <h5 class="mb-0 fw-normal">Rank</h5>
                     </div>
                  </div>
               </div>
               <h5 class="pb-3 border-bottom mb-3">Details</h5>
               <div class="info-container">
                  <ul class="list-unstyled mb-4">
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Name:</span>
                        <span>violet</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Mobile No:</span>
                        <span>95445547141</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Email:</span>
                        <span>vafgot@vultukir.org</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Gender:</span>
                        <span>Male</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Nominee Name:</span>
                        <span>ggyagyyg</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Nominee relation:</span>
                        <span>ggyagyyg</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Status:</span>
                        <span class="badge bg-label-success">Active</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Address:</span>
                        <span>Author</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">City:</span>
                        <span>Malapuram</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">District:</span>
                        <span>Malapuram</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">State:</span>
                        <span>Kerela</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Pincode:</span>
                        <span>125551</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Referral ID:</span>
                        <span>GD54654</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-semibold text-heading me-2">Referral Name:</span>
                        <span>degfgya</span>
                     </li>
                  </ul>
                  <div class="d-flex justify-content-center">
                     <a href="javascript:;" class="btn btn-primary me-3 waves-effect waves-light" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
                     <a href="javascript:;" class="btn btn-danger waves-effect">Block</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- /User Card -->
      </div>
      <div class="col-xl-8 col-lg-7 col-md-7">
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
                              <img src="<?=BASEURL?>assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
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
                              src="<?=BASEURL?>assets/img/avatars/4.png"
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
            <form id="editUserForm" class="row g-4" onsubmit="return false">
               <div class="row g-4">
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline">
                        <input type="text" id="first-name" class="form-control" placeholder="John">
                        <label for="first-name">First Name</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline">
                        <input type="text" id="last-name" class="form-control" placeholder="Doe">
                        <label for="last-name">Last Name</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="phone number" name="phone number" placeholder="Enter your phone number" autofocus="">
                        <label for="Mobile No">Mobile No</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Email" name="Email" placeholder="Enter your Email" autofocus="">
                        <label for="Email">Email</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Address1" name="Address1" placeholder="Enter your Address1" autofocus="">
                        <label for="Address1">Address1</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Address2" name="Address2" placeholder="Enter your Address2" autofocus="">
                        <label for="Address2">Address2</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="City" name="City" placeholder="Enter your City" autofocus="">
                        <label for="City">City</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="District" name="District" placeholder="Enter your District" autofocus="">
                        <label for="District">District</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="State" name="State" placeholder="Enter your State" autofocus="">
                        <label for="State">State</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Pincode" name="Pincode" placeholder="Enter your Pincode" autofocus="">
                        <label for="Pincode">Pincode</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Nomineerelation " name="Nominee relation " placeholder="Enter your Nominee relation " autofocus="">
                        <label for="Nominee relation ">Nominee relation </label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Nominee Name " name="Nominee Name " placeholder="Enter your Nominee Name " autofocus="">
                        <label for="Nominee Name ">Nominee Name </label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="row">
                        <label class="col-sm-3 col-form-label text-sm-end">Gender</label>
                        <div class="col-sm-9">
                           <div class="form-check mb-2">
                              <input name="collapsible-genderType" class="form-check-input" type="radio" value="" id="collapsible-genderType-male" checked="">
                              <label class="form-check-label" for="collapsible-genderType-male">
                              Male
                              </label>
                           </div>
                           <div class="form-check">
                              <input name="collapsible-genderType" class="form-check-input" type="radio" value="" id="collapsible-genderType-female">
                              <label class="form-check-label" for="collapsible-genderType-female">
                              Female
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-4">
                        <input class="form-control" type="date" id="html5-date-input">
                        <label for="html5-date-input">DOB</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-4">
                        <input class="form-control" type="date" id="html5-date-input">
                        <label for="html5-date-input">DOJ</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Referral ID " name="Referral ID " placeholder="Enter your Referral ID " autofocus="">
                        <label for="Referral ID ">Referral ID </label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control" id="Referral Name" name="Referral Name" placeholder="Enter your Referral Name " autofocus="">
                        <label for="Referral Name ">Referral Name  </label>
                     </div>
                  </div>
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
<!--/ Edit User Modal -->
<script src="<?=BASEURL?>assets/vendor/libs/flatpickr/flatpickr.js"></script>
<?php include 'footer.php';?>