
<?php include 'header.php';?>
<style>

  a.nav-link.waves-effect.waves-light {
    font-size: 13px!important;
}
ul.nav.nav-pills.flex-sm-row.mb-4 {
    overflow: auto;
}
</style>
    <!-- Page CSS -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/page-profile.css" />

<div class="container-xxl flex-grow-1 container-p-y">
   <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User Profile /</span> Profile</h4>
   <!-- Header -->
               <?php $userr=$this->db->where('username',$user)->get('user_role')->row_array(); ?>
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="user-profile-header-banner">
               <img src="<?=BASEURL?>assets/img/logo/bliss.svg" alt="Banner image" class="rounded-top">
            </div>
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
               <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                  <img
                     src="<?=BASEURL?>assets/images/<?=$userr['profile_image']?>"
                     alt="user image"
                     class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" />
               </div>

               <div class="flex-grow-1 mt-3 mt-sm-5">
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
                                 ><span class="fw-semibold"> Joined <?=(new DateTime($userr['entry_date']))->format('F j, Y h:i A');?> </span>
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
               <a class="nav-link active" href="<?=BASEURL?>admin/bank/<?=$user?>"
                  ><i class="mdi mdi-bank me-1 mdi-20px"></i>Bank</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/kyc/<?=$user?>"
                  ><i class="mdi mdi-account-details me-1 mdi-20px"></i>KYC</a
                  >
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=BASEURL?>admin/myearning_points/<?=$user?>"
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
          <!--     <a class="nav-link" href="<?=BASEURL?>admin/right_team"-->
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



  <div class="card ">
    <div class="card-body">
  <!-- User Profile Content -->
  <div class="row mt-4 justify-content-center">
  <div class="col-lg-8 ">  
  <div class="card mb-4">
   <h5 class="card-header">Bank</h5>
   <form class="card-body" action="<?=BASEURL?>admin/user_bank" method="post">
      <h6> User Bank Details</h6>
      <div class="row g-4">
         <div class="col-md-6">
            <div class="form-floating form-floating-outline">
               <input type="text" id="multicol-Bankname" class="form-control" placeholder="Bankname" name="ac_bank" value="<?=$userr['ac_bank']?>">
               <input type="hidden" class="form-control" value="<?=$user?>" name="username">
               <label for="multicol-Bankname">Bankname</label>
            </div>
         </div>
         <div class="col-md-6">
         <div class="form-floating form-floating-outline">
               <input type="text" id="multicol-AccountHolderName" class="form-control" placeholder="AccountHolderName" name="ac_name" value="<?=$userr['ac_holder_name']?>">
               <label for="multicol-AccountHolderName">Account Holder Name</label>
            </div>
         </div>
         <div class="col-md-6">
         <div class="form-floating form-floating-outline">
               <input type="text" id="multicol-AccountNumber" class="form-control" placeholder="AccountNumber" name="ac_no" value="<?=$userr['ac_no']?>">
               <label for="multicol-AccountNumber">Account Number</label>
            </div>
        </div>
         <div class="col-md-6">
         <div class="form-floating form-floating-outline">
               <input type="text" id="multicol-IFSCCode" class="form-control" placeholder="IFSCCode" name="ac_ifsc" value="<?=$userr['ac_ifsc']?>">
               <label for="multicol-IFSCCode">IFSC Code</label>
            </div>  
        </div>
         <div class="col-md-12">
         <div class="form-floating form-floating-outline">
               <input type="text" id="multicol-AccountHolderName" class="form-control" placeholder="AccountHolderName" name="ac_branch" value="<?=$userr['branch']?>">
               <label for="multicol-AccountHolderName">Branch Name</label>
            </div>
         </div>
      </div>
      <div class="pt-4">
         <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Change</button>
         <button type="reset" class="btn btn-label-secondary waves-effect">Cancel</button>
      </div>
   </form>
</div>
  </div>
  </div> 
   <div class="row mt-3">
            <div class="col-12">
               <div class="card">
                  <h5 class="card-header">KYC  History </h5>
                  <div class="card-datatable table-responsive pt-0">
                     <table id="example" class="datatables-basic table table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Entry Date</th>
                              <th>Bank</th>
                              <th>Account Holder</th>
                              <th>Account Number</th>
                              <th>IFSC</th>
                              <th>Branch</th>
                           </tr>
                        </thead>
                        <tbody>
                <?php  $bank_details=$this->db->where('description','By Admin')->where('username',$user)->get('bank')->result_array(); 
                      $count=1;
                      foreach($bank_details as $key=>$bank){ ?>
                           <tr>
                              <td><?=$count++?></td>
                              <td><?=date("Y-m-d",strtotime($bank['entry_date']))?></td>
                              <td><?=$bank['ac_bank']?></td>
                              <td><?=$bank['ac_holder_name']?></td>
                              <td><?=$bank['ac_no']?></td>
                              <td><?=$bank['ac_ifsc']?></td>
                              <td><?=$bank['branch']?></td>
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
  </div>
  <!--/ User Profile Content -->
</div>
<!-- / Content -->

     
                  
<?php include 'footer.php';?>
