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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" integrity="sha512-pJ6e/mhS7EwuXKQ+6xhBfWQYb7yP6NwBcE8fzFZsVJZuX+kaPLV7O8+NYkjHTvLNOtppDNw1Jd8tOZ2tjK90/g==" crossorigin="anonymous" />
  <style>
    .dropzonenew {
      border: 2px dashed #ccc;
      padding: 20px;
      margin: 20px;
      min-height: 200px;
    }
    .dropzonenew .dz-message {
      font-size: 20px;
    }
  </style>

<style>

   div#example_wrapper {
   margin: 20px;
   }

   .col-sm-12 {
   overflow: auto;
   }
 .font-size-15 {
    font-weight: 500;
    font-size: 13px!important;
}
img.tableimage {
    width: 100%;
}
   p.text-muted.mb-0.text-white {
   font-family: sans-serif;
   font-size: 12px;
   font-weight: bold;
   }
   .col-4 {
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   }
   #pic{
   width:240px;
   }
   @media screen and (max-width:800px) {
   .col-4 {
   display: flex;
   flex-direction: column;
   align-items: flex-start;
   justify-content: center;
   }
   .row.Bank {
   display: flex;
   flex-direction: column;
   }
   }
   h6.font-size-15.text-white.d-flex.justify-content-center {
   display: flex;
   align-items: center;
   justify-content: center;
   }


   .dropzone {
    background: white;
    border-radius: 5px;
    border: 2px dashed rgb(0, 135, 247);
    border-image: none;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}
</style>
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row  d-flex justify-content-center">
      <div class="col-lg-12">
         <div class="card">
            <h5 class="card-header">Payout Configuration</h5>
            <div class="card-body">
              <form action="<?=BASEURL?>admin/payout_configuration" method="post" enctype="multipart/form-data" id="myform">
                  <div class="row justify-content-center">
                     <div class="col-lg-6">
                
                        <div class="form-floating form-floating-outline mb-4">
                           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your TDS " name="tds">
                           <?php echo form_error('tds'); ?>
                           <label for="exampleFormControlInput1">TDS </label>
                        </div>
                     
                        <div class="form-floating form-floating-outline mb-4">
                           <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Admin charges" name="admin_charge">
                            <?php echo form_error('admin_charge'); ?>
                           <label for="exampleFormControlInput1">Admin charges </label>
                        </div>
                      
                        <button type="submit" id="submitbtn" class="btn btn-primary w-md">Update</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
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
                        <th>Updated date and time </th>
                        <th>Admin charges</th>
                        <th>TDS (tax Deducted at source)</th>
                     </tr>
                  </thead>
                  <tbody>
        <?php $deductions=$this->db->get('deduction')->result_array();
              $count=0;
              foreach($deductions as $key=>$deduct){ ?>
                     <tr>
                        <td><?=$count++?></td>
                        <td><?=$deduct['entry_date']?></td>
                        <td><?=$deduct['admin_charge']?></td>
                        <td><?=$deduct['tds']?></td>
                     </tr>
                <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>




<?php include 'footer.php';?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-/f2y6mPtpbuAxVeBvawDJQcVrLyEUDXFbGVoINv8+XnGn9VIbNfNZEa7u0sWwK3s" crossorigin="anonymous"></script>

<script>
  var form = document.querySelector('#myform');
  var submitBtn = document.querySelector('#submitbtn');

  if (submitBtn) {
    form.addEventListener('submit', function(event) {
      event.preventDefault(); // prevent the form from submitting

      Swal.fire({
        title: 'Are you sure?',
        text: "You want to Update the TDS!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, Update it!',
        customClass: {
          confirmButton: 'btn btn-primary me-3 waves-effect waves-light',
          cancelButton: 'btn btn-label-secondary waves-effect'
        },
        buttonsStyling: false
      }).then(function(result) {
        if (result.value) {
          Swal.fire({
            icon: 'success',
            title: 'Update!',
            text: 'Your Update Done successfully.',
            customClass: {
              confirmButton: 'btn btn-success waves-effect'
            }
          });

          // submit the form after the confirmation dialog is closed
          setTimeout(function() {
            form.submit();
          }, 10000); // wait for 10 seconds before submitting
        }
      });
    });
  }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

 <!-- Vendors JS -->
 <script src="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>






