
<?php include 'header.php';?>
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">-->

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.4.1/css/dataTables.dateTime.min.css">






<style>
   .col-sm-12 {
   overflow: auto;
   }
</style>
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row mt-3">
   <div class="col-12">
      <div class="card">
         <h5 class="card-header">PIN History</h5>
         <div class="card-body">
             <form action="<?=BASEURL?>admin/viewmore/<?=$user_id_detail?>" method="POST">
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
               
               <table id="example" class="datatables-basic table table-bordered dataTable no-footer" style="width:100%">
                  <thead>
                     <tr>
                        <th>S.no</th>
                        <th>Activated date</th>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>PIN Type</th>
                        <th>PIN</th>
                        <th>PIN Status</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        $count = 1;
                        
                        foreach ($history as $key => $hist) {
                           ?>
                     <tr>
                        <td><?=$count++?></td>
                        <td><?=date('M-d-Y',strtotime($hist['entry_date']))?></td>
                        <td><?=$hist['username']?></td>
                        <?php $name = $this->db->select('first_name')->where('username',$hist['username'])->get('user_role')->row()->first_name; ?>                                
                        <td><?=$name?></td>
                        <td><?=$hist['type']?></td>
                        <td><span class="badge bg-primary"><?=$hist['pin']?></span></td>
                        <td><?=$hist['status']?></td>
                     </tr>
                     <?php 
                     } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php include 'footer.php';?>

<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>-->
<!--<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>-->


<!--<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.flash.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>-->
<!--<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>-->


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.4.1/js/dataTables.dateTime.min.js"></script>


<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>


<script>
    var minDate, maxDate;
 
// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date( data[4] );
 
        if (
            ( min === null && max === null ) ||
            ( min === null && date <= max ) ||
            ( min <= date   && max === null ) ||
            ( min <= date   && date <= max )
        ) {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'MMMM Do YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'MMMM Do YYYY'
    });
 
    // DataTables initialisation
    var table = $('#example').DataTable();
 
    // Refilter the table
    $('#min, #max').on('change', function () {
        table.draw();
    });
});
</script>


<script>
//   $(document).ready(function () {
//     var minDate, maxDate;

//     // Custom filtering function which will search data in column two between two values
//     $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
//       var min = minDate.selectedDates[0];
//       var max = maxDate.selectedDates[0];
//       var date = new Date(data[2]);

//       if ((min === null || min <= date) && (max === null || max >= date)) {
//         return true;
//       }
//       return false;
//     });

//     // Create date inputs
//     minDate = flatpickr('#min', {
//       dateFormat: 'M-d-Y'
//     });
//     maxDate = flatpickr('#max', {
//       dateFormat: 'M-d-Y'
//     });

//     // DataTables initialization
//     var table = $('#example').DataTable({
//       dom: 'Bfrtip',
//       buttons: [
//         {
//           extend: 'excel',
//           className: 'btn btn-primary w-md waves-effect waves-light'
//         }
//       ]
//     });

//     // Refilter the table
//     $('#min, #max').change(function () {
//       table.draw();
//     });

//     // Apply initial date range filter (show all data initially)
//     $.fn.dataTable.ext.search.pop();
//     table.draw();
//   });
</script>

