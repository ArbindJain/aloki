// Save details when bulk order form submit
jQuery(document).ready(function() {

    //Ajax when bulk order submit
    $('body').on('click', '#bulk-submit', function(event){
        event.preventDefault();

        name = $('#bulkorder-name').val();
        phone = $('#bulkorder-phone').val();
        address = $('#bulkorder-address').val();
        land = $('#bulkorder-land').val();
        poststed = $('#bulkorder-poststed').val();
        post_number = $('#bulkorder-post_number').val();
        email = $('#bulkorder-email').val();
        tlf = $('#bulkorder-tlf').val();
        fax = $('#bulkorder-fax').val();
        orderFor = $('#bulkorder-for').val();
        additional_inquiry = $('#bulkorder-inquiry').val();
        _token =  $('input[name="_token"]').val();
        validMail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(name == "") {
            $('#bulkorder-name').focus().addClass('required-field');
        } else if(phone == "") {
            $('#bulkorder-phone').focus().addClass('required-field');
        } else if (land == "") {
            $('#bulkorder-land').focus().addClass('required-field');
        } else if (email == "") {
                $('#bulkorder-email').focus().addClass('required-field');
        } else if (!validMail.test(email)) {            
            alert('Please provide a valid email address');
            $('#bulkorder-email').focus().addClass('field-red');
            return false;
        } else if (tlf == "") {
            $('#bulkorder-tlf').focus().addClass('required-field');
        } else {

            var formData = {
                name: name,
                phone: phone,
                address: address,
                land: land,
                poststed: poststed,
                post_number: post_number,
                email: email,
                tlf: tlf,
                fax: fax,
                orderFor: orderFor,
                additional_inquiry: additional_inquiry,
                _token:_token
            };

            $.ajax({
                type: "POST",
                url: "/bulk-order",
                data: formData,
                dataType: "json",
                success: function (data) {
                    if(data.success == true) {
                        $('#bulk-order-form')[0].reset();
                        $('.required-field').removeClass('required-field');
                        $('.field-red').removeClass('field-red');
                        $('#bulk-order').modal('hide');
                        // $("#bulk-order").on("hidden.bs.modal",function(){
                            $('#submit-model').modal('show');
                        // });
                        $("#contact-us-response").html(data.response);
                    }
                },
            });
        }
    });
});