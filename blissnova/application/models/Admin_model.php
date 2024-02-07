<?php
error_reporting(0);
defined("BASEPATH") or exit("No direct script access allowed");
class Admin_model extends CI_Model
{
    
    
    
     public function calenders()
        {    
            $this->db->trans_begin();
           
            $data['title'] = $this->input->post('title');
            $data['label'] = $this->input->post('label');
            $data['start_date'] = $this->input->post('sdate');
            $data['end_date'] = $this->input->post('edate');
            $data['all_day'] = $this->input->post('all');
            $data['url'] = $this->input->post('url');
            $data['guests'] = $this->input->post('guests');
            $data['location'] = $this->input->post('location');
            $data['description'] = $this->input->post('description');
            
            $this->db->insert('calender',$data);
           //log_message('error',$data.'//');
           
             if($this->db->trans_status() == FALSE){
                
                $this->db->trans_rollback();
                return false;
            } else {
            
                $this->db->trans_commit();
                return true;
            
            
            } 
        }
    public function get_row_data($tablename, $where, $value = false)
    {
        $rowdata = $this->db
            ->where($where, $value)
            ->get($tablename)
            ->row_array();
        return $rowdata;
    }
    
    public function get_genealogy($treeid)
    {
        $user_detail = $this->get_row_data("user_role", "username", $treeid);
    
        $usertype = $this->db->select_max("credit")->where("username", $treeid)->get("pin")->row()->credit;
    
        if ($usertype == "10000") {
            $usercolor = "primebadge.png";
            $ccode = "#CFB730";
        } elseif ($usertype == "1100") {
            $usercolor = "plusbadge.png";
            $ccode = "#27a9ff";
        } elseif ($usertype != "10000" && $usertype != "1100") {
            $ccode = "#808080";
        }
    ?>
    
    <div class="node" style="cursor: default;">
        <a href="<?= BASEURL ?>admin/binary_tree/<?= $user_detail["username"] ?>">
            <img style="border: 3px solid <?= $ccode ?>" class="tree_icon with_tooltip root_node" src="<?= BASEURL ?>assets/images/users/profile.jpg" ondblclick="getGenologyTree('elangorp',event);" data-bs-placement="right" data-mydata="<?= $user_detail["username"] ?>" data-bs-content="This is a very beautiful popover, show some love." data-bs-original-title="Popover title" aria-describedby="popover661421">
            <p class="demo_name_style"><?= $user_detail["username"] ?></p>
            <p class="demo_name_style"><?= $user_detail["first_name"] ?></p>
        </a>

        
        
        <?php
                $left_child = $this->db->select('child_id')->where('parent_id', $user_detail["username"])->where('position', 'left')->get('tree')->row()->child_id;
                $left_team_count = ($left_child != "") ? $this->db->like('team', $left_child)->count_all_results('tree') + 1 : 0;
         
                $left_user = $this->db->where('position', 'left')->where('parent_id', $user_detail['username'])->get('tree')->row_array();
                         if (!empty($left_user)) {
                            $left = $this->db->like('team', $left_user['child_id'])->get('tree')->result_array();
                            array_unshift($left, $left_user); 
                            $left_team = $left;
                         }
                        // print_r($left_team); 
                                 
                $left_prime_cal = array();
                $left_plus_cal = array();
                
                foreach($left_team as $key =>$l_team){
               
        
                     $left_prime_sum= $this->db->select_sum('credit')->where('username',$l_team['child_id'])->where('type','Prime')->get('pin')->row()->credit+0;
                     
                     $left_plus_sum=$this->db->select_sum('credit')->where('username',$l_team['child_id'])->where('type','Plus')->get('pin')->row()->credit+0;

                        array_push($left_prime_cal,$left_prime_sum);
                        array_push($left_plus_cal,$left_plus_sum);
                }
                
                $left_prime_val=(array_sum($left_prime_cal)/10000)*1000;
                $left_plus_val=(array_sum($left_plus_cal)/1100)*300;
                
                // right team
                
               $right_child = $this->db->select('child_id')->where('parent_id', $user_detail["username"])->where('position', 'right')->get('tree')->row()->child_id;
                $right_team_count = ($right_child != "") ? $this->db->like('team', $right_child)->count_all_results('tree') + 1 : 0;
                
                 $right_user = $this->db->where('position', 'right')->where('parent_id', $user_detail['username'])->get('tree')->row_array();
                                 if (!empty($right_user)) {
                                    $right = $this->db->like('team', $right_user['child_id'])->get('tree')->result_array();
                                    array_unshift($right, $right_user); 
                                    $right_team = $right;
                                 }
                          
                $right_prime_cal = array();
                $right_plus_cal = array();
                 
        
                foreach($right_team as $key =>$r_team){
        
                     
                      $right_prime_sum=  $this->db->select_sum('credit')->where('username',$r_team['child_id'])->where('type','Prime')->get('pin')->row()->credit+0;
                      
                      $right_plus_sum= $this->db->select_sum('credit')->where('username',$r_team['child_id'])->where('type','Plus')->get('pin')->row()->credit+0;
                      
                        
                        array_push($right_prime_cal,$right_prime_sum);
                        array_push($right_plus_cal,$right_plus_sum);
                }
                
                 $right_prime_val=(array_sum($right_prime_cal)/10000)*1000;
                 $right_plus_val=(array_sum($right_plus_cal)/1100)*300;
     
        ?>
           
                           <span class="fw-semibold"> Left : <?=$left_team_count?> &nbsp  Right : <?=$right_team_count?> </span>
                           <br>
                           <span class="fw-semibold"> LPR :  <?=$left_prime_val?> &nbsp   RPR : <?=$right_prime_val?></span>
                           <br>
                           <span class="fw-semibold"> LPL :  <?=$left_plus_val?> &nbsp   RPL :  <?=$right_plus_val?></span>
            </div>
            <?php
            }



    /*###################################################################### INCOME SECTION START ####################################################################*/
    public function direct_income($username, $amount)
    {
        $payfor = $this->db
            ->select("ref_id")
            ->where("username", $username)
            ->get("user_role")
            ->row()->ref_id;
        $admin = $this->db
            ->select("username")
            ->where("id", "1")
            ->get("user_role")
            ->row()->username;
        $activation_check =
            $this->db
                ->where("username", $payfor)
                ->where("remark", "Activation")
                ->from("pin")
                ->count_all_results() + 0;
        $wing_check = $this->db
            ->select("user_type")
            ->where("username", $username)
            ->get("user_role")
            ->row()->user_type;
            
            $userole=$this->db->where('username',$payfor)->get('user_role')->row_array();
            if($userole['user_type'] == "u"){
                $main_user = $payfor;
            }
            if($userole['user_type'] == "sub"){
                $main_user = $userole['ref_id'];
            }
            if($wing_check== "sub"){
                $credittt = $amount == 1100 ? 100 : ($amount == 10000 ? 1000 : null);
                $paysy = [
                "credit" => $credittt,
                "username" => $admin,
                "remark" =>"Admin_charge"
            ];
            $this->db->insert("account", $paysy);
            
            $p = [
                "credit" => $credittt,
                "username" => $admin,
                "remark" =>"Admin_charge"
            ];
            $this->db->insert("account_sub", $p);
            }
            
        if ($payfor != $admin && $activation_check > 0 && $wing_check != "sub") {
            
            $creditt = $amount == 1100 ? 100 : ($amount == 10000 ? 1000 : null);
            $payy = [
                "credit" => $creditt * 0.9,
                "admin_charge" => $creditt * 0.08,
                "tds" => $creditt * 0.02,
                "entry_date" => date("Y-m-d H:i:s"),
                "remark" => "Direct Income",
                "type" => "Affiliate Incentive",
                "username" => $payfor,
                "description" => $username,
                "direct_pack" => $amount,
            ];
            $this->db->insert("account", $payy);
            
            $payya = [
                "credit" => $creditt * 0.9,
                "admin_charge" => $creditt * 0.08,
                "tds" => $creditt * 0.02,
                "entry_date" => date("Y-m-d H:i:s"),
                "remark" => "Direct Income",
                "type" => "Affiliate Incentive",
                "username" => $main_user,
                "description" => $username,
                "direct_pack" => $amount,
            ];
            $this->db->insert("account_sub", $payya);
            
            $total_income_day =
                $this->db
                    ->select_sum("credit")
                    ->where("username", $main_user)
                    ->where("DATE(entry_date)", date("Y-m-d"))
                    ->get("account_sub")
                    ->row()->credit + 0;
            if ($total_income_day >= 700) {
                $hold_check =
                    $this->db
                        ->where("username", $main_user)
                        ->where("DATE(entry_date)", date("Y-m-d"))
                        ->where("hold_status", "yes")
                        ->count_all_results("account_sub") + 0;
                if ($hold_check == 0) {
                    $hold_wallet_debit = $total_income_day * 0.1;
                } elseif ($hold_check > 0) {
                    $hold_wallet_debit = $creditt * 0.9 * 0.1;
                }
                
                $data21 = [
                    "username" => $main_user,
                    "entry_date" => date("Y-m-d H:i:s"),
                    "debit" => $hold_wallet_debit,
                    "remark" => "Direct Income",
                    "type" => "Holding Wallet",
                    "hold_status" => "yes",
                ];
                $this->db->insert("account_sub", $data21);
                $data22 = [
                    "username" => $main_user,
                    "entry_date" => date("Y-m-d H:i:s"),
                    "credit" => $hold_wallet_debit,
                ];
                $this->db->insert("holding_wallet", $data22);
            }
            $data = [
                "username" => $main_user,
                "status" => "New",
                "image" => "AffiliateIncentive.png",
                "remark" => "Affiliate Incentive Credited",
                "entry_date" => date("Y-m-d H:i:s"),
            ];
            $this->db->insert("notifications", $data);
        }
    }

    public function levelusers_number($parent,$nthlevel)
    {
        
            //$nthlevel = $i;
            $teammm = $this->db
                ->select("team")
                ->where("child_id", $parent)
                ->get("uni_tree")
                ->row()->team;
            $myparent = substr_count($teammm, "~") + 0;
            $counttt = $this->db
                ->select(
                    "LENGTH(`team`) - LENGTH(REPLACE(`team`, '~', '')) as `number`, team,pack"
                )
                ->like("team", $parent)
                ->having("number >=", $myparent)
                ->having("number", $nthlevel + $myparent)
                ->get("uni_tree")
                ->result_array();
            $ress = count($counttt);
          
        
        return $ress;
    }
    
    public function level_income($parent_team ="",$username="",$pack="")
    {
         //log_message('error',$user_team);
        if(!empty($parent_team)){
            $parents = explode("~",$parent_team);
            for ($ii=0; $ii < min(10,count($parents)); $ii++) {
                $add = $ii+1;
                $leveluser='level'.$add;
                $level_reward = $this->db->select('value')->where('level',$leveluser)->get('level_master')->row()->value+0;
               //log_message('error','level'.$add."LEVEL OF USER"); 
                $amount=($pack*$level_reward)/100;
                $admin=$this->db->select('username')->where('id','1')->get('user_role')->row()->username;    
                if($parents[$ii] != $admin)
                {
                   $inc = [
                        "username" => $parents[$ii],
                        "credit" => $amount * 0.9,
                        "admin_charge" => $amount * 0.08,
                        "tds" => $amount * 0.02,
                        "entry_date" => date("Y-m-d H:i:s"),
                        "remark" => "Level Income",
                        "type" => "Level Incentive",
                        "description" => $username,
                        "direct_pack" => $pack,
                        "level" => $add,
                    ];
                    $this->db->insert('account',$inc);   
                    
                    $payfor=$parents[$ii];
                    $userole=$this->db->where('username',$payfor)->get('user_role')->row_array();
                        if($userole['user_type'] == "u"){
                            $main_user = $payfor;
                        }
                        if($userole['user_type'] == "sub"){
                            $main_user = $userole['ref_id'];
                        }
                    
                    $payya = [
                        "username" => $main_user,
                        "credit" => $amount * 0.9,
                        "admin_charge" => $amount * 0.08,
                        "tds" => $amount * 0.02,
                        "entry_date" => date("Y-m-d H:i:s"),
                        "remark" => "Level Income",
                        "type" => "Level Incentive",
                        "description" => $username,
                        "direct_pack" => $pack,
                        "level" => $add,
                    ];
                    $this->db->insert("account_sub", $payya);
                    
                    $total_income_day =
                        $this->db
                            ->select_sum("credit")
                            ->where("username", $main_user)
                            ->where("DATE(entry_date)", date("Y-m-d"))
                            ->get("account_sub")
                            ->row()->credit + 0;
                    if ($total_income_day >= 700) {
                        $hold_check =
                            $this->db
                                ->where("username", $main_user)
                                ->where("DATE(entry_date)", date("Y-m-d"))
                                ->where("hold_status", "yes")
                                ->count_all_results("account_sub") + 0;
                        if ($hold_check == 0) {
                            $hold_wallet_debit = $total_income_day * 0.1;
                        } elseif ($hold_check > 0) {
                            $hold_wallet_debit = $amount * 0.9 * 0.1;
                        }
                        
                        $data21 = [
                            "username" => $main_user,
                            "entry_date" => date("Y-m-d H:i:s"),
                            "debit" => $hold_wallet_debit,
                            "remark" => "Level Income",
                            "type" => "Holding Wallet",
                            "hold_status" => "yes",
                        ];
                        $this->db->insert("account_sub", $data21);
                        $data22 = [
                            "username" => $main_user,
                            "entry_date" => date("Y-m-d H:i:s"),
                            "credit" => $hold_wallet_debit,
                        ];
                        $this->db->insert("holding_wallet", $data22);
                    }
                        $data = [
                            "username" => $main_user,
                            "status" => "New",
                            "image" => "AffiliateIncentive.png",
                            "remark" => "Level Incentive Credited",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("notifications", $data);
                    
                    
                    
                }
            }
        }
    }
    
    
    
    
    
    
    public function binary_income($username)
    {
        $paired_users = $this->get_all_paired_users($username);
        foreach ($paired_users as $x => $paired_user) {
            
           $userole=$this->db->where('username',$paired_user["username"])->get('user_role')->row_array();
            if($userole['user_type'] == "u"){
                $main_user = $paired_user["username"];
            }
            if($userole['user_type'] == "sub"){
                $main_user = $userole['ref_id'];
            }
            
            $active_check =
                $this->db
                    ->where("username", $paired_user["username"])
                    ->where("remark", "Activation")
                    ->from("pin")
                    ->count_all_results() + 0;
            if ($active_check == 0) {
                $data1 = [
                    "username" => $paired_user["username"],
                    "credit" => "0",
                    "left_plus_paid_pair" =>$paired_user["left_plus_remaining"],
                    "right_plus_paid_pair" =>$paired_user["right_plus_remaining"],
                    "left_prime_paid_pair" => $paired_user["left_prime_remaining"],
                    "right_prime_paid_pair" =>$paired_user["right_prime_remaining"],
                    "remark" => "Inactive Washout",
                    "entry_date" => date("Y-m-d H:i:s"),
                ];
                $this->db->insert("account", $data1);
            } elseif ($active_check > 0) {
                $pack_check =
                    $this->db
                        ->select_max("credit")
                        ->where("username", $paired_user["username"])
                        ->where("remark", "Activation")
                        ->get("pin")
                        ->row()->credit + 0;
                $total_plus_pair_day =
                    $this->db
                        ->select_sum("credit")
                        ->where("remark", "Pair Income")
                        ->where("description", "Plus")
                        ->where("username", $paired_user["username"])
                        ->where("date(entry_date)", date("Y-m-d"))
                        ->get("account")
                        ->row()->credit + 0;
                $total_prime_pair_day =
                    $this->db
                        ->select_sum("credit")
                        ->where("remark", "Pair Income")
                        ->where("description", "Prime")
                        ->where("username", $paired_user["username"])
                        ->where("date(entry_date)", date("Y-m-d"))
                        ->get("account")
                        ->row()->credit + 0;
                $pluspair = min(
                    $paired_user["left_plus_remaining"],
                    $paired_user["right_plus_remaining"]
                );
                $primepair = min(
                    $paired_user["left_prime_remaining"],
                    $paired_user["right_prime_remaining"]
                );
                /*###########################  FOR PLUS USER ############################*/
                if ($pack_check == 1100) {
                    if ($pluspair > 0 && $total_plus_pair_day < 5400) {
                        $no_of_pairs = $pluspair / 1100;
                        $total_payable = 300 * $no_of_pairs;
                        $payout = min(5400 - $total_plus_pair_day,$total_payable);
                        
                        /************************ RANK UPDATE ***********************/
                        $rankk = $payout + $total_plus_pair_day;
                        if ($rankk == 5400) {
                            $rank1["username"] = $paired_user["username"];
                            $rank1["counts"] = "1";
                            $rank1["entry_date"] = date("Y-m-d H:i:s");
                            $this->db->insert("plus_rank_day", $rank1);
                            
                            $rank["username"] = $paired_user["username"];
                            $rank["counts"] = "1";
                            $rank["entry_date"] = date("Y-m-d H:i:s");
                            $entry_check = $this->db
                                ->where("username", $paired_user["username"])
                                ->get("plus_rank")
                                ->row_array();
                            if ($entry_check) {
                                $this->db->set("counts", "counts+1", false);
                                $this->db->set(
                                    "entry_date",
                                    date("Y-m-d H:i:s")
                                );
                                $this->db->where(
                                    "username",
                                    $paired_user["username"]
                                );
                                $this->db->update("plus_rank");
                            } else {
                                $this->db->insert("plus_rank", $rank);
                            }
                        }
                        /************************ RANK UPDATE END ********************/
                        if ($rankk == 5400) {
                            $left_plus_paidd =
                                $paired_user["left_plus_remaining"];
                            $right_plus_paidd =
                                $paired_user["right_plus_remaining"];
                        } elseif ($rankk < 5400) {
                            $left_plus_paidd = $pluspair;
                            $right_plus_paidd = $pluspair;
                        }
                        
                        if($rankk == 5400){
                            
                            $pay_amount=300;
                            
                        }else{
                            $pay_amount=$payout;
                        }
                        
                        $data2 = [
                            "username" => $paired_user["username"],
                            "credit" => $pay_amount * 0.9,
                            "tds" => $pay_amount * 0.02,
                            "admin_charge" => $pay_amount * 0.08,
                            "left_plus_paid_pair" => $left_plus_paidd,
                            "right_plus_paid_pair" => $right_plus_paidd,
                            "left_prime_paid_pair" =>
                                $paired_user["left_prime_remaining"],
                            "right_prime_paid_pair" =>
                                $paired_user["right_prime_remaining"],
                            "remark" => "Pair Income",
                            "description" => "Plus",
                            "type" => "Team Incentive",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("account", $data2);
                        
                        $data2a = [
                            "username" => $main_user,
                            "credit" => $pay_amount * 0.9,
                            "admin_charge" => $pay_amount * 0.08,
                            "tds" => $pay_amount * 0.02,
                            "left_plus_paid_pair" => $left_plus_paidd,
                            "right_plus_paid_pair" => $right_plus_paidd,
                            "left_prime_paid_pair" =>
                                $paired_user["left_prime_remaining"],
                            "right_prime_paid_pair" =>
                                $paired_user["right_prime_remaining"],
                            "remark" => "Pair Income",
                            "description" => "Plus",
                            "type" => "Team Incentive",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("account_sub", $data2a);
                        /************************ HOLDING WALLET TRANSFER ********************/
                        $total_income_day =
                            $this->db
                                ->select_sum("credit")
                                ->where("username", $main_user)
                                ->where("date(entry_date)", date("Y-m-d"))
                                ->get("account_sub")
                                ->row()->credit + 0;
                        if ($total_income_day >= 700) {
                            $hold_check1 =$this->db->where("username",$main_user)->where("DATE(entry_date)", date("Y-m-d"))->where("hold_status", "yes")
                                    ->count_all_results("account_sub") + 0;
                                    
                            if ($hold_check1 == 0) {
                                $hold_wallet_debit1 = $total_income_day * 0.1;
                            } elseif ($hold_check1 > 0) {
                                $hold_wallet_debit1 = $pay_amount * 0.9 * 0.1;
                            }
                            $data21 = [
                                "username" => $main_user,
                                "entry_date" => date("Y-m-d H:i:s"),
                                "debit" => $hold_wallet_debit1,
                                "remark" => "Pair Income",
                                "type" => "Holding Wallet",
                                "hold_status" => "yes",
                            ];
                            $this->db->insert("account_sub", $data21);
                            $data22 = [
                                "username" => $main_user,
                                "entry_date" => date("Y-m-d H:i:s"),
                                "credit" => $hold_wallet_debit1,
                            ];
                            $this->db->insert("holding_wallet", $data22);
                        }
                        /************************ HOLDING WALLET END ********************/
                        $notification1 = [
                            "username" => $paired_user["username"],
                            "status" => "New",
                            "image" => "TeamBonus.png",
                            "remark" => "Team Bonus Credited",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("notifications", $notification1);
                    }
                    /*************( WASHOUT AFTER CEILING LIMIT *********************/
                    if ($total_plus_pair_day == 5400) {
                        $data3 = [
                            "username" => $paired_user["username"],
                            "credit" => "0",
                            "left_plus_paid_pair" =>
                                $paired_user["left_plus_remaining"],
                            "right_plus_paid_pair" =>
                                $paired_user["right_plus_remaining"],
                            "left_prime_paid_pair" =>
                                $paired_user["left_prime_remaining"],
                            "right_prime_paid_pair" =>
                                $paired_user["right_prime_remaining"],
                            "remark" => "Ceiling Washout",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("account", $data3);
                    }
                    /************** WASHOUT AFTER CEILING LIMIT *********************/
                    /************* PRIME WASHOUT *********************/
                    if (
                        $paired_user["left_prime_remaining"] > 0 ||
                        $paired_user["right_prime_remaining"] > 0
                    ) {
                        $data13 = [
                            "username" => $paired_user["username"],
                            "credit" => "0",
                            "left_prime_paid_pair" =>
                                $paired_user["left_prime_remaining"],
                            "right_prime_paid_pair" =>
                                $paired_user["right_prime_remaining"],
                            "remark" => "Prime Washout",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("account", $data13);
                    }
                    /************** PRIME WASHOUT *********************/
                    
                } /*###########################  FOR PRIME USER ############################*/ 
                else if ($pack_check == 10000) {
                    
                    /******************PLUS PAY START*******************/
                    if ($pluspair > 0 && $total_plus_pair_day < 5400) {
                        $no_of_pairs = $pluspair / 1100;
                        $total_payable = 300 * $no_of_pairs;
                        $payout = min(
                            5400 - $total_plus_pair_day,
                            $total_payable
                        );
                        /************************ RANK UPDATE ***********************/
                        $rankk = $payout + $total_plus_pair_day;
                        if ($rankk == 5400) {
                            $rank11["username"] = $paired_user["username"];
                            $rank11["counts"] = "1";
                            $rank11["entry_date"] = date("Y-m-d H:i:s");
                            $this->db->insert("plus_rank_day", $rank11);
                            
                            
                            $rank["username"] = $paired_user["username"];
                            $rank["counts"] = "1";
                            $rank["entry_date"] = date("Y-m-d H:i:s");
                            $entry_check = $this->db
                                ->where("username", $paired_user["username"])
                                ->get("plus_rank")
                                ->row_array();
                            if ($entry_check) {
                                $this->db->set("counts", "counts+1", false);
                                $this->db->set(
                                    "entry_date",
                                    date("Y-m-d H:i:s")
                                );
                                $this->db->where(
                                    "username",
                                    $paired_user["username"]
                                );
                                $this->db->update("plus_rank");
                            } else {
                                $this->db->insert("plus_rank", $rank);
                            }
                        }
                        /************************ RANK UPDATE END ********************/
                        if ($rankk == 5400) {
                            $left_plus_paidd =
                                $paired_user["left_plus_remaining"];
                            $right_plus_paidd =
                                $paired_user["right_plus_remaining"];
                        } elseif ($rankk < 5400) {
                            $left_plus_paidd = $pluspair;
                            $right_plus_paidd = $pluspair;
                        }
                        
                        if($rankk == 5400){
                            
                            $pay_amount=300;
                            
                        }else{
                            $pay_amount=$payout;
                        }
                        
                        $data4 = [
                            "username" => $paired_user["username"],
                            "credit" => $pay_amount * 0.9,
                            "admin_charge" => $pay_amount * 0.08,
                            "tds" => $pay_amount * 0.02,
                            "left_plus_paid_pair" => $left_plus_paidd,
                            "right_plus_paid_pair" => $right_plus_paidd,
                            "remark" => "Pair Income",
                            "description" => "Plus",
                            "type" => "Team Incentive",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("account", $data4);
                        
                        $data4a = [
                            "username" => $main_user,
                            "credit" => $pay_amount * 0.9,
                            "admin_charge" => $pay_amount * 0.08,
                            "tds" => $pay_amount * 0.02,
                            "left_plus_paid_pair" => $left_plus_paidd,
                            "right_plus_paid_pair" => $right_plus_paidd,
                            "remark" => "Pair Income",
                            "description" => "Plus",
                            "type" => "Team Incentive",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("account_sub", $data4a);
                        /************************ HOLDING WALLET TRANSFER ********************/
                        $total_income_day =
                            $this->db
                                ->select_sum("credit")
                                ->where("username", $main_user)
                                ->where("date(entry_date)", date("Y-m-d"))
                                ->get("account_sub")
                                ->row()->credit + 0;
                        if ($total_income_day >= 700) {
                            $hold_check2 =
                                $this->db
                                    ->where(
                                        "username",
                                        $main_user
                                    )
                                    ->where("DATE(entry_date)", date("Y-m-d"))
                                    ->where("hold_status", "yes")
                                    ->count_all_results("account_sub") + 0;
                            if ($hold_check2 == 0) {
                                $hold_wallet_debit2 = $total_income_day * 0.1;
                            } elseif ($hold_check2 > 0) {
                                $hold_wallet_debit2 = $pay_amount * 0.9 * 0.1;
                            }
                            $data21 = [
                                "username" => $main_user,
                                "entry_date" => date("Y-m-d H:i:s"),
                                "debit" => $hold_wallet_debit2,
                                "remark" => "Pair Income",
                                "type" => "Holding Wallet",
                                "hold_status" => "yes",
                            ];
                            $this->db->insert("account_sub", $data21);
                            $data22 = [
                                "username" => $main_user,
                                "entry_date" => date("Y-m-d H:i:s"),
                                "credit" => $hold_wallet_debit2,
                            ];
                            $this->db->insert("holding_wallet", $data22);
                        }
                        /************************ HOLDING WALLET END ********************/
                        $notification2 = [
                            "username" => $paired_user["username"],
                            "status" => "New",
                            "image" => "TeamBonus.png",
                            "remark" => "Team Bonus Credited",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("notifications", $notification2);
                    }
                    /******************PLUS PAY END*******************/
                    /******************PLUS WASHOUT AFTER CEILING*******************/
                    if (
                        $total_plus_pair_day == 5400 &&
                        ($paired_user["left_plus_remaining"] > 0 ||
                            $paired_user["right_plus_remaining"] > 0)
                    ) {
                        $data5 = [
                            "username" => $paired_user["username"],
                            "credit" => "0",
                            "left_plus_paid_pair" =>
                                $paired_user["left_plus_remaining"],
                            "right_plus_paid_pair" =>
                                $paired_user["right_plus_remaining"],
                            "remark" => "Ceiling Washout",
                            "description" => "Plus_wash",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("account", $data5);
                    }
                    /******************PLUS WASHOUT AFTER CEILING END*******************/
                    /******************PRIME PAY START*******************/
                    if ($primepair > 0 && $total_prime_pair_day < 9000) {
                        $no_of_prime_pairs = $primepair / 10000;
                        $total_payable_prime = 1000 * $no_of_prime_pairs;
                        $prime_payout = min(9000 - $total_prime_pair_day,$total_payable_prime);
                        
                        /************************ RANK UPDATE ***********************/
                        $primerankk = $prime_payout + $total_prime_pair_day;
                        if ($primerankk == 9000) {
                            $rankk121["username"] = $paired_user["username"];
                            $rankk121["counts"] = "1";
                            $rankk121["entry_date"] = date("Y-m-d H:i:s");
                            $this->db->insert("prime_rank_day", $rankk121);
                            
                            $rank["username"] = $paired_user["username"];
                            $rank["counts"] = "1";
                            $rank["entry_date"] = date("Y-m-d H:i:s");
                            $entry_check = $this->db->where("username", $paired_user["username"])->get("prime_rank") ->row_array();
                            
                            if ($entry_check) {
                                $this->db->set("counts", "counts+1", false);
                                $this->db->set("entry_date",date("Y-m-d H:i:s"));
                                
                                $this->db->where("username",$paired_user["username"]);
                                $this->db->update("prime_rank");
                            } else {
                                $this->db->insert("prime_rank", $rank);
                            }
                        }
                        /************************ RANK UPDATE END ********************/
                        if ($primerankk == 9000) {
                            $left_prime_paidd =
                                $paired_user["left_prime_remaining"];
                            $right_prime_paidd =
                                $paired_user["right_prime_remaining"];
                        } elseif ($primerankk < 9000) {
                            $left_prime_paidd = $primepair;
                            $right_prime_paidd = $primepair;
                        }
                        
                        if($primerankk == 9000){
                            
                            $pay_amount_prime=1000;
                            
                        }else{
                            $pay_amount_prime=$prime_payout;
                        }
                        
                        $data6 = [
                            "username" => $paired_user["username"],
                            "credit" => $pay_amount_prime * 0.9,
                            "admin_charge" => $pay_amount_prime * 0.08,
                            "tds" => $pay_amount_prime * 0.02,
                            "left_prime_paid_pair" => $left_prime_paidd,
                            "right_prime_paid_pair" => $right_prime_paidd,
                            "remark" => "Pair Income",
                            "description" => "Prime",
                            "entry_date" => date("Y-m-d H:i:s"),
                            "type" => "Team Incentive",
                        ];
                        $this->db->insert("account", $data6);
                        
                        $data6 = [
                            "username" => $main_user,
                            "credit" => $pay_amount_prime * 0.9,
                            "admin_charge" => $pay_amount_prime * 0.08,
                            "tds" => $pay_amount_prime * 0.02,
                            "left_prime_paid_pair" => $left_prime_paidd,
                            "right_prime_paid_pair" => $right_prime_paidd,
                            "remark" => "Pair Income",
                            "description" => "Prime",
                            "entry_date" => date("Y-m-d H:i:s"),
                            "type" => "Team Incentive",
                        ];
                        $this->db->insert("account_sub", $data6);
                        /************************ HOLDING WALLET TRANSFER ********************/
                        $total_income_dayy =
                            $this->db
                                ->select_sum("credit")
                                ->where("username", $main_user)
                                ->where("date(entry_date)", date("Y-m-d"))
                                ->get("account_sub")
                                ->row()->credit + 0;
                        if ($total_income_dayy >= 700) {
                            $hold_check3 =
                                $this->db
                                    ->where(
                                        "username",
                                        $main_user
                                    )
                                    ->where("DATE(entry_date)", date("Y-m-d"))
                                    ->where("hold_status", "yes")
                                    ->count_all_results("account_sub") + 0;
                            if ($hold_check3 == 0) {
                                $hold_wallet_debit3 = $total_income_dayy * 0.1;
                            } elseif ($hold_check3 > 0) {
                                $hold_wallet_debit3 = $pay_amount_prime * 0.9 * 0.1;
                            }
                            $data2100 = [
                                "username" => $main_user,
                                "entry_date" => date("Y-m-d H:i:s"),
                                "debit" => $hold_wallet_debit3,
                                "remark" => "Pair Income",
                                "type" => "Holding Wallet",
                                "hold_status" => "yes",
                            ];
                            $this->db->insert("account_sub", $data2100);
                            $data200 = [
                                "username" => $main_user,
                                "entry_date" => date("Y-m-d H:i:s"),
                                "credit" => $hold_wallet_debit3,
                            ];
                            $this->db->insert("holding_wallet", $data200);
                        }
                        /************************ HOLDING WALLET END ********************/
                        $notification3 = [
                            "username" => $paired_user["username"],
                            "status" => "New",
                            "image" => "TeamBonus.png",
                            "remark" => "Team Bonus Credited",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("notifications", $notification3);
                    }
                    /******************PRIME PAY END*******************/
                    /******************PRIME WASHOUT AFTER CEILING*******************/
                    if (
                        $total_prime_pair_day == 9000 &&
                        ($paired_user["left_prime_remaining"] > 0 ||
                            $paired_user["right_prime_remaining"] > 0)
                    ) {
                        $data7 = [
                            "username" => $paired_user["username"],
                            "credit" => "0",
                            "left_prime_paid_pair" =>
                                $paired_user["left_prime_remaining"],
                            "right_prime_paid_pair" =>
                                $paired_user["right_prime_remaining"],
                            "remark" => "Ceiling Washout",
                            "description" => "Prime_wash",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("account", $data7);
                    }
                    /****************PRIME WASHOUT AFTER CEILING END*****************/
                }
            }
        }
        return true;
    }
    public function get_all_paired_users($child)
    {
        //log_message('error',$child."child");
        $users = [];
        $myteam = $this->get_all_parent_users("tree", "child_id",$child, $res = []);
        // unset($myteam[0]);
        $admin_id = $this->db
            ->select("username")
            ->where("id", 1)
            ->get("user_role")
            ->row()->username;
            
        for ($i = 0; $i < count($myteam); $i++) {
            if ($myteam[$i] != $admin_id) {
                $binarypair = 0;
                $left_user_investment = 0;
                $right_user_investment = 0;
                $left_child_investment = 0;
                $right_child_investment = 0;
                $left_investment = 0;
                $right_investment = 0;
                $pair_match = 0;
                $paidpair = 0;
                $left_tree = $this->db->select("child_id")->where("parent_id", $myteam[$i])->where("position", "left")->get("tree")->row()->child_id;
                $right_tree = $this->db ->select("child_id") ->where("parent_id", $myteam[$i]) ->where("position", "right") ->get("tree")->row()->child_id;
                if (!empty($left_tree) && !empty($right_tree)) {
                    //  $left_user_investment =
                    //      $this->db->select("deposit")->where("username", $left_tree)->get("user_role")->row()->deposit + 0;
                    $left_count = $this->db ->select("child_id") ->like("team", $left_tree)->get("tree")->result_array();
                    $left_team = array_column($left_count, "child_id");
                     array_unshift($left_team, $left_tree);
                    //  $right_user_investment =
                    //      $this->db->select("deposit")->where("username", $right_tree)->get("user_role")->row()->deposit + 0;
                    $right_count = $this->db->select("child_id")->like("team", $right_tree) ->get("tree")->result_array();
                    $right_team = array_column($right_count, "child_id");
                      array_unshift($right_team, $right_tree);
                   // if (!empty($left_team) && !empty($right_team)) {
                        $left_child_plus_investment =
                            $this->db->select_sum("plus_deposit")->where_in("username", $left_team)->get("user_role")->row()->plus_deposit + 0;
                        $left_plus_investment = $left_child_plus_investment;
                        $left_child_prime_investment =
                            $this->db->select_sum("prime_deposit") ->where_in("username", $left_team)->get("user_role")->row()->prime_deposit + 0;
                        $left_prime_investment = $left_child_prime_investment;
                        $right_child_plus_investment =
                            $this->db->select_sum("plus_deposit") ->where_in("username", $right_team)->get("user_role")->row()->plus_deposit + 0;
                        $right_plus_investment = $right_child_plus_investment;
                        $right_child_prime_investment =
                            $this->db->select_sum("prime_deposit")->where_in("username", $right_team)->get("user_role")->row()->prime_deposit + 0;
                        $right_prime_investment = $right_child_prime_investment;
                        $left_plus_paid_pair =
                            $this->db->select_sum("left_plus_paid_pair")->where("username", $myteam[$i])->get("account")->row()->left_plus_paid_pair + 0;
                        $left_prime_paid_pair =
                            $this->db->select_sum("left_prime_paid_pair") ->where("username", $myteam[$i]) ->get("account")->row()->left_prime_paid_pair + 0;
                        $right_plus_paid_pair =
                            $this->db->select_sum("right_plus_paid_pair") ->where("username", $myteam[$i])->get("account")->row()->right_plus_paid_pair + 0;
                        $right_prime_paid_pair =
                            $this->db ->select_sum("right_prime_paid_pair")->where("username", $myteam[$i])->get("account") ->row()->right_prime_paid_pair + 0;
                        log_message(
                            "error",
                            $left_plus_paid_pair . "left_plus_paid_pair"
                        );
                        log_message(
                            "error",
                            $right_plus_paid_pair . "right_plus_paid_pair"
                        );
                        $left_plus_remaining =$left_plus_investment - $left_plus_paid_pair;
                        $right_plus_remaining =$right_plus_investment - $right_plus_paid_pair;
                        log_message(
                            "error",
                            $left_plus_investment . "left_plus_investment"
                        );
                        log_message(
                            "error",
                            $left_plus_remaining . "left_plus_remaining"
                        );
                        log_message(
                            "error",
                            $right_plus_investment . "right_plus_investment"
                        );
                        log_message(
                            "error",
                            $right_plus_remaining . "right_plus_remaining"
                        );
                        $left_prime_remaining =$left_prime_investment - $left_prime_paid_pair;
                        $right_prime_remaining =$right_prime_investment - $right_prime_paid_pair;
                        $plus_pair = min($left_plus_remaining,$right_plus_remaining);
                        $prime_pair = min($left_prime_remaining,$right_prime_remaining);
                        
                        log_message("error", $plus_pair . "plus_pair");
                        if (
                            $left_prime_remaining > 0 ||
                            $right_prime_remaining > 0 ||
                            $left_plus_remaining > 0 ||
                            $right_plus_remaining > 0
                        ) {
                            $newdata = [
                                "username" => $myteam[$i],
                                "left_plus_remaining" => $left_plus_remaining,
                                "right_plus_remaining" => $right_plus_remaining,
                                "left_prime_remaining" => $left_prime_remaining,
                                "right_prime_remaining" => $right_prime_remaining,
                            ];
                            array_push($users, $newdata);
                        }
                   // }
                }
            }
        }
        return $users;
    }
    /*###################################################################### INCOME SECTION END    ####################################################################*/
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
    /*###################################################################### WITHDRAWAL SECTION    ####################################################################*/
    public function withdraw_request_manage()
    {
        $this->db->trans_begin();
        $wall = [
            "username" => $this->input->post("username"),
            "debit" => $this->input->post("amount"),
            "remark" => "withdrawal",
            "entry_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->insert("withdraw_wallet", $wall);
        
        $amount = $this->input->post("amount");
        
        do {
            
            $invv_number = rand(00000, 99999);
            $old_invv_number = $this->db->where('invoice_number', $invv_number)->from('withdraw_invoice')->count_all_results() + 0;
            } while ($old_invv_number > 0);

        
        $invv = [
            "username" => $this->input->post("username"),
            "invoice_number" => $invv_number,
            "entry_date" => date("Y-m-d H:i:s"),
            "amount" => $this->input->post("amount"),
        ];
        $this->db->insert("withdraw_invoice", $invv);
       $bankdetails=$this->db->where('username', $this->input->post("username"))->get('user_role')->row_array();
        $credss = [
            "username" => $this->input->post("username"),
            "remark" => "withdrawal",
            "invoice_number" => $invv_number,
            "entry_date" => date("Y-m-d H:i:s"),
            "amount" => $this->input->post("amount"),
            "status" => "Request",

            "ac_no"=>$bankdetails['ac_no'],
            "ac_ifsc"=>$bankdetails['ac_ifsc'],
            "ac_bank"=>$bankdetails['ac_bank'],
            "passbook"=>$bankdetails['passbook'],
           
        ];
        $this->db->insert("payout", $credss);
        
        
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
        }
    }
    /*###################################################################### WITHDRAWAL SECTION END   ####################################################################*/
    public function uni_autofill($parent, $child, $tree, $team)
    {
        $childcount =
            $this->db->where("child_id", $child)->count_all_results($tree) + 0;
        if ($childcount == 0) {
            $data2["parent_id"] = $parent;
            $data2["child_id"] = $child;
            $data2["entry_date"] = date("Y-m-d");
            $data2["team"] = $team;
            if ($this->db->insert($tree, $data2)) {
                return true;
            } else {
                return false;
            }
        }
    }
    public function login($username, $password)
    {
        $this->db
            ->where("pwd_hint", $password)
            ->group_start()
            ->where("username", $username)
            ->or_where("email", $username)
            ->or_where("mobile", $username)
            ->group_end();
        $details = $this->db->get("user_role")->row_array();
        if (!empty($details)) {
            $session_id = rand(0000, 9999);
            if ($details["username"] == $username) {
                $this->db
                    ->where("username", $username)
                    ->update("user_role", ["session_id" => $session_id]);
                $last = $this->db
                    ->where("username", $username)
                    ->get("user_role")
                    ->row_array();
                $this->db
                    ->where("username", $username)
                    ->update("user_role", [
                        "login_date_last" => $last["log_date"],
                    ]);
                $this->db
                    ->where("username", $username)
                    ->update("user_role", ["log_date" => date("Y-m-d H:i:s")]);
            } elseif ($details["email"] == $username) {
                $last = $this->db
                    ->where("username", $username)
                    ->get("user_role")
                    ->row_array();
                $this->db
                    ->where("username", $username)
                    ->update("user_role", [
                        "login_date_last" => $last["log_date"],
                    ]);
                $this->db
                    ->where("email", $username)
                    ->update("user_role", ["session_id" => $session_id]);
                $this->db
                    ->where("email", $username)
                    ->update("user_role", ["log_date" => date("Y-m-d H:i:s")]);
            } elseif ($details["mobile"] == $username) {
                $last = $this->db
                    ->where("username", $username)
                    ->get("user_role")
                    ->row_array();
                $this->db
                    ->where("username", $username)
                    ->update("user_role", [
                        "login_date_last" => $last["log_date"],
                    ]);
                $this->db
                    ->where("mobile", $username)
                    ->update("user_role", ["session_id" => $session_id]);
                $this->db
                    ->where("mobile", $username)
                    ->update("user_role", ["log_date" => date("Y-m-d H:i:s")]);
            }
            return $details;
        } else {
            return false;
        }
    }
    //   public function randpassword()
    //     {
    //         $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    //         $lowercase = "abcdefghijklmnopqrstuvwxyz";
    //         $digits = "0123456789";
    //         $special_chars = '!@#$%^&*()-_=+[]{}|;:,.<>?';
    //         $characters = $uppercase . $lowercase . $digits . $special_chars;
    //         $random_string = "";
    //         for ($i = 0; $i < 8; $i++) {
    //             $random_string .= $characters[rand(0, strlen($characters) - 1)];
    //         }
    //         $random_string = substr_replace(
    //             $random_string,
    //             $digits[rand(0, strlen($digits) - 1)],
    //             rand(0, $length - 2),
    //             0
    //         );
    //         return $random_string;
    //     }
    function randpassword()
    {
        $characters =
            'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_=+';
        $password = "";
        // Generate one capital letter
        $password .= chr(rand(65, 90));
        // Generate one small letter
        $password .= chr(rand(97, 122));
        // Generate one special character
        $specialCharacters = str_split('!@#$%^&*()-_=+');
        $password .= $specialCharacters[rand(0, count($specialCharacters) - 1)];
        // Generate two numbers
        $password .= rand(0, 9);
        $password .= rand(0, 9);
        // Generate remaining random characters
        for ($i = 0; $i < 1; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
        // Shuffle the password to randomize the character positions
        $password = str_shuffle($password);
        return $password;
    }
    public function randuser($first_name="", $last_name="")
    {
        if(!empty($first_name) && !empty($last_name)){
               $first_initial = strtoupper(substr($first_name, 0, 1));
               $last_initial = strtoupper(substr($last_name, 0, 1));
        }else{
               $first_initial = strtoupper(substr($first_name, 0, 1));
               $last_initial = strtoupper(substr($first_name, 1, 1)); 
        }
        $new =
            $this->db
                ->order_by("id", "DESC")
                ->limit(1)
                ->get("user_role")
                ->row()->id + 0;
        $userid =
            "BN" . $first_initial . $last_initial . sprintf("%02d", 00 + $new);
        $usercheck =
            $this->db
                ->where("username", $userid)
                ->count_all_results("user_role") + 0;
        if ($usercheck > 0) {
            return $this->randuser($first_name, $last_name);
        } else {
            return $userid;
        }
    }
    public function register_manage()
    {
        $this->db->trans_start();
        $first_name = $this->input->post("first_name");
        $last_name = $this->input->post("last_name");
        for ($i = 0; $i < 3; $i++) {
            $userid = $this->randuser($first_name, $last_name);
            $password = $this->randpassword();
            $position =
                $i == 1
                    ? "left"
                    : ($i == 2
                        ? "right"
                        : $this->input->post("position"));
            if ($i == 0) {
                $ref1 = $userid;
            }
            $ref =
                $i == 1
                    ? $ref1
                    : ($i == 2
                        ? $ref1
                        : $this->input->post("ref_id"));
            $userdata = [
                "username" => $userid,
                "position" => $position,
                "first_name" => $first_name,
                "last_name" => $last_name,
                "ref_id" => $ref,
                "user_type" => $i == 0 ? "u" : "sub",
                "email" => $this->input->post("email"),
                "mobile" => $this->input->post("mobile"),
                "address1" => $this->input->post("address1"),
                "address2" => $this->input->post("address2"),
                "employment" => $this->input->post("employment"),
                "city" => $this->input->post("city"),
                "district" => $this->input->post("district"),
                "state" => $this->input->post("state"),
                "pincode" => $this->input->post("pincode"),
                "aadhar_no" => $this->input->post("aadhar_no"),
                "pan_no" => $this->input->post("pan_no"),
                "ac_bank" => $this->input->post("bank_name"),
                "branch" => $this->input->post("branch"),
                "ac_no" => $this->input->post("acc_no"),
                "ac_ifsc" => $this->input->post("ifsc"),
                "ac_holder_name" => $this->input->post("acc_name"),
                // "firm_name" => $this->input->post("firm_name"),
                // "gst" => $this->input->post("gst"),
                "pwd" => $i == 0 ? sha1($password) : "",
                "pwd_hint" => $i == 0 ? $password : "",
                "entry_date" => date("Y-m-d H:i:s"),
            ];
            $this->db->insert("user_role", $userdata);
            if (
                $this->db
                    ->where("child_id", $userid)
                    ->where("position", $position)
                    ->count_all_results("tree") == 0
            ) {
                $this->admin->extreme_end_autofill(
                    "tree",
                    $ref,
                    $userid,
                    $position,
                    date("Y-m-d H:i:s")
                );
            }
            $parent_levels = $this->db
                ->where("child_id", $ref)
                ->get("uni_tree")
                ->row_array();
            $admin_id = $this->db
                ->select("username")
                ->where("id", 1)
                ->get("user_role")
                ->row()->username;
            if ($admin_id == $ref) {
                $teams = $ref;
            } else {
                if ($parent_levels != "") {
                    $teams = $ref . "~" . $parent_levels["team"];
                } else {
                    $teams = $ref;
                }
            }
            $this->uni_autofill($ref, $userid, "uni_tree", $teams);
            if ($i == 0) {
                $values[0] = "true";
                $values[1] = $userid;
                $values[2] = $password;
                $values[3] = $this->input->post("email");
                $values[4] = $this->input->post("first_name");
                $values[5] = $this->input->post("last_name");
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() != false) {
            return $values; // return the values array
        } else {
            return false;
        }
    }
    
    public function register_manage_ontree()
    {
        $this->db->trans_start();
        $first_name = $this->input->post("first_name");
        $last_name = $this->input->post("last_name");
        for ($i = 0; $i < 3; $i++) {
            $userid = $this->randuser($first_name, $last_name);
            $password = $this->randpassword();
            $position =
                $i == 1 ? "left" : ($i == 2  ? "right" : $this->input->post("position"));
                
            if ($i == 0) {
                $ref1 = $userid;
            }
            $ref =
                $i == 1 ? $ref1  : ($i == 2  ? $ref1  : $this->input->post("parent_id"));
                
            $ref_by =
                $i == 1 ? $ref1  : ($i == 2  ? $ref1  : $this->input->post("ref_id"));    
                
            $userdata = [
                "username" => $userid,
                "position" => $position,
                "first_name" => $first_name,
                "last_name" => $last_name,
                "ref_id" => $ref_by,
                "user_type" => $i == 0 ? "u" : "sub",
                "email" => $this->input->post("email"),
                "mobile" => $this->input->post("mobile"),
                "address1" => $this->input->post("address1"),
                "address2" => $this->input->post("address2"),
                "employment" => $this->input->post("employment"),
                "city" => $this->input->post("city"),
                "district" => $this->input->post("district"),
                "state" => $this->input->post("state"),
                "pincode" => $this->input->post("pincode"),
                "aadhar_no" => $this->input->post("aadhar_no"),
                "pan_no" => $this->input->post("pan_no"),
                "ac_bank" => $this->input->post("bank_name"),
                "branch" => $this->input->post("branch"),
                "ac_no" => $this->input->post("acc_no"),
                "ac_ifsc" => $this->input->post("ifsc"),
                "ac_holder_name" => $this->input->post("acc_name"),
                // "firm_name" => $this->input->post("firm_name"),
                // "gst" => $this->input->post("gst"),
                "pwd" => $i == 0 ? sha1($password) : "",
                "pwd_hint" => $i == 0 ? $password : "",
                "entry_date" => date("Y-m-d H:i:s"),
            ];
            $this->db->insert("user_role", $userdata);
            if (
                $this->db
                    ->where("child_id", $userid)
                    ->where("position", $position)
                    ->count_all_results("tree") == 0
            ) {
                $this->admin->extreme_end_autofill(
                    "tree",
                    $ref,
                    $userid,
                    $position,
                    date("Y-m-d H:i:s")
                );
            }
            $parent_levels = $this->db
                ->where("child_id", $ref_by)
                ->get("uni_tree")
                ->row_array();
            $admin_id = $this->db
                ->select("username")
                ->where("id", 1)
                ->get("user_role")
                ->row()->username;
            if ($admin_id == $ref_by) {
                $teams = $ref_by;
            } else {
                if ($parent_levels != "") {
                    $teams = $ref_by . "~" . $parent_levels["team"];
                } else {
                    $teams = $ref_by;
                }
            }
            $this->uni_autofill($ref_by, $userid, "uni_tree", $teams);
            if ($i == 0) {
                $values[0] = "true";
                $values[1] = $userid;
                $values[2] = $password;
                $values[3] = $this->input->post("email");
                $values[4] = $this->input->post("first_name");
                $values[5] = $this->input->post("last_name");
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() != false) {
            return $values; // return the values array
        } else {
            return false;
        }
    }
    
    public function get_user_data($username)
    {
        $left = $this->db
            ->select("username")
            ->where("ref_id", $username)
            ->where("user_type", "sub")
            ->where("position", "left")
            ->get("user_role")
            ->row()->username;
        $right = $this->db
            ->select("username")
            ->where("ref_id", $username)
            ->where("user_type", "sub")
            ->where("position", "right")
            ->get("user_role")
            ->row()->username;
    }
    public function extreme_end_autofill($tree,$parent,$child,$position,$paiddate) {

        $getparent = $this->get_extreme_end_child($tree,$parent,$position,$parent);
        if (!empty($getparent)) {
            $autofill_team1 = $this->db
                ->select("team")
                ->where("child_id", $getparent)
                ->get($tree)
                ->row()->team;
            if (!empty($autofill_team1)) {
                $autofillteams = $getparent . "~" . $autofill_team1;
            } else {
                $autofillteams = $getparent;
            }
            $data2["parent_id"] = trim($getparent);
            $data2["child_id"] = trim($child);
            $data2["entry_date"] = $paiddate;
            $data2["position"] = $position;
            $data2["team"] = $autofillteams;
            //$data2['team'] = str_replace(" ,",",",$autofillteams);
            if ($this->db->insert($tree, $data2)) {
                // $this->db->where('username',$child);
                // $this->db->update('user_role',array('team'=>str_replace(" ,",",",$autofillteams)));
                return true;
            } else {
                return false;
            }
        }
    }
    public function get_extreme_end_child($tree = "",$parent = "",$pos = "",$ch = "") {
        $resultccc = $this->db
            ->select("child_id")
            ->where("parent_id", $parent)
            ->where("position", $pos)
            ->get($tree)
            ->row()->child_id;
        if (!empty($resultccc)) {
            $ch = $this->get_extreme_end_child($tree,$resultccc,$pos,$resultccc);
        }
        return $ch;
    }
    //user reset password//
    public function update_password()
    {
        $this->db->trans_begin();
        $pass_data["pwd"] = sha1($this->input->post("newpass"));
        $pass_data["pwd_hint"] = $this->input->post("newpass");
        $this->db->where("username", $this->session->userdata("ublisusername"));
        $this->db->update("user_role", $pass_data);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
        }
    }
    //admin reset password//
    public function update_passwordd()
    {
        $this->db->trans_begin();
        $pass_data["pwd"] = sha1($this->input->post("newpass"));
        $pass_data["pwd_hint"] = $this->input->post("newpass");
        $this->db->where("username", $this->session->userdata("ablisusername"));
        $this->db->update("user_role", $pass_data);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
        }
    }
    //USER ACTIVATE BANK
    public function active_bank($id = "")
    {
        // $this->db->trans_begin();
        $username = $this->db->where("id", $id)->get("bank")->row_array();
        $data["ac_status"] = "Activate";
         $data["ac_no"] = $username['ac_no'];
          $data["ac_ifsc"] = $username['ac_ifsc'];
           $data["ac_bank"] = $username['ac_bank'];
            $data["branch"] = $username['branch'];
             $data["passbook"] = $username['image'];
             $data["ac_holder_name"] = $username['ac_holder_name'];
        
        
        
        $this->db->where("username", $username["username"]);
        $this->db->update("user_role", $data);
        
        
        $data1["ac_status"] = "Active";
        $this->db->where("id", $id);
        $this->db->update("bank", $data1);
        
         $data1["ac_status"] = "click to active";
        $this->db->where("username", $username['username'])->where('id !=',$id);
        $this->db->update("bank", $data1);
        
    }
    //user bank update//
    
    public function bank_delete($id=""){
        
    
    
    $active_id=$this->db->where('id',$id)->get('bank')->row_array();
    if($active_id['ac_status'] == "Active"){
    $data=[
        "ac_bank"=>"",
        "ac_holder_name"=>"",
        "ac_no"=> "",
        "ac_ifsc"=>"",
        "passbook"=>"",
        "branch"=>"",
        "ac_status"=>""
        ];
      $this->db->where('username',$active_id['username']);
      $this->db->update('user_role',$data);
    }
    
    $this->db->where('id',$id);
    $this->db->delete('bank');
      
       $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            return true;
        } else {
            return false;
        }
    
    }
    
    
    public function update_bank($image_path = "")
    {
        $this->db->trans_start();
        $data["username"] = $this->session->userdata("ublisusername");
        $data["ac_holder_name"] = $this->input->post("ac_name");
        $data["ac_no"] = $this->input->post("ac_no");
        $data["ac_bank"] = $this->input->post("ac_bank");
        $data["ac_ifsc"] = $this->input->post("ac_ifsc");
        $data["branch"] = $this->input->post("ac_branchname");
        $data["image"] = $image_path;
        $this->db->insert("bank", $data);
        // $this->db->where("username", $this->session->userdata("ublisusername"));
        // $this->db->update("user_role", $data);
        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            return true;
        } else {
            return false;
        }
    }
    //user bank update by admin//
    public function bank_update()
    {
        $this->db->trans_start();
        $data["username"] = $this->input->post("username");
        $data["ac_holder_name"] = $this->input->post("ac_name");
        $data["ac_no"] = $this->input->post("ac_no");
        $data["ac_bank"] = $this->input->post("ac_bank");
        $data["ac_ifsc"] = $this->input->post("ac_ifsc");
        $data["branch"] = $this->input->post("ac_branch");
        $data['description']='By Admin';
        $data['entry_date']=date('Y-m-d H:i:s');
        
        $this->db->insert("bank", $data);
        
        $data1["username"] = $this->input->post("username");
        $data1["ac_holder_name"] = $this->input->post("ac_name");
        $data1["ac_no"] = $this->input->post("ac_no");
        $data1["ac_bank"] = $this->input->post("ac_bank");
        $data1["ac_ifsc"] = $this->input->post("ac_ifsc");
        $data1["branch"] = $this->input->post("ac_branch");
        
        $this->db->where("username", $this->input->post("username"));
        $this->db->update("user_role", $data1);
        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            return true;
        } else {
            return false;
        }
    }
    //user profile update//
    public function update_profile($sessionuser = "")
    {
       // $this->db->trans_start();
        $profile = $this->db
            ->where("username", $sessionuser)
            ->get("user_role")
            ->row_array();
        $data["mobile"] = $this->input->post("mobile");
        $data["email"] = $this->input->post("email");
        $data["nominee_name"] = $this->input->post("nominee_name");
        $data["nominee_relation"] = $this->input->post("nominee_relation");
        $data["gender"] = $this->input->post("gender");
        $data["dob"] = $this->input->post("dob");
        $data["address1"] = $this->input->post("address1");
        $data["address2"] = $this->input->post("address2");
        $data["street"] = $this->input->post("street");
        $data["city"] = $this->input->post("city");
        $data["district"] = $this->input->post("district");
        $data["state"] = $this->input->post("state");
        $data["pincode"] = $this->input->post("pincode");
        $data["country"] = $this->input->post("country");
        $data["profile_status"] = "updated";
        $data["firm_name"] = $this->input->post("firm_name");
        $data["gst"] = $this->input->post("gst");
   
       
            $this->db
                ->where("username", $sessionuser)
                ->update("user_role", $data);
        
        //$this->db->trans_complete();
        // if ($this->db->trans_status() == true) {
        //     return true;
        // } else {
        //     return false;
        // }
    }
    //admin profile update //
    public function profile_update($profile = "")
    {
        $this->db->trans_start();
        $data["first_name"] = $this->input->post("first_name");
        $data["last_name"] = $this->input->post("last_name");
        $data["gender"] = $this->input->post("gender");
        $data["dob"] = $this->input->post("dob");
        $data["mobile"] = $this->input->post("mobile");
        $data["address1"] = $this->input->post("address1");
        $data["address2"] = $this->input->post("address2");
        $data["city"] = $this->input->post("city");
        $data["district"] = $this->input->post("district");
        $data["state"] = $this->input->post("state");
        $data["pincode"] = $this->input->post("pincode");
        $data["email"] = $this->input->post("email");
        $this->db->where("username", $profile)->update("user_role", $data);
        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            $this->db->trans_commit();
            return true;
        } else {
            $this->db->trans_rollback();
            return false;
        }
    }
    
    
    // user profile update by admin
    
    public function user_profile_update($user_id=""){
        
        
        
        $this->db->trans_start();
        $data["first_name"] = $this->input->post("first_name");
        $data["last_name"] = $this->input->post("last_name");
        $data["gender"] = $this->input->post("gender");
        $data["dob"] = $this->input->post("dob");
        $data["mobile"] = $this->input->post("mobile");
        $data["address1"] = $this->input->post("address1");
        $data["address2"] = $this->input->post("address2");
        $data["city"] = $this->input->post("city");
        $data["district"] = $this->input->post("district");
        $data["state"] = $this->input->post("state");
        $data["pincode"] = $this->input->post("pincode");
        $data["email"] = $this->input->post("email");
        $this->db->where("username", $user_id);
        $this->db->update("user_role", $data);
        
        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
             
            $this->db->trans_commit();
            return true;
        } else {
             
            $this->db->trans_rollback();
            return false;
        }
    }
        
        
        
    
    
    
    //user kyc update//
    public function kyc_update()
    {
        //   $this->db->trans_begin();
        $data["aadhar_no"] = $this->input->post("aadhar");
        $data["pan_no"] = $this->input->post("pan");
        $data["username"] = $this->session->userdata("ublisusername");
        $data["entry_date"] = date("Y-m-d H:i:s");
        $data["pan_image"] = $this->input->post("pan_file");
        //   $data['aadhar_image'] =  $this->input->post('aadhar_image');
        $data["status"] = "Requested";
        $this->db->insert("kyc_history", $data);
        
       
        $dataa = [
            "entry_date" => date("Y-m-d H:i:s"),
            "pan_no" => $this->input->post("pan"),
            "aadhar_no" => $this->input->post("aadhar"),
            "pan_image" => $this->input->post("pan_file"),
        ];
        
       
        
        $this->db->where("username", $this->session->userdata("ublisusername"));
        $this->db->update("user_role", $dataa);
        
         $notification2 = [
                            "username" => $this->session->userdata("ublisusername"),
                            "status" => "New",
                            "image" => "KYCRequested.png",
                            "remark" => "KYC Request",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("notifications", $notification2);
        
        
        //   if($this->db->trans_status() == FALSE){
        //      $this->db->trans_rollback();
        //      return false;
        //   } else {
        //      $this->db->trans_commit();
        //      return true;
        //   }
    }
    //user kyc update by admin//
    public function update_kyc($image="")
    {
        $this->db->trans_begin();
        $data["aadhar_no"] = $this->input->post("aadhar");
        $data["pan_no"] = $this->input->post("pan");
        $data["username"] = $this->input->post("username");
        $data["entry_date"] = date("Y-m-d H:i:s");
        $data["pan_image"] = $image;
       
        $data["description"] = "By Admin";
        $this->db->insert("kyc_history", $data);
        $dataa = [
            "pan_no" => $this->input->post("pan"),
            "aadhar_no" => $this->input->post("aadhar"),
            "pan_image" =>$image,
            "aadhar_image" => $this->input->post("aadhar_image"),
        ];
        $this->db->where("username", $this->input->post("username"));
        $this->db->update("user_role", $dataa);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }
    //user pin request//
    public function investment_manage($img_name = "")
    {
        $this->db->trans_begin();
        $ranomm=rand('00000','99999');
        
        $data["pack"] = $this->input->post("pack");
        $data["deposit_id"] = $ranomm;
        $data["pack_count"] = $this->input->post("count");
        $data["username"] = $this->session->userdata("ublisusername");
        $data["amount"] = $this->input->post("amount");
        $data["ref"] = $this->input->post("ref");
        $data["entry_date"] = date("Y-m-d H:i:s");
        $data["image"] = $img_name;
        $data["mode"] = $this->input->post("mode");
        $this->db->insert("investment", $data);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }
    public function approve_request($id = "")
    {
        $this->db->trans_begin();
        $accept_data = [
            "status" => "Accepted",
            "approve_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->where("id", $id);
        $this->db->update("investment", $accept_data);
        
        $deposit_id=$this->db->where('id',$id)->get('investment')->row_array();
        
        $userinvest = $this->db
            ->where("id", $id)
            ->get("investment")
            ->row_array();
        if ($userinvest["pack"] == "1100") {
            $pin = "PL";
        }
        if ($userinvest["pack"] == "10000") {
            $pin = "PR";
        }
        for ($i = 0; $i < $userinvest["pack_count"]; $i++) {
            do {
                $vrr = $pin . rand(00000, 99999);
                $existing_pins =
                    $this->db
                        ->where("pin", $vrr)
                        ->from("e_pin")
                        ->count_all_results() + 0;
            } while ($existing_pins > 0);
            $datt["username"] = $userinvest["username"];
            $datt["pin_value"] = $userinvest["pack"];
            $datt["pin"] = $vrr;
             $datt["deposit_id"]= $deposit_id['deposit_id'];
            $datt["entry_date"] = date("Y-m-d H:i:s");
            if ($userinvest["pack"] == "1100") {
                $datt["type"] = "Plus";
            }
            if ($userinvest["pack"] == "10000") {
                $datt["type"] = "Prime";
            }
            $this->db->insert("e_pin", $datt);
        }
        $noti_insert = [
            "username" => $userinvest["username"],
            "entry_date" => date("Y-m-d H:i:s"),
            "remark" => "Pin Request Accepted",
            "image"=> "PINAccepted.png",
            "status" => "New"
        ];
        $this->db->insert("notifications", $noti_insert);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
        }
    }
    public function reject_request($id = "", $reason = "")
    {
        $this->db->trans_begin();
        $reject_data = [
            "status" => "Rejected",
            "remark" => $reason,
            "approve_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->where("id", $id);
        $this->db->update("investment", $reject_data);
        $user_id = $this->db
            ->select("username")
            ->where("id", $id)
            ->get("investment")
            ->row()->username;
        $noti_insert = [
            "username" => $user_id,
            "entry_date" => date("Y-m-d H:i:s"),
            "remark" => "Pin Request Rejected"."(".$reason.")",
            "image"=>"PINRejected.png",
            "status" => "New",
        ];
        $this->db->insert("notifications", $noti_insert);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
        }
    }
    public function kyc_approve_request($id = "")
    {
        $this->db->trans_begin();
         $note  = $this->db->where('id',$id)->get('kyc_history')->row_array();
       $notificationnotes = [
                            "username" => $note['username'],
                            "status" => "New",
                            "image" => "KYCAccepted.png",
                            "remark" => "Your KYC has been Accepted Successfully ",
                            "entry_date" => date("Y-m-d H:i:s"),
                            "verified_by"=>"Admin",
                        ];
                        $this->db->insert("notifications", $notificationnotes);
                        
        $accept_data = [
            "status" => "Accepted",
            "accept_date" => date("Y-m-d H:i:s"),
            "verified_by"=>"Admin",
        ];
        $this->db->where("id", $id);
        $this->db->update("kyc_history", $accept_data);
        $kyc_update = $this->db
            ->where("id", $id)
            ->get("kyc_history")
            ->row_array();
        $update_data = [
            "aadhar_no" => $kyc_update["aadhar_no"],
            "pan_no" => $kyc_update["pan_no"],
            "pan_image" => $kyc_update["pan_image"],
            "aadhar_image" => $kyc_update["aadhar_image"],
        ];
        $this->db->where("username", $kyc_update["username"]);
        $this->db->update("user_role", $update_data);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
        }
    }
    public function kyc_reject_request($id = "", $reason = "")
    {
        $this->db->trans_begin();
         
         $note  = $this->db->where('id',$id)->get('kyc_history')->row_array();
       $notification2 = [
                            "username" => $note['username'],
                            "status" => "New",
                            "image" => "KYCRejected.png",
                            "remark" => "Your KYC has been Rejected"."(".$reason.")",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("notifications", $notification2);
                        
        $reject_data = [
            "status" => "Rejected",
            "description" => $reason,
            "reject_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->where("id", $id);
        $this->db->update("kyc_history", $reject_data);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
        }
    }
    //pin generation by admin//
    public function pin_request()
    {
        $this->db->trans_begin();
        $userinvest = $this->input->post("count");
        if ($this->input->post("pack") == "1100") {
            $pin = "PL";
        }
        if ($this->input->post("pack") == "10000") {
            $pin = "PR";
        }
        for ($i = 0; $i < $userinvest; $i++) {
            do {
                $vrr = $pin . rand(00000, 99999);
                $existing_pins =
                    $this->db
                        ->where("pin", $vrr)
                        ->from("e_pin")
                        ->count_all_results() + 0;
            } while ($existing_pins > 0);
            $datt["username"] = $this->input->post("username");
            $datt["pin_value"] = $this->input->post("pack");
            $datt["pin"] = $vrr;
            $datt["generated_by"] = "admin";
            $datt["entry_date"] = date("Y-m-d H:i:s");
            if ($this->input->post("pack") == "1100") {
                $datt["type"] = "Plus";
            }
            if ($this->input->post("pack") == "10000") {
                $datt["type"] = "Prime";
            }
            $this->db->insert("e_pin", $datt);
        }
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
        }
    }
    //activation by user//
    public function active_manage()
    {
        $this->db->trans_begin();
        $user = $this->input->post("username");
        $pin = $this->input->post("pin");
        $pindata["status"] = "Used";
        $pindata["used_for"] = $user;
        $pindata["used_date"] = date("Y-m-d H:i:s");
        $this->db->where("pin", $pin);
        $this->db->update("e_pin", $pindata);
        $amount = $this->db
            ->select("pin_value")
            ->where("pin", $pin)
            ->get("e_pin")
            ->row()->pin_value;
        $type = $this->db
            ->select("type")
            ->where("pin", $pin)
            ->get("e_pin")
            ->row()->type;
        if ($amount == 1100) {
            $redeem_point = 2000;
        }
        if ($amount == 10000) {
            $redeem_point = 15000;
        }
        $wallet_data = [
            "username" => $user,
            "pin_id" => $pin,
            "credit" => $amount,
            "type" => $type,
            "remark" => "Activation",
            "activated_by" => $this->input->post("activated_by"),
            "entry_date" => date("Y-m-d H:i:s"),
            "reedem_credit" => $redeem_point,
        ];
        $this->db->insert("pin", $wallet_data);
        $activation = [
            "status" => "Active",
            "activated_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->where("username", $user);
        $this->db->update("user_role", $activation);
        do {
            $invoice = rand(000000, 999999);
            $existing_invoice =
                $this->db
                    ->where("invoice_no", $invoice)
                    ->from("invoice")
                    ->count_all_results() + 0;
        } while ($existing_invoice > 0);
        $invoice_data = [
            "username" => $user,
            "value" => $amount,
            "pack" => $type,
            "invoice_no" => $invoice,
            "entry_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->insert("invoice", $invoice_data);
        if ($amount == 1100) {
            $this->db->set("plus_deposit", "plus_deposit+" . $amount, false);
            $this->db->where("username", $user);
            $this->db->update("user_role");
        } elseif ($amount == 10000) {
            $this->db->set("prime_deposit", "prime_deposit+" . $amount, false);
            $this->db->where("username", $user);
            $this->db->update("user_role");
            $dss["pack"] = "10000";
            $this->db->where("child_id", $user);
            $this->db->update("uni_tree", $dss);
            $myteam = $this->get_all_parent_users(
                "uni_tree",
                "child_id",
                $user,
                $res = []
            );
            $admin_id = $this->db
                ->select("username")
                ->where("id", 1)
                ->get("user_role")
                ->row()->username;
            for ($i = 0; $i < count($myteam); $i++) {
                if ($myteam[$i] != $admin_id) {
                    $level = $this->count_levelusers($myteam[$i]);
                }
            }
        }
        $user_ref = $this->db
            ->select("ref_id")
            ->where("username", $user)
            ->get("user_role")
            ->row()->ref_id;
        $ref_pack = $this->db
            ->select_max("credit")
            ->where("username", $user_ref)
            ->where("remark", "Activation")
            ->get("pin")
            ->row()->credit;
        if ($ref_pack == 10000) {
            $this->direct_income($user, $amount);
        }
        if ($ref_pack == 1100 && $amount == 1100) {
            $this->direct_income($user, $amount);
        }
        
        
        $ref_id=$this->db->select('ref_id')->where('username',$user)->get('user_role')->row()->ref_id;
        $parent_levels = $this->get_row_data('tree', 'child_id',$ref_id); 
        $admin_id=$this->db->select('username')->where('id',1)->get('user_role')->row()->username;
        
        if($admin_id == $ref_id){
             $teams  = $ref_id;
        }else{
            if($parent_levels!=""){
                $teams  = $ref_id."~".$parent_levels['team'];
            }else{
                $teams  = $ref_id;
            } 
        }
        
        //$this->binary_income($user);
        $this->level_income($teams,$user,$amount);
        
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }
    public function count_levelusers($parent)
    {
        for ($i = 1; $i < 16; $i++) {
            $nthlevel = $i;
            $teammm = $this->db
                ->select("team")
                ->where("child_id", $parent)
                ->get("uni_tree")
                ->row()->team;
            $myparent = substr_count($teammm, "~") + 0;
            $counttt = $this->db
                ->select(
                    "LENGTH(`team`) - LENGTH(REPLACE(`team`, '~', '')) as `number`, team,pack"
                )
                ->like("team", $parent)
                ->having("number >=", $myparent)
                ->having("number", $nthlevel + $myparent)
                ->where("pack", "10000.00")
                ->get("uni_tree")
                ->result_array();
            $ress = count($counttt);
            $entry_check = $this->db
                ->where("username", $parent)
                ->get("prime_rank_achivers")
                ->row_array();
            if ($entry_check) {
                $data["level" . $i] = $ress;
                $this->db->where("username", $parent);
                $this->db->update("prime_rank_achivers", $data);
            } else {
                $rank["username"] = $parent;
                $rank["level" . $i] = $ress;
                $this->db->insert("prime_rank_achivers", $rank);
            }
        }
        return;
    }
    //activation by admin//
    public function active()
    {
        if ($this->input->post("pin_value") == 1100.00) {
            $redeem_point = 2000;
        }
        if ($this->input->post("pin_value") == 10000.00) {
            $redeem_point = 15000;
        }
        $wallet_data = [
            "username" => $this->input->post("username"),
            "credit" => $this->input->post("pin_value"),
            "type" =>$this->input->post("pin_value") == "1100" ? "Plus" : "Prime",
            "remark" => "Activation",
            "activated_by" => $this->input->post("admin"),
            "entry_date" => date("Y-m-d H:i:s"),
            "reedem_credit" => $redeem_point,
        ];
        $this->db->insert("pin", $wallet_data);
        $activation = [
            "status" => "Active",
            "activated_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->where("username", $this->input->post("username"));
        $this->db->update("user_role", $activation);
        do {
            $invoice = rand(000000, 999999);
            $existing_invoice =
                $this->db
                    ->where("invoice_no", $invoice)
                    ->from("invoice")
                    ->count_all_results() + 0;
        } while ($existing_invoice > 0);
        $admin = $this->db
            ->select("username")
            ->where("id", "1")
            ->get("user_role")
            ->row()->username;
        $invoice_data = [
            "username" => $this->input->post("username"),
            "value" => $this->input->post("pin_value"),
            "pack" =>
                $this->input->post("pin_value") == "1100" ? "Plus" : "Prime",
            "invoice_no" => $invoice,
            "description" => $admin,
            "entry_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->insert("invoice", $invoice_data);
        if ($this->input->post("pin_value") == 1100) {
            $this->db->set(
                "plus_deposit",
                "plus_deposit+" . $this->input->post("pin_value"),
                false
            );
            $this->db->where("username", $this->input->post("username"));
            $this->db->update("user_role");
        } elseif ($this->input->post("pin_value") == 10000) {
            $this->db->set(
                "prime_deposit",
                "prime_deposit+" . $this->input->post("pin_value"),
                false
            );
            $this->db->where("username", $this->input->post("username"));
            $this->db->update("user_role");
            $dss["pack"] = "10000";
            $this->db->where("child_id", $this->input->post("username"));
            $this->db->update("uni_tree", $dss);
            $myteam = $this->get_all_parent_users(
                "uni_tree",
                "child_id",
                $this->input->post("username"),
                $res = []
            );
            $admin_id = $this->db
                ->select("username")
                ->where("id", 1)
                ->get("user_role")
                ->row()->username;
            for ($i = 0; $i < count($myteam); $i++) {
                if ($myteam[$i] != $admin_id) {
                    $level = $this->count_levelusers($myteam[$i]);
                }
            }
        }
        $this->direct_income(
            $this->input->post("username"),
            $this->input->post("pin_value")
        );
        //$this->binary_income($this->input->post("username"));
        
        $user=$this->input->post("username");
        $ref_id=$this->db->select('ref_id')->where('username',$user)->get('user_role')->row()->ref_id;
        $parent_levels = $this->get_row_data('tree', 'child_id',$ref_id); 
        $admin_id=$this->db->select('username')->where('id',1)->get('user_role')->row()->username;
        
        if($admin_id == $ref_id){
             $teams  = $ref_id;
        }else{
            if($parent_levels!=""){
                $teams  = $ref_id."~".$parent_levels['team'];
            }else{
                $teams  = $ref_id;
            } 
        }
        
        $this->level_income($teams,$user,$this->input->post("pin_value"));
        
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }
    //payout configuration by admin//
    public function payout_deduction()
    {
        $this->db->trans_begin();
        $wall = [
            "admin_charge" => $this->input->post("admin_charge"),
            "tds" => $this->input->post("tds"),
            "entry_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->insert("deduction", $wall);
        $data["value"] = $this->input->post("admin_charge");
        $this->db->where("type", "admin charge")->update("master", $data);
        $dataa["value"] = $this->input->post("tds");
        $this->db->where("type", "tds")->update("master", $dataa);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
        }
    }
    //transfer points to withdraw wallet by user//
    public function account_points_debit($data)
    {
        $this->db->insert("account", $data);
    }
    public function account_points_credit($data)
    {
        $this->db->insert("withdraw_wallet", $data);
    }
    public function transfer_points_affiliate($amount)
        {
            $this->db->trans_begin();
            $wall = [
                "username" => $this->session->userdata("ublisusername"),
                "credit" => $amount,
                "remark" => "Affiliate Points",
                "entry_date" => date('Y-m-d H:i:s'),
            ];
            $this->db->insert("withdraw_wallet", $wall);
            $credss = [
                "username" =>  $this->session->userdata("ublisusername"),
                "remark" => "Direct Income",
                "entry_date" => date('Y-m-d H:i:s'),
                "debit" => $amount,
            ];
            $this->db->insert("account_sub", $credss);
            if ($this->db->trans_status() == false) {
                $this->db->trans_rollback();
                return false;
            } else {
                $this->db->trans_commit();
                return true;
                // return true;
            }
        }
        
    public function transfer_points_incentive($amount)
        {
            $this->db->trans_begin();
            $wall = [
                "username" => $this->session->userdata("ublisusername"),
                "credit" => $amount,
                "remark" => "Pair Income",
                "entry_date" => date('Y-m-d H:i:s'),
            ];
            $this->db->insert("withdraw_wallet", $wall);
            $credss = [
                "username" =>  $this->session->userdata("ublisusername"),
                "remark" => "Pair Income",
                "entry_date" => date('Y-m-d H:i:s'),
                "debit" => $amount,
            ];
            $this->db->insert("account_sub", $credss);
            if ($this->db->trans_status() == false) {
                $this->db->trans_rollback();
                return false;
            } else {
                $this->db->trans_commit();
                return true;
                // return true;
            }
        }
        
        public function transfer_level_incentive($amount)
        {
            $this->db->trans_begin();
            $wall = [
                "username" => $this->session->userdata("ublisusername"),
                "credit" => $amount,
                "remark" => "Level Income",
                "entry_date" => date('Y-m-d H:i:s'),
            ];
            $this->db->insert("withdraw_wallet", $wall);
            $credss = [
                "username" =>  $this->session->userdata("ublisusername"),
                "remark" => "Level Income",
                "entry_date" => date('Y-m-d H:i:s'),
                "debit" => $amount,
            ];
            $this->db->insert("account_sub", $credss);
            if ($this->db->trans_status() == false) {
                $this->db->trans_rollback();
                return false;
            } else {
                $this->db->trans_commit();
                return true;
                // return true;
            }
        }
        
    //payout accept reject//
    public function approve_payout($id = "")
    {
        $this->db->trans_begin();
        $accept_data = [
            "status" => "Accepted",
            "pay_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->where("id", $id);
        $this->db->update("payout", $accept_data);
        $user = $this->db
            ->where("id", $id)
            ->get("payout")
            ->row_array();
        $data = [
            "username" => $user["username"],
            "status" => "New",
            "image" => "thumbs-up.png",
            "remark" => "Withdrawal Request Accepted",
            "entry_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->insert("notifications", $data);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
        }
    }
    public function reject_payout($id = "", $reason = "")
    {
        $this->db->trans_begin();
        $reject_data = [
            "status" => "Rejected",
            "remark" => $reason,
            "pay_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->where("id", $id);
        $this->db->update("payout", $reject_data);
        $user = $this->db
            ->where("id", $id)
            ->get("payout")
            ->row_array();
        $data = [
            "username" => $user["username"],
            "credit" => $user["amount"],
            "remark" => "Rejected amount",
            "entry_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->insert("withdraw_wallet", $data);
        $dataa = [
            "username" => $user["username"],
            "status" => "New",
            "image" => "thumbs-down.png",
            "remark" => "Withdrawal Request Rejected"."(".$reason.")",
            "entry_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->insert("notifications", $dataa);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
        }
    }
    public function shop_manage()
    {
        $this->db->trans_begin();
        $data["shop_id"] = rand(0000, 9999);
        $data["shop_name"] = $this->input->post("shopname");
        $data["mob_num_1"] = $this->input->post("mob_num_1");
        $data["mob_num_2"] = $this->input->post("mob_num_2");
        $data["address_1"] = $this->input->post("address1");
        $data["address_2"] = $this->input->post("address2");
        $data["city"] = $this->input->post("city");
        $data["state"] = $this->input->post("state");
        $data["district"] = $this->input->post("district");
        $data["pincode"] = $this->input->post("pincode");
        $data["entry_date"] = date("Y-m-d H:i:s");
        $this->db->insert("shop_list", $data);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }
    public function bank_manage()
    {
        $this->db->trans_begin();
        $data["ac_holder_name"] = $this->input->post("acc_holder_name");
        $data["ac_no"] = $this->input->post("acc_no");
        $data["ac_bank"] = $this->input->post("bank_name");
        $data["branch"] = $this->input->post("branch_name");
        $data["ac_ifsc"] = $this->input->post("ifsc");
        $this->db->where("username", $this->session->userdata("ablisusername"));
        $this->db->update("user_role", $data);
        $data2["ac_holder_name"] = $this->input->post("acc_holder_name");
        $data2["ac_no"] = $this->input->post("acc_no");
        $data2["ac_bank"] = $this->input->post("bank_name");
        $data2["branch"] = $this->input->post("branch_name");
        $data2["ac_ifsc"] = $this->input->post("ifsc");
        $data2["entry_date"] = date("Y-m-d H:i:s");
        $this->db->insert("admin_bank", $data2);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }
    public function upi_manage($img_name)
    {
        $this->db->trans_begin();

        $data = [
            "upi_image" => $img_name,
            "upi_number" => $this->input->post("upi_number"),
        ];
        $this->db->where("username", $this->session->userdata("ablisusername"));
        $this->db->update("user_role", $data);
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }
    public function get_all_parent_users($table, $field, $child, $array)
    {
        $parents = $this->get_row_data($table, $field, $child);
        if (count($array) > 1) {
            $myteam = explode("~", $child, $parents["team"]);
        } else {
            $myteam = explode("~", $parents["team"]);
        }
        return $myteam;
    }
    // public function messageinsert($user){
    //     $adminid=$this->db->select('username')->where('id',1)->get('user_role')->row()->username;
    //     if($adminid == $user){
    //         $admindata=[
    //         "receive_msg"=>$this->input->post('message'),
    //         "sender_id"=>$adminid,
    //         "send"=>"send",
    //         "date"=>date('Y-m-d H:i:s'),
    //         "user_type"=>"a",
    //         "receiver_id"=> $this->input->post('recevier')
    //             ];
    //         $this->db->insert('chat_messages',$admindata);
    //     }else{
    //     $data=[
    //         "receive_msg"=>$this->input->post('message'),
    //         "sender_id"=>$user,
    //         "send"=>"send",
    //         "date"=>date('Y-m-d H:i:s'),
    //         "user_type"=>"u",
    //         "receiver_id"=>"admin123"
    //         ];
    //         $this->db->insert('chat_messages',$data);
    //     }
    // }
    public function save_message()
    {
        $data = [
            "sender_id" => $this->input->post("sender"),
            "receiver_id" => $this->input->post("receiver"),
            "type" => "send",
            "status" => "unread",
            "user_type" => "u",
            "send" => $this->input->post("message"),
            "date" => date("Y-m-d H:i:s"),
        ];
        $this->db->insert("chat_messages", $data);
        $d = [
            "sender_id" => $this->input->post("receiver"),
            "type" => "receive",
            "receive_msg" => $this->input->post("message"),
            "date" => date("Y-m-d H:i:s"),
        ];
        $this->db->insert("chat_messages", $d);
    }
    
    
     public function announcement_insert($pdf)
    {
           {
        $this->db->trans_begin();
        $data = [
            "pdf" => $pdf,
            "title" => $this->input->post("title"),
            "view_for" => $this->input->post("view_for"),
            "entry_date"=>date('Y-m-d H:i:s')
        ];
       
        $this->db->insert("announcement", $data);
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }
    }
    
    
    public function staffrandpassword(){
    
     do {
            $new_pass = rand(00000, 99999);
            $old_pass = $this->db->where('pwd_hint', $new_pass)->count_all_results('staff_panel') + 0;
            } while ($old_pass > 0);
            
            return $new_pass;

}
    

   public function staff_register()
    {
        $this->db->trans_start();

            do {
            $new_user = "STF".rand(00000, 99999);
            $old_user = $this->db->where('username', $new_user)->count_all_results('staff_panel') + 0;
            } while ($old_user > 0);

          $randpass=$this->staffrandpassword();


            $userdata = [
                "username" => $new_user,
                "name"=> $this->input->post("staff_name"),
                "gender"=> $this->input->post("gender"),
                "marital_status"=> $this->input->post("marital_status"),
                "employe_role"=> $this->input->post("employe_role"),
                "user_type" => "s",
                "mobile" => $this->input->post("mobile"),
                "address" => $this->input->post("address"),
                "district" => $this->input->post("district"),
                "state" => $this->input->post("state"),
                "pincode" => $this->input->post("pincode"),
                "pwd" =>sha1($randpass),
                "pwd_hint" =>  $randpass,
                "entry_date" => date("Y-m-d H:i:s"),
            ];
            $this->db->insert("staff_panel", $userdata);
           
            
     
        $this->db->trans_complete();
        if ($this->db->trans_status() != false) {
              $this->db->trans_commit();
            return $userdata; // return the values array
        } else {
            $this->db->trans_rollback();
            return false;
        }
    }
    
}
