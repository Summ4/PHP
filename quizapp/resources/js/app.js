$(document).ready(function() {
    $('form#comment-form').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {

                $('#comment-form')[0].reset();

                alert(response.success);

                $('#comments').append(response.comment);
            },
            error: function(jqXHR, textStatus, errorThrown) {

                console.error(textStatus + ": " + errorThrown);
                alert("An error occurred while submitting the comment.");
            }
        });
    });
});

