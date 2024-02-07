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
   @media screen and (max-width: 768px) {
   img#badge {
   width: 14px;
   /* float: right; */
   /* right: 0; */
   margin-top: 10px;
   margin-left: 50px;
   }
   .card-body.text-nowrap {
    margin-top: 20px;
    padding: 8px;
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
   img.position-absolute.bottom-0.end-0.me-3 {
    width: 75px;
    height: 75px;
}
   span.starh6 {
   font-size: 10px;
   position: relative;
   top: 12px;
   }
   .card-body.users {
   padding: 10px;
   }
   div#items {
   padding: 0px;
   }
   svg#star1 {
   width: 13px;
   }
   svg#star2 {
   width: 13px;
   }
   svg#star3 {
   width: 13px;
   }
   svg#star4 {
   width: 13px;
   }
   svg#star5 {
   width: 13px;
   }
h6 {
    font-size: 12px!important;
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
<div class="container-xxl flex-grow-1 container-p-y">
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Prime Ceiling Achievers</h4>
            <div class="row mt-2 d-flex justify-content-center">
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-8 col-12">
                  <div class="card h-100">
                      <?php
                           $counts = $this->db->select('counts')->where('username', $this->session->userdata('ublisusername'))->get('prime_rank')->row()->counts;
                           
                           if ($counts >= 200) {
                               $rank = '5';
                               $next_rank_counts = null;
                           } elseif ($counts >= 100) {
                               $rank = '4';
                               $next_rank_counts = 200;
                           } elseif ($counts >= 50) {
                               $rank = '3';
                               $next_rank_counts = 100;
                           } elseif ($counts >= 25) {
                               $rank = '2';
                               $next_rank_counts = 50;
                           } elseif($counts >=5) {
                               $rank = '1';
                               $next_rank_counts = 25;
                           } elseif($counts < 5) {
                               $rank = '0';
                               $next_rank_counts = 5;
                           }
                           
                           if ($next_rank_counts!== null) {
                               $progress_percentage = ($counts/$next_rank_counts)*100;
                           } else {
                               $progress_percentage = 100;
                           }
                           ?>
                     <div class="card-body text-nowrap">
                        <?php $name=$this->db->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row_array(); ?>
                         <?php if($rank > '0'){ ?>
                        <h5 class="card-title mb-1 d-flex gap-2 flex-wrap">
                           Congratulations <strong><?=$name['first_name']?> <?=$name['last_name']?></strong> 🎉
                        </h5>
                        <?php } ?>
                        
                        <div class="col-6">
                            
                           <h6>
                           <?php if($rank > '0'){ ?>  You are now a <?php } ?>
                              <svg xmlns="http://www.w3.org/2000/svg"   id="star1"  viewBox="0 12.705 512 486.59" xml:space="preserve" width="32" height="32" fill="none" stroke="black" stroke-width="10" stroke-miterlimit="10">
                                 <path d="m256.814 12.705 60.391 185.861h195.426L354.529 313.435l60.389 185.86-158.104-114.868L98.713 499.295l60.389-185.86L1 198.566h195.426z"/>
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg"   id="star2"  viewBox="0 12.705 512 486.59" xml:space="preserve" width="32" height="32" fill="none" stroke="black" stroke-width="10" stroke-miterlimit="10">
                                 <path d="m256.814 12.705 60.391 185.861h195.426L354.529 313.435l60.389 185.86-158.104-114.868L98.713 499.295l60.389-185.86L1 198.566h195.426z"/>
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg"   id="star3"  viewBox="0 12.705 512 486.59" xml:space="preserve" width="32" height="32" fill="none" stroke="black" stroke-width="10" stroke-miterlimit="10">
                                 <path d="m256.814 12.705 60.391 185.861h195.426L354.529 313.435l60.389 185.86-158.104-114.868L98.713 499.295l60.389-185.86L1 198.566h195.426z"/>
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg"   id="star4"  viewBox="0 12.705 512 486.59" xml:space="preserve" width="32" height="32" fill="none" stroke="black" stroke-width="10" stroke-miterlimit="10">
                                 <path d="m256.814 12.705 60.391 185.861h195.426L354.529 313.435l60.389 185.86-158.104-114.868L98.713 499.295l60.389-185.86L1 198.566h195.426z"/>
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg"   id="star5"  viewBox="0 12.705 512 486.59" xml:space="preserve" width="32" height="32" fill="none" stroke="black" stroke-width="10" stroke-miterlimit="10">
                                 <path d="m256.814 12.705 60.391 185.861h195.426L354.529 313.435l60.389 185.86-158.104-114.868L98.713 499.295l60.389-185.86L1 198.566h195.426z"/>
                              </svg>
                           <?php if($rank > '0'){ ?>    Star Achiever <?php } ?>
                           </h6>
                           
                           <?php if($rank=='0'){$mess="You are not a star  Achiever";} ?>
                           <h6><?=$mess?></h6>
                           <p class="pb-0">My Prime Star's</p>
                           <div class="progress bg-label-success mt-3" style="width=200px;">
                              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                 role="progressbar"
                                 style="width: <?=$progress_percentage?>%"
                                 aria-valuenow="<?=$progress_percentage?>"
                                 aria-valuemin="0"
                                 aria-valuemax="70">
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
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
                   <?php $rank_achivers=$this->db->where('username !=',$this->session->userdata('ublisusername'))->get('prime_rank')->result_array(); 
               foreach($rank_achivers as $achivers) {
               ?>
                  <?php
                              $coun = $this->db->select('counts')->where('username', $achivers['username'])->get('prime_rank')->row()->counts;
                              
                              if ($coun >= 200) {
                                  $rankss = '5';
                              } elseif ($coun >= 100) {
                                  $rankss = '4';
                              } elseif ($coun >= 50) {
                                  $rankss = '3';
                              } elseif ($coun >= 25) {
                                  $rankss = '2';
                              } elseif($coun >=5) {
                                  $rankss = '1';
                              } elseif($coun < 5) {
                                  $rankss = '0';
                              }
                              
                             ?>
                             <?php if($rankss > 0) { ?>
                             <?php $name = $this->db->where('username', $achivers['username'])->get('user_role')->row_array();?>  
                  <!--<div class="col-lg-5  col-6 mt-2 item singlewingachivers" id="result">-->
                  <!--   <div class="card border border-warning ">-->
                  <!--      <div class="card-body users">-->
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
                               
                  <!--               <h3> <span class="mobileh5" id="name"><?=$name['first_name']?> <?=$name['last_name']?></span></h3>-->
                  <!--               <h5><span class="mobileh6" id="username"><?=$achivers['username']?></span></h5>-->
                  <!--               <h6><span class="starh6" id="ran"><?=$rankss?> Star</h6>-->
                  <!--            </div>-->
                  <!--         </div>-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
                   <div class="col-lg-5  col-6 mt-2 item singlewingachivers "  id="result">
           <div class="profile card border border-warning user profile--expand" onclick="expand(this)">
                <div class="col-4 image">
                            <div class="avatar-md profile-user-wid m m-0" id="popoverTarget_6482c8c4236b0" data-bs-content="BNSN01">
                                <img src="<?=BASEURL.'assets/images/'.$name['profile_image']?>" alt="" class="img-thumbnail rounded-circle">
                                    <span class="badges">
                                      <img src="https://demo-web-site.com/blissnova/newdev/assets/images/badges/plusbadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">
                                    </span>
                            </div>
                </div>
                                  <div class="profile__banner" >
                                 
                                                   <div class="profile__info">
                                                        
                        <h4 class="profile__info-display " id="name"><?=$name['first_name']?> <?=$name['last_name']?></h4>
                        <h5 class="profile__info-username " id="username"><?=$achivers['username']?></h5>
                    </div>
                </div>
            
                <div class="profile__data">
                       
                   <div class="profile__pic">
                        <img src="<?=BASEURL.'assets/images/'.$name['profile_image']?>" alt=""  class="mobimg">
                    </div>  
                    <span class="profile__data-following">
                        <h6 class="profile__data-following-number"><?=$rankss?> Star Achiever</h6>
                    </span>
                    <span class="profile__data-followers">
                        <h6 class="profile__data-followers-number">State &nbsp:&nbsp<?=$name['state']?></h6>
                    </span>
                  <!--<span class="profile__data-followers">-->
                  <!--      <h6 class="profile__data-followers-number">Total Achievement &nbsp:&nbsp</h6>-->
                  <!--  </span>-->
                </div>
            </div>
             
               </div>
                  <?php } ?>
                  <?php } ?>
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
   // Assuming you have SVG elements with the ids "star1", "star2", "star3", "star4", and "star5"
   const stars = [
   document.getElementById('star1'),
   document.getElementById('star2'),
   document.getElementById('star3'),
   document.getElementById('star4'),
   document.getElementById('star5')
   ];
   
   const starsAchieved = <?=$rank?>; // Assuming the user has achieved 3 stars
   
   for (let i = 0; i < starsAchieved; i++) {
   stars[i].style.fill = 'gold';
   }
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
