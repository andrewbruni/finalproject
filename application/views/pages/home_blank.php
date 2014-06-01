<!-- 
	Login Blank Page
    Check User Account Credentials 
    Set User Cookie
--> 

<?php

	// Check password and username
	$sql = 'SELECT * FROM users WHERE username = "' .$_POST['userName']. '"' ;
	$query = $this->db->query($sql) ;

	
	foreach ($query->result() as $row)
	{	
		// Check Password
		if( $_POST['password'] == $row->password )
		{
			$value = array() ;
			
			// Add Username to Array for Cookie
			array_push($value, $row->username) ; 
			
			// Encode Array for Cookie								
			$json = json_encode($value, true);
			
			// Set Cookies 			
			setcookie("userCookie", $json, time()+604800);  /* expire in 7 days */
			$_COOKIE['userCookie'] = $json;
			
			redirect('login') ;  
		}
		else
		{
			redirect('nologin') ; 	
		}
	}


?>