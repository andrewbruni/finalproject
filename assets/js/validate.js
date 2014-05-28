$(document).ready(

function()
{
	
	form1 = ["#firstName", "#lastName", "#age"];
	form2 = ["#userID2", "#firstName2", "#lastName2", "#age2"];
	form3 = ["#userID3"];
	
	
	pageError = $("#form-error");
	emptyInput = "Please fill out this field.";
	charError = "A-Z Characters Only Please" ;
	
	// Validation of input fields 
	$("#insertForm").submit(function(e)
	{	
	 
		//Validate required fields
		for (i = 0 ; i < form1.length ; i++ ) 
		{
			var input = $(form1[i]) ;
	
			if ((input.val() == "") || (input.val() == emptyInput)) 
			{
				input.addClass("inputError") ;
				input.val(emptyInput) ;
				pageError.fadeIn(1) ;
			} else 
			{
				input.removeClass("inputError") ;
			}
		}
		
		// First Name Validation
		if (!/^([a-zA-Z])+$/.test($('#firstName').val()) ) 
		{
			$('#firstName').addClass("inputError") ;
			$('#firstName').val(charError) ;
		}
		
		// Last Name Validation
		if (!/^([a-zA-Z])+$/.test($('#lastName').val()) ) 
		{
			$('#lastName').addClass("inputError") ;
			$('#lastName').val(charError) ;
		}
		
		// Return False if any fields have errors 
		if ($("#firstName").hasClass("inputError") || $("#lastName").hasClass("inputError") || $("#age").hasClass("inputError")) 
		{
			e.preventDefault() ;
			return false ;
		} 
		else 
		{
			 return true ; 
		}	
	});
	
	$("#updateForm").submit(function(e)
	{	
	
		//Validate required fields
		for (i = 0 ; i < form2.length ; i++ ) 
		{
			var input = $(form2[i]) ;
	
			if ((input.val() == "") || (input.val() == emptyInput)) 
			{
				input.addClass("inputError") ;
				input.val(emptyInput) ;
				pageError.fadeIn(1) ;
			} else 
			{
				input.removeClass("inputError") ;
			}
		}
		
				// First Name Validation
		if (!/^([a-zA-Z])+$/.test($('#firstName2').val()) ) 
		{
			$('#firstName2').addClass("inputError") ;
			$('#firstName2').val(charError) ;
		}
		
		// Last Name Validation
		if (!/^([a-zA-Z])+$/.test($('#lastName2').val()) ) 
		{
			$('#lastName2').addClass("inputError") ;
			$('#lastName2').val(charError) ;
		}
		
		// Return False if any fields have errors 
		if ($("#firstName2").hasClass("inputError") || $("#lastName2").hasClass("inputError") || $("#age2").hasClass("inputError") || $("#userID2").hasClass("inputError"))
 		{
			e.preventDefault() ;
			return false ;
		} 
		else 
		{
			 return true ; 
		}	
	});
	
	$("#deleteForm").submit(function(e)
	{	
	
		//Validate required fields
		for (i = 0 ; i < form3.length ; i++ ) 
		{
			var input = $(form3[i]) ;
	
			if ((input.val() == "") || (input.val() == emptyInput)) 
			{
				input.addClass("inputError") ;
				input.val(emptyInput) ;
				pageError.fadeIn(1) ;
			} else 
			{
				input.removeClass("inputError") ;
			}
		}
		
		// Return False if any fields have errors 
		if ($("#userID3").hasClass("inputError")) 
		{
			e.preventDefault() ;
			return false ;
		} 
		else 
		{
			 return true ; 
		}	
	});
	
	
	// Clears default values on focus 
	$(":input").focus(function()
	{
		if ($(this).val() == emptyInput ) 
	   {
			$(this).val("") ;
			$(this).removeClass("inputError") ;
	   }
	   else if ($(this).val() == charError ) 
	   {
			$(this).val("") ;
			$(this).removeClass("inputError") ;
	   }
	   else if($(this).val() == "" && $(this).hasClass("inputError"))
	   {
			$(this).val("") ;
			$(this).removeClass("inputError") ;   
	   }
	});
	 	
});	