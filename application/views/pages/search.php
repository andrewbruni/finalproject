<!--
Insert Page to add drinks to table. 

Create a form to insert recipes. 

Form will forawrd to insert_blank and redirect back. 
--> 


	<form id="searchForm1" action="../finalproject/search_blank" enctype="multipart/form-data" method="post" class="pure-form center" >
    	<br />
        <p><b>Search for a Drink: &nbsp;</b>
        <br />
		<br />
        Search by Recipe Name <input type="text" value="" name="recipeName" id="recipeName" />
        
        <input type="submit" value="Find me a Drink" /></p>
    </form>
    
    <form id="searchForm2" action="../finalproject/search_blank" enctype="multipart/form-data" method="post" class="pure-form center" >
        <br />

        <p>Search by Ingredient <input type="text" value="" name="recipeName" id="recipeName" />
        
        <input type="submit" value="Find me a Drink" /></p>
    </form>
    
    <form id="searchForm3" action="../finalproject/search_blank" enctype="multipart/form-data" method="post" class="pure-form center" >
        <br />

      	<p>Search by User <input type="text" value="" name="recipeName" id="recipeName" />
        
        <input type="submit" value="Find me a Drink" /></p>
        <br /><br />

        <input type=button onClick="location.href='search_blank'" value='Find me a Random Drink'>
	</form>
    