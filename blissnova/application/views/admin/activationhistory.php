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
            <h5 class="card-header">User PIN History</h5>
            <div class="card-body">
               <div class="card-datatable table-responsive pt-0">
                  
                  <div class="card-body">
                    <h4 class="card-title mb-0">User Management</h4>
            <form action="<?=BASEURL?>admin/activationhistory" method="POST">
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
                  
                  <table id="example" class="datatables-basic table table-bordered dataTable no-footer" style="width:100%"><button class="btn btn-primary w-md m-2" id="download-btn">Download as Excel</button>
                     <thead>
                        <tr>
                           <th class="text-center"> S.no </th>
                           <th class="text-center">User ID</th>
                            <th class="text-center">Username</th>
                           <th class="text-center">Prime PIN Count</th>
                           <th class="text-center">Plus PIN Count</th>
                           <th class="text-center">Prime Activate</th>
                           <th class="text-center">Plus Activate</th>
                           <th class="text-center">View</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           $count=1;
                           
                           foreach($history as $key => $hist){
                               
                               $primecount=$this->db->where('username',$hist['username'])->where('type','Prime')->count_all_results('e_pin')+0;
                               $pluscount=$this->db->where('username',$hist['username'])->where('type','Plus')->count_all_results('e_pin')+0;
                               
                               $primeactivation=$this->db->where('username',$hist['username'])->where('type','Prime')->where('status','Used')->count_all_results('e_pin')+0;
                               $plusactivation=$this->db->where('username',$hist['username'])->where('type','Plus')->where('status','Used')->count_all_results('e_pin')+0;
                               
                               
                           ?>
                        <tr>
                           <td class="text-center"><?=$count++?></td>
                           <td class="text-center"><?=$hist['username']?></td>
                           <td class="text-center"><?=$hist['first_name']?> <?=$hist['last_name']?></td>
                           <td class="text-center"><?=$primecount?></td>
                           <td class="text-center"><?=$pluscount?></td>
                           <td class="text-center"><?=$primeactivation?></td>
                           <td class="text-center"><?=$plusactivation?></td>
                           <td>
                               <a href="<?=BASEURL?>admin/viewmore/<?=$hist['username']?>" class="badge bg-primary rounded-pill ms-auto">More details</a>
                               
                           </td>
                           
                        </tr>
                        <?php } ?>
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


<!-- SheetJS (XLSX) -->
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

<!-- FileSaver.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>


<script>
$(document).ready(function () {
  var table = $('#example').DataTable();

  $('#download-btn').on('click', function () {
    // hide the column you don't need in the Excel sheet
    table.column(7).visible(false);

    // get DataTable data without the excluded column
    var data = table.rows().data().toArray().map(function (row) {
      return row.slice(0, 7).concat(row.slice(8)); // exclude 8th column
    });

    var headings = ['S.no', 'User ID', 'Username', 'Prime PIN Count', 'Plus PIN Count', 'Prime Activate', 'Plus Activate'];
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
    table.column(7).visible(true);
  });
});
</script>


