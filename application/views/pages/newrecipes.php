<?php

	$sql = 'SELECT * FROM recipes INNER JOIN Users ON Users.user_id=Recipes.user_id  ORDER BY recipe_id DESC LIMIT 10' ; 
	$query = $this->db->query($sql) ;
	
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
	
?>