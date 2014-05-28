<?php

$data = array(
               'first_name' => $_POST['firstName2'],
               'last_name' => $_POST['lastName2'],
               'age' => $_POST['age2']
            );

$this->db->where('uid', $_POST['userID2']);
$this->db->update('Names', $data); 
	
?>