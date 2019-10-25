jQuery(document).ready(function() {
	
    "use strict";
	
    $('#contactform, #reservation').submit(function() {

        var action = $(this).attr('action');

        $("#message").fadeOut(0, function() {
            $('#message').hide();

            $('#submit')
                .attr('disabled', 'disabled');

            $.post(action, {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    start: $('#start').val(),
                    room: $('#room').val(),
                    end: $('#end').val(),
                    adults: $('#adults').val(),
                    children: $('#children').val()
                },
                function(data) {
                    document.getElementById('message').innerHTML = data;
                    $('#message').fadeIn(200);
                    $('.hide').hide(0);
                    $('#submit').removeAttr('disabled');

                }
            );

        });

        return false;

    });

});