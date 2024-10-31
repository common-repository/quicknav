(function($) {
    "use strict";

    function tlQvOffCanvas() {
        const body = $(document.body);
        const toolbar = $('.tl_qv_toolbar');
        const btn = $('.tl_qv_toolbar .tl_qv_btn_open');
        const overlay = $('.tl_qv_overlay');
        const close = $('.tl_qv_close_btn');

        //Close OffCanvas
        function closeOffCanvas() {
            if (toolbar.hasClass('tl_open')) {
                toolbar.removeClass('tl_open');
                body.removeClass('tl_qv_offcanvas-opened');
                btn.removeClass('active');
                overlay.removeClass('show');
            }
        }

        //Button Click
        btn.each(function() {
            $(this).on('click', function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
                body.addClass('tl_qv_offcanvas-opened');
                toolbar.fadeIn();
                toolbar.addClass('tl_open');
                overlay.addClass('show');
            });
        });

        //Overlay Click
        overlay.on('click', function() {
            closeOffCanvas();
        });


        //ESC KeyDown
        $(window).on('keydown', function(e) {
            if(e.key === 'Escape') {
                closeOffCanvas();
            }
        });

        // Close Button
        close.on('click', function (e) {
            e.preventDefault();
            closeOffCanvas();
        });
    }

    tlQvOffCanvas();

    

})(jQuery);