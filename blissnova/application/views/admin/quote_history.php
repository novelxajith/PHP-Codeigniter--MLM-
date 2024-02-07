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
  a.nav-link.waves-effect.waves-light {
    font-size: 13px!important;
}

   ul.nav.nav-pills.mb-3 {
   display: flex;
   justify-content: space-evenly;
   }

ul.nav.nav-pills.flex-sm-row.mb-4 {
    overflow: auto;
}

</style>
<!-- Page CSS -->
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/page-profile.css" />
<div class="container-xxl flex-grow-1 container-p-y">
  
         <div class="row mt-3">
            <div class="col-12">
               <div class="card">
                  <h5 class="card-header">Quotes  History </h5>
                  <div class="card-datatable table-responsive pt-0">
                     <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                        <thead>
                             <?php $quot=$this->db->get('quotes')->result_array();?>
                           <tr>
                              <th>#</th>
                              <th>Quote</th>
                              <th>Quoted Date</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($quot as $row) { ?>
                            <tr>
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['note']; ?></td>
                                <td><?= $row['entry_date']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <!-- end col -->
         </div>
     
</div>
<!-- / Content -->
<?php include 'footer.php';?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
   $(document).ready(function () {
   $('#example').DataTable();
   });
</script>