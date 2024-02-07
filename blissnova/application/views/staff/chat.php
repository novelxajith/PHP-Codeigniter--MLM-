<?php $this->load->view('staff/header.php');?>      
<!-- Page CSS -->
<link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/app-chat.css" />
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="app-chat card overflow-hidden">
      <div class="row g-0">
         <!-- Sidebar Left -->
         <?php $staff_profile=$this->db->select('profile_image')->where('user_type','s')->get('staff_panel')->row()->profile_image?>

         <!-- /Sidebar Left-->
         <!-- Chat & Contacts -->
         <div
            class="col app-chat-contacts app-sidebar flex-grow-0 overflow-hidden border-end"
            id="app-chat-contacts">
            <div class="sidebar-header py-3 px-4 border-bottom">
               <div class="d-flex align-items-center me-3 me-lg-0">
                  <div
                     class="flex-shrink-0 avatar avatar-online me-3"
                     data-bs-toggle="sidebar"
                     data-overlay="app-overlay-ex"
                     data-target="#app-chat-sidebar-left">
                     <img
                        class="user-avatar rounded-circle cursor-pointer"
                        src="<?=BASEURL?>assets/images/<?=$staff_profile?>"
                        alt="Avatar" />
                  </div>
                  <div class="flex-grow-1 input-group input-group-merge rounded-pill">
                     <span class="input-group-text" id="basic-addon-search31"
                        ><i class="mdi mdi-magnify lh-1"></i
                        ></span>
                     <input
                        type="text"
                        class="form-control chat-search-input"
                        placeholder="Search..."
                        aria-label="Search..."
                        aria-describedby="basic-addon-search31" />
                  </div>
               </div>
               <i
                  class="mdi mdi-close mdi-20px cursor-pointer position-absolute top-0 end-0 mt-2 me-2 fs-4 d-lg-none d-block"
                  data-overlay
                  data-bs-toggle="sidebar"
                  data-target="#app-chat-contacts"></i>
            </div>
             
            <div class="sidebar-body">
               <!-- Chats -->
               <ul class="list-unstyled chat-contact-list" id="chat-list">
                  <li class="chat-contact-list-item chat-contact-list-item-title">
                     <h5 class="text-primary mb-0">Chats</h5>
                  </li>
                  <li class="chat-contact-list-item chat-list-item-0 d-none">
                     <h6 class="text-muted mb-0">No Chats Found</h6>
                  </li>
                  <?php $chatsuser=$this->db->group_by('sender_id')->where('sender_id !=','Blissadmin')->get('chat_messages')->result_array();
                     foreach($chatsuser as $key => $senduser){
                         $username=$this->db->where('username',$senduser['sender_id'])->get('user_role')->row_array();
                         $unread=$this->db->where('sender_id',$senduser['sender_id'])->where('status','Unread')->count_all_results('chat_messages');
                         
                         if($unread=="Unread"){
                             $read="online";
                         }else{
                             $read="";
                         }
                         
                         $user_profile=$this->db->select('profile_image')->where('username',$senduser['sender_id'])->get('user_role')->row()->profile_image;
                         $badgecount = $this->db->where('sender_id',$senduser['sender_id'])->where('status=','Unread')->count_all_results('chat_messages')+0;
                     ?>
                     
                  <li class="chat-contact-list-item">
                     <a class="d-flex align-items-center" href="<?=BASEURL?>staff/chat/<?=$senduser['sender_id']?>">
                        <div class="flex-shrink-0 avatar avatar-<?=$read?>">
                           <img src="<?=BASEURL?>assets/images/<?=$user_profile?>" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div class="chat-contact-info flex-grow-1 ms-3">
                           <h6 class="chat-contact-name text-truncate m-0"><?=$username['first_name'].$username['last_name']?></h6>
                           <p class="chat-contact-status text-truncate mb-0"><?=$senduser['sender_id']?></p>
                        </div>
                        <?php $last_msg=$this->db->select('date')->order_by('id','desc')->limit(1)->where('sender_id',$senduser['sender_id'])->get('chat_messages')->row()->date;?>
                         <small class="text-muted mb-auto"><?=date('d-m-y',strtotime($last_msg))?></small>
                         <br>
                        <small class="text-muted mb-auto"><?=date('h:i A',strtotime($last_msg))?></small>
                   <?php
                    if ($badgecount > 0) {
                        echo '<div class="badge bg-success rounded-pill ms-auto">' . $badgecount . '</div>';
                    } else {
                        echo "";
                    }
                    ?>
                         
                     </a>
                  </li>
                  <?php
                     }?>
               </ul>
               <!-- Contacts -->
               <ul class="list-unstyled chat-contact-list" id="contact-list">
                  <li class="chat-contact-list-item chat-contact-list-item-title">
                     <h5 class="text-primary mb-0">Contacts</h5>
                  </li>
                  <li class="chat-contact-list-item contact-list-item-0 d-none">
                     <h6 class="text-muted mb-0">No Contacts Found</h6>
                  </li>
                  <?php
                     $totaluser =$this->db->where('user_type','u')->get('user_role')->result_array();
                     
                    foreach($totaluser as $key =>$contactuser){?>
                  <li class="chat-contact-list-item">
                     <a class="d-flex align-items-center" href="<?=BASEURL?>staff/chat/<?=$contactuser['username']?>">
                        <div class="flex-shrink-0 avatar">
                           <img src="<?=BASEURL?>assets/images/<?=$contactuser['profile_image']?>" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div class="chat-contact-info flex-grow-1 ms-3">
                           <h6 class="chat-contact-name text-truncate m-0"><?=$contactuser['first_name'].$user['last_name']?></h6>
                           <p class="chat-contact-status text-truncate mb-0"><?=$contactuser['username']?></p>
                        </div>
                     </a>
                  </li>
                  <?php
                     }?>
               </ul>
            </div>
         </div>
         <!-- /Chat contacts -->
         
         
         
         
         <!-- Chat History -->
         <?php $user=$this->db->where('username',$sender_id)->get('user_role')->row_array(); 
         if($sender_id==""){
             $co_image=$staff_profile;
         }else{
             $co_image=$user['profile_image'];
         }
         ?>
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
                                src="<?=BASEURL?>assets/images/<?=$co_image?>"
                                alt="Avatar"
                                class="rounded-circle"
                                data-bs-toggle="sidebar"
                                data-overlay
                                data-target="#app-chat-sidebar-right">
                            </div>

                            <div class="chat-contact-info flex-grow-1 ms-3">
                              <h6 class="m-0"><?=$user['username']?></h6>
                              <span class="user-status text-body"><?=$user['first_name']?> <?=$user['last_name']?></span>
                            </div>
                          </div>
                    
                        </div>
                      </div>
                      <div class="chat-history-body">
                 <?php foreach($sender as $key=>$chats) { ?>    
                        <ul class="list-unstyled chat-history">
                       
                   <!--chat right-->    
                 
                          <li class="chat-message chat-message-right">
                              
                    <?php   
                    if(!empty($chats['receive_msg'])){ ?>
                    
                            <div class="d-flex overflow-hidden">
                              <div class="chat-message-wrapper flex-grow-1">
                                <div class="chat-message-text">
                                  <p class="mb-0"><?=$chats['receive_msg']?></p>
                                </div>
                                <div class="text-end text-muted">
                                  <i class="mdi mdi-check-all mdi-14px text-success me-1"></i>
                                  <small><?=(new DateTime($chats['date']))->format('F j, Y h:i A')?></small>
                                </div>
                              </div>
                              <div class="user-avatar flex-shrink-0 ms-3">
                               <div class="avatar avatar-sm">
                                   <img src="<?=BASEURL?>assets/images/<?=$staff_profile?>" alt="Avatar" class="rounded-circle">
                                </div>
                              </div>
                            </div>
                             <?php   } ?>
                          </li>
                          
                <!--chat left-->
                          <li class="chat-message">
                              
                   
                  <?php  if(!empty($chats['send'])){ ?>
                            <div class="d-flex overflow-hidden">
                              <div class="user-avatar flex-shrink-0 me-3">
                               <div class="avatar avatar-sm">
                                 
                                  <img src="<?=BASEURL?>assets/images/<?=$user['profile_image']?>" alt="Avatar" class="rounded-circle">
                                </div>
                              </div>
                              <div class="chat-message-wrapper flex-grow-1">
                                <div class="chat-message-text">
                                  <p class="mb-0"><?=$chats['send']?></p>
                                </div>
                                <div class="text-muted">
                                  <small><?=(new DateTime($chats['date']))->format('F j, Y h:i A')?></small>
                                </div>
                              </div>
                            </div>
                            <?php   } ?>
                          </li>
                          
                          
                         
                     </ul>
                      <?php } ?>
                      </div>
                      <!-- Chat message form -->
                   <div class="chat-history-footer" <?php if ($sender_id == "") { echo "hidden"; } ?>>

             <?php
              $admin=$this->db->select('username')->where('user_type','a')->get('user_role')->row()->username;
             $checkusermessage=$this->db->where('sender_id',$sender_id)->count_all_results('chat_messages')+0;
             
             
             if($checkusermessage>0){
                 $msgsender=$chats['sender_id'];
             }else{
                 $msgsender=$sender_id;
             }
             ?>
                         <?=form_open_multipart('staff/send_message')?>
                          <div class="d-flex">
                          <input
                            class="form-control message-input me-3 shadow-none"
                            placeholder="Type your message here" type="text" name="message">
                           <input type="hidden" name="sender" value="<?=$admin?>">
                           <input type="hidden" name="receiver" value="<?=$msgsender?>">
                          <div class="message-actions d-flex align-items-center">
                    
                            </label>
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
     
         
         
         
         <!-- /Sidebar Right -->
         <div class="app-overlay"></div>
      </div>
   </div>
</div>
<!-- / Content -->
<?php $this->load->view('staff/footer')?>       
<!-- Page JS -->
<script src="<?=BASEURL?>assets/js/app-chat.js"></script>