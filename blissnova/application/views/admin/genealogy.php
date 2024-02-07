<?php include('header.php')?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?=BASEURL?>assets/css/tooltipster.bundle.min.css" type="text/css">
<link rel="stylesheet" href="<?=BASEURL?>assets/css/tooltipster-sideTip-shadow.min.css" type="text/css">
<link rel="stylesheet" href="<?=BASEURL?>assets/css/tree.css" type="text/css">
<link rel="stylesheet" href="<?=BASEURL?>assets/css/tree_binary.css" type="text/css">
<link rel="stylesheet" href="<?=BASEURL?>assets/css/tree_tooltip.css" type="text/css">
<style>
   .popover.bs-popover-auto.fade.show{
   max-width: fit-content!important;
   }
   div#tree {
   width: 100%;
   overflow: auto;
   }
   /*    ul.trans_history {*/
   /*    max-height: 800px;*/
   /*    overflow: auto;*/
   /*}*/
   /*ol, ul {*/
   /*    list-style: none;*/
   /*    margin: 0;*/
   /*    padding: 0;*/
   /*}*/
   .nk-support-item:not(:last-child) {
   border-bottom: 1px solid #e5e9f2;
   }
   .trans_list {
   padding: 0.35rem 0.35rem;
   margin-bottom: 2px;
   border-radius: 5px;
   cursor: pointer;
   background: #f7dd8e;
   margin-right: 5px;
   }
   .nk-support-item {
   display: flex;
   padding: 1.25rem;
   }
   .w {
   width: 37px;
   height: 56px;
   display: flex;
   align-items: center;
   justify-content: center;
   /* background-color: #ededed; */
   font-size: 27px;
   border-radius: 10px;
   }
   ul { 
   padding: 0px;
   }
   li {
   float: left;
   width: auto;
   list-style: outside none none;
   }
   
   .fw-semibold {
    font-weight: 600 !important;
    color: #428bca;
    font-size:12px;
}
</style>
<style>
   /*Profile Pic Start*/
   .picture-container{
   position: relative;
   cursor: pointer;
   text-align: center;
   }
   .picture{
   width: 106px;
   height: 106px;
   background-color: #999999;
   border: 4px solid #CCCCCC;
   color: #FFFFFF;
   border-radius: 50%;
   margin: 0px auto;
   overflow: hidden;
   transition: all 0.2s;
   -webkit-transition: all 0.2s;
   }
   .picture:hover{
   border-color: #2ca8ff;
   }
   .content.ct-wizard-green .picture:hover{
   border-color: #05ae0e;
   }
   .content.ct-wizard-blue .picture:hover{
   border-color: #3472f7;
   }
   .content.ct-wizard-orange .picture:hover{
   border-color: #ff9500;
   }
   .content.ct-wizard-red .picture:hover{
   border-color: #ff3b30;
   }
   .picture input[type="file"] {
   cursor: pointer;
   display: block;
   height: 100%;
   left: 0;
   opacity: 0 !important;
   position: absolute;
   top: 0;
   width: 100%;
   }
   .picture-src{
   width: 100%;
   }
   /*Profile Pic End*/
   .col.new {
   display: flex;
   align-items: center;
   justify-content: center;
   }
  
   .card-body.p-4 {
   overflow: auto;
   width: 100%;
   }
   .list-group-item {
   background-color: var(--bs-list-group-bg)!important;
   }
   .Demo_head_bg {
   display: none!important;
   }

   @media only screen and (max-width : 991px) {
 .fw-semibold {
    font-weight: 600 !important;
    color: #428bca;
    font-size: 8px;
}
table#tree_div2 {
    width: 250px!important;
}
   table#tree_div3 {
    width: 250px!important;
}
}
  
</style>
<div class="page-wrapper">
   <div class="page-content">
      <div class="card card-body p-4 card radius-10 border-start border-0 border-3 border-warning">
         <h5 class="card-header">Binary Tree</h5>
         <div class="col new">
            <form action="<?=BASEURL?>admin/search" method="POST">
               <div class="d-flex">
                  <input type="text" name="search" class="form-control" placeholder="Search..."  value="<?=$this->input->post('search')?>"  />
                  <button type="submit" class="btn btn-primary">Search</button>
               </div>
               <?=form_error('search')?>
            </form>
         </div>
         <div id="tree" class="orgChart" style="transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;">
            <div class="jOrgChart">
               <table id="tree_div" cellspacing="0" cellpadding="0" border="0" align="center">
                  <tbody>
                     <tr class="node-cells">
                        <td class="node-cell" colspan="4">
                           <div class="node" style="cursor: default;">
                              <?php $admin=$this->db->where('username',$sponsor['username'])->get('user_role')->row_array();
                                 $sponsortype = $this->db->select_max('credit')->where('username',$sponsor['username'])->get('pin')->row()->credit;
                                     if ($sponsortype == '10000') {
                                        $usercolor = 'primebadge.png';
                                        $ccode = '#CFB730';
                                    } else if ($sponsortype == '1100') {
                                        $usercolor = 'plusbadge.png';
                                        $ccode = '#27a9ff';
                                    } else if ($sponsortype != '10000' && $sponsortype != '1100') {
                                        $ccode = '#808080';
                                    }
                                    ?>
                              <?php
                                 $user_detail = $this->db->where('username', $sponsor['username'])->get('user_role')->row_array();
                                 
                                  $left_user = $this->db->where('position', 'left')->where('parent_id',  $user_detail['username'])->get('tree')->row_array();
                                                 
                                                 if (!empty($left_user)) {
                                                   $left = $this->db->like('team', $left_user['child_id'])->get('tree')->result_array();
                                                   array_unshift($left, $left_user);
                                                   $left_team=$left;
                                                  
                                                   }
                                                 
                                                 //print_r($left_team);
                                                 $count_lfft=1;
                                                 foreach($left_team as $keey=> $left_userole)
                                                 {
                // $plus_users_l +=$this->db->select('credit')->where('type','Plus')->where('remark','Activation')->where('username',$left_userole['child_id'])->get('pin')->row()->credit+0;
                // $prime_users_l +=$this->db->select('credit')->where('type','Prime')->where('remark','Activation')->where('username',$left_userole['child_id'])->get('pin')->row()->credit+0;
                                                         
        $plus_users_l +=$this->db->select('plus_deposit')->where('username',$left_userole['child_id'])->get('user_role')->row()->plus_deposit+0;
        $prime_users_l +=$this->db->select_sum('prime_deposit')->where('username',$left_userole['child_id'])->get('user_role')->row()->prime_deposit+0;
        
        if($plus_users_l >0){
           
           //log_message('error',"LEFT".$count_lfft++)   ;  
           //log_message('error',$plus_users_l." -> ".$left_userole['child_id'])   ;    
        }
                                                                                      
                                                 }
                                 ?>    
                              <?php $right_user=$this->db->where('position','right')->where('parent_id', $user_detail['username'])->get('tree')->row_array();
                                 if(!empty($right_user)){
                                   $right=$this->db->like('team',$right_user['child_id'])->get('tree')->result_array();
                                   array_unshift($right, $right_user);
                                   $right_team=$right;
                                   
                                 }   
                                 ($right_team) ? $right_count=count($right_team) : $right_count="0";
                                 
                                 $count_rttr=1;
                                 foreach($right_team as $keyyy=> $right_userole)
                                 {
            // $plus_users_r +=$this->db->select('credit')->where('type','Plus')->where('remark','Activation')->where('username',$right_userole['child_id'])->get('pin')->row()->credit+0;
            // $prime_users_r +=$this->db->select('credit')->where('type','Prime')->where('remark','Activation')->where('username',$right_userole['child_id'])->get('pin')->row()->credit+0;
               
             $plus_users_r +=$this->db->select('plus_deposit')->where('username',$right_userole['child_id'])->get('user_role')->row()->plus_deposit+0;
            $prime_users_r +=$this->db->select('prime_deposit')->where('username',$right_userole['child_id'])->get('user_role')->row()->prime_deposit+0;
              
        if($plus_users_r >0){
            
            //log_message('error',"RIGHT".$count_rttr++)   ;  
           //log_message('error',$plus_users_r." -> ".$right_userole['child_id'])   ;    
        }                         
                                      
                                 }
                                 ?>
                              <a href="<?= BASEURL ?>admin/binary_tree/<?= $sponsor['username'] ?>" >
                                 <img style="border: 3px solid <?= $ccode ?>" class="tree_icon with_tooltip root_node" src="<?= BASEURL ?>assets/images/users/profile.jpg" ondblclick="getGenologyTree('elangorp',event);"  data-bs-placement="right" data-mydata="<?=$sponsor['username']?>" data-bs-content="This is a very beautiful popover, show some love." data-bs-original-title="Popover title" aria-describedby="popover661421">
                                 <p class="demo_name_style"><?= $sponsor['username'] ?></p>
                                 <p class="demo_name_style"><?=$admin['first_name']?>.<?=$admin['last_name']?></p>
                              </a>
                           </div>
                           <div id="tooltip_div" style="display:none;">
                              <div id="<?=$sponsor['username']?>" class="tree_img_tree">
                                 <?php 
                                   // $left_child = $this->db->select('child_id')->where('parent_id', $sponsor['username'])->where('position', 'left')->get('tree')->row()->child_id;
                                   // $left_team = ($left_child != "") ? $this->db->like('team', $left_child)->count_all_results('tree') + 1 : 0;
                                    
                                  //  $right_child = $this->db->select('child_id')->where('parent_id', $sponsor['username'])->where('position', 'right')->get('tree')->row()->child_id;
                                   // $right_team = ($right_child != "") ? $this->db->like('team', $right_child)->count_all_results('tree') + 1 : 0;
                                    ?>
                               
                               
                              </div>
                           </div>
                           <?php
                           ($left_team) ? $left_count = count($left_team) : $left_count = "0";
                           ($right_team) ? $right_count=count($right_team) : $right_count="0";
                           
                           $left_plust_plus_count=$plus_users_l/1100;
                           $left_primet_prime_count=$prime_users_l/10000;
                           
                           $right_plust_plus_count=$plus_users_r/1100;
                           $right_primet_prime_count=$prime_users_r/10000;
                           ?>
                           <div class="">
                           <span class="fw-semibold"> Left:<?= $left_count ?> &nbspRight:<?= $right_count ?></span>
                           <br>
                           <span class="fw-semibold"> LPR :<?=$left_primet_prime_count*1000?>&nbspRPR:&nbsp<?=$right_primet_prime_count*1000?></span>
                           <br>
                           <span class="fw-semibold"> LPL :<?=$left_plust_plus_count*300?> &nbspRPL:&nbsp<?=$right_plust_plus_count*300?></span>
                     </div>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="4">
                           <div class="line down">
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td class="line left">
                        </td>
                        <td class="line right top">
                        </td>
                        <td class="line left top">
                        </td>
                        <td class="line right">
                        </td>
                     </tr>
                     <tr>
                        <td class="node-container" colspan="2">
                           <table id="tree_div2" cellspacing="0" cellpadding="0" border="0" align="center">
                              <tbody>
                                 <tr class="node-cells">
                                    <td class="node-cell" colspan="4">
                                       <?php
                                          if (!empty($sponsor['username'])) {
                                              $cl = $this->db->select('child_id')->from("tree")->where('parent_id',$sponsor['username'])->where('position','left')->get()->row()->child_id; 
                                              if (!empty($cl)) {
                                                  $this->admin->get_genealogy($cl);
                                              } else { ?>
                                       <div class="node">
                                          <a href="<?=BASEURL?>admin/registerontree/left/<?=bin2hex($sponsor['username'])?>">
                                             <i style="font-size: 35px" class="fa fa-plus-circle tree_icon add-icon" aria-hidden="true"></i>
                                             <br>
                                             <p class="demo_name_style_blue add-btn">ADD HERE</p>
                                          </a>
                                       </div>
                                       <?php } 
                                          } else { ?>
                                       <div class="node">
                                          <i style="font-size: 35px" class="fa fa-ban " aria-hidden="true"></i>
                                          <br>
                                          <p class="demo_name_style_blue add-btn">
                                             Empty
                                          </p>
                                       </div>
                                       <?php } ?>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td colspan="4">
                                       <div class="line down">
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="line left">
                                    </td>
                                    <td class="line right top">
                                    </td>
                                    <td class="line left top">
                                    </td>
                                    <td class="line right">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="node-container" colspan="2">
                                       <table id="tree_div" cellspacing="0" cellpadding="0" border="0" align="center">
                                          <tbody>
                                             <tr class="node-cells">
                                                <td class="node-cell" colspan="4">
                                                   <?php
                                                      if (!empty($cl)) {
                                                          $cll = $this->db->select('child_id')->from("tree")->where('parent_id',$cl)->where('position','left')->get()->row()->child_id; 
                                                          if (!empty($cll)) {
                                                              $this->admin->get_genealogy($cll);
                                                          } else { ?>
                                                   <div class="node">
                                                      <a href="<?=BASEURL?>admin/registerontree/left/<?=bin2hex($cl)?>">
                                                         <i style="font-size: 35px" class="fa fa-plus-circle tree_icon add-icon" aria-hidden="true"></i>
                                                         <br>
                                                         <p class="demo_name_style_blue add-btn">ADD HERE</p>
                                                      </a>
                                                   </div>
                                                   <?php } 
                                                      } else { ?>
                                                   <div class="node">
                                                      <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                      <br>
                                                      <p class="demo_name_style_blue add-btn">
                                                         Empty
                                                      </p>
                                                   </div>
                                                   <?php } ?>
                                                </td>
                                             </tr>
                                           
                                          </tbody>
                                       </table>
                                    </td>
                                    <td class="node-container" colspan="2">
                                       <table id="tree_div" cellspacing="0" cellpadding="0" border="0" align="center">
                                          <tbody>
                                             <tr class="node-cells">
                                                <td class="node-cell" colspan="4">
                                                   <?php
                                                      if (!empty($cl)) {
                                                          $clr = $this->db->select('child_id')->from("tree")->where('parent_id',$cl)->where('position','right')->get()->row()->child_id; 
                                                          if (!empty($clr)) {
                                                              $this->admin->get_genealogy($clr);
                                                          } else { ?>
                                                   <div class="node">
                                                      <a href="<?=BASEURL?>admin/registerontree/right/<?=bin2hex($cl)?>">
                                                         <i style="font-size: 35px" class="fa fa-plus-circle tree_icon add-icon" aria-hidden="true"></i>
                                                         <br>
                                                         <p class="demo_name_style_blue add-btn">ADD HERE</p>
                                                      </a>
                                                   </div>
                                                   <?php } 
                                                      } else { ?>
                                                   <div class="node">
                                                      <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                      <br>
                                                      <p class="demo_name_style_blue add-btn">Empty</p>
                                                   </div>
                                                   <?php } ?>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                        <td class="node-container" colspan="2">
                           <table id="tree_div3" cellspacing="0" cellpadding="0" border="0" align="center">
                              <tbody>
                                 <tr class="node-cells">
                                    <td class="node-cell" colspan="4">
                                       <?php
                                          if (!empty($sponsor['username'])) {
                                              $cr = $this->db->select('child_id')->from("tree")->where('parent_id',$sponsor['username'])->where('position','right')->get()->row()->child_id; 
                                              if (!empty($cr)) {
                                                  $this->admin->get_genealogy($cr);
                                              } else { ?>
                                       <div class="node">
                                          <a href="<?=BASEURL?>admin/registerontree/right/<?=bin2hex($sponsor['username'])?>">
                                             <i style="font-size: 35px" class="fa fa-plus-circle tree_icon add-icon" aria-hidden="true"></i>
                                             <br>
                                             <p class="demo_name_style_blue add-btn">ADD HERE</p>
                                          </a>
                                       </div>
                                       <?php } 
                                          } else { ?>
                                       <div class="node">
                                          <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                          <br>
                                          <p class="demo_name_style_blue add-btn">
                                             Empty
                                          </p>
                                       </div>
                                       <?php } ?>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td colspan="4">
                                       <div class="line down">
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="line left">
                                    </td>
                                    <td class="line right top">
                                    </td>
                                    <td class="line left top">
                                    </td>
                                    <td class="line right">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="node-container" colspan="2">
                                       <table id="tree_div" cellspacing="0" cellpadding="0" border="0" align="center">
                                          <tbody>
                                             <tr class="node-cells">
                                                <td class="node-cell" colspan="4">
                                                   <?php
                                                      if (!empty($cr)) {
                                                          $crl = $this->db->select('child_id')->from("tree")->where('parent_id',$cr)->where('position','left')->get()->row()->child_id; 
                                                          if (!empty($crl)) {
                                                              $this->admin->get_genealogy($crl);
                                                          } else { ?>
                                                   <div class="node">
                                                      <a href="<?=BASEURL?>admin/registerontree/left/<?=bin2hex($cr)?>">
                                                         <i style="font-size: 35px" class="fa fa-plus-circle tree_icon add-icon" aria-hidden="true"></i>
                                                         <br>
                                                         <p class="demo_name_style_blue add-btn">ADD HERE</p>
                                                      </a>
                                                   </div>
                                                   <?php } 
                                                      } else { ?>
                                                   <div class="node">
                                                      <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                      <br>
                                                      <p class="demo_name_style_blue add-btn">
                                                         Empty
                                                      </p>
                                                   </div>
                                                   <?php } ?>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </td>
                                    <td class="node-container" colspan="2">
                                       <table id="tree_div" cellspacing="0" cellpadding="0" border="0" align="center">
                                          <tbody>
                                             <tr class="node-cells">
                                                <td class="node-cell" colspan="4">
                                                   <?php
                                                      if (!empty($cr)) {
                                                          $crr = $this->db->select('child_id')->from("tree")->where('parent_id',$cr)->where('position','right')->get()->row()->child_id; 
                                                          if (!empty($crr)) {
                                                              $this->admin->get_genealogy($crr);
                                                          } else { ?>
                                                   <div class="node">
                                                      <a href="<?=BASEURL?>admin/registerontree/right/<?=bin2hex($cr)?>">
                                                         <i style="font-size: 35px" class="fa fa-plus-circle tree_icon add-icon" aria-hidden="true"></i>
                                                         <br>
                                                         <p class="demo_name_style_blue add-btn">ADD HERE</p>
                                                      </a>
                                                   </div>
                                                   <?php } 
                                                      } else { ?>
                                                   <div class="node">
                                                      <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                      <br>
                                                      <p class="demo_name_style_blue add-btn">
                                                         Empty
                                                      </p>
                                                   </div>
                                                   <?php } ?>
                                                </td>
                                             </tr>
                                            
                                          </tbody>
                                       </table>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include('footer.php') ?>
<script src="<?=BASEURL?>assets/js/genealogy.js"></script>
<script src="<?=BASEURL?>assets/vendor/libs/jquery/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?=BASEURL?>assets/tree/tooltipster.bundle.min.js"></script>		
<script>
   $(document).ready(function() {
       $('[data-bs-toggle="popover"]').popover({
           trigger: 'hover',
           html: true,
           content: function() {
               var myData = $(this).data('mydata');
               return $('#'+myData).html();
           },
           title: '',
           template: '<div class="popover" role="tooltip"><div class="popover-body"></div></div>'
       });
   });
</script>
<script>
   $(document).ready(function(){
   // Prepare the preview for profile picture
   $("#wizard-picture").change(function(){
     readURL(this);
   });
   });
   function readURL(input) {
   if (input.files && input.files[0]) {
     var reader = new FileReader();
   
     reader.onload = function (e) {
         $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
     }
     reader.readAsDataURL(input.files[0]);
   }
   }
</script>