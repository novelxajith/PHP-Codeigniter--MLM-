<?php include 'header.php';?>
<style>
    button.btn.btn-icon.rounded-pill.btn-label-warning.waves-effect {
        width: auto !important;
        height: auto !important;
    }
    button.btn.btn-icon.rounded-pill.btn-label-facebook.waves-effect {
        width: auto !important;
        height: auto !important;
    }
    .swal2-styled.swal2-confirm {
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
@media only screen and (max-width : 991px) {

p.text-muted {
    font-size: 13px!important;
}
}
    @media screen and (min-width: 1200px) {
        .layout-content-navbar .layout-menu {
            z-index: 10 !important;
        }

    }
</style>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Content wrapper -->
<div class="content-wrapper">
    <?php $left_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','left')->where('ref_id',$this->session->userdata('ublisusername'))->get('user_role')->row()->username;
                            $right_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','right')->where('ref_id',$this->session->userdata('ublisusername'))->get('user_role')->row()->username; 
                           $usernames = array( $this->session->userdata('ublisusername'), $left_sub_user, $right_sub_user ); ?>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        
   
        <div class="row gy-4">
            <!-- Gamification Card -->
            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-md-7 order-2 order-md-1 mt-3">
                            <div class="card-body">
                                <?php $name=$this->db->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row_array(); ?>
                                <?php 
                           $quote = $this->db->get('quotes')->row_array(); ?>
                                <h5 class="card-title pb-xl-2">
                                    Welcome
                                    <strong>
                                        <?php echo $name['first_name'] ?>
                                        <?php echo $name['last_name'] ?>
                                    </strong>
                                    🎉
                                </h5>
                                <p class="mb-0">
                                    <span class="fw-semibold"><?=$quote['note'];?></span>
                                </p>
                                <p></p>
                                <a href="<?=BASEURL?>user/user_profile" class="btn btn-primary">View Profile</a>
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
            
                         <div class="col-lg-2 col-sm-6 col-6">
                            <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                    <?php $user_wallet=$this->db->select('sum(credit)-sum(debit) as balance')->where('username',$this->session->userdata('ublisusername'))->get('account_sub')->row()->balance+0 ; ?>
                                     <?php $with_wallet=$this->db->select('sum(credit)-sum(debit) as balance')->where('username',$this->session->userdata('ublisusername'))->get('withdraw_wallet')->row()->balance+0 ;
                                     $wall = $user_wallet + $with_wallet?>
                                     
                                    <!--<div class="avatar">-->
                                    <!--    <div class="avatar-initial bg-label-success rounded">-->
                                    <!--        <i class="mdi mdi-currency-inr mdi-24px"></i>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="d-flex align-items-center">
                                        <!--<p class="mb-0 text-success me-1">+38%</p>-->
                                        <div class="mb-0 text-success me-1" id="countdown"></div>

                                        <!--<i class="mdi mdi-chevron-up text-success"></i>-->
                                    </div>
                                </div>
                                <div class="card-info mt-4 pt-3">
                                    <h5 class="mb-2"><?=$wall?></h5>
                                    <p class="text-muted">Wallet</p>
                                  <a href="<?=BASEURL?>user/wallet"  <button class="btn btn-sm btn-primary waves-effect waves-light  mt-2">Withdraw</button></a>
                                </div>
                            </div>
                        </div>
            </div>
     
            <!-- Sessions line chart -->
            <div class="col-lg-2 col-sm-6 col-6">
                <div class="card h-100">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                            <?php 
             $quut=$this->db->where('username', $this->session->userdata('ublisusername'))->select_sum('credit')->where('DATE(entry_date)', date('Y-m-d'))->get('account_sub')->row()->credit+0;
                        //  echo $this->db->last_query();     
                                ?>
                            <h4 class="mb-0 me-2">
                                ₹
                                <?=$quut?>
                            </h4>
                            
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
   
            
            <div class="col-lg-6 col-md-6">
                <div class="swiper-container swiper-container-horizontal swiper swiper-sales" id="users">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide pb-3">
                            <h5 class="mb-2">Organization Wings</h5>
                            
                            <?php $left_user=$this->db->where('position','left')->where('parent_id',$this->session->userdata('ublisusername'))->get('tree')->row_array(); 
                            
                            if(!empty($left_user)){
                            $left=$this->db->like('team',$left_user['child_id'])->get('tree')->result_array(); 
                            $left_team = array(); 
                            $left_team[0] = $left_user; 
                            foreach ($left as $key) {
                                $left_team[] = $key;  
                            } 
                            
                            } 
                            if (!empty($left_team)) {
                            $final1 = count($left_team); 
                            }else { $final1 = 0; } ?>
                            
                            <?php $right_user=$this->db->where('position','right')->where('parent_id',$this->session->userdata('ublisusername'))->get('tree')->row_array(); 
                            
                            if(!empty($right_user)){
                            $right=$this->db->like('team',$right_user['child_id'])->get('tree')->result_array(); $right_team = array(); $right_team[0] = $right_user; 
                            foreach ($right as $keyy) { $right_team[] = $keyy; } 
                                
                            } 
                            if(!empty($right_team)) { $final2 = count($right_team); } 
                            
                            else { $final2 = 0; } ?>
                            
                            <div class="d-flex align-items-center gap-2">
                                <small>Total Users</small>
                                <div class="d-flex text-success">
                                    <small class="fw-medium"><?=$final1+$final2?></small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <img src="<?=BASEURL?>assets/img/wing/wing1.svg" alt="Marketing and sales" width="84" class="rounded" />
                                <div class="d-flex flex-column w-100 ms-4">
                                    <h6 class="mb-3">Wing 1</h6>
                                    <div class="row user">
                                        <div class="col-lg-6 col-12">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-2 pb-1 align-items-center">
                                                    <small class="mb-0 me-2 sales-text-bg bg-label-secondary"><?=$final1?></small>
                                                    <small class="mb-0 text-truncate">Team A</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex align-items-center">
                                                    <small class="mb-0 me-2 sales-text-bg bg-label-secondary"><?=$final2?></small>
                                                    <small class="mb-0 text-truncate"> Team B</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide pb-3">
                            <h5 class="mb-2">Organization Wings</h5>
                            <?php $left_user1=$this->db->where('position','left')->where('parent_id',$left_sub_user)->get('tree')->row_array(); if(!empty($left_user1)){
                            $left1=$this->db->like('team',$left_user1['child_id'])->get('tree')->result_array(); $left_team1 = array(); $left_team1[0] = $left_user1; foreach ($left1 as $key1) { $left_team1[] = $key1; } } if
                            (!empty($left_team1)) { $result1 = count($left_team1); } else { $result1 = 0; } ?>
                            <?php $right_user1=$this->db->where('position','right')->where('parent_id',$left_sub_user)->get('tree')->row_array(); if(!empty($right_user1)){
                            $right1=$this->db->like('team',$right_user1['child_id'])->get('tree')->result_array(); $right_team1 = array(); $right_team1[0] = $right_user1; foreach ($right1 as $keyy1) { $right_team1[] = $keyy1; } } if
                            (!empty($right_team1)) { $result2 = count($right_team1); } else { $result2 = 0; } ?>
                            <div class="d-flex align-items-center gap-2">
                                <small>Total Users</small>
                                <div class="d-flex text-success">
                                    <small class="fw-medium"><?=$result1+$result2?></small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <img src="<?=BASEURL?>assets/img/wing/wing2.svg" alt="Marketing and sales" width="84" class="rounded" />
                                <div class="d-flex flex-column w-100 ms-4">
                                    <h6 class="mb-3">Wing 2</h6>
                                    <div class="row user">
                                        <div class="col-lg-6 col-12">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-2 pb-1 align-items-center">
                                                    <small class="mb-0 me-2 sales-text-bg bg-label-secondary"><?=$result1?></small>
                                                    <small class="mb-0 text-truncate">Team A</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex align-items-center">
                                                    <small class="mb-0 me-2 sales-text-bg bg-label-secondary"><?=$result2?></small>
                                                    <small class="mb-0 text-truncate"> Team B</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide pb-3">
                            <h5 class="mb-2">Organization Wings</h5>
                            <?php $left_user2=$this->db->where('position','left')->where('parent_id',$right_sub_user)->get('tree')->row_array(); if(!empty($left_user2)){
                            $left2=$this->db->like('team',$left_user2['child_id'])->get('tree')->result_array(); $left_team2 = array(); $left_team2[0] = $left_user2; foreach ($left2 as $key2) { $left_team2[] = $key2; } } if
                            (!empty($left_team2)) { $result3 = count($left_team2); } else { $result3 = 0; } ?>
                            <?php $right_user2=$this->db->where('position','right')->where('parent_id',$right_sub_user)->get('tree')->row_array(); if(!empty($right_user2)){
                            $right2=$this->db->like('team',$right_user2['child_id'])->get('tree')->result_array(); $right_team2 = array(); $right_team2[0] = $right_user2; foreach ($right2 as $keyy2) { $right_team2[] = $keyy2; } } if
                            (!empty($right_team2)) { $result4 = count($right_team2); } else { $result4 = 0; } ?>
                            <div class="d-flex align-items-center gap-2">
                                <small>Total Users</small>
                                <div class="d-flex text-success">
                                    <small class="fw-medium"><?=$result3+$result4?></small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <img src="<?=BASEURL?>assets/img/wing/wing3.svg" alt="Marketing and sales" width="84" class="rounded" />
                                <div class="d-flex flex-column w-100 ms-4">
                                    <h6 class="mb-3">Wing 3</h6>
                                    <div class="row user">
                                        <div class="col-lg-6 col-12">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-2 pb-1 align-items-center">
                                                    <small class="mb-0 me-2 sales-text-bg bg-label-secondary"><?=$result3?></small>
                                                    <small class="mb-0 text-truncate">Team A</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex align-items-center">
                                                    <small class="mb-0 me-2 sales-text-bg bg-label-secondary"><?=$result4?></small>
                                                    <small class="mb-0 text-truncate">Team B</small>
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
            <div class="col-lg-6 col-md-6">
                <div class="swiper-container swiper-container-horizontal swiper swiper-sales" id="joiners">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide pb-3">
                            <h5 class="mb-2">Today's Joining </h5>
                            <?php
                                    $left_user3 = $this->db->where('position', 'left')->where('parent_id', $this->session->userdata('ublisusername'))->get('tree')->row_array();

                                    if (!empty($left_user3)) {
                                        $left3 = $this->db->like('team', $left_user3['child_id'])->get('tree')->result_array();
                                    
                                        array_unshift($left3, $left_user3);
                                    
                                        $today_results = [];
                                        $today_date = date('Y-m-d');
                                    
                                        foreach ($left3 as $item) {
                                            if (date('Y-m-d', strtotime($item['entry_date'])) === $today_date) {
                                                $today_results[] = $item;
                                            }
                                        }
                                    }

                                    
                                    if (!empty($today_results)) {
                                        $ans11 = count($today_results);
                                    } else {
                                        $ans11 = 0;
                                    }
                                    ?>
                                    
                                    
                                    <?php
                                    $right_user3 = $this->db->where('position', 'right')->where('parent_id', $this->session->userdata('ublisusername'))->get('tree')->row_array();
                                    
                                    if (!empty($right_user3)) {
                                        $right3 = $this->db->like('team', $right_user3['child_id'])->get('tree')->result_array();
                                        array_unshift($right3, $right_user3);
                                        
                                        $today_resultss = [];
                                        $today_datess = date('Y-m-d');
                                        
                                        foreach ($right3 as $items) {
                                                if (date('Y-m-d', strtotime($items['entry_date'])) === $today_datess) {
                                                    $today_resultss[] = $items;
                                                }
                                            }
                                        
                                    
                                    }
                                    
                                    if (!empty($today_resultss)) {
                                        $ans12 = count($today_resultss);
                                    } else {
                                        $ans12 = 0;
                                    }
                                    ?>

                            <div class="d-flex align-items-center gap-2">
                                <small>Wing Joiners </small>
                                <div class="d-flex text-success">
                                    <small class="fw-medium"><?=$ans11+$ans12?></small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <img src="<?=BASEURL?>assets/img/wing/wing1.svg" alt="Marketing and sales" width="84" class="rounded" />
                                <div class="d-flex flex-column w-100 ms-4">
                                    <h6 class="mb-3">Wing 1</h6>
                                    <div class="row Joining">
                                        <div class="col-lg-6 col-12">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-2 pb-1 align-items-center">
                                                    <small class="mb-0 me-2 sales-text-bg bg-label-secondary"><?=$ans11?></small>
                                                    <small class="mb-0 text-truncate">Team A</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex align-items-center">
                                                    <small class="mb-0 me-2 sales-text-bg bg-label-secondary"><?=$ans12?></small>
                                                    <small class="mb-0 text-truncate">Team B</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide pb-3">
                            <h5 class="mb-2">Today's Joining </h5>
                            <?php
                                    $left_user31 = $this->db->where('position', 'left')->where('parent_id', $left_sub_user)->get('tree')->row_array();

                                    if (!empty($left_user31)) {
                                        $left31 = $this->db->like('team', $left_user31['child_id'])->get('tree')->result_array();
                                    
                                        array_unshift($left31, $left_user31);
                                    
                                        $today_results31 = [];
                                        $today_date31 = date('Y-m-d');
                                    
                                        foreach ($left31 as $item31) {
                                            if (date('Y-m-d', strtotime($item31['entry_date'])) === $today_date31) {
                                                $today_results31[] = $item31;
                                            }
                                        }
                                    }

                                    
                                    if (!empty($today_results31)) {
                                        $ans13 = count($today_results31);
                                    } else {
                                        $ans13 = 0;
                                    }
                                    ?>
                                    
                                    
                                    <?php
                                    $right_user311 = $this->db->where('position', 'right')->where('parent_id', $left_sub_user)->get('tree')->row_array();
                                    
                                    if (!empty($right_user311)) {
                                        $right3311 = $this->db->like('team', $right_user311['child_id'])->get('tree')->result_array();
                                        array_unshift($right3311, $right_user311);
                                        
                                        $today_resultss311 = [];
                                        $today_datess311 = date('Y-m-d');
                                        
                                        foreach ($right3311 as $items311) {
                                                if (date('Y-m-d', strtotime($items311['entry_date'])) === $today_datess311) {
                                                    $today_resultss311[] = $items311;
                                                }
                                            }
                                        
                                    
                                    }
                                    
                                    if (!empty($today_resultss311)) {
                                        $ans23 = count($today_resultss311);
                                    } else {
                                        $ans23 = 0;
                                    }
                                    
                            if (!empty($right_team4)) { $ans23 = count($right_team4); } else { $ans23 = 0; } ?>
                            <div class="d-flex align-items-center gap-2">
                                <small>Wing Joiners  </small>
                                <div class="d-flex text-success">
                                    <small class="fw-medium"><?=$ans13+$ans23?></small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <img src="<?=BASEURL?>assets/img/wing/wing2.svg" alt="Marketing and sales" width="84" class="rounded" />
                                <div class="d-flex flex-column w-100 ms-4">
                                    <h6 class="mb-3">Wing 2</h6>
                                    <div class="row Joining">
                                        <div class="col-lg-6 col-12">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-2 pb-1 align-items-center">
                                                    <small class="mb-0 me-2 sales-text-bg bg-label-secondary"><?=$ans13?></small>
                                                    <small class="mb-0 text-truncate"> Team A</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex align-items-center">
                                                    <small class="mb-0 me-2 sales-text-bg bg-label-secondary"><?=$ans23?></small>
                                                    <small class="mb-0 text-truncate">Team B</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide pb-3">
                            <h5 class="mb-2">Today's Joining</h5>
                            <?php
                                    $left_user41 = $this->db->where('position', 'left')->where('parent_id', $right_sub_user)->get('tree')->row_array();

                                    if (!empty($left_user41)) {
                                        $left41 = $this->db->like('team', $left_user41['child_id'])->get('tree')->result_array();
                                    
                                        array_unshift($left41, $left_user41);
                                    
                                        $today_results41 = [];
                                        $today_date41 = date('Y-m-d');
                                    
                                        foreach ($left41 as $item41) {
                                            if (date('Y-m-d', strtotime($item41['entry_date'])) === $today_date41) {
                                                $today_results41[] = $item41;
                                            }
                                        }
                                    }

                                    
                                    if (!empty($today_results41)) {
                                        $ans14 = count($today_results41);
                                    } else {
                                        $ans14 = 0;
                                    }
                                    ?>
                                    
                                    
                                    <?php
                                    $right_user411 = $this->db->where('position', 'right')->where('parent_id', $right_sub_user)->get('tree')->row_array();
                                    
                                    if (!empty($right_user411)) {
                                        $right4411 = $this->db->like('team', $right_user411['child_id'])->get('tree')->result_array();
                                        array_unshift($right4411, $right_user411);
                                        
                                        $today_resultss411 = [];
                                        $today_datess411 = date('Y-m-d');
                                        
                                        foreach ($right4411 as $items411) {
                                                if (date('Y-m-d', strtotime($items411['entry_date'])) === $today_datess411) {
                                                    $today_resultss411[] = $items411;
                                                }
                                            }
                                        
                                    
                                    }
                                    
                                    if (!empty($today_resultss411)) {
                                        $ans24 = count($today_resultss411);
                                    } else {
                                        $ans24 = 0;
                                    }
                                    
                            ?>
                            
                            
                            <div class="d-flex align-items-center gap-2">
                                <small>Wing Joiners </small>
                                <div class="d-flex text-success">
                                    <small class="fw-medium"><?=$ans14+$ans24?></small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <img src="<?=BASEURL?>assets/img/wing/wing3.svg" alt="Marketing and sales" width="84" class="rounded" />
                                <div class="d-flex flex-column w-100 ms-4">
                                    <h6 class="mb-3">Wing 3</h6>
                                    <div class="row Joining">
                                        <div class="col-lg-6 col-12">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-2 pb-1 align-items-center">
                                                    <small class="mb-0 me-2 sales-text-bg bg-label-secondary"><?=$ans14?></small>
                                                    <small class="mb-0 text-truncate"> Team A</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex align-items-center">
                                                    <small class="mb-0 me-2 sales-text-bg bg-label-secondary"><?=$ans24?></small>
                                                    <small class="mb-0 text-truncate"> Team B</small>
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
            <!-- Multiple widgets -->
            <div class="col-md-6 col-xl-6">
                <div class="row g-4">
                    <!-- Total Revenue chart -->
                    <div class="col-md-6 col-sm-6 col-6">
                        <?php $holding_wallet=$this->db->select('sum(credit)-sum(debit) as balance')->where('username',$this->session->userdata('ublisusername'))->get('holding_wallet')->row()->balance+0 ; ?>
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                                    <h4 class="mb-0 me-2">₹<?=$holding_wallet?></h4>
                                    <p class="mb-0 text-danger"></p>
                                </div>
                                <span class="d-block mb-2 text-muted">Holding wallet</span>
                            </div>
                            <div class="card-body">
                                <div>
                                    <svg width="129" height="120" xmlns="http://www.w3.org/2000/svg" class="apexcharts-svg" xmlns:data="ApexChartsNS" style="background: 0 0;">
                                        <g class="apexcharts-inner apexcharts-graphical" transform="translate(-4 15)">
                                            <defs>
                                                <linearGradient id="a" x1="0" y1="0" x2="0" y2="1">
                                                    <stop stop-opacity=".4" stop-color="rgba(216,227,240,0.4)" offset="0" />
                                                    <stop stop-opacity=".5" stop-color="rgba(190,209,230,0.5)" offset="1" />
                                                    <stop stop-opacity=".5" stop-color="rgba(190,209,230,0.5)" offset="1" />
                                                </linearGradient>
                                                <clipPath id="b">
                                                    <rect width="141" height="93" x="-2" rx="0" ry="0" stroke-width="0" stroke-dasharray="0" fill="#fff" />
                                                </clipPath>
                                            </defs>
                                            <rect width="8.22" height="93" rx="0" ry="0" fill="url(#a)" class="apexcharts-xcrosshairs" filter="none" fill-opacity=".9" />
                                            <g class="apexcharts-xaxis">
                                                <g class="apexcharts-xaxis-texts-g" transform="translate(0 -4)" />
                                            </g>
                                            <g class="apexcharts-grid">
                                                <g class="apexcharts-gridlines-horizontal" />
                                                <g class="apexcharts-gridlines-vertical" />
                                                <path stroke="transparent" stroke-dasharray="0" d="M0 93h137M0 1v92" />
                                            </g>
                                            <g class="apexcharts-bar-series apexcharts-plot-series">
                                                <g class="apexcharts-series" data:realIndex="0">
                                                    <path
                                                        d="M8.905 93V42.2q0-5 5-5h-1.78q5 0 5 5V93h-8.22zm34.25 0V5q0-5 5-5h-1.78q5 0 5 5v88h-8.22zm34.25 0V28.25q0-5 5-5h-1.78q5 0 5 5V93h-8.22zm34.25 0V42.2q0-5 5-5h-1.78q5 0 5 5V93h-8.22z"
                                                        fill="rgba(102, 108, 255, 1)"
                                                        class="apexcharts-bar-area"
                                                        clip-path="url(#b)"
                                                    />
                                                    <g class="apexcharts-bar-goals-markers" style="pointer-events: none;">
                                                        <g />
                                                        <g />
                                                        <g />
                                                        <g />
                                                    </g>
                                                </g>
                                                <g class="apexcharts-series" data:realIndex="1">
                                                    <path
                                                        d="M17.125 93V64.52q0-5 5-5h-1.78q5 0 5 5V93h-8.22zm34.25 0V42.2q0-5 5-5h-1.78q5 0 5 5V93h-8.22zm34.25 0V74.75q0-5 5-5h-1.78q5 0 5 5V93h-8.22zm34.25 0V67.775q0-5 5-5h-1.78q5 0 5 5V93h-8.22z"
                                                        fill="rgba(253, 181, 40, 1)"
                                                        class="apexcharts-bar-area"
                                                        clip-path="url(#b)"
                                                    />
                                                    <g class="apexcharts-bar-goals-markers" style="pointer-events: none;">
                                                        <g />
                                                        <g />
                                                        <g />
                                                        <g />
                                                    </g>
                                                </g>
                                                <g class="apexcharts-datalabels" data:realIndex="0" />
                                                <g class="apexcharts-datalabels" data:realIndex="1" />
                                            </g>
                                            <path stroke="#b6b6b6" stroke-dasharray="0" class="apexcharts-ycrosshairs" d="M0 0h137" />
                                            <path class="apexcharts-ycrosshairs-hidden" d="M0 0h137" />
                                            <g class="apexcharts-yaxis-annotations" />
                                            <g class="apexcharts-xaxis-annotations" />
                                            <g class="apexcharts-point-annotations" />
                                        </g>
                                        <g class="apexcharts-yaxis">
                                            <g class="apexcharts-yaxis-texts-g" transform="translate(-8)" />
                                        </g>
                                        <g class="apexcharts-annotations" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Total Revenue chart -->
                     <!-- overview Radial chart -->
                    <div class="col-md-6 col-sm-6 col-6">
                        <?php $pending_payout_wallet=$this->db->select_sum('amount')->where('username',$this->session->userdata('ublisusername'))->where('status','Request')->get('payout')->row()->amount+0 ;
                        
                        $pending_payout_wallet_today=$this->db->select_sum('amount')->where('username',$this->session->userdata('ublisusername'))->where('date(entry_date)','date(Y-m-d)')->where('status','Request')->get('payout')->row()->amount+0 ; 
                        if($pending_payout_wallet > 0){
                        $pending_payout_wallet_percentage=($pending_payout_wallet_today/$pending_payout_wallet)*100;
                        }else{
                            $pending_payout_wallet_percentage=0;
                        }
                        ?>
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                                    <h4 class="mb-0 me-2">₹<?=$pending_payout_wallet?></h4>
                                    <p class="mb-0 text-success"><?//=number_format($pending_payout_wallet_percentage, 2)?></p>
                                </div>
                                <span class="d-block mb-2 text-muted">Pending Payout</span>
                            </div>
                            <div class="card-body">
                                <div id="overviewChart" class="d-flex align-items-center"></div>
                            </div>
                        </div>
                    </div>
                    <!--/ overview Radial chart -->
           
            <!-- Statistics Total Order -->
            <div class="col-md-6 col-sm-6 col-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                            <div class="avatar">
                                <div class="avatar-initial bg-label-info rounded">
                                    <i class="mdi mdi-currency-inr mdi-24px"></i>
                                </div>
                            </div>
                <?php 
                // $total_income=$this->db->where_in('username',$usernames)->select('sum(credit)-sum(debit) as balance')->get('account')->row()->balance+0 ;
                $total_income=$this->db->where('username',$this->session->userdata('ublisusername'))->select_sum('credit')->get('account_sub')->row()->credit+0 ;
                $today_incertive_today=$this->db->where('username',$this->session->userdata('ublisusername'))->where('date(entry_date)','date(Y-m-d)')->select_sum('credit')->get('account_sub')->row()->balance+0 ;
            if($total_income >0){
                $today_percentage_incentive=($my_wallet / $total_income) * 100;
            }else{
                $today_percentage_incentive=0;
            }
                
                
                ?>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 text-success me-1"><?//=number_format($today_percentage_incentive , 2 )?></p>
                                <i class="mdi mdi-chevron-up text-success"></i>
                            </div>
                        </div>
                        <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
                            
                            <h5 class="mb-2">₹<?=$total_income?></h5>
                            <p class="text-muted mb-lg-2 mb-xl-3">Total Incentive</p>
                            <!--<div class="badge bg-label-secondary rounded-pill">Last 4 Month</div>-->
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics Total Order -->
  
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                    <?php $affiliate_wallet=$this->db->select_sum('credit')->where('username',$this->session->userdata('ublisusername'))->where('remark','Direct Income')->get('account_sub')->row()->credit+0 ;
                                    $affiliate_wallet_today=$this->db->select_sum('credit')->where('username',$this->session->userdata('ublisusername'))->where('date(entry_date)','date(Y-m-d)')->where('remark','Direct Income')->get('account_sub')->row()->credit+0 ;
                                    if($affiliate_wallet > 0){
                                    $affiliate_wallet_percentage=($affiliate_wallet_today/$affiliate_wallet)*100;
                                    }else{
                                        $affiliate_wallet_percentage=0;
                                    }
                                    ?>
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-info rounded">
                                            <i class="mdi mdi-currency-inr mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 text-success me-1"><?//=number_format($affiliate_wallet_percentage , 2)?></p>
                                        <i class="mdi mdi-chevron-up text-success"></i>
                                    </div>
                                </div>
                                <div class="card-info mt-3 pt-4">
                                    <h5 class="mb-2">₹<?=$affiliate_wallet?></h5>
                                    <p class="text-muted">Affiliate Incentive</p>
                                    
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
                            <h5 class="mb-1">Team By States</h5>
                            <?php 
                            if($left_team){$left_team_count=count($left_team);}
                            if($right_team){$right_team_count=count($right_team);}
                            $state_strength=$left_team_count+$right_team_count; ?>
                            <!--<div class="dropdown">-->
                            <!--    <button class="btn p-0" type="button" id="salesCountryDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                            <!--        <i class="mdi mdi-dots-vertical mdi-24px"></i>-->
                            <!--    </button>-->
                            <!--    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesCountryDropdown">-->
                            <!--        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>-->
                            <!--        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>-->
                            <!--        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                        <p class="mb-0 text-muted">
                            Total
                            <?=$state_strength?>
                            strength
                        </p>
                    </div>
                    <div class="card-body pb-1 px-0">
                        <div id="salesStatesChart"></div>
                    </div>
                </div>
            </div>
            <!--/ Sales Country Chart -->
            <!-- Top Referral Source  -->
            <div class="col-12 col-xl-8 col-md-7">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title m-0">
                            <h5 class="mb-0"> Direct Refferal </h5>
                            <small class="text-muted">Last 5 Refferals</small>
                        </div>
                        <!--<div class="dropdown">-->
                        <!--  <button-->
                        <!--    class="btn p-0"-->
                        <!--    type="button"-->
                        <!--    id="earningReportsTabsId"-->
                        <!--    data-bs-toggle="dropdown"-->
                        <!--    aria-haspopup="true"-->
                        <!--    aria-expanded="false">-->
                        <!--    <i class="mdi mdi-dots-vertical mdi-24px"></i>-->
                        <!--  </button>-->
                        <!--  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">-->
                        <!--    <a class="dropdown-item" href="javascript:void(0);">View More</a>-->
                        <!--    <a class="dropdown-item" href="javascript:void(0);">Delete</a>-->
                        <!--  </div>-->
                        <!--</div>-->
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
                <?php $ref_usesrs=$this->db->order_by('entry_date','DESC')->limit('5')->where_in('ref_id',$usernames)->get('user_role')->result_array(); 
                                            foreach($ref_usesrs as $refss) { ?>
                                            <tr>
                                                <?php 
                                                $usertype_check=$this->db->where('username',$refss['username'])->get('user_role')->row_array();
                                                ($usertype_check['user_type']=="u") ? $username=$refss['username'] : $username="Bonus ID";
                                                ?>
                                                <td class="text-heading fw-semibold "><?=$refss['first_name']?></td>
                                                <td class="text-success"><?=$username?></td>
                                                <td class="text-success"><?= date('d F Y', strtotime($refss['entry_date'])) ?></td>
                                                <td class="">
                                                    <span class="badge rounded-pill bg-label-primary"><?=$refss['status']?></span>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Top Referral Source  -->
            <!-- Weekly Sales Chart-->
            <div class="col-12 col-xl-4 col-md-5">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1">Repurchase(coming soon)</h5>
                            <!--<div class="dropdown">-->
                            <!--    <button class="btn p-0" type="button" id="weeklySalesDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                            <!--        <i class="mdi mdi-dots-vertical mdi-24px"></i>-->
                            <!--    </button>-->
                            <!--    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklySalesDropdown">-->
                            <!--        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>-->
                            <!--        <a class="dropdown-item" href="javascript:void(0);">Update</a>-->
                            <!--        <a class="dropdown-item" href="javascript:void(0);">Share</a>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                        <!--<p class="text-muted mb-0">Total 85.4k Sales</p>-->
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-6 d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-primary rounded">
                                        <i class="mdi mdi-trending-up mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3 d-flex flex-column">
                                    <small class="text-muted mb-1">Net SI </small>
                                    <h6 class="mb-0 fw-semibold">₹0.00</h6>
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-warning rounded">
                                        <i class="mdi mdi-currency-inr mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3 d-flex flex-column">
                                    <small class="text-muted mb-1">Purchase</small>
                                    <h6 class="mb-0 fw-semibold">₹0.00</h6>
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
                        <!--    <button class="btn p-0" type="button" id="earningReportsTabsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                        <!--        <i class="mdi mdi-dots-vertical mdi-24px"></i>-->
                        <!--    </button>-->
                        <!--    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">-->
                        <!--        <a class="dropdown-item" href="javascript:void(0);">View More</a>-->
                        <!--        <a class="dropdown-item" href="javascript:void(0);">Delete</a>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                    <div class="card-body pt-2 pb-1">
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
                <?php $prime_reedem_point_balance=$this->db->where_in('username',$usernames)->where('remark','Activation')->where('type','Prime')->select('SUM(reedem_credit)-SUM(reedem_debit) as balance')->get('pin')->row()->balance+0 ;
                      $prime_reedem_point_sum = $this->db->where_in('username',$usernames)->where('remark','Activation')->where('type','Prime')->select_sum('reedem_credit')->get('pin')->row()->reedem_credit+0 ;
                      $prime_reedem_point_debit = $this->db->where_in('username',$usernames)->where('remark','Activation')->where('type','Prime')->select_sum('reedem_debit')->get('pin')->row()->reedem_debit+0 
                      ?>                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="fw-medium text-heading">Prime Coupon</h5>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-around align-items-center">
                                                <div class="">
                                                    <p class="">Status</p>
                                                    <p class="">Redeem points</p>
                                                    <p class="">Redeemed points</p>
                                                    <p class="">Redeemeable points</p>
                                                </div>
                                                <div class="">
                                                    <p class="">:</p>
                                                    <p class="">:</p>
                                                    <p class="">:</p>
                                                    <p class="">:</p>
                                                </div>
                                                <div class="">
                                                    <p class="badge rounded-pill bg-label-primary">Active</p>
                                                    <p class="text-success"><?=$prime_reedem_point_sum?></p>
                                                    <p class="fw-semibold"><?=$prime_reedem_point_debit?></p>
                                                    <p class="fw-semibold"><?=$prime_reedem_point_balance?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-sales-new-id" role="tabpanel">
                                <div class="col-lg-12">
                    <?php $plus_reedem_point_balance=$this->db->where_in('username',$usernames)->where('remark','Activation')->where('type','Plus')->select('SUM(reedem_credit)-SUM(reedem_debit) as balance')->get('pin')->row()->balance+0 ;
                      $plus_reedem_point_sum = $this->db->where_in('username',$usernames)->where('remark','Activation')->where('type','Plus')->select_sum('reedem_credit')->get('pin')->row()->reedem_credit+0 ;
                      $plus_reedem_point_debit = $this->db->where_in('username',$usernames)->where('remark','Activation')->where('type','Plus')->select_sum('reedem_debit')->get('pin')->row()->reedem_debit+0 
                      ?>   
                                    <h5 class="fw-medium text-heading">Plus Coupon</h5>
                                    <div class="p-3">
                                        <div class="d-flex justify-content-around align-items-center">
                                            <div class="">
                                                <p class="">Status</p>
                                                <p class="">Redeem points</p>
                                                <p class="">Redeemed points</p>
                                                <p class="">Redeemeable points</p>
                                            </div>
                                            <div class="">
                                                <p class="">:</p>
                                                <p class="">:</p>
                                                <p class="">:</p>
                                                <p class="">:</p>
                                            </div>
                                            <div class="">
                                                <p class="badge rounded-pill bg-label-primary">Active</p>
                                                <p class="text-success"><?=$plus_reedem_point_sum?></p>
                                                <p class="fw-semibold"><?=$plus_reedem_point_debit?></p>
                                                <p class="fw-semibold"><?=$plus_reedem_point_balance?></p>
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
                    <?php $log_date=$this->db->select('log_date')->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row()->log_date ;
                    $logout_date=$this->db->select('logout_date')->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row()->logout_date ; 
                    
                    $log_date_last=$this->db->select('login_date_last')->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row()->login_date_last ;
                    $logout_date_last=$this->db->select('logout_date_last')->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row()->logout_date_last ; 
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
<?php 

 $recentEntry = $this->db
        ->select('entry_date')
        ->where('username', $this->session->userdata('ublisusername'))
        ->order_by('entry_date', 'DESC')
        ->get('payout')
        ->row()->entry_date;

?>
<?php


$childIds = array_column($left_team, 'child_id');

$this->db->select('state');
$this->db->where_in('username', $childIds);
$query = $this->db->get('user_role');
$userRoles = $query->result_array();

$states = array_column($userRoles, 'state');

// Count occurrences of each state
$stateCounts = array_count_values($states);

// Specify the specific states to count individually
$specificStates = array('Kerala', 'Tamil Nadu', 'Andra Pradesh', 'Karnataka');

// Initialize the count for others
$othersCount = 0;

// Count the remaining states as others
foreach ($stateCounts as $state => $count) {
    if (!in_array($state, $specificStates)) {
        $othersCount += $count;
    }
}

// Retrieve the counts of specific states
$keralaCount = $stateCounts['Kerala'] ?? 0;
$tamilNaduCount = $stateCounts['Tamil Nadu'] ?? 0;
$andraPradeshCount = $stateCounts['Andra Pradesh'] ?? 0;
$karnatakaCount = $stateCounts['Karnataka'] ?? 0;

// Display the count for others
$othersCount = $othersCount;





$childIdss = array_column($right_team, 'child_id');

$this->db->select('state');
$this->db->where_in('username', $childIdss);
$query = $this->db->get('user_role');
$userRoless = $query->result_array();

$statess = array_column($userRoless, 'state');

// Count occurrences of each state
$stateCountss = array_count_values($statess);

// Specify the specific states to count individually
$specificStatess = array('Kerala', 'Tamil Nadu', 'Andra Pradesh', 'Karnataka');

// Initialize the count for others
$othersCountss = 0;

// Count the remaining states as others
foreach ($stateCountss as $statee => $countt) {
    if (!in_array($statee, $specificStatess)) {
        $othersCountss += $countt;
    }
}

// Retrieve the counts of specific states
$keralaCountss = $stateCountss['Kerala'] ?? 0;
$tamilNaduCountss = $stateCountss['Tamil Nadu'] ?? 0;
$andraPradeshCountss = $stateCountss['Andra Pradesh'] ?? 0;
$karnatakaCountss = $stateCountss['Karnataka'] ?? 0;

// Display the count for others
$othersCountss = $othersCountss;


?>
<!-- Content wrapper -->
<?php include 'footer.php';?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    // Initialize Swiper for the 'users' container
    var usersSwiper = new Swiper("#users", {
        // Configure the Swiper options here
        slidesPerView: "auto",
        spaceBetween: 10,
        pagination: {
            el: "#users .swiper-pagination",
            clickable: true,
        },
    });

    // Initialize Swiper for the 'joiners' container
    var joinersSwiper = new Swiper("#joiners", {
        // Configure the Swiper options here
        slidesPerView: "auto",
        spaceBetween: 10,
        pagination: {
            el: "#joiners .swiper-pagination",
            clickable: true,
        },
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const salesStatesChartEl = document.querySelector("#salesStatesChart");
        const salesStatesChartConfig = {
            chart: {
                type: "bar",
                height: 368,
                parentHeightOffset: 0,
                toolbar: {
                    show: false,
                },
            },
            series: [
                {
                    name: "Sales",
                    data: [<?=$keralaCount+$keralaCountss?>, <?=$tamilNaduCount+$tamilNaduCountss?>, <?=$andraPradeshCount+$andraPradeshCountss?>, <?=$karnatakaCount+$karnatakaCountss?>, <?=$othersCount+$othersCountss?>],
                },
            ],
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    barHeight: "60%",
                    horizontal: true,
                    distributed: true,
                    startingShape: "rounded",
                    dataLabels: {
                        position: "bottom",
                    },
                },
            },
            dataLabels: {
                enabled: true,
                textAnchor: "start",
                offsetY: 8,
                offsetX: 11,
                style: {
                    fontWeight: 600,
                    fontSize: "0.9375rem",
                    fontFamily: "Inter",
                },
            },
            tooltip: {
                enabled: false,
            },
            legend: {
                show: false,
            },
            colors: [
                "#7D82FF", // Sample primary color
                "#72e128", // Sample success color
                "#f9c851", // Sample warning color
                "#91a9d2", // Sample info color
                "#FF4D49", // Sample danger color
            ],
            grid: {
                strokeDashArray: 8,
                borderColor: "#ddd", // Sample border color
                xaxis: { lines: { show: false } },
                yaxis: { lines: { show: false } },
                padding: {
                    top: -18,
                    left: 21,
                    right: 33,
                    bottom: 10,
                },
            },
            xaxis: {
                categories: ["KL", "TN", "KA", "AP", "OTH"],
                labels: {
                    formatter: function (val) {
                        return Number(val / 100).toFixed(2);
                    },
                    style: {
                        fontSize: "0.9375rem",
                        colors: "#333", // Sample label color
                        fontFamily: "Inter",
                    },
                },
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
            },
            yaxis: {
                labels: {
                    style: {
                        fontWeight: 600,
                        fontSize: "0.9375rem",
                        colors: "#333", // Sample heading color
                        fontFamily: "Inter",
                    },
                },
            },
            states: {
                hover: {
                    filter: {
                        type: "none",
                    },
                },
                active: {
                    filter: {
                        type: "none",
                    },
                },
            },
        };

        // Create ApexCharts instance and render the chart
        const salesStatesChart = new ApexCharts(salesStatesChartEl, salesStatesChartConfig);
        salesStatesChart.render();

        function applyChartStyles() {
            const htmlTag = document.querySelector("html");
            const isDarkMode = htmlTag.classList.contains("dark-style");

            // Update data labels style
            const dataLabels = document.querySelectorAll(".apexcharts-datalabel");
            dataLabels.forEach((label) => {
                label.style.fill = isDarkMode ? "#d2d2e8" : "#000";
            });

            // Update x-axis labels style
            const xLabels = document.querySelectorAll(".apexcharts-xaxis-label");
            xLabels.forEach((label) => {
                label.style.fill = isDarkMode ? "#d2d2e8" : "#000";
            });

            // Update y-axis labels style
            const yLabels = document.querySelectorAll(".apexcharts-yaxis-label");
            yLabels.forEach((label) => {
                label.style.fill = isDarkMode ? "#d2d2e8" : "#000";
            });
        }

        // Apply chart styles on page load
        applyChartStyles();

        // Apply chart styles when dark mode changes
        const observer = new MutationObserver(applyChartStyles);
        observer.observe(document.documentElement, { attributes: true, attributeFilter: ["class"] });
    });
</script>

<script>
  // Get the recent entry date from PHP
  var recentEntryDate = "<?php echo $recentEntry; ?>";

  // Check if the recent entry date is empty
  if (recentEntryDate === "") {
    // Display "You can withdraw now" message
    document.getElementById("countdown").innerHTML = "";
  } else {
    // Calculate the target time which is 24 hours from the recent entry
    var targetTime = new Date(recentEntryDate);
    targetTime.setHours(targetTime.getHours() + 24);

    // Update the countdown every second
    var countdownElement = document.getElementById("countdown");
    setInterval(updateCountdown, 1000);

    function updateCountdown() {
      // Get the current time
      var currentTime = new Date();

      // Calculate the remaining time in milliseconds
      var remainingTime = targetTime - currentTime;

      // Check if the countdown has ended
      if (remainingTime <= 0) {
        countdownElement.innerHTML = "You Can Place Withdraw Request Now";
        return;
      }

      // Calculate the remaining hours, minutes, and seconds
      var hours = Math.floor(remainingTime / (1000 * 60 * 60));
      var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

      // Display the remaining time in the countdown element
      countdownElement.innerHTML = hours + "h " + minutes + "m " + seconds + "s";
    }
  }
</script>

