<?php

	$data = array(
   'first_name' => $_POST['firstName'] ,
   'last_name' => $_POST['lastName'] ,
   'age' => $_POST['age']
);

$this->db->insert('Names', $data); 
	
?>