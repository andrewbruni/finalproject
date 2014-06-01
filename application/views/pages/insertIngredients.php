<!--
Insert Page to add drinks to table. 

Create a form to insert recipes. 

Form will forawrd to insert_blank and redirect back. 
--> 

<?php
	$_SESSION['insertNumber'] = 2 ; 
	
	//echo $_SESSION['number'] ; 
?>



	<form id="insertForm" action="../finalproject/insert_blank" enctype="multipart/form-data" method="post" class="pure-form center" > 
    	<br />
        <p><b>Add a Recipe: &nbsp;</b>
        <br />
		<br />
        Description: 
        <br />
		<textarea name="description" id="description" rows="4"  cols="50"> </textarea>
        <br />
        <br />
        <?php
		
			$x = $_SESSION['number'] ; 
			
        	while( $x != 0 )
			{
				$ingredientName = '"i' . $x . '"' ; 
				$ingredientId = '"i' . $x . '"' ; 
				$amount = '"a' . $x . '"' ; 
				
				echo 'Ingredient Name: &nbsp; <input type="text" value="" name='.$ingredientName.' id='.$ingredientId.' />' ; 
        		echo ' Amount: &nbsp; <input type="text" value="" name='.$amount.' id='.$amount.' /> ' ;
       			echo ' <br /> ' ; 
				echo ' <br />' ; 			
				$x = $x - 1 ; 
			}
        
		?>
        <br />
		Instructions: 
        <br />
		<textarea name="instructions" id="instructions" rows="4"  cols="50"> </textarea>
        <br />
		<br />

        <input type="submit" value="Add Recipe" /></p>
	</form>