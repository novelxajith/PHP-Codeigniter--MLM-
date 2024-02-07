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
            <h5 class="card-header">Pin Request</h5>
            <div class="card-body">
        
                 
                  <div class="row">
              
                     <div class="col-lg-4">
                         <form method="post" accept-charset="utf-8" enctype="multipart/form-data" action="<?=BASEURL?>admin/pinrequest" id="myForm">

                        <div class="form-floating form-floating-outline mb-4">
                           <select class="form-select" aria-label="Default select example"  id="dropdown-value" name="pack">
                              <option selected="">Package</option>
                              <option value="1100">1100 plus member</option>
                              <option value="10000">10000 prime member</option>
                           </select>
                           <?php echo form_error('pack'); ?>
                           <label for="exampleFormControlSelect1">Select Package</label>
                        </div>
                       
                        <div class="form-floating form-floating-outline mb-4">
                           <input type="text" class="form-control"  placeholder="Enter Your Pin Quantity" id="input-value" name="count">
                           <?php echo form_error('count'); ?>
                           <label for="exampleFormControlInput1">Enter Your Pin Quantity</label>
                        </div>
                         <div class="form-floating form-floating-outline mb-4">
                           <input type="text" class="form-control"  placeholder="Enter User ID" id="username" name="username" oninput="this.value = this.value.toUpperCase()">
                           <?php echo form_error('username'); ?>
                           <label for="exampleFormControlInput1">Enter user ID</label>
                        </div><div id="all"></div>
                        <div class="form-floating form-floating-outline mb-4">
                           <input type="text" class="form-control"  placeholder="Enter User ID" id="name" name="username" >
                           <?php echo form_error('username'); ?>
                           <label for="exampleFormControlInput1">Username</label>
                        </div>
                        <button type="submit" id="submitBtn" class="btn btn-primary w-md">Submit</button>
                    </form>
                     </div>
                      
                      
                     <!--<div class="col-lg-8">-->
                     <!--   <div class="row">-->
                     <!--      <div class="col-lg-12 " id="bank" style="display:none;">-->
                     <!--         <div class="col-md mt-1">-->
                     <!--            <div class="card bg-primary text-white mb-3">-->
                     <!--               <div class="row g-0">-->
                     <!--                  <div class="col-md-8">-->
                     <!--                     <div class="card-body">-->
                     <!--                        <h5 class="card-title text-white">Bank Details</h5>-->
                     <!--                        <div class="row m-3">-->
                     <!--                           <div class="col-12 mt-1">-->
                     <!--                              <h6 class="font-size-15 text-white"><span>BANK NAME:Canara Bank</span><i class="fa fa-copy ml-3 m-2 copy-icon"></i></h6>-->
                     <!--                           </div>-->
                     <!--                           <div class="col-12 mt-1">-->
                     <!--                              <h6 class="font-size-15 text-white"><span>ACCOUNT NAME:Nitheesh.S</span><i class="fa fa-copy ml-3 m-2  copy-icon"></i></h6>-->
                     <!--                           </div>-->
                     <!--                           <div class="col-12 mt-1">-->
                     <!--                              <h6 class="font-size-15 text-white"><span>ACCOUNT NO:785674185</span><i class="fa fa-copy ml-3 m-2 copy-icon"></i></h6>-->
                     <!--                           </div>-->
                     <!--                           <div class="col-12 mt-1">-->
                     <!--                              <h6 class="font-size-15 text-white"><span>IFSC CODE:78952</span><i class="fa fa-copy ml-3 m-2 copy-icon"></i></h6>-->
                     <!--                           </div>-->
                     <!--                        </div>-->
                     <!--                     </div>-->
                     <!--                  </div>-->
                     <!--                  <div class="col-md-4">-->
                     <!--                     <img class="card-img card-img-right" src="<?=BASEURL?>assets/images/Bank.svg" alt="Card image">-->
                     <!--                  </div>-->
                     <!--               </div>-->
                     <!--            </div>-->
                     <!--         </div>-->
                     <!--      </div>-->
                     <!--      <div class="col-lg-12 " id="upi" style="display:none;">-->
                     <!--         <div class="card bg-primary text-white mb-3 mt-2">-->
                     <!--            <div class="row g-0 mt-1">-->
                     <!--               <div class="col-md-8 justify-content-center">-->
                     <!--                  <h5 class="card-title text-white m-2">UPI Details</h5>-->
                     <!--                  <div class="card-body d-flex justify-content-center ">-->
                     <!--                     <img src="<?=BASEURL?>assets/images/upi.png" style="width:150px;" id="pic">-->
                     <!--                  </div>-->
                     <!--                  <div class="col-12 mt-1">-->
                     <!--                     <h6 class="font-size-15 text-white d-flex justify-content-center "><span>UPI:blissnova@okicici</span><i class="fa fa-copy ml-3 m-2 copy-icon"></i></h6>-->
                     <!--                  </div>-->
                     <!--               </div>-->
                     <!--               <div class="col-md-4 d-flex justify-content-center">-->
                     <!--                  <img class="card-img card-img-right" src="<?=BASEURL?>assets/images/Bank1.svg" style="width:150px;"  alt="Card image">-->
                     <!--               </div>-->
                     <!--            </div>-->
                     <!--         </div>-->
                     <!--      </div>-->
                     <!--   </div>-->
                     <!--</div>-->
                     
                     
                  </div>
              
            </div>
         </div>
      </div>
   </div>
   <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card">
            <h5 class="card-header">History</h5>
            <div class="card-datatable table-responsive pt-0">
               <table id="example" class="datatables-basic table table-bordered" style="width:100%"><button class="btn btn-primary w-md m-2" id="download-btn">Download as Excel</button>
                  <thead>
                     <tr>
                        <th>S.no</th>
                        <th>Date</th>
                        <th>Pin Quantity</th>
                        <th>Package</th>
                        <th>view</th>
                    </tr>
                  </thead>
                  <tbody>
    <?php $pin_count=$this->db->group_by('pin_value')->where('generated_by','admin')->get('e_pin')->result_array();
                            $count=1;
                            foreach($pin_count as $key=>$h){ 
                             $pin_value=$this->db->where('pin_value',$h['pin_value'])->count_all_results('e_pin')+0;?>
                     <tr>
                        <td><?=$count++?></td>
                        <td><?=$h['entry_date']?></td>
                        <td><?=$pin_value?></td>
                        <td><?=$h['type']?></td>
                        <td><a href="<?=BASEURL?>admin/pin_history_view/<?=$h['type']?>" <button type="button" class="btn btn-primary btn-sm" fdprocessedid="60z5ko">view</button></a></td>
                     <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
$(document).ready(function() {
  // check if session message is set
  <?php if ($this->session->flashdata('success_message')): ?>
        Swal.fire({
            icon: 'success',
            title: 'Pin!',
            text: 'Pin generated successfully.',
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
<?php 
     $this->session->unset_userdata('error_message');
     $this->session->unset_userdata('success_message');?> 
     
<?php include 'footer.php';?>

 <script>
$(document).ready(function() {
    $('#username').on('input', function() {
        var username = $(this).val();
        $.ajax({
            url: "<?php echo base_url('admin/get_name'); ?>",
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
  var form = document.querySelector('#myForm');
  var submitBtn = document.querySelector('#submitBtn');

  if (submitBtn) {
    form.addEventListener('submit', function(event) {
      event.preventDefault(); // prevent the form from submitting
     
      Swal.fire({
        title: 'Are you sure?',
        text: "You want generate pin!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, Generate it!',
        customClass: {
          confirmButton: 'btn btn-primary me-3 waves-effect waves-light',
          cancelButton: 'btn btn-label-secondary waves-effect'
        },
        buttonsStyling: false
      }).then(function(result) {
        if (result.value) {
        submitBtn.innerHTML = 'Submitting...';

          // submit the form after the confirmation dialog is closed
          setTimeout(function() {
            form.submit();
          }, 1000); // wait for 10 seconds before submitting
        } else {
          // change button text back to "Submit" if user cancels
          submitBtn.innerHTML = 'Submit';
        }
      });
    });
  }
</script>



 <script>
    $('#dropdown-value, #input-value').on('change keyup', function(){
        var inputVal = parseFloat($('#input-value').val());
        var selectVal = parseFloat($('#dropdown-value').val());
        if(inputVal && selectVal){
            var total = inputVal * selectVal;
            $('#result').val(total);
        } else {
            $('#result').val('');
        }
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

 <!-- Vendors JS -->
 <script src="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
 <!-- SheetJS (XLSX) -->
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

<!-- FileSaver.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

<script>
const container = document.querySelector('.drag-drop-container');
const input = document.querySelector('#file-input');

// Prevent default drag behaviors
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
  container.addEventListener(eventName, preventDefaults, false);
});

// Highlight drop zone when item is dragged over
['dragenter', 'dragover'].forEach(eventName => {
  container.addEventListener(eventName, highlight, false);
});

['dragleave', 'drop'].forEach(eventName => {
  container.addEventListener(eventName, unhighlight, false);
});

// Handle dropped files
container.addEventListener('drop', handleDrop, false);

function preventDefaults(e) {
  e.preventDefault();
  e.stopPropagation();
}

function highlight(e) {
  container.classList.add('highlight');
}

function unhighlight(e) {
  container.classList.remove('highlight');
}

function handleDrop(e) {
  const files = e.dataTransfer.files;
  handleFiles(files);
}

function handleFiles(files) {
  for (let i = 0; i < files.length; i++) {
    uploadFile(files[i]); // You can replace this with your own function to handle file uploads
  }
}

function uploadFile(file) {
  // Code to handle file uploads goes here
  console.log(file.name);
}

// Handle file selection from the file input element
input.addEventListener('change', (e) => {
  const files = e.target.files;
  handleFiles(files);
});

   </script>

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


<script>
            $('#select').change(function(){
               var m_category=$(this).val();

               if(m_category == "upi")
               {
                  $("#bank").css("display", "none");
                  $("#upi").css("display", "");
               }
               if(m_category == "bank")
               {
                  $("#upi").css("display", "none");
                  $("#bank").css("display", "");
               }
            });
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
      return row.slice(0, 6).concat(row.slice(6)); // exclude 5th column
    });



    // add column headings to data array
    var headings = ['S.no','Date', 'Pin quantity', 'Package'];
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

