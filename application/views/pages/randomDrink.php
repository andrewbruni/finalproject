<?php

$sql = "SELECT COUNT(*) AS 'thenum' FROM recipes" ; 
$query = $this->db->query($sql) ;

foreach($query->result() as $row) 
{
	$number = $row->thenum ; 	
}

$randomDrink = rand(0, $number);

echo $randomDrink ; 

$sql2 = "SELECT * FROM recipes WHERE recipe_id =".$randomDrink." " ; 
$query2 = $this->db->query($sql2) ;

foreach($query2->result() as $row2) 
{
	$name= $row2->name ; 	
}

redirect('view/?drink='.$name) ; 


?>