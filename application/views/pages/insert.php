<!--
Insert Page to add drinks to table. 

Create a form to insert recipes. 

Form will forawrd to insert_blank and redirect back. 
--> 

<?php
	$_SESSION['insertNumber'] = 1 ; 
?>


	<form id="insertForm" action="../finalproject/insert_blank" enctype="multipart/form-data" method="post" class="pure-form center" > 
    	<br />
        <p><b>Add a Recipe: &nbsp;</b>
        <br />
		<br />
        Recipe Name <input type="text" value="" name="recipeName" id="recipeName" />
       	<br />
		<br />
        Number of Ingredients: &nbsp; <input type="number" value="" name="ingredientNumber" id="ingredientNumber" />
        <input type="submit" value="Continue" /></p>
	</form>