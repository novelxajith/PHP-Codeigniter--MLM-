

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
<style>
    .col-sm-12 {
    overflow: auto;
}
</style>
 <div class="container-xxl flex-grow-1 container-p-y">  
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   
                                              <h5 class="card-header">Affiliate incentive</h5>
                                             <div class="card-datatable table-responsive pt-0">
                                <table class="m-3" border="0" cellspacing="5" cellpadding="5">
                                <tbody><tr>
                                    <form action="<?=BASEURL?>admin/affiliate_incentive_filter" method="post">
                                    <td>From date:</td>
                                    <td><input type="date" class="form-control form-control-sm" id="min" name="min"></td>
                                </tr>
                                <tr>
                                    <td>To date:</td>
                                    <td><input type="date" class="form-control form-control-sm" id="max" name="max">
                                    
                                    </td>
                                    <td>
                                        <button type="submit" class="form-control form-control-sm">submit</button>
                                    </td>
                                    </form>
                                </tr>
                            </tbody></table>
                                             <table id="example" class="datatables-basic table table-bordered" style="width:100%"><button class="btn btn-primary w-md m-2" id="download-btn">Download as Excel</button>
                                             <thead>
                                                  <tr>
                                                     <th>#</th>
                                                     <th>Date and Time</th>
                                                     <th>User ID</th>
                                                     <th>User Name</th>
                                                     <th>Pack</th>
                                                    <th>Incentive</th>
                                                     <th>Admin Charge & TDS(10%)</th>
                                                     <th>Net Incentive</th>
                                                  </tr>
                                               </thead>
                     
        
        
                                               <tbody>
                         
                        <?php
                        $count=1;
                        foreach($inc as $i) {
                        ?>                           
                                                  <tr>
                                                     <td><?=$count ++ ?></td>
                                                     <td><?=$i['entry_date'] ?></td>
                                                     <td><?=$i['username'] ?></td>
                                <?php $name=$this->db->where('username',$i['username'])->get('user_role')->row_array(); ?>                     
                                                     <td><?=$name['first_name'] ?></td>
                                                     <td><?=$i['direct_pack'] ?></td>
                                                     <td><?=$i['credit']+($i['admin_charge'] + $i['tds']) ?></td>
                                                     <td><?=$i['admin_charge'] + $i['tds']?></td>
                                                     <td><?=$i['credit'] ?></td>
                                                  </tr>
                                                  <?php } ?>
                                               </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                       
                    </div>
                    
                    
                    
<?php include 'footer.php';?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
    var headings = ['#','Date and Time', 'User ID', 'User Name', 'Pack','Incentive', 'Admin Charge & TDS','Net Incentive'];
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
