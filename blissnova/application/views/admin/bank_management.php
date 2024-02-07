
<?php include 'header.php';?>
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
<style>
    .col-sm-12 {
    overflow: auto;
}
.tablebutton{
 display:flex;   
}
</style>
  

 <div class="container-xxl flex-grow-1 container-p-y">  
         

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   <h5 class="card-header">Bank Management</h5>
                                   <div class="card-body">
                                     <div class="row mt-3">  
                                  <div class="col-lg-6">   
                                   <form action="<?=BASEURL?>admin/bank_management"  id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework" method="POST" novalidate="novalidate">
                                       
            <?php   
             $bank = $this->db->where("username", $this->session->userdata("ablisusername"))->get('user_role')->row_array();
            ?>
            
                <div class="form-floating form-floating-outline mb-3 fv-plugins-icon-container">
                  <input type="text" class="form-control" id="acc_holder_name" name="acc_holder_name" placeholder="Enter your Name" value="<?=$bank['ac_holder_name']?>" autofocus="">
                  <label for="Shopname">Account holder name</label><?=form_error('acc_holder_name');?>
                <div class="row mt-3">
                <div class="col-lg-6">    
                <div class="form-floating form-floating-outline mb-3">
                  <input type="text" class="form-control" id="acc_no" name="acc_no" placeholder="Enter your Account number" value="<?=$bank['ac_no']?>" autofocus="">
                  <label for="Mobile No">Account No </label><?=form_error('acc_no');?>
                </div>
                 </div>
                 <div class="col-lg-6">    
                <div class="form-floating form-floating-outline mb-3">
                  <input type="text" class="form-control" id="bank name" name="bank_name" placeholder="Enter your Bank name" value="<?=$bank['ac_bank']?>" autofocus="">
                  <label for="Mobile No">Bank name</label><?=form_error('bank_name');?>
                </div>
                 </div>
               </div>
               <div class="row mt-3">
                <div class="col-lg-6">    
                <div class="form-floating form-floating-outline mb-3">
                  <input type="text" class="form-control" id="Address1" name="branch_name" placeholder="Enter your  Branch name" value="<?=$bank['branch']?>" autofocus="">
                  <label for="Address1">Branch name</label><?=form_error('branch_name');?>
                </div>
                 </div>
                 <div class="col-lg-6">    
                <div class="form-floating form-floating-outline mb-3">
                  <input type="text" class="form-control" id="Address2" name="ifsc" placeholder="Enter your IFSC code" value="<?=$bank['ac_ifsc']?>" autofocus="">
                  <label for="Address2">IFSC code</label><?=form_error('ifsc');?>
                </div>
                 </div>
               </div>
                  
                <a href="#"><button type=submit class="btn btn-primary d-grid w-20 waves-effect waves-light">Submit</button></a>
              <input type="hidden"></form>    
                </div>
                
               <?=form_open_multipart('admin/upi_management');?>
               </div>
              <div class="col-lg-6">
    <div class="col-lg-12">    
        <div class="form-floating form-floating-outline mb-4">
            <input type="file" class="form-control" id="basic-default-upload-file" name="upi_image" value="<?= $bank['upi_image'] ?>">
            <label for="basic-default-upload-file">UPI image</label>
        </div>
    </div>
    <div class="col-lg-12">    
        <div class="form-floating form-floating-outline mb-3">
            <input type="text" class="form-control" id="Address2" name="upi_number" placeholder="Enter your UPI number" value="<?= $bank['upi_number'] ?>" autofocus="">
            <label for="Address2">UPI Number</label>
            <?= form_error('upi_number'); ?>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary d-grid w-20 waves-effect waves-light">Submit</button>
    </div>
    <?= form_close(); ?>
</div>
</div>
   <div class="row mt-3">

<div class="form-group text-center">
    <label for="exampleInputEmail1" class="form-label darker-label">Current UPI image</label>
    <div class="image_field">
        <img style="width: 300px; height: 350px; display: block; margin: 0 auto;" src="<?= BASEURL.'assets/images/'.$bank['upi_image'] ?>" class="img-thumbnail" alt="Cinque Terre">
    </div>
</div>


                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
   
</div>

 <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card">
            <h5 class="card-header">History</h5>
            <div class="card-datatable table-responsive pt-0">
               <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                  <thead>
                     <tr>
                         <th>S.no</th>
                         <th>Entry&nbspdate</th>
                         <th>Account&nbspHolder&nbspname</th>
                         <th>Account&nbspNumber</th>
                         <th>Bank&Name</th>
                         <th>Branch&nbspName</th>
                         <th>IFSC&nbspcode</th>
                    </tr>
                  </thead>
                 <tbody>
                 <?php 
                        $shop_list = $this->db->get('admin_bank')->result_array();
                        $count=1;
                        foreach($shop_list as $key=>$h){ 
                  ?>
                     <tr>
                         
                        <td><?=$count++?></td>
                        <td><?=$h['entry_date']?></td>
                        <td><?=$h['ac_holder_name']?></td>
                        <td><?=$h['ac_no']?></td>
                        <td><?=$h['ac_bank']?></td>
                        <td><?=$h['branch']?></td>
                        <td><?=$h['ac_ifsc']?></td>
                        
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

  <script>
   $(document).ready(function () {
   $('#example').DataTable();
   });
</script>           
                 
  
