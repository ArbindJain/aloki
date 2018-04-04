// Save details when bulk order form submit
$(document).ready(function() {

    //Ajax when bulk order submit
    $('body').on('click', '#contact-submit', function(event){
        event.preventDefault();

        var parentForm = $(this).parents("#contact-us-form");
        name = parentForm.find('input[name="name"]').val();
        email = parentForm.find('input[name="email"]').val();
        phone = parentForm.find('input[name="phone"]').val();
        subject = parentForm.find('input[name="subject"]').val();
        message = parentForm.find('textarea[name="message"]').val();
        _token =  $('input[name="_token"]').val();

        if(name == "") {
            parentForm.find('input[name="name"]').focus();
        } else if(email == "") {
            parentForm.find('input[name="email"]').focus();
        } else if (phone == "") {
            parentForm.find('input[name="phone"]').focus();
        } else if (subject == "") {
            parentForm.find('input[name="subject"]').focus();
        } else if (message == "") {
            parentForm.find('textarea[name="message"]').focus();
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