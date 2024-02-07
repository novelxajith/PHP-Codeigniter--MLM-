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
   .tablerow.m-3 {
   display: flex;
   align-items: center;
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
   @media only screen and (max-width: 991px) {
   .tablerow.m-3 {
   display: block;
   align-items: center;
   }
   }
</style>
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/page-profile.css" />

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User Profile /</span> Profile</h4>
            <!-- Header -->
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="user-profile-header-banner">
                <img src="<?=BASEURL?>assets/img/logo/bliss.svg" alt="Banner image" class="rounded-top">
            </div>
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
               <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                  <img
                     src="<?=BASEURL?>assets/img/avatars/1.png"
                     alt="user image"
                     class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" />
               </div>
               <div class="flex-grow-1 mt-3 mt-sm-5">
            <?php $userr=$this->db->where('username',$user)->get('user_role')->row_array(); ?>
                  <div
                     class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                     <div class="user-profile-info">
                        <h4><?=$userr['first_name']?> <?=$userr['last_name']?></h4>
                        <ul
                           class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                           <li class="list-inline-item">
                              <i class="mdi mdi-map-marker-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"><?=$userr['city']?> City</span>
                           </li>
                           <li class="list-inline-item">
                              <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"> Joined <?=(new DateTime($userr['entry_date']))->format('F j, Y h:i A');?></span>
                           </li>
                           <li class="list-inline-item">
                              <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                                 ><span class="fw-semibold"> Activated on <?=(new DateTime($userr['activated_date']))->format('F j, Y h:i A');?></span>
                           </li>
                        </ul>
                     </div>
                      <a href="javascript:void(0)" class="btn btn-success">
                     <i class="mdi mdi-account-check-outline me-1"></i><?=$userr['status']?>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--/ Header -->
   <!-- Navbar pills -->
   <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-sm-row mb-4">
            <li class="nav-item">
               <a class="nav-link " href="<?=BASEURL?>admin/userview_page/<?=$user?>"
                  ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/bank/<?=$user?>"
                  ><i class="mdi mdi-bank me-1 mdi-20px"></i>Bank</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/kyc/<?=$user?>"
                  ><i class="mdi mdi-account-details me-1 mdi-20px"></i>KYC</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link active" href="<?=BASEURL?>admin/myearning_points/<?=$user?>"
                  ><i class="mdi mdi mdi-star-plus me-1 mdi-20px"></i>Point Statement</a
                  >
            </li>
          <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/withdrawal_statement/<?=$user?>"
                  ><i class="mdi mdi-cash me-1 mdi-20px"></i>Withdrawal Statement</a
                  >
            </li>
          <!--<li class="nav-item">-->
          <!--     <a class="nav-link" href="<?=BASEURL?>admin/left_team/<?=$user?>"-->
          <!--        ><i class="mdi mdi-account-arrow-left me-1 mdi-20px"></i>Left Team</a-->
          <!--        >-->
          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--     <a class="nav-link" href="<?=BASEURL?>admin/right_team/<?=$user?>"-->
          <!--        ><i class="mdi mdi-account-arrow-right me-1 mdi-20px"></i>Right Team</a-->
          <!--        >-->
          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--     <a class="nav-link" href="<?=BASEURL?>admin/direct_team/<?=$user?>"-->
          <!--        ><i class="mdi mdi-account-switch-outline me-1 mdi-20px"></i>Direct Team</a-->
          <!--        >-->
          <!--  </li>-->
             <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/user_pinrequesthistory/<?=$user?>"
                  ><i class="mdi mdi-pin me-1 mdi-20px"></i>Pin Request</a
                  >
            </li>
             <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/user_withdrawalhistory/<?=$user?>"
                  ><i class="mdi mdi-cash-check me-1 mdi-20px"></i>Withdrawal History</a
                  >
            </li>
             <li class="nav-item">
               <a class="nav-link " href="<?=BASEURL?>admin/user_activationhistory/<?=$user?>"
                  ><i class="mdi mdi-hand-pointing-up me-1 mdi-20px"></i>Activation History</a
                  >
            </li>
         </ul>
      </div>
   </div>
   <!--/ Navbar pills -->  
   <div class="row">
      <div class="col-12">
         <div class="card">
            <h5 class="card-header">My Earning Points</h5>
            <div class="card-datatable table-responsive pt-0">
               <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                  <div class="tablerow m-3">
                   <form action="<?=BASEURL?>admin/myearnings" method="post">
                     <div class="col-lg-3">
                        <div class="form-floating form-floating-outline mb-4  m-2">
                           <input class="form-control" type="date" name="date1" id="html5-date-input">
                            <input class="form-control" type="hidden" name="username" value="<?=$user?>" id="html5-date-input">
                           <label for="html5-date-input">From Date</label>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-floating form-floating-outline mb-4  m-2">
                           <input class="form-control" type="date" id="html5-date-input" name="date2">
                           <label for="html5-date-input">Till Date</label>
                        </div>
                     </div>
                       <div class="col-lg-3">
                      <div class="form-floating form-floating-outline mb-4  m-2">
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="type">
                          <option selected="">Select Income</option>
                          <option value="Direct Income">Direct Referral  </option>
                          <option value="Pair Income">Pair match </option>
                          <option value="Purchase sales incentive">Purchase sales incentive </option>
                          <option value="Purchase referral incentive">Purchase referral incentive </option>
                          <option value="Repurchase level income">Repurchase level income </option>
                          <option value="Monthly cashback">Monthly cashback </option>
                        </select>
                        <label for="exampleFormControlSelect1">Income</label>
                      </div>
                     </div>
                     <div class="col-lg-3">   
                        <button type="submit" class="btn rounded-pill btn-primary waves-effect waves-light m-2 ">Submit</button>
                     </div>
                  </form>
                  </div>
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Date and Time</th>
                        <th>Particular</th>
                        <th>Credit</th>
                        <th>Debit</th>
                        <th>Balance</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php 
               $count=1;
               foreach($incomee as $key=>$income){ 
               ?>
                     <tr>
                        <td><?=$count++?></td>
                        <td><?=$income['entry_date']?></td>
                        <td><?=$income['remark']?></td>
                        <td><?=$income['credit']?></td>
                        <td><?=$income['debit']?></td>
                        <?php if($income['debit']>0){ $value+=$income['debit']; }?>
                        <td><?php echo $val+=$income['credit']-$value;?></td>
                     </tr>
                  <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <!-- end col -->
   </div>
   <!-- end row -->
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