<!--
Backend page for inserting a recipe
-->

<?php

	if( $_SESSION['insertNumber'] == 1)
	{
		$_SESSION['number'] = $_POST['ingredientNumber'] ;
		$_SESSION['recipeName'] = $_POST['recipeName'];
		
		redirect('insertIngredients') ; 	
	}
	else
	{
		/*Query the user_id for the current user*/	
		$sql = "SELECT user_id FROM Users where username='".$_SESSION['username']."'";
		
		$query = $this->db->query($sql);
		$userId = null;
		foreach($query->result() as $row) {
			$userId = $row->user_id;
		}
		/*Insert the Recipe into the Recipe Table*/
		$data = array(
		'name' => $_SESSION['recipeName'],
		'user_id' => $userId,
		'short_description' => $_POST['description'] );
		$this->db->insert('Recipes', $data);
		$rName = mysql_real_escape_string($_SESSION['recipeName']);
		
		/*Query the id of the recipe that was just inserted*/

		$sql = "SELECT recipe_id FROM Recipes WHERE name ='".$rName."' AND user_id=".$userId;
		$recipeId = null;


		$sql = "SELECT recipe_id FROM Recipes WHERE name='".mysql_real_escape_string($_SESSION['recipeName'])."' AND user_id=".$userId." AND short_description='".mysql_real_escape_string($_POST['description'])."'";
		$query = $this->db->query($sql);
		foreach($query->result() as $row) {
			$recipeId = $row->recipe_id;
		}
		/*Insert the Instructions for the recipe*/
		$data = array(
		'recipe_id' => $recipeId,
		'recipe_instructions' => $_POST['instructions'] );
		$this->db->insert('Recipe_Detail', $data);
		
		/*Fetch Ingredients from page*/
		$x = $_SESSION['number'];
		$ingNames = array();
		$amounts = array();
		while ($x != 0) {
			array_push($ingNames, mysql_real_escape_string($_POST['i'.$x]));
			$amounts[$_POST['i'.$x]] = $_POST['a'.$x];

			$x = $x-1;
 		}
		$ingToInsert = $ingNames;
		
		/*Determine Ingredients that already exist in DB*/
		$sql = "SELECT name FROM Ingredients WHERE name IN('".implode("','", $ingNames)."')";
		$query = $this->db->query($sql);
		foreach($query->result() as $row) {
			$pos = array_search($row->name, $ingToInsert);
			unset($ingToInsert[$pos]);
		}
		
		/*Insert missing Ingredients*/
		if(count($ingToInsert) > 0) {
			$data = array();
			foreach($ingToInsert as $ing) {
				$temp = array(
				'name' => $ing
				);
				array_push($data, $temp);
			}
			$this->db->insert_batch('Ingredients', $data);
		}
		
		/*Find the Id's for all ingredients and submit the ingredient details to the content table*/
		$sql = "SELECT * FROM Ingredients WHERE name IN('".implode("','", $ingNames)."')";
		$query = $this->db->query($sql);
		foreach($query->result() as $row) {
			$data = array(
			'recipe_id' => $recipeId,
			'ingredient_id' => $row->ingredient_id,
			'amount' => $amounts[$row->name]
			);
			$this->db->insert('Recipe_Contents', $data);
		}
		
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