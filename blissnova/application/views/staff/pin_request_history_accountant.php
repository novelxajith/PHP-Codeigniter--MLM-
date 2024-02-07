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
   
   <!-- end row -->

      <div class="row mt-3">
      <div class="col-12">
         <div class="card">
            <h5 class="card-header">PIN Request History</h5>
            <div class="card-datatable table-responsive pt-0">
               <table id="example2" class="datatables-basic table table-bordered" style="width:100%">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Date&Time</th>
                        <th>Name</th>
                        <th>User&nbspId</th>
                        <th>package</th>
                        <th>Pin&nbspQuantity</th>
                        <th>Amount</th>
                        <th>Mode&nbspof&nbspTransaction</th>
                        <th>Remark</th>
                        <th>Action&nbspDate</th>
                        <th>Status</th>
                        <th>Verified by</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
            <?php $pin_historyy=$this->db->where('status!=','Request')->get('investment')->result_array();
                  $count=1;
                  foreach($pin_historyy as $key=>$pinn){ 
                  $name=$this->db->where('username',$pinn['username'])->get('user_role')->row_array(); ?>
                     <tr>
                        <td><?=$count++?></td>
                        <td>
                           <p><?=date('d/m/Y h:i:A',strtotime($pinn['entry_date']))?></p>
                           <!--<p>10.50am</p>-->
                        </td>
                        <td><?=$pinn['username']?></th>
                        <td><?=$name['first_name']?> <?=$name['last_name']?></th>
                        <td><?=$pinn['pack']?></td>
                        <td><?=$pinn['pack_count']?></td>
                        <td><?=$pinn['amount']?></td>
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

<?php  $this->session->unset_userdata('approve_message');
 $this->session->unset_userdata('reject_message');?>