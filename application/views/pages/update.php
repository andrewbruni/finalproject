<script>
      function sendFormData()
	  {
        	var request = new XMLHttpRequest();
            request.onreadystatechange = function() 
			{
            	if (this.readyState === 4) 
				{
                	var p = document.createElement(p);
                    p.innerHTML = request.responseText;
                    document.getElementById('result').appendChild(p);
                    if($('input[type=checkbox]:checked').length > 0) {
	                    location.reload();
                    }
                }
             };

			request.open('post', '<?php echo base_url() ?>update_blank?xValue='+(xValue+factor), true);
			var imageData = new FormData(document.getElementById('insertForm'));
			request.send(imageData);
		};
</script>
    
<div class="center" id="result">
</div>

<?php
	$instructions = ' ' ;
	$shortDesc = ' '  ; 
	$amounts = array() ; 
	$iID = array() ; 
	$ingredients = array() ; 
	$i = 0  ;
	$drinkID = $_GET['drink'];
	$drinkName = ' ';
	// ID
	$sql = 'SELECT * FROM recipes WHERE recipe_id = "' . $drinkID . '"' ; 
	$query = $this->db->query($sql) ; 
	foreach( $query->result() as $row)
	{
		$_SESSION['drinkID'] = $row->recipe_id ; 
		$shortDesc = $row->short_description ; 
		$drinkName = $row->name ;	
	}
	
	// Instructions
	$sql2 = 'SELECT * FROM recipe_detail where recipe_id = "' . $drinkID . '"' ; 
	$query2 = $this->db->query($sql2) ; 
	foreach( $query2->result() as $row2 ) 
	{
		$instructions = $row2->recipe_instructions ; 	
		
	}
	
	// Amounts
	$sql3 = 'SELECT * FROM recipe_contents where recipe_id = "' . $drinkID . '"' ; 
	$query3 = $this->db->query($sql3) ; 
	foreach( $query3->result() as $row3 ) 
	{
		array_push($iID, $row3->ingredient_id) ; 
		array_push($amounts, $row3->amount) ;   	
	} 
	
	// Ingredient Names 
	
	foreach( $iID as $item )
	{
		$sql4 = 'SELECT * FROM ingredients where ingredient_id = "' . $item . '"' ; 
		$query4 = $this->db->query($sql4) ;
		foreach($query4->result() as $row4)
		{
			$thename = $row4->name ; 	
		}
		array_push($ingredients, $thename) ;  
	}
?>


<form id="insertForm" action="<?php echo base_url() ?>update_blank" enctype="multipart/form-data" method="post" class="pure-form center" > 
    	<br />
        <p><b>Update a Recipe: &nbsp;</b>
        <br />
		<br />
        Recipe Name <input type="text" value=<?php echo '"'.$drinkName.'"' ?> name="recipeName" id="recipeName" />
       	<br />
		<br />
		<div id="ingredients">
        <?php
			$x = count($ingredients) ; 
			?>
			<script>
				var factor = 0;
				var xValue = <?php echo $x; ?>;
				function addRow() {
					factor++;
					var newRow = '<div>Ingredient Name: &nbsp; <input type="text" value="" name="i'+(factor+xValue)+'" id="i'+(factor+xValue)+'" /> ';
					newRow = newRow+'Amount: &nbsp; <input type="text" value="" name="a'+(factor+xValue)+'" id="a'+(factor+xValue)+'" /><br /></div>';
					$("#ingredients").append(newRow);
				};
			</script>
			<?php
        	while( $x != 0 )
			{
				$ingredientName = '"i' . $x . '"' ; 
				$ingredientId = '"i' . $x . '"' ; 
				$amount = '"a' . $x . '"' ; 
				$x = $x - 1 ;
				
				echo '<div>Ingredient Name: &nbsp; <input type="text" value="'.$ingredients[$x].'" name='.$ingredientName.' id='.$ingredientId.' />' ; 
        		echo ' Amount: &nbsp; <input type="text" value="'.$amounts[$x].'" name='.$amount.' id='.$amount.' /> ' ;
        		echo ' Delete?: &nbsp; <input type="checkbox" class="delete" name="delete[]" value="'.$iID[$x].'"> </div>';
       			echo ' <br /> ' ; 			
				 
			}?>
		</div>
        <br />
        Description: 
        <br />
		<textarea name="description" id="description" rows="4"  cols="50"> <?php echo $shortDesc ?></textarea>
        <br />
        <br />
		Instructions: 
        <br />
		<textarea name="instructions" id="instructions" rows="4"  cols="50"> <?php echo $instructions ?> </textarea>
        <br />
		<br />
        <input type="button" value="Update" onclick="sendFormData()"/>
        <input type="button" value="Add Ingredient" onclick="addRow()"</p>
</form>

<?php
/*
$data = array(
               'first_name' => $_POST['firstName2'],
               'last_name' => $_POST['lastName2'],
               'age' => $_POST['age2']
            );

$this->db->where('uid', $_POST['userID2']);
$this->db->update('Names', $data); 
*/
?>