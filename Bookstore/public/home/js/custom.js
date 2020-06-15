$(function() {
    var star = '.star',
        selected = '.selected';

    $(star).on('click', function() {
        $(selected).each(function() {
            $(this).removeClass('selected');
        });
        $(this).addClass('selected');
    });

});


$(document).ready(function() {
    $("#rating").emojiRating({
        fontSize: 25,
        onUpdate: function(count) {
            $(".review-text").show();
            $("#starCount").html(count + " Sao");
            $('#demo #vote_star').attr('value', count);
        }
    });


    // $('#btn_login').click(function() {
    //     $('#userName').focus();
    //     return false;
    // });

    // $('#userName').focus(function() {
    //     $('#userName').css('background-color', 'rgba(0, 255, 250, 0.55)');
    //     $('#userPassword').css('background-color', 'rgba(0, 255, 250, 0.55)');
    // });

});