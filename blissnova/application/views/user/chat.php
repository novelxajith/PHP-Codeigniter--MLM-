<?php include 'header.php';?>      
<!-- Page CSS -->
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/app-chat.css" />
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="app-chat card overflow-hidden">
      <div class="row g-0">
         <!-- Sidebar Left -->
         <!--<div class="col app-chat-sidebar-left app-sidebar overflow-hidden" id="app-chat-sidebar-left">-->
         <!--   <div-->
         <!--      class="chat-sidebar-left-user sidebar-header d-flex flex-column justify-content-center align-items-center flex-wrap px-4 pt-5">-->
         <!--      <div class="avatar avatar-xl avatar-online w-px-75 h-px-75">-->
         <!--         <img src="<?=BASEURL?>assets/images/users/profile.jpg" alt="Avatar" class="rounded-circle" />-->
         <!--      </div>-->
         <!--      <h5 class="mt-3 mb-1 fw-semibold">John Doe</h5>-->
         <!--      <span>UI/UX Designer</span>-->
         <!--      <i-->
         <!--         class="mdi mdi-close mdi-20px cursor-pointer close-sidebar"-->
         <!--         data-bs-toggle="sidebar"-->
         <!--         data-overlay-->
         <!--         data-target="#app-chat-sidebar-left"></i>-->
         <!--   </div>-->
         <!--   <div class="sidebar-body px-4 pb-4">-->
         <!--      <div class="my-4 pt-2">-->
         <!--         <label for="chat-sidebar-left-user-about" class="text-uppercase">About</label>-->
         <!--         <textarea-->
         <!--            id="chat-sidebar-left-user-about"-->
         <!--            class="form-control chat-sidebar-left-user-about mt-3"-->
         <!--            rows="3"-->
         <!--            maxlength="120">-->
         <!--         Dessert chocolate cake lemon drops jujubes. Biscuit cupcake ice cream bear claw brownie brownie marshmallow.</textarea-->
         <!--            >-->
         <!--      </div>-->
         <!--      <div class="my-4">-->
         <!--         <p class="text-uppercase">Status</p>-->
         <!--         <div class="d-grid gap-2">-->
         <!--            <div class="form-check form-check-success">-->
         <!--               <input-->
         <!--                  name="chat-user-status"-->
         <!--                  class="form-check-input"-->
         <!--                  type="radio"-->
         <!--                  value="active"-->
         <!--                  id="user-active"-->
         <!--                  checked />-->
         <!--               <label class="form-check-label" for="user-active">Active</label>-->
         <!--            </div>-->
         <!--            <div class="form-check form-check-danger">-->
         <!--               <input-->
         <!--                  name="chat-user-status"-->
         <!--                  class="form-check-input"-->
         <!--                  type="radio"-->
         <!--                  value="busy"-->
         <!--                  id="user-busy" />-->
         <!--               <label class="form-check-label" for="user-busy">Busy</label>-->
         <!--            </div>-->
         <!--            <div class="form-check form-check-warning">-->
         <!--               <input-->
         <!--                  name="chat-user-status"-->
         <!--                  class="form-check-input"-->
         <!--                  type="radio"-->
         <!--                  value="away"-->
         <!--                  id="user-away" />-->
         <!--               <label class="form-check-label" for="user-away">Away</label>-->
         <!--            </div>-->
         <!--            <div class="form-check form-check-secondary">-->
         <!--               <input-->
         <!--                  name="chat-user-status"-->
         <!--                  class="form-check-input"-->
         <!--                  type="radio"-->
         <!--                  value="offline"-->
         <!--                  id="user-offline" />-->
         <!--               <label class="form-check-label" for="user-offline">Offline</label>-->
         <!--            </div>-->
         <!--         </div>-->
         <!--      </div>-->
         <!--      <div class="my-4">-->
         <!--         <p class="text-uppercase">Settings</p>-->
         <!--         <ul class="list-unstyled d-grid gap-3 me-3 ms-2 ps-1">-->
         <!--            <li class="d-flex justify-content-between align-items-center">-->
         <!--               <div>-->
         <!--                  <i class="mdi mdi-check-circle-outline me-1"></i>-->
         <!--                  <span class="align-middle">Two-step Verification</span>-->
         <!--               </div>-->
         <!--               <label class="switch switch-primary me-4">-->
         <!--               <input type="checkbox" class="switch-input" checked="" />-->
         <!--               <span class="switch-toggle-slider">-->
         <!--               <span class="switch-on"></span>-->
         <!--               <span class="switch-off"></span>-->
         <!--               </span>-->
         <!--               </label>-->
         <!--            </li>-->
         <!--            <li class="d-flex justify-content-between align-items-center">-->
         <!--               <div>-->
         <!--                  <i class="mdi mdi-bell-outline me-1"></i>-->
         <!--                  <span class="align-middle">Notification</span>-->
         <!--               </div>-->
         <!--               <label class="switch switch-primary me-4">-->
         <!--               <input type="checkbox" class="switch-input" />-->
         <!--               <span class="switch-toggle-slider">-->
         <!--               <span class="switch-on"></span>-->
         <!--               <span class="switch-off"></span>-->
         <!--               </span>-->
         <!--               </label>-->
         <!--            </li>-->
         <!--            <li>-->
         <!--               <i class="mdi mdi-account-outline me-1"></i>-->
         <!--               <span class="align-middle">Invite Friends</span>-->
         <!--            </li>-->
         <!--            <li>-->
         <!--               <i class="mdi mdi-delete-outline me-1"></i>-->
         <!--               <span class="align-middle">Delete Account</span>-->
         <!--            </li>-->
         <!--         </ul>-->
         <!--      </div>-->
         <!--      <div class="d-flex mt-4">-->
         <!--         <button-->
         <!--            class="btn btn-primary"-->
         <!--            data-bs-toggle="sidebar"-->
         <!--            data-overlay-->
         <!--            data-target="#app-chat-sidebar-left">-->
         <!--         Logout-->
         <!--         </button>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
          <?php $user=$this->db->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row_array(); ?>
         <div class="col app-chat-history">
            <div class="chat-history-wrapper">
               <div class="chat-history-header border-bottom">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="d-flex overflow-hidden align-items-center">
                        <i
                           class="mdi mdi-menu mdi-24px cursor-pointer d-lg-none d-block me-3"
                           data-bs-toggle="sidebar"
                           data-overlay
                           data-target="#app-chat-contacts"></i>
                        <div class="flex-shrink-0 avatar avatar-online">
                           <img
                              src="<?=BASEURL?>assets/images/<?=$user['profile_image']?>"
                              alt="Avatar"
                              class="rounded-circle"
                             />
                        </div>
                       
                        <div class="chat-contact-info flex-grow-1 ms-3">
                           <h6 class="m-0"><?=$user['username']?></h6>
                           <span class="user-status text-body"><?=$user['first_name']?> <?=$user['last_name']?></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="chat-history-body">
                <?php  $chat= $this->db->where('sender_id',$this->session->userdata('ublisusername'))->get('chat_messages')->result_array();
                         foreach($chat as $key => $rd) {?>
                        <ul class="list-unstyled chat-history">
                  <!--right side message-->
                          <li class="chat-message chat-message-right">
                 <?php   
                           if(!empty($rd['send'])){ ?>
                           
                            <div class="d-flex overflow-hidden">
                              <div class="chat-message-wrapper flex-grow-1">
                                <div class="chat-message-text">
                                  <p class="mb-0"><?=$rd['send']?></p>
                                </div>
                                <div class="text-end text-muted">
                                  <!--<i class="mdi mdi-check-all mdi-14px text-success me-1"></i>-->
                                  <small><?=(new DateTime($rd['date']))->format('F j, Y h:i A')?></small>
                                </div>
                              </div>
                              <div class="user-avatar flex-shrink-0 ms-3">
                                <div class="avatar avatar-sm">
                                  <img src="<?=BASEURL?>assets/images/<?=$user['profile_image']?>" alt="Avatar" class="rounded-circle"/>
                                </div>
                              </div>
                            </div>
                          <?php   } ?>
                          </li>
                          
                   <!--left side message-->        
                          <li class="chat-message">
                              <?php $admin_profile=$this->db->select('profile_image')->where('user_type','a')->get('user_role')->row()->profile_image;?>
                     <?php   
                        if( !empty($rd['receive_msg'])){ ?>
                            <div class="d-flex overflow-hidden">
                              <div class="user-avatar flex-shrink-0 me-3">
                                <div class="avatar avatar-sm">
                                      <img src="<?=BASEURL?>assets/images/<?=$admin_profile?>" alt="Avatar" class="rounded-circle"/>
                                </div>
                              </div>
                              <div class="chat-message-wrapper flex-grow-1">
                                <div class="chat-message-text">
                                  <p class="mb-0"><?=$rd['receive_msg']?></p>
                                </div>
                                <div class="text-muted">
                                  <small><?=(new DateTime($rd['date']))->format('F j, Y h:i A')?></small>
                                </div>
                              </div>
                            </div>
                     <?php  } ?>
                          </li>
                        </ul>
                          <?php   } ?>   
                         
                      </div>
               <!-- Chat message form -->
               <div class="chat-history-footer">
                  <?php $admin=$this->db->select('username')->where('id',1)->get('user_role')->row()->username; 
                     $user=$this->session->userdata('ublisusername'); ?>
              <?=form_open_multipart('user/send_message')?>
              <div class="d-flex">
                  <input
                        class="form-control message-input me-3 shadow-none"
                        placeholder="Type your message here"  type="text" name="message">
                     <input type="hidden" name="sender" value="<?=$user?>">
                     <input type="hidden" name="receiver" value="<?=$admin?>">
                     <div class="message-actions d-flex align-items-center">
                        <!--<i-->
                        <!--   class="btn btn-text-secondary btn-icon rounded-pill speech-to-text mdi mdi-microphone mdi-20px cursor-pointer"></i>-->
                        <!--<label for="attach-doc" class="form-label mb-0">-->
                        <!--<i-->
                        <!--   class="mdi mdi-paperclip mdi-20px cursor-pointer btn btn-text-secondary btn-icon rounded-pill me-2 ms-1"></i>-->
                        <!--<input type="file" id="attach-doc" hidden />-->
                        <!--</label>-->
                        <button type="submit" class="btn btn-primary d-flex send-msg-btn">
                        <span class="align-middle">Send</span>
                        </button>
              </div>
                     
                     </div>
                  <?=form_close()?>
               </div>
            </div>
         </div>
         <!-- /Chat History -->
         
      </div>
   </div>
</div>
<!-- / Content -->
<?php include 'footer.php';?>       
<!-- Page JS -->
<script src="<?=BASEURL?>assets/js/app-chat.js"></script>