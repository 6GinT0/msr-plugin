jQuery(document).ready(function($){

    $('.msr-like').on('click', function(){

        var post_id = $(this).data('post-id');

        $.ajax({
            url: msr_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'msr_post_voting',
                pid: post_id,
                type: 'like',
                nonce: msr_ajax.nonce
            },
            success: function(response) {
                alert(response.data.message);
                //alert(response.data.message + "" + response.data.last_query);
            }
        });
    });
    $('.msr-dislike').on('click', function(){

        var post_id = $(this).data('post-id');

        $.ajax({
            url: msr_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'msr_post_voting',
                pid: post_id,
                type: 'dislike',
                nonce: msr_ajax.nonce
            },
            success: function(response) {
                alert(response.data.message);
                //alert(response.data.message + "" + response.data.last_query);
            }
        });
    });
});