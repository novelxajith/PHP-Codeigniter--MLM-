
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
 <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<style>
    div#example_wrapper {
    margin: 20px;
}
.col-sm-12 {
    overflow: auto;
}
</style>



  <div class="container-xxl flex-grow-1 container-p-y">
      
          <div class="row">
          <div class="col-lg-12">
             <div class="card">
                 
                 <div class="card-body">
                    <h4 class="card-title mb-0">User Management</h4>
                     <form action="<?=BASEURL?>admin/usercredential" method="POST">
            <div class="row mt-2 d-flex justify-content-center">
                  <div class="col-lg-4">
                     <label for="searchInput">From:</label>
                     <input class="form-control" type="date"  name="min" id="from" placeholder="Enter search term...">
                     <input class="form-control" type="hidden"  name="filter" value="filter">
                  </div>
                  <div class="col-lg-4">
                     <label for="searchInput">To:</label>
                     <input class="form-control" type="date" name="max" id="to" placeholder="Enter search term...">
                  </div>
                  <div class="col-lg-4">
                       <label for="searchInput">Search</label>
                     <button type="submit" class="form-control">Submit</button>
                  </div>
                  
               </div>
               </form>
                </div>
                 <!--<table id="example" class="table" style="width:100%">-->
                      <table id="example" class="table" style="width:100%" ><button class="btn btn-primary w-md m-2" id="download-btn">Download as Excel</button>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>User Id</th>
                <th>Password</th>
                <th>joining Date</th>
                <th>KYC Status</th>
                <th>Pincode</th>
                <th>Employment Status</th>
                <th>Mobile</th>
                <th>Mail</th>
                <th>Pincode</th>
                <th>View</th>
               

            </tr>
        </thead>
        <tbody>
    <?php 
          $count=1;
          foreach($user_details as $key => $user){ ?>
            <tr>
            <td><?=$count++?></td>
            <td><?=$user['first_name']?> <?=$user['last_name']?></th>
            <td><?=$user['username']?></td>
            <td><?=$user['pwd_hint']?></td>
            <td><?=$user['entry_date']?></th>
            <?php $kyc_status=$this->db->where('username',$user['username'])->get('user_role')->row_array();
                  ($kyc_status['aadhar_no'] !="" && $kyc_status['pan_no'] !="")? $status="Active" : $status="Inactive";
            ?>
            <td><?=$status?></th>
            <td><?=$user['pincode']?></th>
            <td><?=$user['employment']?></th>
            <td><?=$user['mobile']?></th>
            <td><?=$user['email']?></th>
            <td><?=$user['pincode']?></td>
            
           
           <td> 
           <a href="<?=BASEURL?>admin/userview_page/<?=$user['username']?>"><button type="button" class="btn btn-primary btn-sm" fdprocessedid="60z5ko">view</button></a>
           </td>
                                            
        </tr>
        
      <?php } ?>       
        </tbody>

    </table>
             </div>
          </div>
      </div>
            </div>


      
<?php include 'footer.php';?>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
<script>
   $(document).ready(function () {
    $('#example').DataTable();
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
    // Exclude the 11th column from the DataTable
    table.column(11).visible(false);

    // Get DataTable data without the excluded column
    var data = table.rows().data().toArray().map(function (row) {
      return row.slice(0, 11); // Exclude the 11th column
    });

    // Add column headings to data array
    var headings = ['S.no', 'Name', 'User Id', 'Password', 'Joining Date', 'KYC Status', 'Pincode', 'Employment Status', 'Mobile', 'Mail','Pincode'];
    data.unshift(headings);

    // Create new Excel workbook and sheet
    var workbook = XLSX.utils.book_new();
    var sheet = XLSX.utils.json_to_sheet(data);

    // Add sheet to workbook
    XLSX.utils.book_append_sheet(workbook, sheet, 'Sheet1');

    // Download workbook as Excel file
    var filename = 'datatable.xlsx';
    var wbout = XLSX.write(workbook, { bookType: 'xlsx', type: 'array' });
    saveAs(new Blob([wbout], { type: 'application/octet-stream' }), filename);

    // Show the hidden column again
    table.column(11).visible(true);
  });
});
</script>

 