<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
     var $data;
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper(array('form','url'));
    $this->load->library(array('form_validation', 'email'));
    $this->form_validation->set_error_delimiters('<span style="color:red">', '</span>');
    // $this->data=$this->db->select('session_id')->where('username',$this->session->userdata('ablisusername'))->where('user_type','a')->get('user_role')->row()->session_id;

  }
  
  
    
 public function staff_panel()
    {
        if($this->session->userdata('ablisusertype') != 'a')
            $this->load->view('admin/index');

        if($_POST) {

                     $this->form_validation->set_rules('staff_name', 'Staff Name', 'trim|required');
                     $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
                     $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
                     $this->form_validation->set_rules('address', 'Address', 'trim|required');
                     $this->form_validation->set_rules('marital_status', 'Marital Status', 'trim|required');
                     $this->form_validation->set_rules('district', 'District', 'trim|required');
                     $this->form_validation->set_rules('state', 'State', 'trim|required');
                     $this->form_validation->set_rules('pincode', 'Pincode', 'trim|required');
                     $this->form_validation->set_rules('employe_role', 'Employe Role', 'trim|required');
                  
                     
                    
                        if($this->form_validation->run()==true)
                        {
                            $result = $this->admin->staff_register();

                			if($result) 
                			{
                			    $data['user']=$result['username'];
                			    $data['pass']=$result['pwd_hint'];
                				$this->session->set_flashdata('success_message', 'Register successfully');
                				redirect('admin/staff_panel','refresh');
                			
                			}else{
                			
                			        $this->session->set_flashdata('error_message', 'check your details');
                                    redirect('admin/staff_panel','refresh');
                				} 
                        }else{
                          
                                 $this->session->set_flashdata('error_message', ' Please Check Your Details');
                                 $this->load->view('admin/staff_panel');
                             }
                    }else{
                       
                       
                            $this->load->view('admin/staff_panel');
                        } 
    }     


  
  public function viewnotification(){
      
        if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
            
            $this->load->view('admin/viewnotification');
      
  }
  
    public function viewmore_notification()
    {   
        if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
       
        $data['viewmore_notification']='viewmore_notification';
        $this->load->view('admin/viewmore_notification',$data);
      }
      
  public function announcement()
{
      if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
        
        
        if ($_POST) {
            $config = array(
                'name' => time(),
                'upload_path' => "assets/announcement",
                'allowed_types' => 'pdf',
                'overwrite' => false,
                'max_size' => "3074000"
            );
        
            $this->load->library('upload', $config);
        
            if ($this->upload->do_upload('userfile')) {
        
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'trim|required');
        
                if ($this->form_validation->run() == true) {
                   
                    if ($this->admin->announcement_insert($this->upload->data()['file_name'])) {
                        $this->session->set_flashdata('success_message', 'Announcement updated Successfully');
                        redirect('admin/announcement', 'refresh');
                    } else {
                        $this->session->set_flashdata('error_message', 'Check your details');
                        redirect('admin/announcement', 'refresh');
                    }
                } else {
                    
                    $this->session->set_flashdata('error_message', 'Please check your details');
                    $this->load->view('admin/announcement');
                }
            } else {
              
                $this->session->set_flashdata('error_message', "Only PDF files are allowed to upload");
                redirect('admin/announcement', 'refresh');
            }
        } else {
               
            $data['page_name'] = "announcement";
            $this->load->view('admin/announcement', $data);
        }
     }
  
  
  public function index()
  {  
      if($this->session->userdata('ablisusertype') != 'a'){
      $this->load->view('admin/index');
      
    }else{
        
       $data['page_name'] = "dashboard"; 
       $this->load->view('admin/dashboard',$data);
     }
      
    }  

      public function team_management($select_parentid = '',$wing="")
{
    if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
			
    if ($select_parentid != '') {
			$data['sponsor'] = $this->admin->get_row_data('user_role','username',$select_parentid);
			$data['share'] = $select_parentid;
		} else {
			$data['sponsor'] = $this->db->where('username',$this->session->userdata('ablisusername'))->get('user_role')->row_array();
			$data['share'] = $this->session->userdata('ablisusername');
		     }
      $data['page_name'] = "team_management";
      $data['user'] = $select_parentid;
      $data['wing'] = $wing;
      $this->load->view('admin/team_management',$data);
    }
    
public function register()
    {
        if($_POST) {


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
                                    redirect('admin/registerontree/'.$data['ref'],'refresh');
                				} 
                        }else{
                                 $this->session->set_flashdata('error_message', ' Please Check Your Details');
                                 $this->load->view('admin/registerontree',$data);
                             }
                    }else{
                        //   $data['position']=$position;
                            $data['ref']=$ref;
                            $this->load->view('admin/registerontree',$data);
                        } 
    }  
    
public function register_ontree()
    {
        if($_POST) {


                     $this->form_validation->set_rules('position', 'Position', 'trim|required');
                     $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
                    // $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
                     $this->form_validation->set_rules('ref_id', 'Ref ID', 'trim|required');
                     $this->form_validation->set_rules('parent_id', 'Ref ID', 'trim|required');
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
                            $result = $this->admin->register_manage_ontree();
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
                                    redirect('admin/registerontree/'.$data['ref'],'refresh');
                				} 
                        }else{
                                 $this->session->set_flashdata('error_message', ' Please Check Your Details');
                                 $this->load->view('admin/registerontree',$data);
                             }
                    }else{
                        //   $data['position']=$position;
                            $data['ref']=$ref;
                            $this->load->view('admin/registerontree',$data);
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
    
public function check_username()
{
    $username = $this->input->post('username');

    $result = $this->db->select('first_name')
                       ->where('username', $username)
                       ->get('user_role')
                       ->row();

    if ($result) {
        // Username found
        echo json_encode(array('status' => 'success'));
    } else {
        // Username not found
        echo json_encode(array('status' => 'error'));
    }
}

    
 

    
 public function send_message()
{

    if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');

      $sender_id = $this->input->post('sender');
      $receiver_id = $this->input->post('receiver');
      $message = $this->input->post('message');
      $this->admin->save_message();

     redirect('admin/chat/'.$receiver_id);

     
}  
public function chat($sender="")
  {
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
      $countt=$this->db->where('sender_id',$sender)->where('status','Unread')->count_all_results('chat_messages')+0;
     if($countt>0){
         $data['status']='read';
         $this->db->where('sender_id',$sender)->update('chat_messages',$data);
     }
        $data['sender']=$this->db->where('sender_id',$sender)->get('chat_messages')->result_array();
        $data['sender_id']=$sender;
        $data['page_name']="chat";
      $this->load->view('admin/chat',$data);
    }
         

   
  public function login()
  {
    if($_POST){
        
         $this->form_validation->set_rules('login_id', 'User Id', 'trim|required|callback_checkuser');
         $this->form_validation->set_rules('password', 'Password', 'trim|required');
               
   if($this->form_validation->run()==true){
                    
      $username= $this->input->post('login_id');
      $password= $this->input->post('password');
      
      $check= $this->admin->login($username,$password);

      if($check != false){
        $this->session->set_userdata('ablisusername',$check['username']);
        $this->session->set_userdata('ablisemail',$check['email']);
        $this->session->set_userdata('ablisusertype',$check['user_type']);
        $this->session->set_userdata('ablissession',$check['session_id']);
        $this->session->set_flashdata('success_message',"Welcome To Blisser");
        redirect('admin/index','refresh');

       
      }else {
        $this->session->set_flashdata('error_message',"Please enter valid details");
        redirect('admin/index','refresh');
      }
    }else{
        $this->session->set_flashdata('error_message',"Please enter valid details");
        redirect('admin','refresh');
    }  
  
}else{
        $this->session->set_flashdata('error_message',"Please enter valid details");
        redirect('admin','refresh');
    }  
}

public function checkuser()
  {

 $check = $this->db->where('user_type','a')->where('username',$this->input->post('login_id'))->count_all_results('user_role')+0;
   
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

// public function logout_all_devices() {

//     $user_id = $this->session->userdata('ablisusername');
//     $data['session_id'] = '';
//     $this->db->where('username',$user_id);
//     $this->db->update('user_role',$data);
//      $this->session->sess_destroy();
//     redirect('admin/index','refresh'); // redirect to your login page
// }

public function logout_all_devices() {

    $user_id = $this->session->userdata('ablisusername');
    $data['session_id'] = '';
    $this->db->where('username',$user_id);
    $this->db->update('user_role',$data);
    
    $last=$this->db->where('username', $user_id)->get('user_role')->row_array();
    $this->db->where('username', $user_id)->update('user_role', array('logout_date_last' => $last['logout_date']));
    
    $this->db->where('username', $user_id)->update('user_role', array('logout_date' => date('Y-m-d H:i:s')));
    
    $this->session->set_userdata('ablissession',''); 
    $this->session->sess_destroy();
    
    redirect('admin/index','refresh'); // redirect to your login page
    
    
}
 
 public function dashboard_reset_password()
{  
 if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
    if($_POST){

      $this->form_validation->set_rules('oldpass','Old password','trim|required|callback_checkoldpass');
      $this->form_validation->set_rules('newpass', 'Password', 'trim|required|min_length[6]');
      $this->form_validation->set_rules('conpass','Confirm Password','trim|required|matches[newpass]');

      if($this->form_validation->run()==true){

        $passwordreset = $this->admin->update_passwordd();

        if($passwordreset){
          
          $this->session->set_flashdata('success_message', "password change successfully");
          $this->logout_all_devices();
        }

        else{   
          log_message('error','ll');
          $this->session->set_flashdata('error_message' , "Failed");
          redirect('admin/dashboard_reset_password','refresh');
        }

      }else{
        $this->session->set_flashdata('old_Form_Error' , "old password is incorrect");
        $data['page_name'] = "dashboard_reset_password";
        $this->load->view('admin/dashboard_reset_password');
      }

    }
    else{  
      $data['page_name'] = "dashboard_reset_password";
      $this->load->view('admin/dashboard_reset_password');
    }

   
}

public function checkoldpass()
 {

    $passcheck = $this->db->where('username',$this->session->userdata('ablisusername'))->where('pwd_hint',$this->input->post('oldpass'))->from('user_role')->count_all_results()+0;

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
  
 public function forgetpassword()
 {
       $mail=bin2hex($this->input->post('email'));
       $user=$this->input->post('username');
       
       if($_POST){
           
      $this->form_validation->set_rules('email','Email','trim|required|callback_checkemail');
      $this->form_validation->set_rules('username','User ID','trim|required|callback_checkusername');
     
      if($this->form_validation->run()==true){
         
        $this->send_otp($mail);
        $this->email_verify($mail,$user);

              }else{
             $data['page_name'] = "forgetpassword";
             $this->load->view('admin/forgetpassword',$data);
        }

       }else{    
            $data['page_name'] = "forgetpassword";
            $this->load->view('admin/forgetpassword',$data);
       }
    }
    
public function checkemail()
  {

  $mailcheck = $this->db->where('username',$this->input->post('username'))->where('email',$this->input->post('email'))->from('user_role')->count_all_results()+0;

  log_message('error',$mailcheck.'count');
    if ($mailcheck == 1)
    {
      return TRUE;    
    }
    else
    {
      $this->form_validation->set_message('checkemail','Incorrect email');
      return FALSE;
    }

  }
 
 public function checkusername()
  {

    $usercheck = $this->db->where('username',$this->input->post('username'))->where('user_type','a')->from('user_role')->count_all_results()+0;

    if ($usercheck == 1)
    {
      return TRUE;    
    }
    else
    {
      $this->form_validation->set_message('checkusername','User ID not found');
      return FALSE;
    }

  }
  

    
// public function send_otp($mail){
    
//         $dataemail=hex2bin($mail);
//         $otp=rand(00001,999999);
//         $data['otp']=$otp;
//         $this->db->where('email',$dataemail);
//         $this->db->update('user_role',$data);
     
//             $this->load->library('email');
//             $config = array();
//             $config['mailtype'] = 'html';
//             $this->email->initialize($config);
//             $this->email->set_newline("\r\n");
//             $this->email->from('noreplay@backofficee.com', 'Blisser');
//             $this->email->reply_to('noreplay@backofficee.com', 'Blisser');
//             $this->email->to($dataemail);
//             $this->email->subject("Forget Password OTP");
//             //$this->email->message("<b>g jsdvdbjdf bjnfdm</b>");  
//             $this->email->message($this->load->view('admin/success',$data,true));   
            
//          $this->email->send();
//             return;
         
//           } 
          
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
        $this->email->subject("Forget Password OTP");
        $this->email->message($this->load->view('admin/success',$data,true));
        $this->email->send();
        
        return true;
  }

public function email_verify($mail='',$user='')
    {   
        $data['email']=hex2bin($mail);
        $data['username']=$user;
        $this->load->view('admin/email_verify',$data);
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
	      redirect('admin/email_verify','refresh');
	   }
	}



public function send_resetpage($email,$username){
   
    $mail=$email; 
    $data['user_id']=$username;  
    
    $this->load->library('email');
    $config = array();
    $config['mailtype'] = 'html';
    $this->email->initialize($config);
    $this->email->set_newline("\r\n");
    $this->email->from('noreplay@backofficee.com', 'Blisser');
    $this->email->reply_to('noreplay@backofficee.com', 'Blisser');
    $this->email->to($mail);
    $this->email->subject("Blisser - Blisser Reset Password");
    //$this->email->message("<b>g jsdvdbjdf bjnfdm</b>");  
    $this->email->message($this->load->view('admin/reset',$data,true));   
    if($this->email->send()){
       echo "Reset Password page sent to your email";
    } 
    else {
     echo "error";
    } 
 }
 
public function reset_passwordd($username)
    {   
         if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
        
        $data['user']=$username;
        $this->load->view('admin/reset_password',$data);
      } 
      
public function verify_password()

    {
    
        if($_POST)
	    { 
	      $this->form_validation->set_rules('username', 'Username', 'trim|required');
	      $this->form_validation->set_rules('password', 'Password', 'trim|required|regex_match[/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}$/]');
          $this->form_validation->set_rules('confirm_password', 'Confirm password','required|matches[password]');
          
          if($this->form_validation->run()==true) 
          {
              $this->db->set('pwd',sha1($this->input->post('password')));
              $this->db->set('pwd_hint',$this->input->post('password'));
              $this->db->where('username',$this->input->post('username'));
              $pass = $this->db->update('user_role');
              
              if($pass)
              {
                  log_message('error','qq');
                  $this->session->set_flashdata('success_message','Password changed successfully');
                //  redirect('admin','refresh');
                  $this->logout_all_devices();
              }
              else
              {
                 
                  $this->session->set_flashdata('error_message','Something went wrong, Password not changed');
                  redirect('admin/reset_passwordd','refresh');
              }
              
          }
          else
          {
              $this->load->view('admin/reset_password');
          }
           
	    }
	    else
	    {
		$this->load->view('admin/reset_password');
	    }
    }
    
public function pin_accept($id)
  {
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');

        $approve = $this->admin->approve_request($id);

        if($approve){
          $this->session->set_flashdata('approve_message',"Request Approved Successfuly");
          redirect('admin/pinrequesthistory','refresh');
        } else {
          $this->session->set_flashdata('approve_message',"Please Try Again");
          redirect('admin/pinrequesthistory','refresh');
        }

  }
  
    public function pin_reject($id)
  {
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
        $reason = $this->input->get('reason');
        $reject = $this->admin->reject_request($id,$reason);

        if($reject){
          $this->session->set_flashdata('reject_message',"Request Rejected Successfully");
          redirect('admin/pinrequesthistory','refresh');
        } else {
          $this->session->set_flashdata('reject_message',"Please Try Again");
          redirect('admin/pinrequesthistory','refresh');
        }

  }
  
      
public function kyc_accept($id)
  {
      if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
     
        $approve = $this->admin->kyc_approve_request($id);

        if($approve){
          $this->session->set_flashdata('approve_message',"Request Approved Successfuly");
          redirect('admin/kycrequest','refresh');
        } else {
          $this->session->set_flashdata('approve_message',"Please Try Again");
          redirect('admin/kycrequest','refresh');
        }

  }
    
 public function kyc_reject($id)
  {
      if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
                        
        $reason = $this->input->get('reason');
        $reject = $this->admin->kyc_reject_request($id,$reason);

        if($reject){
          $this->session->set_flashdata('reject_message',"Request Rejected Successfully");
          redirect('admin/kycrequest','refresh');
        } else {
          $this->session->set_flashdata('reject_message',"Please Try Again");
          redirect('admin/kycrequest','refresh');
        }

  }
  
  
public function activation()
  {
    if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
    if ($_POST) {

      $this->form_validation->set_rules('username', 'User Id', 'required|callback_usercheck|callback_check_old_activation');

      if($this->form_validation->run()==true){
       
        $approve = $this->admin->active();

        if($approve){
          $this->session->set_flashdata('success_message',"User Activated Successfuly");
          redirect('admin/activation','refresh');
        } else {
          $this->session->set_flashdata('error_message',"Please Try Again");
          redirect('admin/activation','refresh');
        }
      } else{
        $this->session->set_flashdata('error_message',"Enter valid user id");
        $this->load->view('admin/activation',$data); 
      }
    }
    else
    {
      $data['page_name'] = "activation";
      $this->load->view('admin/activation',$data); 
    }

  }
  
   public function check_old_activation()
{
    
    $user = $this->input->post('username');
    $alreadyActivated = $this->db->where('username', $user)->where('remark','Activation') ->where('credit', $this->input->post('pin_value'))->count_all_results('pin');

    if ($alreadyActivated > 0) {
        $this->form_validation->set_message('check_old_activation', "Already Activated for this pack.");
        return FALSE;
    }

    $lowerPackActivated = $this->db->where('username', $user)->where('remark','Activation')->where('credit', 1100.00)->count_all_results('pin');
    $higherPackActivated = $this->db->where('username', $user)->where('remark','Activation')->where('credit', 10000.00)->count_all_results('pin');
    if ($lowerPackActivated > 0 && $this->input->post('pin_value') == 1100) {
        $this->form_validation->set_message('check_old_activation', "Already Activated for this pack (1100).");
        return FALSE;
    }

    if ($higherPackActivated > 0) {
        $this->form_validation->set_message('check_old_activation', "Already Activated for this pack (10000).");
        return FALSE;
    }

    return TRUE;
}
  
 public function usercheck()
  {

    $usercheck = $this->db->where('username',$this->input->post('username'))->from('user_role')->count_all_results()+0;

    if ($usercheck == 1)
    {
      return TRUE;    
    }
    else
    {
      $this->form_validation->set_message('usercheck','User ID not found');
      return FALSE;
    }

  }
 
 //pin request//      
public function  pinrequest()      
  {
      if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');

    if($_POST){
      
        $this->form_validation->set_rules('count', 'Count', 'trim|required|numeric|greater_than_equal_to[1]');
        $this->form_validation->set_rules('username', 'User Id', 'required|callback_usercheckcheck');
        
        if($this->form_validation->run()==true){

          if($this->admin->pin_request()){

            $this->session->set_flashdata('success_message', 'Pin generated Successfully');
            redirect('admin/pinrequest','refresh');
          }else{

            $this->session->set_flashdata('error_message', 'check your details');
            redirect('admin/pinrequest','refresh');
          } 
        }else{

          $this->session->set_flashdata('error_message', ' Please Check Your Details');
          $this->load->view('admin/pinrequest');
        }

     
    }else{

      $data['page_name'] = "pinrequest";
      $this->load->view('admin/pinrequest',$data);
    } 
  }  
  
   public function usercheckcheck()
  {

    $usercheck = $this->db->where('username',$this->input->post('username'))->from('user_role')->count_all_results()+0;

    if ($usercheck == 1)
    {
      return TRUE;    
    }
    else
    {
      $this->form_validation->set_message('usercheckcheck','Not a valid user id');
      return FALSE;
    }

  }
  
  public function get_name() {
    $username = $this->input->post('username');
    $name = $this->db->select('first_name')->where('user_type !=','a')->where('username',$username)->get('user_role')->row()->first_name;
    echo json_encode($name);
  }
  
 //payout deductions//      
public function   payout_configuration()      
  {
     if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');

    if($_POST){
      
        $this->form_validation->set_rules('tds', 'Tds', 'trim|required');
        $this->form_validation->set_rules('admin_charge', 'Admin Charge', 'required');
        
        if($this->form_validation->run()==true){

          if($this->admin->payout_deduction()){

            $this->session->set_flashdata('success_message', 'Pin generated Successfully');
            redirect('admin/payout_configuration','refresh');
          }else{

            $this->session->set_flashdata('error_message', 'check your details');
            redirect('admin/payout_configuration','refresh');
          } 
        }else{

          $this->session->set_flashdata('error_message', ' Please Check Your Details');
          $this->load->view('admin/payout_configuration');
        }

     
    }else{

      $data['page_name'] = "payout_configuration";
      $this->load->view('admin/payout_configuration',$data);
    } 
  } 
  
public function payout_accept($id)
  {
      
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');

        $approve = $this->admin->approve_payout($id);

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
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
        $reason = $this->input->get('reason');
        $reject = $this->admin->reject_payout($id,$reason);

        if($reject){
          $this->session->set_flashdata('reject_message',"Request Rejected Successfully");
          redirect('admin/payout_management','refresh');
        } else {
          $this->session->set_flashdata('reject_message',"Please Try Again");
          redirect('admin/payout_management','refresh');
        }

  }

public function user_profile_insert()
{   
   if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
    
   
   if($_POST)
	    { 
	      
             $result = $this->admin->profile_update($this->session->userdata('ablisusername'));
               
             if($result =='true')
              {
            
                  $this->session->set_flashdata('success_message','Details updated successfully');
                  redirect('admin/user_profile','refresh');
              }
              else
              {
           
                  $this->session->set_flashdata('error_message','Something went wrong, Details not updated');
                  redirect('admin/user_profile','refresh');
              }
              
	    }
	    else
	    {
	        $data['user_data']=$this->db->where('user_type','a')->get('user_role')->row_array();
	        
            $this->load->view('admin/user_profile',$data);
          }
          
} 


public function user_profile_edit()
{   
     if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
    
    $selected_user=$this->input->post('username');
   
   if($_POST)
	    { 
	      
             $result = $this->admin->user_profile_update($selected_user);
               
             if($result)
              {
            
                  $this->session->set_flashdata('success_message','Details updated successfully');
                  redirect('admin/userview_page/'.$selected_user,'refresh');
              }
              else
              {
           
                  $this->session->set_flashdata('error_message','Something went wrong, Details not updated');
                  redirect('admin/userview_page/'.$selected_user,'refresh');
              }
              
	    }
	    else
	    {
	       
	        $data['user_data']=$this->db->where('username',$selected_user)->get('user_role')->row_array();
	        $this->session->set_flashdata('error_message','Something went wrong, Details not updated');
            $this->load->view('admin/userview_page',$data);
          }
          
} 



public function user_bank()
{   
    if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
   
   $user = $this->input->post('username');
   if($_POST)
	    { 
	      $this->form_validation->set_rules('ac_name', 'Name', 'trim|required');
	      $this->form_validation->set_rules('ac_no', 'Ac No', 'trim|required');
          $this->form_validation->set_rules('ac_ifsc', 'Ifsc','trim|required');
          $this->form_validation->set_rules('ac_bank', 'Bankname', 'trim|required');
          $this->form_validation->set_rules('ac_branch', 'Branch', 'trim|required');
          
          if($this->form_validation->run()==true) 
          {
             $result = $this->admin->bank_update();
               
             if($result[0]=='true')
              {
                  log_message('error','qq');
                  $this->session->set_flashdata('success_message','Details updated successfully');
                  redirect('admin/bank/'.$user,'refresh');
              }
              else
              {
                  log_message('error','ww');
                  $this->session->set_flashdata('error_message','Something went wrong, Details not updated');
                  redirect('admin/bank/'.$user,'refresh');
              }
              
          }else{
               $this->session->set_flashdata('error_message','Something went wrong, Reached maximum limit');
                  redirect('admin/bank/'.$user,'refresh');
          }
	       
           
	    }
	    else
	    {
            redirect('admin/bank/'.$user,'refresh');
           
          }
          
}

public function  user_kyc()      
  {
     if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
    
    $user = $this->input->post('username');
    if($_POST){
       $config = array(
        'name'=>time(),    
        'upload_path' => "assets/kyc",
        'allowed_types' => 'gif|jpg|png|jpeg|pdf',
        'overwrite' => false,
        'max_size' => "3074000" 
      );

      $this->load->library('upload', $config);
     
      
         if( $this->upload->do_upload('userfile')){
             
             $image_name=$this->upload->data()['file_name'];
            
        }else{
            $image_name=$this->input->post('pan_image');
        }
      
        $data = array('upload_data' => $this->upload->data());
        $this->form_validation->set_rules('aadhar', 'Aadhar No', 'trim|required|numeric');
        $this->form_validation->set_rules('pan', 'Pan No', 'trim|required');

        if($this->form_validation->run()==true){

     

          if($this->admin->update_kyc($image_name)){

            $this->session->set_flashdata('success_message', 'Kyc details updated Successfully');
            redirect('admin/kyc/'.$user,'refresh');
          }else{

            $this->session->set_flashdata('error_message', 'check your details');
            redirect('admin/kyc/'.$user,'refresh');
          } 
        }else{

          $this->session->set_flashdata('error_message', ' Please Check Your Details');
          redirect('admin/kyc/'.$user,'refresh');
        }

  
    }else{

     redirect('admin/kyc/'.$user,'refresh');
    } 
  }  

          public function registration()
  {
      $this->load->view('admin/registration');
    }
    
              public function registerontree($position="",$ref="")
  {
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
      $data['position']=$position;
       $data['ref']=hex2bin($ref);
       $data['name']=$this->db->where('username',hex2bin($ref))->get('user_role')->row_array();
      $this->load->view('admin/registerontree',$data);
    }
    
    
        public function registration_share($ref_id="")
  {
      $data['ref_id']=$ref_id;
      $this->load->view('admin/registration_share',$data);
    }
    
        
       public function registrationsuccess()
  {
      $this->load->view('admin/registrationsuccess');
    }
    
         
       public function quote_history()
  {
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
      $this->load->view('admin/quote_history');
    }
    
    
//           public function genealogy()
//   {
//       $this->load->view('admin/genealogy');
//     }
    
       public function kycrequest()
{
    if ($this->session->userdata('ablisusertype') != 'a') {
        redirect('admin', 'refresh');
    }
    
    $kyc_history = [];
    $kyc_historyy = [];
    
    if ($this->input->post('filter') == "filter" && $this->input->post('type') == "first") {
        $kyc_history = $this->db
            ->where('status','Requested')
            ->where('DATE(entry_date) >=', $this->input->post('min'))
            ->where('DATE(entry_date) <=', $this->input->post('max'))
            ->get('kyc_history')
            ->result_array();
    } else {
       $kyc_history=$this->db->where('status','Requested')->get('kyc_history')->result_array();
    }
    
    if ($this->input->post('filterr') == "filterr" && $this->input->post('typee') == "second") {
        $kyc_historyy = $this->db
            ->where('status!=','Requested')
            ->where('DATE(entry_date) >=', $this->input->post('minn'))
            ->where('DATE(entry_date) <=', $this->input->post('maxx'))
            ->get('kyc_history')
            ->result_array();
    } else {
        $kyc_historyy=$this->db->where('status!=','Requested')->get('kyc_history')->result_array();
    }
    
    $data['kyc_historyy'] = $kyc_historyy;
    $data['kyc_history'] = $kyc_history;
    $data['page_name'] = "kycrequest";
    $this->load->view('admin/kycrequest', $data);
}
    
         public function usercredential()
  {   
      if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
       if($this->input->post('filter')=="filter"){
           $user_details=$this->db->where('user_type','u')->where('date(entry_date) >=',$this->input->post('min'))->where('date(entry_date) <=',$this->input->post('max'))->get('user_role')->result_array();
       }else{
           $user_details=$this->db->where('user_type','u')->get('user_role')->result_array();
       }     
      
      $data['user_details'] = $user_details;
      $data['page_name'] = "usercredential";
      $this->load->view('admin/usercredential',$data);
    }
    




// public function binary_tree($select_parentid = '')
// {
//      if($this->data =='')
//      redirect('admin','refresh');

//     if ($select_parentid != '') {
//         $data['sponsor'] = $this->admin->get_row_data('user_role','username',$select_parentid);
//     } else {
//         $data['sponsor'] = $this->admin->get_row_data('user_role','id',1);

//     }

//     $data['page_name'] = "binary_tree";
//     $this->load->view('admin/binarytree',$data);

// }
      
      
public function binary_tree($select_parentid = '')
{
    if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');

    if ($select_parentid != '') {
        $data['sponsor'] = $this->admin->get_row_data('user_role','username',$select_parentid);
    } else {
        $data['sponsor'] = $this->admin->get_row_data('user_role','id',1);

    }

    $data['page_name'] = "genealogy";
    $this->load->view('admin/genealogy',$data);

}

    
public function search(){
    
      if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
        
        $searchid=$this->input->post('search');
        if($_POST){
            $this->form_validation->set_rules('search','user','trim|callback_check_id');
            if($this->form_validation->run()==true){

              $this->binary_tree($searchid);
            }else{
                
                 $data['sponsor'] = $this->admin->get_row_data('user_role','id',1);
          
            $this->session->set_flashdata('error_message' , "Try Again");
            $this->load->view('admin/genealogy',$data);
            }

        }else{
            
            redirect('admin/binary_tree','refresh');
        }
        }
        
   
    public function pinrequesthistory()
{
    if ($this->session->userdata('ablisusertype') != 'a') {
        redirect('admin', 'refresh');
    }
    
    $pin_history = [];
    $pin_historyy = [];
    
    if ($this->input->post('filter') == "filter" && $this->input->post('type') == "first") {
        $pin_history = $this->db
            ->where('status', 'Request')
            ->where('DATE(entry_date) >=', $this->input->post('min'))
            ->where('DATE(entry_date) <=', $this->input->post('max'))
            ->get('investment')
            ->result_array();
    } else {
        $pin_history = $this->db
            ->where('status', 'Request')
            ->get('investment')
            ->result_array();
    }
    
    if ($this->input->post('filterr') == "filterr" && $this->input->post('typee') == "second") {
        $pin_historyy = $this->db
            ->where('status !=', 'Request')
            ->where('DATE(entry_date) >=', $this->input->post('minn'))
            ->where('DATE(entry_date) <=', $this->input->post('maxx'))
            ->get('investment')
            ->result_array();
    } else {
        $pin_historyy = $this->db
            ->where('status !=', 'Request')
            ->get('investment')
            ->result_array();
    }
    
    $data['pin_historyy'] = $pin_historyy;
    $data['pin_history'] = $pin_history;
    $data['page_name'] = "pinrequesthistory";
    $this->load->view('admin/pinrequesthistory', $data);
}

    public function payout_management()
  {
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
            
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
      $this->load->view('admin/payout_management',$data);
    }
    
           public function logout()
  {
      
      $this->load->view('admin/logout');
    }

      
           public function calender()
  {  
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
    
      $data['page_name'] = "calender";
      $this->load->view('admin/calender',$data);
    }
    
    public function calenders()
        {

            if($_POST){
                    $this->form_validation->set_rules('title', 'Title', 'trim|required');
                    $this->form_validation->set_rules('label', 'Label', 'trim|required');
                    $this->form_validation->set_rules('sdate', 'Sdate', 'trim|required');
                    $this->form_validation->set_rules('edate', 'Edate', 'trim|required');
                    $this->form_validation->set_rules('all', 'All', 'trim|required');
                    $this->form_validation->set_rules('url', 'URL', 'trim|required');
                    $this->form_validation->set_rules('guests', 'Guests', 'trim|required');
                    $this->form_validation->set_rules('location', 'Location', 'trim|required');
                    $this->form_validation->set_rules('description', 'Des', 'trim|required');
                        
                    if($this->form_validation->run()==true){
                       
                      $referral=$this->admin->calenders();
                    
                            $this->session->set_flashdata('success_message', 'Request Submitted Successfully');
                            redirect('admin/calender','refresh');
                       
                    }else{
                        $this->session->set_flashdata('error_message', ' Please Check Your Details');
                         $data['page_name'] = "calender";
                        $this->load->view('admin/calender',$data);
                    }
                
            }else{
                
            $data['page_name'] = "calender";
            $this->load->view('admin/calender',$data);
            } 
        }    
    
    
    
           public function earningtable()
  { 
      if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
     
      $this->load->view('admin/earningtable');
    }
  

                    
    public function check_id()
    {  
            $user= $this->input->post('search');
          
            $treecheck = $this->db->where('child_id',$user)->count_all_results('tree')+0;
            if($treecheck > 0){
        
                return TRUE;   
            }else{
                $this->form_validation->set_message('check_id', "User id not found");
                return FALSE;
            }
        
        }
  public function userview_page($userid="")
{   
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
      $user_id=$this->db->where("username",$userid)->get('user_role')->row_array();
      $data['user_data']=$user_id;
      $this->load->view('admin/userview_page',$data);
 }
   
    
public function user_profile()
{   
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      $admin_id=$this->db->where('user_type','a')->get('user_role')->row_array();
      $data['user_data']=$admin_id;
      $this->load->view('admin/user_profile',$data);
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

  $this->db->where_in('user_type', 'a');
  $this->db->update('user_role', $data);

  // Prepare the response
  $response = ['success' => true];
  header('Content-Type: application/json');
  echo json_encode($response);
}
     
public function bank($id='')
{   
      if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
     
      $data['user']=$id;
      $this->load->view('admin/bank',$data);
 }
    
public function kyc($id='')
{   
      if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
      $data['user']=$id;
      $this->load->view('admin/kyc',$data);
 }    
    
public function left_team($id='')
{   
        if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
      $data['user']=$id;
      $this->load->view('admin/left_team',$data);
 }
    
public function right_team($id='')
{   
        if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
      $data['user']=$id;
      $this->load->view('admin/right_team',$data);
 }
public function direct_team($id='')
{   
        if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
     
      $data['user']=$id;
      $this->load->view('admin/direct_team',$data);
 } 
public function myearning_points($id='')
{   
        if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
     $total_income=$this->db->where('username',$id)->group_start()
                       ->where('remark', 'Direct Income')
                       ->or_where('remark','Pair Income')->or_where('remark','point transfer')
                     ->group_end()->get('account')->result_array();
     $data['incomee']=$total_income;
     $data['user']=$id;
     $this->load->view('admin/myearning_points',$data);
 }
 
 public function myearnings()
{
  $income_detail=$this->db->where('username',$this->input->post('username'))->where('date(entry_date) >=',$this->input->post('date1'))->where('date(entry_date) <=',$this->input->post('date2'))->where('remark',$this->input->post('type'))->get('account')->result_array();
  $data['incomee']=$income_detail;
  $data['user']=$this->input->post('username');
  $this->load->view('admin/myearning_points',$data);
}
    
public function withdrawal_statement($id='')
{   
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
      $data['user']=$id;
      $this->load->view('admin/withdrawal_statement',$data);
 }
    
public function user_pinrequesthistory($id='')
{   
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
      $data['user']=$id;
      $this->load->view('admin/user_pinrequesthistory',$data);
 }
  
                 public function invoice_list()
  {
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
      $data['page_name']="invoice_list";
      $this->load->view('admin/invoice_list',$data);
    }     

public function invoice($idd)
{   
     if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
      $data['id']=$idd;
      $this->load->view('admin/invoice',$data);
    }
 
public function invoice_print($id="")
  {
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
      $data['id']=$id;
      $this->load->view('admin/invoice_print',$data);
    }
    

    
        
 

  public function shop_registration()
{
    if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
            
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
            $result = $this->admin->shop_manage();

            if ($result) {
                $this->session->set_flashdata('success_message', 'Shop registered successfully');
                redirect('admin/shop_registration', 'refresh');
            } else {
                $this->session->set_flashdata('error_message', 'Something went wrong. Please try again');
                redirect('admin/shop_registration', 'refresh');
            }
        } else {
            $this->session->set_flashdata('error_message', 'Something went wrong. Try Again');
            $this->load->view('admin/shop_registration');
        }
    } else {
        $data['page_name'] = "shop_registration";
        $this->load->view('admin/shop_registration', $data);
    }
}

     
        public function user_withdrawalhistory($id='')
    {   
        if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
     
        $data['user']=$id;
        $this->load->view('admin/user_withdrawalhistory',$data);
      }
            public function user_activationhistory($id='')
    {  
          if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
         
        $data['user']=$id;
        $this->load->view('admin/user_activationhistory',$data);
      }
      
        public function activationhistory()
    {   
        if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
            
        if($this->input->post('filter')=="filter"){
            $history = $this->db->where('status','Active')->where('date(activated_date)',$this->input->post('min'))->where('date(activated_date)',$this->input->post('max'))->where('user_type','u')->get('user_role')->result_array();
        }else{
            $history = $this->db->where('status','Active')->where('user_type','u')->get('user_role')->result_array();
        }    
        
        $data['history']=$history;
        $this->load->view('admin/activationhistory',$data);
      }
  

        public function viewmore($userid="")
    {   
        if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');

        if($this->input->post('filter')=="filter"){
            $history = $this->db->where('username',$userid)->where('date(entry_date)',$this->input->post('min'))->where('date(entry_date)',$this->input->post('max'))->get('e_pin')->result_array();
        }else{    
            $history = $this->db->where('username',$userid)->get('e_pin')->result_array();
        }   
        
        $data['history']=$history;    
        $data['user_id_detail']=$userid;
        $this->load->view('admin/viewmore',$data);
      }
  
      
      
      
      
    public function quotes()
    {
         if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
        
        if($_POST){
            
            $ff=$this->db->where('id','1')->get('quotes')->row_array();
            
        if(empty($ff)){
                $data=array(
                'note' => $this->input->post('note'),
                'entry_date'=>date('Y-m-d H:i:s'),
                'remark' => "qoute",
                ); 
            $this->db->insert('quotes',$data);
            redirect('admin/index','refresh');
        }else{
             $data=array(
                'note' => $this->input->post('note'),
                'entry_date'=>date('Y-m-d H:i:s'),
                'remark' => "qoute",
                ); 
            $this->db->where('id','1')->update('quotes',$data);
            redirect('admin/index','refresh');
              }
        } else{
            $this->load->view('admin/dashboard');
        }
    }
     
    
  public function bank_management()
    {   
         if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
       if ($_POST) {
        $this->form_validation->set_rules('acc_holder_name', 'Account holder name', 'trim|required');
        $this->form_validation->set_rules('acc_no', 'Account number', 'trim|required|numeric');
        $this->form_validation->set_rules('bank_name', 'Bank name', 'trim|required');
        $this->form_validation->set_rules('branch_name', 'Branch name', 'trim|required');
        $this->form_validation->set_rules('ifsc', 'IFSC code', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->admin->bank_manage($upi_image);

            if ($result) {
                $this->session->set_flashdata('success_message', 'Bank updated successfully');
                redirect('admin/bank_management', 'refresh');
            } else {
                $this->session->set_flashdata('error_message', 'Something went wrong. Please try again');
                redirect('admin/bank_management', 'refresh');
            }
        } else {
            $this->session->set_flashdata('error_message', 'Something went wrong. Try Again');
            $this->load->view('admin/bank_management');
        }
    } else {
        $data['page_name']="bank_management";
        $this->load->view('admin/bank_management',$data);
   }
        
} 
 
 public function upi_management()
{
     if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
    
    if ($_POST) {
        $config = array(
            'name' => time(),
            'upload_path' => "assets/images",
            'allowed_types' => "gif|jpg|png|jpeg|pdf|mp4",
            'overwrite' => false,
            'max_size' => "3074000"
        );

        $this->load->library('upload', $config);

            $this->upload->do_upload('upi_image');
            $data = array('upload_data' => $this->upload->data());
            $this->form_validation->set_rules('upi_number', 'UPI Number', 'trim|required');

            if ($this->form_validation->run() == true) {
                
                $image_name=$this->upload->data()['file_name'];
                $oldimg=$this->db->select('upi_image')->where('user_type','a')->get('user_role')->row()->upi_image;
                
                if($image_name ==""){
                    $img=$oldimg;
                }else{
                      $img=$image_name;
                }
                
                if ($this->admin->upi_manage($img)){
                    $this->session->set_flashdata('success_message', 'New Service Added Successfully');
                    redirect('admin/bank_management', 'refresh');
                } else {
                    $this->session->set_flashdata('error_message', 'Check your details');
                    redirect('admin/bank_management', 'refresh');
                }
            } else {
                $this->session->set_flashdata('error_message', 'Please Check Your Details');
                $this->load->view('admin/bank_management', $data);
            }
       
    } else {
        $data['page_name'] = "bank_management";
        $this->load->view('admin/bank_management', $data);
    }
}

 
 
    public function pinview($deposit_id="")
  {
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
      
       $data['id']=$deposit_id;
      $this->load->view('admin/pinview',$data);
      
    }        
     
    public function totalprimepay_in()
  {
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
        
    if($this->input->post('filter')=="filter"){
         $primepayin= $this->db->where('status','Accepted')->where('date(entry_date) >=',$this->input->post('min'))->where('date(entry_date) <=',$this->input->post('max'))->where('pack','10000')->get('investment')->result_array(); 
      }else{
         $primepayin= $this->db->where('status','Accepted')->where('pack','10000')->get('investment')->result_array();  
      }
       $data['primepayin']=$primepayin;     
      $this->load->view('admin/totalprimepay_in',$data);
      
    }        
        
    public function totalpluspay_in()
  {
       if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
            
      if($this->input->post('filter')=="filter"){
        $primepayin= $this->db->where('status','Accepted')->where('date(entry_date) >=',$this->input->post('min'))->where('date(entry_date) <=',$this->input->post('max'))->where('pack','1100')->get('investment')->result_array(); 
      }else{
         $primepayin= $this->db->where('status','Accepted')->where('pack','1100')->get('investment')->result_array(); 
      }
         
      $data['primepayin']=$primepayin;
      $this->load->view('admin/totalpluspay_in',$data);
      
    }  

    
    public function team_incentive(){
        
         if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
        
    $inc=$this->db->where('remark','Pair Income')->where('credit !=','0')->get('account')->result_array(); 
    $data['inc']=$inc;
    $this->load->view('admin/team_incentive',$data);
}  

    public function team_incentive_filter(){
    
     if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
    
    $inc=$this->db->where('remark','Pair Income')->where('date(entry_date) >=',$this->input->post('min'))->where('date(entry_date) <=',$this->input->post('max'))->where('credit !=','0')->get('account')->result_array(); 
    $data['inc']=$inc;
    $this->load->view('admin/team_incentive',$data);
}  

public function affiliate_incentive(){
    
     if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
    
     $inc=$this->db->where('remark','Direct Income')->where('credit !=','0')->get('account')->result_array(); 
     $data['inc']=$inc;
     $this->load->view('admin/affiliate_incentive',$data);
}

public function affiliate_incentive_filter(){
    
     if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
    
     $inc=$this->db->where('remark','Direct Income')->where('date(entry_date) >=',$this->input->post('min'))->where('date(entry_date) <=',$this->input->post('max'))->where('credit !=','0')->get('account')->result_array(); 
     $data['inc']=$inc;
     $this->load->view('admin/affiliate_incentive',$data);
}  

public function pin_history_view($type=""){
    
     if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
    
     $data['type']=$type;
     $this->load->view('admin/pin_history_view',$data);
}  

public function invoice_withdraw($id=""){
    
     if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
    
     $data['id']=$id;
     $this->load->view('admin/invoice_withdraw',$data);
}  

public function invoice_print_withdrawal($id=""){
    
     if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
    
     $data['id']=$id;
     $this->load->view('admin/invoice_print_withdrawal',$data);
} 

public function right_active(){
    
     if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
            
     if ($this->input->post('filter') == "filter") {
        
        $right_user = $this->db->where('position', 'right')->where('parent_id', $this->session->userdata('ablisusername'))->get('tree')->row_array();
        
        if (!empty($right_user)) {
            $right = $this->db->like('team', $right_user['child_id'])->get('tree')->result_array();
            array_unshift($right, $right_user);
            $right_team = $right;
        
            $filteredRightTeam = [];
            foreach ($right_team as $a=> $keyy) {
                if (date($keyy['entry_date']) >= $this->input->post('min') && date($keyy['entry_date']) <= $this->input->post('max')) {
                    $filteredRightTeam[] = $keyy;
                }
            }
        }

        //print_r($filteredRightTeam);
    }
    else {
        
        $right_user=$this->db->where('position','right')->where('parent_id', $this->session->userdata('ablisusername'))->get('tree')->row_array();
            if(!empty($right_user))
            {
              $right=$this->db->like('team',$right_user['child_id'])->get('tree')->result_array();
              array_unshift($right, $right_user);
              $filteredRightTeam=$right;  
            }
    }         
    
     $data['right_team']=$filteredRightTeam;
     $data['page_name']="right_active";
     $this->load->view('admin/right_active',$data);
}

public function left_active(){
    
     if ($this->session->userdata('ablisusertype') != 'a') 
            redirect('admin', 'refresh');
            
    if ($this->input->post('filter') == "filter") {
        
        $right_user = $this->db->where('position', 'left')->where('parent_id', $this->session->userdata('ablisusername'))->get('tree')->row_array();
        
        if (!empty($right_user)) {
            $right = $this->db->like('team', $right_user['child_id'])->get('tree')->result_array();
            array_unshift($right, $right_user);
            $right_team = $right;
        
            $filteredRightTeam = [];
            foreach ($right_team as $a=>$keyy) {
                if (date($keyy['entry_date']) >= $this->input->post('min') && date($keyy['entry_date']) <= $this->input->post('max')) {
                    $filteredRightTeam[] = $keyy;
                }
            }
        }
        
    } else {
        
        $right_user=$this->db->where('position','left')->where('parent_id', $this->session->userdata('ablisusername'))->get('tree')->row_array();
            if(!empty($right_user))
            {
               $right=$this->db->like('team',$right_user['child_id'])->get('tree')->result_array();
               array_unshift($right, $right_user);
               $filteredRightTeam=$right;  
            }
    }        
     
     $data['right_team']=$filteredRightTeam;
     $data['page_name']="left_active";
     $this->load->view('admin/left_active',$data);
}

  }
  
