<?php include 'header.php';?>
<style>
   .card.border.border-warning {
   border-bottom-right-radius: 30px;
   }
   .card.border.border-warning {
   border-top-left-radius: 30px;
   }
   .card.border.border-info {
   border-bottom-right-radius: 30px;
   }
   .card.border.border-info {
   border-top-left-radius: 30px;
   }
  span.badges {
    width: 42px!important;
    top: 14px!important;
    position: absolute!important;
   
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
        
.progress.bg-label-success.mt-3 {
    width:80%;
}  
.rank {
    display: flex;
    justify-content: space-between;
}

  @media screen and (max-width: 768px) {
img#badge {
    width: 16px;
    /* float: right; */
    /* right: 0; */
    margin-top: 10px;
    margin-left: 50px;
}

span.badges {
    top: 9px;
    position: absolute;
    margin-left: -30px;
}

.avatar-md.profile-user-wid.m.m-0 {
    width: 39px;
    left: 6px;
    position: absolute;
    top: 13px;
}

 .card.border.border-warning {
   border-bottom-right-radius: 20px;
   }
   .card.border.border-warning {
   border-top-left-radius: 20px;
   }
   .card.border.border-info {
   border-bottom-right-radius: 20px;
   }
   .card.border.border-info {
   border-top-left-radius: 20px;
   }
   img.position-absolute.bottom-0.end-0.me-3 {
    width: 75px;
    height: 75px;
}
h6 {
    font-size: 11px;
}
span.current-rank {
    font-size: 10px;
}
span.next-rank {
    font-size: 10px;
}
} 
</style>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap');
:root {
    --light-bg: white;
    --light-primary: rgb(247, 249, 250);

    --dark-bg: black;
    --dark-primary: #15181c;

    --gray-text: rgb(153, 153, 153);

    font-size: 16px;
    font-family: 'Roboto', sans-serif;
}
* {
    box-sizing: border-box;
}
.light-theme {
    --background-color: var(--light-bg);
    --primary-bg: var(--light-primary);
    color: black;
}
.dark-theme {
    --background-color: var(--dark-bg);
    --primary-bg: var(--dark-primary);
    color: white;
}

main {
    height: 100%;
    width: 100%;
    text-align: center;
}

.themer {
    all: unset;
    padding: 4px;
    height: 20px;
    width: 40px;
    border-radius: 20px;
    position: relative;
}
    .light-theme .themer {
        border: 2px solid var(--dark-bg);
    }
    .dark-theme .themer {
        border: 2px solid var(--light-bg);
    }
    .themer:hover {
        cursor: pointer;
    }
.themer::after {
    content: '';
    display: block;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    position: absolute;
    top: 4px;
}
    .light-theme .themer::after {
        background-color: var(--dark-bg);
        right: 4px;
    }
    .dark-theme .themer::after {
        background-color: var(--light-bg);
        left: 4px;
    }

.profile {
    background-color: var(--primary-bg);
    border-radius: 8px;
    height: 105px;
    width: 350px;
    position: relative;
    overflow: hidden;
    transition: height 0.2s ease;
    display: inline-block;
    margin: 8px;
    vertical-align: top;
}
    .profile:hover {
        cursor: pointer;
    }
    .profile.profile--expanded {
    height: 524px;
    animation: expand 0.2s ease;
}
    .profile__banner {
        display: block;
        height: 70px;
        width: 100%;
        border-top-right-radius: inherit;
        border-top-left-radius: inherit;
    }
.profile__pic {
    display: flex;
    width: 100%;
    text-align: center;
    position: absolute;
    top: -315px;
    justify-content: center;
}
.profile__pic img {
    background-color: var(--primary-bg);
    /* border-radius: 50%; */
    height: 291px;
    width: 277px;
    padding: 3px;
    object-fit: cover;
}
  
span.badges {
    width: 25px!important;
    top: 17px!important;
    position: absolute!important;
    margin-left: -17px!important;
}
  .img-thumbnail {
    top: 10px;
    position: relative;
    display: block;
}
    .profile__info {
    width: 100%;
    text-align: center;
    position: absolute;
    top: 9px;
    color: white;
}
        .profile__info-display, .profile__info-username {
            display: block;
            width: 100%;
             
        }
        .profile__info-display {
            font-size: 1.5rem;
            font-weight: bold;
           
        }
      
    .profile__data {
        opacity: 0;
    }
 
        .profile--unexpanded > .profile__data, .profile--expanded > .profile__data {
    width: 100%;
    text-align: center;
    padding-top: inherit;
    height: 66px;
    position: absolute;
    top: 406px;
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-around;
    flex-direction: column;
}

        .profile--unexpanded > .profile__data {
            opacity: 0;
            animation: unreveal 0.2s ease;
        }
        .profile--expanded > .profile__data {
            opacity: 1;
            animation: reveal 0.7s ease;
        }
        .profile__data > * > * {
            display: block;
        }
    .profile__data > * > *:first-child {
    font-size: 16px;
    font-weight: bold;
}
        .profile__data > * > *:nth-child(2) {
            font-size: 0.9rem;
        }

@keyframes reveal {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
@keyframes unreveal {
    0% {
        opacity: 1;
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        transform: translateY(-20px);
    }
}
@keyframes expand {
    0% {
        height: 180px;
    }
    100% {
        height: 240px;
    }
}
@keyframes unexpand {
    0% {
        height: 240px;
    }
    100% {
        height: 180px;
    }
}
span.profile__data-likes {
    padding-right: 10px;
}
     
/* For Mobile Phones Portrait or Landscape View */
@media screen
    and (max-device-width: 567px) {
.profile {
    background-color: var(--primary-bg);
    /* border-radius: 8px; */
    height: 71px;
    width: 150px;
    position: relative;
    overflow: hidden;
    transition: height 0.2s ease;
    display: inline-block;
    margin: 3px;
    vertical-align: top;
    padding: 5px;
}
.profile--expanded > .profile__data {
    width: 100%;
    text-align: center;
    padding-top: inherit;
    height: 66px;
    position: absolute;
    top: 194px;
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-around;
     flex-direction: column;
}
.profile__info {
    width: 100%;
    text-align: center;
    position: absolute;
    top: 9px;
    color: white;
    padding-left: 32px;
    padding-top: 7px;
}
.profile__info-display {
    display: flex;
    font-size: 10px;
    font-weight: bold;
    justify-content: center;
    align-items: stretch;
}
.profile__info-username {
    display: flex;
    /* display: block; */
    width: 100%;
    justify-content: center;
    align-items: center;
    font-size: 10px;
}
img.mobimg {
    width: 140px;
    height: 140px;
    position: absolute;
    padding-right: 14px;
}
.profile__pic {
    display: flex;
    width: 100%;
    text-align: center;
    position: absolute;
    top: -138px;
    justify-content: center;
}
.profile.profile--expanded {
    height: 260px;
    animation: expand 0.2s ease;
}
.profile__data > * > *:first-child {
    font-size: 9px;
    font-weight: bold;
}
.profile__data > * > *:nth-child(2) {
    font-size: 9px;
}
.avatar-md.profile-user-wid.m.m-0 {
    width: 39px;
    left: 6px;
    position: absolute;
    top: -2px;
}
h6.profile__data-following-number {
    margin-top: 5px;
    margin-bottom: 5px;
}
h6.profile__data-likes-number {
    margin-top: -11px;
}
span.badges {
    width: 25px!important;
    top: 14px!important;
    position: absolute!important;
    margin-left: -22px!important;
}
}
div#items {
    padding: 0px;
}
.col-4.image {
    margin-left: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
</style>

<?php
$counts=$this->db->where('username',$this->session->userdata('ublisusername'))->get('prime_rank_achivers')->row_array();
$next_rank_counts=0;
 if ($counts["level1"] < 3 ) {
    $rank = "";
    $current=$counts["level1"];
    $next_rank_counts=3;
    $next_rank="Bliss Beginner";
}

elseif ($counts["level1"] >= 3 ) {
    $rank = "Bliss Beginner";
    $current=$counts["level2"];
    $next_rank_counts=9;
    $next_rank = "Bliss Achiever";
    
        if ($counts["level2"] >= 9 ) {
        $rank = "Bliss Achiever";
        $current=$counts["level3"];
        $next_rank_counts=27;
        $next_rank = "Bliss Coach";
        
         if ($counts["level3"] >= 27 ) {
            $rank = "Bliss Coach";
            $current=$counts["level4"];
            $next_rank_counts=81;
            $next_rank = "Bliss Strategist";
            
            if ($counts["level4"] >= 81 ) {
                $rank = "Bliss Strategist";
                $current=$counts["level5"];
                $next_rank_counts=243;
                $next_rank = "Bliss Mentor";
                
                 if ($counts["level5"] >= 243 ) {
                    $rank = "Bliss Mentor";
                    $current=$counts["level6"];
                    $next_rank_counts=729;
                    $next_rank = "Bliss Consultant";
                    
                     if ($counts["level6"] >= 729 ) {
                        $rank = "Bliss Consultant";
                        $current=$counts["level7"];
                        $next_rank_counts=2187;
                        $next_rank = "Bliss Associate";
                        
                         if ($counts["level7"] >= 2187 ) {
                            $rank = "Bliss Associate";
                            $current=$counts["level8"];
                            $next_rank_counts=6561;
                            $next_rank = "Bliss Specialist";
                            
                            if ($counts["level8"] >= 6561 ) {
                                $rank = "Bliss Specialist";
                                $current=$counts["level9"];
                                $next_rank_counts=19683;
                                $next_rank = "Bliss Coordinator";
                                
                                if ($counts["level9"] >= 19683 ) {
                                    $rank = "Bliss Coordinator";
                                    $current=$counts["level10"];
                                    $next_rank_counts=59049;
                                    $next_rank = "Bliss Supervisor";
                                    
                                     if ($counts["level10"] >= 59049 ) {
                                        $rank = "Bliss Supervisor";
                                        $current=$counts["level11"];
                                        $next_rank_counts=177147;
                                        $next_rank = "Bliss Executive";
                                        
                                        if ($counts["level11"] >= 177147 ) {
                                            $rank = "Bliss Executive";
                                            $current=$counts["level12"];
                                            $next_rank_counts=531441;
                                            $next_rank = "Bliss Chief";
                                            
                                            if ($counts["level12"] >= 531441 ) {
                                                $rank = "Bliss Chief";
                                                $current=$counts["level13"];
                                                $next_rank_counts=1594323;
                                                $next_rank = "Bliss Leader";
                                                
                                                if ($counts["level13"] >= 1594323 ) {
                                                    $rank = "Bliss Leader";
                                                    $current=$counts["level14"];
                                                    $next_rank_counts=4782969;
                                                    $next_rank = "Bliss Ambassador";
                                                    
                                                    if ($counts["level14"] >= 4782969 ) {
                                                        $rank = "Bliss Ambassador";
                                                        $current=$counts["level15"];
                                                        $next_rank_counts=14348907;
                                                        $next_rank = "Bliss Crown";
                                                        
                                                        if ($counts["level15"] >= 14348907) {
                                                            $rank = "Bliss Crown";
                                                            $next_rank="Milestone Completed";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } 
    }
} 
     if ($counts["level13"] < 14348907) {
        $progress_percentage=($current/$next_rank_counts)*100;
    } else {
        $progress_percentage = 100;
    }



?>
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-12">

         <div class="card">
            <div class="card-body">
               <h4 class="card-title">Prime Rank Achievers</h4>
               <div class="row mt-2 d-flex justify-content-center">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-8 col-12">
                     <div class="card h-100">
                        <div class="card-body text-nowrap">
                   
                          <?php 
                          $name=$this->db->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row_array();
                          if($rank!==""){?> <h5 class="card-title mb-1 d-flex gap-1 flex-wrap">
                              Congratulations<strong><?=$name['first_name']?> <?=$name['last_name']?>🎉</strong>
                           </h5><?php } ?>
                             <div class="col-7">      
                        <?php if($rank!==""){?><h6>You are now a <span style="color: #72e128;"><?=$rank?></span> Rank Achiever</h6><?php } ?>
                          <?php if($rank==""){?><h6>You are not a Rank Achiever</h6><?php } ?>
                <div class="rank">
                 <span class="current-rank" style="color:#72e128;"><?=$rank?></span>
                 <span class="next-rank"style="color: #cd7f32;"><?=$next_rank?></span>
                </div>

                   <!--<p class="pb-0">Best seller of the month</p>-->
                  <!--<h4 class="text-primary mb-1"></h4> -->
                    <div class="progress bg-label-success mt-3">
                      <div
                        class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                        role="progressbar"
                        style="width: <?php echo $progress_percentage ?>%"
                        aria-valuenow="<?php echo $progress_percentage ?>"
                        aria-valuemin="0"
                        aria-valuemax="70">
                      </div>
                    </div>
                        </div>
                        <div class="col-5">
                            <img src="<?=BASEURL?>assets/img/illustrations/trophy.png" class="position-absolute bottom-0 end-0 me-3" height="140" alt="view sales">
                        </div>
                        
                     </div>
                  </div>
               </div>
               <div class="row mt-2 d-flex justify-content-center">
                  
                  <div class="col-lg-6">
                     <label for="searchInput">Search:</label>
                     <input class="form-control" type="text" id="searchInput" placeholder="Enter search term...">
                  </div>
               </div>
              
                <div class="row mt-3 d-flex justify-content-center" id="items">
                    <?php $rankers=$this->db->where('level1 >=','3')->where('username !=',$this->session->userdata('ublisusername'))->get('prime_rank_achivers')->result_array(); 
                    foreach($rankers as $key){
                    
                    $countss=$this->db->where('username',$key['username'])->get('prime_rank_achivers')->row_array();
                    $next_rank_countss=0;
                     if ($countss["level1"] < 3 ) {
                        $rankk = "";
                        $currentt=$countss["level1"];
                        $next_rank_countss=3;
                        $next_rankk="Bliss Beginner";
                    }
                    
                    elseif ($countss["level1"] >= 3 ) {
                        $rankk = "Bliss Beginner";
                        $currentt=$countss["level2"];
                        $next_rank_countss=9;
                        $next_rankk = "Bliss Achiever";
                        
                            if ($countss["level2"] >= 9 ) {
                            $rankk = "Bliss Achiever";
                            $currentt=$countss["level3"];
                            $next_rank_countss=27;
                            $next_rankk = "Bliss Coach";
                            
                             if ($countss["level3"] >= 27 ) {
                                $rankk = "Bliss Coach";
                                $currentt=$countss["level4"];
                                $next_rank_countss=81;
                                $next_rankk = "Bliss Strategist";
                                
                                if ($countss["level4"] >= 81 ) {
                                    $rankk = "Bliss Strategist";
                                    $currentt=$countss["level5"];
                                    $next_rank_countss=243;
                                    $next_rankk = "Bliss Mentor";
                                    
                                     if ($countss["level5"] >= 243 ) {
                                        $rankk = "Bliss Mentor";
                                        $currentt=$countss["level6"];
                                        $next_rank_countss=729;
                                        $next_rankk = "Bliss Consultant";
                                        
                                         if ($countss["level6"] >= 729 ) {
                                            $rankk = "Bliss Consultant";
                                            $currentt=$countss["level7"];
                                            $next_rank_countss=2187;
                                            $next_rankk = "Bliss Associate";
                                            
                                             if ($countss["level7"] >= 2187 ) {
                                                $rankk = "Bliss Associate";
                                                $currentt=$countss["level8"];
                                                $next_rank_countss=6561;
                                                $next_rankk = "Bliss Specialist";
                                                
                                                if ($countss["level8"] >= 6561 ) {
                                                    $rankk = "Bliss Specialist";
                                                    $currentt=$countss["level9"];
                                                    $next_rank_countss=19683;
                                                    $next_rankk = "Bliss Coordinator";
                                                    
                                                    if ($countss["level9"] >= 19683 ) {
                                                        $rankk = "Bliss Coordinator";
                                                        $currentt=$countss["level10"];
                                                        $next_rank_countss=59049;
                                                        $next_rankk = "Bliss Supervisor";
                                                        
                                                         if ($countss["level10"] >= 59049 ) {
                                                            $rankk = "Bliss Supervisor";
                                                            $currentt=$countss["level11"];
                                                            $next_rank_countss=177147;
                                                            $next_rankk = "Bliss Executive";
                                                            
                                                            if ($countss["level11"] >= 177147 ) {
                                                                $rankk = "Bliss Executive";
                                                                $currentt=$countss["level12"];
                                                                $next_rank_countss=531441;
                                                                $next_rankk = "Bliss Chief";
                                                                
                                                                if ($countss["level12"] >= 531441 ) {
                                                                    $rankk = "Bliss Chief";
                                                                    $currentt=$countss["level13"];
                                                                    $next_rank_countss=1594323;
                                                                    $next_rankk = "Bliss Leader";
                                                                    
                                                                    if ($countss["level13"] >= 1594323 ) {
                                                                        $rankk = "Bliss Leader";
                                                                        $currentt=$countss["level14"];
                                                                        $next_rank_countss=4782969;
                                                                        $next_rankk = "Bliss Ambassador";
                                                                        
                                                                        if ($countss["level14"] >= 4782969 ) {
                                                                            $rankk = "Bliss Ambassador";
                                                                            $currentt=$countss["level15"];
                                                                            $next_rank_countss=14348907;
                                                                            $next_rankk = "Bliss Crown";
                                                                            
                                                                            if ($countss["level15"] >= 14348907) {
                                                                                $rankk = "Bliss Crown";
                                                                                $next_rankk="Milestone Completed";
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            } 
                        }
                    } 
                    ?>
               <!--<div class="col-lg-4 col-5 m-2 item singlewingachivers" id="result">-->
               <!--   <div class="card border border-info ">-->
               <!--      <div class="card-body">-->
               <!--         <div class="row mobile">-->
               <!--            <div class="col-4">-->
               <!--               <div class="avatar-md profile-user-wid m m-0">-->
               <!--                  <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">-->
               <!--                  <span class="badge">-->
               <!--                  <img src="<?=BASEURL?>assets/images/badges/plusbadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">-->
               <!--                  </span>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--            <div class="col">-->
                               <?php //$namee = $this->db->where('username', $key['username'])->get('user_role')->row_array();?>      
               <!--               <h3> <span class="mobileh5" id="name"><?=$namee['first_name']?> <?=$namee['last_name']?></span></h3>-->
               <!--               <h5> <span class="mobileh5" id="username"><?=$key['username']?></span></h5>-->
               <!--               <h6><span class="mobileh6" id="ran"><?=$rankk?></span></h6>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               
                <?php $namee = $this->db->where('username', $key['username'])->get('user_role')->row_array();?>  
               
               
               <div class="row mt-3 d-flex justify-content-center" id="items"> 
           <div class="profile card border border-warning user profile--expand" onclick="expand(this)">
                <div class="profile__banner" >
                                  <div class="col-4">
                                                      <div class="avatar-md profile-user-wid m m-0" id="popoverTarget_6482c8c4236b0" data-bs-content="BNSN01">
                                                         <img src="<?=BASEURL.'assets/images/'.$name['profile_image']?>" alt="" class="img-thumbnail rounded-circle">
                                                         <span class="badges">
                                      <img src="https://demo-web-site.com/blissnova/newdev/assets/images/badges/primebadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">
                                    </span>
                                                      </div>
                                                   </div>
                                                   <div class="profile__info">
                                                       
                        <span class="profile__info-display"><?=$namee['first_name']?> <?=$namee['last_name']?></span>
                        <span class="profile__info-username"><?=$key['username']?></span>
                        <!--<span class="profile__info-username"><?=$rankk?></span>-->
                    </div>
                </div>
            
                <div class="profile__data">
                       
                   <div class="profile__pic">
                        <img src="<?=BASEURL.'assets/images/'.$namee['profile_image']?>" alt="Profile picture of Cho Miyeon"  class="mobimg">
                    </div>  
                    <span class="profile__data-following">
                        <span class="profile__data-following-number"><?=$rankk?> Rank Achiever</span>
                    </span>
                    <span class="profile__data-followers">
                        <span class="profile__data-followers-number">State&nbsp:&nbsp<?=$namee['state']?></span>
                    </span>
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

<?php include 'footer.php';?>
<script>

function filterUsers() {
    
  // get search input value
 
   var searchInput = document.getElementById("searchInput");
    var searchValue = searchInput.value.toLowerCase();
    var users = document.querySelectorAll("#items .singlewingachivers");

  // get main list
  var userList = document.querySelector("#items");

  // loop through results items and hide/show based on search input
  var users = userList.querySelectorAll("#result");
for (var i = 0; i < users.length; i++) {
    var name = users[i].querySelector("#name").textContent.toLowerCase();
  var username = users[i].querySelector("#username").textContent.toLowerCase();
  var position = users[i].querySelector("#ran").textContent.toLowerCase();
  if (username.includes(searchValue) || position.includes(searchValue) || name.includes(searchValue)) {
    users[i].style.display = "block";
  } else {
    users[i].style.display = "none";
  }
}
}

document.getElementById("searchInput").addEventListener("keyup", filterUsers);


</script>




<script>
    function expand(card) {
            card.classList.toggle('profile--expanded');

            // If card is not expanded after toggle, add 'unexpanded' class
            if (!card.classList.contains('profile--expanded')) card.classList.toggle('profile--unexpanded');
            // Else if card is expanded after toggle and still contains 'unexpanded' class, remove 'unexpanded'
            else if (card.classList.contains('profile--expanded') && card.classList.contains('profile--unexpanded')) card.classList.toggle('profile--unexpanded');
        }

      
</script>


