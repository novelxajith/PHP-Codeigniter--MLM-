<?php include 'header.php';?>
<style>
   span.badge {
   top: 36px;
   position: absolute;
   margin-left: -30px;
   }
   img#badge {
   width: 30px;
   /* float: right; */
   /* right: 0; */
   margin-top: 10px;
   margin-left: 50px;
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
   @media screen and (max-width: 768px) {
   img#badge {
   width: 14px;
   /* float: right; */
   /* right: 0; */
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
</style>
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <h5 class="card-header">Team Management</h5>
            <div class="card-body">
               <div class="col-xl-12">
                  <div class="nav-align-top mb-4">
                     <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                        <?php 
                           $left=$this->db->select('username')->where('ref_id', $this->session->userdata('ablisusername'))->where('user_type','sub')->where('position','left')->get('user_role')->row()->username;
                           $right=$this->db->select('username')->where('ref_id', $this->session->userdata('ablisusername'))->where('user_type','sub')->where('position','right')->get('user_role')->row()->username;
                           
                           
                           if($wing=="") { $one="active"; $two=""; $three="";} 
                           if($wing=="wing1") { $one="active"; $two=""; $three="";} 
                           if($wing=="wing2") { $two="active"; $one=""; $three="";} 
                           if($wing=="wing3") { $three="active"; $one=""; $two="";}
                           
                                               ?>
                        <li class="nav-item">
                           <a id="button1"
                              href="<?=BASEURL?>admin/team_management/<?=$this->session->userdata('ablisusername')?>/wing1"
                              class="nav-link <?=$one?>"
                              > Wing 1
                           </a>
                        </li>
                        <li class="nav-item">
                           <a id="button2"
                              class="nav-link <?=$two?>"
                              href="<?=BASEURL?>admin/team_management/<?=$left?>/wing2"
                              >Wing 2
                           </a>
                        </li>
                        <li class="nav-item">
                           <a id="button3"
                              class="nav-link <?=$three?>"
                              href="<?=BASEURL?>admin/team_management/<?=$right?>/wing3"
                              >Wing 3
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
                                 <a class="btn btn-primary m-1 waves-effect waves-light" href="<?=BASEURL?>admin/registration/<?=$this->session->userdata('ublisusername')?>" id="myLink" 
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
                                             // Assuming you have a database connection established and available
                                             
                                             $left_user = $this->db->where('position', 'left')->where('parent_id', $sponsor['username'])->get('tree')->row_array();
                                             
                                             if (!empty($left_user)) {
                                               $left = $this->db->like('team', $left_user['child_id'])->get('tree')->result_array();
                                             
                                               foreach ($left as $key) {
                                                 $utype = $this->db->where('username', $key['child_id'])->get('user_role')->row_array();
                                                 if ($utype['user_type'] == 'u') {
                                                   $left_team[] = $key;
                                                 }
                                               }
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
                                          <?php $right_user=$this->db->where('position','right')->where('parent_id',$sponsor['username'])->get('tree')->row_array();
                                             if(!empty($right_user)){
                                               $right=$this->db->like('team',$right_user['child_id'])->get('tree')->result_array();
                                             
                                             
                                               foreach ($right as $keyy) {
                                                   $urighttype = $this->db->where('username', $keyy['child_id'])->get('user_role')->row_array();
                                               if ($urighttype['user_type'] == 'u') {
                                                  $right_team[] = $keyy;
                                               }
                                                
                                               }
                                             }   
                                             ($right_team) ? $right_count=count($right_team) : $right_count="0"
                                             ?>
                                          <div class="d-flex justify-content-center"><span class="teamb">TEAM B &nbsp <i class="mdi mdi-information mdi-24px " id="team_a" data-bs-toggle="popover" data-bs-content="team_a" data-bs-placement="right" data-bs-html="true" data-bs-title="Team Details"></i></span></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row mt-3 d-flex justify-content-center user-list" id="items" >
                              <div class="col-lg-5  col-6 mt-2 item singlewingachivers">
                                 <div class="row ">
                                    <?php 
                                       $elegibleleftuser=[];
                                       
                                       foreach($left_team as $key){
                                                $utype=$this->db->where('username',$key['child_id'])->get('user_role')->row_array();
                                       if($utype['user_type'] == 'u'){
                                         array_push($elegibleleftuser,$key['child_id']);
                                       }
                                       }
                                       for ($i=0;$i<count($elegibleleftuser);$i++) {
                                       $inv=$this->db->select_max('credit')->where('username',$elegibleleftuser[$i])->where('remark','Activation')->get('pin')->row()->credit+0;
                                       if($inv==1100){ $badge_left="border-info"; }elseif($inv==10000){ $badge_left="border-warning"; }else{$badge_left="";}
                                       if($inv==1100){ $icon_left="plusbadge.png"; }elseif($inv==10000){ $icon_left="primebadge.png"; }else{$icon_left="";}
                                       $name=$this->db->where('username',$elegibleleftuser[$i])->get('user_role')->row_array();
                                       $popoverTargetId = 'popoverTarget_' . uniqid();
                                       ?>
                                
                                       <div class="col-lg-12  col-12 mt-2 item singlewingachivers">
                                          <div class="card border <?=$badge_left?> user">
                                             <div class="card-body ">
                                                <div class="row mobile">
                                                   <div class="col-4">
                                                      <div class="avatar-md profile-user-wid m m-0" id="<?= $popoverTargetId ?>">
                                                         <img src="<?=BASEURL?>assets/images/<?=$name['profile_image']?>" alt="" class="img-thumbnail rounded-circle">
                                                         <span class="badge">
                                                         <img src="<?=BASEURL?>assets/images/badges/<?=$icon_left?>" alt="" class="img-thumbnail rounded-circle" id="badge">
                                                         </span>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                           <a href="<?=BASEURL?>admin/team_management/<?=$elegibleleftuser[$i]?>/<?=$wing?>">
                                            <?php $usertype_checkkk=$this->db->where('username',$key['child_id'])->get('user_role')->row_array(); 
                                                      if($usertype_checkkk['user_type'] == "u"){ ?>        
                                                      
                                                      <h4> <span class="mobileh5 username"><?php echo $elegibleleftuser[$i] ?></span></h4>
                                                      <h5><span class="mobileh6 position" ><?php echo $name['first_name'] ?> <?php echo $name['last_name'] ?></span></h5>
                                                      
                                            <?php }else{ ?>     
                                                    
                                                      <h4> <span class="mobileh5 username">Bonus ID</span></h4>
                                                      <h5><span class="mobileh6 position" ><?php echo $name['first_name'] ?> <?php echo $name['last_name'] ?></span></h5>
                                                    
                                            <?php } ?>
                                                       </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                   
                                    <?php $user_role=$this->db->where('username',$elegibleleftuser[$i])->get('user_role')->row_array();
                                       $poss=$this->db->where('child_id',$elegibleleftuser[$i])->get('tree')->row_array(); ?>               
                                    <script>
                                       document.addEventListener("DOMContentLoaded", function() {
                                           var popoverTrigger = document.getElementById("<?= $popoverTargetId ?>");
                                           var refid = "<?= $user_role['ref_id'] ?>";
                                            var joindate = "<?= $user_role['entry_date'] ?>";
                                            var position = "<?= $poss['position'] ?>";
                                           popoverTrigger.setAttribute("data-bs-content", refid,joindate,position);
                                       
                                           var popover = new bootstrap.Popover(popoverTrigger, {
                                               trigger: "hover", // Set the trigger to "hover" for hover behavior
                                               //content: childId
                                                content: "Join Date: " + joindate + "<br>Sponsor ID: " + refid + "<br>Placement: " + position,
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
                                       $elegiblerightuser=[];
                                              
                                       foreach($right_team as $keyy){
                                           
                                             $urighttype=$this->db->where('username',$keyy['child_id'])->get('user_role')->row_array();
                                                  if($urighttype['user_type'] == 'u'){
                                                    array_push($elegiblerightuser,$keyy['child_id']);
                                                  }
                                                  }
                                                  for ($i=0;$i<count($elegiblerightuser);$i++) {
                                       $invv=$this->db->select_max('credit')->where('username',$elegiblerightuser[$i])->where('remark','Activation')->get('pin')->row()->credit+0;
                                                  if($invv==1100){ $badge_right="border-info"; }elseif($invv==10000){ $badge_right="border-warning"; }else{$badge_right="";}
                                                  if($invv==1100){ $icon_right="plusbadge.png"; }elseif($invv==10000){ $icon_right="primebadge.png"; }else{$icon_right="";}
                                                  $namee=$this->db->where('username',$keyy['child_id'])->get('user_role')->row_array();
                                                  $popovereTargetId = 'popoverTarget_' . uniqid();
                                       ?>  
                                  
                                       <div class="col-lg-12  col-12 mt-2">
                                          <div class="card border <?=$badge_right?> user">
                                             <div class="card-body ">
                                                <div class="row mobile">
                                                   <div class="col-4">
                                                      <div class="avatar-md profile-user-wid m m-0" id="<?= $popovereTargetId ?>">
                                                         <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                                                         <span class="badge">
                                                         <img src="<?=BASEURL?>assets/images/badges/<?=$icon_right?>" alt="" class="img-thumbnail rounded-circle" id="badge">
                                                         </span>
                                                      </div>
                                                   </div>
                                                     
                                                   <div class="col">
                                                       <a href="<?=BASEURL?>admin/team_management/<?=$elegiblerightuser[$i]?>/<?=$wing?>">
                                                           <?php     $usertype_checkk=$this->db->where('username',$keyy['child_id'])->get('user_role')->row_array(); 
                                                      if($usertype_checkk['user_type'] == "u"){ ?>
                                                      <h4> <span class="mobileh5 username"><?php echo $elegiblerightuser[$i]?></span></h4>
                                                      <h5><span class="mobileh6 position"><?php echo $namee['first_name'] ?> <?php echo $namee['last_name'] ?></span></h5>
                                                      <?php }else{ ?>
                                                      <h4> <span class="mobileh5 username">Bonus ID</span></h4>
                                                      <h5><span class="mobileh6 position"><?php echo $namee['first_name'] ?> <?php echo $namee['last_name'] ?></span></h5>
                                                      <?php } ?>
                                                       </a>
                                                   </div>
                                                       
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                               
                                    <?php $user_rolee=$this->db->where('username',$elegiblerightuser[$i])->get('user_role')->row_array();
                                       $posss=$this->db->where('child_id',$keyy['child_id'])->get('tree')->row_array(); ?>               
                                    <script>
                                       document.addEventListener("DOMContentLoaded", function() {
                                           var popoverTrigger = document.getElementById("<?= $popovereTargetId ?>");
                                           var refid = "<?= $user_rolee['ref_id'] ?>";
                                            var joindate = "<?= $user_rolee['entry_date'] ?>";
                                            var position = "<?= $posss['position'] ?>";
                                           popoverTrigger.setAttribute("data-bs-content", refid,joindate,position);
                                       
                                           var popover = new bootstrap.Popover(popoverTrigger, {
                                               trigger: "hover", // Set the trigger to "hover" for hover behavior
                                               //content: childId
                                                content: "Join Date: " + joindate + "<br>Sponsor ID: " + refid + "<br>Placement: " + position,
                                                 html: true,
                                                 title: "User Details",
                                               
                                           });
                                       });
                                    </script>
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
           rtextarea.value = '<?= BASEURL."admin/registration_share/".bin2hex($share) ?>'; //save main text in it
           rtextarea.select(); //select textarea contenrs
           document.execCommand("copy");
           document.body.removeChild(rtextarea);
          } else {
           let shareData = {
             title: '<?=$comp['company_name']?>',
             text: '<?=$comp['company_name']?>',
             url: '<?= BASEURL."admin/registration_share/".bin2hex($share) ?>',
         }
         navigator.clipboard.writeText('<?= BASEURL."admin/registration_share/".bin2hex($share) ?>');
         navigator.share(shareData);
       }
   } 
</script>