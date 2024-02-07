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
   div#example_wrapper {
   margin: 20px;
   }
   .col-sm-12 {
   overflow: auto;
   }
   #myInput {
   width: 78px;
   border: none;
   }
@media only screen and (max-width: 600px) {
  .row.pin {
   display:block;
  }
}
</style>


 <div class="container-xxl flex-grow-1 container-p-y">
     <div class="row pin ">
   <div class="col-lg-6  mt-2">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Active PIN </h4>
            <table id="example3" class="datatables-basic table table-bordered">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Date</th>
                     <th>Pin number </th>
                  </tr>
               </thead>
               <tbody>
                   <?php $his=$this->db->where('username',$this->session->userdata('ublisusername'))->where('status','Unused')->where('type',$pin)->get('e_pin')->result_array(); 
                   $count=1;
                   foreach($his as $h){
                   ?>
                  <tr>
                     <td><?=$count++?></td>
                     <td><?= date('Y-m-d', strtotime($h['entry_date'])); ?></td>
                      <td>
                         <div class="copy-wrapper">
                           <span id="cs" class="pin-value"><?=$h['pin']?></span>
                           <span class="tox-collection__item-icon badge rounded-pill bg-label-primary" onclick="myFunction(this)">
                             <svg width="24" height="24">
                                 <path d="M16 3H6a2 2 0 00-2 2v11h2V5h10V3zm1 4a2 2 0 012 2v10a2 2 0 01-2 2h-7a2 2 0 01-2-2V9c0-1.2.9-2 2-2h7zm0 12V9h-7v10h7z" fill-rule="nonzero"></path>
                             </svg>
                             Click here to copy the pin
                         </span>
                        </div>
                     </td>
                    <style>
                        .copy-wrapper {
                            display: flex;
                            align-items: center;
                        }
                        
                        .pin-value {
                            background-color: #f8f9fa;
                            padding: 4px 8px;
                            margin-right: 8px;
                            font-weight: bold;
                            color: #333333;
                        }
                    </style>
                  </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <!-- end col -->
<!--</div>-->
<!--<div class="row mt-3">-->
   <div class="col-lg-6 mt-2">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Used PIN History</h4>
            <table id="example2" class="datatables-basic table table-bordered">
               <thead>
                   
                  <tr>
                     <th>#</th>
                      <th> Date</th>
                     <th>Pin</th>
                     <th>Used for</th>
                  </tr>
               </thead>
               <tbody>
                   <?php $hiss=$this->db->where('username',$this->session->userdata('ublisusername'))->where('status','Used')->get('e_pin')->result_array(); 
                   $countt=1;
                   foreach($hiss as $hi){
                   ?>
                  <tr>
                     <td><?=$countt++?></td>
                     <td><?=$hi['used_date']?></td>
                     <td><?=$hi['pin']?></td>
                     <td><?=$hi['used_for']?></td>
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
<!-- end row -->
<script>
    function myFunction(element) {
        var copyText = element.parentNode.querySelector('.pin-value').textContent;
        var tempInput = document.createElement("input");
        tempInput.setAttribute("type", "text");
        tempInput.setAttribute("readonly", "readonly");
        tempInput.setAttribute("value", copyText);
        tempInput.style.position = "absolute";
        tempInput.style.left = "-9999px";
        document.body.appendChild(tempInput);

        tempInput.select();
        tempInput.setSelectionRange(0, 99999); // For mobile devices

        document.execCommand("copy");
        document.body.removeChild(tempInput);

        alert("Copied the text: " + copyText);
    }
</script>
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
    $('#example3').DataTable();
});
</script>



<script>
    $(document).ready(function () {
    $('#example2').DataTable();
});
</script>
