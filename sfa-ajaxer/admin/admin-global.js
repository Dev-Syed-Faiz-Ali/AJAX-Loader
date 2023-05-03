
jQuery(document).ready(function($){


    jQuery(document).delegate('.install-default-settings-for-theme, .sfaajx-notice .notice-dismiss','click',handle_mouse);



    function handle_mouse(e){
        var _t = $(this);


        if(e.type=='click'){

            if(_t.hasClass('notice-dismiss')){
                $.ajax({
                    url: ajaxurl,
                    data: {
                        action: 'sfaajx_dismiss_notice'
                    }
                })
            }
        }
    }

});

