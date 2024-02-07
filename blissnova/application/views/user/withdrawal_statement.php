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
            <h5 class="card-header">Withdrawal Statement</h5>
            <div class="card-datatable table-responsive pt-0">
               <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                
                  <div class="tablerow m-3">
                 <form action="<?=BASEURL?>user/withdrawal_search" method="post">
                     <div class="col-lg-5">
                        <div class="form-floating form-floating-outline mb-4  m-2">
                           <input class="form-control" type="date" name="date1" id="html5-date-input">
                           <label for="html5-date-input">From Date</label>
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <div class="form-floating form-floating-outline mb-4  m-2">
                           <input class="form-control" type="date" name="date2" id="html5-date-input">
                           <label for="html5-date-input">Till Date</label>
                        </div>
                     </div>
                       
                     <div class="col-lg-2 mb-4">   
                        <button type="submit" class="btn rounded-pill btn-primary waves-effect waves-light m-2 ">Submit</button>
                     </div>
                      </form>
                  </div>
                
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Date and Time</th>
                        <th>Particular</th>
                        <th>Credit</th>
                        <th>Debit</th>
                        <th>Balance</th>
                     </tr>
                  </thead>
                  <tbody>
         <?php 
               $count=1;
               foreach($incomee as $key=>$income){ 
               ?>
                     <tr>
                        <td><?=$count++?></td>
                        <td><?=$income['entry_date']?></td>
                        <td><?=$income['remark']?></td>
                        <td><?=$income['credit']?></td>
                        <td><?=$income['debit']?></td>
                        <?php if($income['debit']>0){ $value+=$income['debit']; }?>
                        <td><?php echo $val+=$income['credit']-$value;?></td>
                     </tr>
                  <?php } ?>
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