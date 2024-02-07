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
.pic{
    width:250px;
    height:250px;
    border-radius:25px;
}
   .col-sm-12 {
   overflow: auto;
   }
   img.tableimage {
   width: auto;
   height: 74px;
   }
  img.d-block.h-auto.ms-0.ms-sm-4.rounded.user-profile-img {
    width: 150px!important;
    height: 150px!important;
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
          <?php $user=$this->db->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row_array(); ?>
         <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
            <input type="file" id="upload" style="display:none">
            <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
               <img
                  id="user-image"
                  src="<?=BASEURL?>assets/images/<?=$user['profile_image']?>"
                  alt="user image"
                  class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img"
                  onclick="document.getElementById('upload').click();"
                  />
               <div id="image-preview" class="image-preview"></div>
            </div>
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
            <a class="nav-link " href="<?=BASEURL?>user/user_profile">
            <i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a>
         </li>
         <li class="nav-item">
            <a class="nav-link " href="<?=BASEURL?>user/bank">
            <i class="mdi mdi-account-multiple-outline me-1 mdi-20px"></i>Bank</a>
         </li>
         <li class="nav-item">
            <a class="nav-link active" href="<?=BASEURL?>user/kyc">
            <i class="mdi mdi-view-grid-outline me-1 mdi-20px"></i>KYC</a>
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
               <h5 class="card-header">KYC</h5>
               <div class="card-body">
                  <?=form_open_multipart('user/kyc'); ?>
                  <h6>KYC Details</h6>
                  <div class="row g-4">
                     <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                           <input type="text" id="multicol-AadharCardNumber" class="form-control" name="aadhar"  placeholder="Aadhar Card Number" value="<?=$user['aadhar_no']?>">
                            <input type="hidden" id="multicol-AadharCardNumber" class="form-control" name="username"  placeholder="Aadhar Card Number" value="<?=$user['username']?>">
                           <label for="multicol-AadharCardNumber">Aadhar Card Number</label>
                           <?=form_error('aadhar');?>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                           <input type="text" id="multicol-PanCardNumber" class="form-control" name="pan" placeholder="Pan Card Number" value="<?=$user['pan_no']?>">
                           <label for="multicol-PanCardNumber">Pan Card Number</label>
                           <?=form_error('pan');?>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                           <input type="password" id="cmulticol-PanCardNumber" class="form-control" name="cpan" placeholder="Confirm Pan Card Number" value="<?=$user['pan_no']?>">
                           <label for="multicol-PanCardNumber">Confirm Pan Card Number</label>
                           <?=form_error('cpan');?>
                           <span id="panMatchMessage"></span>
                        </div>
                     </div>
                     <div class="row mt-5">
                      
                        
                        <div class="col-lg-6  d-flex justify-content-center">
                                  <div>
                                  <a id="panclick" href="#">
                              <img id="pan" src="<?=BASEURL?>assets/images/<?=$user['pan_image']?>" alt="user image" class="pic" style="width:200px; height:150px;">
                              </a>
                              <label><span id="pan_status" style="color:green;"></span></label><br>
                              <input style="display: none;" type="file" class="custom-file-input" name="userfile" id="pan_file" accept="jpg,png,jpeg" >
                              <input type="hidden" name="pan_file" id="userfile" style="border: unset; " class="text-center" value="<?=$user['pan_image']?>" readonly> <?=form_error('userfile');?>
                              <div class="d-flex justify-content-center mt-3">PAN card image</div>
                             </div>
                        </div>
                     
                        
                         
                     </div>
                     <?php
                        $kyc = $this->db->where('username', $this->session->userdata('ublisusername'))->get('kyc_history')->row_array();
                        
                        if ($kyc['status'] == "Rejected") {
                            ?>
                     <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
                     </div>
                     <?php
                        } else {
                            if ($kyc['status'] == "Accepted") {
                                ?>
                     <div class="pt-4">
                        <button type="button" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Your KYC is updated</button>
                     </div>
                     <?php
                        } else if ($kyc['status'] == "Requested") {
                            ?>
                     <div class="pt-4">
                        <button type="button" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Requested</button>
                     </div>
                     <?php
                        } else {
                            ?>
                     <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
                     </div>
                     <?php
                        }
                        }
                        ?>
                     <?=form_close(); ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="row mt-3">
            <div class="col-12">
               <div class="card">
                  <h5 class="card-header">KYC  History </h5>
                  <div class="card-datatable table-responsive pt-0">
                     <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Entry Date</th>
                              <th>Aadhar Card No</th>
                              <th>PAN Card No</th>
                              <th>PAN Card Image</th>
                              <th>Status</th>
                              <th>Varified&nbspby</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $user_details=$this->db->where('username',$this->session->userdata('ublisusername'))->get('kyc_history')->result_array();
                              $count=1;
                              foreach($user_details as $key=>$user){ ?>
                           <tr>
                              <td><?=$count++?></td>
                              <td><?=date("Y-m-d",strtotime($user['entry_date']))?></td>
                              <td><?=$user['aadhar_no']?></td>
                              <td><?=$user['pan_no']?></td>
                              
                              <td class="text-center">
                                 <a href="<?= BASEURL ?>assets/images/<?= $user['pan_image'] ?>" target="_blank">
                                 <img src="<?= BASEURL ?>assets/images/<?= $user['pan_image'] ?>" class="tableimage" alt="Avatar" width="50px" height="50px">
                                 </a>
                              </td>
                              <td><?=$user['status']?></td>
                              
                            <?php if($user['verified_by'] == "Verification officer"){
                            
                            $staffname=$this->db->select('name')->where('username',$user['officer_id'])->get('staff_panel')->row()->name;?>
                            
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
      </div>
   </div>
   <!--/ User Profile Content -->
</div>
<!-- / Content -->
<?php include 'footer.php';?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
   $(document).ready(function() {
   // Function to compare PAN card numbers
   function comparePanCardNumbers() {
   var panCardNumber = $("#multicol-PanCardNumber").val();
   var confirmPanCardNumber = $("#cmulticol-PanCardNumber").val();
   
   if (panCardNumber === confirmPanCardNumber) {
     $("#panMatchMessage").text("PAN card numbers match").css("color", "green");
   } else {
     $("#panMatchMessage").text("PAN card numbers do not match").css("color", "red");
   }
   }
   
   // Call the function on input event
   $("#cmulticol-PanCardNumber").on("input", comparePanCardNumbers);
   });
   
</script>
<script>
   $(document).ready(function () {
   $('#example').DataTable();
   });
</script>
<script>
   $(document).ready(function() {
      $("#panclick").click(function() {
         $("#pan_file").trigger('click');
      });
   
      $(document).on('change', '#pan_file', function() {
         var name = document.getElementById("pan_file").files[0].name;
         var form_data = new FormData();
         var ext = name.split('.').pop().toLowerCase();
         if (jQuery.inArray(ext, ['jpg', 'jpeg', 'png']) == -1) {
            alert("Invalid Image File");
         } else {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("pan_file").files[0]);
            var f = document.getElementById("pan_file").files[0];
            var fsize = f.size || f.fileSize;
            if (fsize > 5000000) {
               alert("Image Size is too big");
            } else {
               form_data.append("pan_upload", document.getElementById('pan_file').files[0]);
               $.ajax({
                  url: "<?=BASEURL?>user/pan_upload",
                  method: "POST",
                  data: form_data,
                  contentType: false,
                  cache: false,
                  processData: false,
                  beforeSend: function() {
                     $('#pan_status').html("PAN card uploading...");
                  },
                  success: function(data) {
                     $('#pan_status').html("Uploaded");
                     $('#userfile').val(data);
                     $('#pan').attr('src', '<?=BASEURL?>assets/images/' + data);
                     
                  }
               });
            }
         }
      });
   });
</script>
<script>
   $(document).ready(function() {
      $("#aadharclick").click(function() {
         $("#aadhar_file").trigger('click');
      });
   
      $(document).on('change', '#aadhar_file', function() {
         var name = document.getElementById("aadhar_file").files[0].name;
         var form_data = new FormData();
         var ext = name.split('.').pop().toLowerCase();
         if (jQuery.inArray(ext, ['jpg', 'jpeg', 'png']) == -1) {
            alert("Invalid Image File");
         } else {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("aadhar_file").files[0]);
            var f = document.getElementById("aadhar_file").files[0];
            var fsize = f.size || f.fileSize;
            if (fsize > 5000000) {
               alert("Image Size is too big");
            } else {
               form_data.append("aadhar_upload", document.getElementById('aadhar_file').files[0]);
               $.ajax({
                  url: "<?=BASEURL?>user/aadhar_upload",
                  method: "POST",
                  data: form_data,
                  contentType: false,
                  cache: false,
                  processData: false,
                  beforeSend: function() {
                     $('#aadhar_status').html("Aadhar card uploading...");
                  },
                  success: function(data) {
                     $('#aadhar_status').html("Uploaded");
                     $('#aadhar_image').val(data);
                     $('#aadhar').attr('src', '<?=BASEURL?>assets/kyc/' + data);
                  }
               });
            }
         }
      });
   });
</script>