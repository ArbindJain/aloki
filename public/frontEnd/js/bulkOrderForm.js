// Save details when bulk order form submit
$(document).ready(function() {

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
        _token =  $('input[name="_token"]').val();

        if(name == "") {
            $('#bulkorder-name').focus();
        } else if(phone == "") {
            $('#bulkorder-phone').focus();
        } else if (land == "") {
            $('#bulkorder-land').focus();
        } else if (email == "") {
            $('#bulkorder-email').focus();
        } else if (tlf == "") {
            $('#bulkorder-tlf').val().focus();
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
                _token:_token
            };

            $.ajax({
                type: "POST",
                url: "/bulk-order",
                data: formData,
                dataType: "json",
                success: function (data) {
                    $('#bulk-order-form')[0].reset();
                    $('#bulk-order').modal('hide');
                    $("#bulk-order").on("hidden.bs.modal",function(){
                        $('#submit-model').modal('show')
                    })
                    $("#contact-us-response").html(data);
                },
            });
        }
    });
});