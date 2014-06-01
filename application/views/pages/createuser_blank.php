
<!-- 
	USER LOGIN
    Use cookies to check if user is loged in
    Redirect to login.php
--> 

<?php

	$sql = "SELECT * FROM users WHERE username = '". $_POST['userName'] . "'" ; 
	$query = $this->db->query($sql) ; 
	
	if($query->num_rows() > 0) 
	{
		redirect('createuser_error') ; 	
	}


	$data = array(
   		'username' => $_POST['userName'] ,
   		'password' => $_POST['password'] ,
   		'css1' => $_POST['color1'],
   		'css2' => $_POST['color2'],
		'css3' => $_POST['color3']
	) ;

	$this->db->insert('users', $data) ; 
	
	
	
	$value = array() ;
			
	// Add Username to Array for Cookie
	array_push($value, $_POST['userName']) ; 
	
	// Encode Array for Cookie								
	$json = json_encode($value, true);
	
	// Set Cookies 			
	setcookie("userCookie", $json, time()+604800);  /* expire in 7 days */
	$_COOKIE['userCookie'] = $json;

	$_SESSION['bool'] = 1 ; 

	redirect('login') ; 
?>







