<?php

$sql = "SELECT COUNT(*) AS 'thenum' FROM recipes" ; 
$query = $this->db->query($sql) ;

foreach($query->result() as $row) 
{
	$number = $row->thenum ; 	
}

$randomDrink = rand(0, $number);

echo $randomDrink ; 

// SQL to Load Drink Information

?>