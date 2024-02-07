<!-- Vendors CSS -->
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/node-waves/node-waves.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/typeahead-js/typeahead.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/flatpickr/flatpickr.css" />
<?php include 'header.php';?>
<style>
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
ul.nav.nav-pills.flex-sm-row.mb-4 {
    overflow: auto;
}
a.nav-link.active.waves-effect.waves-light{
    margin:0px!important;
    padding:10px!important;
}
</style>
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/page-profile.css" />
<div class="container-xxl flex-grow-1 container-p-y">
   <!-- Header -->
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="user-profile-header-banner">
                <img src="<?=BASEURL?>assets/img/logo/bliss.svg" alt="Banner image" class="rounded-top">
            </div>
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
               <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                  <img
                     src="<?=BASEURL?>assets/img/avatars/1.png"
                     alt="user image"
                     class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" />
               </div>
               <div class="flex-grow-1 mt-3 mt-sm-5">
                   
                  
            <?php $userr=$this->db->where('username',$user)->get('user_role')->row_array(); ?>
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
               <a class="nav-link " href="<?=BASEURL?>admin/user_profile/<?=$user?>"
                  ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a
                  >
            </li>
          <!--  <li class="nav-item">-->
          <!--     <a class="nav-link" href="<?=BASEURL?>admin/bank/<?=$user?>"-->
          <!--        ><i class="mdi mdi-bank me-1 mdi-20px"></i>Bank</a-->
          <!--        >-->
          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--     <a class="nav-link" href="<?=BASEURL?>admin/kyc/<?=$user?>"-->
          <!--        ><i class="mdi mdi-account-details me-1 mdi-20px"></i>KYC</a-->
          <!--        >-->
          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--     <a class="nav-link" href="<?=BASEURL?>admin/myearning_points/<?=$user?>"-->
          <!--        ><i class="mdi mdi mdi-star-plus me-1 mdi-20px"></i>Point Statement</a-->
          <!--        >-->
          <!--  </li>-->
          <!--<li class="nav-item">-->
          <!--     <a class="nav-link" href="<?=BASEURL?>admin/withdrawal_statement/<?=$user?>"-->
          <!--        ><i class="mdi mdi-cash me-1 mdi-20px"></i>Withdrawal Statement</a-->
          <!--        >-->
          <!--  </li>-->
          <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/left_team/<?=$user?>"
                  ><i class="mdi mdi-account-arrow-left me-1 mdi-20px"></i>Left Team</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/right_team/<?=$user?>"
                  ><i class="mdi mdi-account-arrow-right me-1 mdi-20px"></i>Right Team</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link active" href="<?=BASEURL?>admin/direct_team/<?=$user?>"
                  ><i class="mdi mdi-account-switch-outline me-1 mdi-20px"></i>Direct Team</a
                  >
            </li>
            <!-- <li class="nav-item">-->
            <!--   <a class="nav-link" href="<?=BASEURL?>admin/user_pinrequesthistory/<?=$user?>"-->
            <!--      ><i class="mdi mdi-pin me-1 mdi-20px"></i>Pin Request</a-->
            <!--      >-->
            <!--</li>-->
            <!-- <li class="nav-item">-->
            <!--   <a class="nav-link" href="<?=BASEURL?>admin/user_withdrawalhistory/<?=$user?>"-->
            <!--      ><i class="mdi mdi-cash-check me-1 mdi-20px"></i>Withdrawal History</a-->
            <!--      >-->
            <!--</li>-->
            <!-- <li class="nav-item">-->
            <!--   <a class="nav-link " href="<?=BASEURL?>admin/user_activationhistory/<?=$user?>"-->
            <!--      ><i class="mdi mdi-hand-pointing-up me-1 mdi-20px"></i>Activation History</a-->
            <!--      >-->
            <!--</li>-->
         </ul>
      </div>
   </div>
   <!--/ Navbar pills -->  
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="nav-align-top mb-4 mt-3 ">
               <ul class="nav nav-pills  mb-3" role="tablist">
                  <li class="nav-item" role="presentation">
                     <button type="button" class="nav-link waves-effect waves-light active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">
                     Wing 1
                     </button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button type="button" class="nav-link waves-effect waves-light" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false" tabindex="-1">
                     Wing 2
                     </button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button type="button" class="nav-link waves-effect waves-light" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages" aria-selected="false" tabindex="-1">
                     Wing 3
                     </button>
                  </li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane fade active show" id="navs-pills-top-home" role="tabpanel">
                     <h5 class="card-header">Direct Team</h5>
                     <div class="card-datatable table-responsive pt-0">
                        <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Joining Date</th>
                                 <th>Active Date</th>
                                 <th>User ID</th>
                                 <th>User Name</th>
                                 <th>Plan</th>
                                 <th>Phone Number</th>
                                 <th>POsition</th>
                              </tr>
                           </thead>
                           <tbody>
                    <?php $direct_team=$this->db->where('ref_id',$user)->get('user_role')->result_array();
                          $count=1;
                          foreach($direct_team as $key=>$direct){ 
                          $pack=$this->db->select_max('credit')->where('username',$direct['username'])->get('pin')->row()->credit; 
                           if($pack==1100){ $package="Plus"; }elseif($pack==10000){ $package="Plus"; }else{$package="";} ?>
                              <tr>
                                 <td><?=$count++?></td>
                                 <td><?=$direct['entry_date']?></td>
                                 <td><?=$direct['activated_date']?></td>
                                 <td><?=$direct['username']?></td>
                                 <td><?=$direct['first_name']?> <?=$direct['last_name']?></td>
                                 <td><?=$package?></td>
                                 <td><?=$direct['mobile']?></td>
                                 <td><?=$direct['position']?></td>
                              </tr>
                            <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                     <h5 class="card-header">Direct Team</h5>
                     <div class="card-datatable table-responsive pt-0">
                        <table id="example2" class="datatables-basic table table-bordered" style="width:100%">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Joining Date</th>
                                 <th>Active Date</th>
                                 <th>User ID</th>
                                 <th>User Name</th>
                                 <th>Plan</th>
                                 <th>Phone Number</th>
                                 <th>POsition</th>
                              </tr>
                           </thead>
                           <tbody>
                         <?php $direct_team_left=$this->db->select('username')->where('ref_id',$user)->where('user_type','sub')->where('position','left')->get('user_role')->row()->username;
                               $left_team=$this->db->where('ref_id',$direct_team_left)->get('user_role')->result_array();
                                $count1=1;
                               foreach($left_team as $key=>$left){ 
                               $pack1=$this->db->select_max('credit')->where('username',$left['username'])->get('pin')->row()->credit; 
                               if($pack1==1100){ $package1="Plus"; }elseif($pack1==10000){ $package1="Plus"; }else{$package1="";} ?>
                              <tr>
                                 <td><?=$count1++?></td>
                                 <td><?=$left['entry_date']?></td>
                                 <td><?=$left['activated_date']?></td>
                                 <td><?=$left['username']?></td>
                                 <td><?=$left['first_name']?> <?=$left['last_name']?></td>
                                 <td><?=$package1?></td>
                                 <td><?=$left['mobile']?></td>
                                 <td><?=$left['position']?></td>
                              </tr>
                            <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                     <h5 class="card-header">Direct Team</h5>
                     <div class="card-datatable table-responsive pt-0">
                        <table id="example3" class="datatables-basic table table-bordered" style="width:100%">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Joining Date</th>
                                 <th>Active Date</th>
                                 <th>User ID</th>
                                 <th>User Name</th>
                                 <th>Plan</th>
                                 <th>Phone Number</th>
                                 <th>POsition</th>
                              </tr>
                           </thead>
                           <tbody>
                                <?php $direct_team_right=$this->db->select('username')->where('ref_id',$user)->where('user_type','sub')->where('position','right')->get('user_role')->row()->username;
                               $right_team=$this->db->where('ref_id',$direct_team_right)->get('user_role')->result_array();
                                $count2=1;
                               foreach($right_team as $key=>$right){ 
                               $pack2=$this->db->select_max('credit')->where('username',$right['username'])->get('pin')->row()->credit; 
                               if($pack2==1100){ $package2="Plus"; }elseif($pack2==10000){ $package2="Plus"; }else{$package2="";} ?>
                              <tr>
                                 <td><?=$count2++?></td>
                                 <td><?=$right['entry_date']?></td>
                                 <td><?=$right['activated_date']?></td>
                                 <td><?=$right['username']?></td>
                                 <td><?=$right['first_name']?> <?=$right['last_name']?></td>
                                 <td><?=$package2?></td>
                                 <td><?=$right['mobile']?></td>
                                 <td><?=$right['position']?></td>
                              </tr>
                             <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end col -->
   </div>
   <!-- end row -->
</div>
<?php include 'footer.php';?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
   $(document).ready(function () {
   $('#example').DataTable();
   });
</script>
<script>
   $(document).ready(function () {
   $('#example2').DataTable();
   });
</script>
<script>
   $(document).ready(function () {
   $('#example3').DataTable();
   });
</script>