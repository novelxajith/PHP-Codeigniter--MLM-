<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<?php include 'header.php';?>
<style>
   .col-sm-12 {
   overflow: auto;
   }
</style>
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row mt-3">
      <div class="col-12">
         <div class="card">
            <h5 class="card-header">Active Users-Right</h5>
            <div class="card-body">
                 <form action="<?=BASEURL?>admin/right_active" method="POST">
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
                
               <div class="card-datatable table-responsive pt-0">
                   <?php //print_r($filteredRightTeam); ?>
                  <table id="example" class="datatables-basic table table-bordered dataTable no-footer" style="width:100%"><button class="btn btn-primary w-md m-2" id="download-btn">Download as Excel</button>
                     
                     <thead>
                        <tr>
                           <th class="text-center"> S.no </th>
                           <th class="text-center">Wing</th>
                           <th class="text-center">User ID</th>
                           <th class="text-center">Username</th>
                           <th class="text-center">Ref ID</th>
                           <th class="text-center">Plus Pack</th>
                           <th class="text-center">Prime Pack</th>
                           <th class="text-center">Activated On</th>
                        </tr>
                     </thead>
                     <tbody>
                          <?php  ?>
                                 
                        <?php
                           $count=1;
                           
                           
                           foreach($right_team as  $hist){
                               
                               $active_users = $this->db->where('username',$hist['child_id'])->get('user_role')->row_array();
                              if($active_users['status']=="Active"){
                                  
                           ?>
                        <tr>
                           <td class="text-center"><?=$count++?></td>
                           <?php if($active_users['user_type'] == "u"){
                               $wing="Wing 1";
                           } else if($active_users['user_type']=="sub" && $active_users['position']=="left"){
                               $wing="Wing 2";
                           }else if($active_users['user_type']=="sub" && $active_users['position']=="right"){
                               $wing="Wing 3";
                           }
                           ?>
                           <td class="text-center"><?=$wing?></td>
                           <td class="text-center"><?=$hist['child_id']?></td>
                           <td class="text-center"><?=$active_users['first_name']?> <?=$active_users['last_name']?></td>
                        <td class="text-center"><?=$active_users['ref_id']?></td>
                           <td class="text-center"><?=$active_users['plus_deposit']?></td>
                           <td class="text-center"><?=$active_users['prime_deposit']?></td>
                           <td class="text-center"><?=$active_users['activated_date'] ? date('Y-m-d h:i A', strtotime($active_users['activated_date'])) : ''?></td>
                        </tr>
                        <?php } } ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- end col -->
   </div>
   <!-- end row -->
</div>
<?php include 'footer.php';?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!-- SheetJS (XLSX) -->
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

<!-- FileSaver.js -->
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
    // hide the column you don't need in the Excel sheet
    table.column(4).visible(false);

    // get DataTable data without the excluded column
    var data = table.rows().data().toArray().map(function (row) {
      return row.slice(0, 6).concat(row.slice(6)); // exclude 5th column
    });


    // add column headings to data array
    var headings = ['S.no','Wing', 'User ID', 'Username', 'Ref ID', 'Plus Pack','Prime Pack','Activated On'];
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
