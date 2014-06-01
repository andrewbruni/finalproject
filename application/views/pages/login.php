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
	
	
	//setcookie("userCookie", 'test', time()-70000000);  /* expire in 7 days */
	// Select Query to Select All Recipes From User
	
/*
	$sql = 'SELECT * FROM Names' ;
	$query = $this->db->query($sql) ;
	
		
	echo '<table class="pure-table center tablesorter"><thead><tr><th>User ID</th><th>First Name</th><th>Last Name</th><th>Age</th></tr></thead><tbody>' ;
	
	foreach ($query->result() as $row)
	{	echo '<tr>' ;
   		echo '<td>'.$row->uid.'</td>' ;
   		echo '<td>'.$row->first_name.'</td>' ;
   		echo '<td>'.$row->last_name.'</td>' ;
   		echo '<td>'.$row->age.'</td>' ;
		echo '</tr>' ;
	}
	
	echo '</tbody></table>' 
	
*/	
?>
    
</div>

<script type="text/javascript">
	$(document).ready(function() 
		{ 
			$("table").tablesorter(); 
		} 
	); 
</script> 






