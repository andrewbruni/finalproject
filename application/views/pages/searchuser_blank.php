<?php
	$sql = ' SELECT * FROM users WHERE username = "'.$_POST['userName'].'"'  ;	
	$query = $this->db->query($sql) ;
	foreach ($query->result() as $row)
	{
		$userid = $row->user_id ;
	}
	
	$sql = 'SELECT * FROM recipes WHERE user_id =' . $userid .  '' ;
	$query = $this->db->query($sql) ;
	
		
	echo '<table class="pure-table center tablesorter"><thead><tr><th>View</th><th>Drink Recipe</th><th>Description</th><th>Added By</th></tr></thead><tbody>' ;
	
	foreach ($query->result() as $row)
	{	
		$location = "location.href='view/?drink=".$row->name."'" ; 
		echo '<tr>' ;
		echo '<td> <button onClick="'.$location.'"> View </button> </td>' ; 
   		echo '<td>'.$row->name.'</td>' ;
   		echo '<td>'.$row->short_description.'</td>' ;
   		echo '<td>'.$_POST['userName'].'</td>' ;
		echo '</tr>' ;
	}
	
	echo '</tbody></table>' 

?>