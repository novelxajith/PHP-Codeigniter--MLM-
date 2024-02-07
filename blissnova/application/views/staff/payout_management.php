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
</style>
<div class="container-xxl flex-grow-1 container-p-y">
    
    
    <?php if ( $this->session->userdata('staffrole') == "Verification officer" )  { ?>
   <div class="row">
      <div class="col-12">
         <div class="card">
            <h5 class="card-header">Payout Management </h5>
            <div class="card-body">
             <form action="<?=BASEURL?>staff/payout_management" method="POST">
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
                        <th>Request Date & Time</th>
                        <th>Name</th>
                        <th>User Id</th>
                        <th>Requested amount </th>
                        <th>Bank details </th>
                         <th>Passbook </th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
         <?php 
                  $count=1;
                  foreach($payout_history as $key=>$payout){ 
                $namee=$this->db->where('username',$payout['username'])->get('user_role')->row_array(); ?>
                     <tr>
                        <td><?=$count++?></td>
                         <td>
                           <p><?=date('d/m/Y h:i:A',strtotime($pin['entry_date']))?></p>
                        </td>
                        <td><?=$namee['first_name']?> <?=$namee['last_name']?></td>
                        <td><?=$payout['username']?></td>
                        <td><?=$payout['amount']?></td>
                        <td>
                            <p><?=$payout['ac_no']?></p>
                            <p><?=$payout['ac_ifsc']?></p>
                            <p><?=$payout['ac_bank']?></p>
                        </td>
                        <td >
                                  <a href="<?=BASEURL?>assets/passbook/<?=$payout['passbook']?>" target="_blank">
                                    <img src="<?=BASEURL?>assets/passbook/<?=$payout['passbook']?>" alt="Passbook" class="rounded-circle" width="50" height="50" >
                                  </a>
                                </td>
                        <td>
                           <div class="tablebtn d-flex">
                          <div class="m-1"><a onclick="showAcceptAlert(event, '<?=BASEURL?>staff/payout_accept/<?=$payout['id']?>')" href="#"  class="btn btn-success waves-effect waves-light" id="sa-warning">Accept</a></div>
                           <div class="m-1"><a onclick="showRejectAlert(event, '<?=BASEURL?>staff/payout_reject/<?=$payout['id']?>')" href="#" class="btn btn-danger waves-effect waves-light" id="ajax-alert">Reject</a></div>
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
<?php } ?>

      <div class="row mt-3">
      <div class="col-12">
         <div class="card">
            <div class="card-body">
             <form action="<?=BASEURL?>staff/payout_management" method="POST">
                <div class="row mt-2 d-flex justify-content-center">
                  <div class="col-lg-4">
                     <label for="searchInput">From:</label>
                     <input class="form-control" type="date"  name="minn" id="from" placeholder="Enter search term...">
                     <input class="form-control" type="hidden"  name="filterr" value="filterr">
                     <input class="form-control" type="hidden"  name="typee" value="second">
                  </div>
                  <div class="col-lg-4">
                     <label for="searchInput">To:</label>
                     <input class="form-control" type="date" name="maxx" id="to" placeholder="Enter search term...">
                  </div>
                  <div class="col-lg-4">
                      <label for="searchInput">Search</label>
                     <button type="submit" class="form-control">Submit</button>
                  </div>
                  
                </div>
            </form>
            </div>
            <h5 class="card-header">Payout Management  History</h5>
            <div class="card-datatable table-responsive pt-0">
               <table id="example2" class="datatables-basic table table-bordered" style="width:100%">
                  <thead>
                     <tr>
                        <th>#</th>
                       <th>Approve  Date & Time</th>
                        <th>Name</th>
                        <th>User Id</th>
                        <th>Requested amount </th>
                        <th>Bank details</th>
                        <th>Passbook</th>
                        <th>Remark</th>
                        <th>Status</th>
                        <th>Verified&nbspby</th>
                     </tr>
                  </thead>
                  <tbody>
             <?php 
                  $count=1;
                  foreach($payout_historyy as $key=>$pay){ 
                  $name=$this->db->where('username',$pay['username'])->get('user_role')->row_array(); ?>
                     <tr>
                        <td><?=$count++?></td>
                        <td>
                           <p><?=date('d/m/Y h:i:A',strtotime($pay['pay_date']))?></p>
                        </td>
                        <td><?=$name['first_name']?> <?=$name['last_name']?></td>
                        <td><?=$pay['username']?></td>
                        <td><?=$pay['amount']?></td>
                       
                        <td>
                            <p><?=$pay['ac_no']?></p>
                            <p><?=$pay['ac_ifsc']?></p>
                            <p><?=$pay['ac_bank']?></p>
                            </td>
                            
                         <td >
                                  <a href="<?=BASEURL?>assets/passbook/<?=$pay['passbook']?>" target="_blank">
                                    <img src="<?=BASEURL?>assets/passbook/<?=$pay['passbook']?>" alt="Passbook" class="rounded-circle" width="50" height="50" >
                                  </a>
                                </td>

                        <td><?=$pay['remark']?></td>
                        <?php if($pay['status']=='Accepted') { ?>
                         <td class="pe-0">
                         <span class="badge rounded-pill bg-label-success"><?=$pay['status']?></span>
                        </td>
                        <?php }?> 
                        <?php if($pay['status']=='Rejected') { ?>
                         <td class="pe-0">
                         <span class="badge rounded-pill bg-label-danger"><?=$pay['status']?></span>
                        </td>
                         <?php }?> 
                         
                            <?php if($pay['verified_by'] == "Verification officer"){
                            $staffname=$this->db->select('name')->where('username',$pay['officer_id'])->get('staff_panel')->row()->name;?>
                                <td><?=$staffname?>&nbsp(V.O)</td>
                            <?php }else{ ?>
                            <td>Admin</td>
                        <?php } ?>
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

  <!--<script src="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.3/dist/sweetalert2.all.min.js"></script>
  <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
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