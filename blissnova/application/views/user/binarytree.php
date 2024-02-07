<?php include 'header.php';?>









<style>

.demo_name_style_red{background-color:#dd574c;padding:2px;border-radius:2px;margin-top:5px;margin-bottom:0;color:#fff}
.demo_name_style_blue{background-color:#40b6e4;padding:2px;border-radius:2px;margin-top:5px;margin-bottom:0;color:#fff}
.jOrgChart td{text-align:center;vertical-align:top;padding:0}
.jOrgChart .node{font-size:12px!important;color:#428bca;display:inline-block;width:auto;margin:-5px 25px;z-index:10;overflow:hidden;word-break:break-all}
.jOrgChart .down{background-color:#c8d5d8;margin:0 auto}
.jOrgChart .username{overflow:hidden;width:auto;color:#FFF;background:#807979;padding:2px 8px;border-radius:2px}
.jOrgChart .right{border-left:2px solid #fff}
.jOrgChart .top{border-top:2px solid #c8d5d8}

.jOrgChart td{text-align:center;vertical-align:top;padding:0}
.jOrgChart .right{border-left:2px solid #fff}
.jOrgChart .line{height:24px;width:2px}
.jOrgChart td{text-align:center;vertical-align:top;padding:0}
.jOrgChart .left{border-right:2px solid #c8d5d8}
.orgChart{overflow:auto;margin-top:30px;transform-origin:0 0 0!important}
.jOrgChart{margin-top:26px}

.tooltipster-sidetip .tooltipster-content{padding: 0px;}
.tree_img_tree { width: 100%;}

.Demo_head_bg {
    padding: 10px 5px 3px 5px!important;
}
#bin{
        width: 185px!important;
}
</style>










   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-header">
               <h4 class="card-title mb-0">Binary Tree</h4>
            </div>
            <div class="card-body">
               <div id="tree" class="orgChart" style="transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;">
                  <!--<h1>Two Matrix genealogyy</h1>-->
                  <!-- <form action="https://backofficee.com/mt4x/user/search_userid" method="POST" class="card card-sm">-->
                  <!--<div class="card-body row no-gutters align-items-center">-->
                  <!--<div class="col">-->
                  <!--<input class="form-control form-control-lg form-control-borderless" name="check_userid" id="check_userid" type="search" placeholder="Search User ID">-->
                  <!--</div>-->
                  <!--end of col-->
                  <!--<div class="col-auto">-->
                  <!--<button class="btn btn-lg btn-info" type="submit" style="height:50px;background-color:#696cff;">Search</button>-->
                  <!--</div>-->
                  <!--end of col-->
                  <!--</div>-->
                  <!--</form>-->
                  <div class="jOrgChart">
                     <table id="tree_div" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody>
                           <tr class="node-cells">
                              <td class="node-cell" colspan="4">
                                     <div class="node" style="cursor: default;">
        
        
            <img style="border:  3px solid red" class="tree_icon with_tooltip root_node" id="bin" src="<?=BASEURL?>assets/images/profile.png" ondblclick="getGenologyTree('elangorp',event);" data-tooltip-content="#">
            <a href="https://backofficee.com/mt4x/user/binary_tree/">
                <p class="demo_name_style"></p>
        </a>
    </div>

<div id="tooltip_div" style="display:none;">
    <div id="" class="tree_img_tree">
        <div class="Demo_head_bg">
            <p></p>
        </div>
        <div class="body_text_tree">
            <ul class="list-group no-radius">
                
                <li class="list-group-item">
                    <div class="pull-left">Join Date</div>
                    <div class="pull-right">: 13-Mar-2023</div>
                </li>
                <li class="list-group-item">
                    <div class="pull-left">Email :</div><br>
                    <div class="pull-right"></div>
                </li>
                <li class="list-group-item">
                    <div class="pull-left">Total Investment</div>
                    <div class="pull-right">: </div>
                </li>
                <li class="list-group-item">
                    <div class="pull-left">Ref / Spo ID</div>
                    <div class="pull-right">: </div>
                </li>
                 <li class="list-group-item">
                    <div class="pull-left">Ref / Spo ID</div>
                    <div class="pull-right">: </div>
                </li>
                
                
                                
                <!--<li class="list-group-item">-->
                <!--    <div class="pull-left">Left Users</div>-->
                <!--    <div class="pull-right">: </div>-->
                <!--</li>-->
                <!-- <li class="list-group-item">-->
                <!--    <div class="pull-left">Right Users</div>-->
                <!--    <div class="pull-right">: </div>-->
                <!--</li>-->
                  <li class="list-group-item">
                    <div class="pull-left">Left Investment</div>
                    <div class="pull-right">: 0</div>
                </li>
                <li class="list-group-item">
                    <div class="pull-left">Right Investment</div>
                    <div class="pull-right">: 0</div>
                </li>
                
                                <!--<li class="list-group-item">-->
                <!--    <div class="pull-left">Left Balance</div>-->
                <!--    <div class="pull-right">: 0</div>-->
                <!--</li>-->
                <!--<li class="list-group-item">-->
                <!--    <div class="pull-left">Right Balance</div>-->
                <!--    <div class="pull-right">: 0</div>-->
                <!--</li>-->
               
            </ul>
        </div>
    </div>
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
                                 <table id="tree_div" cellspacing="0" cellpadding="0" border="0" align="center">
                                    <tbody>
                                       <tr class="node-cells">
                                          <td class="node-cell" colspan="4">
                                                                                          <div class="node">
                                                <i style="font-size: 35px" class="fa fa-ban " aria-hidden="true"></i>
                                                <br>
                                                <p class="demo_name_style_blue add-btn">
                                                   Empty
                                                </p>
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
                                             <table id="tree_div" cellspacing="0" cellpadding="0" border="0" align="center">
                                                <tbody>
                                                   <tr class="node-cells">
                                                      <td class="node-cell" colspan="4">
                                                                                                                  <div class="node">
                                                            <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                            <br>
                                                            <p class="demo_name_style_blue add-btn">
                                                               Empty
                                                            </p>
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
                                                                                                                  <div class="node">
                                                            <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                            <br>
                                                            <p class="demo_name_style_blue add-btn">
                                                               Empty
                                                            </p>
                                                         </div>
                                                                                                               </td>
                                                      <td class="node-container" colspan="2">
                                                                                                                  <div class="node">
                                                            <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                            <br>
                                                            <p class="demo_name_style_blue add-btn">
                                                               Empty
                                                            </p>
                                                         </div>
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
                                                                                                                  <div class="node">
                                                            <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                            <br>
                                                            <p class="demo_name_style_blue add-btn">Empty</p>
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
                                                                                                                  <div class="node">
                                                            <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                            <br>
                                                            <p class="demo_name_style_blue add-btn">
                                                               Empty
                                                            </p>
                                                         </div>
                                                                                                               </td>
                                                      <td class="node-container" colspan="2">
                                                                                                                  <div class="node">
                                                            <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                            <br>
                                                            <p class="demo_name_style_blue add-btn">
                                                               Empty
                                                            </p>
                                                         </div>
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
                                 <table id="tree_div" cellspacing="0" cellpadding="0" border="0" align="center">
                                    <tbody>
                                       <tr class="node-cells">
                                          <td class="node-cell" colspan="4">
                                                                                          <div class="node">
                                                <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                <br>
                                                <p class="demo_name_style_blue add-btn">
                                                   Empty
                                                </p>
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
                                             <table id="tree_div" cellspacing="0" cellpadding="0" border="0" align="center">
                                                <tbody>
                                                   <tr class="node-cells">
                                                      <td class="node-cell" colspan="4">
                                                                                                                  <div class="node">
                                                            <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                            <br>
                                                            <p class="demo_name_style_blue add-btn">
                                                               Empty
                                                            </p>
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
                                                                                                                  <div class="node">
                                                            <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                            <br>
                                                            <p class="demo_name_style_blue add-btn">
                                                               Empty
                                                            </p>
                                                         </div>
                                                                                                               </td>
                                                      <td class="node-container" colspan="2">
                                                                                                                  <div class="node">
                                                            <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                            <br>
                                                            <p class="demo_name_style_blue add-btn">
                                                               Empty
                                                            </p>
                                                         </div>
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
                                                                                                                  <div class="node">
                                                            <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                            <br>
                                                            <p class="demo_name_style_blue add-btn">
                                                               Empty
                                                            </p>
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
                                                                                                                  <div class="node">
                                                            <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                            <br>
                                                            <p class="demo_name_style_blue add-btn">
                                                               Empty
                                                            </p>
                                                         </div>
                                                                                                               </td>
                                                      <td class="node-container" colspan="2">
                                                                                                                  <div class="node">
                                                            <i style="font-size: 35px" class="fa fa-ban tree_icon add-icon" aria-hidden="true"></i>
                                                            <br>
                                                            <p class="demo_name_style_blue add-btn">
                                                               Empty
                                                            </p>
                                                         </div>
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
   </div>
























<?php include 'footer.php';?>