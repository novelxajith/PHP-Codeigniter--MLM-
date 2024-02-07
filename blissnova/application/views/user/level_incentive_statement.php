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
   .tablerow.m-3 {
   display: flex;
   align-items: center;
   }
   @media only screen and (max-width: 991px) {
   .tablerow.m-3 {
   display: block;
   align-items: center;
   }
   }
</style>


<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <h5 class="card-header">My Team Incentive Points</h5>
            <div class="card-datatable table-responsive pt-0">
               <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                
                  
                
                  <thead>
                     <tr>
                        <th>Level 1</th>
                        <th>Level 2</th>
                        <th>Level 3</th>
                        <th>Level 4</th>
                        <th>Level 5</th>
                        <th>Level 6</th>
                        <th>Level 7</th>
                        <th>Level 8</th>
                        <th>Level 9</th>
                        <th>Level 10</th>
                        <th>Total Earned</th>
                     </tr>
                  </thead>
                  <tbody>
         
                     <tr>
                        <td><a href="<?=BASEURL?>user/level_wise_incentive/1">View</a></td>
                        <td><a href="<?=BASEURL?>user/level_wise_incentive/2">View</a></td>
                        <td><a href="<?=BASEURL?>user/level_wise_incentive/3">View</a></td>
                        <td><a href="<?=BASEURL?>user/level_wise_incentive/4">View</a></td>
                        <td><a href="<?=BASEURL?>user/level_wise_incentive/5">View</a></td>
                        <td><a href="<?=BASEURL?>user/level_wise_incentive/6">View</a></td>
                        <td><a href="<?=BASEURL?>user/level_wise_incentive/7">View</a></td>
                        <td><a href="<?=BASEURL?>user/level_wise_incentive/8">View</a></td>
                        <td><a href="<?=BASEURL?>user/level_wise_incentive/9">View</a></td>
                        <td><a href="<?=BASEURL?>user/level_wise_incentive/10">View</a></td>
                        <td><?= $val=$this->db->select_sum('credit')->where('username',$this->session->userdata('ublisusername'))->where('remark','Level Income')->get('account_sub')->row()->credit+0?></td>
                     </tr>
              
                 </tbody>
               </table>
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