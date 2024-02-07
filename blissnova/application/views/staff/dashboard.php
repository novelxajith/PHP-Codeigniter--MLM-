<?php include 'header.php';?>
<!-- Page CSS -->
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/cards-statistics.css" />
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/cards-analytics.css" />
<style>
   button.btn.btn-icon.rounded-pill.btn-label-warning.waves-effect {
   width: auto!important;
   height: auto!important;
   }
   button.btn.btn-icon.rounded-pill.btn-label-facebook.waves-effect {
   width: auto!important;
   height: auto!important;
   }
   .swal2-styled.swal2-confirm{
   background-color: #72e128 !important;
   /* Additional styling if needed */
   }
   text.apexcharts-text.apexcharts-yaxis-label {
    fill: #636578!important;
}
text.apexcharts-datalabel {
    fill: white!important;
}
text.apexcharts-text.apexcharts-xaxis-label {
    fill: #636578!important;
}
   @media screen and (min-width: 1200px) {
   .layout-content-navbar .layout-menu {
   z-index: 10 !important;
   }
   .text-muted {
    --bs-text-opacity: 1;
    color: #bbbcc4 !important;
    font-size: 13px!important;
}
   }
</style>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Content wrapper -->
<div class="content-wrapper">
   <!-- Content -->

   
   
   
   <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row gy-4">
         <!-- Gamification Card -->
          <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-md-7 order-2 order-md-1 mt-3">
                            <div class="card-body">
                                <?php $name=$this->db->where('username',$this->session->userdata('staffusername'))->get('staff_panel')->row_array(); ?>
                                <?php 
                           $quote = $this->db->get('quotes')->row_array(); ?>
                                <h5 class="card-title pb-xl-2">
                                    Welcome
                                    <strong>
                                        <?php echo $name['name'] ?>
                                       
                                    </strong>
                                    🎉
                                </h5>
                                <p class="mb-0">
                                    <span class="fw-semibold"><?=$quote['note'];?></span>
                                </p>
                                <p></p>
                                <a href="<?=BASEURL?>staff/user_profile" class="btn btn-primary">View Profile</a>
                            </div>
                        </div>
                        <div class="col-md-5 text-center text-md-end order-1 order-md-2">
                            <div class="card-body pb-0 px-0 px-md-4 ps-0">
                                <img
                                    src="<?=BASEURL?>assets/img/illustrations/illustration-john-light.png"
                                    height="160"
                                    alt="View Profile"
                                    data-app-light-img="illustrations/illustration-john-light.png"
                                    data-app-dark-img="illustrations/illustration-john-dark.png"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <!--/ Gamification Card -->
         <!-- Form with Image Modal -->
         <div
            class="modal-onboarding modal fade animate__animated"
            id="qoutemodal"
            tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content text-center">
                  <div class="modal-header border-0">
                     <a class="text-muted close-label" href="javascript:void(0);" data-bs-dismiss="modal"
                        >Skip Intro</a
                        >
                     <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-0">
                     <div class="onboarding-media">
                        <div class="mx-2">
                           <img src="<?=BASEURL?>assets/img/illustrations/boy-verify-email-dark.png" alt="boy-verify-email-light" width="273" class="img-fluid" data-app-light-img="illustrations/boy-verify-email-light.png" data-app-dark-img="illustrations/boy-verify-email-dark.png">
                        </div>
                     </div>
                     <div class="onboarding-content mb-0">
                        <h4 class="onboarding-title text-body">Upload Qutoes</h4>
                        <?php 
                           $note = $this->db->where('id','1')->get('quotes')->row_array();
                           ?>
                        <form action="<?=BASEURL?>admin/quotes" method="post" id="myForm">
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-floating form-floating-outline mb-3">
                                    <input
                                       class="form-control"
                                       placeholder="Enter Your thoughts as Quotes ..."
                                       type="text"
                                       value="<?=$note['note'];?>"
                                       name="note"
                                       tabindex="0"
                                       id="nameEx3" />
                                    <label for="nameEx3">Upload Qutoes</label>
                                 </div>
                              </div>
                           </div>
                     </div>
                  </div>
                  <div class="modal-footer border-0">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                  Close
                  </button>
                  <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                  </div>
                  </form>
               </div>
            </div>
         </div>
         <!--/ Form with Image Modal -->
         <!-- Statistics Total Order -->
         <div class="col-lg-2 col-sm-6 col-6">
            <div class="card h-100">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                     <div class="avatar">
                        <div class="avatar-initial bg-label-primary rounded">
                           <i class="mdi mdi-currency-inr mdi-24px"></i>
                        </div>
                     </div>
                     <?php
                        $total_income = $this->db->select_sum('credit')->where('remark !=','Admin_charge')->get('account_sub')->row()->credit+0;
                        $total_income_todayy = $this->db->select_sum('credit')->where('remark !=','Admin_charge')->where('DATE(entry_date)', date('Y-m-d'))->get('account_sub')->row()->credit+0;
                        if($total_income > 0){
                            $total_income_per=($total_income_todayy/$total_income)*100;
                        }
                        ?>
                     <div class="d-flex align-items-center">
                        <p class="mb-0 text-success me-1">+<?=number_format($total_income_per , 2 )?>%</p>
                        <i class="mdi mdi-chevron-up text-success"></i>
                     </div>
                  </div>
                  <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
                     <?php 
                        // $left_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','left')->where('ref_id',$this->session->userdata('ablisusername'))->get('user_role')->row()->username; 
                        // $right_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','right')->where('ref_id',$this->session->userdata('ablisusername'))->get('user_role')->row()->username; 
                        // $usernames = array(
                        //     $this->session->userdata('ablisusername'),
                        //     $left_sub_user,
                        //     $right_sub_user
                        // );
                        // $total_income=$this->db->where_in('username',$usernames)->select('sum(credit)-sum(debit) as balance')->get('account')->row()->balance+0 ?>
                     
                     <h5 class="mb-2">₹ <?=$total_income?></h5>
                     <p class="text-muted mb-lg-2 mb-xl-3">Total Incentive</p>
                     <!--<div class="badge bg-label-secondary rounded-pill">Last 4 Month</div>-->
                  </div>
               </div>
            </div>
         </div>
         <!--/ Statistics Total Order -->
         <!-- Sessions line chart -->
         <div class="col-lg-2 col-sm-6 col-6">
            <div class="card h-100">
               <div class="card-header pb-0">
                  <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                     <?php 
                        $my_wallet=$this->db->select_sum('credit')->where('remark !=','Admin_charge')->where('date(entry_date)','date(Y-m-d)')->get('account_sub')->row()->credit+0
                        ?> 
                     <h4 class="mb-0 me-2">₹ <?=$total_income_todayy?></h4>
                     <!--<p class="mb-0 text-success">+62%</p>-->
                  </div>
                  <span class="d-block mb-2 text-muted">Todays Incentive</span>
               </div>
               <div class="card-body">
                  <div id="sessions"></div>
               </div>
            </div>
         </div>
         <!--/ Sessions line chart -->
         <div class="col-lg-4 col-md-6">
            <div class="swiper-container swiper-container-horizontal swiper swiper-sales" id="users">
               <div class="swiper-wrapper">
                  <div class="swiper-slide pb-3">
                     <h5 class="mb-2">Total Members</h5>
                     <div class="d-flex align-items-center gap-2">
                        <small>Total Users</small>
                        <div class="d-flex text-success">
                           <?php
                              $total_members = $this->db->where('user_type !=', 'a')->where('plus_deposit','0')->where('prime_deposit','0')->count_all_results('user_role') + 0;
                              ?>
                           <small class="fw-medium"><?=$total_members?></small>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mt-5">
                        <img
                           src="<?=BASEURL?>assets/img/wing/freeuser.png"
                           alt="Marketing and sales"
                           width="84"
                           class="rounded" />
                        <div class="d-flex flex-column w-100 ms-4">
                           <h6 class="mb-3">Free User</h6>
                           <div class="row user">
                              <div class=" col-lg-6 col-12">
                                 <ul class="list-unstyled mb-0">
                                    <li class="d-flex mb-2 pb-1 align-items-center">
                                       <!--<small class="mb-0 me-2 sales-text-bg bg-label-secondary">2500</small>-->
                                       <!--<small class="mb-0 text-truncate">Users</small>-->
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                     $plus_members = $this->db->where('user_type !=', 'a')->where('plus_deposit >', '0.00')->count_all_results('user_role') + 0;
                     ?>
                  <div class="swiper-slide pb-3">
                     <h5 class="mb-2">Total Members</h5>
                     <div class="d-flex align-items-center gap-2">
                        <small>Total Users</small>
                        <div class="d-flex text-success">
                           <small class="fw-medium"><?=$plus_members?></small>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mt-5">
                        <img
                           src="<?=BASEURL?>assets/img/wing/plusbadge.svg"
                           alt="Marketing and sales"
                           width="84"
                           class="rounded"/>
                        <div class="d-flex flex-column w-100 ms-4">
                           <h6 class="mb-3">Plus User</h6>
                           <div class="row user">
                              <div class=" col-lg-6 col-12">
                                 <ul class="list-unstyled mb-0">
                                    <li class="d-flex mb-2 pb-1 align-items-center">
                                       <!--<small class="mb-0 me-2 sales-text-bg bg-label-secondary">2500</small>-->
                                       <!--<small class="mb-0 text-truncate">Users</small>-->
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                     $prime_members =  $this->db->where('user_type !=', 'a')->where('prime_deposit >', '0.00')->count_all_results('user_role') + 0;
                     ?>
                  <div class="swiper-slide pb-3">
                     <h5 class="mb-2">Total Members</h5>
                     <div class="d-flex align-items-center gap-2">
                        <small>Total Users</small>
                        <div class="d-flex text-success">
                           <small class="fw-medium"><?=$prime_members?></small>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mt-5">
                        <img
                           src="<?=BASEURL?>assets/img/wing/primebadge.svg"
                           alt="Marketing and sales"
                           width="84"
                           class="rounded" />
                        <div class="d-flex flex-column w-100 ms-4">
                           <h6 class="mb-3">Prime User</h6>
                           <div class="row user">
                              <div class=" col-lg-6 col-12">
                                 <ul class="list-unstyled mb-0">
                                    <li class="d-flex mb-2 pb-1 align-items-center">
                                       <!--<small class="mb-0 me-2 sales-text-bg bg-label-secondary">2500</small>-->
                                       <!--<small class="mb-0 text-truncate">Users</small>-->
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-pagination"></div>
            </div>
         </div>
         <div class="col-lg-4  col-md-6">
            <div class="swiper-container swiper-container-horizontal swiper swiper-sales" id="joiners">
               <div class="swiper-wrapper">
                  <div class="swiper-slide pb-3">
                     <h5 class="mb-2">Today Joiners</h5>
                     <div class="d-flex align-items-center gap-2">
                        <small>Todays Joining  </small>
                        <div class="d-flex text-success">
                           <?php
                              $today_joiners = $this->db->where('user_type !=', 'a')->where('plus_deposit','0.00')->where('prime_deposit','0.00')->where('date(entry_date)', date('Y-m-d'))->count_all_results('user_role') + 0;
                              ?>
                            
                           <small class="fw-medium"><?=$today_joiners?></small>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mt-5">
                        <img
                           src="<?=BASEURL?>assets/img/wing/freeuser.png"
                           alt="Marketing and sales"
                           width="84"
                           class="rounded" />
                        <div class="d-flex flex-column w-100 ms-4">
                           <h6 class="mb-3">Free User</h6>
                           <div class="row Joining">
                              <div class=" col-lg-6 col-12">
                                 <ul class="list-unstyled mb-0">
                                    <!--<li class="d-flex mb-2 pb-1 align-items-center">-->
                                    <!--   <small class="mb-0 me-2 sales-text-bg bg-label-secondary">2500</small>-->
                                    <!--   <small class="mb-0 text-truncate">Users</small>-->
                                    <!--</li>-->
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                     $today_plus = $this->db->where('user_type !=', 'a')->where('plus_deposit >', '0.00')->where('date(entry_date)', date('Y-m-d'))->count_all_results('user_role') + 0;
                     ?>
                  <div class="swiper-slide pb-3">
                     <h5 class="mb-2">Today Joiners </h5>
                     <div class="d-flex align-items-center gap-2">
                        <small>Todays Joining  </small>
                        <div class="d-flex text-success">
                           <small class="fw-medium"><?=$today_plus?></small>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mt-5">
                        <img
                           src="<?=BASEURL?>assets/img/wing/plusbadge.svg"
                           alt="Marketing and sales"
                           width="84"
                           class="rounded" />
                        <div class="d-flex flex-column w-100 ms-4">
                           <h6 class="mb-3">Plus User</h6>
                           <div class="row Joining">
                              <div class=" col-lg-6 col-12">
                                 <ul class="list-unstyled mb-0">
                                    <!--<li class="d-flex mb-2 pb-1 align-items-center">-->
                                    <!--   <small class="mb-0 me-2 sales-text-bg bg-label-secondary">2500</small>-->
                                    <!--   <small class="mb-0 text-truncate">Users</small>-->
                                    <!--</li>-->
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                     $today_prime = $this->db->where('user_type !=', 'a')->where('prime_deposit >', '0.00')->where('date(entry_date)', date('Y-m-d'))->count_all_results('user_role') + 0;
                     ?>
                  <div class="swiper-slide pb-3">
                     <h5 class="mb-2">Today Joiners</h5>
                     <div class="d-flex align-items-center gap-2">
                        <small>Todays Joining </small>
                        <div class="d-flex text-success">
                           <small class="fw-medium"><?= $today_prime?></small>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mt-5">
                        <img
                           src="<?=BASEURL?>assets/img/wing/primebadge.svg"
                           alt="Marketing and sales"
                           width="84"
                           class="rounded" />
                        <div class="d-flex flex-column w-100 ms-4">
                           <h6 class="mb-3">Prime User</h6>
                           <div class="row Joining">
                              <div class=" col-lg-6 col-12">
                                 <ul class="list-unstyled mb-0">
                                    <li class="d-flex mb-2 pb-1 align-items-center">
                                       <!--<small class="mb-0 me-2 sales-text-bg bg-label-secondary">2500</small>-->
                                       <!--<small class="mb-0 text-truncate">Users</small>-->
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-pagination"></div>
            </div>
         </div>
         <div class="col-lg-2 col-sm-6 col-6">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                       <?php $wallet = $this->db->select('sum(credit) - sum(debit) as balance ')->where('remark !=','Admin_charge')->get('account_sub')->row()->balance+0 ; 
                       
                       ?>
                     <div class="avatar">
                        <div class="avatar-initial bg-label-success rounded">
                           <i class="mdi mdi-currency-inr mdi-24px"></i>
                        </div>
                     </div>
                     <div class="d-flex align-items-center">
                        <!--<p class="mb-0 text-success me-1">+38%</p>-->
                        <i class="mdi mdi-chevron-up text-success"></i>
                     </div>
                  </div>
                  <div class="card-info mt-5 pt-3">
                    
                     <h5 class="mb-2">₹<?=$wallet?></h5>
                     <p class="text-muted">Wallet</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- Total Revenue chart -->
         <div class="col-lg-2 col-sm-6 col-6">
            <div class="card">
               <div class="card-header pb-0">
                  <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                     <?php $balance = $this->db->select('sum(credit)-sum(debit) as balance')->get('holding_wallet')->row()->balance+0 ;
                     $balance_todayy = $this->db->select('sum(credit)-sum(debit) as balance')->where('date(entry_date)', date('Y-m-d'))->get('holding_wallet')->row()->balance+0 ;
                     
                     if($balance > 0){
                         $balance_todayy_per=($balance_todayy/$balance)*100;
                     }
                     ?>
                     <h4 class="mb-0 me-2">₹<?=$balance?></h4>
                     <p class="mb-0 text-success">+<?=number_format($balance_todayy_per , 2)?>%</p>
                  </div>
                  <span class="d-block mb-2 text-muted">Holding wallet</span>
               </div>
               <div class="card-body">
                  <div>
                     <svg width="129" height="108" xmlns="http://www.w3.org/2000/svg" class="apexcharts-svg" xmlns:data="ApexChartsNS" style="background:0 0">
                        <g class="apexcharts-inner apexcharts-graphical" transform="translate(-4 15)">
                           <defs>
                              <linearGradient id="a" x1="0" y1="0" x2="0" y2="1">
                                 <stop stop-opacity=".4" stop-color="rgba(216,227,240,0.4)" offset="0"/>
                                 <stop stop-opacity=".5" stop-color="rgba(190,209,230,0.5)" offset="1"/>
                                 <stop stop-opacity=".5" stop-color="rgba(190,209,230,0.5)" offset="1"/>
                              </linearGradient>
                              <clipPath id="b">
                                 <rect width="141" height="93" x="-2" rx="0" ry="0" stroke-width="0" stroke-dasharray="0" fill="#fff"/>
                              </clipPath>
                           </defs>
                           <rect width="8.22" height="93" rx="0" ry="0" fill="url(#a)" class="apexcharts-xcrosshairs" filter="none" fill-opacity=".9"/>
                           <g class="apexcharts-xaxis">
                              <g class="apexcharts-xaxis-texts-g" transform="translate(0 -4)"/>
                           </g>
                           <g class="apexcharts-grid">
                              <g class="apexcharts-gridlines-horizontal"/>
                              <g class="apexcharts-gridlines-vertical"/>
                              <path stroke="transparent" stroke-dasharray="0" d="M0 93h137M0 1v92"/>
                           </g>
                           <g class="apexcharts-bar-series apexcharts-plot-series">
                              <g class="apexcharts-series" data:realIndex="0">
                                 <path d="M8.905 93V42.2q0-5 5-5h-1.78q5 0 5 5V93h-8.22zm34.25 0V5q0-5 5-5h-1.78q5 0 5 5v88h-8.22zm34.25 0V28.25q0-5 5-5h-1.78q5 0 5 5V93h-8.22zm34.25 0V42.2q0-5 5-5h-1.78q5 0 5 5V93h-8.22z" fill="rgba(102, 108, 255, 1)" class="apexcharts-bar-area" clip-path="url(#b)"/>
                                 <g class="apexcharts-bar-goals-markers" style="pointer-events:none">
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                 </g>
                              </g>
                              <g class="apexcharts-series" data:realIndex="1">
                                 <path d="M17.125 93V64.52q0-5 5-5h-1.78q5 0 5 5V93h-8.22zm34.25 0V42.2q0-5 5-5h-1.78q5 0 5 5V93h-8.22zm34.25 0V74.75q0-5 5-5h-1.78q5 0 5 5V93h-8.22zm34.25 0V67.775q0-5 5-5h-1.78q5 0 5 5V93h-8.22z" fill="rgba(253, 181, 40, 1)" class="apexcharts-bar-area" clip-path="url(#b)"/>
                                 <g class="apexcharts-bar-goals-markers" style="pointer-events:none">
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                 </g>
                              </g>
                              <g class="apexcharts-datalabels" data:realIndex="0"/>
                              <g class="apexcharts-datalabels" data:realIndex="1"/>
                           </g>
                           <path stroke="#b6b6b6" stroke-dasharray="0" class="apexcharts-ycrosshairs" d="M0 0h137"/>
                           <path class="apexcharts-ycrosshairs-hidden" d="M0 0h137"/>
                           <g class="apexcharts-yaxis-annotations"/>
                           <g class="apexcharts-xaxis-annotations"/>
                           <g class="apexcharts-point-annotations"/>
                        </g>
                        <g class="apexcharts-yaxis">
                           <g class="apexcharts-yaxis-texts-g" transform="translate(-8)"/>
                        </g>
                        <g class="apexcharts-annotations"/>
                     </svg>
                  </div>
               </div>
            </div>
         </div>
         <!--/ Total Revenue chart -->
         
           <?php if($this->session->userdata('staffrole') =="Accountant") { ?>
           <div class="col-12 col-xl-6 col-md-6">
            <div class="swiper-container swiper-container-horizontal swiper swiper-sales" id="users">
               <div class="swiper-wrapper">
                    <?php
                   $pluspayin= $this->db->select_sum('amount')->where('status','Accepted')->where('pack','1100')->get('investment')->row()->amount+0;
                   
                    ?>
                     <div class="swiper-slide pb-3">
                     <h5 class="mb-2">Total Plus Pay In</h5>
                    <div class="d-flex align-items-center gap-2">
                        <small>Plus Pay In :</small>
                        <div class="d-flex text-success">
                           <small class="fw-medium">₹<?=$pluspayin?></small>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mt-5">
                        <img
                           src="<?=BASEURL?>assets/img/wing/plusbadge.svg"
                           alt="Marketing and sales"
                           width="84"
                           class="rounded"/>
                        <div class="d-flex flex-column w-100 ms-4">
                           <h6 class="mb-3">Plus User</h6>
                           <div class="row user">
                              <div class=" col-lg-6 col-12">
                                 <ul class="list-unstyled mb-0">
                                    <li class="d-flex mb-2 pb-1 align-items-center">
                                       <!--<small class="mb-0 me-2 sales-text-bg bg-label-secondary">2500</small>-->
                                       <!--<small class="mb-0 text-truncate">Users</small>-->
                                        <a href="<?=BASEURL?>admin/totalpluspay_in" <button class="btn btn-sm btn-primary waves-effect waves-light  mt-2">View Statement</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  
                  
                  <div class="swiper-slide pb-3">
                      <?php
                   $primepayin= $this->db->select_sum('amount')->where('status','Accepted')->where('pack','10000')->get('investment')->row()->amount+0;
                   
                    ?>
                     <h5 class="mb-2">Total Prime Pay In</h5>
                      <div class="d-flex align-items-center gap-2">
                        <small>Prime Pay In :</small>
                        <div class="d-flex text-success">
                           <small class="fw-medium">₹<?=$primepayin?></small>
                        </div>
                     </div>
                    <div class="d-flex align-items-center mt-5">
                        <img
                           src="<?=BASEURL?>assets/img/wing/primebadge.svg"
                           alt="Marketing and sales"
                           width="84"
                           class="rounded" />
                        <div class="d-flex flex-column w-100 ms-4">
                           <h6 class="mb-3">Prime User</h6>
                           
                           <div class="row user">
                              <div class=" col-lg-6 col-12">
                                 <ul class="list-unstyled mb-0">
                                    <li class="d-flex mb-2 pb-1 align-items-center">
                                       <!--<small class="mb-0 me-2 sales-text-bg bg-label-secondary">2500</small>-->
                                       <!--<small class="mb-0 text-truncate">Users</small>-->
                                       <a href="<?=BASEURL?>admin/totalprimepay_in" <button class="btn btn-sm btn-primary waves-effect waves-light  mt-2">View Statement</button></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  
                  
               </div>
               
               <div class="swiper-pagination"></div>
            </div>
           <div class="row mt-3">
                <div class="col-md-6 col-sm-6 col-6">
            <div class="card h-100">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                     <div class="avatar">
                        <div class="avatar-initial bg-label-primary rounded">
                           <i class="mdi mdi-currency-inr mdi-24px"></i>
                        </div>
                     </div>
                  </div>
                  <?php  $Total_pay_in= $this->db->select_sum('amount')->where('status','Accepted')->where('pack','1100')->get('investment')->row()->amount+0; ?>
                  <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">                    
                     <h5 class="mb-2">₹ <?=number_format($Total_pay_in , 2)?></h5>
                     <p class="text-muted mb-lg-2 mb-xl-3">Total Pay IN</p>
                  </div>
               </div>
            </div>
         </div>
         
         
       
         <div class="col-md-6 col-sm-6 col-6">
            <div class="card h-100">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                     <div class="avatar">
                        <div class="avatar-initial bg-label-primary rounded">
                           <i class="mdi mdi-currency-inr mdi-24px"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
                    <?php
                   $pack_count= $this->db->select_sum('pack_count')->where('status','Accepted')->where('pack','1100')->get('investment')->row()->pack_count+0;
                   $total_amount_of_pack = $pack_count*1100;
                   $finnn=$total_amount_of_pack*0.18;
                    ?>
                     <h5 class="mb-2">₹ <?=number_format($finnn ,2 )?></h5>
                     <p class="text-muted mb-lg-2 mb-xl-3">GST</p>
                  </div>
               </div>
            </div>
         </div>

           </div>
         </div>
          <?php }?>
         <!-- Multiple widgets -->
         <div class="col-md-6 col-xl-6">
            <div class="row g-4">
               <div class="col-md-6 col-sm-6 col-6">
                  <div class="card h-100">
                     <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                            <?php
                              $total_payout = $this->db->select_sum('amount', 'balance')->where('status','Accepted')->get('payout')->row()->balance + 0; 
                              $total_payout_today = $this->db->select_sum('amount', 'balance')->where('date(entry_date)', date('Y-m-d'))->where('status','Accepted')->get('payout')->row()->balance + 0; 
                              
                              if($total_payout > 0){
                                  $total_payout_per=($total_payout_today/$total_payout)*100;
                              }
                              ?> 
                           <div class="avatar">
                              <div class="avatar-initial bg-label-primary rounded">
                                 <i class="mdi mdi-currency-inr mdi-24px"></i>
                              </div>
                           </div>
                           <div class="d-flex align-items-center">
                              <p class="mb-0 text-success me-1">+<?=number_format($total_payout_per,2)?>%</p>
                              <i class="mdi mdi-chevron-up text-success"></i>
                           </div>
                        </div>
                        <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
                           
                           <h5 class="mb-2">₹<?= $total_payout?></h5>
                           <p class="text-muted mb-lg-2 mb-xl-3">Total Payout</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- overview Radial chart -->
               <div class="col-md-6 col-sm-6 col-6">
                  <div class="card">
                     <div class="card-header pb-0">
                        <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                           <?php
                        $pending_payout = $this->db->select_sum('amount', 'balance')->where('status','Request')->get('payout') ->row()->balance + 0; 
                 $pending_payout_today = $this->db->select_sum('amount', 'balance')->where('date(entry_date)', date('Y-m-d'))->where('status','Request')->get('payout') ->row()->balance + 0; 
                           if($pending_payout > 0){
                              $pending_payout_per=($pending_payout_today/$pending_payout)*100;
                           }
                              ?> 
                           <h4 class="mb-0 me-2">₹<?=$pending_payout?></h4>
                           <p class="mb-0 text-success">+<?=number_format($pending_payout_per , 2)?>%</p>
                        </div>
                        <span class="d-block mb-2 text-muted">Pending Payout</span>
                     </div>
                     <div class="card-body">
                        <div id="overviewChart" class="d-flex align-items-center"></div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-6">
                   <div class="swiper-container swiper-container-horizontal swiper swiper-sales" id="users">
               <div class="swiper-wrapper">
          
                     <div class="swiper-slide pb-3">
                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                           <div class="avatar">
                              <div class="avatar-initial bg-label-primary rounded">
                                 <i class="mdi mdi-currency-inr mdi-24px"></i>
                              </div>
                           </div>
                           <div class="d-flex align-items-center">
                              
                           </div>
                        </div>
                        <?php
                        $charge = $this->db->select_sum('admin_charge')->get('account_sub')->row()->admin_charge+0;
                        $charge_accunt = $this->db->select_sum('credit')->where('username',$this->session->userdata('ablisusername'))->where('remark','Admin_charge')->get('account_sub')->row()->credit+0;
                        ?>

                        <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
                           <h5 class="mb-2">₹<?=$charge?></h5>
                           <p class="text-muted mb-lg-2 mb-xl-3">Admin Charges</p>
                        </div>
                   
                  </div>
                  
                  <div class="swiper-slide pb-3">
                               <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                           <div class="avatar">
                              <div class="avatar-initial bg-label-info rounded">
                                 <i class="mdi mdi-currency-inr mdi-24px"></i>
                              </div>
                           </div>
                           <div class="d-flex align-items-center">
                             
                           </div>
                        </div>
                        <?php
                           $tds_charge = $this->db->select_sum('tds')->get('account_sub')->row()->tds+0;
                           ?>
                        <div class="card-info mt-4 pt-4">
                           <h5 class="mb-2">₹<?=$tds_charge?></h5>
                           <p class="text-muted">TDS</p>
                        </div> 
              
                  </div>
               </div>
               
               <div class="swiper-pagination"></div>
            </div>
               </div>
               <!--/ overview Radial chart -->
              
               <div class="col-md-6 col-sm-6 col-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                           <div class="avatar">
                              <div class="avatar-initial bg-label-info rounded">
                                 <i class="mdi mdi-currency-inr mdi-24px"></i>
                              </div>
                           </div>
                           <div class="d-flex align-items-center">
                             
                           </div>
                        </div>
                        
                        <div class="card-info  pt-4">
                            <?php
                           $direct_incomee = $this->db->select_sum('credit')->where('remark','Admin_charge')->get('account')->row()->credit+0;
                           ?>
                           <h5 class="mb-2"><?=$direct_incomee?></h5>
                           <p class="text-muted">Affiliate Incentive.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/ Multiple widgets -->
         <!-- Sales Country Chart -->
         <!--<div class="col-12 col-xl-4 col-md-6">-->
         <!--  <div class="card">-->
         <!--    <div class="card-header">-->
         <!--      <div class="d-flex justify-content-between">-->
         <!--        <h5 class="mb-1">Sales Country</h5>-->
         <!--        <div class="dropdown">-->
         <!--          <button-->
         <!--            class="btn p-0"-->
         <!--            type="button"-->
         <!--            id="salesCountryDropdown"-->
         <!--            data-bs-toggle="dropdown"-->
         <!--            aria-haspopup="true"-->
         <!--            aria-expanded="false">-->
         <!--            <i class="mdi mdi-dots-vertical mdi-24px"></i>-->
         <!--          </button>-->
         <!--          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesCountryDropdown">-->
         <!--            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>-->
         <!--            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>-->
         <!--            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>-->
         <!--          </div>-->
         <!--        </div>-->
         <!--      </div>-->
         <!--      <p class="mb-0 text-muted">Total $42,580 Sales</p>-->
         <!--    </div>-->
         <!--    <div class="card-body pb-1 px-0">-->
         <!--      <div id="salesCountryChart"></div>-->
         <!--    </div>-->
         <!--  </div>-->
         <!--</div>-->
         <!-- Sales Country Chart -->
         <div class="col-12 col-xl-6 col-md-6">
            <div class="card">
               <div class="card-header">
                  <div class="d-flex justify-content-between">
                     <h5 class="mb-1">Team By State</h5>
                     <!--<div class="dropdown">-->
                     <!--   <button-->
                     <!--      class="btn p-0"-->
                     <!--      type="button"-->
                     <!--      id="salesCountryDropdown"-->
                     <!--      data-bs-toggle="dropdown"-->
                     <!--      aria-haspopup="true"-->
                     <!--      aria-expanded="false">-->
                     <!--   <i class="mdi mdi-dots-vertical mdi-24px"></i>-->
                     <!--   </button>-->
                     <!--   <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesCountryDropdown">-->
                     <!--      <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>-->
                     <!--      <a class="dropdown-item" href="javascript:void(0);">Last Month</a>-->
                     <!--      <a class="dropdown-item" href="javascript:void(0);">Last Year</a>-->
                     <!--   </div>-->
                     <!--</div>-->
                  </div>
                  <?php $total_users=$this->db->where('user_type !=','a')->from('user_role')->count_all_results(); ?>
                  <p class="mb-0 text-muted">Total <?=$total_users?> Strength</p>
               </div>
               <div class="card-body pb-1 px-0">
                  <div id="salesStatesChart"></div>
               </div>
            </div>
         </div>
     <?php 
     
     /*   / Sales Country Chart 
         / Sales Country Chart 
          Top Referral Source  
         <div class="col-12 col-xl-7 col-md-6 ">
            <div class="card">
               <div class="card-header d-flex justify-content-between">
                  <div class="card-title m-0">
                     <h5 class="mb-0">Direct Refferal Details</h5>
                     <small class="text-muted">82% Activity Growth</small>
                  </div>
                  <div class="dropdown">
                     <button
                        class="btn p-0"
                        type="button"
                        id="earningReportsTabsId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                     <i class="mdi mdi-dots-vertical mdi-24px"></i>
                     </button>
                     <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                     </div>
                  </div>
               </div>
               <div class="card-body pb-3 mt-3">
                  <div class="tab-content p-0 ms-0 ms-sm-2">
                     <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                        <div class="table-responsive text-nowrap">
                           <table class="table table-borderless">
                              <thead>
                                 <tr>
                                    <th class="fw-medium text-heading">User Name</th>
                                    <th class="fw-medium text-heading">User ID</th>
                                    <th class="fw-medium text-heading">joining date</th>
                                    <th class="fw-medium text-heading">Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    $data = $this->db->where('user_type','a')->get('user_role')->row_array(); 
                                    $direct = $this->db->where('ref_id',$data['username'])->where('user_type !=','sub')->order_by('entry_date','DESC')->limit('5')->get('user_role')->result_array(); 
                                    $count=1;
                                    foreach($direct as $dirt) {
                                    ?> 
                                 <tr>
                                    <td class="text-heading fw-semibold ps-0"><?=$dirt['first_name']?></td>
                                    <td class=" text-success"><?=$dirt['username']?></td>
                                    <td class=" text-success"><?= date('d F Y', strtotime($dirt['entry_date'])) ?></td>
                                    <td class="pe-0"><span class="badge rounded-pill bg-label-primary"><?=$dirt['status']?></span></td>
                                    <?php } ?>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         / Top Referral Source  
          Weekly Sales Chart */ ?>
         
         
         
         <div class="col-12 col-xl-5 col-md-6 ">
            <div class="card">
               <div class="card-header">
                  <div class="d-flex justify-content-between">
                     <h5 class="mb-1">Repurchase</h5>
                     <div class="dropdown">
                        <button
                           class="btn p-0"
                           type="button"
                           id="weeklySalesDropdown"
                           data-bs-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklySalesDropdown">
                           <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                           <a class="dropdown-item" href="javascript:void(0);">Update</a>
                           <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                     </div>
                  </div>
                  <p class="text-muted mb-0">Total 85.4k Sales</p>
               </div>
               <div class="card-body ">
                  <div class="row mb-2">
                     <div class="col-6 d-flex align-items-center">
                        <div class="avatar">
                           <div class="avatar-initial bg-label-primary rounded">
                              <i class="mdi mdi-trending-up mdi-24px"></i>
                           </div>
                        </div>
                        <div class="ms-3 d-flex flex-column">
                           <small class="text-muted mb-1">Sales Incentive</small>
                           <h6 class="mb-0 fw-semibold">₹438.5K</h6>
                        </div>
                     </div>
                     <div class="col-6 d-flex align-items-center">
                        <div class="avatar">
                           <div class="avatar-initial bg-label-warning rounded">
                              <i class="mdi mdi-currency-inr mdi-24px"></i>
                           </div>
                        </div>
                        <div class="ms-3 d-flex flex-column">
                           <small class="text-muted mb-1">Purchases</small>
                           <h6 class="mb-0 fw-semibold">₹22.4K</h6>
                        </div>
                     </div>
                  </div>
                  <div id="weeklySalesChart"></div>
               </div>
            </div>
         </div>
         <!--/ Weekly Sales Chart-->
         <!-- Top Referral Source  -->
         <div class="col-12 col-xl-6 col-md-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between">
                  <div class="card-title m-0">
                     <h5 class="mb-0">Redeem Coupon</h5>
                     <!--<small class="text-muted">82% Activity Growth</small>-->
                  </div>
                  <!--<div class="dropdown">-->
                  <!--   <button-->
                  <!--      class="btn p-0"-->
                  <!--      type="button"-->
                  <!--      id="earningReportsTabsId"-->
                  <!--      data-bs-toggle="dropdown"-->
                  <!--      aria-haspopup="true"-->
                  <!--      aria-expanded="false">-->
                  <!--   <i class="mdi mdi-dots-vertical mdi-24px"></i>-->
                  <!--   </button>-->
                  <!--   <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">-->
                  <!--      <a class="dropdown-item" href="javascript:void(0);">View More</a>-->
                  <!--      <a class="dropdown-item" href="javascript:void(0);">Delete</a>-->
                  <!--   </div>-->
                  <!--</div>-->
               </div>
               <div class="card-body  pt-2 pb-1">
                  <ul class="nav nav-tabs nav-tabs-widget pb-3 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
                               <li class="nav-item">
                                <div
                                    class="nav-link active btn d-flex flex-column align-items-center justify-content-center"
                                    role="tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#navs-orders-new-id"
                                    aria-controls="navs-orders-new-id"
                                    aria-selected="true"
                                >
                                    <button type="button" class="btn btn-icon rounded-pill btn-label-warning">
                                        <img src="<?=BASEURL?>assets/img/wing/primebadge.svg" alt="Marketing and sales" width="84" class="rounded" />
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div
                                    class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                    role="tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#navs-sales-new-id"
                                    aria-controls="navs-sales-new-id"
                                    aria-selected="false"
                                >
                                    <button type="button" class="btn btn-icon rounded-pill btn-label-facebook waves-effect">
                                        <img src="<?=BASEURL?>assets/img/wing/plusbadge.svg" alt="Marketing and sales" width="84" />
                                    </button>
                                </div>
                            </li>
                  </ul>
                  <div class="tab-content p-0 ms-0 ms-sm-2">
                     <div class="tab-pane fade show active" id="navs-orders-new-id" role="tabpanel">
                        <div class="row">
                           <div class="col-lg-12">
                              <h5 class="fw-medium text-heading ">Prime Coupon</h5>
                              <div class=" p-3">
                                 <div class="d-flex justify-content-around align-items-center">
                                    <div class="">
                                       <!--<p class="">Status</p>-->
                                       <p class="">Redeem points</p>
                                       <p class="">Redeemed points</p>
                                       <p class="">Redeemeable points </p>
                                    </div>
                                    <div class="">
                                       <!--<p class="">:</p>-->
                                       <p class="">:</p>
                                       <p class="">:</p>
                                       <p class="">:</p>
                                    </div>
                                    <div class="">
                        <?php $prime_coupon=$this->db->where('type','Prime')->select_sum('reedem_credit') ->get('pin')->row()->reedem_credit +0 ; 
                        $prime_coupon_debit=$this->db->where('type','Prime')->select_sum('reedem_debit') ->get('pin')->row()->reedem_credit +0 ;
                        $prime_coupon_balance=$this->db->where('type','Prime')->select('sum(reedem_credit)-sum(reedem_debit) as balance') ->get('pin')->row()->balance +0 ;
                        
                        ?>               
                                       <!--<p class="badge rounded-pill bg-label-primary">Active</p>-->
                                       <p class="text-success"><?=$prime_coupon?></p>
                                       <p class=" fw-semibold"><?=$prime_coupon_debit?></p>
                                       <p class="fw-semibold"><?=$prime_coupon_balance?></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="navs-sales-new-id" role="tabpanel">
                        <div class="col-lg-12">
                           <h5 class="fw-medium text-heading">Plus Coupon</h5>
                           <div class=" p-3">
                              <div class="d-flex justify-content-around align-items-center">
                                 <div class="">
                                    <!--<p class="">Status</p>-->
                                    <p class="">Redeem points</p>
                                    <p class="">Redeemed points</p>
                                    <p class="">Redeemeable points </p>
                                 </div>
                                 <div class="">
                                    <!--<p class="">:</p>-->
                                    <p class="">:</p>
                                    <p class="">:</p>
                                    <p class="">:</p>
                                 </div>
                                  <?php $plus_coupon=$this->db->where('type','Plus')->select_sum('reedem_credit') ->get('pin')->row()->reedem_credit +0 ; 
                        $plus_coupon_debit=$this->db->where('type','Plus')->select_sum('reedem_debit') ->get('pin')->row()->reedem_credit +0 ;
                        $plus_coupon_balance=$this->db->where('type','Plus')->select('sum(reedem_credit)-sum(reedem_debit) as balance') ->get('pin')->row()->balance +0 ;
                        
                        ?>   
                                 <div class="">
                                    <!--<p class="badge rounded-pill bg-label-primary">Active</p>-->
                                    <p class="text-success"><?=$plus_coupon?></p>
                                    <p class=" fw-semibold"><?=$plus_coupon_debit?></p>
                                    <p class="fw-semibold"><?=$plus_coupon_balance?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/ Top Referral Source  -->
         <!-- Activity Timeline -->
           <div class="col-12 col-xl-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1">Activity Timeline</h5>
                        </div>
                    </div>
                    <?php $log_date=$this->db->select('log_date')->where('username',$this->session->userdata('staffusername'))->get('staff_panel')->row()->log_date ;
                    $logout_date=$this->db->select('logout_date')->where('username',$this->session->userdata('staffusername'))->get('staff_panel')->row()->logout_date ; 
                    
                    $log_date_last=$this->db->select('login_date_last')->where('username',$this->session->userdata('staffusername'))->get('staff_panel')->row()->login_date_last ;
                    $logout_date_last=$this->db->select('logout_date_last')->where('username',$this->session->userdata('staffusername'))->get('staff_panel')->row()->logout_date_last ; 
                    ?>
                    <div class="card-body pt-4 pb-1">
                        <ul class="timeline card-timeline mb-0">
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-info"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-2 fw-semibold">Login on 😍</h6>
                                        <small class="text-muted"><?= date('d F Y', strtotime($log_date_last)) ?></small>
                                    </div>
                                    <p class="text-muted mb-2"><?= date('h:i A', strtotime($log_date_last)) ?></p>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent border-0">
                                <span class="timeline-point timeline-point-warning"></span>
                                <div class="timeline-event pb-1">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-2 fw-semibold">Logout On</h6>
                                        <small class="text-muted"><?= date('d F Y', strtotime($logout_date_last)) ?></small>
                                    </div>
                                    <p class="text-muted mb-2"><?= date('h:i A', strtotime($logout_date_last)) ?></p>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-info"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-2 fw-semibold">Login on 😍</h6>
                                        <small class="text-muted"><?= date('d F Y', strtotime($log_date)) ?></small>
                                    </div>
                                    <p class="text-muted mb-2"><?= date('h:i A', strtotime($log_date)) ?></p>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent border-0">
                                <span class="timeline-point timeline-point-warning"></span>
                                <div class="timeline-event pb-1">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-2 fw-semibold">Logout On</h6>
                                        <small class="text-muted"><?= date('d F Y', strtotime($logout_date)) ?></small>
                                    </div>
                                    <p class="text-muted mb-2"><?= date('h:i A', strtotime($logout_date)) ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
         <!-- Activity Timeline -->
      </div>
   </div>
   <!-- / Content -->
   <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
<?php include 'footer.php';?>    
<script src="<?=BASEURL?>assets/js/dashboards-analytics.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
   // Initialize Swiper for the 'users' container
   var usersSwiper = new Swiper('#users', {
     // Configure the Swiper options here
     slidesPerView: 'auto',
     spaceBetween: 10,
     pagination: {
       el: '#users .swiper-pagination',
       clickable: true,
     },
   });
   
   // Initialize Swiper for the 'joiners' container
   var joinersSwiper = new Swiper('#joiners', {
     // Configure the Swiper options here
     slidesPerView: 'auto',
     spaceBetween: 10,
     pagination: {
       el: '#joiners .swiper-pagination',
       clickable: true,
     },
   });
</script>
<!-- Add the SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
   // Function to handle form submission
   function submitForm() {
     // Prevent the default form submission
     event.preventDefault();
   
     // Get the form element
     const form = document.getElementById('myForm');
   
     // Send the form data asynchronously
     fetch(form.action, {
       method: form.method,
       body: new FormData(form)
     })
     .then(response => {
       // Handle the response from the server
   
       // Close the modal
       const modal = document.getElementById('qoutemodal');
       const bootstrapModal = bootstrap.Modal.getInstance(modal);
       bootstrapModal.hide();
   
       // Show the SweetAlert notification
       Swal.fire({
         icon: 'success',
         title: 'Quote Update',
         text: 'Your Quote Update successfully.',
       });
     })
     .catch(error => {
       // Handle the error if the form submission fails
       console.error('Form submission error:', error);
       // Show an error message if needed
     });
   }
   
   // Add event listener to the form submit button
   document.getElementById('submitBtn').addEventListener('click', submitForm);
</script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>
<?php 
$kerala=$this->db->where('state','Kerala')->where('user_type !=','a')->from('user_role')->count_all_results();
$tamilnadu=$this->db->where('state','Tamil Nadu')->where('user_type !=','a')->from('user_role')->count_all_results();
$karnataka=$this->db->where('state','Karnataka')->where('user_type !=','a')->from('user_role')->count_all_results();
$andrapradesh=$this->db->where('state','Andra Pradesh')->where('user_type !=','a')->from('user_role')->count_all_results();
$exclude = array('Kerala', 'Tamil Nadu', 'Karnataka', 'Andhra Pradesh');
$others=$this->db->where_not_in('state',$exclude)->where('user_type !=','a')->from('user_role')->count_all_results();
?>
<script>
   document.addEventListener('DOMContentLoaded', function() {
     const salesStatesChartEl = document.querySelector('#salesStatesChart');
     const salesStatesChartConfig = {
       chart: {
         type: 'bar',
         height: 368,
         parentHeightOffset: 0,
         toolbar: {
           show: false
         }
       },
       series: [
         {
           name: 'Sales',
           data: [<?=$kerala?>, <?=$tamilnadu?>, <?=$karnataka?>, <?=$andrapradesh?>, <?=$others?>]
         }
       ],
       plotOptions: {
         bar: {
           borderRadius: 10,
           barHeight: '60%',
           horizontal: true,
           distributed: true,
           startingShape: 'rounded',
           dataLabels: {
             position: 'bottom'
           }
         }
       },
       dataLabels: {
         enabled: true,
         textAnchor: 'start',
         offsetY: 8,
         offsetX: 11,
         style: {
           fontWeight: 600,
           fontSize: '0.9375rem',
           fontFamily: 'Inter'
         }
       },
       tooltip: {
         enabled: false
       },
       legend: {
         show: false
       },
       colors: [
         '#7D82FF', // Sample primary color
         '#72e128', // Sample success color
         '#f9c851', // Sample warning color
         '#91a9d2', // Sample info color
         '#FF4D49'  // Sample danger color
       ],
       grid: {
         strokeDashArray: 8,
         borderColor: '#ddd', // Sample border color
         xaxis: { lines: { show: false } },
         yaxis: { lines: { show: false } },
         padding: {
           top: -18,
           left: 21,
           right: 33,
           bottom: 10
         }
       },
       xaxis: {
         categories: ['KL', 'TN', 'KA', 'AP', 'OTH'],
         labels: {
           formatter: function (val) {
             return Number(val / 100);
           },
           style: {
             fontSize: '0.9375rem',
             colors: '#333', // Sample label color
             fontFamily: 'Inter'
           }
         },
         axisBorder: {
           show: false
         },
         axisTicks: {
           show: false
         }
       },
       yaxis: {
         labels: {
           style: {
             fontWeight: 600,
             fontSize: '0.9375rem',
             colors: '#333', // Sample heading color
             fontFamily: 'Inter'
           }
         }
       },
       states: {
         hover: {
           filter: {
             type: 'none'
           }
         },
         active: {
           filter: {
             type: 'none'
           }
         }
       }
     };
   
     // Create ApexCharts instance and render the chart
     const salesStatesChart = new ApexCharts(salesStatesChartEl, salesStatesChartConfig);
     salesStatesChart.render();
   
     function applyChartStyles() {
       const htmlTag = document.querySelector('html');
       const isDarkMode = htmlTag.classList.contains('dark-style');
   
       // Update data labels style
       const dataLabels = document.querySelectorAll('.apexcharts-datalabel');
       dataLabels.forEach((label) => {
         label.style.fill = isDarkMode ? '#d2d2e8' : '#000';
       });
   
       // Update x-axis labels style
       const xLabels = document.querySelectorAll('.apexcharts-xaxis-label');
       xLabels.forEach((label) => {
         label.style.fill = isDarkMode ? '#d2d2e8' : '#000';
       });
   
       // Update y-axis labels style
       const yLabels = document.querySelectorAll('.apexcharts-yaxis-label');
       yLabels.forEach((label) => {
         label.style.fill = isDarkMode ? '#d2d2e8' : '#000';
       });
     }
   
     // Apply chart styles on page load
     applyChartStyles();
   
     // Apply chart styles when dark mode changes
     const observer = new MutationObserver(applyChartStyles);
     observer.observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });
   });
</script>