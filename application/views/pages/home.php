<div class="center"  id="home">

<!-- 
	USER LOGIN
    Use cookies to check if user is loged in
    Redirect to login.php
--> 

<?php

// If cookie is set with user data 
if(isset( $_COOKIE['userCookie']) )
{
	redirect('../finalproject/login') ; 
}
else 
{
	// Debugging Code
	// echo 'no cookie' ; 	
}

?>

<form id="loginForm" action="../finalproject/home_blank" enctype="multipart/form-data" method="post" class="pure-form center" > 
    	<br />
        <p>
        Username <input type="text" value="" name="userName" id="userName" />
       	Password <input type="password" value="" name="password" id="password" />
        <input type="submit" value="Login" /></p>
		<br />
		<br /> 
        <p>Need an Account? &nbsp; </p><input type=button onClick="location.href='createuser'" value='Create Account'>
</form>





</div>


