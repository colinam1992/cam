<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head>
	
   <body> 
      <a href = "<?php echo base_url(); ?>index.php/user/add_view">Add</a>
		
      <table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>ID</td>"; 
            echo "<td>First Name</td>"; 
            echo "<td>Last Name</td>"; 
            echo "<td>Email</td>"; 
            echo "<td>Address Line 1</td>"; 
            echo "<td>Address Line 2</td>";
            echo "<td>Address Line 2</td>";
            echo "<td>Post Code</td>";
            echo "<td>Landline</td>";
            echo "<td>Mobile</td>";
            echo "<td>Edit</td>";
            echo "<td>Delete</td>";
            echo "<tr>"; 
            
            
            
          
				
            foreach($records as $r) { 
	            
	            
	            
               echo "<tr>"; 
               echo "<td>".$r->userid."</td>";
               echo "<td>".$r->first_name."</td>";
               echo "<td>".$r->last_name."</td>";
               echo "<td>".$r->email."</td>";
               echo "<td>".$r->address_line_1."</td>";
			   echo "<td>".$r->address_line_2."</td>";
			   echo "<td>".$r->address_line_3."</td>";
			   echo "<td>".$r->post_code."</td>";
			   echo "<td>".$r->telephone."</td>";
			   echo "<td>".$r->mobile."</td>";




               echo "<td><a href = '".base_url()."index.php/user/edit/".$r->userid."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."index.php/user/delete/".$r->userid."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
		
   </body>
	
</html>