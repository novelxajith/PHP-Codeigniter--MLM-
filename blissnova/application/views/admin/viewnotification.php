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
.flex-shrink-0.dropdown-notifications-actions {
    right: 0;
    position: absolute;
    top: 32px;
}
  li.dropdown-notifications-list.scrollable-container.ps  {
    list-style-type: none!important;
  }
</style>
  

 <div class="container-xxl flex-grow-1 container-p-y">  
         

                        <div class="row">
                            <div class="col-12">
                            <div class="card"> 
                              <h5 class="card-header">All Notification</h5>
                               <div class="card-body"> 
                                  <li class="dropdown-notifications-list scrollable-container ps">
                      <ul class="list-group list-group-flush">
                          
                             <?php 
                
                            
                             $notif = $this->db
                                ->order_by('entry_date', 'DESC')->limit(10)
                                ->where_not_in('remark', array('Team Bonus Credited', 'Affiliate Incentive Credited'))
                                ->get('notifications')
                                ->result_array();
                            foreach($notif as $key=>$not){ ?>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item waves-effect">
                          
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <img src="<?=BASEURL?>assets/images/notification/<?=$not['image']?>" alt="" class="w-px-40 h-auto rounded-circle">
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate"><?=$not['remark']?></h6>
                              <small class="text-truncate text-body"></small>
                            </div>
                            
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted"><?=date('d-m-Y h:i A',strtotime($not['entry_date']))?></small>
                            </div>
                        </li>
                          <?php } ?>
                

                      </ul>
                    </li>
                    <div class="view more">
                         <a href="<?=BASEURL?>admin/viewmore_notification" class="btn btn-primary waves-effect waves-light" >View more</a>
                    </div>
                   
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




