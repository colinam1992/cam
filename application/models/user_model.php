<?php
	 if (!defined('BASEPATH'))
        exit('No direct script access allowed');
class User_model extends CI_Model {
	 Public function __construct() { 
         parent::__construct(); 
      }

 public function insert($data) { 
	 		
	 	
         if ($this->db->insert("users", $data)) { 
            return true; 
         } 
      } 
   
      public function delete($id) { 
         if ($this->db->delete("users", "userid = ".$id)) { 
            return true; 
         } 
      } 
   
      public function update($data,$id) {
	           
         $this->db->set($data); 
         $this->db->where("userid", $id); 
         $this->db->update("users", $data);
          
                } 
        
}