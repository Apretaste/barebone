$(document).ready(function() {
	$('.tabs').tabs();
	$('.modal').modal();
	$('select').formSelect();
	$('.sidenav').sidenav();
});

// count remaining characteres
//
function remainder (size=200) {
	// get message and remainder amount
	var message = $('#message').val().trim();
	var remainder = (message.length <= size) ? (size - message.length) : 0;

	// restrict message size
	if (remainder <= 0) {
		message = message.substring(0, size);
		$('#message').val(message);
	}

	// update remainder amount
	$('#remainder').html(message.length);
}

