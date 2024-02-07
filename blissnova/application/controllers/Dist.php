<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dist extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper(array('form','url'));
    $this->load->library(array('form_validation', 'email'));
    $this->form_validation->set_error_delimiters('<span style="color:red">', '</span>');

  }
  
  

        public function index()
        {
            $this->load->view('dist/index');
          }
          public function policy()
        {
            $this->load->view('dist/policy');
          }
          
            public function services()
        {
            $this->load->view('dist/services');
          }
          
             public function about_us()
        {
            $this->load->view('dist/about_us');
          }
          
              public function directors()
        {
            $this->load->view('dist/directors');
          }
          
              public function realm_of_blissnova()
        {
            $this->load->view('dist/realm_of_blissnova');
          }
          
              public function agencies()
        {
            $this->load->view('dist/agencies');
          }
          
              public function certificates()
        {
            $this->load->view('dist/certificates');
          }
          
            public function projects()
        {
            $this->load->view('dist/projects');
          }


          public function sign_up()
                {
                    $this->load->view('dist/sign_up');
                  }






 
}