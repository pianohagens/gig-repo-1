<?php

/**
 * controllers/Admin.php
 *
 * Admin controller for Gig Central
 * 
 * @package ITC260
 * @subpackage Pages
 * @author Rattana Neak
 * @version 2.0 2016/06/14
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see models/admin_model.php
 * @see view/admins/add.php
 * @see view/admins/admin.php
 * @see view/admins/index.php
 * @see view/admins/login.php
 * @see view/admins/reset.php
 * @see view/admins/success.php
 * @see view/admins/view.php
 * @todo
 */
 
class Admin extends CI_Controller {
         public function __construct()
        {//begin constructor
            parent::__construct();
            $this->load->model('admin_model');
            $this->load->library('form_validation');
            $this->load->database();
		    $this->load->helper('form');
		    //$this->load->helper('email');
            //05232018_$this->load->library('session'); this will regenerate a new session everytime the constructor is called, which will destroy the userData that is set when logging in!
            //$this->load->library('recaptcha');
        }#end constructor
        
        public function index(){
            $data['title'] ="Admin dashboard";
            if ($this->session->logged_in == TRUE){
                $logged = 'You have Loggedin GigCentral Website!';
            }else{
                $logged = 'You have Logged out!';
            }
//            if (isset($this->session->first_name)){
//                $data['first_name'] = $this->session->first_name;   
//            }else{
//                $data['first_name'] = "";
//            }
            if (isset($this->session->email)){
                $data['email'] = $this->session->email;
                $data['first_name'] = $this->session->first_name;
                $data['last_name'] = $this->session->last_name;
                $data['picture'] = $this->session->picture;
                }else{
                $data['email'] = "";
                $data['first_name'] = "";
                $data['last_name'] = "";
                $data['picture'] = "";
                }
            
            $data['logged'] = $logged;
            $this->load->view('admins/index',$data);
        }
        public function login()
        {
            
            $data['title'] = "Login page";
            if(!isset($_POST['Submit'])){
                $data['error']='';
                $this->load->view('admins/login',$data);    
            }else{
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
                $this->form_validation->set_rules('pass', 'Pass', 'trim|required',array(
                    'required' => 'The password field is required'
                ));
                if ($this->form_validation->run() == FALSE) // validation hasn't been passed
                { 
                    $this->load->view('admins/login',$data);
                    
                }else{
                    $form_data = array(
                    'email' => set_value('email'),
                    'pass' => set_value('pass')
                    );
                 if ($this->admin_model->getInfor($form_data)){
                  $data['error'] = $this->admin_model->getInfor($form_data);   
                 }else{
                   $data['error']='';
                 }
                 $this->load->view('admins/login',$data);    
                }
                
            }
            
        }
        public function reset()
        {
            $data['title'] = "Reset Password";
            $data['error']='';
            if(!isset($_POST['Submit']))
            {
                $this->load->view('admins/reset',$data);    
            }else{
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
                if ($this->form_validation->run() == FALSE) // validation hasn't been passed
                { 
                    $this->load->view('admins/reset',$data);
                    
                }else{
                    $email = set_value('email');
                    
                    $data['error'] = $this->admin_model->reset($email);
                    $this->load->view('admins/success',$data);
                }
            }
            
            
            
                
        }
        
        public function view($slug = NULL)
        {
            
            $this->load->view('admins/view', $data);
        }
        
        public function logout(){
          
           unset(
            $_SESSION['status'],
            $_SESSION['first_name'],
            $_SESSION['last_name'],
            $_SESSION['picture'],
            $_SESSION['email'],
            $_SESSION['logged_in'],
            $_SESSION['lang']
            );
          
            redirect('admin/');
        }
      
}