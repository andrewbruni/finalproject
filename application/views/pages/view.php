<div class="center"  id="home">

<!-- 
	Drink Display Page 
--> 

<?php
	$instructions = ' ' ;
	$amounts = array() ; 
	$iID = array() ; 
	$ingredients = array() ; 
	$i = 0  ;
	
	// ID
	$sql = 'SELECT * FROM recipes WHERE name = "' . $_GET['drink'] . '"' ; 
	$query = $this->db->query($sql) ; 
	foreach( $query->result() as $row)
	{
		$drinkID = $row->recipe_id ; 	
	}
	
	// Instructions
	$sql2 = 'SELECT * FROM recipe_detail where recipe_id = "' . $drinkID . '"' ; 
	$query2 = $this->db->query($sql2) ; 
	foreach( $query2->result() as $row2 ) 
	{
		$instructions = $row2->recipe_instructions ; 	
		
	}
	
	// Amounts
	$sql3 = 'SELECT * FROM recipe_contents where recipe_id = "' . $drinkID . '"' ; 
	$query3 = $this->db->query($sql3) ; 
	foreach( $query3->result() as $row3 ) 
	{
		array_push($iID, $row3->ingredient_id) ; 
		array_push($amounts, $row3->amount) ;   	
	}
	
	// Ingredient Names 
	
	foreach( $iID as $item )
	{
		$sql4 = 'SELECT * FROM ingredients where ingredient_id = "' . $item . '"' ; 
		$query4 = $this->db->query($sql4) ;
		foreach($query4->result() as $row4)
		{
			$thename = $row4->name ; 	
		}
		array_push($ingredients, $thename) ;  
	}
	
	echo '<p> <b>Drink Name:</b> ' .$_GET['drink'] ; 
	echo '<br /><br />' ; 
	echo '<p> <b>Ingredients:</b></p> ' ; 
	echo '<br /><br />' ; 
	foreach($ingredients as $item)
	{
		echo '<p>'.$item ; 
		echo '&nbsp;' ; 
		echo $amounts[$i].'</p>' ; 
		echo '<br /><br />' ; 
		$i = $i + 1 ; 
	}
	
	echo '<p> <b>Instructions:</b> &nbsp;' .$instructions. '</p>' ; 
?> 




