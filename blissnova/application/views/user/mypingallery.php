

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
                                   
                                              <h5 class="card-header">My Pin Gallery</h5>
                                             <div class="card-datatable table-responsive pt-0">
                                               
                                             <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                                              <thead>
                                               <tr>
                                                  <th>#</th>
                                                  <th>Quantity</th>
                                                  <th>Used</th>
                                                  <th>Pin Type</th>
                                                  <th>View</th>
                                               </tr>
                                               </tr>
                                            </thead>
                                            <tbody>
                    <?php $pin_count=$this->db->where('username',$this->session->userdata('ublisusername'))->group_by('pin_value')->get('e_pin')->result_array();
                            $count=1;
                            foreach($pin_count as $key=>$pin){ 
                              $pin_value=$this->db->where('pin_value',$pin['pin_value'])->where('username',$this->session->userdata('ublisusername'))->count_all_results('e_pin')+0;
                              $pin_status=$this->db->where('pin_value',$pin['pin_value'])->where('username',$this->session->userdata('ublisusername'))->where('status','Used')->count_all_results('e_pin')+0;?>
                                               <tr>
                                                  <td><?=$count++?></td>
                                                  <td><?=$pin_value?></td>
                                                  <td><?=$pin_status?></td>
                                            <?php if($pin['pin_value']=='1100'){ ?> <td>Plus</td> <?php } ?>
                                            <?php if($pin['pin_value']=='10000'){ ?> <td>Prime</td> <?php } ?>   
                                            <?php if($pin['pin_value']=='1100'){  $value='Plus'; } 
                                                  if($pin['pin_value']=='10000'){  $value='Prime'; } ?>
                                                  <td><a href="<?=BASEURL?>user/view/<?=$value?>" <button type="button" class="btn btn-primary btn-sm" fdprocessedid="60z5ko">view</button></a></td>
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