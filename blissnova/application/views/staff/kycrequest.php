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
    
    
    
   <div class="row">
      <div class="col-12">
         <div class="card">
            <h5 class="card-header">KYC Request</h5>
            <div class="card-datatable table-responsive pt-0">
               <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Date&Time</th>
                        <th>Name</th>
                        <th>Pancard&nbspnumber</th>
                        <th>Aadharcard&nbspnumber</th>
                        <th>Pancard&nbspimage</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
            <?php $kyc_history=$this->db->where('status','Requested')->get('kyc_history')->result_array();
                  $count=1;
                  foreach($kyc_history as $key=>$kyc){ 
                   $namee=$this->db->where('username',$pin['username'])->get('user_role')->row_array(); ?>
                     <tr>
                        <td><?=$count++?></td>
                         <td>
                           <p><?=date('d/m/Y h:i:A',strtotime($kyc['entry_date']))?></p>
                        </td>
                        <td><?=$kyc['username']?></td>
                        <td><?=$kyc['pan_no']?></td>
                        <td><?=$kyc['aadhar_no']?></td>
                        <td class="text-center">
                            <a href="<?= BASEURL ?>assets/images/<?= $kyc['pan_image'] ?>" target="_blank">
                                <img src="<?= BASEURL ?>assets/images/<?= $kyc['pan_image'] ?>" class="tableimage" alt="Avatar" width="50px" height="50px">
                            </a>
                        </td>

                        <td>
                            <div class="tablebtn d-flex">
                          <div class="m-1"><a onclick="showAcceptAlert(event, '<?=BASEURL?>staff/kyc_accept/<?=$kyc['id']?>')" href="#"  class="btn btn-success waves-effect waves-light" id="sa-warning">Accept</a></div>
                           <div class="m-1"><a onclick="showRejectAlert(event, '<?=BASEURL?>staff/kyc_reject/<?=$kyc['id']?>')" href="#" class="btn btn-danger waves-effect waves-light" id="ajax-alert">Reject</a></div>
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
            <h5 class="card-header">KYC Request History</h5>
            <div class="card-datatable table-responsive pt-0">
               <table id="example2" class="datatables-basic table table-bordered" style="width:100%">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Date&Time</th>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Pan&nbspNo</th>
                        <th>Aadhar&nbspNo</th>
                        <th>Pan&nbspImage</th>
                        <th>Remark</th>
                        <th>Status</th>
                        <th>Varified&nbspby</th>
                     </tr>
                  </thead>
                  <tbody>
            <?php $kyc_historyy=$this->db->where('status!=','Requested')->get('kyc_history')->result_array();
                  $count=1;
                  foreach($kyc_historyy as $key=>$kycc){ 
                      $kycname=$this->db->where('username',$kycc['username'])->get('user_role')->row_array();
                ?>
                     <tr>
                        <td><?=$count++?></td>
                        <td>
                            <?php if($kycc['status']=='Accepted'){
                                $rplydate=date('d/m/Y h:i:A',strtotime($kycc['accept_date']));
                                $remark="Nil";
                            }else{
                                $rplydate=date('d/m/Y h:i:A',strtotime($kycc['reject_date']));
                                $remark=$kycc['description'];
                            }?>
                           <p><?=$rplydate?></p>
                           <!--<p>10.50am</p>-->
                        </td>
                        <td><?=$kycc['username']?></td>
                        <td><?=$kycname['first_name']." ".$kycname['last_name']?></td>
                        <td><?=$kycc['pan_no']?></td>
                        <td><?=$kycc['aadhar_no']?></td>
                        <td>
                            <a href="<?= BASEURL ?>assets/images/<?= $kycc['pan_image'] ?>" target="_blank">
                                <img src="<?= BASEURL ?>assets/images/<?= $kycc['pan_image'] ?>" class="tableimage" alt="Avatar" width="50px" height="50px">
                            </a>
                        </td>
                        <td><?=$remark?></td>
                         <?php if($kycc['status']=='Accepted') { ?>
                         <td class="pe-0">
                         <span class="badge rounded-pill bg-label-success"><?=$kycc['status']?></span>
                        </td>
                        <?php }?> 
                        <?php if($kycc['status']=='Rejected') { ?>
                         <td class="pe-0">
                         <span class="badge rounded-pill bg-label-danger"><?=$kycc['status']?></span>
                        </td>
                         <?php }?> 
                         
                          <?php if($kycc['verified_by'] == "Verification officer"){
                            
                            $staffname=$this->db->select('name')->where('username',$kycc['officer_id'])->get('staff_panel')->row()->name;?>
                            
                           <td><?=$staffname?>&nbsp(V.O)</td>
                       <?php }else{ ?>
                         <td>Admin</td>
                        <?php } ?>
                         
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