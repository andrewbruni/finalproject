$(document).ready(

function()
{
	
	form1 = ["#firstName", "#lastName", "#age"];
	form2 = ["#userID2", "#firstName2", "#lastName2", "#age2"];
	form3 = ["#userID3"];
	
	
	pageError = $("#form-error");
	emptyInput = "Please fill out this field.";
	charError = "A-Z Characters Only Please" ;
	
	$("#userForm").submit(function(e) {
		var userName = $("#userName");
		var password = $("#password");
		var foundError = new Boolean();
		foundError = false;
		if(userName.val() == "") {
			userName.addClass("inputError");
			userName.val("");
			userName.attr("placeholder", "Enter a UserName");
			foundError = true;
		} else {
			userName.removeClass("error");
		}
		if(password.val() == "") {
			password.addClass("inputError");
			password.val("");
			password.attr("placeholder", "Enter a Password");
			foundError = true;
		} else {
			password.removeClass("error");
		}
		if(foundError) {
			e.preventDefault();
			return false;
		} else {
			return true;
		}
	});
	
	$("#insertForm").submit(function(e) {
		var recipeName = $("#recipeName");
		var num = $("#ingredientNumber");
		var foundError = new Boolean();
		foundError = false;
		if(recipeName.val() == "" || !/^([a-zA-Z0-9 ])+$/.test(recipeName.val())) {
			recipeName.addClass("inputError");
			recipeName.val("");
			recipeName.attr("placeholder", "Enter a Name (A-Z,1-10)");
			foundError = true;
		} else {
			recipeName.removeClass("error");
		}
		if(num.val() == "" || !/^([0-9])+$/.test(num.val())) {
			num.addClass("inputError");
			num.val("");
			num.attr("placeholder", "Enter a Number");
			foundError = true;
		} else {
			num.removeClass("error");
		}
		if(foundError) {
			e.preventDefault();
			return false;
		} else {
			return true;
		}
	});
	
	$("#insertForm2").submit(function(e) {
		var field1 = $("#description");
		var field2 = $("#instructions");
		var foundError = new Boolean();
		foundError = false;
		if(!$.trim(field1.val())) {
			field1.addClass("inputError");
			field1.val("");
			field1.attr("placeholder", "Enter a Description");
			foundError = true;
		} else {
			field1.removeClass("error");
		}
		if(!$.trim(field2.val())) {
			field2.addClass("inputError");
			field2.val("");
			field2.attr("placeholder", "Enter some Instructions");
			foundError = true;
		} else {
			field2.removeClass("error");
		}
		for(var i=1; i<=numIngredients; i++) {
			var field3 = $("#i"+i);
			var field4 = $("#a"+i);
			if(field3.val() == "") {
				field3.addClass("inputError");
				field3.val("");
				field3.attr("placeholder", "Forget a Name?");
				foundError = true;
			} else {
				field3.removeClass("error");
			}
			if(field4.val() == "") {
				field4.addClass("inputError");
				field4.val("");
				field4.attr("placeholder", "Forget an Amount?");
				foundError = true;
			} else {
				field4.removeClass("error");
			}
		}		
		if(foundError) {
			e.preventDefault();
			return false;
		} else {
			return true;
		}
		
	});
	});
