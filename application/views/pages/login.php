<div class="center"  id="home">

<!-- 
	USER HOME PAGE 
    User will view any recipes they have uploaded
    User will be able to change style sheet options, saved with cookies 
-->  




<!--
<?php
/*
	$sql = 'SELECT * FROM Names' ;
	$query = $this->db->query($sql) ;
	
		
	echo '<table class="pure-table center tablesorter"><thead><tr><th>User ID</th><th>First Name</th><th>Last Name</th><th>Age</th></tr></thead><tbody>' ;
	
	foreach ($query->result() as $row)
	{	echo '<tr>' ;
   		echo '<td>'.$row->uid.'</td>' ;
   		echo '<td>'.$row->first_name.'</td>' ;
   		echo '<td>'.$row->last_name.'</td>' ;
   		echo '<td>'.$row->age.'</td>' ;
		echo '</tr>' ;
	}
	
	echo '</tbody></table>' 
	
*/	
?>
    
    <form id="insertForm" action="../finalproject/insert" enctype="multipart/form-data" method="post" class="pure-form center" > 
    	<br />
        <p><b>Insert: &nbsp;</b>
        First Name <input type="text" value="" name="firstName" id="firstName" />
       	Last Name <input type="text" value="" name="lastName" id="lastName" />
        Age <input type="number" value="" name="age" id="age" />
        <input type="submit" value="Insert" /></p>
    </form>
    
    <form id="updateForm" action="../finalproject/update" enctype="multipart/form-data" method="post" class="pure-form center" > 
    	<br />
        <p><b>Update: &nbsp;</b>
        User ID <input type="number" value="" name="userID2" id="userID2" />
        First Name <input type="text" value="" name="firstName2" id="firstName2" />
       	Last Name <input type="text" value="" name="lastName2" id="lastName2" />
        Age <input type="number" value="" name="age2" id="age2" />
        <input type="submit" value="Update" /></p>
    </form>
    
    <form id="deleteForm" action="../finalproject/delete" enctype="multipart/form-data" method="post" class="pure-form center" > 
    	<br />
        <p><b>Delete: &nbsp;</b>
       	User ID <input type="number" value="" name="userID3" id="userID3" />
       	<input type="submit" value="Delete" /></p>
    </form>
    
    <p class="pCenter"> Click the table headers in order to sort the data. </p>

</div>

<script type="text/javascript">
	$(document).ready(function() 
		{ 
			$("table").tablesorter(); 
		} 
	); 
</script> 
--> 






