<?php
class Use_model extends CI_Model {
Public function __construct() { 
         parent::__construct(); 
      }
      
      public function insert($data) { 
	 		
	 	
         if ($this->db->insert("client", $data)) { 
            return true; 
         } 
      } 
   
      public function delete($id) { 
         if ($this->db->delete("client", "client_id = ".$id)) { 
            return true; 
         } 
      } 
   
      public function update($data,$id) {
	           
         $this->db->set($data); 
         $this->db->where("client_id", $id); 
         $this->db->update("client", $data);
          
                } 

        
}