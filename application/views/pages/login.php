<div class="center"  id="home">

<!-- 
	USER HOME PAGE 
    User will view any recipes they have uploaded
    User will be able to change style sheet options, saved with cookies 
--> 

<?php

	// Grab Cookie User Data
	
	$cookie = $_COOKIE['userCookie'];
	$cookie = stripslashes($cookie);
	$userCookieArray = json_decode($cookie, true);
	
	$_SESSION['username'] = $userCookieArray[0] ; 
	
	
	//setcookie("userCookie", 'test', time()-70000000);  /* expire in 7 days */
	// Select Query to Select All Recipes From User
	$sql = ' SELECT * FROM users WHERE username = "'.$userCookieArray[0].'"'  ;	
	$query = $this->db->query($sql) ;
	foreach ($query->result() as $row)
	{
		$userid = $row->user_id ;
		$_SESSION['color1'] =  $row->css1 ;
		$_SESSION['color2'] = $row->css2 ;
		$_SESSION['color3'] = $row->css3 ; 
	}
	
	$sql = 'SELECT * FROM recipes WHERE user_id =' . $userid .  ' ORDER BY name' ;
	$query = $this->db->query($sql) ;
	
		
	echo '<table class="pure-table center tablesorter"><thead><tr><th>View</th><th>Update</th><th>Delete</th><th>Drink Recipe</th><th>Description</th><th>Added By</th></tr></thead><tbody>' ;
	
	foreach ($query->result() as $row)
	{	
		$location = "location.href='view/?drink=".$row->name."'" ; 
		$updateMe = "location.href='update/?drink=".$row->recipe_id."'" ;
		$deleteMe = "location.href='delete/?drink=".$row->recipe_id."'" ;
		echo '<tr>' ;
		echo '<td> <button onClick="'.$location.'"> View </button> </td>' ;
		echo '<td> <button onClick="'.$updateMe.'"> Update </button> </td>' ; 
		echo '<td> <button onClick="'.$deleteMe.'"> Delete </button> </td>' ; 
   		echo '<td>'.$row->name.'</td>' ;
   		echo '<td>'.$row->short_description.'</td>' ;
   		echo '<td>'.$userCookieArray[0].'</td>' ;
   		echo '<td style="display:none;">'.$row->recipe_id.'</td>';
		echo '</tr>' ;
	}
	
	echo '</tbody></table>' 
?>

<form id="cssForm" action="../finalproject/css_blank" enctype="multipart/form-data" method="post" class="pure-form center" > 
    	<br />
        <p>
        <b>Website Colors</b>
        <br />
        <br /> 
        Change Navigation Color: &nbsp; <select name="color1" id="color1" >
						<option value="#578733">Green</option>
						<option value="#4243BD">Blue</option>
                        <option value="#723594">Purple</option>
						<option value="#D33728">Red</option>
                        <option value="#D97B32">Orange</option>
						</select>
        <br />
        <br />
       	Change Background Color: &nbsp; <select name="color2" id="color2" >
        					<option value="#FFFFFF">White</option>
							<option value="#578733">Green</option>
							<option value="#4243BD">Blue</option>
                        	<option value="#723594">Purple</option>
							<option value="#D33728">Red</option>
                        	<option value="#D97B32">Orange</option>
							</select>
        <br />
      	<br />
        Change Font Color: &nbsp; <select name="color3" id="color3" >
        					<option value="#000000">Black</option>
        					<option value="#FFFFFF">White</option>
							<option value="#578733">Green</option>
							<option value="#4243BD">Blue</option>
                        	<option value="#723594">Purple</option>
							<option value="#D33728">Red</option>
                        	<option value="#D97B32">Orange</option>
							</select>
        <br />
       	<br />
        <input type="submit" value="Change Colors" /></p>
</form>	
    
</div>

<script type="text/javascript">
	$(document).ready(function() 
		{ 
			$("table").tablesorter(); 
		} 
	); 
</script> 






