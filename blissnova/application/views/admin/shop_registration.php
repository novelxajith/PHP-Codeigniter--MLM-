
<?php include 'header.php';?>
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.css" />
<style>
    .col-sm-12 {
    overflow: auto;
}
.tablebutton{
 display:flex;   
}
</style>
  
<?php 
     $this->session->unset_userdata('error_message');
     $this->session->unset_userdata('success_message');?> 
 <div class="container-xxl flex-grow-1 container-p-y">  
         

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   <h5 class="card-header">Shop Registration</h5>
                                   <div class="card-body">
                                   <form action="<?=BASEURL?>admin/shop_registration"  id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework" method="POST" novalidate="novalidate">
               
                <div class="form-floating form-floating-outline mb-3 fv-plugins-icon-container">
                  <input type="text" class="form-control" id="Shopname" name="shopname" placeholder="Enter your Shopname" value="<?=$this->input->post('shopname')?>" autofocus="">
                  <label for="Shopname">Shop name</label><?=form_error('shopname');?>
                <div class="row mt-3">
                <div class="col-lg-6">    
                <div class="form-floating form-floating-outline mb-3">
                  <input type="text" class="form-control" id="phone number" name="mob_num_1" placeholder="Enter your phone number" value="<?=$this->input->post('mob_num_1')?>" autofocus="">
                  <label for="Mobile No">Mobile No 1</label><?=form_error('mob_num_1');?>
                </div>
                 </div>
                 <div class="col-lg-6">    
                <div class="form-floating form-floating-outline mb-3">
                  <input type="text" class="form-control" id="phone number" name="mob_num_2" placeholder="Enter your phone number" value="<?=$this->input->post('mob_num_2')?>" autofocus="">
                  <label for="Mobile No">Mobile No 2</label><?=form_error('mob_num_2');?>
                </div>
                 </div>
               </div>
               <div class="row mt-3">
                <div class="col-lg-6">    
                <div class="form-floating form-floating-outline mb-3">
                  <input type="text" class="form-control" id="Address1" name="address1" placeholder="Enter your Address1" value="<?=$this->input->post('shopname')?>" autofocus="">
                  <label for="Address1">Address 1</label><?=form_error('address1');?>
                </div>
                 </div>
                 <div class="col-lg-6">    
                <div class="form-floating form-floating-outline mb-3">
                  <input type="text" class="form-control" id="Address2" name="address2" placeholder="Enter your Address2" value="<?=$this->input->post('address2')?>" autofocus="">
                  <label for="Address2">Address 2</label><?=form_error('address2');?>
                </div>
                 </div>
               </div>
               <div class="row mt-3">
                <div class="col-lg-6">    
                <div class="form-floating form-floating-outline mb-3">
                  <input type="text" class="form-control" id="City" name="city" placeholder="Enter your City" value="<?=$this->input->post('city')?>" autofocus="">
                  <label for="City">City</label><?=form_error('city');?>
                </div>
                 </div>
                 <div class="col-lg-6">    
                <div class="form-floating form-floating-outline mb-3">
                  <input type="text" class="form-control" id="State" name="state" placeholder="Enter your State" value="<?=$this->input->post('state')?>" autofocus="">
                  <label for="State">State</label><?=form_error('state');?>
                </div>
                 </div>
               </div>
               <div class="row mt-3">
                <div class="col-lg-6">    
                <div class="form-floating form-floating-outline mb-3">
                  <input type="text" class="form-control" id="District" name="district" placeholder="Enter your District" value="<?=$this->input->post('district')?>" autofocus="">
                  <label for="District">District</label><?=form_error('district');?>
                </div>
                 </div>
                 <div class="col-lg-6">    
                <div class="form-floating form-floating-outline mb-3">
                  <input type="text" class="form-control" id="Pincode" name="pincode" placeholder="Enter your Pincode" value="<?=$this->input->post('pincode')?>" autofocus="">
                  <label for="Pincode">Pincode</label><?=form_error('pincode');?>
                </div>
                 </div>
               </div>
                  
                <a href="#"><button type=submit class="btn btn-primary d-grid w-20 waves-effect waves-light">Submit</button></a>
              <input type="hidden"></form>    
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
   
</div>

 <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card">
            <h5 class="card-header">History</h5>
            <div class="card-body">
                    <h4 class="card-title mb-0">User Management</h4>
            <form action="<?=BASEURL?>admin/shop_registration" method="POST">
                <div class="row mt-2 d-flex justify-content-center">
                  <div class="col-lg-4">
                     <label for="searchInput">From:</label>
                     <input class="form-control" type="date"  name="min" id="from" placeholder="Enter search term...">
                     <input class="form-control" type="hidden"  name="filter" value="filter">
                  </div>
                  <div class="col-lg-4">
                     <label for="searchInput">To:</label>
                     <input class="form-control" type="date" name="max" id="to" placeholder="Enter search term...">
                  </div>
                  <div class="col-lg-4">
                       <label for="searchInput">Search</label>
                     <button type="submit" class="form-control">Submit</button>
                  </div>
                  
                </div>
            </form>
                </div>
            <div class="card-datatable table-responsive pt-0">
               <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                  <thead>
                     <tr>
                         <th>S.no</th>
                         <th>Entry&nbspdate</th>
                         <th>Shop&nbspname</th>
                         <th>Mobile&nbspNumber&nbsp1</th>
                         <th>Mobile&nbspNumber&nbsp2</th>
                         <th>Address&nbsp1</th>
                         <th>Address&nbsp2</th>
                         <th>City</th>
                         <th>State</th>
                         <th>District</th>
                         <th>Pincode</th>
                         <th>Registered&nbspby</th>
                    </tr>
                  </thead>
                 <tbody>
                 <?php 
                        $shop_list = $this->db->get('shop_list')->result_array();
                        $count=1;
                        foreach($shop_list as $key=>$h){ 
                  ?>
                     <tr>
                         
                        <td><?=$count++?></td>
                        <td><?=$h['entry_date']?></td>
                        <td><?=$h['shop_name']?></td>
                        <td><?=$h['mob_num_1']?></td>
                        <td><?=$h['mob_num_2']?></td>
                        <td><?=$h['address_1']?></td>
                        <td><?=$h['address_2']?></td>
                        <td><?=$h['city']?></td>
                        <td><?=$h['state']?></td>
                        <td><?=$h['district']?></td>
                        <td><?=$h['pincode']?></td>

                           <?php if($h['register_by'] == "Verification officer"){
                            $staffname=$this->db->select('name')->where('username',$h['officer_id'])->get('staff_panel')->row()->name;?>
                            
                           <td><?=$staffname?>&nbsp(V.O)</td>
                          <?php }else{ ?>
                         <td>Admin</td>
                        <?php } ?>
                       
                     <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
  
   
<?php include 'footer.php';?>
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
 <script src="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

  <script>
   $(document).ready(function () {
   $('#example').DataTable();
   });
</script>           
                 
  <script>
$(document).ready(function() {
  // check if session message is set
  <?php if ($this->session->flashdata('success_message')): ?>
        Swal.fire({
            icon: 'success',
            title: 'Staff!',
            text: 'Shop registered successfully.',
            customClass: {
              confirmButton: 'btn btn-success waves-effect'
            }
          });
  <?php elseif ($this->session->flashdata('error_message')): ?>
             Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '<?= $this->session->flashdata('error_message') ?>',
            customClass: {
              confirmButton: 'btn btn-danger waves-effect'
            }
          });
  
  <?php endif; ?>
});

</script>
