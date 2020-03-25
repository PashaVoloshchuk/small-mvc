$(document).ready(function () {
    $('.nav-tabs li a').on('click',function () {
        $('.nav-tabs a').removeClass('active');
        $(this).addClass('active')
        let tab_id = $(this).attr('id');
        $('.tab-pane').removeClass('active');
        $('[data-tab="'+tab_id+'"]').addClass('active');
        return false;
    });
});