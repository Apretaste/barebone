$(document).ready(function() {
	//
	// start basic components
	//
	$('.tabs').tabs();
	$('.modal').modal();
	$('select').formSelect();
	$('.sidenav').sidenav();

	//
	// start reminder component
	//
	$('.remainder').on('input', function(){
		// get values
		var message = $(this).val().trim();
		var maxlength = $(this).attr('maxlength');
		var counter = $("label[for='" + $(this).attr('id') + "'] span");

		// calculate the reminder
		var remainder = (message.length <= maxlength) ? (maxlength - message.length) : 0;

		// restrict message to maxlength
		if (remainder <= 0) {
			message = message.substring(0, maxlength);
			$(this).val(message);
		}

		// update the counter with the remainder amount
		counter.html(message.length);
	})

	//
	// start check component
	//

	// checks/uncheck components
	$('.checks .check').click(function() {
		// get active and limit
		var limit = $(this).parent().attr('limit');
		var count = $(this).parent().find('.check.active').length;
		var isActive = $(this).hasClass('active');

		// jump checks if only one element allowed
		if(limit == 1) $('.checks .check').removeClass('active');

		// do not go over the limit for multiple elements
		else if(limit != undefined && limit <= count && !isActive) return false;

		// make the check active/inactive
		$(this).toggleClass('active');
	});

	// get values of active "checks" components
	$.fn.value = function() {
		var values = [];
		$(this).find('.check').each(function(i, e){
			if($(e).hasClass('active')) {
				values.push($(e).attr('value'));
			}
		})
		return values;
	};
});
