

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
$this->db->update('Recipe_Detail', $data); 

$this->db->where('recipe_id', $_SESSION['drinkID']);
$this->db->delete('Recipe_Contents');

/*Fetch Ingredients from page*/
		$x = $_GET['xValue'];
		
		if(isset($_POST['delete'])){
	foreach($_POST['delete'] as $delete) {
		$array = array('recipe_id' => $_SESSION['drinkID'], 'ingredient_id' => $delete);
		$this->db->where($array);
		$this->db->delete('recipe_contents');
		$x--;
	}
}
		$ingNames = array();
		$amounts = array();
		while ($x != 0) {
			array_push($ingNames, $_POST['i'.$x]);
			$amounts[$_POST['i'.$x]] = $_POST['a'.$x];

			$x = $x-1;
 		}
		$ingToInsert = $ingNames;
		
		/*Determine Ingredients that already exist in DB*/
		$sql = "SELECT name FROM Ingredients WHERE name IN('".implode("','", $ingNames)."')";
		$query = $this->db->query($sql);
		foreach($query->result() as $row) {
			$pos = array_search($row->name, $ingToInsert);
			unset($ingToInsert[$pos]);
		}
		
		/*Insert missing Ingredients*/
		$data = array();
		foreach($ingToInsert as $ing) {
			$temp = array(
			'name' => $ing
			);
			array_push($data, $temp);
		}
		if(count($data)>1){
			$this->db->insert_batch('Ingredients', $data);
		} else if(count($data)>0){
			$this->db->insert('Ingredients',$data[0]);
		}
		
		/*Find the Id's for all ingredients and submit the ingredient details to the content table*/
		$data = array();
		$sql = "SELECT * FROM Ingredients WHERE name IN('".implode("','", $ingNames)."')";
		$query = $this->db->query($sql);
		foreach($query->result() as $row) {
			$temp = array(
			'recipe_id' => $_SESSION['drinkID'],
			'ingredient_id' => $row->ingredient_id,
			'amount' => $amounts[$row->name]
			);
			array_push($data, $temp);
		}
		$this->db->insert_batch('Recipe_Contents', $data);




/*Delete any rows to be deleted*/

echo '<h2>Update Made</h2>' ; 
?> 