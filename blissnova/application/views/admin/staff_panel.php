<?php include 'header.php';?>
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.css" />
<style>
   .col-sm-12 {
   overflow: auto;
   }
   .tablebutton{
   display:flex;   
   }
</style>

<?php 
     $this->session->unset_userdata('error_message');
     $this->session->unset_userdata('success_message');?> 

<div class="container-xxl flex-grow-1 container-p-y">
<div class="row">
   <div class="col-12">
      <div class="card">
         <h5 class="card-header">Staff Registration</h5>
         <div class="card-body">
            <form action="<?=BASEURL?>admin/staff_panel"  id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework" method="POST" novalidate="novalidate">
               <div class="form-floating form-floating-outline mb-3 fv-plugins-icon-container">
                  <input type="text" class="form-control" id="staff_name" name="staff_name" placeholder="Enter your Name" value="<?=$this->input->post('staff_name')?>" autofocus="">
                  <label for="staffname">Staff name</label><?=form_error('staff_name');?>
                  <div class="row mt-3">
                     <div class="col-lg-6">
                        <div class="form-floating form-floating-outline mb-3">
                           <input type="text" class="form-control" id="phone number" name="mobile" placeholder="Enter your phone number" value="<?=$this->input->post('mobile')?>" autofocus="">
                           <label for="Mobile No">Mobile No</label><?=form_error('mobile');?>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-floating form-floating-outline mb-3">
                           <select class="form-select" name="gender" id="exampleFormControlSelect1" aria-label="Default select example">
                              <option value="">Select </option>
                              <option value="male" id="male">Male</option>
                              <option value="female" id="female">Female</option>
                           </select>
                           <label for="gender">Gender</label><?=form_error('gender');?>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-floating form-floating-outline mb-3">
                           <select class="form-select" name="marital_status" id="exampleFormControlSelect1" aria-label="Default select example">
                              <option value="">Select </option>
                              <option value="single" id="single">Single</option>
                              <option value="married" id="married">Married</option>
                           </select>
                           <label for="marital_status">Marital status</label><?=form_error('marital_status');?>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-floating form-floating-outline mb-3">
                           <select class="form-select" name="employe_role" id="exampleFormControlSelect1" aria-label="Default select example">
                              <option value="">Select </option>
                              <option value="Accountant" id="">Accountant</option>
                              <option value="Verification officer" id="">Verification Officer</option>
                           </select>
                           <label for="employe_role">Employee Role</label><?=form_error('employe_role');?>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-floating form-floating-outline mb-3">
                           <input type="text" class="form-control" id="City" name="address" placeholder="Enter your address" value="<?=$this->input->post('address')?>" autofocus="">
                           <label for="address">Address</label><?=form_error('address');?>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-floating form-floating-outline mb-3">
                           <input type="text" class="form-control" id="District" name="district" placeholder="Enter your district" value="<?=$this->input->post('district')?>" autofocus="">
                           <label for="district">District</label><?=form_error('district');?>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-floating form-floating-outline mb-3">
                           <input type="text" class="form-control" id="State" name="state" placeholder="Enter your state" value="<?=$this->input->post('state')?>" autofocus="">
                           <label for="state">State</label><?=form_error('state');?>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-floating form-floating-outline mb-3">
                           <input type="text" class="form-control" id="Pincode" name="pincode" placeholder="Enter your pincode" value="<?=$this->input->post('pincode')?>" autofocus="">
                           <label for="pincode">Pincode</label><?=form_error('pincode');?>
                        </div>
                     </div>
                  </div>
                  <a href="#"><button type=submit class="btn btn-primary d-grid w-20 waves-effect waves-light">Submit</button></a>
                  <input type="hidden">
            </form>
            </div>
         </div>
      </div>
      <!-- end col -->
   </div>
   <!-- end row -->
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
                     <th>Staff&nbspID</th>
                     <th>Password</th>
                     <th>Name</th>
                     <th>Gender</th>
                     <th>Mobile</th>
                     <th>Address</th>
                     <th>Employee Role</th>
                     <th>State</th>
                     <th>District</th>
                     <th>Pincode</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     $staff_list = $this->db->order_by('id','DESC')->get('staff_panel')->result_array();
                     $count=1;
                     foreach($staff_list as $key=>$h){ 
                     ?>
                  <tr>
                     <td><?=$count++?></td>
                     <td><?=$h['entry_date']?></td>
                     <td><?=$h['username']?></td>
                     <td><?=$h['pwd_hint']?></td>
                     <td><?=$h['name']?></td>
                     <td><?=$h['gender']?></td>
                     <td><?=$h['mobile']?></td>
                     <td><?=$h['address']?></td>
                     <td><?=$h['employe_role']?></td>
                     <td><?=$h['state']?></td>
                     <td><?=$h['district']?></td>
                     <td><?=$h['pincode']?></td>
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
 <script src="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
<script>
   $(document).ready(function () {
   $('#example').DataTable();
   });
</script>


<script>
$(document).ready(function() {
  // check if session message is set
  <?php if ($this->session->flashdata('success_message')): ?>
        Swal.fire({
            icon: 'success',
            title: 'Staff!',
            text: 'Staff registered successfully.',
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

<script>
  // Combine the event listeners for the "input" event on the "Pincode" input field
  $(document).ready(function() {
    $('#Pincode').on('input', function() {
      fetchLocationData();
    });

    function fetchLocationData() {
      var pincode = document.getElementById("Pincode").value;
      var url = "https://api.postalpincode.in/pincode/" + pincode;

      fetch(url)
        .then(function(response) {
          return response.json();
        })
        .then(function(data) {
          if (data[0].Status === "Success") {
            // Extract the desired location information from the response
            var city = data[0].PostOffice[0].Name;
            var district = data[0].PostOffice[0].District;
            var state = data[0].PostOffice[0].State;

            // Set the values in the corresponding input fields
            document.getElementById("City").value = city;
            document.getElementById("District").value = district;
            document.getElementById("State").value = state;
          } else {
            console.log("Invalid PIN code");
          }
        })
        .catch(function(error) {
          console.log("Error fetching location data:", error);
        });
    }
  });
</script>