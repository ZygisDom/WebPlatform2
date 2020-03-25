$( document ).ready(function() {
    $('.container.card-margin-top').click(function () {
        var id = $(this).data('id');
        $(this).addClass('close_card');
    });
});