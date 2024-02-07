
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">


<?php include 'header.php';?>
<style>
    .col-sm-12 {
    overflow: auto;
}
.pointbtn {
    display: flex;
    justify-content: space-around;
}

  .swal2-input {
      text-align: center;
    }

</style>
  <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row  d-flex justify-content-center">
                              <div class="col-lg-6 mt-2">
                                  <div class="row">
                                <div class="col-lg-12 mt-2">
                                 <div class="card">
                                     <h5 class="card-header">Affiliate Point Wallet</h5>
                                           <div class="card-body">
                                             <div class="d-flex align-items-center">
                                              <div class="avatar avatar-md">
                                                <div class="avatar-initial bg-label-primary rounded">
                                                  <img src="<?=BASEURL?>assets//svg/icons/credit-card.svg" alt="credit-card" class="w-px-30">
                                                </div>
                                              </div>
                                              <?php
    //                                           $first_user = $this->session->userdata('ublisusername');
    // $second_user = $this->db->select('username')->where('user_type', 'sub')->where('position', 'left')->where('ref_id', $this->session->userdata('ublisusername'))->get('user_role')->row()->username;
    // $third_user = $this->db->select('username')->where('user_type', 'sub')->where('position', 'right')->where('ref_id', $this->session->userdata('ublisusername'))->get('user_role')->row()->username;
    // $users = array($first_user, $second_user, $third_user);
                                              ?>
                                              <div class="ms-3">
                                                <h2 class="mb-0"><?=$this->db->select('sum(credit)-sum(debit) as balance')->where('username',$this->session->userdata('ublisusername'))->where('remark','Direct Income')->get('account_sub')->row()->balance+0;?></h2>
                                              </div>
                                            </div>
                                        <div class="pointbtn mt-4">
                                        <div class="col-lg-6 d-flex justify-content-center">
                                         <a onclick="showRejectAlert(event, '<?=BASEURL?>user/affiliate_point_transfer')" href="#" ><button type="submit"  class="btn btn-primary w-md">Transfer</button></a>

                                        </div>  
                                        <div class="col-lg-6 d-flex justify-content-center">
                                           <a href="<?=BASEURL?>user/affiliate_point_statement" <button type="submit" class="btn btn-primary  w-md">Statement</button></a>
                                           </div> 
                                        </div>
                                       </div>
                                    </div>
                                   </div>
                                   <div class="col-lg-12 mt-2">
                                 <div class="card">
                                     <h5 class="card-header">Team Incentive Point Wallet</h5>
                                           <div class="card-body">
                                             <div class="d-flex align-items-center">
                                              <div class="avatar avatar-md">
                                                <div class="avatar-initial bg-label-primary rounded">
                                                  <img src="<?=BASEURL?>assets/svg/icons/credit-card.svg" alt="credit-card" class="w-px-30">
                                                </div>
                                              </div>
                                              <div class="ms-3">
                                                <h2 class="mb-0"><?=$this->db->select('sum(credit)-sum(debit) as balance')->where('username',$this->session->userdata('ublisusername'))->where('remark','Pair Income')->get('account_sub')->row()->balance+0;?></h2>
                                              </div>
                                            </div>
                                        <div class="pointbtn mt-4">
                                        <div class="col-lg-6 d-flex justify-content-center">
                                         <a onclick="showRejectAlert(event, '<?=BASEURL?>user/incentive_point_transfer')" href="#" ><button type="submit"  class="btn btn-primary w-md">Transfer</button></a>

                                        </div>  
                                        <div class="col-lg-6 d-flex justify-content-center">
                                           <a href="<?=BASEURL?>user/team_incentive_statement" <button type="submit" class="btn btn-primary  w-md">Statement</button></a>
                                           </div> 
                                        </div>
                                       </div>
                                    </div>
                                   </div>
                                   <div class="col-lg-12 mt-2">
                                 <div class="card">
                                     <h5 class="card-header">Level Incentive Point Wallet</h5>
                                           <div class="card-body">
                                             <div class="d-flex align-items-center">
                                              <div class="avatar avatar-md">
                                                <div class="avatar-initial bg-label-primary rounded">
                                                  <img src="<?=BASEURL?>assets/svg/icons/credit-card.svg" alt="credit-card" class="w-px-30">
                                                </div>
                                              </div>
                                              <div class="ms-3">
                                                <h2 class="mb-0"><?=$this->db->select('sum(credit)-sum(debit) as balance')->where('username',$this->session->userdata('ublisusername'))->where('remark','Level Income')->get('account_sub')->row()->balance+0;?></h2>
                                              </div>
                                            </div>
                                        <div class="pointbtn mt-4">
                                        <div class="col-lg-6 d-flex justify-content-center">
                                         <a onclick="showRejectAlert(event, '<?=BASEURL?>user/level_point_transfer')" href="#" ><button type="submit"  class="btn btn-primary w-md">Transfer</button></a>

                                        </div>  
                                        <div class="col-lg-6 d-flex justify-content-center">
                                           <a href="<?=BASEURL?>user/level_incentive_statement" <button type="submit" class="btn btn-primary  w-md">Statement</button></a>
                                           </div> 
                                        </div>
                                       </div>
                                    </div>
                                   </div>
                                  </div>
                                 </div>
                                    <div class="col-lg-6 mt-2">
                                <div class="row">
                                <div class="col-lg-12 mt-2">
                                 <div class="card">
                                     <h5 class="card-header">Withdraw Wallet</h5>
                                           <div class="card-body">
                                             <div class="d-flex align-items-center">
                                              <div class="avatar avatar-md">
                                                <div class="avatar-initial bg-label-primary rounded">
                                                  <img src="<?=BASEURL?>assets//svg/icons/credit-card.svg" alt="credit-card" class="w-px-30">
                                                </div>
                                              </div>
                                              <div class="ms-3">
                                                <h2 class="mb-0"><?=$total=$this->db->select('sum(credit)-sum(debit) as balance')->where('username',$this->session->userdata('ublisusername'))->get('withdraw_wallet')->row()->balance?></h2>
                                              </div>
                                            </div>
                                          <div class="pointbtn mt-4">
                                        <div class="col-lg-6 d-flex justify-content-center">
                                           <a href="<?=BASEURL?>user/withdrawrequest"<button type="submit" class="btn btn-primary  w-md">Withdraw</button></a>
                                        </div>  
                                        <div class="col-lg-6 d-flex justify-content-center">
                                             <a href="<?=BASEURL?>user/withdrawal_statement" <button type="submit" class="btn btn-primary  w-md">Statement</button></a>
                                            </div> 
                                        </div>
                                       </div>
                                    </div>
                                </div>
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
                                                     <th>Amount</th>
                                                     <th>Type</th>
                                                  </tr>
                                               </thead>
                                               <tbody>
        <?php $his=$this->db->where('username',$this->session->userdata('ublisusername'))->where('remark !=','withdrawal')->get('withdraw_wallet')->result_array();
        $count=1;
        foreach($his as $h) { 
        ?>                                           
                                                  <tr>
                                                     <td><?=$count++ ?></td>
                                                     <td><?=$h['entry_date'] ?></td>
                                                     <td><?=$h['credit'] ?></td>
                                                     <td><?=$h['remark'] ?></td>
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
           

   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.3/dist/sweetalert2.all.min.js"></script>
  <script>
$(document).ready(function() {
  // check if session message is set
  <?php if ($this->session->flashdata('success_message')): ?>
  
  Swal.fire({
          icon: 'success',
          title: 'Transfer Completed',
          text: `<?= $this->session->flashdata('success_message') ?>`,
          confirmButtonColor: '#72e128'
        });
  
  <?php elseif ($this->session->flashdata('error_message')): ?>
    Swal.fire({
      title: 'Error!',
      text: '<?=$this->session->flashdata('error_message') ?>',
      icon: 'error',
      confirmButtonColor: '#d33'
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.0/dist/sweetalert2.all.min.js"></script>
<script>
  
function showRejectAlert(event, link) {
  event.preventDefault();

  Swal.fire({
    title: 'Transfer Points',
    html: '<div class="col-lg-12"><div class="form-floating form-floating-outline">' +
          '<input type="text" class="form-control" id="floatingInput" placeholder="Enter Points"  aria-describedby="floatingInputHelp">' +
          '<label for="floatingInput">Points</label>' +
        '</div>',

    showCancelButton: true,
    confirmButtonColor: "#72e128",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, transfer",
    focusConfirm: false,
        preConfirm: () => {
          const amountInput = Swal.getPopup().querySelector('#floatingInput');
          const amount = amountInput.value;
        
          if (!amount) {
            Swal.showValidationMessage(`Please enter the points`);
            return false;
          }
        
          if (isNaN(amount) || parseFloat(amount) < 0) {
            Swal.showValidationMessage(`Please enter a positive number`);
            amountInput.value = "";
            return false;
          }
        
          return { amount: amount };
        }
  }).then((result) => {
    if (result.isConfirmed) {
      // User clicked the "Transfer" button
      const amount = result.value.amount;
      // Handle the transfer action here
      window.location.href = `${link}/${encodeURIComponent(amount)}`; // redirect the user to the link with the amount parameter
    }
  });
}

</script>

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>