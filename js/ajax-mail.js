(function ($) {
	"use strict";

    // form validation
    $('#contact-form .input_field.required').on('change paste blur', function () {
		if ($(this).val().trim() == '') { $(this).addClass('inputEmpty').removeClass('inputNotEmpty'); }
		else { $(this).removeClass('inputEmpty').addClass('inputNotEmpty'); }
		if ($(this).val().trim() == '') { $(this).attr('placeholder', 'Field is Required!'); }
    });
	
    $("input[type='email']").on('change paste blur', function () {
        var sEmail = $("input[type='email']").val();
        if ($.trim(sEmail).length == 0) {
            $(this).addClass('invalid').removeClass('valid');
        }
        if (validateEmail(sEmail)) {
            $(this).addClass('valid').removeClass('invalid');
        }
        else {
            $(this).addClass('invalid').removeClass('valid');
        }
    });

    function validateEmail(sEmail) {
        var filter = /^([\w-\.]+)@((\[[0-9]{1,10}\.[0-9]{1,10}\.[0-9]{1,10}\.)|(([\w-]+\.)+))([a-zA-Z]{2,10}|[0-9]{1,10})(\]?)$/;
        if (filter.test(sEmail)) {
            return true;
        }
        else {
            return false;
        }
    }
	
	var form = $('#contact-form');
	var formMessages = $('.form-message');
	$('#contact-form').submit(function(e) {
		e.preventDefault();
		var formData = $(form).serialize();
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData,
			beforeSend: function() {
            var gif = '<img src= "img/loader.gif" style="width: 40px;margin-top: 0px;margin-left: 23px;" >';
            $('.general_submit').html(gif);
         },
		})
		
		.done(function(response) {
			if(response == 1){
				$('.general_submit').hide();
				$('.form-message').removeClass('error');
				$('.form-message').addClass('success');
				$('.form-message').html('<strong>Thank you for the message.</strong> Will get back to you shortly.');
				$('#contact-form input,#contact-form textarea');
				$("#contact-form")[0].reset();        
				   setTimeout(function() {
					 location.reload();
					 },4000); 
			}
			else{
				$('.general_submit').hide();
				$('.form-message').removeClass('success');
				$('.form-message').addClass('error');
				$('.form-message').html('Oops! An error occured and your message could not be sent.');
			}
			
		})
		.fail(function(data) {
			$('.general_submit').hide();
			$('.form-message').removeClass('success');
			$('.form-message').addClass('error');
			$('.form-message').html('Oops! An error occured and your message could not be sent.');
		});
	});
})(jQuery);