<?php 
	$isNull = true;
	
	$sql = "SELECT * FROM Ingredients INNER JOIN Recipe_Contents ON Recipe_Contents.ingredient_id=Ingredients.ingredient_id INNER JOIN Recipes ON Recipes.recipe_id=Recipe_Contents.recipe_id INNER JOIN Users ON Users.user_id=Recipes.user_id WHERE Ingredients.name='".$_POST['ingredientName']."' ORDER BY Recipes.name";
	$query = $this->db->query($sql);
	foreach($query->result() as $row) {
		$isNull = false;
		break;
	}
	
	if($isNull) {
		echo '<h2>Sorry, No Recipe Found. Please Try Again. </h2>' ; 
	} else {
		echo '<table class="pure-table center tablesorter"><thead><tr><th>View</th><th>Drink Recipe</th><th>Description</th><th>Added By</th></tr></thead><tbody>' ;
		
		foreach($query->result() as $row) {
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
	
?>