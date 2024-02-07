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
</style>
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="nav-align-top mb-4 mt-3 ">
               <?php
                  if($wing=="") { $one="active"; $two=""; $three="";} 
                  if($wing=="wing1") { $one="active"; $two=""; $three="";} 
                  if($wing=="wing2") { $two="active"; $one=""; $three="";} 
                  if($wing=="wing3") { $three="active"; $one=""; $two="";} 
                  ?>
               <ul class="nav nav-pills  mb-3" >
                  <li class="nav-item" role="presentation">
                     <a href="<?=BASEURL?>user/right_team/<?=$this->session->userdata('ublisusername')?>/wing1" class="nav-link waves-effect waves-light <?=$one?>" >
                     Wing 1
                     </a>
                  </li>
                  <?php $left=$this->db->where('user_type','sub') ->where('ref_id',$this->session->userdata('ublisusername'))->where('position','left')->get('user_role')->row_array(); 
                     $right=$this->db->where('user_type','sub') ->where('ref_id',$this->session->userdata('ublisusername'))->where('position','right')->get('user_role')->row_array();
                     ?>         
                  <li class="nav-item">
                     <a href="<?=BASEURL?>user/right_team/<?=$left['username']?>/wing2" class="nav-link waves-effect waves-light <?=$two?>" >
                     Wing 2
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?=BASEURL?>user/right_team/<?=$right['username']?>/wing3" class="nav-link waves-effect waves-light <?=$three?>" >
                     Wing 3
                     </a>
                  </li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane fade active show" id="navs-pills-top-home" role="tabpanel">
                     <h5 class="card-header">B Team</h5>
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
                              <?php $right_user=$this->db->where('position','right')->where('parent_id',$username)->get('tree')->row_array();
                                 if(!empty($right_user)){
                                       $right=$this->db->like('team',$right_user['child_id'])->get('tree')->result_array();
                                        $right_team = array();
                                                        $right_team[0] = $right_user;
                                                        foreach ($right as $keyy) {
                                                            $right_team[] = $keyy;
                                                        }
                                 }   
                                 
                                 ?>
                              <?php $count=1; foreach($right_team as $keyy){ ?>
                              <tr>
                                 <td><?=$count++?></td>
                                 <td><?=$keyy['entry_date']?></td>
                                 <?php    $users=$this->db->where('username',$keyy['child_id'])->get('user_role')->row_array();?>                                             
                                 <?php if($users['status']== "Active"){ ?> 
                                 <td><?=$users['activated_date']?></td>
                                 <?php }else{ ?> 
                                 <td>Inactive</td>
                                 <?php } ?>  
                                 <?php if($users['user_type'] == 'u') {?>
                                 <td><?=$keyy['child_id']?></td>
                                 <?php }else{ ?>
                                 <td>Bonus ID</td>
                                 <?php }?>
                                 <td><?=$users['first_name']?> <?=$users['last_name']?></td>
                                 <?php    $plan=$this->db->select_max('credit')->where('username',$keyy['child_id'])->where('remark','Activation')->get('pin')->row()->credit+0;?>     
                                 <td><?=$plan?></td>
                                 <td><?=$users['ref_id']?></td>
                                 <?php    $userss=$this->db->where('username',$users['ref_id'])->get('user_role')->row_array();?>                                                  
                                 <td><?=$userss['first_name']?> <?=$userss['first_name']?></td>
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