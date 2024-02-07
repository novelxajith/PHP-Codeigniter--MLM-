<!-- Vendors CSS -->
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/node-waves/node-waves.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/typeahead-js/typeahead.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/flatpickr/flatpickr.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/page-profile.css" />


      
       
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/animate-css/animate.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.css" />


<?php include 'header.php';?>
<style>
   .col-sm-12 {
   overflow: auto;
   }
   .tablebutton{
   display:flex;   
   }

  a.nav-link.waves-effect.waves-light {
    font-size: 13px!important;
}
ul.nav.nav-pills.flex-sm-row.mb-4 {
    overflow: auto;
}

</style>
<div class="container-xxl flex-grow-1 container-p-y">
       <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User Profile /</span> Profile</h4>
   <!-- Header --> 
   <?php $userr=$this->db->where('username',$user)->get('user_role')->row_array(); ?>
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="user-profile-header-banner">
               <img src="<?=BASEURL?>assets/img/logo/bliss.svg" alt="Banner image" class="rounded-top">
            </div>
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
               <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                  <img
                     src="<?=BASEURL?>assets/images/<?=$userr['profile_image']?>"
                     alt="user image"
                     class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" />
               </div>
               <div class="flex-grow-1 mt-3 mt-sm-5">
          
                  <div
                     class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                     <div class="user-profile-info">
                        <h4><?=$userr['first_name']?> <?=$userr['last_name']?></h4>
                        <ul
                           class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                           <li class="list-inline-item">
                              <i class="mdi mdi-map-marker-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"><?=$userr['city']?> City</span>
                           </li>
                           <li class="list-inline-item">
                              <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"> Joined <?=(new DateTime($userr['entry_date']))->format('F j, Y h:i A');?></span>
                           </li>
                           <li class="list-inline-item">
                              <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"> Acitivate <?=(new DateTime($userr['activated_date']))->format('F j, Y h:i A');?></span>
                           </li>
                        </ul>
                     </div>
                     <a href="javascript:void(0)" class="btn btn-success">
                     <i class="mdi mdi-account-check-outline me-1"></i><?=$userr['status']?>
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
               <a class="nav-link " href="<?=BASEURL?>admin/userview_page/<?=$user?>"
                  ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/bank/<?=$user?>"
                  ><i class="mdi mdi-bank me-1 mdi-20px"></i>Bank</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/kyc/<?=$user?>"
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
          <!--     <a class="nav-link " href="<?=BASEURL?>admin/right_team/<?=$user?>"-->
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
               <a class="nav-link active" href="<?=BASEURL?>admin/user_activationhistory/<?=$user?>"
                  ><i class="mdi mdi-hand-pointing-up me-1 mdi-20px"></i>Activation History</a
                  >
            </li>
         </ul>
      </div>
   </div>
   <!--/ Navbar pills -->
   <!-- User Profile Content -->
  

      <div class="row mt-3">
                            <div class="col-12">
                                <div class="card">
                                   
                                              <h5 class="card-header">Activation History</h5>
                                             <div class="card-datatable table-responsive pt-0">
                                               
                                             <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                                             <thead>
                                                  <tr>
                                                     <th> S.no </th>
                                                     <th>Activated date</th>
                                                     <th>User ID</th>
                                                     <th>Name</th>
                                                     <th>PIN Type</th>
                                                     <th>PIN</th>
                                                  </tr>
                                               </thead>
                                               <tbody>
                                        <?php $activation_history=$this->db->where('username',$user)->get('pin')->result_array();
                                              $count=1;
                                              foreach($activation_history as $key=>$activation){  ?>
                                                  <tr>
                                                     <td><?=$count++?></td>
                                                     <td><?=$activation['entry_date']?></td>
                                                     <td><?=$activation['username']?></td>
                                                     <td><?=$userr['first_name']?> <?=$userr['last_name']?></td>
                                                     <?php if($activation['type']=='Plus'){ ?>
                                                     <td><span class="badge bg-primary"><?=$activation['type']?></span></td> <?php } ?>
                                                     <?php if($activation['type']=='Prime'){ ?>
                                                     <td><span class="badge bg-Warning"><?=$activation['type']?></span></td> <?php } ?>
                                                     <td><?=$activation['pin']?></td>
                                                  </tr>
                                                 <?php } ?> 
                                               </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
   <!-- end row -->
</div>
<?php include 'footer.php';?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
   $(document).ready(function () {
   $('#example2').DataTable();
   });
</script>



