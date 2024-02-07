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
     .progress.bg-label-success.mt-3 {
    width:80%;
}  
     

  @media screen and (max-width: 768px) {
img#badge {
    width: 16px;
    /* float: right; */
    /* right: 0; */
    margin-top: 10px;
    margin-left: 50px;
}

span.badge {
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
span.mobileh5 {
    font-size: 14px;
    margin-left: 4px;
    top: 18px;
    position: absolute;
}
span.mobileh6 {
    left: 56px;
    position: absolute;
    font-size: 12px;
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

} 
</style>
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title">Star Achievers</h4>
               <div class="row mt-2 d-flex justify-content-center">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-8 col-12">
                     <div class="card h-100">
                        <div class="card-body text-nowrap">
                           <h4 class="card-title mb-1 d-flex gap-2 flex-wrap">
                              Congratulations <strong>Norris!</strong> 🎉
                           </h4>
                           <p class="pb-0">Best seller of the month</p>
                           <h4 class="text-primary mb-1">$42.8k</h4>
                              <div class="progress bg-label-success mt-3">
                      <div
                        class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                        role="progressbar"
                        style="width: 20%"
                        aria-valuenow="20"
                        aria-valuemin="0"
                        aria-valuemax="70"></div>
                    </div>
                        </div>
                        <img src="<?=BASEURL?>assets/img/illustrations/trophy.png" class="position-absolute bottom-0 end-0 me-3" height="140" alt="view sales">
                     </div>
                  </div>
               </div>
               <div class="row mt-2 d-flex justify-content-center">
                  <div class="col-lg-3">
                     <label for="selectFilter">Filter by:</label>
                     <select class="form-select" id="selectFilter">
                        <option value="all" selected>All</option>
                        <option value="singlewingachivers">SINGLE WING ACHIEVERS</option>
                        <option value="doublewingachivers">DOUBLE WING ACHIEVERS</option>
                        <option value="triplewingachivers">TRIPLE WING ACHIEVERS</option>
                     </select>
                  </div>
                  <div class="col-lg-3">
                     <label for="searchInput">Search:</label>
                     <input class="form-control" type="text" id="searchInput" placeholder="Enter search term...">
                  </div>
               </div>
               <!--<div class="row mt-3 d-flex justify-content-center" id="items">-->
               <!--   <div class="col-lg-4 m-2 item singlewingachivers">-->
               <!--      <div class="card border border-info ">-->
               <!--         <div class="card-body">-->
               <!--            <div class="row">-->
               <!--               <div class="col-4">-->
               <!--                  <div class="avatar-md profile-user-wid m m-0">-->
               <!--                     <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">-->
               <!--                     <span class="badge">-->
               <!--                     <img src="<?=BASEURL?>assets/images/badges/plusbadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">-->
               <!--                     </span>-->
               <!--                  </div>-->
               <!--               </div>-->
               <!--               <div class="col">-->
               <!--                  <h3> <span>Nitheesh</span></h3>-->
               <!--                  <h5><span>@wert</span></h5>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--   <div class="col-lg-4 m-2 item doublewingachivers">-->
               <!--      <div class="card border border-warning ">-->
               <!--         <div class="card-body">-->
               <!--            <div class="row">-->
               <!--               <div class="col-4">-->
               <!--                  <div class="avatar-md profile-user-wid m m-0">-->
               <!--                     <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">-->
               <!--                     <span class="badge">-->
               <!--                     <img src="<?=BASEURL?>assets/images/badges/primebadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">-->
               <!--                     </span>-->
               <!--                  </div>-->
               <!--               </div>-->
               <!--               <div class="col">-->
               <!--                  <h3> <span>Anish</span></h3>-->
               <!--                  <h5><span>@wert</span></h5>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--   <div class="col-lg-4 m-2 item  triplewingachivers">-->
               <!--      <div class="card border border-info ">-->
               <!--         <div class="card-body">-->
               <!--            <div class="row">-->
               <!--               <div class="col-4">-->
               <!--                  <div class="avatar-md profile-user-wid m m-0">-->
               <!--                     <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">-->
               <!--                     <span class="badge">-->
               <!--                     <img src="<?=BASEURL?>assets/images/badges/plusbadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">-->
               <!--                     </span>-->
               <!--                  </div>-->
               <!--               </div>-->
               <!--               <div class="col">-->
               <!--                  <h3> <span>Arun</span></h3>-->
               <!--                  <h5><span>@wert</span></h5>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--   <div class="col-lg-4 m-2 item doublewingachivers">-->
               <!--      <div class="card border border-warning ">-->
               <!--         <div class="card-body">-->
               <!--            <div class="row">-->
               <!--               <div class="col-4">-->
               <!--                  <div class="avatar-md profile-user-wid m m-0">-->
               <!--                     <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">-->
               <!--                     <span class="badge">-->
               <!--                     <img src="<?=BASEURL?>assets/images/badges/primebadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">-->
               <!--                     </span>-->
               <!--                  </div>-->
               <!--               </div>-->
               <!--               <div class="col">-->
               <!--                  <h3> <span>Sree</span></h3>-->
               <!--                  <h5><span>@wert</span></h5>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--   <div class="col-lg-4 m-2 item singlewingachivers">-->
               <!--      <div class="card border border-info ">-->
               <!--         <div class="card-body">-->
               <!--            <div class="row">-->
               <!--               <div class="col-4">-->
               <!--                  <div class="avatar-md profile-user-wid m m-0">-->
               <!--                     <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">-->
               <!--                     <span class="badge">-->
               <!--                     <img src="<?=BASEURL?>assets/images/badges/plusbadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">-->
               <!--                     </span>-->
               <!--                  </div>-->
               <!--               </div>-->
               <!--               <div class="col">-->
               <!--                  <h3> <span>Nitheesh</span></h3>-->
               <!--                  <h5><span>@wert</span></h5>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--   <div class="col-lg-4 m-2 item  triplewingachivers">-->
               <!--      <div class="card border border-info ">-->
               <!--         <div class="card-body">-->
               <!--            <div class="row">-->
               <!--               <div class="col-4">-->
               <!--                  <div class="avatar-md profile-user-wid m m-0">-->
               <!--                     <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">-->
               <!--                     <span class="badge">-->
               <!--                     <img src="<?=BASEURL?>assets/images/badges/plusbadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">-->
               <!--                     </span>-->
               <!--                  </div>-->
               <!--               </div>-->
               <!--               <div class="col">-->
               <!--                  <h3> <span>Arun</span></h3>-->
               <!--                  <h5><span>@wert</span></h5>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--   <div class="col-lg-4 m-2 item  triplewingachivers">-->
               <!--      <div class="card border border-info ">-->
               <!--         <div class="card-body">-->
               <!--            <div class="row">-->
               <!--               <div class="col-4">-->
               <!--                  <div class="avatar-md profile-user-wid m m-0">-->
               <!--                     <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">-->
               <!--                     <span class="badge">-->
               <!--                     <img src="<?=BASEURL?>assets/images/badges/plusbadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">-->
               <!--                     </span>-->
               <!--                  </div>-->
               <!--               </div>-->
               <!--               <div class="col">-->
               <!--                  <h3> <span>Arun</span></h3>-->
               <!--                  <h5><span>@wert</span></h5>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--   <div class="col-lg-4 m-2 item doublewingachivers">-->
               <!--      <div class="card border border-warning ">-->
               <!--         <div class="card-body">-->
               <!--            <div class="row">-->
               <!--               <div class="col-4">-->
               <!--                  <div class="avatar-md profile-user-wid m m-0">-->
               <!--                     <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">-->
               <!--                     <span class="badge">-->
               <!--                     <img src="<?=BASEURL?>assets/images/badges/primebadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">-->
               <!--                     </span>-->
               <!--                  </div>-->
               <!--               </div>-->
               <!--               <div class="col">-->
               <!--                  <h3> <span>Anish</span></h3>-->
               <!--                  <h5><span>@wert</span></h5>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--   <div class="col-lg-4 m-2 item  triplewingachivers">-->
               <!--      <div class="card border border-info ">-->
               <!--         <div class="card-body">-->
               <!--            <div class="row">-->
               <!--               <div class="col-4">-->
               <!--                  <div class="avatar-md profile-user-wid m m-0">-->
               <!--                     <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">-->
               <!--                     <span class="badge">-->
               <!--                     <img src="<?=BASEURL?>assets/images/badges/plusbadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">-->
               <!--                     </span>-->
               <!--                  </div>-->
               <!--               </div>-->
               <!--               <div class="col">-->
               <!--                  <h3> <span>Arun</span></h3>-->
               <!--                  <h5><span>@wert</span></h5>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--   <div class="col-lg-4 m-2 item doublewingachivers">-->
               <!--      <div class="card border border-warning ">-->
               <!--         <div class="card-body">-->
               <!--            <div class="row">-->
               <!--               <div class="col-4">-->
               <!--                  <div class="avatar-md profile-user-wid m m-0">-->
               <!--                     <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">-->
               <!--                     <span class="badge">-->
               <!--                     <img src="<?=BASEURL?>assets/images/badges/primebadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">-->
               <!--                     </span>-->
               <!--                  </div>-->
               <!--               </div>-->
               <!--               <div class="col">-->
               <!--                  <h3> <span>Sree</span></h3>-->
               <!--                  <h5><span>@wert</span></h5>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               <div class="row mt-3 d-flex justify-content-center" id="items">
               <div class="col-lg-4 col-5 m-2 item singlewingachivers">
                  <div class="card border border-info ">
                     <div class="card-body">
                        <div class="row mobile">
                           <div class="col-4">
                              <div class="avatar-md profile-user-wid m m-0">
                                 <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                                 <span class="badge">
                                 <img src="<?=BASEURL?>assets/images/badges/plusbadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">
                                 </span>
                              </div>
                           </div>
                           <div class="col">
                              <h3> <span class="mobileh5">Anish</span></h3>
                              <h5><span class="mobileh6">@wert</span></h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=" col-lg-4 col-5 m-2 item doublewingachivers">
                 <div class="card border border-warning ">
                     <div class="card-body">
                        <div class="row mobile">
                           <div class="col-4">
                              <div class="avatar-md profile-user-wid m m-0">
                                 <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                                 <span class="badge">
                                 <img src="<?=BASEURL?>assets/images/badges/primebadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">
                                 </span>
                              </div>
                           </div>
                           <div class="col">
                               <h3> <span class="mobileh5">Anish</span></h3>
                              <h5><span class="mobileh6">@wert</span></h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              
               <div class="col-lg-4  col-5 m-2 item triplewingachivers">
                 <div class="card border border-warning ">
                     <div class="card-body">
                        <div class="row mobile">
                           <div class="col-4">
                              <div class="avatar-md profile-user-wid m m-0">
                                 <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                                 <span class="badge">
                                 <img src="<?=BASEURL?>assets/images/badges/primebadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">
                                 </span>
                              </div>
                           </div>
                           <div class="col">
                               <h3> <span class="mobileh5">Anish</span></h3>
                              <h5><span class="mobileh6">@wert</span></h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                <div class="col-lg-4  col-5 m-2  item singlewingachivers">
                  <div class="card border border-info ">
                     <div class="card-body">
                        <div class="row mobile">
                           <div class="col-4">
                              <div class="avatar-md profile-user-wid m m-0">
                                 <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                                 <span class="badge">
                                 <img src="<?=BASEURL?>assets/images/badges/plusbadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">
                                 </span>
                              </div>
                           </div>
                           <div class="col">
                              <h3> <span class="mobileh5">Anish</span></h3>
                              <h5><span class="mobileh6">@wert</span></h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
             
               <div class="col-lg-4  col-5 m-2 item doublewingachivers">
                 <div class="card border border-warning ">
                     <div class="card-body">
                        <div class="row mobile">
                           <div class="col-4">
                              <div class="avatar-md profile-user-wid m m-0">
                                 <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                                 <span class="badge">
                                 <img src="<?=BASEURL?>assets/images/badges/primebadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">
                                 </span>
                              </div>
                           </div>
                           <div class="col">
                               <h3> <span class="mobileh5">Anish</span></h3>
                              <h5><span class="mobileh6">@wert</span></h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4  col-5 m-2 item triplewingachivers">
                 <div class="card border border-warning ">
                     <div class="card-body">
                        <div class="row mobile">
                           <div class="col-4">
                              <div class="avatar-md profile-user-wid m m-0">
                                 <img src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                                 <span class="badge">
                                 <img src="<?=BASEURL?>assets/images/badges/primebadge.png" alt="" class="img-thumbnail rounded-circle" id="badge">
                                 </span>
                              </div>
                           </div>
                           <div class="col">
                               <h3> <span class="mobileh5">Anish</span></h3>
                              <h5><span class="mobileh6">@wert</span></h5>
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
   const selectFilter = document.getElementById('selectFilter');
   const searchInput = document.getElementById('searchInput');
   const items = document.querySelectorAll('.item');
   
   selectFilter.addEventListener('change', () => {
     const selectedValue = selectFilter.value;
     items.forEach(item => {
       if (selectedValue === 'all') {
         item.style.display = 'block';
       } else {
         item.classList.contains(selectedValue) ? item.style.display = 'block' : item.style.display = 'none';
       }
     });
   });
   
   searchInput.addEventListener('input', () => {
     const searchValue = searchInput.value.toLowerCase();
     items.forEach(item => {
       const name = item.querySelector('h3 span').textContent.toLowerCase();
       const username = item.querySelector('h5 span').textContent.toLowerCase();
       if (name.includes(searchValue) || username.includes(searchValue)) {
         item.style.display = 'block';
       } else {
         item.style.display = 'none';
       }
     });
   });
   
</script>

