<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
   
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper(array('form','url'));
    $this->load->library(array('form_validation', 'email'));
    $this->form_validation->set_error_delimiters('<span style="color:red">', '</span>');
    $this->data=$this->db->select('session_id')->where('username',$this->session->userdata('ublisusername'))->where('user_type','u')->get('user_role')->row()->session_id;

  }

  // public function levelusers_number()
  //   {
  //     $parent="BNSN01";
  //     $nthlevel=50;
        
  //           // $teammm = $this->db
  //           //     ->select("team")
  //           //     ->where("child_id", $parent)
  //           //     ->get("uni_tree")
  //           //     ->row()->team;
  //           // $myparent = substr_count($teammm, "~") + 0;
  //           // $counttt = $this->db
  //           //     ->select(
  //           //         "LENGTH(`team`) - LENGTH(REPLACE(`team`, '~', '')) as `number`, team,pack"
  //           //     )
  //           //     ->like("team", $parent)
  //           //     ->having("number", $nthlevel )
  //           //     ->get("uni_tree")
  //           //     ->result_array();
  //           // $ress = count($counttt);
  //           // echo $ress;


  //           $teammm = $this->db->select('team')->where('child_id',$parent)->get('uni_tree')->row()->team;
  //           $myparent = substr_count($teammm,'~')+0;
  //           $counttt = $this->db->select("LENGTH(`team`) - LENGTH(REPLACE(`team`, '~', '')) as `number`, team")->LIKE('team',$parent)->HAVING('number >=',($myparent))->HAVING('number <=',($nthlevel+$myparent))->get('uni_tree')->result_array();
  //           //log_message("error", $this->db->last_query());
  //           //return count($counttt);
  //           $level1_count = array_count_values(array_column($counttt, 'number'))[1];
  //             //log_message("error", $level1_count."first level count");
      
        
  //       echo $level1_count;
  //   }


//   public function levelusers_number()
// {
//     $parent = "BNSN02";
//     $nthlevel = 2;

//     $teammm = $this->db->select('team')->where('child_id', $parent)->get('uni_tree')->row()->team;
//     $myparent = substr_count($teammm, '~') + 1; // Adjusted to start counting from 1

//     echo "string count : ". $myparent."---";

//     $counttt = $this->db->select("LENGTH(`team`) - LENGTH(REPLACE(`team`, '~', '')) as `number`, team")
//         ->like('team', $parent)
//         ->having('number >=', $myparent)
//         ->having('number <=', ($nthlevel + $myparent))
//         ->get('uni_tree')
//         ->result_array();

//     $level1_count = count($counttt);

//     echo "Result:". $level1_count;
// }


public function levelusers_number()
    {

      $parent = "BNBP03";
    $nthlevel = 2;
        
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
          
            echo "Result:". $ress;
        
    }


public function parent_list(){
$user="BNJJ1446";
  $ref_id=$this->db->select('ref_id')->where('username',$user)->get('user_role')->row()->ref_id;
        $parent_levels = $this->db->where('child_id',$ref_id)->get('uni_tree')->row_array(); 
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

        print_r($teams);

}
    


    


  public function unilevel_insert()
  {
      $users=$this->db->where('id !=','1')->get('user_role')->result_array();

      foreach($users as $us)
      {

        $ref=$this->db->select('ref_id')->where('username',$us['username'])->get('user_role')->row()->ref_id;

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

   
         $this->admin->uni_autofill($ref,$us['username'],"uni_tree",$teams);
      }
  }


  

  
  public function tesssss(){
      $this->load->library('email');
    $config['protocol']='smtp';
    $config['smtp_host']='smtp.hostinger.com';
    $config['smtp_port']=465;
    $config['smtp_timeout']='30';
    $config['smtp_user']='noreplay@blissnova.online';
    $config['smtp_pass']='Noreplay@123';
    $config['charset']='utf-8';
    $config['newline']="\r\n";
    $config['wordwrap'] = TRUE;
    $config['mailtype'] = 'html';
    $this->email->initialize($config);
    $this->email->from('noreplay@blissnova.online', 'blissnova');
    $this->email->reply_to('noreplay@blissnova.online', 'blissnova');
    $this->email->to('novelxcto@gmail.com');
    $this->email->subject('blissnova Email OTP');
    $this->email->message("hai");
    //$this->email->message("ytfbg u gh uhuiyjg uj");
    if($this->email->send()){
    echo "send";
} else {
    echo $this->email->print_debugger();
}
  }
  
     
  
//working
  public function ts(){
      
    $this->load->library('email');
    
    $mail_config['smtp_host'] = 'smtp.hostinger.com';
    $mail_config['smtp_port'] = '587';
    $mail_config['smtp_user'] = 'noreplay@blissnova.online';
    $mail_config['_smtp_auth'] = TRUE;
    $mail_config['smtp_pass'] = 'Noreplay@123';
    $mail_config['smtp_crypto'] = 'tls';
    $mail_config['protocol'] = "mail";
    $mail_config['mailtype'] = 'html';
    $mail_config['send_multipart'] = FALSE;
    $mail_config['charset'] = 'utf-8';
    $mail_config['wordwrap'] = TRUE;
    $this->email->initialize($mail_config);
    $this->email->set_newline("\r\n");
    
    $this->email->from('noreplay@blissnova.online', 'blissnova');
    $this->email->reply_to('noreplay@blissnova.online', 'blissnova');
    $this->email->to('novelxajith@gmail.com');
    $this->email->subject('blissnova Email OTP');
    $this->email->message("hai");
    //$this->email->message("ytfbg u gh uhuiyjg uj");
    if($this->email->send()){
    echo "send";
} else {
    echo $this->email->print_debugger();
}
  }
  
      public function announcement($id="")
{
      if($this->data =='')
     redirect('user','refresh');
     
    
    $new = $this->db->where('id', $id)->get('announcement')->row_array();

    $user_id = $this->session->userdata('ublisusername');
    $username = $this->db->where('id', $id)->get('announcement')->row()->viewed_username;

    $existingUsernames = explode("~", $username);

    if (!in_array($user_id, $existingUsernames)) {
        $updatedUsernames = empty($username) ? $user_id : $username . "~" . $user_id;
        $data = array(
            'viewed_username' => $updatedUsernames,
            'is_read' => 1,
            
        );
        $this->db->where('id', $id)->update('announcement', $data);
    }
    
    $data['message'] = $new;
    $this->load->view('user/announcement', $data);
}
        
   
        
// public function announcement(){
    
//     if($this->data =='')
//      redirect('user','refresh');
     
//      $this->load->view('user/announcement');
// }  

public function team_incentive(){
    
    if($this->data =='')
     redirect('user','refresh');
     
     $this->load->view('user/team_incentive');
}  

public function affiliate_incentive(){
    
    if($this->data =='')
     redirect('user','refresh');
     
     $this->load->view('user/affiliate_incentive');
}  


public function view_more_announce(){
    
    if($this->data =='')
     redirect('user','refresh');
     
     $this->load->view('user/view_more_announce');
}  

public function bliss_verification(){
    
    if($this->data =='')
     redirect('user','refresh');
     
     $this->load->view('user/bliss_verification');
}  


public function bliss_accept($id)
  {
      if($this->data =='')
       redirect('user','refresh');
     
        $approve = $this->staff->blisser_approve_request($id);

        if($approve){
          $this->session->set_flashdata('approve_message',"Request Approved Successfuly");
          redirect('user/bliss_verification','refresh');
        } else {
          $this->session->set_flashdata('approve_message',"Please Try Again");
          redirect('user/bliss_verification','refresh');
        }

  }
    
 public function bliss_reject($id)
  {
       if($this->data =='')
       redirect('user','refresh');
                        
        $reason = $this->input->get('reason');
        $reject = $this->staff->blisser_reject_request($id,$reason);

        if($reject){
          $this->session->set_flashdata('reject_message',"Request Rejected Successfully");
          redirect('user/bliss_verification','refresh');
        } else {
          $this->session->set_flashdata('reject_message',"Please Try Again");
          redirect('user/bliss_verification','refresh');
        }

  }

public function onclickupdate()
{
    if($this->data =='')
     redirect('user','refresh');
  // Retrieve the cropped image data from the request
  $imageData = $_POST['image'];

  $randname=$this->generateRandomString();
  $image_name = time() . '-' . $randname . '.jpg';
  
  $filename = 'assets/images/' . $image_name;

  // Decode the base64 image data and save it to a file
  $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData));
  file_put_contents($filename, $decodedImageData);

  // Update the user_role table with the image filename
  $proleft = $this->db->where('ref_id', $this->session->userdata('ublisusername'))
                      ->where('position', 'left')
                      ->where('user_type', 'sub')
                      ->get('user_role')
                      ->row_array();

  $proright = $this->db->where('ref_id', $this->session->userdata('ublisusername'))
                       ->where('position', 'right')
                       ->where('user_type', 'sub')
                       ->get('user_role')
                       ->row_array();

  // Prepare the data to update in the user_role table
  $pict = array($this->session->userdata('ublisusername'), $proleft['username'], $proright['username']);
  $data['profile_image'] = $image_name;

  $this->db->where_in('username', $pict);
  $this->db->update('user_role', $data);

  // Prepare the response
  $response = ['success' => true];
  header('Content-Type: application/json');
  echo json_encode($response);
}

public function generateRandomString($length = 5) {
    // Define the characters that can be used in the random string
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    // Initialize an empty string to store the random string
    $randomString = '';

    // Get the total number of characters in the character set
    $charCount = strlen($characters);

    // Generate the random string
    for ($i = 0; $i < $length; $i++) {
        // Use the random function to select a character from the set
        $randomString .= $characters[rand(0, $charCount - 1)];
    }

    return $randomString;
}


 public function pan_upload()
{
    if($this->data =='')
     redirect('user','refresh');
     
    if (isset($_FILES["pan_upload"]["name"])) {
        $config['upload_path'] = 'assets/images/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['overwrite'] = false;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('pan_upload')) {
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            echo $data["file_name"];
        }
    }
}




 public function aadhar_upload()
{
    if($this->data =='')
     redirect('user','refresh');
     
    if (isset($_FILES["aadhar_upload"]["name"])) {
        $config['upload_path'] = 'assets/kyc/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['overwrite'] = false;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('aadhar_upload')) {
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            echo $data["file_name"];
        }
    }
}


    public function index()
  {  
      if($this->data==''){
        //   log_message('error','ggggggggggggggggg');
      $this->load->view('user/index');
    }else{
        // log_message('error','hhhhhhhhhhhhhhhhhhhhhh');
         $data['page_name'] = "dashboard";
       $this->load->view('user/dashboard',$data);
     }
      
    } 
 
  public function login()
  {
    if($_POST){
      $username= $this->input->post('login_id');
      $password= $this->input->post('password');
      $check= $this->admin->login($username,$password);

      if($check != false){
        $this->session->set_userdata('ublisusername',$check['username']);
        $this->session->set_userdata('ublisemail',$check['email']);
        $this->session->set_userdata('ublisusertype',$check['user_type']);
        $this->session->set_userdata('ublissession',$check['session_id']);
        $this->session->set_flashdata('success_message',"Welcome To Blisser");
        redirect('user/index','refresh');

   
      }else {
        $this->session->set_flashdata('error_message',"Please enter valid details");
        redirect('user/index','refresh');
      }
    }else{
        $this->session->set_flashdata('error_message',"Please enter valid details");
        redirect('user/index','refresh');
    }  
  
}

     public function chat()
  {  
      if($this->data =='')
     redirect('user','refresh');
 
     $data['status']='read';
     $this->db->where('receiver_id',$this->session->userdata('ublisusername'))->update('chat_messages',$data);
         
     $data['page_name'] = "chat";
      $this->load->view('user/chat',$data);
    }
       
 public function send_message()
{

    if($this->data =='')
     redirect('user','refresh');

      $sender_id = $this->input->post('sender');
      $receiver_id = $this->input->post('receiver');
      $message = $this->input->post('message');
      $this->admin->save_message();

     redirect('user/chat');

     
}  

   public function team_management($select_parentid = '',$wing="")
{
    if($this->data =='')
     redirect('user','refresh');
			
    if ($select_parentid != '') {
			$data['sponsor'] = $this->admin->get_row_data('user_role','username',$select_parentid);
			$data['share'] = $select_parentid;
		} else {
			$data['sponsor'] = $this->db->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row_array();
			$data['share'] = $this->session->userdata('ublisusername');
		}
      $data['page_name'] = "team_management";
      $data['user'] = $select_parentid;
      $data['wing'] = $wing;
      $this->load->view('user/team_management',$data);
    }
    
       public function team_management_old($select_parentid = '',$wing="")
{
    if($this->data =='')
     redirect('user','refresh');
			
    if ($select_parentid != '') {
			$data['sponsor'] = $this->admin->get_row_data('user_role','username',$select_parentid);
			$data['share'] = $select_parentid;
		} else {
			$data['sponsor'] = $this->db->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row_array();
			$data['share'] = $this->session->userdata('ublisusername');
		}
      $data['page_name'] = "team_management_old";
      $data['user'] = $select_parentid;
      $data['wing'] = $wing;
      $this->load->view('user/team_management_old',$data);
    }

  
 public function register($ref="")
    {
      //echo $this->input->post('ref_id');
        $data['ref'] =$this->input->post('ref_id');
        $data['position'] =$this->input->post('position');
       
        if($_POST) {
            //  log_message('error', $this->input->post('ref_id'), 'ref_id');
            //  log_message('error', $this->input->post('position'), 'position');
            //   log_message('error', $this->input->post('first_name'), 'first_name');
            //  log_message('error', $this->input->post('last_name'), 'last_name');
            //  log_message('error', $this->input->post('mobile'), 'mobile');
            //  log_message('error', $this->input->post('email'), 'email');
            //  log_message('error', $this->input->post('address1'), 'address1');
            //  log_message('error', $this->input->post('address2'), 'address2');
            //  log_message('error', $this->input->post('city'), 'city');
            //  log_message('error', $this->input->post('district'), 'district');
            //  log_message('error', $this->input->post('state'), 'state');
            //  log_message('error', $this->input->post('pincode'), 'pincode');
            //  log_message('error', $this->input->post('employment'), 'employment');
             
            
                     $this->form_validation->set_rules('position', 'Position', 'trim|required');
                     $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
                    // $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
                     $this->form_validation->set_rules('ref_id', 'Ref ID', 'trim|required');
                      $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|callback_mobilecheck');
                      $this->form_validation->set_rules('email', 'Email', 'trim|required|callback_emailcheck');
                     $this->form_validation->set_rules('address1', 'Address', 'trim|required');
                     $this->form_validation->set_rules('address2', 'Address', 'trim|required');
                     $this->form_validation->set_rules('city', 'City', 'trim|required');
                     $this->form_validation->set_rules('district', 'District', 'trim|required');
                     $this->form_validation->set_rules('state', 'State', 'trim|required');
                     $this->form_validation->set_rules('pincode', 'Pincode', 'trim|required');
                     $this->form_validation->set_rules('employment', 'Employment', 'trim|required');
                  
                     
                    
                        if($this->form_validation->run()==true)
                        {
                            $result = $this->admin->register_manage();
                		     $dataemail['user']=$result[1];
                	         $dataemail['pass']=$result[2];
                             $dataemail['email']=$result[3];
                             $dataemail['first']=$result[4];
                             $dataemail['last']=$result[5];
            	         
                			if($result[0] == 'true') 
                			{
                				$this->load->view('user/registrationsucesspage',$dataemail);
                		 	    $this->testt($dataemail);
                			}else{
                			        $this->session->set_flashdata('error_message', 'check your details');
                                    redirect('user/register/'.$data['ref'],'refresh');
                				} 
                        }else{
                                 $this->session->set_flashdata('error_message', ' Please Check Your Details');
                                 $this->load->view('user/registration',$data);
                             }
                    }else{
                        //   $data['position']=$position;
                            $data['ref']=$ref;
                            $this->load->view('user/registration',$data);
                        } 
    }   
    
    
    public function testt($dataemail=""){
      
        $this->load->library('email');
        
        $mail_config['smtp_host'] = 'smtp.hostinger.com';
        $mail_config['smtp_port'] = '587';
        $mail_config['smtp_user'] = 'noreplay@blissnova.online';
        $mail_config['_smtp_auth'] = TRUE;
        $mail_config['smtp_pass'] = 'Noreplay@123';
        $mail_config['smtp_crypto'] = 'tls';
        $mail_config['protocol'] = "mail";
        $mail_config['mailtype'] = 'html';
        $mail_config['send_multipart'] = FALSE;
        $mail_config['charset'] = 'utf-8';
        $mail_config['wordwrap'] = TRUE;
        $this->email->initialize($mail_config);
        $this->email->set_newline("\r\n");
        
        $this->email->from('noreplay@blissnova.online', 'Blissnova');
        $this->email->reply_to('noreplay@blissnova.online', 'Blissnova');
        $this->email->to($dataemail['email']);
        $this->email->subject('Blissnova - Registration Success');
        $this->email->message($this->load->view('user/success_mail',$dataemail,true));
        $this->email->send();
        
        return true;
  }
  
    
    public function get_user_data() {
        
    $username = $this->input->post('username');
      
      $left_user = $this->db->select('username')->where('ref_id', $username)->where('user_type','sub')->where('position','left')->get('user_role')->row()->username;
      $right_user = $this->db->select('username')->where('ref_id', $username)->where('user_type','sub')->where('position','right')->get('user_role')->row()->username;
      $name = $this->db->select('first_name')->where('username', $username)->get('user_role')->row()->first_name;
      
      if ($left_user && $right_user) {
        $response = array(
          'left_user' => $left_user,
          'right_user' => $right_user,
          'name' => $name,
        );
        echo json_encode($response);
      }else{
          $response = array(
          'left_user' => '',
          'right_user' => '',
          'name' => '',
        );
           echo json_encode($response);
      }
    }

  public function get_user_wing() {
      
     
        
      $username = $this->input->post('username');
      
      $left_user = $this->db->select('username')->where('ref_id', $username)->where('user_type','sub')->where('position','left')->get('user_role')->row()->username;
      $right_user = $this->db->select('username')->where('ref_id', $username)->where('user_type','sub')->where('position','right')->get('user_role')->row()->username;
      $name = $this->db->select('first_name')->where('username', $username)->get('user_role')->row()->first_name;
      
      if ($left_user && $right_user) {
        $response = array(
          'left_user' => $left_user,
          'right_user' => $right_user,
          'name' => $name,
        );
        echo json_encode($response);
      }
}

public function check_username()
{
    
     
    $username = $this->input->post('username');

     $result = $this->db->select('username')->where('username', $username)->where_in('user_type', array('a', 'u'))->get('user_role')->row();

    if ($result) {
        // username found
        echo json_encode(array('status' => 'success'));
    } else {
        // username not found
        echo json_encode(array('status' => 'error'));
    }
}

public function check_email()
{
   
    
    $email = $this->input->post('email');

     $result = $this->db->select('email')->where('email', $email)->where_in('user_type', array('a', 'u'))->get('user_role')->row();

    if ($result) {
        // username found
        echo json_encode(array('status' => 'error'));
    } else {
        // username not found
        echo json_encode(array('status' => 'success'));
    }
}


public function mobile_check()
{
    
    
    $mobile = $this->input->post('mobile');

     $result = $this->db->select('mobile')->where('mobile', $mobile)->where_in('user_type', array('a', 'u'))->get('user_role')->row();

    if ($result) {
        // username found
        echo json_encode(array('status' => 'error'));
    } else {
        // username not found
        echo json_encode(array('status' => 'success'));
    }
}




     
 public function emailcheck()
  {

    $regmailcheck = $this->db->where('email',$this->input->post('email'))->count_all_results('user_role')+0;

    if ($regmailcheck > 0)
    {
      $this->form_validation->set_message('emailcheck','Email already Exist');
      return FALSE;    
    }
    else
    {

      log_message('error', 'mobile');
      return TRUE;
    }

  }
  
   public function mobilecheck()
  {

    $mobcheck = $this->db->where('mobile',$this->input->post('mobile'))->count_all_results('user_role')+0;

    if ($mobcheck > 0)
    {
      $this->form_validation->set_message('mobilecheck','Mobile No already Exist');
      return FALSE;    
    }
    else
    {

      log_message('error', 'mobile');
      return TRUE;
    }

  }  
  
 
 
//   public function test($dataemail=""){
     
//     $this->load->library('email');
//     $config = array();
//     $config['mailtype'] = 'html';
//     $this->email->initialize($config);
//     $this->email->set_newline("\r\n");
//     $this->email->from('noreplay@demo-web-site.com', 'bliss');
//     $this->email->reply_to('noreplay@demo-web-site.com', 'bliss');
//     $this->email->to('novelxajith@gmail.com');
//     $this->email->subject("bliss - Welcome Message");
//     //$this->email->message("<b>g jsdvdbjdf bjnfdm</b>");  
//     $this->email->message($this->load->view('user/registrationsucesspage',$dataemail,true));
//     if($this->email->send()){
//         echo "send";
//     } 
//     else {
//          echo $this->email->print_debugger();
//     } 


      
//   }
 
public function reset_password()
  {
     if($this->data =='')
     redirect('user','refresh');

    if($_POST){

      $this->form_validation->set_rules('oldpass','Old password','trim|required|callback_checkoldpass');
      $this->form_validation->set_rules('newpass', 'New Password', 'trim|required|min_length[6]');
      $this->form_validation->set_rules('conpass','Confirm Password','trim|required|matches[newpass]');

      if($this->form_validation->run()==true){

        $passwordreset = $this->admin->update_password();

        if($passwordreset){
        //   log_message('error','hai');
        //   $this->session->set_userdata('ublisusername','');
        //   $this->session->set_userdata('ublisemail','');
        //   $this->session->set_userdata('ublisusertype','');
        //   $this->session->set_userdata('ublissession','');

          $this->session->set_flashdata('success_message', "password change successfully");
          // redirect('user/index','refresh');
          $this->logout_all_devices();
        }

        else{   
        //   log_message('error','ll');
          $this->session->set_flashdata('error_message' , "Failed");
          redirect('user/reset_password','refresh');
        }

      }else{
        // log_message('error','oo');
        $this->session->set_flashdata('old_Form_Error' , "old password is incorrect");
         $data['page_name'] = "dashboard_reset_password";
        $this->load->view('user/dashboard_reset_password',$data);
      }

    }
    else{  
    //   log_message('error','pp');
      $data['page_name'] = "dashboard_reset_password";
      $this->load->view('user/dashboard_reset_password',$data);
    }

  }
  



  public function checkoldpass()
  {
    
     
    $passcheck = $this->db->where('username',$this->session->userdata('ublisusername'))->where('pwd_hint',$this->input->post('oldpass'))->from('user_role')->count_all_results()+0;

    if ($passcheck == 1)
    {
      return TRUE;    
    }
    else
    {
      $this->form_validation->set_message('checkoldpass','Old Password Incorrect');
      return FALSE;
    }

  }
public function logout_all_devices() {
    
    

    $user_id = $this->session->userdata('ublisusername');
    $data['session_id'] = '';
    $this->db->where('username',$user_id);
    $this->db->update('user_role',$data);
    
    $last=$this->db->where('username', $user_id)->get('user_role')->row_array();
    $this->db->where('username', $user_id)->update('user_role', array('logout_date_last' => $last['logout_date']));
    
    $this->db->where('username', $user_id)->update('user_role', array('logout_date' => date('Y-m-d H:i:s')));
    
    $this->session->set_userdata('ublissession',''); 
    $this->session->sess_destroy();
    
    redirect('user/index','refresh'); // redirect to your login page
}

//forget password// 
public function forgetpassword()
    {
       $mail=bin2hex($this->input->post('email'));
       $user=$this->input->post('username');
       
       if($_POST){
           
      $this->form_validation->set_rules('email','Email','trim|required|callback_checkemail');
      $this->form_validation->set_rules('username','User ID','trim|required|callback_checkuser');
     
      if($this->form_validation->run()==true){
         
        $this->send_otp($mail);
        $this->email_verify($mail,$user);

              }else{
             $data['page_name'] = "forgetpassword";
             $this->load->view('user/forgetpassword',$data);
        }

       }else{    
            $data['page_name'] = "forgetpassword";
            $this->load->view('user/forgetpassword',$data);
       }
    }
    
public function checkemail()
  {

   $mailcheck = $this->db->where('username',$this->input->post('username'))->where('email',$this->input->post('email'))->get('user_role')->row_array();

    if(!empty($mailcheck))
    {
      return TRUE;    
    }
    else
    {
      $this->form_validation->set_message('checkemail','Incorrect email');
      return FALSE;
    }

  }
 
 public function checkuser()
  {

    $usercheck = $this->db->where('username',$this->input->post('username'))->from('user_role')->count_all_results()+0;

    if ($usercheck == 1)
    {
      return TRUE;    
    }
    else
    {
      $this->form_validation->set_message('checkuser','User ID not found');
      return FALSE;
    }

  }
    


//  public function send_otp($mail){
//       $dataemail=hex2bin($mail);
//             $otp=rand(00001,999999);
//             $data['otp']=$otp;
//             $this->db->where('email',$dataemail);
//             $this->db->update('user_role',$data);
            
//       $this->load->library('email');
//     $config['protocol']='smtp';
//     $config['smtp_host']='smtp.hostinger.com';
//     $config['smtp_port']=465;
//     $config['smtp_timeout']='30';
//     $config['smtp_user']='noreplay@blissnova.online';
//     $config['smtp_pass']='Noreplay@123';
//     $config['charset']='utf-8';
//     $config['newline']="\r\n";
//     $config['wordwrap'] = TRUE;
//     $config['mailtype'] = 'html';
//     $this->email->initialize($config);
//     $this->email->from('noreplay@blissnova.online', 'blissnova');
//     $this->email->reply_to('noreplay@blissnova.online', 'blissnova');
//     $this->email->to($dataemail);
//     $this->email->subject('Forget Password OTP');
//     $this->email->message($this->load->view('user/success',$data,true));
//     //$this->email->message("ytfbg u gh uhuiyjg uj");
//     if($this->email->send()){
//     //echo "send";
// } else {
//   // echo $this->email->print_debugger();
// }
// return true;
//   }
  
   public function send_otp($mail=""){
       
        $dataemail=hex2bin($mail);
        $otp=rand(00001,999999);
        $data['otp']=$otp;
        $this->db->where('email',$dataemail);
        $this->db->update('user_role',$data);
      
        $this->load->library('email');
        
        $mail_config['smtp_host'] = 'smtp.hostinger.com';
        $mail_config['smtp_port'] = '587';
        $mail_config['smtp_user'] = 'noreplay@blissnova.online';
        $mail_config['_smtp_auth'] = TRUE;
        $mail_config['smtp_pass'] = 'Noreplay@123';
        $mail_config['smtp_crypto'] = 'tls';
        $mail_config['protocol'] = "mail";
        $mail_config['mailtype'] = 'html';
        $mail_config['send_multipart'] = FALSE;
        $mail_config['charset'] = 'utf-8';
        $mail_config['wordwrap'] = TRUE;
        $this->email->initialize($mail_config);
        $this->email->set_newline("\r\n");
        
        $this->email->from('noreplay@blissnova.online', 'Blissnova');
        $this->email->reply_to('noreplay@blissnova.online', 'Blissnova');
        $this->email->to($dataemail);
        $this->email->subject('Blissnova- Forgot Password OTP');
        $this->email->message($this->load->view('user/success',$data,true));
        $this->email->send();
        
        return true;
  }

public function email_verify($mail='',$user='')
    {   
        $data['email']=hex2bin($mail);
        $data['username']=$user;
        $this->load->view('user/email_verify',$data);
      }
      
 public function otp_check()
	{
	    $count = $this->db->where('username',$this->input->post('username'))->where('otp',$this->input->post('otp'))->get('user_role')->row_array();
    	
	   if(!empty($count))
	   {
	      $this->send_resetpage($this->input->post('email'),$this->input->post('username'));
	   }
	   else
	   {
	      $this->form_validation->set_message('otp_check', 'OTP not valid');
	      redirect('user/email_verify','refresh');
	   }
	}



// public function send_resetpage($email,$username){
    
//     $data['username'] = $username;
//     $this->load->library('email');
//     $config['protocol']='smtp';
//     $config['smtp_host']='smtp.hostinger.com';
//     $config['smtp_port']=465;
//     $config['smtp_timeout']='30';
//     $config['smtp_user']='noreplay@blissnova.online';
//     $config['smtp_pass']='Noreplay@123';
//     $config['charset']='utf-8';
//     $config['newline']="\r\n";
//     $config['wordwrap'] = TRUE;
//     $config['mailtype'] = 'html';
//     $this->email->initialize($config);
//     $this->email->from('noreplay@blissnova.online', 'Blissnova');
//     $this->email->reply_to('noreplay@blissnova.online', 'Blissnova');
//     $this->email->to($email);
//     $this->email->subject('BlissNova - Reset Password');
//     $this->email->message($this->load->view('user/reset', $data, true));
    
//     if($this->email->send()){
//       // echo "send";
//     } else {
//       // echo $this->email->print_debugger();
//     }
//   }
  
  public function send_resetpage($email="",$username=""){
       
        $data['username'] = $username;
        
        $this->load->library('email');
        $mail_config['smtp_host'] = 'smtp.hostinger.com';
        $mail_config['smtp_port'] = '587';
        $mail_config['smtp_user'] = 'noreplay@blissnova.online';
        $mail_config['_smtp_auth'] = TRUE;
        $mail_config['smtp_pass'] = 'Noreplay@123';
        $mail_config['smtp_crypto'] = 'tls';
        $mail_config['protocol'] = "mail";
        $mail_config['mailtype'] = 'html';
        $mail_config['send_multipart'] = FALSE;
        $mail_config['charset'] = 'utf-8';
        $mail_config['wordwrap'] = TRUE;
        $this->email->initialize($mail_config);
        $this->email->set_newline("\r\n");
        
        $this->email->from('noreplay@blissnova.online', 'Blissnova');
        $this->email->reply_to('noreplay@blissnova.online', 'Blissnova');
        $this->email->to($email);
        $this->email->subject('BlissNova - Reset Password');
        $this->email->message($this->load->view('user/reset', $data, true));
        $this->email->send();
        
        return true;
  }
  
 
 public function verify_password()

    {
        if($_POST)
	    { 
	      $this->form_validation->set_rules('username', 'Username', 'trim|required');
	      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
	    //  $this->form_validation->set_rules('password', 'Password', 'trim|required|regex_match[/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}$/]');
          $this->form_validation->set_rules('confirm_password', 'Confirm password','required|matches[password]');
          
          if($this->form_validation->run()==true) 
          {
              $this->db->set('pwd',sha1($this->input->post('password')));
              $this->db->set('pwd_hint',$this->input->post('password'));
              $this->db->where('username',$this->input->post('username'));
              $pass = $this->db->update('user_role');
              
               $notification2 = [
                            "username" => $this->input->post('username'),
                            "status" => "New",
                            "image" => "thumbs-up.png",
                            "remark" => "Password Reset Successfully",
                            "entry_date" => date("Y-m-d H:i:s"),
                        ];
                        $this->db->insert("notifications", $notification2);
              
              if($pass)
              {
                  //log_message('error','qq');
                  $this->session->set_flashdata('success_message','Password changed successfully');
                //   redirect('user','refresh');
                  $this->logout_all_devices();
              }
              else
              {
                 // log_message('error','ww');
                  $this->session->set_flashdata('error_message','Something went wrong, Password not changed');
                  redirect('user/reset_passwordd','refresh');
              }
              
          }
          else
          {
              log_message('error','ee');
              $this->load->view('user/reset_password');
          }
           
	    }
	    else
	    {
	        log_message('error','rr');
		$this->load->view('user/reset_password');
	    }
    }
    
  public function fetch_products()
  {
    $products = $this->db->order_by('id','DESC')->get('products')->result_array();

    $json_response = json_encode($products);
	echo $json_response;
  }
  
  public function fetch_main($mname="")
  {
    $products = $this->db->order_by('id','DESC')->where('main_category',$mname)->get('products')->result_array();

    $json_response = json_encode($products);
	echo $json_response;
  }
  
  public function fetch_main_categories()
  {
    $products = $this->db->group_by('main_category')->get('products')->result_array();

    $json_response = json_encode($products);
	echo $json_response;
  }
    
  public function reset_passwordd($username)
    {   
        $data['user']=$username;
        $this->load->view('user/reset_password',$data);
      }  
//forget password end// 

//pin request//      
public function  pinrequest()      
  {
     if($this->data =='')
     redirect('user','refresh');

    if($_POST){
       $config = array(
        'name'=>time(),    
        'upload_path' => "assets/reciept",
        'allowed_types' => 'gif|jpg|png|jpeg|pdf',
        'overwrite' => false,
        'max_size' => "3074000" 
      );

      $this->load->library('upload', $config);
      if($this->upload->do_upload('userfile'))
      {
        $data = array('upload_data' => $this->upload->data());
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|numeric|greater_than_equal_to[1]|callback_check_payable_amount');
        $this->form_validation->set_rules('ref', 'Reference Number', 'trim|required|callback_checkref');

        if($this->form_validation->run()==true){

          if($this->admin->investment_manage($this->upload->data()['file_name'])){

            $this->session->set_flashdata('success_message', 'Investment Requested Submited Successfully');
            redirect('user/pinrequest','refresh');
          }else{

            $this->session->set_flashdata('error_message', 'check your details');
            redirect('user/pinrequest','refresh');
          } 
        }else{

          $this->session->set_flashdata('error_message', ' Please Check Your Details');
          $this->load->view('user/pinrequest');
        }

      }else{

        $this->session->set_flashdata('error_message', $this->upload->display_errors());
        redirect('user/pinrequest','refresh');

      }
    }else{

      $data['page_name'] = "pinrequest";
      $this->load->view('user/pinrequest',$data);
    } 
  }
  
  public function check_payable_amount()
  { log_message('error',"wywttywrtw");
  if($this->data =='')
     redirect('user','refresh');
    
    if($this->input->post('pack')==1100){
        
      $am = $this->input->post('pack') * $this->input->post('count');
      $gst = 0.18 * $am;
      $fin = $am + $gst;
      
      log_message('error',$am);
      log_message('error',$gst);
     log_message('error',$fin);
      if($fin == $this->input->post('amount')){
           return true; 
      }else{
         $this->form_validation->set_message('check_payable_amount', 'Please Check your Details');
      $this->session->set_flashdata('check_payable_amount', ' Please Check your Details');
      return false;  
      }
    }
    
    
    if($this->input->post('pack')==10000){
    
      $amoun= $this->input->post('pack') * $this->input->post('count');
     
      log_message('error',$amoun);
     
      
      if($amoun==$this->input->post('amount')){
          return true; 
      }else{
          $this->form_validation->set_message('check_payable_amount', 'Please Check your Details');
      $this->session->set_flashdata('check_payable_amount', ' Please Check your Details');
      return false;   
      }
    }
     
   
  }
  
    public function investment()      
  {
    if($this->data =='')
     redirect('user','refresh');

    if($_POST){
      $config = array(
        'name'=>time(),    
        'upload_path' => "assets/receipt",
        'allowed_types' => 'gif|jpg|png|jpeg|pdf',
        'overwrite' => false,
        'max_size' => "3074000" 
      );

      $this->load->library('upload', $config);
      if($this->upload->do_upload('userfile')){
        $data = array('upload_data' => $this->upload->data());
        $this->form_validation->set_rules('amount', 'Amount', 'trim|required|numeric|greater_than_equal_to[1]');
        $this->form_validation->set_rules('ref', 'Reference Number', 'trim|required|callback_checkref');

        if($this->form_validation->run()==true){

          if($this->admin->investment_manage($this->upload->data()['file_name'])){

            $this->session->set_flashdata('success_message', 'Investment Requested Submited Successfully');
            redirect('user/pinrequest','refresh');
          }else{

            $this->session->set_flashdata('error_message', 'check your details');
            redirect('user/pinrequest','refresh');
          } 
        }else{

          $this->session->set_flashdata('error_message', ' Please Check Your Details');
          $this->load->view('user/pinrequest');
        }

      }else{

        $this->session->set_flashdata('error_message', $this->upload->display_errors());
        redirect('user/pinrequest','refresh');

      }
    }else{

      $data['page_name'] = "pinrequest";
      $this->load->view('user/pinrequest',$data);
    } 
  }

  public function checkref()
  {
      if($this->data =='')
     redirect('user','refresh');
      
    if($this->db->where('ref',$this->input->post('ref'))->count_all_results('investment')+0 > 0){
        
       $this->form_validation->set_message('checkref', 'Reference Number Already Used');
       $this->session->set_flashdata('checkref', ' Reference Number Already Used');
      return false;
    } else {
      return true;
    }
  }

// public function bank()
// {   
//     if($this->data =='')
//     redirect('user','refresh');
     
//   if($_POST)
// 	    { 
// 	       $count=$this->db->where('username',$this->session->userdata('ublisusername'))->count_all_results('bank')+0;
// 	       if($count<5){
// 	      $this->form_validation->set_rules('ac_name', 'Name', 'trim|required');
// 	      $this->form_validation->set_rules('ac_no', 'Ac No', 'trim|required');
//           $this->form_validation->set_rules('ac_ifsc', 'Ifsc','required');
//           $this->form_validation->set_rules('ac_bank', 'Bankname', 'trim|required');
          
//           if($this->form_validation->run()==true) 
//           {
//              $result = $this->admin->update_bank();
               
//              if($result[0]=='true')
//               {
//                   log_message('error','qq');
//                   $this->session->set_flashdata('success_message','Details updated successfully');
//                   redirect('user/bank','refresh');
//               }
//               else
//               {
//                   log_message('error','ww');
//                   $this->session->set_flashdata('error_message','Something went wrong, Details not updated');
//                   redirect('user/bank','refresh');
//               }
              
//           }else{
//               $this->session->set_flashdata('error_message','Something went wrong, Reached maximum limit');
//                   redirect('user/bank','refresh');
//           }
// 	       }
//           else
//           {
//               $this->session->set_flashdata('error_message','Something went wrong, Reached maximum limit');
//                   redirect('user/bank','refresh');
//           }
           
// 	    }
// 	    else
// 	    {
     
//             $this->load->view('user/bank');
//           }
          
// }


public function bank()
{
    if ($this->data == '') {
        redirect('user', 'refresh');
    }

    if ($_POST) {
        $count = $this->db->where('username', $this->session->userdata('ublisusername'))->count_all_results('bank') + 0;
        if ($count < 5) {
            $this->form_validation->set_rules('ac_name', 'Name', 'trim|required');
            $this->form_validation->set_rules('ac_no', 'Account Number', 'trim|required|numeric');
            $this->form_validation->set_rules('ac_ifsc', 'Ifsc', 'required');
            $this->form_validation->set_rules('ac_bank', 'Bankname', 'trim|required');
            $this->form_validation->set_rules('ac_branchname', 'Branch', 'trim|required');

            // Add form validation rule for the image
            $this->form_validation->set_rules('user_image', 'Passbook Image', 'callback_validate_image');

            if ($this->form_validation->run() == true) {
                // Upload the image
                $image_path = $this->upload_image();

                // Check if image upload was successful
                 if ($image_path !== false) {
                    $result = $this->admin->update_bank($image_path);

                    if ($result == 'true') {
                        $this->session->set_flashdata('success_message', 'Details updated successfully');
                        redirect('user/bank', 'refresh');
                    } else {
                        $this->session->set_flashdata('error_message', 'Something went wrong, Details not updated');
                        redirect('user/bank', 'refresh');
                    }
                } else {
                    $this->session->set_flashdata('error_message', 'Please Upload Your Passbook');
                    redirect('user/bank', 'refresh');
                }
            } else {
                $this->session->set_flashdata('error_message', 'Please Check Your Details & Try again');
                $this->load->view('user/bank');
            }
        } else {
            $this->session->set_flashdata('error_message', 'Reached maximum limit');
            redirect('user/bank', 'refresh');
        }
    } else {
        $this->load->view('user/bank');
    }
}

public function validate_image()
{
    if($this->data =='')
     redirect('user','refresh');
    
    if (!empty($_FILES['user_image']['name'])) {
        $file_extension = strtolower(pathinfo($_FILES['user_image']['name'], PATHINFO_EXTENSION));
        $allowed_types = array('jpg', 'jpeg', 'png');

        if (!in_array($file_extension, $allowed_types)) {
            $this->form_validation->set_message('validate_image', 'Invalid image format. Allowed formats are JPG, JPEG, and PNG.');
            return false;
        }
    }

    return true;
}




private function upload_image()
{
    if($this->data =='')
     redirect('user','refresh');
    
    $config['upload_path'] = 'assets/passbook/';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = 2048; // 2MB max file size
    $config['file_name'] = $this->session->userdata('ublisusername') . '_' . time();

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('user_image')) {
        $data = $this->upload->data();
        $image_path = $data['file_name'];
        return $image_path;
    } else {
        return false;
    }
}




public function delete_bank($id="")
{  
    if($this->data =='')
     redirect('user','refresh');
  
     $delete=$this->admin->bank_delete($id);
     redirect('user/bank','refresh');
    }

public function bank_active($id)
{  
    if($this->data =='')
     redirect('user','refresh');
    
    $result=$this->admin->active_bank($id);
     redirect('user/bank','refresh');
    }

public function get_name() {
    $username = $this->input->post('username');
    $name = $this->db->select('first_name')->where('user_type','u')->where('username',$username)->get('user_role')->row()->first_name;
    echo json_encode($name);
  }
  
public function pincheck() {
    $pin = $this->input->post('ref');
    $count = $this->db->where('ref', $pin)->count_all_results('investment');
    $response = ($count > 0) ? 'Invalid Transaction Id' : 'Transaction Id available';
    echo json_encode($response);
}

  
  public function user_profile()
{   
    if($this->data =='')
    redirect('user','refresh');

     
   if($_POST)

	    { 
        $mobile = $this->input->post('mobile');
        $email = $this->input->post('email');
        $userid = $this->session->userdata('ublisusername');
        
        $checkdates = $this->db->select('entry_date')->where('username', $userid)->get('user_role')->row()->entry_date;
        $joindateformat = date('Y-m-d', strtotime($checkdates));
        $today = date('Y-m-d H:i:s');
        
        $checkdatesObj = new DateTime($checkdates);
        $todayObj = new DateTime($today);
        $interval = $checkdatesObj->diff($todayObj);
        
        // Access interval properties if needed
        $daysDiff = $interval->days;
        $hoursDiff = $interval->h;
        $minutesDiff = $interval->i;
        $secondsDiff = $interval->s;

	      
	      log_message('error',$joindateformat."entrydate");
	      log_message('error',$today."todaydate");
	      log_message('error',$daysDiff."difference");
	      
	      if($daysDiff >= 5){
	          
	             $this->session->set_flashdata('error_message',"You can't update your data" );
                 redirect('user/user_profile','refresh');
	      }else{

             $result = $this->admin->update_profile($userid);
               
             if($result[0]=='true')
              {
                  
                  $this->session->set_flashdata('success_message','Details updated successfully');
                  redirect('user/user_profile','refresh');
              }
              else
              {
                
                  $this->session->set_flashdata('error_message','Something went wrong, Details not updated');
                  redirect('user/user_profile','refresh');
              }
	      }
              
       
	    }
	    else
	    {
            
            $this->load->view('user/user_profile');
          }
          
}

// public function  kyccc()      
//   {
//      if($this->data =='')
//      redirect('user','refresh');

//     if($_POST){

//         $this->form_validation->set_rules('aadhar', 'Aadhar No', 'trim|required|numeric|max_length[12]');
//         $this->form_validation->set_rules('pan', 'Pan No', 'trim|required|max_length[10]');
//         $this->form_validation->set_rules('userfile', 'PAN', 'trim|required');
//         $this->form_validation->set_rules('aadhar_image', 'Aadhar', 'trim|required');
        

//         if($this->form_validation->run()==true){

//           if($this->admin->kyc_update()){

//             $this->session->set_flashdata('success_message', 'Kyc details updated Successfully');
//             redirect('user/kyc','refresh');
//           }else{

//             $this->session->set_flashdata('error_message', 'check your details');
//             redirect('user/kyc','refresh');
//           } 
//         }else{

//           $this->session->set_flashdata('error_message', ' Please Check Your Details');
//           $this->load->view('user/kyc');
//         }

      
//     }else{

//       $data['page_name'] = "kyc";
//       $this->load->view('user/kyc',$data);
//     } 
//   }  
  
  
   public function kyc()
  {
    
     if($this->data =='')
     redirect('user','refresh');
     
       if($_POST){
         
        $this->form_validation->set_rules('aadhar', 'Aadhar No', 'trim|required|numeric|max_length[12]');
        $this->form_validation->set_rules('pan', 'Pan No', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('cpan', 'Con Pan', 'trim|required');

              if($this->form_validation->run()==true){
                  
              
              $refreg=$this->admin->kyc_update();
                if($refreg){
                    
                    
            $this->session->set_flashdata('success_message', 'KYC Payment Successfully');
            redirect('user/kyc','refresh');
                }else{
                  
                  $this->session->set_flashdata('error_message', 'check your details');
                  redirect('user/kyc','refresh');
                } 
              }else{
                
                $this->session->set_flashdata('error_message', ' Please Check Your Details');
               redirect('user/kyc','refresh');
              }

           
          }else{
            
            $data['page_name'] = "kyc";
            $this->load->view('user/kyc',$data);
          } 
    }
    

public function activation()
  {
    if($this->data =='')
    redirect('user','refresh');

    if ($_POST) {

      $this->form_validation->set_rules('pin', 'Pin', 'required|callback_pinstatus_check|callback_packcheck|callback_check_old_activation');
      $this->form_validation->set_rules('username', 'Wing', 'required|callback_checkuser');

      if($this->form_validation->run()==true){
       
        $approve = $this->admin->active_manage();

        if($approve){
          $this->session->set_flashdata('success_message',"User Activated Successfully");
          redirect('user/activation','refresh');
        } else {
          $this->session->set_flashdata('error_message',"Please Try Again");
          redirect('user/activation','refresh');
        }
      } else{
        $this->session->set_flashdata('error_message',"Check Your details ");
        $data['page_name'] = "activation";
        $this->load->view('user/activation',$data); 
      }
    }
    else
    {
        $data['page_name'] = "activation";
      $this->load->view('user/activation',$data); 
    }

  }
  
 public function check_old_activation()
{
    if($this->data =='')
     redirect('user','refresh');
    
    $pin_value = $this->db->select('pin_value')->where('pin',$this->input->post('pin'))->get('e_pin')->row()->pin_value+0;
    $user = $this->input->post('username');
    $alreadyActivated = $this->db->where('username', $user)->where('remark','Activation') ->where('credit', $pin_value)->count_all_results('pin');

    if ($alreadyActivated > 0) {
        $this->form_validation->set_message('check_old_activation', "Already Activated for this pack.");
        return FALSE;
    }

    $lowerPackActivated = $this->db->where('username', $user)->where('remark','Activation')->where('credit', 1100.00)->count_all_results('pin');
    $higherPackActivated = $this->db->where('username', $user)->where('remark','Activation')->where('credit', 10000.00)->count_all_results('pin');
    if ($lowerPackActivated > 0 && $pin_value == 1100) {
        $this->form_validation->set_message('check_old_activation', "Already Activated for this pack (1100).");
        return FALSE;
    }

    if ($higherPackActivated > 0) {
        $this->form_validation->set_message('check_old_activation', "Already Activated for this pack (10000).");
        return FALSE;
    }

    return TRUE;
}

  
      public function packcheck()
  {
      if($this->data =='')
     redirect('user','refresh');
    $pin = $this->db->select('pin_value')->where('username',$this->session->userdata('ublisusername'))->where('pin',$this->input->post('pin'))->get('e_pin')->row()->pin_value+0;

    if( $pin == $this->input->post('pin_value'))
    {
        return TRUE; 
    }
    else
    {
      $this->form_validation->set_message('packcheck', "Not A Valid Pin Try Another One");
      return FALSE;
    }
  }
public function pinstatus_check()
  {
      if($this->data =='')
     redirect('user','refresh');
      
    $pin = $this->input->post('pin');

    $pin_check = $this->db->select('status')->where('username',$this->session->userdata('ublisusername'))->where('pin',$pin)->get('e_pin')->row()->status;

    if( $pin_check=="Unused")
    {
      return TRUE;    
    }
    else
    {
      $this->form_validation->set_message('pinstatus_check', "Pin Already Used");
      return FALSE;
    }
  }
  
   public function withdraw_request()
{
    if($this->data =='')
    redirect('user','refresh');
       
      if($_POST){ 
          $ac_status=$this->db->select('ac_status')->where('username',$this->session->userdata('ublisusername'))->get('user_role')->row()->ac_status;
          if($ac_status != "Activate"){
              
              $this->session->set_flashdata('error_message','Please Update Your Bank');
              redirect('user/withdrawrequest','refresh');    
              
          }else{
            $this->form_validation->set_rules('amount', 'Amount', 'trim|required|numeric|callback_check_kyc|callback_inputamount_check|callback_check_balance|callback_check_hours');
            
                if($this->form_validation->run()==true){
                 
                        $upp = $this->admin->withdraw_request_manage();
                        if($upp){
                            $this->session->set_flashdata('success_message','Payout Requested Successfully');
                            redirect('user/withdrawrequest','refresh');
                        }else{
                         $this->session->set_flashdata('error_message','Please Try Again');
                         redirect('user/withdrawrequest','refresh');    
                        }
                   
                 
                }else{
                $this->session->set_flashdata('error_message','Please Check Your Details');
                 $data['page_name'] = "withdrawrequest";
                $this->load->view('user/withdrawrequest',$data);
            }
            
            
          }
            
            
             
            }else{
                $this->session->set_flashdata('error_message','Please Try Again');
                         redirect('user/withdrawrequest','refresh'); 
            }
      
}



  public function inputamount_check()
  {
      

    if ($this->input->post('amount') >= 100 )
    {
      return TRUE;    
    }
    else
    {
      $this->form_validation->set_message('inputamount_check','Minimum Withdraw Amount 100');
      return FALSE;
    }

  }
  
 public function check_kyc()
{
    if($this->data =='')
     redirect('user','refresh');
    
    $kyc = $this->db->where('username', $this->session->userdata('ublisusername'))->get('user_role')->row_array();

    if (!empty($kyc['aadhar_no']) && !empty($kyc['pan_no']))
    {
        return TRUE;    
    }
    else
    {
        $this->form_validation->set_message('check_kyc', 'Update KYC details');
        return FALSE;
    }
}


public function check_balance()
  {
      if($this->data =='')
     redirect('user','refresh');
      
           $bal_total=$this->db->select('sum(credit)-sum(debit)as balance')->where('username',$this->session->userdata('ublisusername'))->get('withdraw_wallet')->row()->balance;
    
    if ($this->input->post('amount') <= $bal_total)
    {
      return TRUE;    
    }
    else
    {
      $this->form_validation->set_message('check_balance','Insufficient Fund To Withdraw');
      return FALSE;
    }

  }
  
 public function check_hours()
{
    if($this->data =='')
     redirect('user','refresh');
    
    // Get the most recent entry in the payout table
    $recentEntry = $this->db
        ->select('entry_date')
        ->where('username', $this->session->userdata('ublisusername'))
        ->order_by('entry_date', 'DESC')
        ->get('payout')
        ->row();

    if ($recentEntry) {
        // Calculate the time difference in hours
        $recentEntryTimestamp = strtotime($recentEntry->entry_date);
        $currentTimestamp = time();
        $hoursDifference = ($currentTimestamp - $recentEntryTimestamp) / (60 * 60); // Convert to hours

        if ($hoursDifference >= 24) {
            return true; // Time difference is greater than or equal to 24 hours
        } else {
            $this->form_validation->set_message('check_hours', 'You can make a new request after 24 hours from the previous request');
            return false; // Time difference is less than 24 hours
        }
    } else {
        return true; // No previous entry found, can proceed with the request
    }
}

  
  
public function affiliate_point_transfer($amount)
{
    if($this->data =='')
    redirect('user','refresh');
        
        $bal_total=$this->db->select('sum(credit)-sum(debit)as balance')->where('username',$this->session->userdata('ublisusername'))->where('remark','Direct Income')->get('account_sub')->row()->balance;
    
              if ($amount <= $bal_total && $amount>=100){
                  
                        $upp = $this->admin->transfer_points_affiliate($amount);
                        if($upp){
                            $this->session->set_flashdata('success_message','Transfered Successfully');
                            redirect('user/wallet','refresh');
                        }else{
                         $this->session->set_flashdata('error_message','Please Try Again');
                         redirect('user/wallet','refresh');    
                        }
                 
                }else{
                    if($amount >= $bal_total){
                        $this->session->set_flashdata('error_message','Insufficient Fund');
                    }else{
                        $this->session->set_flashdata('error_message','Please transfer minimum 100');
                    }    
                  redirect('user/wallet','refresh');
            }
             
            
}


public function incentive_point_transfer($amount)
{
    if($this->data =='')
    redirect('user','refresh');
        
        $bal_total=$this->db->select('sum(credit)-sum(debit)as balance')->where('username',$this->session->userdata('ublisusername'))->where('remark','Pair Income')->get('account_sub')->row()->balance;
    
              if ($amount <= $bal_total && $amount>=500){
                  
                        $upp = $this->admin->transfer_points_incentive($amount);
                        if($upp){
                            $this->session->set_flashdata('success_message','Transfered Successfully');
                            redirect('user/wallet','refresh');
                        }else{
                         $this->session->set_flashdata('error_message','Please Try Again');
                         redirect('user/wallet','refresh');    
                        }
                 
                }else{
                    if($amount >= $bal_total){
                        $this->session->set_flashdata('error_message','Insufficient Fund');
                    }else{
                        $this->session->set_flashdata('error_message','Please transfer minimum 500');
                    }    
                  redirect('user/wallet','refresh');
            }
             
            
}

public function level_point_transfer($amount)
{
    if($this->data =='')
    redirect('user','refresh');
        
        $bal_total=$this->db->select('sum(credit)-sum(debit)as balance')->where('username',$this->session->userdata('ublisusername'))->where('remark','Level Income')->get('account_sub')->row()->balance;
    
              if ($amount <= $bal_total && $amount>=100){
                  
                        $upp = $this->admin->transfer_level_incentive($amount);
                        if($upp){
                            $this->session->set_flashdata('success_message','Transfered Successfully');
                            redirect('user/wallet','refresh');
                        }else{
                         $this->session->set_flashdata('error_message','Please Try Again');
                         redirect('user/wallet','refresh');    
                        }
                 
                }else{
                    if($amount >= $bal_total){
                        $this->session->set_flashdata('error_message','Insufficient Fund');
                    }else{
                        $this->session->set_flashdata('error_message','Please transfer minimum 100');
                    }    
                  redirect('user/wallet','refresh');
            }
             
            
}


// public function affiliate_point_transfer($amount) {
//     if ($this->data == '') {
//         redirect('user', 'refresh');
//     }
    
//     $this->db->trans_begin(); 
//     $first_user = $this->session->userdata('ublisusername');
//     $second_user = $this->db->select('username')->where('user_type', 'sub')->where('position', 'left')->where('ref_id', $this->session->userdata('ublisusername'))->get('user_role')->row()->username;
//     $third_user = $this->db->select('username')->where('user_type', 'sub')->where('position', 'right')->where('ref_id', $this->session->userdata('ublisusername'))->get('user_role')->row()->username;
    
//     if ($amount < 500) {
//         $this->session->set_flashdata('error_message', 'Minimum transfer amount is 500.');
//         redirect('user/wallet', 'refresh');
//         return; 
//     }

//     // Check if all users have a balance of 0
//     $insufficient_balance = true;
//     $users = array($first_user, $second_user, $third_user);

//     foreach ($users as $user) {
//         $user_balance = $this->db->select('SUM(credit) - SUM(debit) as balance')->where('remark', 'Direct Income')->where('username', $user)->get('account')->row()->balance + 0;
        
//         if ($user_balance > 0) {
//             $insufficient_balance = false;
//             break;
//         }
//     }

//     if ($insufficient_balance) {
//         $this->session->set_flashdata('error_message', 'Insufficient balance for transfer.');
//     } else {
//         $remaining_amount = $amount;  // Initialize remaining amount to be transferred
    
//     foreach ($users as $user) {
        
//             $balance_check_total += $this->db->where('username', $user)->where('remark', 'Direct Income')->select('SUM(credit) - SUM(debit) as balance')->get('account')->row()->balance + 0;
            
//     }
    
//     if($balance_check_total >= $amount){
//         foreach ($users as $user) {
//             $balance_check = $this->db->where('username', $user)->where('remark', 'Direct Income')->select('SUM(credit) - SUM(debit) as balance')->get('account')->row()->balance + 0;

//             if ($balance_check > 0) {
//                 // Calculate the amount to debit from the current user
//                 $debit_amount = min($remaining_amount, $balance_check);

//                 // Perform the debit
//                 $debit_data = array(
//                     'username' => $user,
//                     'remark' => 'Direct Income',
//                     'entry_date' => date('Y-m-d H:i:s'),
//                     'debit' => $debit_amount,
//                 );
//                 $this->admin->account_points_debit($debit_data);

//                 // Update the remaining amount
//                 $remaining_amount -= $debit_amount;

//                 // Perform the transfer 
//                 $transfer_data = array(
//                     'username' => $first_user,
//                     'credit' => $debit_amount,
//                     'remark' => 'Affiliate Points',
//                     'entry_date' => date('Y-m-d H:i:s')
//                 );
//                 $this->admin->account_points_credit($transfer_data);

//                 // Exit the loop if the full amount has been transferred
//                 if ($remaining_amount <= 0) {
//                     break;
//                 }
//             }
//         }
//     }else{
//         $this->session->set_flashdata('error_message', 'Insufficient balance for transfer.');
//         redirect('user/wallet','refresh');
//     }
  
//         if ($this->db->trans_status() === FALSE) {
//             $this->db->trans_rollback();
//             $this->session->set_flashdata('error_message', 'Failed to transfer Points. Please try again.');
//         } else {
//             $this->db->trans_commit();
//             $this->session->set_flashdata('success_message', 'Points transfer successful.');
//         }
//     }
    
//     redirect('user/wallet', 'refresh');
// }


// public function incentive_point_transfer($amount) {
//     if ($this->data == '') {
//         redirect('user', 'refresh');
//     }
    
//     $this->db->trans_begin(); 
//     $first_user = $this->session->userdata('ublisusername');
//     $second_user = $this->db->select('username')->where('user_type', 'sub')->where('position', 'left')->where('ref_id', $this->session->userdata('ublisusername'))->get('user_role')->row()->username;
//     $third_user = $this->db->select('username')->where('user_type', 'sub')->where('position', 'right')->where('ref_id', $this->session->userdata('ublisusername'))->get('user_role')->row()->username;
    
//     if ($amount < 500) {
//         $this->session->set_flashdata('error_message', 'Minimum transfer amount is 500.');
//         redirect('user/wallet', 'refresh');
//         return; 
//     }

//     // Check if all users have a balance of 0
//     $insufficient_balance = true;
//     $users = array($first_user, $second_user, $third_user);

//     foreach ($users as $user) {
//         $user_balance = $this->db->select('SUM(credit) - SUM(debit) as balance')->where('remark', 'Pair Income')->where('username', $user)->get('account')->row()->balance + 0;
        
//         if ($user_balance > 0) {
//             $insufficient_balance = false;
//             break;
//         }
//     }

//     if ($insufficient_balance) {
//         $this->session->set_flashdata('error_message', 'Insufficient balance for transfer.');
//     } else {
//         $remaining_amount = $amount;  // Initialize remaining amount to be transferred
    
//     foreach ($users as $user) {
        
//             $balance_check_total += $this->db->where('username', $user)->where('remark', 'Pair Income')->select('SUM(credit) - SUM(debit) as balance')->get('account')->row()->balance + 0;
            
//     }
    
//     if($balance_check_total >= $amount){
//         foreach ($users as $user) {
//             $balance_check = $this->db->where('username', $user)->where('remark', 'Pair Income')->select('SUM(credit) - SUM(debit) as balance')->get('account')->row()->balance + 0;

//             if ($balance_check > 0) {
//                 // Calculate the amount to debit from the current user
//                 $debit_amount = min($remaining_amount, $balance_check);

//                 // Perform the debit
//                 $debit_data = array(
//                     'username' => $user,
//                     'remark' => 'Pair Income',
//                     'entry_date' => date('Y-m-d H:i:s'),
//                     'debit' => $debit_amount,
//                 );
//                 $this->admin->account_points_debit($debit_data);

//                 // Update the remaining amount
//                 $remaining_amount -= $debit_amount;

//                 // Perform the transfer 
//                 $transfer_data = array(
//                     'username' => $first_user,
//                     'credit' => $debit_amount,
//                     'remark' => 'Team Incentive',
//                     'entry_date' => date('Y-m-d H:i:s')
//                 );
//                 $this->admin->account_points_credit($transfer_data);

//                 // Exit the loop if the full amount has been transferred
//                 if ($remaining_amount <= 0) {
//                     break;
//                 }
//             }
//         }
//     }else{
//         $this->session->set_flashdata('error_message', 'Insufficient balance for transfer.');
//         redirect('user/wallet','refresh');
//     }
  
//         if ($this->db->trans_status() === FALSE) {
//             $this->db->trans_rollback();
//             $this->session->set_flashdata('error_message', 'Failed to transfer Points. Please try again.');
//         } else {
//             $this->db->trans_commit();
//             $this->session->set_flashdata('success_message', 'Points transfer successful.');
//         }
//     }
    
//     redirect('user/wallet', 'refresh');
// }





public function balance_check()
  {
      if($this->data =='')
     redirect('user','refresh');
      
    $bal_total=$this->db->select('sum(credit)-sum(debit)as balance')->where('username',$this->session->userdata('ublisusername'))->get('points')->row()->balance;
    
    if ($this->input->post('amount') <= $bal_total)
    {
      return TRUE;    
    }
    else
    {
      $this->form_validation->set_message('balance_check','Insufficient Fund');
      return FALSE;
    }

  }

public function affiliate_search()
{
    if($this->data =='')
     redirect('user','refresh');
    
  $income_detail=$this->db->where('date(entry_date) >=',$this->input->post('date1'))->where('date(entry_date) <=',$this->input->post('date2'))->where('remark','Direct Income')->where('username',$this->session->userdata('ublisusername'))->get('account_sub')->result_array();
  $data['incomee']=$income_detail;
  $this->load->view('user/affiliate_point_statement',$data);
}

public function team_search()
{
    if($this->data =='')
     redirect('user','refresh');
    
  $income_detail=$this->db->where('date(entry_date) >=',$this->input->post('date1'))->where('date(entry_date) <=',$this->input->post('date2'))->where('remark','Pair Income')->where('username',$this->session->userdata('ublisusername'))->get('account_sub')->result_array();
  $data['incomee']=$income_detail;
  $this->load->view('user/team_incentive_statement',$data);
}

public function notification_update()
{
    if($this->data =='')
     redirect('user','refresh');
     
    $username = $this->session->userdata('ublisusername');
    $status = $this->input->post('status');

    $success=$this->db->where('username', $username)->update('notifications', array('status' => $status));
    log_message('error',$username);
     log_message('error',$status);
   if($success){
      echo 'Success';
    }
  else{
      echo 'Error';
    }
}
  
    public function registration()
  {
      $this->load->view('user/registration');
    }
    
        public function registration_share($ref_id="")
  {
      $data['ref_id']=$ref_id;
      $this->load->view('user/registration_share',$data);
    }
    
         public function registrationsucesspage()
  {
      $this->load->view('user/registrationsucesspage');
    }
    
            public function datatables()
  {
      $this->load->view('user/datatables');
    }
    
        
         public function binarytree()
  {   
      if($this->data =='')
     redirect('user','refresh');
     
      $this->load->view('user/binarytree');
    }
   
       
    
        
         public function profile()
  {   
      if($this->data =='')
     redirect('user','refresh');
     
      $this->load->view('user/profile');
    }
    
  

      
         public function mypingallery()
  {  
      if($this->data =='')
     redirect('user','refresh');
     
     $data['page_name'] = "mypingallery";
      $this->load->view('user/mypingallery',$data);
    }
    
        
  public function view($pinn)
  {   
      if($this->data =='')
     redirect('user','refresh');
     
      $data['pin']=$pinn;;
      $this->load->view('user/view',$data);
    }
    
              
         public function calender()
  {   
      if($this->data =='')
     redirect('user','refresh');
     
      $data['page_name'] = "calender";
      $this->load->view('user/calender',$data);
    }
    
           public function earningtable()
  {   
      if($this->data =='')
     redirect('user','refresh');
      $this->load->view('user/earningtable');
    }

   
           public function editprofile()
  {  
      if($this->data =='')
     redirect('user','refresh');
     
      $this->load->view('user/editprofile');
    }



         public function self_purschase()
  {   
      if($this->data =='')
     redirect('user','refresh');
     
      $this->load->view('user/self_purschase');
    }

        public function binary_income()
  {   
      if($this->data =='')
     redirect('user','refresh');
     
     $left_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','left')->where('ref_id',$this->session->userdata('ublisusername'))->get('user_role')->row()->username;
        $right_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','right')->where('ref_id',$this->session->userdata('ublisusername'))->get('user_role')->row()->username; 
        $usernames = array( $this->session->userdata('ublisusername'), $left_sub_user, $right_sub_user );
        
        $inc=$this->db->where_in('username',$usernames)->where('remark','Pair Income')->where('credit !=','0')->get('account')->result_array(); 
     
     $data['inc']=$inc;
      $data['page_name'] = "binary_income";
      $this->load->view('user/binary_income',$data);
    }
    
           public function binary_income_filter()
  {   
      if($this->data =='')
     redirect('user','refresh');
     
     $left_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','left')->where('ref_id',$this->session->userdata('ublisusername'))->get('user_role')->row()->username;
        $right_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','right')->where('ref_id',$this->session->userdata('ublisusername'))->get('user_role')->row()->username; 
        $usernames = array( $this->session->userdata('ublisusername'), $left_sub_user, $right_sub_user );
        
        $inc=$this->db->where_in('username',$usernames)->where('date(entry_date) >=',$this->input->post('min'))->where('date(entry_date)<=',$this->input->post('max'))->where('remark','Pair Income')->where('credit !=','0')->get('account')->result_array(); 
     
     $data['inc']=$inc;
     
      $data['page_name'] = "binary_income";
      $this->load->view('user/binary_income',$data);
    }
        public function direct_income()
  {   
      if($this->data =='')
     redirect('user','refresh');
     
     $left_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','left')->where('ref_id',$this->session->userdata('ublisusername'))->get('user_role')->row()->username;
        $right_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','right')->where('ref_id',$this->session->userdata('ublisusername'))->get('user_role')->row()->username; 
        $usernames = array( $this->session->userdata('ublisusername'), $left_sub_user, $right_sub_user );
        
        $inc=$this->db->where_in('username',$usernames)->where('remark','Direct Income')->where('credit !=','0')->get('account')->result_array(); 
      
      $data['inc']=$inc;  
      $data['page_name'] = "direct_income";
      $this->load->view('user/direct_income',$data);
    }
    
          public function direct_income_filter()
  {   
      if($this->data =='')
     redirect('user','refresh');
     
     $left_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','left')->where('ref_id',$this->session->userdata('ublisusername'))->get('user_role')->row()->username;
        $right_sub_user=$this->db->select('username')->where('user_type','sub')->where('position','right')->where('ref_id',$this->session->userdata('ublisusername'))->get('user_role')->row()->username; 
        $usernames = array( $this->session->userdata('ublisusername'), $left_sub_user, $right_sub_user );
        
        $inc=$this->db->where_in('username',$usernames)->where('date(entry_date) >=',$this->input->post('min'))->where('date(entry_date)<=',$this->input->post('max'))->where('remark','Direct Income')->where('credit !=','0')->get('account')->result_array(); 
      
      $data['inc']=$inc; 
     
      $data['page_name'] = "direct_income";
      $this->load->view('user/direct_income',$data);
    }
    
        public function repurchase_income()
  {  
      if($this->data =='')
     redirect('user','refresh');
     
      $this->load->view('user/repurchase_income');
    }
        public function royality_bonus()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $this->load->view('user/royality_bonus');
    }
    
    
           public function checkback_benifit()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $this->load->view('user/checkback_benifit');
    }
         public function binary_rank_benifit()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $this->load->view('user/binary_rank_benifit');
    }

    public function left_team($user="",$wing="")
  {  
      if($this->data =='')
     redirect('user','refresh');
     
     if($user!='' ){
         $data['username']=$user;
         $data['wing']=$wing;
     }else{
         $data['username']=$this->session->userdata('ublisusername');
         $data['wing']=$wing;
     }
     
      $data['page_name'] = "left_team";
      $this->load->view('user/left_team',$data);
    }


       public function right_team($user="",$wing="")
  {  
      if($this->data =='')
     redirect('user','refresh');
     
     if($user!='' ){
         $data['username']=$user;
         $data['wing']=$wing;
     }else{
         $data['username']=$this->session->userdata('ublisusername');
         $data['wing']=$wing;
     }
     
      $data['page_name'] = "right_team";
      $this->load->view('user/right_team',$data);
    }


       public function direct_team()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $data['page_name'] = "direct_team";
      $this->load->view('user/direct_team',$data);
    }

     public function invoice($idd='')
  {  
      if($this->data =='')
     redirect('user','refresh');
      
      $data['id']=$idd;
      $data['page_name'] = "invoice";
      $this->load->view('user/invoice',$data);
    }
    
     public function invoice_print($idd='')
  {  
      if($this->data =='')
     redirect('user','refresh');
      
      $data['id']=$idd;
      $data['page_name'] = "invoice_print";
      $this->load->view('user/invoice_print',$data);
    }

public function team_incentive_statement()
{  
    if($this->data =='')
    redirect('user','refresh');
    
    $total_income=$this->db->where('username',$this->session->userdata('ublisusername'))
                       ->where('remark', 'Pair Income')->get('account_sub')->result_array();
     $data['incomee']=$total_income; 
      $this->load->view('user/team_incentive_statement',$data);
}

public function level_incentive_statement()
{  
    if($this->data =='')
    redirect('user','refresh');
  
      $this->load->view('user/level_incentive_statement');
}

public function level_wise_incentive($level="")
{  
    if($this->data =='')
    redirect('user','refresh');
    
      $data['level']=$level; 
      $this->load->view('user/level_wise_incentive',$data);
}

       public function prime_achievers()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $data['page_name'] = "prime_achievers";
      $this->load->view('user/prime_achievers',$data);
    }
        public function primeplus_achievers()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $data['page_name'] = "primeplus_achievers";
      $this->load->view('user/primeplus_achievers',$data);
    }
    
            public function prime_ceiling_achievers()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $data['page_name'] = "prime_ceiling_achievers";
      $rank_users=$this->db->group_by('date(entry_date)')->order_by('date(entry_date)', 'desc')->get('prime_rank_day')->result_array(); 
      $data['rank_users']=$rank_users;
      $this->load->view('user/prime_ceiling_achievers',$data);
    }
    
             public function prime_ceiling_achievers_filter()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $rank_users=$this->db->group_by('date(entry_date)')->order_by('date(entry_date)', 'desc')->where('date(entry_date) >=',$this->input->post('min'))->where('date(entry_date) <=',$this->input->post('max'))->get('prime_rank_day')->result_array(); 
      $data['rank_users']=$rank_users;
      $data['page_name'] = "prime_ceiling_achievers";
      $this->load->view('user/prime_ceiling_achievers',$data);
    }
    
        public function plus_ceiling_achievers()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $data['page_name'] = "plus_ceiling_achievers";
      $rank_users=$this->db->group_by('date(entry_date)')->order_by('date(entry_date)', 'desc')->get('plus_rank_day')->result_array(); 
      $data['rank_users']=$rank_users;
      $this->load->view('user/plus_ceiling_achievers',$data);
    }
    
          public function plus_ceiling_achievers_filter()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $rank_users=$this->db->group_by('date(entry_date)')->order_by('date(entry_date)', 'desc')->where('date(entry_date) >=',$this->input->post('min'))->where('date(entry_date) <=',$this->input->post('max'))->get('plus_rank_day')->result_array(); 
      $data['rank_users']=$rank_users;
      $data['page_name'] = "plus_ceiling_achievers";
      $this->load->view('user/plus_ceiling_achievers',$data);
    }
    
           public function prime_rank_achievers()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $data['page_name'] = "prime_rank_achievers";
      $this->load->view('user/prime_rank_achievers',$data);
    }
           public function star_achievers()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $data['page_name'] = "star_achievers";
      $this->load->view('user/star_achievers',$data);
    }
    
  
 
            public function withdrawrequest()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $data['page_name'] = "withdrawrequest";
      $this->load->view('user/withdrawrequest',$data);
    }
             public function invoice_list()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $data['page_name'] = "invoice_list";
      $this->load->view('user/invoice_list',$data);
    }
    
    
           
public function affiliate_point_statement()
{
    if($this->data =='')
     redirect('user','refresh');
    
            $total_income=$this->db->where('username',$this->session->userdata('ublisusername'))
                       ->where('remark', 'Direct Income')->get('account_sub')->result_array();
            $data['incomee']=$total_income;
            $this->load->view('user/affiliate_point_statement',$data);
}
    public function withdrawal_statement()
        {
            if($this->data =='')
     redirect('user','refresh');
            
            $withdrawal_statement=$this->db->where('username',$this->session->userdata('ublisusername'))->get('withdraw_wallet')->result_array();
                      
            $data['incomee']=$withdrawal_statement;
            $this->load->view('user/withdrawal_statement',$data);
          } 
          
          public function withdrawal_search()
{
    if($this->data =='')
     redirect('user','refresh');
    
  $income_detail=$this->db->where('date(entry_date) >=',$this->input->post('date1'))->where('date(entry_date) <=',$this->input->post('date2'))->where('username',$this->session->userdata('ublisusername'))->get('withdraw_wallet')->result_array();
  $data['incomee']=$income_detail;
  $this->load->view('user/withdrawal_statement',$data);
}
    public function wallet()
        { 
            if($this->data =='')
            redirect('user','refresh');
            $data['page_name'] = "wallet";
            $this->load->view('user/wallet',$data);
          }  
          
public function update_record($id) {
    
    if($this->data =='')
     redirect('user','refresh');
    /* retrieve the data from the AJAX request */
    $data = array(
        /* update the fields you want to change */
    );
    $this->db->where('id', $id);
    $this->db->update('tablename', $data);
    /* return a response indicating success or failure */
}
        
 
    public function event_page()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $this->load->view('user/event_page');
    }    
    
    public function country()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $this->load->view('user/country');
    }
        
       public function idcard()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $this->load->view('user/idcard');
    }        
            public function view_announcement_pdf($pdf_file)
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $data['pdf_file']=$pdf_file;
      $this->load->view('user/view_announcement_pdf',$data);
    } 

       public function viewnotification()
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $this->load->view('user/viewnotification');
    }     
    
          public function invoice_withdraw($id="")
  {
      if($this->data =='')
     redirect('user','refresh');
      
      $data['id']=$id;
      $this->load->view('user/invoice_withdraw',$data);
    } 
    
             public function success_mail($id="")
  {
      
      $data['id']=$id;
      $this->load->view('user/success_mail',$data);
    } 
   
  }