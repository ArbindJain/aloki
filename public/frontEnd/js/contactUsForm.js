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
        validMail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(name == "") {
            $('#contact-name').focus().addClass('required-field');
        } else if(email == "") {
            $('#contact-email').focus().addClass('required-field');
        } else if(!validMail.test(email)) {
            alert('Please provide a valid email address');
            $('#contact-email').focus().addClass('field-red');
        } else if (phone == "") {
            $('#contact-phone').focus().addClass('required-field');
        } else if (subject == "") {
            $('#contact-subject').focus().addClass('required-field');
        } else if (message == "") {
            $('#contact-message').focus().addClass('required-field');
        } else {

            var formData = {name: name, email: email, phone: phone, subject: subject, message: message, _token:_token};

            $.ajax({
                type: "POST",
                url: "/contact-us",
                data: formData,
                dataType: "json",
                success: function (data) {
                    jQuery("#submit-model").modal('show');
                    $('.required-field').removeClass('required-field');
                    $('.field-red').removeClass('field-red');
                    $("#contact-us-response").html(data);
                    $('#contact-us-form')[0].reset();
                },
            });
        }
    });
});