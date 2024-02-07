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
   .tablebutton{
   display:flex;   
   }

</style>
<div class="container-xxl flex-grow-1 container-p-y">
    
  
   <div class="row">
      <div class="col-12">
         <div class="card">
            <h5 class="card-header">Bliss ID verification</h5>
           
            <div class="card-datatable table-responsive pt-0">
               <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Customer ID</th>
                        <th>Entry date</th>
                        <th>Accepted date</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
            <?php 
                  $count=1;
                  $blisser = $this->db->where('bliss_id',$this->session->userdata('ublisusername'))->get('blisser_verification')->result_array();
                  foreach($blisser as $key => $bliss){
                   ?>
                     <tr>
                    <td><?=$count++?></td>
                    <td><?=$bliss['bliss_id']?></td>
                    <td><p><?=date('d/m/Y h:i:A',strtotime($bliss['entry_date']))?></p></td>
                    <td><?php if($bliss['accepted_date'] != NULL) { ?><p><?=date('d/m/Y h:i:A',strtotime($bliss['accepted_date']))?></p> <?php }else{ echo '--'; } ?></td>
                    <td>
                        <?php if($bliss['status'] == 'Request'){ ?>
                        <div class="tablebtn d-flex">
                        
                           <div class="m-1"><a onclick="showAcceptAlert(event, '<?=BASEURL?>user/bliss_accept/<?=$bliss['id']?>')" href="#"  class="btn btn-success waves-effect waves-light" id="sa-warning">Accept</a></div>
                           <div class="m-1"><a onclick="showRejectAlert(event, '<?=BASEURL?>user/bliss_reject/<?=$bliss['id']?>')" href="#" class="btn btn-danger waves-effect waves-light" id="ajax-alert">Reject</a></div>
                        
                        </div>
                        <?php }else{ ?>
                            <?=$bliss['status']?>
                        <?php } ?>
                    </td>
                    
                     </tr>
                <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <!-- end col -->
   </div>
   <!-- end row -->

     
   <!-- end row -->
</div>
<?php include 'footer.php';?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

  <!--<script src="<?=BASEURL?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.3/dist/sweetalert2.all.min.js"></script>
  <!-- SheetJS (XLSX) -->
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

<!-- FileSaver.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

   <script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
  </script>
  <script>
$(document).ready(function() {
  // check if session message is set
  <?php if ($this->session->flashdata('approve_message')): ?>
    Swal.fire({
      title: 'Success!',
      text: '<?= $this->session->flashdata('approve_message') ?>',
      icon: 'success'
    });
  <?php elseif ($this->session->flashdata('reject_message')): ?>
    Swal.fire({
      title: 'Rejected!',
      text: '<?= $this->session->flashdata('reject_message') ?>',
      icon: 'error',
      confirmButtonColor: '#d33'
    });
  <?php endif; ?>
});


  </script>
<script>
function showAcceptAlert(event, link) {
  event.preventDefault(); // prevent the default link behavior

  Swal.fire({
    title: 'Are you sure?',
    text: 'You are about to accept this action.',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, accept it!',
    confirmButtonColor: '#72e128',
    cancelButtonText: 'No',
    cancelButtonColor: '#d33'
  }).then((result) => {
    if (result.isConfirmed) {
      // User clicked the "Accept" button
      // Handle the accept action here
      window.location.href = link; // redirect the user to the link
      
    }
  });
}

function showRejectAlert(event, link) {
  event.preventDefault(); // prevent the default link behavior

  Swal.fire({
    title: 'Reject Action',
    text: 'Please provide a reason for rejecting this action:',
    input: 'text',
    inputPlaceholder: 'Enter reason here...',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Reject',
    confirmButtonColor: '#72e128',
    cancelButtonColor: '#d33'
  }).then((result) => {
    if (result.isConfirmed) {
      // User clicked the "Reject" button
      const reason = result.value;
      // Handle the reject action and reason here
      window.location.href = `${link}?reason=${encodeURIComponent(reason)}`; // redirect the user to the link with the reason parameter
    }
  })
}
</script>
<script>
   $(document).ready(function () {
   $('#example').DataTable();
   });
</script>
<script>
   $(document).ready(function () {
   $('#example2').DataTable();
   });
</script>

<script>
$(document).ready(function () {
  var table = $('#example2').DataTable();

  $('#download-btn').on('click', function () {
    // hide the column you don't need in the Excel sheet
    table.column(6).visible(false);

    // get DataTable data without the excluded column
    var data = table.rows().data().toArray().map(function (row) {
      return row.slice(0, 6).concat(row.slice(7)); // exclude 7th column
    });

    // add column headings to data array
    var headings = ['#', 'Date&Time', 'User ID', 'User Name', 'Pan No', 'Aadhar No', 'remark','status', 'Verified by'];
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
    table.column(6).visible(true);
  });
});
</script>



<?php  $this->session->unset_userdata('approve_message');
 $this->session->unset_userdata('reject_message');?>