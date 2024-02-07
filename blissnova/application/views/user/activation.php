
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
                                     <h5 class="card-header">Activation</h5>
                                    <form action="<?=BASEURL?>user/activation" method="post" id="myForm"> 
                                       <div class="card-body">
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" placeholder="UserId" id="username"  oninput="this.value = this.value.toUpperCase()">
                                        <label for="exampleFormControlInput1"> User Id</label>
                                      </div><div id="all"></div>
                                        
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" id="name" placeholder="Mathew" readonly="true">
                                        
                                       
                                        <label for="exampleFormControlInput1"> User name</label>
                                      </div><input type="hidden"  name="activated_by" value="<?=$this->session->userdata('ublisusername')?>">
                                     
                                    <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-select"  name="username" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option value="">Select Wing </option>
                                        <option value="" id="center">Wing 1</option>
                                        <option value="" id="left">Wing 2</option>
                                        <option value="" id="right">Wing 3</option>
                                    </select><?=form_error('username') ?>

                                          <label for="exampleFormControlSelect1">Wing</label>
                                  </div>
                                    
                                      <div class="form-floating form-floating-outline mb-4">
                                          <select class="form-select" id="exampleFormControlSelect1" name="pin_value" aria-label="Default select example" id="select">
                                              <option selected="">Select Package</option>
                                              <option value="1100.00">Plus</option>
                                              <option value="10000.00">Prime</option> 
                                          </select>
                                          <label for="exampleFormControlSelect1">Package</label>
                                        </div>
                                             <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="pin" placeholder="Enter PIN" >
                                        <?php echo form_error('pin'); ?>
                                        <label for="exampleFormControlInput1"> Enter PIN</label>
                                      </div>
                                      <!-- <p>Under Maintenance Try User Activation Later</p> -->
                                          <button type="submit" id="submitBtn" class="btn btn-primary w-md">Activate Account</button>
                                       </div>
                                   </form> 
                                    </div>
                                 </div>
                              </div>
                        
             

                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="card">
                                   
                                              <h5 class="card-header">Activation History</h5>
                                             <div class="card-datatable table-responsive pt-0">
                                               
                                             <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                                             <thead>
                                                  <tr>
                                                     <th> S.no </th>
                                                     <th>Activated date</th>
                                                     <th>User ID</th>
                                                     <th>Name</th>
                                                     <th>PIN Type</th>
                                                     <th>PIN</th>
                                                  </tr>
                                               </thead>
                                               <tbody>
                                            <?php
												    $count=1;
												    $history = $this->db->where('activated_by',$this->session->userdata('ublisusername'))->get('pin')->result_array();
												    foreach($history as $key => $hist){
												    ?>
                                                  <tr>
                                                     <td><?=$count++?></td>
                                                     <td><?=$hist['entry_date']?></td>
                                                     <td><?=$hist['username']?></td>
                    <?php $name=$this->db->select('first_name')->where('username',$hist['username']) ->get('user_role')->row()->first_name; ?>                                
                                                     <td><?=$name?></td>
                                                     <td><?=$hist['type']?></td>
                                                     <td><span class="badge bg-primary"><?=$hist['pin_id']?></span></td>
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




 <!-- Vendors JS -->
    <script src="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

 <script>
$(document).ready(function() {
    $('#username').on('input', function() {
        var username = $(this).val();
        $.ajax({
            url: "<?php echo base_url('user/get_name'); ?>",
            type: "POST",
            data: {username: username},
            dataType: "json",
            success: function(data) {
                if (data) {
                    $('#name').val(data);
                    $('#all').hide();
                } else {
                    $('#name').val('');
                    $('#all').html("Invalid Userid").show();
                }
            }
        });
    });
});
 </script>

 <script>
          
$(document).ready(function() {
  $('#username').on('input', function() {
    var username = $(this).val();
    if (username != '') {
      $.ajax({
        url: "<?=base_url('user/get_user_wing'); ?>",
        method: "POST",
        data: {username: username},
        dataType: "json",
        success: function(data) {
          if (data.left_user && data.right_user) {
            $('#left').val(data.left_user);
            $('#right').val(data.right_user);
            $('#center').val(username);
            $('#name').val(data.name);

          } else {
            $('#left').val('');
            $('#right').val('');
            $('#center').val('');
            $('#name').val('');

          }
        }
      });
    } else {
      $('#left').val('');
      $('#right').val('');
      $('#center').val('');
      $('#name').val('');

    }
  });
});

</script>

<script>
  var form = document.querySelector('#myForm');
  var submitBtn = document.querySelector('#submitBtn');

  if (submitBtn) {
    form.addEventListener('submit', function(event) {
      event.preventDefault(); // prevent the form from submitting
     
      Swal.fire({
       title: 'Are you sure?',
       text: "You want to activate your account!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, activate it!',
       customClass: {
          confirmButton: 'btn btn-primary me-3 waves-effect waves-light',
         cancelButton: 'btn btn-label-secondary waves-effect'
       },
        buttonsStyling: false
      }).then(function(result) {
        if (result.value) {
        submitBtn.innerHTML = 'Activating...';

          // submit the form after the confirmation dialog is closed
          setTimeout(function() {
            form.submit();
          }, 500); // wait for 10 seconds before submitting
        } else {
          // change button text back to "Submit" if user cancels
          submitBtn.innerHTML = 'activate account';
        }
      });
    });
  }
</script>




<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>
function edit_products(id, product_name, description, status) {
    $("#editproductsname").val(product_name);
    $("#editdescription").val(description);
    $("#editstatus").val(status);
    $("#product_id").val(id);
    $("#editproducts").modal("show");
}

$(document).ready(function() {
  var dataTable;

  // Add event listeners to input elements
  $('#filter-username').on('input', applyFilters);
  $('#filter-from-date').on('change', applyFilters);
  $('#filter-to-date').on('change', applyFilters);

  function applyFilters() {
    if (dataTable) {
      dataTable.destroy(); // Destroy the existing DataTable instance
    }

    dataTable = $('#example3').DataTable();

    var filterUsername = $('#filter-username').val().toLowerCase();
    var filterFromDate = $('#filter-from-date').val();
    var filterToDate = $('#filter-to-date').val();

    dataTable.column(2).search(filterUsername, true, false, true); // Filter by Username

    dataTable.column(6).search('', true, false); // Clear previous date search

    if (filterFromDate && filterToDate) {
      var fromDate = moment(filterFromDate, 'YYYY-MM-DD');
      var toDate = moment(filterToDate, 'YYYY-MM-DD');

      if (fromDate.isValid() && toDate.isValid()) {
        $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
          var date = moment(data[6], 'YYYY-MM-DD', true); // Assuming the date format is 'yyyy-mm-dd'

          if (date.isValid() && date.isBetween(fromDate, toDate, null, '[]')) {
            return true;
          }

          return false;
        });
      }
    }

    dataTable.draw(); // Redraw the table with applied filters

    $.fn.dataTable.ext.search.pop(); // Remove the custom search function
  }
});

</script>

<script>
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>