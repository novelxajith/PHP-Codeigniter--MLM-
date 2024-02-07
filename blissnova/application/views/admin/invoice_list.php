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
                                   
                                              <h5 class="card-header">Invoice List</h5>
                                             <div class="card-datatable table-responsive pt-0">
                                               
                                             <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                                             <thead>
                                                  <tr>
                                                     <th>Sl No</th>
                                                     <th>User ID</th>
                                                     <th>Username</th>
                                                     <th>Purchase</th>  
                                                     <th>Date</th>
                                                     <th>Product Price</th>
                                                     <th>invoice</th>
                                                     <th>view</th>
                                                  </tr>
                                               </thead>
                                               <tbody>
                        <?php $invoice_list=$this->db->get('invoice')->result_array();
                          $count=1;
                          foreach($invoice_list as $key=>$invoice){ ?>
                                                  <tr>
                                                     <td><?=$count++?></td>
                                                     <td><?=$invoice['username']?></td>
                                                      <?php $namee=$this->db->where('username',$invoice['username'])->get('user_role')->row_array(); ?>
                                                      <td><?=$namee['first_name']?> <?=$namee['last_name']?></td>
                                                     <td><?=$invoice['pack']?></td>
                                                     <td><?=date("Y-m-d",strtotime($invoice['entry_date']))?></td>
                                                     <td><?=$invoice['value']?></td>
                                                     <td><?=$invoice['invoice_no']?></td>
                                                     <td><a href="<?=BASEURL?>admin/invoice/<?=$invoice['id']?>"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light" fdprocessedid="60z5ko">view</button></a></td>
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





<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>