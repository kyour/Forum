// JavaScript Document
$(function(){

/*-------------------------------------------Registration Form Starts--------------------------------------------------*/
	$('#reg-form').submit(function(event) {
	event.preventDefault();
	/*var a =  $('#first-name').val();
	var b = $('#last-name').val();
	var c = document.getElementById('password').value;
	var e = document.getElementById('email').value;*/
		var $a = $('#password').val();
		var $b = $('#confirmPassword').val();
		if ($a.length<8){
			$('.results').empty().append('Password must be 8 characters')
		}
		else if ($a != $b) {
				$('.results').empty().append('Confirm does not match')
			}// -------else if end
		else {
				var data_string = $(this).serialize()/*'first-name='+ a +'&last-name='+ b +'&password='+ c +'&email='+ e*/;
				$.ajax({
						cache: false,
						type: "POST",
						url: "registration-exe.php",
						data: data_string,
						success: function(data){
							$('.results').empty().append(data);
						}
					});// -------ajax end	
			}// -------else end
	});// -------.submit function end
/*-------------------------------------------Registration Form Ends--------------------------------------------------*/

/*-------------------------------------------Login Form Starts--------------------------------------------------*/
	$('#logIn-form').submit(function(event){
		event.preventDefault();
		var $a = $('#email').val();
		var $b = $('#password').val();
		if ($a == '' || $b == ''){
			$('.results').empty().append('Please provide Email and Password');
		}
		else {
			var data_string = $(this).serialize()
			$.ajax({
				cache: false,
				type: "POST",
				url: "login-exe.php",
				data: data_string,
				success: function(data){
					if (data == 'LogIn is not Good'){
						$('.results').empty().append(data);
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