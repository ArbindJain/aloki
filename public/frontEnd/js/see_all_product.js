// Save details when bulk order form submit
jQuery(document).ready(function() {

    $('.product-li:lt(6)').show();
    
    $('body').on('click', '#see-all', function(event){
        event.preventDefault();

        $(".product-li").css("display","block");
        $("#see-all").hide();
    });
});