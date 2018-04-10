// Save details when bulk order form submit
$(document).ready(function() {

    //Ajax when bulk order submit
    $('body').on('click', '#bulk-submit', function(event){
        event.preventDefault();

        var parentROW = $(this).parents("#bulk-order-form");
        name = parentROW.find('input[name="name"]').val();
        email = parentROW.find('input[name="email"]').val();
        phone = parentROW.find('input[name="phone"]').val();
        address = parentROW.find('input[name="address"]').val();
        item = parentROW.find('select[name="product"]').val();
        _token =  $('input[name="_token"]').val();

        if(name == "") {
            parentROW.find('input[name="name"]').focus();
        } else if(email == "") {
            parentROW.find('input[name="email"]').focus();
        } else if (phone == "") {
            parentROW.find('input[name="phone"]').focus();
        } else if (address == "") {
            parentROW.find('input[name="address"]').focus();
        } else {

            var formData = {name: name, email: email, phone: phone, address: address, item: item, _token:_token};

            $.ajax({
                type: "POST",
                url: "/bulk-order",
                data: formData,
                dataType: "json",
                success: function (data) {
                    $('#bulk-order').modal('hide');
                    jQuery("#submit-model").modal('show');
                    $("#contact-us-response").html(data);
                },
            });
        }
    });
});