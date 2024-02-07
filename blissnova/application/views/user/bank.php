
<?php include 'header.php';?>
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/animate-css/animate.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.css" />


<style>
 img.d-block.h-auto.ms-0.ms-sm-4.rounded.user-profile-img{
    width: 150px!important;
    height: 150px!important;
}
img.position-absolute.bottom-0.end-0.me-3.mb-3.bankimg {
    right: -27px!important;
    width: 118px;
    height: auto;
}
button#weeklySalesDropdown {
    right: 16px;
    display: flex;
    justify-content: flex-end;
    position: absolute;
}
</style>
    <!-- Page CSS -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/page-profile.css" />

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User Profile /</span> Profile</h4>

  <!-- Header -->
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
         <div class="user-profile-header-banner">
               <img src="<?=BASEURL?>assets/img/logo/bliss.svg" alt="Banner image" class="rounded-top" />
            </div>
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
      <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
         <img
            src="<?=BASEURL?>assets/images/<?=$user['profile_image']?>"
            alt="user image"
            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img"
         />
      </div>
     <?php $user=$this->db->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row_array(); ?>
     
      <?php $fir= $this->db->select('first_name')->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row()->first_name; 
          $las= $this->db->select('last_name')->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row()->last_name;   
          
       $com = "$fir $las";

          
          ?>
          
         
          
          <div class="flex-grow-1 mt-3 mt-sm-5">
            <div
              class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
              <div class="user-profile-info">
                <h4><?=$user['first_name']?> <?=$user['last_name']?></h4>
                     <ul
                           class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                           <li class="list-inline-item">
                              <i class="mdi mdi-map-marker-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"><?=$user['city']?> City</span>
                           </li>
                           <li class="list-inline-item">
                              <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"> Joined <?=(new DateTime($user['entry_date']))->format('F j, Y h:i A');?></span>
                               
                           </li> 
                           
                           <li class="list-inline-item">
                              <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"> Activated on <?=(new DateTime($user['activated_date']))->format('F j, Y h:i A');?></span>
                           </li>
                          
                        </ul>
              </div>
              <a href="<?=BASEURL?>user/idcard" class="btn btn-primary">
                <i class="mdi mdi-account-check-outline me-1"></i>ID Card
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Header -->

  <!-- Navbar pills -->
  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-sm-row mb-4">
        <li class="nav-item">
          <a class="nav-link " href="<?=BASEURL?>user/user_profile"
            ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?=BASEURL?>user/bank"
            ><i class="mdi mdi-account-multiple-outline me-1 mdi-20px"></i>Bank</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=BASEURL?>user/kyc"
            ><i class="mdi mdi-view-grid-outline me-1 mdi-20px"></i>KYC</a
          >
        </li>
        
      </ul>
    </div>
  </div>
  <!--/ Navbar pills -->
  <div class="card ">
    <div class="card-body">
  <!-- User Profile Content -->
  <div class="row mt-4 justify-content-center">
  <div class="col-lg-8 ">  
  <div class=" mb-4">
   <h5 class="card-header">Bank</h5>
   <div class="card-body">
     <form action="<?=BASEURL?>user/bank" method="post" id="yourFormId" enctype="multipart/form-data">
      <h6>Bank Details</h6>
      <div class="row g-4">
          <div class="col-md-6">
          <div class="form-floating form-floating-outline">
            <input type="password" id="multicol-AccountNumber" class="form-control" placeholder="AccountNumber" name="ac_no" value=<?=$this->input->post('ac_no')?>>
            <?=form_error('ac_no'); ?>
            <label for="multicol-AccountNumber">Account Number</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating form-floating-outline">
            <input type="text" id="cmulticol-AccountNumber" class="form-control" placeholder="Confirm AccountNumber" name="cac_no" value=<?=$this->input->post('cac_no')?>>
            <?php echo form_error('cac_no'); ?>
            <label for="multicol-AccountNumber">Confirm Account Number</label>
            <span id="accountMatchMessage"></span>
          </div>
        </div>
        <div class="col-md-6">
         <div class="form-floating form-floating-outline">
               <input type="text" id="multicol-AccountHolderName" class="form-control" placeholder="AccountHolderName" name="ac_name" oninput="this.value = this.value.toUpperCase()" value=<?=$this->input->post('ac_name')?> >
                <?php echo form_error('ac_name'); ?>
               <label for="multicol-AccountHolderName">Account Holder Name</label>
                <span id="holderMatchMessage"></span>
            </div>
         </div>
         <div class="col-md-6">
         <div class="form-floating form-floating-outline">
               <input type="text" id="multicol-IFSCCode" class="form-control" placeholder="IFSCCode" name="ac_ifsc" oninput="this.value = this.value.toUpperCase()" value=<?=$this->input->post('ac_ifsc')?>>
                <?php echo form_error('ac_ifsc'); ?>
               <label for="multicol-IFSCCode">IFSC Code</label>
            </div>  
        </div>
         <div class="col-md-6">
            <div class="form-floating form-floating-outline">
               <input type="text" id="multicol-Bankname" class="form-control" placeholder="Bankname" name="ac_bank" value=<?=$this->input->post('ac_bank')?>>
               <?php echo form_error('ac_bank'); ?>
               <label for="multicol-Bankname">Bank Name</label>
            </div>
         </div>
         <div class="col-md-6">
         <div class="form-floating form-floating-outline">
               <input type="text" id="multicol-BranchName" class="form-control" placeholder="Branch Name" name="ac_branchname" value=<?=$this->input->post('ac_branchname')?>>
                <?php echo form_error('ac_branchname'); ?>
               <label for="multicol-Branch">Branch</label>
            </div>  
        </div>
        <div class="col-md-6">
         <div class="form-floating form-floating-outline">
               <input type="file" id="" class="form-control" placeholder="IFSCCode" name="user_image" value=<?=$this->input->post('user_image')?>>
                <?php echo form_error('user_image'); ?>
               <label for="multicol-IFSCCode">Passbook</label>
            </div>  
        </div>
        <div class="col-md-6">
         <div style="color: #666CFF;" id="address" class="form-floating form-floating-outline">
              
            </div>  
        </div>
      </div>
      <div class="pt-4">
         <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light" onclick="showConfirmation(event)">Add</button>
         <button type="reset" class="btn btn-label-secondary waves-effect">Cancel</button>
      </div>
       </form>
     </div>
   </div>
  </div>
  </div>
  <div class="row mt-3">
     <?php $bank_details=$this->db->where('username',$this->session->userdata('ublisusername'))->where('description !=','By Admin')->get('bank')->result_array(); 
           foreach($bank_details as $key=>$bank){ ?>
                <div class="col-lg-4">
              <?php if($bank['ac_status']=='Active'){
                  $color= "bg-success";
                  $text='text-white';
              }else{ $color='';
                   $text='';
              } 
              ?>
                  <div class="card m-2 <?=$color?>">
                     
                         <div class="dropdown">
                              <button class="btn p-0" type="button" id="weeklySalesDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklySalesDropdown" style="">
                                <a class="dropdown-item waves-effect" onclick="showDeleteConfirmation(event, '<?=BASEURL?>user/delete_bank/<?=$bank['id']?>')">delete</a>
                              </div>
                            </div>
                     
                    <div class="card-body">
                    <h5 class="card-title mb-2 d-flex gap-2 flex-wrap"><?=$bank['ac_bank']?></h5>
                      <h6 class="text-primary mb-1 pb-1"><?=$bank['ac_name']?></h6>
                      <p class="mb-2 <?=$text?>"  ><?=$bank['ac_no']?></p>
                      <p class="mb-2 <?=$text?>"  ><?=$bank['ac_ifsc']?></p>
                      <a href="<?=BASEURL?>user/bank_active/<?=$bank['id']?>" class="btn btn-sm btn-primary waves-effect waves-light"><?=$bank['ac_status']?></a>
                    </div>
                    <img src="<?=BASEURL?>assets/images/notification/newbank.png" class="position-absolute bottom-0 end-0 me-3 mb-3 bankimg" height="120" alt="Upgrade Account">
                  </div>
                </div>
              <?php } ?> 
         
</div>
  </div>
  </div>
  <!--/ User Profile Content -->
</div>
<!-- / Content -->

<?php include 'footer.php';?>
 <!-- Vendors JS -->
    <script src="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
      
<script>
function showDeleteConfirmation(event, deleteUrl) {
  event.preventDefault(); // Prevent the default behavior of the link
  Swal.fire({
    title: 'Confirmation',
    text: 'Are you sure you want to delete the bank account?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes',
  }).then((result) => {
    if (result.isConfirmed) {
       window.location.href = deleteUrl; // Pass the deleteUrl to the deleteBankAccount function
    } else {
      Swal.fire('Deletion canceled.', '', 'error');
    }
  });
}

function deleteBankAccount(deleteUrl) {
  // Make an AJAX request to delete the account
  fetch(deleteUrl, { method: 'DELETE' }) // Send a DELETE request to the deleteUrl
    .then(response => response.json())
    .then(data => {
      Swal.fire('Bank account deleted!', '', 'success');
    })
    .catch(error => {
      Swal.fire('Deletion failed.', '', 'error');
    });
}
</script>
      
<script>
   $(document).ready(function() {
    $('#multicol-IFSCCode').on('input', function() {
        var ifscCode = $(this).val();
        if (ifscCode) {
            $.ajax({
                url: 'https://ifsc.razorpay.com/' + ifscCode,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#multicol-BranchName').val(data.BRANCH);
                    $('#multicol-Bankname').val(data.BANK);
                    $('#address').text(data.ADDRESS);
                },
                error: function(xhr, status, error) {
                    // Handle the error response
                }
            });
        }
    });
});

</script>






<script>
  function showConfirmation(event) {
    event.preventDefault(); // Prevents the form from submitting immediately

    Swal.fire({
      title: 'Confirmation',
      text: 'Are you sure you want to add the bank account?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes',
    }).then((result) => {
      if (result.isConfirmed) {
        // Submit the form
        document.getElementById('yourFormId').submit();
      }
    });
  }
</script>






<script>
    $(document).ready(function() {
  // Function to compare account numbers
  function compareAccountNumbers() {
    var accountNumber = $("#multicol-AccountNumber").val();
    var confirmAccountNumber = $("#cmulticol-AccountNumber").val();

    if (accountNumber === confirmAccountNumber) {
      $("#accountMatchMessage").text("Account numbers match").css("color", "green");
    } else {
      $("#accountMatchMessage").text("Account numbers do not match").css("color", "red");
    }
  }

  // Call the function on keyup event
  $("#cmulticol-AccountNumber").on("keyup", compareAccountNumbers);
});
    
</script>


<script>
    $(document).ready(function() {
        // Function to compare account numbers
        function holdername() {
            var holdername = $("#multicol-AccountHolderName").val();
            var holderbothnames = "<?=$com?>";

           

            if (holdername === holderbothnames) {
                $("#holderMatchMessage").text("Account Holder Name match").css("color", "green");
            } else {
                $("#holderMatchMessage").text("Account Holder Name does not match").css("color", "red");
            }
        }

        // Call the function on keyup event
        $("#multicol-AccountHolderName").on("keyup", holdername);
    });
</script>

