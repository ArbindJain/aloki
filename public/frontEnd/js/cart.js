/*
 *Here cart related all jquery ajax
 *
 */

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
        $("#cart-model").on("hidden.bs.modal",function(){
            $('#user-checkout').modal('show')
        })
    });

    //Ajax to confirm order
    $('body').on('click', '#order-confirm', function(event) {
        event.preventDefault();

        user_name = $('#checkout-name').val();
        user_etternavn = $('#checkout-etternavn').val();
        user_email = $('#checkout-email').val();
        user_address = $('#checkout-address').val();
        user_postnr = $('#checkout-postnr').val();
        user_sted = $('#checkout-sted').val();
        user_phone = $('#checkout-phone').val();
        _token =  $('input[name="_token"]').val();

        if(user_name == "") {
            $('#checkout-name').focus();
        } else if(user_etternavn == "") {
            $('#checkout-etternavn').focus();
        } else if (user_email == "") {
            $('#checkout-email').focus();
        } else if (user_address == "") {
            $('#checkout-address').focus();
        } else if(user_postnr == "") {
            $('#checkout-postnr').focus();
        } else if (user_sted == "") {
            $('#checkout-sted').focus();
        } else if (user_phone == "") {
            $('#checkout-phone').focus();
        } else {
            if (confirm('Once order confirmed, can not be changed')) {
                var formData = {
                    user_name: user_name,
                    user_etternavn: user_etternavn,
                    user_email: user_email,
                    user_address: user_address,
                    user_postnr: user_postnr,
                    user_sted: user_sted,
                    user_phone: user_phone,
                    _token: _token
                };
                $.ajax({
                    type: "POST",
                    url: "/order/confirm",
                    data: formData,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        // $('#checkout-form')[0].reset();
                        jQuery("#user-checkout").modal('hide');
                        jQuery("#cart-model").replaceWith(data);
                        $("#cartData").html('');
                        $("#user-checkout").on("hidden.bs.modal",function(){
                            $('#cart-model').modal('show')
                        })
                    },
                });
            }
        }
    });
});