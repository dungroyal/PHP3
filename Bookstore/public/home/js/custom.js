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
});