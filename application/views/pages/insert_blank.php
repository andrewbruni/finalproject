<!--
Backend page for inserting a recipe
-->

<?php

	if( $_SESSION['insertNumber'] == 1)
	{
		$_SESSION['number'] = $_POST['ingredientNumber'] ; 
		redirect('insertIngredients') ; 	
	}
	else
	{
		redirect('insertComplete') ; 
	}
	
/*
	$data = array(
   'first_name' => $_POST['firstName'] ,
   'last_name' => $_POST['lastName'] ,
   'age' => $_POST['age']
);

$this->db->insert('Names', $data); 
*/

?>