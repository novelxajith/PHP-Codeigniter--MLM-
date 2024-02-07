

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
</style>
 <div class="container-xxl flex-grow-1 container-p-y">  
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   
                                              <h5 class="card-header">Affiliate incentive</h5>
                                             <div class="card-datatable table-responsive pt-0">
                                               <table class="m-3" border="0" cellspacing="5" cellpadding="5">
                                <tbody><tr>
                                    <form action="<?=BASEURL?>user/direct_income_filter" method="post">
                                    <td>From date:</td>
                                    <td><input type="date" class="form-control form-control-sm" id="min" name="min"></td>
                                </tr>
                                <tr>
                                    <td>To date:</td>
                                    <td><input type="date" class="form-control form-control-sm" id="max" name="max">
                                    
                                    </td>
                                    <td>
                                        <button type="submit" class="form-control form-control-sm">submit</button>
                                    </td>
                                    </form>
                                </tr>
                            </tbody></table> 
                                             <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                                             <thead>
                                                  <tr>
                                                     <th>#</th>
                                                     <th>Date and Time</th>
                                                     <th>User ID</th>
                                                     <th>User Name</th>
                                                     <th>Wing</th>
                                                     <th>Pack</th>
                                                    <th>Incentive</th>
                                                     <th>Admin Charge & TDS(10%)</th>
                                                     <th>Net Incentive</th>
                                                  </tr>
                                               </thead>
                    <?php 
        $left_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','left')->where('ref_id',$this->session->userdata('ublisusername'))->get('user_role')->row()->username;
        $right_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','right')->where('ref_id',$this->session->userdata('ublisusername'))->get('user_role')->row()->username; 
        $usernames = array( $this->session->userdata('ublisusername'), $left_sub_user, $right_sub_user ); ?>        
        
        
                                               <tbody>
                         
                        <?php 
                        $count=1;
                        foreach($inc as $i) {
                        ?>                           
                                                  <tr>
                                                     <td><?=$count ++ ?></td>
                                                     <td><?=$i['entry_date'] ?></td>
                                                     <td><?=$i['description'] ?></td>
                                <?php $name=$this->db->where('username',$i['description'])->get('user_role')->row_array(); ?>                     
                                                     <td><?=$name['first_name'] ?></td>
                         <?php  if($i['username'] == $this->session->userdata('ublisusername')){
                                    $wing="Wing 1";
                                }else if($i['username'] == $left_sub_user){
                                    $wing="Wing 2";
                                }else if($i['username'] == $right_sub_user){
                                    $wing="Wing 3";
                                }
                                ?>  
                                                     <td><?=$wing?></td>
                                                     <td><?=$i['direct_pack'] ?></td>
                                                     <td><?=$i['credit']+$i['admin_charge']+$i['tds'] ?></td>
                                                     <td><?=$i['admin_charge']+$i['tds'] ?></td>
                                                     <td><?=$i['credit'] ?></td>
                                                  </tr>
                                                  <?php } ?>
                                               </tbody>
                                        </table>
        
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