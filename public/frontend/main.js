$(document).ready(function(){

    // $('[name="atm"]')

    $('[name="login_type"][value="officer"]').prop('checked', true).change();

    $('#result').text('officer login');
    
    $('form[name="admin_login_form"]').hide();

    $('[name="login_type"]').click(function() {

        if ($(this).val() == "officer") {
            
            $('form[name="admin_login_form"]').hide();
            
            $('form[name="officer_login_form"]').show();
            
            $('#result').text('officer login ');

            console.log($(this).val());
        }

        if ($(this).val() == "admin") {

            $('form[name="officer_login_form"]').hide();
            
            $('form[name="admin_login_form"]').show();

            $('#result').text('admin login');

            console.log($(this).val());
        }
        
    });

    
        
    

});