<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Add Trader</title> 
   </head> 
   <body> 
         <?php 
            echo form_open('user/add');
          
			
            echo form_label('First Name'); 
            echo form_input(array('id'=>'first_name','name'=>'first_name')); 
            echo "<br/>"; 
			
			echo form_label('Last Name'); 
            echo form_input(array('id'=>'last_name','name'=>'last_name')); 
            echo "<br/>"; 
			
			echo form_label('Email'); 
            echo form_input(array('id'=>'email','name'=>'email')); 
            echo "<br/>"; 
            
            echo form_label('Address line 1 '); 
            echo form_input(array('id'=>'address_line_1','name'=>'address_line_1')); 
            echo "<br/>"; 
            
            echo form_label('Address Line 2'); 
            echo form_input(array('id'=>'address_line_2','name'=>'address_line_2')); 
            echo "<br/>"; 
			
			echo form_label('Address line 3'); 
            echo form_input(array('id'=>'address_line_3','name'=>'address_line_3')); 
            echo "<br/>"; 
            
            echo form_label('Post Code'); 
            echo form_input(array('id'=>'post_code','name'=>'post_code')); 
            echo "<br/>"; 
			
			echo form_label('Telephone'); 
            echo form_input(array('id'=>'telephone','name'=>'telephone')); 
            echo "<br/>"; 
			
			echo form_label('Mobile'); 
            echo form_input(array('id'=>'mobile','name'=>'mobile')); 
            echo "<br/>"; 
			
			
			
            echo form_submit(array('id'=>'submit','value'=>'Add')); 
            echo form_close(); 
         ?> 
   </body>
</html>