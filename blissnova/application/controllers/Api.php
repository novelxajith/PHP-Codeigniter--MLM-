<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->helper(array('form','url'));
        $this->load->library(array('form_validation', 'email'));
		$api_key = $this->input->get_request_header('API-Key', TRUE);
		//log_message('error',$api_key);
		if ($api_key != APIKEY) {
			return false;
			die();
		}
	}
	
     public function VerifyBlissID(){
	    
	    $bliss_id = $this->input->post('bliss_id');
	    $cust_id = $this->input->post('cust_id');
		
		if (empty($bliss_id) || empty($cust_id)) {
			$data['status'] = 'error';
			$data['message'] = 'Empty Param';
			$data['data'] = '';
			echo json_encode($data);
			exit();
		}
		
		$check_bliss_id = $this->db->where('username',$bliss_id)->get('user_role')->row_array();
		
		if(empty($check_bliss_id)){
		    $data['status'] = 'error';
			$data['message'] = 'Please check your Blisser ID';
			$data['data'] = '';
			echo json_encode($data);
			exit();
		}
		
		$datain = array(
               'bliss_id' => $bliss_id,
               'cust_id' => $cust_id,
               'entry_date' => date('Y-m-d H:i:s')
             );
            
        $details = $this->db->insert('blisser_verification',$datain);
        
        $data['status'] = 'success';
		$data['message'] = 'Requested successfully';
		$data['data'] = "";

		echo json_encode($data);
		exit();
		
     }

	public function BlisserPurchase(){
        $bill_id = $this->input->post('bill_id');
        $bliss_id = $this->input->post('bliss_id');
        $amount = $this->input->post('amount');
        if (empty($bill_id) || empty($bliss_id) || empty($amount)) {
           return false;
        } else {
            $datain = array(
               'bliss_id' => $bliss_id,
               'bill_id' => $bill_id,
               'amount' => $amount,
               'entry_date' => date('Y-m-d H:i:s')
             );
            
            $details = $this->db->insert('blisser_purchase',$datain);
            
            if ($details) {
                 return true;
            } else {
                return false;
            }
        }
        
        //echo json_encode($response);
    }
    
    
    public function GetWallet()
	{
		$bliss_id = $this->input->get('bliss_id');
		
		if (empty($bliss_id)) {
			$data['status'] = 'error';
			$data['message'] = 'Empty Param';
			$data['data'] = '';
			echo json_encode($data);
			exit();
		}
		$details = $this->db->select('sum(credit) - sum(debit) as balance')->where('username',$bliss_id)->get('holding_wallet')->row()->balance+0;
		$data['status'] = 'success';
		$data['message'] = 'Data Fetch Successfully';
		$data['data'] = $details;
		echo json_encode($data);
		exit();
	}

  public function PayUsingWallet(){
	    
	    $bliss_id = $this->input->post('bliss_id');
	    $vendor_id = $this->input->post('vendor_id');
	    $amount = $this->input->post('amount');
	    
		
		if (empty($bliss_id) || empty($vendor_id) || empty($amount)) {
			$data['status'] = 'error';
			$data['message'] = 'Empty Param';
			$data['data'] = '';
			echo json_encode($data);
			exit();
		}
		
		$balance = $this->db->select('sum(credit) - sum(debit) as balance')->where('username',$bliss_id)->get('holding_wallet')->row()->balance+0;
		
		if($amount > $balance){
		    $data['status'] = 'error';
			$data['message'] = 'Insufficient balance';
			$data['data'] = '';
			echo json_encode($data);
			exit();
		}
		 
	    $vendor_wallet = $this->api_vendor_wallet($bliss_id,$vendor_id,$amount); 
	    
	    $dec_res = json_decode($vendor_wallet, true);
		
		if ($dec_res['status'] == 'error') {
			$data['status'] = 'error';
			$data['message'] = $vendor_wallet['message'];
			$data['data'] = '';
			echo json_encode($data);
			exit();
		}
		
		$holding_wallet = array(
    		 'entry_date' => date('Y-m-d H:i:s'),
    		 'username' => $bliss_id,
    		 'debit' => $amount
		 );
		 
		 $this->db->insert('holding_wallet',$holding_wallet);
		
		$data['status'] = 'success';
		$data['message'] = 'Purchase successfull';
		$data['data'] = "";

		echo json_encode($data);
		exit();
	}
	
    public function api_vendor_wallet($bliss_id,$vendor_id,$amount){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://blissnova.online/blisser/api/VendorAccount',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('bliss_id' => $bliss_id,'vendor_id' => $vendor_id,'amount' => $amount),
          CURLOPT_HTTPHEADER => array(
            'API-Key: e4891cf2-13f3-479d-8cc0-52a970c3c605',
            'Cookie: ci_session=l8qphgf21oqtlpmh6dvqe3i1qeinjfv7'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
    }
	
	
}