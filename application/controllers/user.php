<?php
	
defined('BASEPATH') OR exit('No direct script access allowed');

	
class User extends CI_Controller {
	
	
	
	
	   function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  

        public function index()
        {
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 	
         $this->load->helper('url'); 
         $this->load->view('user',$data); 

        }
		public function add_view() { 
         $this->load->helper('form'); 
         $this->load->view('add_user'); 
      } 
      
      public function add() {
	       
	       
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
            		 
	        );
	        
		       
	        $this->user_model->insert($data);
	        
	        $query = $this->db->get("users"); 
			$data['records'] = $query->result(); 
			$this->load->view('user',$data);
	      
      }
      
      
        public function update_user_view() { 
         $this->load->helper('form'); 
         $id = $this->uri->segment('3'); 
         
         $query = $this->db->get_where("users",array("userid"=>$id));
         $data['records'] = $query->result(); 
         $data['old_id'] = $id;
         
         $this->load->view('edit_user',$data); 
      }
      
       public function edit(){ 
	       
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
            'mobile' => $this->input->post('mobile')
            		 
	        );
	        
	        			
         $old_id = $this->input->post('old_id');
        
         $this->user_model->update($data,$old_id); 
		 	
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
         $this->load->view('user',$data); 
      } 
      
      public function delete() { 
         $this->load->model('user_model'); 
         $id = $this->uri->segment('3'); 
         $this->user_model->delete($id); 
   
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
         $this->load->view('user',$data); 
      } 
      
      
}