<?php
class Client extends CI_Controller {

        
	   function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  

        public function index()
        {
         $query = $this->db->get("client"); 
         $data['records'] = $query->result(); 	
         $this->load->helper('url'); 
         $this->load->view('client',$data); 

        }
        
        public function add_view() { 
         $this->load->helper('form'); 
         $this->load->view('add_client'); 
      } 
              public function add() {
	       
	       
	       $this->load->model('client_model');
	       $this->load->model('user_model'); 
	       
	        $data = array(
		    'first_name' => $this->input->post('first_name'), 
            'last_name' => $this->input->post('last_name'),
            'email'		=> $this->input->post('email'),
            'address_line_1' => $this->input->post('address_line_1'), 
            'address_line_2' => $this->input->post('address_line_2'),
            'address_line_3' => $this->input->post('address_line_3'),
            'post_code' => $this->input->post('post_code'), 
            'telephone' => $this->input->post('telephone'),
            'mobile' => $this->input->post('mobile'),
            'user_id'=> $this->input->post('user_id')
            		 
	        );
	        
		       
	        $this->user_model->insert($data);
	        
	        $query = $this->db->get("client"); 
			$data['records'] = $query->result(); 
			$this->load->view('client',$data);
	      
      }
        
        }