
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
a.downloadpdf {
    font-size: 12px;
    color: white;
    margin-left: 9px;
    font-weight: bold;
}
</style>

  <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row  d-flex justify-content-center">
                              <div class="col-lg-8">
                                 <div class="card">
                                     <h5 class="card-header">Announcement</h5>
                                  <form action="<?=BASEURL?>admin/announcement" method="post" id="myForm" enctype="multipart/form-data">
                                       <div class="card-body">
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" placeholder="Enter the Title" name="title" value="" ><?=form_error('title')?>
                                        <label for="exampleFormControlInput1">Announcement Title</label>
                                      </div>
                                        <div class="form-floating form-floating-outline mb-4">
                                       <input class="form-control" type="file" id="formFile" name="userfile" accept=".pdf">
                                        <label for="exampleFormControlInput1">Upload Announcement </label>
                                      </div>
                                      
                                           <div class="form-floating form-floating-outline mb-4">
                                               <select class="form-select" name="view_for" id="exampleFormControlSelect1" aria-label="Default select example">
                                                  <option value="">Select </option>
                                                  <option value="Staff" id="Staff">Staff</option>
                                                  <option value="Verification officer" id="Verification officer">Verification officer</option>
                                                  <option value="Accountant" id="Accountant">Accountant</option>
                                               </select>
                                               <label for="view_for">To</label><?=form_error('view_for');?>
                                            </div>

                                          <button type="submit" id="submitBtn" class="btn btn-primary w-md">Upload</button>
                                       </div>
                                   </form> 
                                    </div>
                                 </div>
                              </div>


                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="card">
                                   
                                              <h5 class="card-header">Announcement History</h5>
                                             <div class="card-datatable table-responsive pt-0">
                                               
                                             <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                                             <thead>
                                                  <tr>
                                                     <th class='text-center'> S.no </th>
                                                     <th class='text-center'>Announcement date</th>
                                                     <th class='text-center'>Announcement Title</th>
                                                     <th class='text-center'>Announcement To</th>
                                                     <th class='text-center'>Announcement Pdf</th>
                                                  </tr>
                                               </thead>
                                               <tbody>
                                            <?php
												    $count=1;
												    $history = $this->db->get('announcement')->result_array();
												    foreach($history as $key => $hist){
												    ?>
                                                  <tr>
                                                     <td class='text-center'><?=$count++?></td>
                                                     <td class='text-center'><?=date('d-m-Y h:i A',strtotime($hist['entry_date']))?></td>
                                                     <td class='text-center'><?=$hist['title']?></td>
                                                      <td class='text-center'><?=$hist['view_for']?></td>
                                                  <td class='text-center'>
                                                                    <button class="btn btn-primary w-md waves-effect waves-light">
                                                                      <i class="fa fa-download"></i>
                                                                      <a class="downloadpdf" href="<?=BASEURL?>assets/announcement/<?=$hist['pdf'];?>" target="_blank">
                                                                        <?=$hist['pdf'];?>
                                                                      </a>
                                                                    </button>



                                                        </td>
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
<script>
$(document).ready(function() {
  // check if session message is set
  <?php if ($this->session->flashdata('error_message')): ?>
        Swal.fire({
           icon: 'error',
            title: 'Error!',
            text: '<?= $this->session->flashdata('error_message') ?>',
            customClass: {
              confirmButton: 'btn btn-success waves-effect'
            }
          });
  
     
  <?php endif; ?>
});

</script>

<?php    $this->session->unset_userdata('error_message');?>

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
if ($this->session->flashdata('error_message')): ?>
             Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '<?= $this->session->flashdata('error_message') ?>',
            customClass: {
              confirmButton: 'btn btn-danger waves-effect'
            }
          });
  
?>
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
       text: "You want to upload your announcement!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, upload it!',
       customClass: {
          confirmButton: 'btn btn-primary me-3 waves-effect waves-light',
         cancelButton: 'btn btn-label-secondary waves-effect'
       },
        buttonsStyling: false
      }).then(function(result) {
        if (result.value) {
        submitBtn.innerHTML = 'uploading...';

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