function submitContactForm(e){
	button = $(e)
	button.html("<i class='glyphicon glyphicon-refresh icon-refresh-animate'></i> Enviando...");
	button.attr('disabled', true);
	send = true;
	email = $('#email').val();
	message= $('#message').val()
	alert_message = ""
	// check email
	new_class = 'form-group'
	if (!isEmail(email)){
		send = false;
		new_class += " has-error"
		alert_message += "<li>Ingrese un email valido</li>"
	}
	$('#emailDiv').attr('class', new_class)
	// check message
	new_class = 'form-group'
	if (!isValidMessage(message)){
		send = false;
		new_class += " has-error"
		alert_message += "<li>Ingrese un mensaje valido</li>"
	}
	$('#messageDiv').attr('class', new_class)
	if(send){
		$.ajax({
			url: 'send-contact-form.php',
			method: 'POST',
			data:{
				email: email,
				message: message
			},
			success:
				function(){
					$('#email').val('');
					$('#message').val('');
					$('#alert').html("<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><h4>Mensaje enviado</h4> Tu mensaje ha sido enviado correctamente, responderemos en breve.</div>")
					button.attr('disabled', false);
					button.html("Enviar");
				}
		})
	}
	else{
		$('#alert').html("<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><ul>"+alert_message+"</ul></div>");
		button.attr('disabled', false);
		button.html("Enviar");
	}
}

function isEmail(email)
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
function isValidMessage(message){
	return message.length > 5;
}