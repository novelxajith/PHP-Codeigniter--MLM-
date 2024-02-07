



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
ul.nav.nav-pills.mb-3 {
    display: flex;
    justify-content: space-evenly;
}
.view {
    display: flex;
    align-items: center;
    justify-content: center;
}
.timeline-header.mb-1 {
    display: flex;
    justify-content: space-between;
}
li.dropdown-notifications-list.scrollable-container.ps {
    list-style-type: none!important;
  }
</style>
  

 <div class="container-xxl flex-grow-1 container-p-y">  
         

                        <div class="row">
                            <div class="col-12">
                            <div class="card"> 
                              <h5 class="card-header">All Announcement</h5>
                               <div class="card-body"> 
                                  <li class="dropdown-notifications-list scrollable-container ps">
                      <ul class="list-group list-group-flush">
                          <?php
                          $annouce=$this->db->order_by('id','DESC')->where('view_for','User')->get('announcement')->result_array();
                          foreach($annouce as $ann){?>
                       <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read waves-effect waves-light">
                         <div class="timeline-event">
                            <div class="timeline-header mb-1 ">
                              <h6 class="mb-0"><?=$ann['title']?></h6>
                              <span class="text-muted"><?=date('d-m-Y h:i A',strtotime($ann['entry_date']))?></span>
                            </div>
                            <!--<p class="text-muted mb-2">Invoices have been paid to the company</p>-->
                            <div class="d-flex">
                            <a href="<?=BASEURL?>assets/announcement/<?=$ann['pdf']?>" target="_blank" rel="noopener noreferrer"> 
                                <img src="https://demo-web-site.com/blissnova/newdev/assets/img/icons/misc/pdf.png" alt="PDF image" width="15" class="me-2">
                                <span class="fw-semibold text-heading"><?=$ann['pdf']?></span>
                            </a>

                            </div>
                          </div>
                        </li>
                <?php
                }?>
                      </ul>
                    </li>
                  
                   
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
<script>
    $(document).ready(function () {
    $('#example2').DataTable();
});
</script>

<script>
    $(document).ready(function () {
    $('#example3').DataTable();
});
</script>







