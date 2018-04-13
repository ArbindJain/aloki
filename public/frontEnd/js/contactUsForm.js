// Save details when bulk order form submit
$(document).ready(function() {

    //Ajax when bulk order submit
    $('body').on('click', '#contact-submit', function(event){
        event.preventDefault();

        name = $('#contact-name').val();
        email = $('#contact-email').val();
        phone = $('#contact-phone').val();
        subject = $('#contact-subject').val();
        message = $('#contact-message').val();
        _token =  $('input[name="_token"]').val();

        if(name == "") {
            $('#contact-name').focus();
        } else if(email == "") {
            $('#contact-email').focus();
        } else if (phone == "") {
            $('#contact-phone').focus();
        } else if (subject == "") {
            $('#contact-subject').focus();
        } else if (message == "") {
            $('#contact-message').focus();
        } else {

            var formData = {name: name, email: email, phone: phone, subject: subject, message: message, _token:_token};

            $.ajax({
                type: "POST",
                url: "/contact-us",
                data: formData,
                dataType: "json",
                success: function (data) {
                    jQuery("#submit-model").modal('show');
                    $("#contact-us-response").html(data);
                    $('#contact-us-form')[0].reset();
                },
            });
        }
    });
});