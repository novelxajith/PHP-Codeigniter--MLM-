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
                                                      <th>Position</th>
                                                  </tr>
                                               </thead>
                                               <tbody>
                        <?php $direct_team=$this->db->where('ref_id',$this->session->userdata('ublisusername'))->get('user_role')->result_array();
                          $count=1;
                          foreach($direct_team as $key=>$direct){ 
                          $pack=$this->db->select_max('credit')->where('username',$direct['username'])->get('pin')->row()->credit; 
                           if($pack==1100){ $package="Plus"; }elseif($pack==10000){ $package="Plus"; }else{$package="";} ?>
                                                  <tr>
                                                      <?php $users=$this->db->select('user_type')->where('username',$direct['username'])->get('user_role')->row()->user_type;?>
                                                     <td><?=$count++?></td>
                                                     <td><?=$direct['entry_date']?></td>
                                                     <td><?=$direct['activated_date']?></td>
                                                     <?php if($users=='u'){?>
                                                     <td><?=$direct['username']?></td>
                                                     <?php }else{?>
                                                     <td>Bonus ID</td>
                                                     <?php }?>
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
                            <?php $direct_team_left=$this->db->select('username')->where('ref_id',$this->session->userdata('ublisusername'))->where('user_type','sub')->where('position','left')->get('user_role')->row()->username;
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
                         <?php $direct_team_right=$this->db->select('username')->where('ref_id',$this->session->userdata('ublisusername'))->where('user_type','sub')->where('position','right')->get('user_role')->row()->username;
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
