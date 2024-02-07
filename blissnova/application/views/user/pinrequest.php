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
/*img.tableimage {*/
/*    width: 100%;*/
/*}*/
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
.gst {
    margin-left: 110px;
    font-size: 12px;
    margin-top: -8px;
    position: absolute;
}
</style>
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row  d-flex justify-content-center">
      <div class="col-lg-12">
         <div class="card">
            <h5 class="card-header">Pin Request</h5>
            <div class="card-body">
           <?php   
               $bank = $this->db->where('user_type','a')->where('id','1')->get('user_role')->row_array();
           ?>
                 
                  <div class="row">
              
                     <div class="col-lg-4">
                         <form method="post" accept-charset="utf-8" enctype="multipart/form-data" action="<?=BASEURL?>user/pinrequest" id="myForm">

                        <div class="form-floating form-floating-outline mb-4">
                           <select class="form-select" aria-label="Default select example"  id="dropdown-value" name="pack">
                              <option selected="">Package</option>
                              <option value="1100">1100 Plus Member</option>
                              <option value="10000">10000 Prime Member</option>
                           </select>
                           <?php echo form_error('pack'); ?>
                           <label for="exampleFormControlSelect1">Select Package</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                           <select class="form-select" id="select" aria-label="Default select example" name="mode">
                              <option selected>Payment Mode</option>
                              <option value="bank">Bank Transfer</option>
                              <option value="upi">UPI</option>
                           </select>
                           <?php echo form_error('mode'); ?>
                           <label for="exampleFormControlSelect1">Payment Mode</label>
                         </div>
                        <div class="form-floating form-floating-outline mb-4">
                           <input type="text" class="form-control"  placeholder="Enter Your Pin Quantity" id="input-value" name="count">
                           <?php echo form_error('count'); ?>
                           <label for="exampleFormControlInput1">Enter Your Pin Quantity</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                        <!--<div id="heads" class="gst"></div>-->
                           <input type="text" class="form-control"  placeholder="Payable Amount" name="amount" id="result" readonly>
                           <?php echo form_error('amount'); ?>
                           <!--<label for="exampleFormControlInput1">Payable Amount</label>-->
                          <label for="exampleFormControlInput1" id="payableAmountLabel">Payable Amount</label>

                        </div>
                        
                        <div class="form-floating form-floating-outline mb-4">
                          <input type="file" class="form-control" id="basic-default-upload-file" name="userfile" required="">
                          <label for="basic-default-upload-file">Transaction receipt </label>
                        </div>

                        <div class="form-floating form-floating-outline mb-4 mt-3">
                           <input type="text" class="form-control" id="ref" name="ref" placeholder="Transaction Id">
                           <?php echo form_error('ref'); ?>
                           <label for="exampleFormControlInput1">Transaction id </label>
                        </div><div id="all" style="color:red;"></div>
                        <button type="submit" id="submitBtn" class="btn btn-primary w-md">Submit</button>
                    </form>
                     </div>
                     
                      
                     <div class="col-lg-8">
                        <div class="row">
                           <div class="col-lg-12 " id="bank" style="display:none;">
                              <div class="col-md mt-1">
                                 <div class="card bg-primary text-white mb-3">
                                    <div class="row g-0">
                                       <div class="col-md-8">
                                          
                                          <div class="card-body">
                                             <h5 class="card-title text-white">Bank Details</h5>
                                             <div class="row m-3">
                                                <div class="col-12 mt-1">
                                                   <h6 class="font-size-15 text-white"><span>BANK NAME : <?=$bank['ac_bank'];?></span><i class="fa fa-copy ml-3 m-2 copy-icon" onclick="copyToClipboard1()"></i></h6>
                                                </div>
                                                <div class="col-12 mt-1">
                                                   <h6 class="font-size-15 text-white"><span>ACCOUNT NAME : <?=$bank['ac_holder_name'];?></span><i class="fa fa-copy ml-3 m-2  copy-icon" onclick="copyToClipboard2()"></i></h6>
                                                </div>
                                                <div class="col-12 mt-1">
                                                    <h6 class="font-size-15 text-white"><span>ACCOUNT NO : <?=$bank['ac_no'];?></span><i class="fa fa-copy ml-3 m-2 copy-icon" onclick="copyToClipboard3()"></i></h6>
                                                </div>
                                                <div class="col-12 mt-1">
                                                   <h6 class="font-size-15 text-white"><span>IFSC CODE : <?=$bank['ac_ifsc'];?></span><i class="fa fa-copy ml-3 m-2 copy-icon" onclick="copyToClipboard4()"></i></h6>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <img class="card-img card-img-right" src="<?=BASEURL?>assets/img/logo/Bank.svg" alt="Card image">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12 " id="upi" style="display:none;">
                              <div class="card bg-primary text-white mb-3 mt-2">
                                 <div class="row g-0 mt-1">
                                    <div class="col-md-8 justify-content-center">
                                       <h5 class="card-title text-white m-2">UPI Details</h5>
                                       <div class="card-body d-flex justify-content-center ">
                                          <img src="<?=BASEURL?>assets/images/<?=$bank['upi_image'];?>" style="width:150px;" id="pic">
                                       </div>
                                       <div class="col-12 mt-1">
                                          <h6 class="font-size-15 text-white d-flex justify-content-center">
                                              <span>UPI:<span id="upi-number"><?=$bank['upi_number'];?></span></span>
                                              <i class="fa fa-copy ml-3 m-2 copy-icon" id="copy-icon"></i>
                                            </h6>
                                       </div>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center">
                                       <img class="card-img card-img-right" src="<?=BASEURL?>assets/img/logo/Bank1.svg" style="width:150px;"  alt="Card image">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     
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
               <table id="example" class="datatables-basic table table-bordered" style="width:100%"> <button class="btn btn-primary w-md m-2" id="download-btn">Download as Excel</button>
                  <thead>
                     <tr>
                        <th>S.no</th>
                        <th>Request date</th>
                        <th>Pin quantity</th>
                        <th>Amount</th>
                        <th>Transaction receipt</th>
                        <th>Transaction ID</th>
                        <th>Approve date</th>
                        <th>Remarks</th>
                        <th>Status</th>
                        <th>Verified&nbspby</th>
                     </tr>
                  </thead>
                  <tbody>
    <?php $his=$this->db->where('username',$this->session->userdata('ublisusername'))->get('investment')->result_array(); 
          $count=1;
    foreach($his as $h) {
    ?>                
                     <tr>
                        <td><?=$count++?></td>
                        <td><?=$h['entry_date']?></td>
                        <td><?=$h['pack_count']?></td>
                        <td><?=$h['amount']?></td>
                        <td class="text-center"><a href="<?= BASEURL ?>assets/reciept/<?= $h['image'] ?>" target="_blank">
                                <img src="<?= BASEURL ?>assets/reciept/<?= $h['image'] ?>" class="tableimage" alt="Avatar" width="50px" height="50px">
                            </a></td>
                        <td><?=$h['ref']?></td>
                        <td><?=$h['approve_date']?></td>
                        <td><?=$h['remark']?></td>
                        <?php if($h['status']=='Request'){ ?>
                       <td><span class="badge bg-warning"><?=$h['status']?></span></td>
                       <?php } ?>
                        <?php if($h['status']=='Accepted'){ ?>
                       <td><span class="badge bg-success"><?=$h['status']?></span></td>
                       <?php } ?>
                        <?php if($h['status']=='Rejected'){ ?>
                       <td><span class="badge bg-danger"><?=$h['status']?></span></td>
                       <?php } ?>
                       
                         <?php if($h['verified_by'] == "Verification officer"){
                            
                            $staffname=$this->db->select('name')->where('username',$h['officer_id'])->get('staff_panel')->row()->name;
                        
                        ?>
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
   </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
$(document).ready(function() {
  // check if session message is set
  <?php if ($this->session->flashdata('success_message')): ?>
        Swal.fire({
            icon: 'success',
            title: 'Payment!',
            text: 'Your Payment Done successfully.',
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

<!--<h6 class="font-size-15 text-white d-flex justify-content-center">-->
<!--  <span>UPI:<span id="upi-number"><?=$bank['upi_number'];?></span></span>-->
<!--  <i class="fa fa-copy ml-3 m-2 copy-icon" id="copy-icon"></i>-->
<!--</h6>-->

<script>
  // Get the copy icon element and the UPI number element
  const copyIcon = document.getElementById('copy-icon');
  const upiNumber = document.getElementById('upi-number');

  // Add click event listener to the copy icon
  copyIcon.addEventListener('click', function() {
    // Create a temporary input element
    const tempInput = document.createElement('input');
    tempInput.value = upiNumber.innerText;
    document.body.appendChild(tempInput);

    // Copy the value to the clipboard
    tempInput.select();
    document.execCommand('copy');

    // Remove the temporary input element
    document.body.removeChild(tempInput);

    // Optionally, provide visual feedback or notify the user
    alert('UPI number copied to clipboard!');
  });
</script>


<?php include 'footer.php';?>


<script>
  var form = document.querySelector('#myForm');
  var submitBtn = document.querySelector('#submitBtn');

  if (submitBtn) {
    form.addEventListener('submit', function(event) {
      event.preventDefault(); // prevent the form from submitting
     
      Swal.fire({
        title: 'Are you sure?',
        text: "You want to Pay the Amount!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, Pay it!',
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
        var payableAmountLabel = document.getElementById('payableAmountLabel');

        if (selectVal === 1100) {
            if(inputVal && selectVal){
                var total = inputVal * selectVal;
                var gst = total*0.18;
                var totall= total+gst;
                var gstt="+GST";
                $('#result').val(totall);
                $('#heads').text(gstt);
                payableAmountLabel.innerText = "Payable Amount + GST";
            } else {
                $('#result').val(selectVal);
                payableAmountLabel.innerText = "Payable Amount + GST";
            }
        }

        if (selectVal === 10000) {
            if(inputVal && selectVal){
                var total = inputVal * selectVal;
                $('#result').val(total);
            } else {
                $('#result').val(selectVal);
            }
        }
    });

    // Get the select element
    var selectElement = document.getElementById('dropdown-value');
    // Get the label element
    var payableAmountLabel = document.getElementById('payableAmountLabel');

    // Add change event listener to the select element
    selectElement.addEventListener('change', function() {
        // Check the selected value
        if (this.value == "10000") {
            // Set the label text to "Payable Amount"
            payableAmountLabel.innerText = "Payable Amount";
        } else if (this.value == "1100") {
            // Set the label text to "Payable Amount + GST"
            payableAmountLabel.innerText = "Payable Amount + GST";
        }
    });
</script>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

 <!-- Vendors JS -->
 <script src="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

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
    table.columns(4).visible(false);

    // get DataTable data without the excluded column
    var data = table.rows().data().toArray().map(function (row) {
      return row.slice(0, 4).concat(row.slice(5)); // exclude 5th column
    });

    // add column headings to data array
    var headings = ['Sl.no','Request date', 'Pin quantity', 'Amount', 'Remarks', 'Transaction ID', 'Approve date', 'Status'];
    data.unshift(headings);

    // create new Excel workbook and sheet
    var workbook = XLSX.utils.book_new();
    var sheet = XLSX.utils.json_to_sheet(data);

    // add sheet to workbook
    XLSX.utils.book_append_sheet(workbook, sheet, 'Sheet1');

    // download workbook as Excel file
    var filename = 'datatable.xlsx';
    var buffer = XLSX.write(workbook, { bookType: 'xlsx', type: 'array' });
    saveAs(new Blob([buffer], { type: 'application/octet-stream' }), filename);

    // show the hidden column again
    table.columns(4).visible(true);
  });
});



$('#download-btn').on('click', function() {
    console.log('Download button clicked!');
    // Rest of the code
});

</script>



 <script>
$(document).ready(function() {
    $('#ref').on('input', function() {
        var pin = $(this).val();
        $.ajax({
            url: "<?php echo base_url('user/pincheck'); ?>",
            type: "POST",
            data: { ref: pin },
            dataType: "json",
            success: function(data) {
                if (data === 'Invalid Transaction Id') {
                    $('#name').val('');
                    $('#all').html(data).show();
                } else {
                    $('#name').val(data);
                    $('#all').hide();
                }
            }
        });
    });
});
</script>
<script>
    function copyToClipboard1() {
        const accountNumber = "<?=$bank['ac_bank'];?>"; // Get the account number from PHP variable
        const tempInput = document.createElement("input");
        tempInput.value = accountNumber;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
        alert("Bank name copied to clipboard: " + accountNumber);
    }
</script>
<script>
    function copyToClipboard2() {
        const accountNumber = "<?=$bank['ac_holder_name'];?>"; // Get the account number from PHP variable
        const tempInput = document.createElement("input");
        tempInput.value = accountNumber;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
        alert("Account holder name copied to clipboard: " + accountNumber);
    }
</script>
<script>
    function copyToClipboard3() {
        const accountNumber = "<?=$bank['ac_no'];?>"; // Get the account number from PHP variable
        const tempInput = document.createElement("input");
        tempInput.value = accountNumber;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
        alert("Account number copied to clipboard: " + accountNumber);
    }
</script>
<script>
    function copyToClipboard4() {
        const accountNumber = "<?=$bank['ac_ifsc'];?>"; // Get the account number from PHP variable
        const tempInput = document.createElement("input");
        tempInput.value = accountNumber;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
        alert("IFSC number copied to clipboard: " + accountNumber);
    }
</script>


