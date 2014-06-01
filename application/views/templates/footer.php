<script type="text/javascript">
 	var php_color_change =  "<?php echo $_SESSION['bool'] ; ?>";
	
	var php_color1 = "<?php echo $_SESSION['color1'] ; ?>";
	var php_color2 = "<?php echo $_SESSION['color2'] ; ?>";
	var php_color3 = "<?php echo $_SESSION['color3'] ; ?>";
 
 	if( php_color_change == 1 ) 
	{
		var item = document.getElementById('headerbar');
    	item.style.backgroundColor = php_color1 ;
		
		var item = document.getElementsByClassName('navColor');
		for (var i = 0; i < item.length; ++i) 
		{  
    		item[i].style.background = php_color1 ;
		}
		
		var item = document.getElementById('bodybackground');
    	item.style.backgroundColor = php_color2 ;
		
		var item = document.getElementsByTagName('p');
		for (var i = 0; i < item.length; ++i) 
		{  
    		item[i].style.color = php_color3 ;
		}
	}
	else
	{
		var item = document.getElementById('headerbar');
    	item.style.backgroundColor = "#578733" ;
		
		var item = document.getElementsByClassName('navColor');
		for (var i = 0; i < item.length; ++i) 
		{  
    		item[i].style.background = "#578733" ;
		}
		
		var item = document.getElementById('bodybackground');
    	item.style.backgroundColor = "white" ;
		
		var item = document.getElementsByTagName('p');
		for (var i = 0; i < item.length; ++i) 
		{  
    		item[i].style.color = "black" ;
		}
	}
	 
</script>


</div>
</body>
</html>