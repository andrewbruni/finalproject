<?php

$this->db->where('recipe_id', $_GET['drink']);
$this->db->delete('recipes');
 
$this->db->where('recipe_id', $_GET['drink']);
$this->db->delete('recipe_detail');

$this->db->where('recipe_id', $_GET['drink']);
$this->db->delete('recipe_contents');

	
?>