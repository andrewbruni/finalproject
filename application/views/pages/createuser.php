<div class="center"  id="home">

<!-- 
	USER LOGIN
    Use cookies to check if user is loged in
    Redirect to login.php
--> 

<form id="userForm" action="../finalproject/createuser" enctype="multipart/form-data" method="post" class="pure-form center" > 
    	<br />
        <p><b>Create User </b>
        <br />
		<br />

        Username <input type="text" value="" name="userName" id="userName" />
       	<br />
		<br />

        Password <input type="password" value="" name="password" id="password" />
        <br />
		<br />
		Website Color: 	<select name="color1" id="color1" >
						<option value="#578733">Green</option>
						<option value="#4243BD">Blue</option>
                        <option value="#723594">Purple</option>
						<option value="#D33728">Red</option>
                        <option value="#D97B32">Orange</option>
						</select>
        <br />
		<br />
        Background Color:   <select name="color2" id="color2" >
        					<option value="#FFFFFF">White</option>
							<option value="#578733">Green</option>
							<option value="#4243BD">Blue</option>
                        	<option value="#723594">Purple</option>
							<option value="#D33728">Red</option>
                        	<option value="#D97B32">Orange</option>
							</select>
        <br />
		<br />
		<input type="submit" value="Login" /></p>
</form>





</div>


