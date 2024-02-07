
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
</style>
  <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row  d-flex justify-content-center">
                              <div class="col-lg-8">
                                 <div class="card">
                                     <h5 class="card-header">Withdraw Request</h5>
                                      <form action="<?=BASEURL?>user/withdraw_request" method="post" id="myForm">
                                           <div class="card-body">
                                             <div class="d-flex align-items-center">
                                              <div class="avatar avatar-md">
                                                <div class="avatar-initial bg-label-primary rounded">
                                                  <img src="<?=BASEURL?>assets/svg/icons/credit-card.svg" alt="credit-card" class="w-px-30">
                                                </div>
                                              </div>
                                              <div class="ms-3">
                                    <h2 class="mb-0"><?=$total=$this->db->select('sum(credit)-sum(debit) as balance')->where('username',$this->session->userdata('ublisusername'))->get('withdraw_wallet')->row()->balance+0 ?></h2>
                                              </div>
                                            </div>
                                            <input type="hidden" class="form-control" name="username" id="exampleFormControlInput1" value="<?=$this->session->userdata('ublisusername')?>">
                                     <div class="form-floating form-floating-outline mb-4 mt-2">
                                        <input type="text" class="form-control" name="amount" id="exampleFormControlInput1" placeholder="Amount">
                                        <?php echo form_error('amount'); ?>
                                        <label for="exampleFormControlInput1"> Amount</label>
                                      </div>
                                          <button type="submit"  id="submitBtn" class="btn btn-primary w-md">Submit</button>
                                       </div>
                                      </form>
                                    </div>
                                 </div>
                              </div>
               
                   <div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">Withdrawal History</h5>
            <div class="card-datatable table-responsive pt-0">
                <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date and Time</th> 
                            <th>Requested Amount</th>
                            <th>Approve Date</th>
                            <th>Remark</th>
                            <th>Status</th>
                            <th>Reciept</th>
                            <th>Verified&nbspby</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $withdraw_request = $this->db->where('username', $this->session->userdata('ublisusername'))->get('payout')->result_array();
                        $count = 1;
                        foreach ($withdraw_request as $key => $withdraw) {
                            if ($withdraw['status'] == "Rejected") {
                                $color = "danger";
                            } else if ($withdraw['status'] == "Accepted") {
                                $color = "success";
                            } else {
                                $color = "warning";
                            }
                        ?>
                        <tr>
                            <td><?= $count++ ?></td>
                            <td><?= $withdraw['entry_date'] ?></td>
                            <td><?= $withdraw['amount'] ?></td>
                            <td><?= $withdraw['pay_date'] ?></td>
                            <td><?= $withdraw['remark'] ?></td>
                            <td>
                                <span class="badge bg-<?= $color ?>"><?= $withdraw['status'] ?></span>
                            </td>
                            <td>
                                <?php if($withdraw['status'] =="Accepted"){ ?>
                                <a class="btn btn-outline-secondary d-grid w-100 mb-3" href="<?=BASEURL?>user/invoice_withdraw/<?= $withdraw['id'] ?>"> View</a>
                                <?php } ?>
                            </td>
                            
                                <?php if($withdraw['verified_by'] == "Verification officer"){
                                 $staffname=$this->db->select('name')->where('username',$withdraw['officer_id'])->get('staff_panel')->row()->name;?>
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
    </div> <!-- end col -->
</div>

                        <!-- end row --> 
            </div>
           

 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
$(document).ready(function() {
  // check if session message is set
  <?php if ($this->session->flashdata('success_message')): ?>
               Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '<?= $this->session->flashdata('success_message') ?>',
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
                    
                   
<?php include 'footer.php';?>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

 <!-- Vendors JS -->
    <script src="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

    


<script>
  var form = document.querySelector('#myForm');
  var submitBtn = document.querySelector('#submitBtn');

  if (submitBtn) {
    form.addEventListener('submit', function(event) {
      event.preventDefault(); // prevent the form from submitting
     
      Swal.fire({
       title: 'Are you sure?',
       text: "You want to withdraw!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes!',
       customClass: {
          confirmButton: 'btn btn-primary me-3 waves-effect waves-light',
         cancelButton: 'btn btn-label-secondary waves-effect'
       },
        buttonsStyling: false
      }).then(function(result) {
        if (result.value) {
        submitBtn.innerHTML = 'Processing...';

          // submit the form after the confirmation dialog is closed
          setTimeout(function() {
            form.submit();
          }, 500); // wait for 10 seconds before submitting
        } else {
          // change button text back to "Submit" if user cancels
          submitBtn.innerHTML = 'Submit';
        }
      });
    });
  }
</script>

<script>
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
