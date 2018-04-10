// cart related all jquery ajax
$(document).ready(function() {

    //plus and minus button
    $('body').on('click', '.btn-number', function(event) {
        event.preventDefault();

        var parentROW = $(this).parents(".menu-list-item-title");
        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        input = parentROW.find("input[name='"+fieldName+"']");
        quantityValue = parseInt(parentROW.find(".quiantityValue").val());
        if (!isNaN(quantityValue)) {
            if(type == 'minus') {
                if(quantityValue > input.attr('min')) {
                    input.val(quantityValue - 5).change();
                } 
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }
            } else if(type == 'plus') {
                    input.val(quantityValue + 5).change();
            }
        } else {
            input.val(0);
        }
    });

    $('.quiantityValue').focusin(function() {
       $(this).data('oldValue', $(this).val());
    });

    $('.quiantityValue').change(function() {
        minValue = parseInt($(this).attr('min'));
        valueCurrent = parseInt($(this).val());
        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value should be multiple to 5');
            $(this).val($(this).data('oldValue'));
        }
    });

    //Ajax add to cart submit
    $('body').on('click', '.cart-submit', function(event) {
        event.preventDefault();

        var parentROW = $(this).parents(".cartDiv");
        productId = parentROW.find(".productId").val();
        quantityValue = parseInt(parentROW.find(".quiantityValue").val());
        _token =  $('input[name="_token"]').val();
        if(productId == "") {
            parentROW.find(".productId").focus();
        } else {
            var formData = {productId: productId, quantityValue: quantityValue, _token:_token};
            $.ajax({
                type: "POST",
                url: "/cart/add/"+productId,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: formData,
                dataType: "json",
                success: function (data) {
                    jQuery("#submit-model").modal('show');
                    $("#contact-us-response").html(data.status);
                    $("#cartData").html(data.cart['cartItem'] + "Items - KR" + data.cart['cartTotal']);
                },
            });
        }
    });

    //Ajax to cart show
    $('body').on('click', '#cartShow', function(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "/cart/items",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                jQuery("#cart-model").replaceWith(data);
                jQuery("#cart-model").modal('show');
            },
        });
    });

    //Ajax to remove product from cart
    $('body').on('click', '.cartRemove', function(event) {
        event.preventDefault();

        var parentROW = $(this).parents(".removeItem");
        rowId = parentROW.find(".rowIdInput").val();
        $.ajax({
            type: "POST",
            url: "/cart/remove/"+rowId,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                if (data.cartItem === undefined) {
                    $("#cartData").html('');
                    $("#totalPayable").html('');
                    $("#check-out").hide();
                } else {
                    $("#cartData").html(data.cartItem + "Items - KR" + data.cartTotal);
                    $("#totalPayable").html(data.cartTotal);
                }
            },
        });
        $(this).parent().parent().remove();
    });

    //checkout model display
    $('body').on('click', '#check-out', function(event) {
        event.preventDefault();
        jQuery("#cart-model").modal('hide');
        jQuery("#user-checkout").modal('show');
    });

    //Ajax to confirm order
    $('body').on('click', '#order-confirm', function(event) {
        event.preventDefault();

        var parentROW = $(this).parents("#checkout-form");
        user_name = parentROW.find('input[name="name"]').val();
        user_email = parentROW.find('input[name="email"]').val();
        user_phone = parentROW.find('input[name="phone"]').val();
        user_address = parentROW.find('input[name="address"]').val();
        _token =  $('input[name="_token"]').val();

        if(user_name == "") {
            parentROW.find('input[name="name"]').focus();
        } else if(user_email == "") {
            parentROW.find('input[name="email"]').focus();
        } else if (user_phone == "") {
            parentROW.find('input[name="phone"]').focus();
        } else if (user_address == "") {
            parentROW.find('input[name="address"]').focus();
        } else {
            var formData = {user_name: user_name, user_email: user_email, user_phone: user_phone, user_address: user_address, _token:_token};
            $.ajax({
                type: "POST",
                url: "/order/confirm",
                data: formData,
                dataType: "json",
                success: function (data) {
                    // $('#checkout-form')[0].reset();
                    jQuery("#user-checkout").modal('hide');
                    jQuery("#submit-model").modal('show');
                    $("#contact-us-response").html(data);
                    $("#cartData").html('');
                },
            });
        }
    });
});
