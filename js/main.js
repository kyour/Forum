// JavaScript Document
$(function(){

/*-------------------------------------------Registration Form Starts--------------------------------------------------*/
	$('#reg-form').submit(function(event) {
	event.preventDefault();
	/*var a =  $('#first-name').val();
	var b = $('#last-name').val();
	var c = document.getElementById('password').value;
	var e = document.getElementById('email').value;*/
		var $a = document.forms["reg-form"]["email"].value;
		var $b = document.forms["reg-form"]["password"].value;
		if ($a.length<8){
			$('.reg-error').empty().append('Password must be 8 characters')
		}
		else if ($a != $b) {
				$('.reg-error').empty().append('Password does not match')
			}// -------else if end
		else {
				var data_string = $(this).serialize()/*'first-name='+ a +'&last-name='+ b +'&password='+ c +'&email='+ e*/;
				$.ajax({
						cache: false,
						type: "POST",
						url: "registration-exe.php",
						data: data_string,
						success: function(data){
							$('.reg-error').empty().append(data);
						}
					});// -------ajax end	
			}// -------else end
	});// -------.submit function end
/*-------------------------------------------Registration Form Ends--------------------------------------------------*/

/*-------------------------------------------Login Form Starts--------------------------------------------------*/
	$('#logIn-form').submit(function(event){
		event.preventDefault();
		var $a = document.forms["logIn-form"]["email"].value;
		var $b = document.forms["logIn-form"]["password"].value;
		if ($a ==null || $a == ''){
			$('.login-error').empty().append('Please provide Email');
			return false;
		} else if ($b == null || $b == ''){
			$('.login-error').empty().append('Please provide Password');
			return false;
			}
<<<<<<< HEAD
		if ($a == '' || $b == ''){
			$('.results').empty().append('Please provide Email and Password');
		}
=======
>>>>>>> 96ad4896a530f3b03d559a55f3c2ac6c310a579f
		else {
			var data_string = $(this).serialize()
			$.ajax({
				cache: false,
				type: "POST",
				url: "login-exe.php",
				data: data_string,
				success: function(data){
					if (data == 'Incorrect Email or Password'){
						$('.login-error').empty().append(data);
					}
					else{
						window.location = 'page.php';
					}				}
			});// -------ajax end
		};// -------else end
	});// -------.submit function end
/*-------------------------------------------Login Form Ends--------------------------------------------------*/

/*-------------------------------------------Category Form Starts--------------------------------------------------*/
	$('#cat-form').submit(function(event){
		event.preventDefault();
		var data_string = $(this).serialize()
		$.ajax({
			cache: false,
			type: "POST",
			url: "cat-exe.php",
			data: data_string,
			success: function(data){
				$('.results').empty().append(data);
			}
		});
	})
/*-------------------------------------------Category Form Ends--------------------------------------------------*/



});// -------document ready end