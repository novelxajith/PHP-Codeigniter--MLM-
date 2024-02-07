


<!-- Vendors CSS -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/flatpickr/flatpickr.css" />

<?php include 'header.php';?>

<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.css" />
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
                                    <form action="<?=BASEURL?>admin/activation" method="post" id="myForm"> 
                                       <div class="card-body">
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" placeholder="UserId" id="username"  oninput="this.value = this.value.toUpperCase()">
                                        <input type="hidden" class="form-control" placeholder="UserId" id="username" name="admin" value="<?=$this->session->userdata('ablisusername')?>" >
                                        <label for="exampleFormControlInput1"> User Id</label>
                                      </div><div id="all"></div>
                                        
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" id="name" placeholder="" readonly="true">
                                        
                                       
                                        <label for="exampleFormControlInput1"> User name</label>
                                      </div><input type="hidden"  name="activated_by" value="<?=$this->session->userdata('ablisusername')?>">
                                     
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
                                        
                                          <!--<button type="submit" id="submitBtn" class="btn btn-primary w-md">Activate Account</button>-->
                                          <p>Under Maintenance Try again Later</p>
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
                                               
                                             <table id="example" class="datatables-basic table table-bordered" style="width:100%"><button class="btn btn-primary w-md m-2" id="download-btn">Download as Excel</button>
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
												    $history = $this->db->where('activated_by',$this->session->userdata('ablisusername'))->get('pin')->result_array();
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
                
                    
                    
<?php include 'footer.php';?>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>


<!-- SheetJS (XLSX) -->
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

<!-- FileSaver.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>


<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5'
        ]
    });
});
</script>




<script src="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
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
  var table = $('#example').DataTable();

  $('#download-btn').on('click', function () {
    // hide the column you don't need in the Excel sheet
    table.column(4).visible(false);

    // get DataTable data without the excluded column
    var data = table.rows().data().toArray().map(function (row) {
      return row.slice(0, 4).concat(row.slice(5)); // exclude 5th column
    });

    // add column headings to data array
    var headings = ['S.no', 'Activated date', 'User ID', 'Name', 'PIN'];
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

    // show the hidden column again
    table.column(4).visible(true);
  });
});
</script>











