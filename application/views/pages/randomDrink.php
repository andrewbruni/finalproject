<?php

$sql = "SELECT recipe_id FROM recipes" ; 
$query = $this->db->query($sql) ;

$results = array();
foreach($query->result() as $row) 
{
	$results.push($row->recipe_id ); 	
}

$randomDrink = rand(1, count($results));

echo $randomDrink ; 

$sql2 = "SELECT * FROM recipes WHERE recipe_id =".$results[$randomDrink]." " ; 
$query2 = $this->db->query($sql2) ;

foreach($query2->result() as $row2) 
{
	$name= $row2->name ; 	
}
redirect('view/?drink='.$name) ; 


?>