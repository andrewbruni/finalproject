<?php

$data = array(
               'css1' => $_POST['color1'],
               'css2' => $_POST['color2'],
			   'css3' => $_POST['color3']
            );

$this->db->where('username', $_SESSION['username']);
$this->db->update('users', $data); 
	
redirect('login') ; 
?>