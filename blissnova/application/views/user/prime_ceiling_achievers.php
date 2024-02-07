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
    width: 25px!important;
    top: 15px!important;
    position: absolute!important;
    margin-left: -20px!important;
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
   
    margin-left: -30px!important;
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
            <h4 class="card-title">Plus Celing Achievers</h4>
            <div class="row mt-2 d-flex justify-content-center">
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-8 col-12">
                  <div class="card h-100">
                      
                  </div>
               </div>
               
               <form action="<?=BASEURL?>user/prime_ceiling_achievers_filter" method="post">
               <div class="row mt-2 d-flex justify-content-center">
                  
                  <div class="col-lg-4">
                     <label for="searchInput">From:</label>
                     <input class="form-control" type="date"  name="min" id="from" placeholder="Enter search term...">
                  </div>
                  <div class="col-lg-4">
                     <label for="searchInput">To:</label>
                     <input class="form-control" type="date" name="max" id="to" placeholder="Enter search term...">
                  </div>
                  <div class="col-lg-4">
                       <label for="searchInput"></label>
                     <button type="submit" class="form-control">Search</button>
                  </div>
                  
               </div>
               </form>
               <div class="row mt-2 d-flex justify-content-center">
                  
                  <div class="col-lg-6">
                     <label for="searchInput">Search:</label>
                     <input class="form-control" type="text" id="searchInput" placeholder="Enter search term...">
                  </div>
               </div>
               <div class="row mt-3 new d-flex justify-content-center" id="items">
                   <?php 
                       foreach($rank_users as $user){
                            $coun = $this->db->group_by('username')->where('date(entry_date)',$user['entry_date'])->get('prime_rank_day')->result_array(); 
                              foreach($coun as $key){ ?>
                              
                    <?php $name = $this->db->where('username', $key['username'])->get('user_role')->row_array();          
                              if($name['user_type'] == "u" && $name['id'] > 297){
                     ?>         
                                  
            <?php   
            $left_sub_id=$this->db->select('username')->where('ref_id',$key['username'])->where('position','left')->where('user_type','sub')->get('user_role')->row()->username;
            $right_sub_id=$this->db->select('username')->where('ref_id',$key['username'])->where('position','right')->where('user_type','sub')->get('user_role')->row()->username;
            //echo "$left_sub_id"."left";
            // echo "$right_sub_id"."right";
            
            $coun_wing1 = $this->db->select_sum('counts')
                ->where('username', $left_sub_id)
                ->where('DATE(entry_date)', $user['entry_date'])
                ->get('prime_rank_day')
                ->row()
                ->counts+0;
            
            $coun_wing2 = $this->db->select_sum('counts')
                ->where('username', $right_sub_id)
                ->where('DATE(entry_date)', $user['entry_date'])
                ->get('prime_rank_day')
                ->row()
                ->counts+0;

           // echo $coun_wing1; echo $coun_wing2;
            
            if($coun_wing1 > 0 && $coun_wing2 == 0){
                $sentence="Double Wing Achiever";
            }else if($coun_wing1 > 0 && $coun_wing2 > 0){
                $sentence="Triple Wing Achiever";
            }else if($coun_wing1 == 0 && $coun_wing2 == 0){
                $sentence="Single Wing Achiever";
            }else if($coun_wing1 == 0 && $coun_wing2 > 0){
                $sentence="Double Wing Achiever";
            }
            
            $stars = $this->db->select_sum('counts')->where_in('username', array($key['username'],$left_sub_id,$right_sub_id))->get('prime_rank_day')->row()->counts; ?>
           
          <div class="col-lg-5  col-6 mt-2 item singlewingachivers "  id="result">
           <div class="profile card border border-info user profile--expand" onclick="expand(this)">
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
                        <h5 class="profile__info-username " id="username"><?=$key['username']?></h5>
                    </div>
                </div>
            
                <div class="profile__data">
                       
                   <div class="profile__pic">
                        <img src="<?=BASEURL.'assets/images/'.$name['profile_image']?>" alt=""  class="mobimg">
                    </div>  
                    <span class="profile__data-following">
                        <h6 class="profile__data-following-number"><?=$sentence?></h6>
                    </span>
                    <span class="profile__data-followers">
                        <h6 class="profile__data-followers-number">State &nbsp:&nbsp<?=$name['state']?></h6>
                    </span>
                    <span class="profile__data-likes">
                        <h6 class="profile__data-likes-number" id="ran">Total Achievements &nbsp:&nbsp <?=$stars?></h6>
                    </span>
                </div>
            </div>
             
               </div>
                               
                   <?php  
                }
                    }
                       } ?>
                 
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