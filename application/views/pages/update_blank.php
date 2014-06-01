

<?php
session_start(); 

$data = array(
               'name' => $_POST['recipeName'],
               'short_description' => $_POST['description'],
               
            );

$this->db->where('recipe_id', $_SESSION['drinkID']);
$this->db->update('recipes', $data); 


$data = array(
               'recipe_instructions' => $_POST['instructions'],
            );

$this->db->where('recipe_id', $_SESSION['drinkID']);
$this->db->update('recipe_detail', $data); 




echo '<h2>Update Made</h2>' ; 
?> 