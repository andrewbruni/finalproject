<?php

$sql = 'SELECT * FROM recipes WHERE name = "' . $_GET['drink'] . '"' ; 
	$query = $this->db->query($sql) ; 
	foreach( $query->result() as $row)
	{
		$drinkID = $row->recipe_id ; 	
	}

$this->db->where('recipe_id', $drinkID);
$this->db->delete('recipes');
 
$this->db->where('recipe_id', $drinkID);
$this->db->delete('recipe_detail');

$this->db->where('recipe_id', $drinkID);
$this->db->delete('recipe_contents');

	
?>