<?php

	$badRecipe = ' ' ; 
	
	$sql = ' SELECT * FROM recipes INNER JOIN Users on recipes.user_id=Users.user_id WHERE name = "'.$_POST['recipeName'].'"'  ;	
	$query = $this->db->query($sql) ;
	
	foreach($query->result() as $row)
	{
		$badRecipe = $row->name ; 	
	}
	
	if( $badRecipe != ' ') 
	{	
	echo '<table class="pure-table center tablesorter"><thead><tr><th>View</th><th>Drink Recipe</th><th>Description</th><th>Added By</th></tr></thead><tbody>' ;
	
	foreach ($query->result() as $row)
	{	
		$location = "location.href='view/?drink=".$row->name."'" ; 
		echo '<tr>' ;
		echo '<td> <button onClick="'.$location.'"> View </button> </td>' ; 
   		echo '<td>'.$row->name.'</td>' ;
   		echo '<td>'.$row->short_description.'</td>' ;
   		echo '<td>'.$row->username.'</td>';
		echo '</tr>' ;
	}
	
	echo '</tbody></table>' ;  
	}
	else
	{
		echo '<h2>Sorry, No Recipe Found. Please Try Again. </h2>' ; 	
	}
?>