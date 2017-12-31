$( document ).ready(function() {
    $("input[name=password]").blur(function(){
        $('input[name=password_confirmation]').val(this.value);
    });
});