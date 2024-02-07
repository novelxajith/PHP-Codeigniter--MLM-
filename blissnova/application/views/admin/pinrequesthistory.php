<!-- Vendors CSS -->
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/node-waves/node-waves.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/typeahead-js/typeahead.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/flatpickr/flatpickr.css" />
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
/*   img.tableimage {*/
/*    width: 100%;*/
/*}*/
</style>
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <h5 class="card-header">PIN Request</h5>
            <div class="card-body">
                
                 <form action="<?=BASEURL?>admin/pinrequesthistory" method="POST">
            <div class="row mt-2 d-flex justify-content-center">
                  <div class="col-lg-4">
                     <label for="searchInput">From:</label>
                     <input class="form-control" type="date"  name="min" id="from" placeholder="Enter search term...">
                     <input class="form-control" type="hidden"  name="filter" value="filter">
                     <input class="form-control" type="hidden"  name="type" value="first">
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
                        <th>#</th>
                        <th>Date&Time</th>
                        <th>Name</th>
                        <th>User&nbspId</th>
                        <th>package</th>
                        <th>Pin&nbspQuantity</th>
                        <th>Amount</th>
                        <th>Transaction&nbspID</th>
                        <th>Transaction&nbspreceipt</th>
                        <th>Mode&nbspof&nbspTransaction</th>
                      
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
            <?php 
                  $count=1;
                  foreach($pin_history as $key=>$pin){ 
                   $namee=$this->db->where('username',$pin['username'])->get('user_role')->row_array(); ?>
                     <tr>
                        <td><?=$count++?></td>
                         <td>
                           <p><?=date('d/m/Y h:i:A',strtotime($pin['entry_date']))?></p>
                           <!--<p>10.50am</p>-->
                        </td>
                        <td><?=$namee['first_name']?> <?=$namee['last_name']?></td>
                        <td><?=$pin['username']?></td>
                        <td><?=$pin['pack']?></td>
                        <td><?=$pin['pack_count']?></td>
                        <td><?=$pin['amount']?></td>
                        <th><?=$pin['ref']?></th>
                        <td><a href="<?=BASEURL?>assets/reciept/<?=$pin['image']?>" target="blank"><img src="<?=BASEURL?>assets/reciept/<?=$pin['image']?>" class="tableimage" alt="Avatar" width="50px" height="50px"></a></td>
                        <td><?=$pin['mode']?></td>
                       
                        <td>
                            <div class="tablebtn d-flex">
                          <div class="m-1"><a onclick="showAcceptAlert(event, '<?=BASEURL?>admin/pin_accept/<?=$pin['id']?>')" href="#"  class="btn btn-success waves-effect waves-light" id="sa-warning">Accept</a></div>
                           <div class="m-1"><a onclick="showRejectAlert(event, '<?=BASEURL?>admin/pin_reject/<?=$pin['id']?>')" href="#" class="btn btn-danger waves-effect waves-light" id="ajax-alert">Reject</a></div>
                           </div>
                        </td>
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

      <div class="row mt-3">
      <div class="col-12">
         <div class="card">
            <h5 class="card-header">PIN Request History</h5>
            <div class="card-body">
                
                 <form action="<?=BASEURL?>admin/pinrequesthistory" method="POST">
            <div class="row mt-2 d-flex justify-content-center">
                  <div class="col-lg-4">
                     <label for="searchInput">From:</label>
                     <input class="form-control" type="date"  name="minn" placeholder="Enter search term...">
                     <input class="form-control" type="hidden"  name="filterr" value="filterr">
                      <input class="form-control" type="hidden"  name="typee" value="second">
                  </div>
                  <div class="col-lg-4">
                     <label for="searchInput">To:</label>
                     <input class="form-control" type="date" name="maxx"  placeholder="Enter search term...">
                  </div>
                  <div class="col-lg-4">
                       <label for="searchInput">Search</label>
                     <button type="submit" class="form-control">Submit</button>
                  </div>
                  
               </div>
               </form>
                
            </div>
            <div class="card-datatable table-responsive pt-0">
               <table id="example2" class="datatables-basic table table-bordered" style="width:100%"><button class="btn btn-primary w-md m-2" id="download-btn">Download as Excel</button>
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Date&Time</th>
                        <th>Name</th>
                        <th>User&nbspId</th>
                        <th>package</th>
                        <th>Pin&nbspQuantity</th>
                        <th>Amount</th>
                        <th>Transaction&nbspID</th>
                        <th>Transaction&nbspreceipt</th>
                        <th>Mode&nbspof&nbspTransaction</th>
                        <th>Remark</th>
                        <th>Action&nbspDate</th>
                        <th>Status</th>
                        <th>Verified&nbspby</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
            <?php
                  $count=1;
                  foreach($pin_historyy as $key=>$pinn){ 
                  $name=$this->db->where('username',$pinn['username'])->get('user_role')->row_array(); ?>
                     <tr>
                        <td><?=$count++?></td>
                        <td>
                           <?=date('d/m/Y h:i:A',strtotime($pinn['entry_date']))?>
                          
                        </td>
                        <td><?=$pinn['username']?></th>
                        <td><?=$name['first_name']?> <?=$name['last_name']?></th>
                        <td><?=$pinn['pack']?></td>
                        <td><?=$pinn['pack_count']?></td>
                        <td><?=$pinn['amount']?></td>
                        <th><?=$pinn['ref']?></th>
                        <td>
    <a href="<?=BASEURL?>assets/reciept/<?=$pinn['image']?>" target="blank"><img src="<?=BASEURL?>assets/reciept/<?=$pinn['image']?>" class="tableimage" alt="Avatar" width="50px" height="50px"></a></td>
                        <td><?=$pinn['mode']?></td>
                        <td><?=$pinn['remark']?></td>
                        <td><?=$pinn['approve_date']?></td>
                         <?php if($pinn['status']=='Accepted') { ?>
                         <td class="pe-0">
                         <span class="badge rounded-pill bg-label-success"><?=$pinn['status']?></span>
                        </td>
                        <?php }?> 
                        <?php if($pinn['status']=='Rejected') { ?>
                         <td class="pe-0">
                         <span class="badge rounded-pill bg-label-danger"><?=$pinn['status']?></span>
                        </td>
                         <?php }?> 
                         
                         <?php if($pinn['verified_by'] == "Verification officer"){
                            
                            $staffname=$this->db->select('name')->where('username',$pinn['officer_id'])->get('staff_panel')->row()->name;
                        
                        ?>
                           <td><?=$staffname?>&nbsp(V.O)</td>
                       <?php }else{ ?>
                         <td>Admin</td>
                        <?php } ?>
                         
                          <td><a href="<?=BASEURL?>admin/pinview/<?=$pinn['deposit_id']?>" <button type="button" class="btn btn-primary btn-sm" fdprocessedid="60z5ko">view</button></a></td>
                     </tr>
                    <?php }?> 
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.4.1/js/dataTables.dateTime.min.js"></script>



  <!--<script src="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.3/dist/sweetalert2.all.min.js"></script>
  <!-- SheetJS (XLSX) -->
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

<!-- FileSaver.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

  <script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
  </script>
  <script>
$(document).ready(function() {
  // check if session message is set
  <?php if ($this->session->flashdata('approve_message')): ?>
    Swal.fire({
      title: 'Success!',
      text: '<?= $this->session->flashdata('approve_message') ?>',
      icon: 'success'
    });
  <?php elseif ($this->session->flashdata('reject_message')): ?>
    Swal.fire({
      title: 'Rejected!',
      text: '<?= $this->session->flashdata('reject_message') ?>',
      icon: 'error',
      confirmButtonColor: '#d33'
    });
  <?php endif; ?>
});


  </script>
<script>
function showAcceptAlert(event, link) {
  event.preventDefault(); // prevent the default link behavior

  Swal.fire({
    title: 'Are you sure?',
    text: 'You are about to accept this action.',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, accept it!',
    confirmButtonColor: '#72e128',
    cancelButtonText: 'No',
    cancelButtonColor: '#d33'
  }).then((result) => {
    if (result.isConfirmed) {
      // User clicked the "Accept" button
      // Handle the accept action here
      window.location.href = link; // redirect the user to the link
      
    }
  });
}

function showRejectAlert(event, link) {
  event.preventDefault(); // prevent the default link behavior

  Swal.fire({
    title: 'Reject Action',
    text: 'Please provide a reason for rejecting this action:',
    input: 'text',
    inputPlaceholder: 'Enter reason here...',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Reject',
    confirmButtonColor: '#72e128',
    cancelButtonColor: '#d33'
  }).then((result) => {
    if (result.isConfirmed) {
      // User clicked the "Reject" button
      const reason = result.value;
      // Handle the reject action and reason here
      window.location.href = `${link}?reason=${encodeURIComponent(reason)}`; // redirect the user to the link with the reason parameter
    }
  })
}
</script>
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
  var table = $('#example2').DataTable();

  $('#download-btn').on('click', function () {
    // hide the columns you don't need in the Excel sheet
    table.column(8).visible(false); // 9th column
    table.column(14).visible(false); // 15th column

    // get DataTable data without the excluded columns
    var data = table.rows().data().toArray().map(function (row) {
      return row.slice(0, 8).concat(row.slice(9, 14)).concat(row.slice(15)); // exclude 9th and 15th columns
    });

    // add column headings to data array
    var headings = ['#', 'Date&Time', 'Name', 'User Id', 'Package', 'Pin Quantity', 'Amount', 'Transaction', 'Mode', 'remark', 'Action', 'Status','Verified'];
    data.unshift(headings);

    // create new Excel workbook and sheet
    var workbook = XLSX.utils.book_new();
    var sheet = XLSX.utils.json_to_sheet(data);

    // add sheet to workbook
    XLSX.utils.book_append_sheet(workbook, sheet, 'Sheet1');

    // download workbook as Excel file
    var filename = 'datatable.xlsx';
    var wbout = XLSX.write(workbook, { bookType: 'xlsx', type: 'array' });
    saveAs(new Blob([wbout], { type: 'application/octet-stream' }), filename);

    // show the hidden columns again
    table.column(8).visible(true);
    table.column(14).visible(true);
  });
});
</script>



<?php  $this->session->unset_userdata('approve_message');
 $this->session->unset_userdata('reject_message');?>