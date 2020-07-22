<?php 
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	


   
 
	
	if($name=="")	{
		echo "provide name !";	
	}
	

	else
	
	{
		echo "Succcess"	;
		
	}	


}


?>












<html>
<head>
    
</head>
    
    
    <body>
        <center>
            
            <form method="post">
		
	<table border="1">
		<tr aling="center">
			<td colspan="3" >
				<h4 >Personal Profile</h4>
			</td>
		</tr>
		<tr height="50px">
            <td width="100px">
				Name
			</td>
            <td width="300px">
				<input type="text" name="name" pattern="[A-Za-z./]{2,}">
			</td>
			<td width="10px">
				
			</td>
		</tr>
        
        	<tr height="50px">
            <td width="100px">
				Email
			</td>
            <td width="300px">
				<input type="email" name="email" data-error="hints:sample@example.com" required>
			</td>
			<td width="10px">
				
			</td>
		</tr>
        
        	<tr height="50px">
            <td width="100px">
				Gender
			</td>
            <td width="300px">
				<input type="date" name="">(dd/mm/yy)
			</td>
			<td width="10px">
				
			</td>
		</tr>
        
         	<tr height="50px">
            <td width="100px">
				Blood Group
			</td>
            <td width="300px">
                <select>
					<option>A+</option>
					<option>B+</option>
					
				</select>
				
			</td>
			<td width="10px">
				
			</td>
		</tr>
        
        
        <tr height="50px">
            <td width="100px">
				Degree
			</td>
            <td width="300px">
             <input type="checkbox" name="Gender">SSC
				<input type="checkbox" name="Gender">HSC
				<input type="checkbox" name="Gender">BSC
                <input type="checkbox" name="Gender">MSc
				
			</td>
			<td width="10px">
				
			</td>
		</tr>
        
        <tr height="50px">
            <td width="100px">
				Photo
			</td>
            <td width="300px">
				<input type="button"placeholder="Browse.." name=""> No File selected
              
			</td>
			<td width="10px">
				
			</td>
		</tr>
        
        
        
        	<tr height="50px">
            <td colspan="3">
				
			</td>
            
		</tr>
        
        <tr height="50px">
            
            <td colspan="3">
            
                  <button type="submit" name="submit" value="Submit">Submit</button> 
                <button type="reset" value="Reset">Reset</button></td>
            
		</tr>
        
        
        
        
        
        
        
        
        
        
                </table>
            </form>
     
    </center>
    </body>

</html>