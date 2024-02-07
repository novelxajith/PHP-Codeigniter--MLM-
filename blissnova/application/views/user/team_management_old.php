<?php include 'header.php';?>
<style>
.card-body .team {
    padding: 0!important;
}
/*a#button1 {*/
/*    border: 1px solid #26c6f9;*/
/*}*/
/*a#button2 {*/
/*    border: 1px solid #26c6f9;*/
/*}*/
/*a#button3 {*/
/*    border: 1px solid #26c6f9;*/
/*}*/
img#wingbadge {
    width: 15px;
    margin-left: 7px!important;
}
img#badge {
    width: 30px;
    /* float: right; */
    /* right: 0; */
    margin-top: 10px;
    margin-left: 50px;
}
span.badge {
    top: 36px;
    position: absolute;
    margin-left: -30px;
}
h3.heading {
  display: flex;
  justify-content: center;
}
span.teamauser {
  display: flex;
  align-items: center;
}
span.teambuser {
  display: flex;
  align-items: center;
}
a#button1 {
    border: #d1ba38 solid 3px;
    width: 70%;
}

a#button2 {
    border: #27a9ff solid 3px;
    width: 70%;
}
a#button3 {
    border: #27a9ff solid 3px;
    width: 70%;
}
@media screen and (max-width: 768px) {
  img#badge {
  width: 14px;

margin-top: 10px;
margin-left: 50px;
}
span.teamauser {
  display: flex;
  font-size: 12px;
  align-items: center;
}
span.teambuser {
  display: flex;
  font-size: 12px;
  align-items: center;
}
span.teamb {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px!important;
}
span.teama {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px!important;
}
span.badge {
  top: 5px;
  position: absolute;
  margin-left: -37px;
}
a#button1 {
    font-size: 12px;
}
a#button2 {
    font-size: 12px;
}
a#button3 {
    font-size: 12px;
}
.nav-fill .nav-item .nav-link, .nav-justified .nav-item .nav-link {
    width: 90px;
    display: flex;
    flex-direction: row;
}
.avatar-md.profile-user-wid.m.m-0 {
  width: 32px;
  left: 6px;
  position: absolute;
  top: 13px;
}
 span.mobileh5 {
    top: 19px;
    font-size: 10px;
    position: absolute;
}
span.mobileh6 {

  position: absolute;
  font-size: 9px;
}
.col-lg-5.mt-3 {
  display: flex;
}
button.btn.btn-primary.m-1.waves-effect.waves-light {
  font-size: 13px;
}
a.btn.btn-primary.m-1.waves-effect.waves-light {
  font-size: 13px;
}

.tab-content:not(.doc-example-content) {
  padding: 0px!important; 
  border-radius: 0.5rem;
}
} 

.col-xl-4.col-lg-5..col-5.item.triplewingachivers {
  margin-top: 10px;
}
span.teama {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
} 
span.teamb {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
} 

   img#plus {
   border: 3px solid #27a9ff;
   }
   img#prime {
   border: 3px solid #CFB730;
   }
   img#free {
   border: 3px solid #808080;
   }
</style>
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Team Management</h5>
        <div class="card-body team">
          <div class="col-xl-12">
            <div class="nav-align-top mb-4">
              <!--<ul class="nav nav-pills mb-3 nav-fill" role="tablist">-->
                <?php 
                  $left=$this->db->select('username')->where('ref_id', $this->session->userdata('ublisusername'))->where('user_type','sub')->where('position','left')->get('user_role')->row()->username;
                  $right=$this->db->select('username')->where('ref_id', $this->session->userdata('ublisusername'))->where('user_type','sub')->where('position','right')->get('user_role')->row()->username;

                  if($wing=="") { $one="active"; $two=""; $three="";} 
                  if($wing=="wing1") { $one="active"; $two=""; $three="";} 
                  if($wing=="wing2") { $two="active"; $one=""; $three="";} 
                  if($wing=="wing3") { $three="active"; $one=""; $two="";}
                  
                ?>
            <?php
             $usertypebadge_main = $this->db->select_max('credit')->where('username',  $this->session->userdata('ublisusername'))->where('remark', 'Activation')->get('pin')->row()->credit + 0;
              $usertypebadge_left = $this->db->select_max('credit')->where('username',  $left)->where('remark', 'Activation')->get('pin')->row()->credit + 0;
               $usertypebadge_right = $this->db->select_max('credit')->where('username',  $right)->where('remark', 'Activation')->get('pin')->row()->credit + 0;
             
             if($usertypebadge_main ==1100){$badgetype_main="button2"; }if($usertypebadge_main == 10000){$badgetype_main="button1";}if($usertypebadge_main==""){$badgetype_main="";}
             if($usertypebadge_left ==1100){$badgetype_left="button2"; }if($usertypebadge_left == 10000){$badgetype_left="button1";}if($usertypebadge_left==""){$badgetype_left="";}
             if($usertypebadge_right ==1100){$badgetype_right="button2"; }if($usertypebadge_right == 10000){$badgetype_right="button1";}if($usertypebadge_right==""){$badgetype_right="";}
            
            
            ?>

          <!--      <li class="nav-item">-->
          <!--        <a id="button1"-->
          <!--        href="<?=BASEURL?>user/team_management/<?=$this->session->userdata('ublisusername')?>/wing1"-->
          <!--        class="nav-link <?=$one?>"-->
          <!--        > Wing 1-->
          <!--       <img src="https://demo-web-site.com/blissnova/newdev/assets/images/badges/<?=$badgetype_main?>" alt="" class="img-thumbnail rounded-circle " id="wingbadge">-->
          <!--      </a>-->
                
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a id="button2"-->
          <!--      class="nav-link <?=$two?>"-->
          <!--      href="<?=BASEURL?>user/team_management/<?=$left?>/wing2"-->
          <!--      >Wing 2-->
          <!--       <img src="https://demo-web-site.com/blissnova/newdev/assets/images/badges/<?=$badgetype_left?>" alt="" class="img-thumbnail rounded-circle" id="wingbadge">-->
          <!--    </a>-->

          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--    <a id="button3"-->
          <!--    class="nav-link <?=$three?>"-->
          <!--    href="<?=BASEURL?>user/team_management/<?=$right?>/wing3"-->
          <!--    >Wing 3-->
          <!--     <img src="https://demo-web-site.com/blissnova/newdev/assets/images/badges/<?=$badgetype_right?>" alt="" class="img-thumbnail rounded-circle " id="wingbadge">-->
          <!--  </a>-->

          <!--</li>-->
        <!--</ul>-->
        
        <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                            
                <li class="nav-item">
                  <a id="<?=$badgetype_main?>" href="<?=BASEURL?>user/team_management/<?=$this->session->userdata('ublisusername')?>/wing1" class="nav-link  btn btn-md <?=$one?>"> Wing 1
                
                </a>
                
              </li>
              <li class="nav-item">
                <a id="<?=$badgetype_left?>" class="nav-link btn  btn-md <?=$two?>" href="<?=BASEURL?>user/team_management/<?=$left?>/wing2">Wing 2
                 
              </a>

            </li>
            <li class="nav-item">
              <a id="<?=$badgetype_right?>" class="nav-link btn btn-md <?=$three?>" href="<?=BASEURL?>user/team_management/<?=$right?>/wing3">Wing 3
              
            </a>

          </li>
        </ul>
        <div class="tab-content">
                        <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
                           <div class="row mt-2 d-flex justify-content-center">
                              <div class="col-lg-3">
                                 <label for="searchInput">Search:</label>
                                 <input class="form-control" type="text" id="searchInput" placeholder="Enter search term..." oninput="this.value = this.value.toUpperCase()">
                              </div>
                              <div class="col-lg-5 mt-3">
                                 <button type="button" class="btn  btn-primary m-1 waves-effect waves-light" onclick="share()">
                                 <span class="tf-icons mdi mdi-share"></span>Copy-link
                                 </button>
                                 <a class="btn btn-primary m-1 waves-effect waves-light" href="<?=BASEURL?>user/registration/<?=$this->session->userdata('ublisusername')?>" id="myLink" 
                                 <span class="tf-icons mdi mdi-plus me-1"></span> Add user
                                 </a>
                              </div>
                              <?php $left_free=$this->db->select('username')->where('user_type','sub')->where('ref_id',$this->session->userdata('ublisusername'))->where('position','left')->get('user_role')->row()->username; 
                                 $right_free=$this->db->select('username')->where('user_type','sub')->where('ref_id',$this->session->userdata('ublisusername'))->where('position','right')->get('user_role')->row()->username;
                                 ?>
                           </div>
                           <div class="row mt-3 d-flex justify-content-center">
                              <div class="col-lg-5  col-6 mt-2">
                                 <div class="card border  ">
                                    <div class="card-body">
                                       <div class="row justify-content-center mobile">
                                          <?php
                                            
                                             $left_user = $this->db->where('position', 'left')->where('parent_id', $sponsor['username'])->get('tree')->row_array();
                                             if (!empty($left_user)) {
                                                $left = $this->db->like('team', $left_user['child_id'])->get('tree')->result_array();
                                                array_unshift($left, $left_user); 
                                                $left_team = $left;
                                            }

                                             
                                             $left_count = ($left_team) ? count($left_team) : 0;
                                            
                                             ?>
                                          <div class="d-flex justify-content-center"><span class="teama">TEAM A &nbsp<i class="mdi mdi-information mdi-24px " id="team_a" data-bs-toggle="popover" data-bs-content="team_a" data-bs-placement="right" data-bs-html="true" data-bs-title="Team Details"></i></span></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-5  col-6 mt-2">
                                 <div class="card border  ">
                                    <div class="card-body">
                                       <div class="row justify-content-center mobile">
                                          <!--RIGHT TEAM-->
                                          <?php 
                                            $right_user=$this->db->where('position','right')->where('parent_id',$sponsor['username'])->get('tree')->row_array();
                                                 if (!empty($right_user)) {
                                                    $right=$this->db->like('team',$right_user['child_id'])->get('tree')->result_array();
                                                    array_unshift($right, $right_user); 
                                                    $right_team = $right;
                                                }
                                            
                                             ($right_team) ? $right_count=count($right_team) : $right_count="0"
                                        
                                             ?>
                                          <div class="d-flex justify-content-center"><span class="teamb">TEAM B &nbsp <i class="mdi mdi-information mdi-24px " id="team_b" data-bs-toggle="popover" data-bs-content="team_a" data-bs-placement="right" data-bs-html="true" data-bs-title="Team Details"></i></span></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                          <?php
                          $id_act_check = $this->db->select_max('credit')->where('username',$sponsor['username'])->where('remark','Activation')->get('pin')->row()->credit+0 ;
                          if($id_act_check > 0) { ?> 
                           
                           <div class="row mt-3 d-flex justify-content-center user-list" id="items" >
                              <div class="col-lg-5  col-6 mt-2 item singlewingachivers">
                                 <div class="row ">
                                    <?php 
                                       
                                       
                                       foreach($left_team as $key){
                                       $inv=$this->db->select_max('credit')->where('username',$key['child_id'])->where('remark','Activation')->get('pin')->row()->credit+0;
                                       if($inv==1100){ $badge_left="border-info"; }elseif($inv==10000){ $badge_left="border-warning"; }else{$badge_left="";}
                                       if($inv==1100){ $icon_left="plusbadge.png"; }elseif($inv==10000){ $icon_left="primebadge.png"; }else{$icon_left="";}
                                       $name=$this->db->where('username',$key['child_id'])->get('user_role')->row_array();
                                       $popoverTargetId = 'popoverTarget_' . uniqid();
                                       ?>
                                
                                       <div class="col-lg-12  col-12 mt-2 item singlewingachivers">
                                          <div class="card border <?=$badge_left?> user">
                                             <div class="card-body ">
                                                <div class="row mobile">
                                                   <div class="col-lg-3 col-md-3 col-1">
                                                      <div class="avatar-md profile-user-wid m m-0" id="<?= $popoverTargetId ?>">
                                                         <img src="<?=BASEURL?>assets/images/<?=$name['profile_image']?>" alt="" class="img-thumbnail rounded-circle">
                                                         <span class="badge">
                                                         <img src="<?=BASEURL?>assets/images/badges/<?=$icon_left?>" alt="" class="img-thumbnail rounded-circle" id="badge">
                                                         </span>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                           <a href="<?=BASEURL?>user/team_management/<?=$key['child_id']?>/<?=$wing?>">
                                                      
                                                      <?php
                                                      $usertype_checkkk=$this->db->where('username',$key['child_id'])->get('user_role')->row_array(); 
                                                      
            if($usertype_checkkk['user_type'] == "u"){ ?>
                                                      <h4> <span class="mobileh5 username">Wing 1</span></h4>
                                                      <h5><span class="mobileh6 position" ><?php echo $name['first_name'] ?> <?php echo $name['last_name'] ?></span></h5>
            <?php }if($usertype_checkkk['user_type'] == "sub" && $usertype_checkkk['position'] == "left" && $usertype_checkkk['ref_id'] != $this->session->userdata('ublisusername')){ ?>
                                                      <h4> <span class="mobileh5 username">Wing 2</span></h4>
                                                      <h5><span class="mobileh6 position" ><?php echo $name['first_name'] ?> <?php echo $name['last_name'] ?></span></h5>
            <?php } if($usertype_checkkk['user_type'] == "sub" && $usertype_checkkk['position'] == "right" && $usertype_checkkk['ref_id'] != $this->session->userdata('ublisusername')) { ?>
                                                      <h4> <span class="mobileh5 username">Wing 3</span></h4>
                                                      <h5><span class="mobileh6 position" ><?php echo $name['first_name'] ?> <?php echo $name['last_name'] ?></span></h5>
            <?php } if($usertype_checkkk['user_type'] == "sub" && $usertype_checkkk['ref_id'] == $this->session->userdata('ublisusername')) { ?>
                                                       <h4> <span class="mobileh5 username">Bonus ID</span></h4>
                                                      <h5><span class="mobileh6 position" ><?php echo $name['first_name'] ?> <?php echo $name['last_name'] ?></span></h5>
            <?php } ?>
                                                       </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                   
                                    <?php $user_role=$this->db->where('username',$key['child_id'])->get('user_role')->row_array();
                        $poss=$this->db->where('child_id',$key['child_id'])->get('tree')->row_array(); 
                        
                        $activewing_left_user=$this->db->where('ref_id',$key['child_id'])->where('user_type','sub')->where('position','left')->get('user_role')->row_array();
                        $activewing_right_user=$this->db->where('ref_id',$key['child_id'])->where('user_type','sub')->where('position','right')->get('user_role')->row_array();
                        
                        $activewing=$this->db->where('username',$key['child_id'])->where('status','Active')->count_all_results('user_role')+0;
                        $activewing_left=$this->db->where('username',$activewing_left_user['username'])->where('status','Active')->count_all_results('user_role')+0;
                        $activewing_right=$this->db->where('username',$activewing_right_user['username'])->where('status','Active')->count_all_results('user_role')+0;
                        
                        $activewing_left_plus_wing1 = $this->db->where('username',$key['child_id'])->where('plus_deposit >','0')->where('prime_deposit ','0.00')->count_all_results('user_role')+0;
                        $activewing_left_plus_wing2 = $this->db->where('username',$activewing_left_user['username'])->where('plus_deposit >','0')->where('prime_deposit ','0.00')->count_all_results('user_role')+0;
                        $activewing_left_plus_wing3 = $this->db->where('username',$activewing_right_user['username'])->where('plus_deposit >','0')->where('prime_deposit ','0.00')->count_all_results('user_role')+0;
                        
                        $activewing_left_prime_wing1 = $this->db->where('username',$key['child_id'])->where('prime_deposit >','0.00')->count_all_results('user_role')+0;
                        $activewing_left_prime_wing2 = $this->db->where('username',$activewing_left_user['username'])->where('prime_deposit >','0.00')->count_all_results('user_role')+0;
                        $activewing_left_prime_wing3 = $this->db->where('username',$activewing_right_user['username'])->where('prime_deposit >','0.00')->count_all_results('user_role')+0; 
                        
                $today_left_plus_wing1 = $this->db->select_sum('credit')->where('username',$key['child_id'])->where('description','Plus')->where('date(entry_date) ',date('Y-m-d'))->get('account_sub')->row()->credit+0;
                $today_left_prime_wing1 = $this->db->select_sum('credit')->where('username',$key['child_id'])->where('description','Prime')->where('date(entry_date) ',date('Y-m-d'))->get('account_sub')->row()->credit+0;
                
                $today_left_plus_wing1_count=($today_left_plus_wing1/270);
                $today_left_prime_wing1_count=($today_left_prime_wing1/900);
                
                $today_left_plus_wing1_total=($today_left_plus_wing1_count*30)+$today_left_plus_wing1;
                $today_left_prime_wing1_total=($today_left_prime_wing1_count*90)+$today_left_prime_wing1;
                
                 if($usertype_checkkk['user_type'] == "u"){
                    $child_left = $key['child_id'];
                    $left_name="User ID :";
                }else{
                    $child_left="";
                     $left_name="";
                }
                
                ?> 
                                       
                        <script>
                          document.addEventListener("DOMContentLoaded", function() {
                            var popoverTrigger = document.getElementById("<?= $popoverTargetId ?>");
                            var userid = "<?= $child_left ?>";
                            var refid = "<?= $user_role['ref_id'] ?>";
                            var joindate = "<?= $user_role['entry_date'] ?>";
                            var position = "<?= $activewing+$activewing_left+$activewing_right ?>";
                            var plus = "<?= $activewing_left_plus_wing1+$activewing_left_plus_wing2+$activewing_left_plus_wing3 ?>";
                            var prime = "<?= $activewing_left_prime_wing1+$activewing_left_prime_wing2+ $activewing_left_prime_wing3?>";
                            var todayprime=<?=$today_left_prime_wing1_total?>;
                            var todayplus=<?=$today_left_plus_wing1_total?>;
                            popoverTrigger.setAttribute("data-bs-content", userid,refid,joindate,position,plus,prime,todayprime,todayplus);
                            var popover = new bootstrap.Popover(popoverTrigger, {
                            trigger: "hover", // Set the trigger to "hover" for hover behavior
                            //content: childId
                            content: "<?=$left_name?> " + userid + "<br>Join Date: " + joindate + "<br>Sponsor ID: " + refid + "<br>Today Prime: " + todayprime + "<br>Today Plus: " + todayplus,
                            html: true,
                            title: "User Details",
                            });
                          });
                        </script>
                                    <?php } ?>   
                                 </div>
                              </div>
                              <div class=" col-lg-5  col-6 mt-2 item doublewingachivers">
                                 <div class="row ">
                                    <?php 
                                     
                                                  foreach($right_team as $keyy){
                                       $invv=$this->db->select_max('credit')->where('username',$keyy['child_id'])->where('remark','Activation')->get('pin')->row()->credit+0;
                                                  if($invv==1100){ $badge_right="border-info"; }elseif($invv==10000){ $badge_right="border-warning"; }else{$badge_right="";}
                                                  if($invv==1100){ $icon_right="plusbadge.png"; }elseif($invv==10000){ $icon_right="primebadge.png"; }else{$icon_right="";}
                                                  $namee=$this->db->where('username',$keyy['child_id'])->get('user_role')->row_array();
                                                  $popovereTargetId = 'popoverTarget_' . uniqid();
                                       ?>  
                                  
                                       <div class="col-lg-12  col-12 mt-2">
                                          <div class="card border <?=$badge_right?> user">
                                             <div class="card-body ">
                                                <div class="row mobile">
                                                   <div class="col-lg-3 col-md-3 col-1">
                                                      <div class="avatar-md profile-user-wid m m-0" id="<?= $popovereTargetId ?>">
                                                         <img src="<?=BASEURL?>assets/images/<?=$namee['profile_image']?>" alt="" class="img-thumbnail rounded-circle">
                                                         <span class="badge">
                                                         <img src="<?=BASEURL?>assets/images/badges/<?=$icon_right?>" alt="" class="img-thumbnail rounded-circle" id="badge">
                                                         </span>
                                                      </div>
                                                   </div>
                                                     
                                                   <div class="col">
                                                       <a href="<?=BASEURL?>user/team_management/<?=$keyy['child_id']?>/<?=$wing?>">
                                            <?php     $usertype_checkk=$this->db->where('username',$keyy['child_id'])->get('user_role')->row_array(); 
                                            
                if($usertype_checkk['user_type'] == "u"){ ?>
                                                      <h4> <span class="mobileh5 username">Wing 1</span></h4>
                                                      <h5><span class="mobileh6 position" ><?php echo $namee['first_name'] ?> <?php echo $namee['last_name'] ?></span></h5>
            <?php }if($usertype_checkk['user_type'] == "sub" && $usertype_checkk['position'] == "left" && $usertype_checkk['ref_id'] != $this->session->userdata('ublisusername')){ ?>
                                                      <h4> <span class="mobileh5 username">Wing 2</span></h4>
                                                      <h5><span class="mobileh6 position" ><?php echo $namee['first_name'] ?> <?php echo $namee['last_name'] ?></span></h5>
            <?php } if($usertype_checkk['user_type'] == "sub" && $usertype_checkk['position'] == "right" && $usertype_checkk['ref_id'] != $this->session->userdata('ublisusername')) { ?>
                                                      <h4> <span class="mobileh5 username">Wing 3</span></h4>
                                                      <h5><span class="mobileh6 position" ><?php echo $namee['first_name'] ?> <?php echo $namee['last_name'] ?></span></h5>
            <?php } if($usertype_checkk['user_type'] == "sub" && $usertype_checkk['ref_id'] == $this->session->userdata('ublisusername')) { ?>
                                                       <h4> <span class="mobileh5 username">Bonus ID</span></h4>
                                                      <h5><span class="mobileh6 position" ><?php echo $namee['first_name'] ?> <?php echo $namee['last_name'] ?></span></h5>
            <?php } ?>
                                                       </a>
                                                   </div>
                                                       
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                               
                                    <?php $user_rolee=$this->db->where('username',$keyy['child_id'])->get('user_role')->row_array();
                            $posss=$this->db->where('child_id',$keyy['child_id'])->get('tree')->row_array(); 
                            
                        $activewing_left_user_w1=$this->db->where('ref_id',$keyy['child_id'])->where('user_type','sub')->where('position','left')->get('user_role')->row_array();
                        $activewing_right_user_w2=$this->db->where('ref_id',$keyy['child_id'])->where('user_type','sub')->where('position','right')->get('user_role')->row_array();
                       
                        $activewingss=$this->db->where('username',$keyy['child_id'])->where('status','Active')->count_all_results('user_role')+0;
                        $activewingss_left=$this->db->where('username',$activewing_left_user_w1['username'])->where('status','Active')->count_all_results('user_role')+0;
                        $activewingss_right=$this->db->where('username',$activewing_right_user_w2['username'])->where('status','Active')->count_all_results('user_role')+0;
                             
                        $activewingss_left_plus_wing1 = $this->db->where('username',$keyy['child_id'])->where('plus_deposit >','0')->where('prime_deposit ','0.00')->count_all_results('user_role')+0;
                        $activewingss_left_plus_wing2 = $this->db->where('username',$activewing_left_user_w1['username'])->where('plus_deposit >','0')->where('prime_deposit ','0.00')->count_all_results('user_role')+0;
                        $activewingss_left_plus_wing3 = $this->db->where('username',$activewing_right_user_w2['username'])->where('plus_deposit >','0')->where('prime_deposit ','0.00')->count_all_results('user_role')+0;     
                             
                             
                        $activewingss_left_prime_wing1 = $this->db->where('username',$keyy['child_id'])->where('prime_deposit >','0.00')->count_all_results('user_role')+0;
                        $activewingss_left_prime_wing2 = $this->db->where('username',$activewing_left_user_w1['username'])->where('prime_deposit >','0.00')->count_all_results('user_role')+0;
                        $activewingss_left_prime_wing3 = $this->db->where('username',$activewing_right_user_w2['username'])->where('prime_deposit >','0.00')->count_all_results('user_role')+0;
                        
                $today_right_plus_wing1 = $this->db->select_sum('credit')->where('username',$keyy['child_id'])->where('description','Plus')->where('date(entry_date) ',date('Y-m-d'))->get('account_sub')->row()->credit+0;
                $today_right_prime_wing1 = $this->db->select_sum('credit')->where('username',$keyy['child_id'])->where('description','Prime')->where('date(entry_date) ',date('Y-m-d'))->get('account_sub')->row()->credit+0;
                
                $today_right_plus_wing1_count=($today_right_plus_wing1/270);
                $today_right_prime_wing1_count=($today_right_prime_wing1/900);
                
                $today_right_plus_wing1_total=($today_right_plus_wing1_count*30)+$today_right_plus_wing1;
                $today_right_prime_wing1_total=($today_right_prime_wing1_count*90)+$today_right_prime_wing1;
                
                if($usertype_checkk['user_type'] == "u"){
                    $child_right = $keyy['child_id'];
                    $rigt_child="User Id:";
                }else{
                    $child_right="";
                    $rigt_child="";
                }
                        ?>               
                            <script>
                            document.addEventListener("DOMContentLoaded", function() {
                              var popoverTrigger = document.getElementById("<?= $popovereTargetId ?>");
                              var userid = "<?= $child_right ?>";
                              var refid = "<?= $user_rolee['ref_id'] ?>";
                              var joindate = "<?= $user_rolee['entry_date'] ?>";
                              var position = "<?= $activewingss+$activewingss_left+$activewingss_right?>";
                              var plus = "<?= $activewingss_left_plus_wing1+$activewingss_left_plus_wing2+$activewingss_left_plus_wing3 ?>";
                              var prime = "<?= $activewingss_left_prime_wing1+ $activewingss_left_prime_wing2+$activewingss_left_prime_wing3?>";
                              var todayprime= <?=$today_right_prime_wing1_total?> ;
                              var todayplus= <?=$today_right_plus_wing1_total?> ;
                              var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
                              
                              // Set the trigger based on device type
                              var trigger = isMobile ? "click" : "hover";
                              
                              popoverTrigger.setAttribute("data-bs-content", userid,refid,joindate,position,plus,prime,todayplus,todayprime);
                              var popover = new bootstrap.Popover(popoverTrigger, {
                                trigger: trigger,
                                content:"<?=$rigt_child?> " + userid +  "<br>Join Date: " + joindate + "<br>Sponsor ID: " + refid + "<br>Today Prime: " + todayprime + "<br>Today Plus: " + todayplus,
                                html: true,
                                title: "User Details"
                              });
                            });

                            </script>
                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                           
                         <?php } ?>  
                        </div>
                     </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php';?>
<script>
  $(document).ready(function() {
    $('#button1').click(function() {
      $('#myLink').attr('href', '<?=BASEURL?>user/registration/<?=$this->session->userdata('ublisusername')?>');
    });

    $('#button2').click(function() {
      $('#myLink').attr('href', '<?=BASEURL?>user/registration/<?=$left_free?>');
    });

    $('#button3').click(function() {
      $('#myLink').attr('href', '<?=BASEURL?>user/registration/<?=$right_free?>');
    });
  });
</script>
<script>
  function filterUsers() {
// get search input value
    var searchInput = document.getElementById("searchInput");
    var searchValue = searchInput.value.toLowerCase();

// get user list
    var userList = document.querySelector(".user-list");

// loop through user items and hide/show based on search input
    var users = userList.querySelectorAll(".user");
    for (var i = 0; i < users.length; i++) {
      var username = users[i].querySelector(".username").textContent.toLowerCase();
      var position = users[i].querySelector(".position").textContent.toLowerCase();
      if (username.includes(searchValue) || position.includes(searchValue)) {
        users[i].style.display = "block";
      } else {
        users[i].style.display = "none";
      }
    }
  }
  document.getElementById("searchInput").addEventListener("keyup", filterUsers);
</script>
<script>
  function share(){
// alert('hii');
    if (location.protocol !== 'https:') {

      var rtextarea = document.createElement("textarea");
      document.body.appendChild(rtextarea);
rtextarea.value = '<?= BASEURL."user/registration_share/".bin2hex($share) ?>'; //save main text in it
rtextarea.select(); //select textarea contenrs
document.execCommand("copy");
document.body.removeChild(rtextarea);
} else {
  let shareData = {
    title: '<?=$comp['company_name']?>',
    text: '<?=$comp['company_name']?>',
    url: '<?= BASEURL."user/registration_share/".bin2hex($share) ?>',
  }
  navigator.clipboard.writeText('<?= BASEURL."user/registration_share/".bin2hex($share) ?>');
  navigator.share(shareData);
}
} 
</script>

<?php     
foreach($left_team as $left_team_key){
    
    $total_left_plus += $this->db->select_sum('credit')->where('username',$left_team_key['child_id'])->where('type','Plus')->where('remark','Activation')->get('pin')->row()->credit+0 ;
    $total_plus_left_bv= $total_left_plus/1100 ;
    $total_left_prime += $this->db->select_sum('credit')->where('username',$left_team_key['child_id'])->where('type','Prime')->where('remark','Activation')->get('pin')->row()->credit+0 ;
    $total_prime_left_bv=$total_left_prime/10000;
    
    
    
    $total_left_plus_today += $this->db->select_sum('credit')->where('username',$left_team_key['child_id'])->where('date(entry_date)',date('Y-m-d'))->where('type','Plus')->where('remark','Activation')->get('pin')->row()->credit+0 ;
    $total_plus_left_bv_today= $total_left_plus_today/1100 ;
    $total_left_prime_today += $this->db->select_sum('credit')->where('username',$left_team_key['child_id'])->where('date(entry_date)',date('Y-m-d'))->where('type','Prime')->where('remark','Activation')->get('pin')->row()->credit+0 ;
    $total_prime_left_bv_today=$total_left_prime_today/10000;
    
    $entryDate = $this->db->where('date(entry_date)',date('Y-m-d'))->where('child_id', $left_team_key['child_id'])->get('tree')->result_array();
    
    log_message('error', $total_left_plus_today."left_plus");
    
   // echo $total_left_plus_today;
    
    if (!empty($entryDate)) {
        $todayleftUsersCount++;
    }
}

if($todayleftUsersCount==0){
    $todayleftUsersCount=0;
}

if($left_team){
    $total_left_count=count($left_team);
}else{
    $total_left_count=0;
}
if($right_team){
    $total_right_count=count($right_team);
}else{
    $total_right_count=0;
}

foreach($right_team as $right_team_key){
    
    $total_right_plus += $this->db->select_sum('credit')->where('username',$right_team_key['child_id'])->where('type','Plus')->where('remark','Activation')->get('pin')->row()->credit+0 ;
    $total_plus_right_bv= $total_right_plus/1100 ;
    $total_right_prime += $this->db->select_sum('credit')->where('username',$right_team_key['child_id'])->where('type','Prime')->where('remark','Activation')->get('pin')->row()->credit+0 ;
    $total_prime_right_bv=$total_right_prime/10000;
    
    $total_right_plus_today += $this->db->select_sum('credit')->where('username',$right_team_key['child_id'])->where('type','Plus')->where('date(entry_date)',date('Y-m-d'))->where('remark','Activation')->get('pin')->row()->credit+0 ;
    $total_plus_right_bv_today= $total_right_plus_today/1100 ;
    $total_right_prime_today += $this->db->select_sum('credit')->where('username',$right_team_key['child_id'])->where('type','Prime')->where('date(entry_date)',date('Y-m-d'))->where('remark','Activation')->get('pin')->row()->credit+0 ;
    $total_prime_right_bv_today=$total_right_prime_today/10000;
    
   // echo $total_right_plus_today;
    
     $entryDate2 = $this->db->where('date(entry_date)',date('Y-m-d'))->where('child_id', $right_team_key['child_id'])->get('tree')->result_array();
    
   if (!empty($entryDate2)) {
        $todayrightUsersCount++;
    }
    
    }
  
    if($todayrightUsersCount==0){
        $todayrightUsersCount=0;
    }

?>

<?php
$activation_chkkk=$this->db->where('username',$sponsor['username'])->get('user_role')->row_array();
?>
            <script>
              document.addEventListener("DOMContentLoaded", function() {
                var popoverTrigger = document.getElementById("team_a");
               
            <?php if($activation_chkkk['status']=="Active"){ ?>    
                var totaljoiners = "<?= $total_left_count ?>";
                var todayjoiners = "<?= $todayleftUsersCount ?>";
                var plus = "<?= $total_plus_left_bv*300?>";
                var prime = "<?= $total_prime_left_bv*1000?>";
                var todayplus="<?= $total_plus_left_bv_today*300?>";
                var todayprime="<?= $total_prime_left_bv_today*1000?>";
            <?php }else{ ?>    
                var totaljoiners = "<?= $total_left_count ?>";
                var todayjoiners = "<?= $todayleftUsersCount ?>";
                var plus = "0";
                var prime = "0";
                var todayplus="0";
                var todayprime="0";
            <?php } ?>
                var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
            
                // Set the trigger based on device type
                var trigger = isMobile ? "click" : "hover";
            
                popoverTrigger.setAttribute("data-bs-content", "Today Joiners: " + todayjoiners + "<br>Total Joiners: " + totaljoiners + "<br>Plus: " + plus + "<br>Prime: " + prime + "<br>Today Prime: " + todayprime + "<br>Today Plus: " + todayplus);
                var popover = new bootstrap.Popover(popoverTrigger, {
                  trigger: trigger,
                  content: popoverTrigger.getAttribute("data-bs-content"),
                  html: true,
                  title: "User Details"
                });
              });
            </script>
            
            <script>
              document.addEventListener("DOMContentLoaded", function() {
                var popoverTrigger = document.getElementById("team_b");
            
             <?php if($activation_chkkk['status']=="Active"){ ?>    
                var totaljoiners = "<?= $total_right_count ?>";
                var todayjoiners = "<?= $todayrightUsersCount ?>";
                var plus = "<?= $total_plus_right_bv*300?>";
                var prime = "<?= $total_prime_right_bv*1000?>";
                var todayprime= "<?= $total_prime_right_bv_today*1000?>";
                var todayplus= "<?= $total_plus_right_bv_today*300?>";
            <?php }else{ ?>  
                var totaljoiners = "<?= $total_right_count ?>";
                var todayjoiners = "<?= $todayrightUsersCount ?>";
                var plus = "0";
                var prime = "0";
                var todayprime= "0";
                var todayplus= "0";
            <?php } ?>
                
                var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
            
                // Set the trigger based on device type
                var trigger = isMobile ? "click" : "hover";
            
                popoverTrigger.setAttribute("data-bs-content", "Today Joiners: " + todayjoiners + "<br>Total Joiners: " + totaljoiners + "<br>Plus: " + plus + "<br>Prime: " + prime + "<br>Today Prime: " + todayprime + "<br>Today Plus: " + todayplus);
                var popover = new bootstrap.Popover(popoverTrigger, {
                  trigger: trigger,
                  content: popoverTrigger.getAttribute("data-bs-content"),
                  html: true,
                  title: "User Details"
                });
              });
            </script>
