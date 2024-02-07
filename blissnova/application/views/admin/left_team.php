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
a.nav-link.active.waves-effect.waves-light{
    margin:0px!important;
    padding:10px!important;
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



ul.nav.nav-pills.flex-sm-row.mb-4 {
    overflow: auto;
}
</style>

<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/page-profile.css" />

  <?php 
  $user=$this->session->userdata('ablisusername');
  $wing2=$this->db->select('username')->where('user_type','sub')->where('position','left')->where('ref_id',$this->session->userdata('ablisusername'))->get('user_role')->row()->username;
  $wing3=$this->db->select('username')->where('user_type','sub')->where('position','right')->where('ref_id',$this->session->userdata('ablisusername'))->get('user_role')->row()->username;
  
 ?>

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
                     src="<?=BASEURL?>assets/img/avatars/1.png?>"
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
                                 ><span class="fw-semibold"> Activated on <?=(new DateTime($userr['activated_date']))->format('F j, Y h:i A');?></span>
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
               <a class="nav-link active" href="<?=BASEURL?>admin/left_team/<?=$user?>"
                  ><i class="mdi mdi-account-arrow-left me-1 mdi-20px"></i>Left Team</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/right_team/<?=$user?>"
                  ><i class="mdi mdi-account-arrow-right me-1 mdi-20px"></i>Right Team</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/direct_team/<?=$user?>"
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
                   
                                   
                                              <h5 class="card-header">Left Team</h5>
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
                                                     <th>Sponser ID</th>
                                                     <th>Sponser Name</th>
                                                  </tr>
                                               </thead>
                                               <tbody>
                                                    <?php 
                                                    
                                                    $left_user=$this->db->where('position','left')->where('parent_id',$user)->get('tree')->row_array();
                        					    if(!empty($left_user)){
                        					          $left=$this->db->like('team',$left_user['child_id'])->get('tree')->result_array();
                        					          
                        					           $left_team =$left;
                                                        
                        					    } 
                        					    foreach($left_team as $key=>$team){
                        					        $user_data1=$this->db->where('username',$team['child_id'])->get('user_role')->row_array();
                        					        $sponsor=$this->db->where('username',$user_data1['ref_id'])->get('user_role')->row_array();
                        					        $pack=$this->db->select_max('credit')->where('username',$team['child_id'])->get('pin')->row()->credit; 
                                                if($pack==1100){ $package="Plus"; }elseif($pack==10000){ $package="Plus"; }else{$package="";}
                        					    ?>
                                                  <tr>
                                                     <td><?=$count++?></td>
                                                     <td><?=$user_data1['entry_date']?></td>
                                                     <td><?=$user_data1['activated_date']?></td>
                                                     <td><?=$user_data1['username']?></td>
                                                     <td><?=$user_data1['first_name']?> <?=$user_data1['last_name']?></td>
                                                     <td><?=$package?></td>
                                                     <td><?=$user_data1['ref_id']?></td>
                                                     <td><?=$sponsor['first_name']?> <?=$sponsor['last_name']?></td>
                                                  </tr>
                                                  <?php } ?>
                                               </tbody>
                                        </table>
        
                                    </div>
                                </div>
                        
                      <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                      
                                   
                                              <h5 class="card-header">Left Team</h5>
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
                                                     <th>Sponser ID</th>
                                                     <th>Sponser Name</th>
                                                  </tr>
                                               </thead>
                                               <tbody>
              <?php          
                             $left_user1=$this->db->where('position','left')->where('parent_id',$wing2)->get('tree')->row_array();
                        					    if(!empty($left_user1)){
                        					          $left1=$this->db->like('team',$left_user1['child_id'])->get('tree')->result_array();
                        					          
                        					           $left_team1 = array();
                                                        $left_team1[0] = $left_user1;
                                                        foreach ($left1 as $key1) {
                                                            $left_team1[] = $key1;
                                                        }
                        					    } 
                        					    foreach($left_team1 as $key=>$team1){
                        					        $user_data2=$this->db->where('username',$team1['child_id'])->get('user_role')->row_array();
                        					        $sponsor1=$this->db->where('username',$user_data2['ref_id'])->get('user_role')->row_array();
                        					        $pack1=$this->db->select_max('credit')->where('username',$team1['child_id'])->get('pin')->row()->credit; 
                                                if($pack1==1100){ $package1="Plus"; }elseif($pack1==10000){ $package1="Plus"; }else{$package1="";}
                        					    ?>
                                                  <tr>
                                                    <td><?=$count++?></td>
                                                     <td><?=$user_data2['entry_date']?></td>
                                                     <td><?=$user_data2['activated_date']?></td>
                                                     <td><?=$user_data2['username']?></td>
                                                     <td><?=$user_data2['first_name']?> <?=$user_data2['last_name']?></td>
                                                     <td><?=$package1?></td>
                                                     <td><?=$user_data2['ref_id']?></td>
                                                     <td><?=$sponsor1['first_name']?> <?=$sponsor1['last_name']?></td>
                                                  </tr>
                                                  <?php } ?>
                                               </tbody>
                                        </table>
        
                                    </div>
                                </div>
                   
                      <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                       
                                   
                                              <h5 class="card-header">Left Team</h5>
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
                                                     <th>Sponser ID</th>
                                                     <th>Sponser Name</th>
                                                  </tr>
                                               </thead>
                                               <tbody>
         <?php
                             $left_user2=$this->db->where('position','left')->where('parent_id',$wing3)->get('tree')->row_array();
                        					    if(!empty($left_user2)){
                        					          $left2=$this->db->like('team',$left_user2['child_id'])->get('tree')->result_array();
                        					          
                        					           $left_team2 = array();
                                                        $left_team2[0] = $left_user2;
                                                        foreach ($left2 as $key2) {
                                                            $left_team2[] = $key2;
                                                        }
                                                        
                        					    } 
                        					    foreach($left_team2 as $key=>$team2){
                        					        $user_data3=$this->db->where('username',$team2['child_id'])->get('user_role')->row_array();
                        					        $sponsor2=$this->db->where('username',$user_data3['ref_id'])->get('user_role')->row_array();
                        					        $pack2=$this->db->select_max('credit')->where('username',$team2['child_id'])->get('pin')->row()->credit; 
                                                if($pack2==1100){ $package2="Plus"; }elseif($pack2==10000){ $package2="Plus"; }else{$package2="";}
                        					    ?>
                                                  <tr>
                                                    <td><?=$count++?></td>
                                                     <td><?=$user_data3['entry_date']?></td>
                                                     <td><?=$user_data3['activated_date']?></td>
                                                     <td><?=$user_data3['username']?></td>
                                                     <td><?=$user_data3['first_name']?> <?=$user_data3['last_name']?></td>
                                                     <td><?=$package2?></td>
                                                     <td><?=$user_data3['ref_id']?></td>
                                                     <td><?=$sponsor2['first_name']?> <?=$sponsor2['last_name']?></td>
                                                  </tr>
                                                  <?php } ?>
                                               </tbody>
                                        </table>
        
                                    </div>
                                </div>
                      </div>
                    </div>
                           </div>  
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                       
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
