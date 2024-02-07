<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Staff extends CI_Controller {
   
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper(array('form','url'));
    $this->load->library(array('form_validation', 'email'));
    $this->form_validation->set_error_delimiters('<span style="color:red">', '</span>');
    $this->data=$this->db->select('session_id')->where('username',$this->session->userdata('staffusername'))->where('user_type','s')->get('staff_panel')->row()->session_id;

  }
  
   public function payout_management()
  {
       if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
            
        $pin_history = [];
        $payout_historyy = [];
    
    if ($this->input->post('filter') == "filter" && $this->input->post('type') == "first") {
        $payout_history = $this->db
            ->where('status', 'Request')
            ->where('DATE(entry_date) >=', $this->input->post('min'))
            ->where('DATE(entry_date) <=', $this->input->post('max'))
            ->get('payout')
            ->result_array();
    } else {
        $payout_history=$this->db->where('status','Request')->get('payout')->result_array();
    }
    
    if ($this->input->post('filterr') == "filterr" && $this->input->post('typee') == "second") {
        $payout_historyy = $this->db
            ->where('status !=', 'Request')
            ->where('DATE(entry_date) >=', $this->input->post('minn'))
            ->where('DATE(entry_date) <=', $this->input->post('maxx'))
            ->get('payout')
            ->result_array();
    } else {
        $payout_historyy=$this->db->where('status!=','Request')->get('payout')->result_array();
    }    
      $data['payout_history']=$payout_history;      
      $data['payout_historyy']=$payout_historyy;     
      
      $data['page_name']="payout_management";
      $this->load->view('staff/payout_management',$data);
    }
    
    
        public function payout_accept($id)
  {
      
       if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');

        $approve = $this->staff->approve_payout($id,$this->session->userdata('staffusername'));

        if($approve){
          $this->session->set_flashdata('approve_message',"Request Approved Successfuly");
          redirect('admin/payout_management','refresh');
        } else {
          $this->session->set_flashdata('approve_message',"Please Try Again");
          redirect('admin/payout_management','refresh');
        }
}

 public function payout_reject($id)
  {
       if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
      
        $reason = $this->input->get('reason');
        $reject = $this->staff->reject_payout($id,$reason,$this->session->userdata('staffusername'));

        if($reject){
          $this->session->set_flashdata('reject_message',"Request Rejected Successfully");
          redirect('admin/payout_management','refresh');
        } else {
          $this->session->set_flashdata('reject_message',"Please Try Again");
          redirect('admin/payout_management','refresh');
        }

  }

  public function index()
  {  
      if($this->session->userdata('staffusertype') != 's'){
         $this->load->view('staff/index');
      }else{ 
         
        if($this->session->userdata('staffrole') == "Accountant"){
          
             $data['page_name'] = "dashboard"; 
             $this->load->view('staff/dashboard',$data);
            
        }else{
             
             $data['page_name'] = "dashboard"; 
             $this->load->view('staff/dashboard',$data);
        }
      }
      
    }  
    
    public function user_profile()
{   
       if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
      $staff_id=$this->db->where('username',$this->session->userdata('staffusername'))->get('staff_panel')->row_array();
      $data['user_data']=$staff_id;
      $this->load->view('staff/user_profile',$data);
 }
 
    
     public function onclickupdate()
{
     
    
  // Retrieve the cropped image data from the request
  $imageData = $_POST['image'];

  // Generate a unique filename for the image
  $image_name = time() . '.jpg';
  $filename = 'assets/images/' . $image_name;

  // Decode the base64 image data and save it to a file
  $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData));
  file_put_contents($filename, $decodedImageData);


  // Prepare the data to update in the user_role table
 
  $data['profile_image'] = $image_name;

  $this->db->where_in('username',  $this->session->userdata('staffusername'));
  $this->db->update('staff_panel', $data);

  // Prepare the response
  $response = ['success' => true];
  header('Content-Type: application/json');
  echo json_encode($response);
}
     
     
       public function viewnotification(){
      
        if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
            
            $this->load->view('staff/viewnotification');
      
  }
  
   public function viewmore_notification()
    {   
        if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
       
        $data['viewmore_notification']='viewmore_notification';
        $this->load->view('staff/viewmore_notification',$data);
      }
    
    public function user_profile_insert()
{   
   if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
    
   $data['user_data']=$this->db->where('username',$this->session->userdata('staffusername'))->get('staff_panel')->row_array();
   if($_POST)
	    { 
        	    $this->form_validation->set_rules('mobile', 'Mobile number', 'trim|numeric|max_length[10]|min_length[10]');

                
        	          if ($this->form_validation->run() == true) {
             $result = $this->staff->profile_update($this->session->userdata('staffusername'));
               
             if($result =='true')
              {
               
                  $this->session->set_flashdata('success_message','Details updated successfully');
                  redirect('staff/user_profile','refresh');
              }
              else
              {
                  
                  $this->session->set_flashdata('error_message','Something went wrong, Details not updated');
                  redirect('staff/user_profile','refresh');
              }
	    } else {
            $this->session->set_flashdata('error_message', 'Something went wrong. Try Again');
            $this->load->view('staff/user_profile',$data);
        }
              
	    }
	    else
	    {
            $this->load->view('staff/user_profile',$data);
          }
          
} 

    
//     public function payout_management(){
   
    
//      if ($this->session->userdata('staffusertype') != 's' && $accountant == "Accountant" ) 
//             redirect('staff', 'refresh');
            
//             $data['page_name'] = "payout_management";
//             $this->load->view('staff/payout_management',$data);
    
// }
    
    public function logout_all_devices() {
    
        
    $staff_id = $this->session->userdata('staffusername');
    $data['session_id'] = '';
    $this->db->where('username',$staff_id);
    $this->db->update('staff_panel',$data);
    
    $last=$this->db->where('username', $staff_id)->get('staff_panel')->row_array();
    $this->db->where('username', $staff_id)->update('staff_panel', array('logout_date_last' => $last['logout_date']));
    
    $this->db->where('username', $staff_id)->update('staff_panel', array('logout_date' => date('Y-m-d H:i:s')));
    
    $this->session->set_userdata('staffsession',''); 
    $this->session->sess_destroy();
    
    redirect('staff/index','refresh');
}

public function login()
  {
    if($_POST){
        
         $this->form_validation->set_rules('login_id', 'User Id', 'trim|required|callback_checkuser');
         $this->form_validation->set_rules('password', 'Password', 'trim|required');
               
   if($this->form_validation->run()==true){
                    
      $username= $this->input->post('login_id');
      $password= $this->input->post('password');
      
      $check= $this->staff->login($username,$password);

      if($check != false){
        $this->session->set_userdata('staffusername',$check['username']);
        $this->session->set_userdata('staffrole',$check['employe_role']);
        $this->session->set_userdata('staffusertype',$check['user_type']);
        $this->session->set_userdata('staffsession',$check['session_id']);
        $this->session->set_flashdata('success_message',"Welcome To Blisser");
        redirect('staff/index','refresh');

       
      }else {
        $this->session->set_flashdata('error_message',"Please enter valid details");
        redirect('staff/index','refresh');
      }
    }else{
        $this->session->set_flashdata('error_message',"Please enter valid details");
        redirect('staff','refresh');
    }  
  
}else{
        $this->session->set_flashdata('error_message',"Please enter valid details");
        redirect('staff','refresh');
    }  
}
  
public function checkuser()
  {

 $check = $this->db->where('user_type','s')->where('username',$this->input->post('login_id'))->count_all_results('staff_panel')+0;
   
    if ($check == 1)
    {
      return TRUE;    
    }
    else
    {
      $this->form_validation->set_message('checkuser','User Id not found');
      return FALSE;
    }

  }

  



 public function dashboard_reset_password()
{  
 if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
    if($_POST){

      $this->form_validation->set_rules('oldpass','Old password','trim|required|callback_checkoldpass');
      $this->form_validation->set_rules('newpass','New Password','trim|required');
      $this->form_validation->set_rules('conpass','Confirm Password','trim|required|matches[newpass]');

      if($this->form_validation->run()==true){

        $passwordreset = $this->staff->update_passwordd();

        if($passwordreset){
          
          $this->session->set_flashdata('success_message', "password change successfully");
          $this->logout_all_devices();
        }

        else{   
          log_message('error','ll');
          $this->session->set_flashdata('error_message' , "Failed");
          redirect('staff/dashboard_reset_password','refresh');
        }

      }else{
        $this->session->set_flashdata('old_Form_Error' , "old password is incorrect");
        $data['page_name'] = "dashboard_reset_password";
        $this->load->view('staff/dashboard_reset_password');
      }

    }
    else{  
      $data['page_name'] = "dashboard_reset_password";
      $this->load->view('staff/dashboard_reset_password');
    }

   
}

public function checkoldpass()
 {

    $passcheck = $this->db->where('username',$this->session->userdata('staffusername'))->where('pwd_hint',$this->input->post('oldpass'))->from('staff_panel')->count_all_results()+0;

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
  
  
         public function kycrequest()
  {
      if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
    
      $data['page_name'] = "kycrequest";
      $this->load->view('staff/kycrequest');
    }
    
  
public function kyc_accept($id)
  {
      if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
     
        $approve = $this->staff->kyc_approve_request($id,$this->session->userdata('staffusername'));

        if($approve){
          $this->session->set_flashdata('approve_message',"Request Approved Successfuly");
          redirect('staff/kycrequest','refresh');
        } else {
          $this->session->set_flashdata('approve_message',"Please Try Again");
          redirect('staff/kycrequest','refresh');
        }

  }
    
 public function kyc_reject($id)
  {
      if ($this->session->staff('staffusertype') != 's') 
            redirect('staff', 'refresh');
                        
        $reason = $this->input->get('reason');
        $reject = $this->staff->kyc_reject_request($id,$reason,$this->session->userdata('staffusername'));

        if($reject){
          $this->session->set_flashdata('reject_message',"Request Rejected Successfully");
          redirect('staff/kycrequest','refresh');
        } else {
          $this->session->set_flashdata('reject_message',"Please Try Again");
          redirect('staff/kycrequest','refresh');
        }

  }
  
          public function pinrequesthistory()
  {     
      if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
    
      $data['page_name'] = "pinrequesthistory";
      $this->load->view('staff/pinrequesthistory',$data);
    }
    
              public function pin_request_history_accountant()
  {     
      if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
    
      $data['page_name'] = "pin_request_history_accountant";
      $this->load->view('staff/pin_request_history_accountant',$data);
    }
    
    
    
    
    
    public function pin_accept($id)
  {
       if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');

        $approve = $this->staff->approve_request($id,$this->session->userdata('staffusername'));

        if($approve){
          $this->session->set_flashdata('approve_message',"Request Approved Successfuly");
          redirect('staff/pinrequesthistory','refresh');
        } else {
          $this->session->set_flashdata('approve_message',"Please Try Again");
          redirect('staff/pinrequesthistory','refresh');
        }

  
        

  }
  
    public function pin_reject($id)
  {
       if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
      
        $reason = $this->input->get('reason');
        $reject = $this->staff->reject_request($id,$reason,$this->session->userdata('staffusername'));

        if($reject){
          $this->session->set_flashdata('reject_message',"Request Rejected Successfully");
          redirect('staff/pinrequesthistory','refresh');
        } else {
          $this->session->set_flashdata('reject_message',"Please Try Again");
          redirect('staff/pinrequesthistory','refresh');
        }

  }
  
      public function pinview($deposit_id="")
  {
       if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
      
       $data['id']=$deposit_id;
      $this->load->view('staff/pinview',$data);
      
    }        
     
  
   public function send_message()
{

    if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');

      $sender_id = $this->input->post('sender');
      $receiver_id = $this->input->post('receiver');
      $message = $this->input->post('message');
      $this->staff->save_message();

     redirect('staff/chat/'.$receiver_id);

     
}  
public function chat($sender="")
  {
       if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
      
      $countt=$this->db->where('sender_id',$sender)->where('status','Unread')->count_all_results('chat_messages')+0;
     if($countt>0){
         $data['status']='read';
         $this->db->where('sender_id',$sender)->update('chat_messages',$data);
     }
        $data['sender']=$this->db->where('sender_id',$sender)->get('chat_messages')->result_array();
        $data['sender_id']=$sender;
        $data['page_name']="chat";
      $this->load->view('staff/chat',$data);
    }
         
         
public function invoice_list()
  {
       if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
      
      $data['page_name']="invoice_list";
      $this->load->view('staff/invoice_list',$data);
    }     

public function invoice($idd)
{   
     if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
      
      $data['id']=$idd;
      $this->load->view('staff/invoice',$data);
    }
 
 public function invoice_print($id="")
  {
       if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
      
      $data['id']=$id;
      $this->load->view('staff/invoice_print',$data);
    }
    
          public function announcement($id="")
{
            if ($this->session->userdata('staffusertype') != 's') 
            redirect('staff', 'refresh');
     
    
    $new = $this->db->where('id', $id)->get('announcement')->row_array();

    $user_id = $this->session->userdata('staffusername');
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
    $this->load->view('staff/announcement', $data);
}
    

  public function view_more_announce(){
    
       if ($this->session->userdata('staffusertype') != 's') 
        redirect('staff', 'refresh');
     
     
     $this->load->view('staff/view_more_announce');
}  

    public function shop_registration()
{
     if ($this->session->userdata('staffusertype') != 's') 
        redirect('staff', 'refresh');
            
    if ($_POST) {
        $this->form_validation->set_rules('shopname', 'Shop name', 'trim|required');
        $this->form_validation->set_rules('mob_num_1', 'Mobile number 1', 'trim|required|numeric|max_length[10]');
        $this->form_validation->set_rules('mob_num_2', 'Mobile number 2', 'trim|required|numeric|max_length[10]');
        $this->form_validation->set_rules('address1', 'Address 1', 'trim|required');
        $this->form_validation->set_rules('address2', 'Address 2', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('district', 'District', 'trim|required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'trim|required|numeric|max_length[6]');

        if ($this->form_validation->run() == true) {
            $result = $this->staff->shop_manage($this->session->userdata('staffusername'));

            if ($result) {
                $this->session->set_flashdata('success_message', 'Shop registered successfully');
                redirect('staff/shop_registration', 'refresh');
            } else {
                $this->session->set_flashdata('error_message', 'Something went wrong. Please try again');
                redirect('staff/shop_registration', 'refresh');
            }
        } else {
            $this->session->set_flashdata('error_message', 'Something went wrong. Try Again');
            $this->load->view('staff/shop_registration');
        }
    } else {
        $data['page_name'] = "shop_registration";
        $this->load->view('staff/shop_registration', $data);
    }
}


   
  }