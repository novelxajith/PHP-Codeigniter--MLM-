<?php
error_reporting(0);
defined("BASEPATH") or exit("No direct script access allowed");
class Staff_model extends CI_Model
{


    public function blisser_approve_request($id = ""){
        
        $this->db->trans_begin();
        
        $bdetails = $this->db->where("id", $id)->get("blisser_verification")->row_array();
                        
        $accept_data = [
            "status" => "Accepted",
            "accepted_date" => date("Y-m-d H:i:s"),
        ];
        
        $this->db->where("id", $id);
        $this->db->update("blisser_verification", $accept_data);
        
        $verify = $this->verify_user($bdetails['bliss_id'],$bdetails['cust_id'],'Accepted');
        
        $status = json_decode($verify, true);
        
        // if($status['status'] != 'success'){
        //     $this->db->trans_rollback();
        //     return false;
        // }
     
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
        }
    }
    
    public function verify_user($bliss_id,$cust_id,$status){
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://blissnova.online/blisser/api/VerifyUser',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('bliss_id' => $bliss_id,'cust_id' => $cust_id,'status' => $status),
          CURLOPT_HTTPHEADER => array(
            'API-Key: e4891cf2-13f3-479d-8cc0-52a970c3c605',
            'Cookie: ci_session=l8qphgf21oqtlpmh6dvqe3i1qeinjfv7'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
    }
    
    public function blisser_reject_request($id = "", $reason = ""){
        
        $this->db->trans_begin();
         
        $bdetails = $this->db->where("id", $id)->get("blisser_verification")->row_array(); 
         
        $reject_data = [
            "status" => "Rejected",
            "description" => $reason,
            "accepted_date" => date("Y-m-d H:i:s"),
        ];
        $this->db->where("id", $id);
        $this->db->update("blisser_verification", $reject_data);
        
        $verify = $this->verify_user($bdetails['bliss_id'],$bdetails['cust_id'],'Rejected');
        
        // if($status['status'] != 'success'){
        //     $this->db->trans_rollback();
        //     return false;
        // }
        
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
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
        $details = $this->db->get("staff_panel")->row_array();
        if (!empty($details)) {
            $session_id = rand(0000, 9999);
            if ($details["username"] == $username) {
                $this->db
                    ->where("username", $username)
                    ->update("staff_panel", ["session_id" => $session_id]);
                $last = $this->db
                    ->where("username", $username)
                    ->get("staff_panel")
                    ->row_array();
                $this->db
                    ->where("username", $username)
                    ->update("staff_panel", [
                        "login_date_last" => $last["log_date"],
                    ]);
                $this->db
                    ->where("username", $username)
                    ->update("staff_panel", ["log_date" => date("Y-m-d H:i:s")]);
            } elseif ($details["email"] == $username) {
                $last = $this->db
                    ->where("username", $username)
                    ->get("staff_panel")
                    ->row_array();
                $this->db
                    ->where("username", $username)
                    ->update("staff_panel", [
                        "login_date_last" => $last["log_date"],
                    ]);
                $this->db
                    ->where("email", $username)
                    ->update("staff_panel", ["session_id" => $session_id]);
                $this->db
                    ->where("email", $username)
                    ->update("staff_panel", ["log_date" => date("Y-m-d H:i:s")]);
            } elseif ($details["mobile"] == $username) {
                $last = $this->db
                    ->where("username", $username)
                    ->get("staff_panel")
                    ->row_array();
                $this->db
                    ->where("username", $username)
                    ->update("staff_panel", [
                        "login_date_last" => $last["log_date"],
                    ]);
                $this->db
                    ->where("mobile", $username)
                    ->update("staff_panel", ["session_id" => $session_id]);
                $this->db
                    ->where("mobile", $username)
                    ->update("staff_panel", ["log_date" => date("Y-m-d H:i:s")]);
            }
            return $details;
        } else {
            return false;
        }
    }

    
        public function update_passwordd()
    {
        $this->db->trans_begin();
        $pass_data["pwd"] = sha1($this->input->post("newpass"));
        $pass_data["pwd_hint"] = $this->input->post("newpass");
        $this->db->where("username", $this->session->userdata("staffusername"));
        $this->db->update("staff_panel", $pass_data);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
            // return true;
        }
    }
    
    
      public function kyc_approve_request($id = "",$verified="")
    {
        $this->db->trans_begin();
         $note  = $this->db->where('id',$id)->get('kyc_history')->row_array();
       $notificationnotes = [
                            "username" => $note['username'],
                            "status" => "New",
                            "image" => "KYCAccepted.png",
                            "remark" => "Your KYC has been Accepted Successfully ",
                            "entry_date" => date("Y-m-d H:i:s"),
                            "verified_by"=>"Verification officer",
                            "officer_id" => $verified,
                        ];
                        $this->db->insert("notifications", $notificationnotes);
                        
        $accept_data = [
            "status" => "Accepted",
            "accept_date" => date("Y-m-d H:i:s"),
            "verified_by"=>"Verification officer",
            "officer_id" => $verified,
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
    public function kyc_reject_request($id = "", $reason = "",$verified="")
    {
        $this->db->trans_begin();
         
         $note  = $this->db->where('id',$id)->get('kyc_history')->row_array();
       $notification2 = [
                            "username" => $note['username'],
                            "status" => "New",
                            "image" => "KYCRejected.png",
                            "remark" => "Your KYC has been Rejected"."(".$reason.")",
                            "entry_date" => date("Y-m-d H:i:s"),
                            "verified_by"=>"Verification officer",
                            "officer_id" => $verified,
                        ];
                        $this->db->insert("notifications", $notification2);
                        
        $reject_data = [
            "status" => "Rejected",
            "description" => $reason,
            "reject_date" => date("Y-m-d H:i:s"),
            "verified_by"=>"Verification officer",
            "officer_id" => $verified,
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
    
    
        public function approve_request($id = "",$verified="")
    {
        $this->db->trans_begin();
        $accept_data = [
            "status" => "Accepted",
            "approve_date" => date("Y-m-d H:i:s"),
            "verified_by"=>"Verification officer",
            "officer_id" => $verified,
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
            $datt["verified_by"] = "Verification officer";
            $datt["officer_id"] = $verified;
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
            "status" => "New",
            "verified_by"=>"Verification officer",
            "officer_id" => $verified,
            
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
    public function reject_request($id = "", $reason = "",$verified="")
    {
        $this->db->trans_begin();
        $reject_data = [
            "status" => "Rejected",
            "remark" => $reason,
            "approve_date" => date("Y-m-d H:i:s"),
            "verified_by"=>"Verification officer",
            "officer_id" => $verified,
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
            "verified_by"=>"Verification officer",
            "officer_id" => $verified,
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
    
       public function save_message()
    {
        $data = [
            "sender_id" => $this->input->post("sender"),
            "receiver_id" => $this->input->post("receiver"),
            "type" => "send",
            "status" => "unread",
            "user_type" => "s",
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
    
        public function profile_update($profile = "")
    {
        $this->db->trans_start();
        $data["name"] = $this->input->post("name");
        $data["gender"] = $this->input->post("gender");
        $data["dob"] = $this->input->post("dob");
        $data["mobile"] = $this->input->post("mobile");
        $data["address"] = $this->input->post("address");
        $data["city"] = $this->input->post("city");
        $data["district"] = $this->input->post("district");
        $data["state"] = $this->input->post("state");
        $data["pincode"] = $this->input->post("pincode");
        $data["email"] = $this->input->post("email");
        
        $this->db->where("username", $profile)->update("staff_panel", $data);
        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            $this->db->trans_commit();
            return true;
        } else {
            $this->db->trans_rollback();
            return false;
        }
    }
    
        public function shop_manage($officer_id="")
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
        $data["register_by"] = "Verification officer";
        $data["officer_id"] = $officer_id;
        
        $this->db->insert("shop_list", $data);
        if ($this->db->trans_status() == false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }
    

  
  
      //payout accept reject//
    public function approve_payout($id = "",$verified="")
    {
        $this->db->trans_begin();
        $accept_data = [
            "status" => "Accepted",
            "pay_date" => date("Y-m-d H:i:s"),
            "verified_by"=>"Verification officer",
            "officer_id" => $verified,
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
            "verified_by"=>"Verification officer",
            "officer_id" => $verified,
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
    public function reject_payout($id = "", $reason = "",$verified="")
    {
        $this->db->trans_begin();
        $reject_data = [
            "status" => "Rejected",
            "remark" => $reason,
            "pay_date" => date("Y-m-d H:i:s"),
            "verified_by"=>"Verification officer",
            "officer_id" => $verified,
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
            "verified_by"=>"Verification officer",
            "officer_id" => $verified,
        ];
        $this->db->insert("withdraw_wallet", $data);
        $dataa = [
            "username" => $user["username"],
            "status" => "New",
            "image" => "thumbs-down.png",
            "remark" => "Withdrawal Request Rejected"."(".$reason.")",
            "entry_date" => date("Y-m-d H:i:s"),
            "verified_by"=>"Verification officer",
            "officer_id" => $verified,
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
  
 

}
