jQuery(document).ready(function ($) {
    $('.upload-icon-button').on('click', function (e) {
        e.preventDefault();

        var button = $(this),
            target = $(button.data('target')),
            custom_uploader = wp.media({
                title: 'Select Icon',
                button: {
                    text: 'Use this icon'
                },
                multiple: false
            }).on('select', function () {
                var attachment = custom_uploader.state().get('selection').first().toJSON();
                target.val(attachment.url);
            }).open();
    });
});
