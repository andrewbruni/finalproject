<?php 
	if(isset($_COOKIE['userCookie'])) {
		unset($_COOKIE['userCookie']);
		setcookie('userCookie', '', time()-3600);
	}
	
	redirect('home') ; 
?>