jQuery(document).ready(function ($) {
    function update_image_previews() {
        var images = $('#project_images').val() ? JSON.parse($('#project_images').val()) : [];
        $('#image-previews').empty();
        $.each(images, function (index, value) {
            if (value) {
                var img = $('<img>').attr('src', value).css({'width': '100px', 'height': 'auto', 'margin-right': '10px'});
                $('#image-previews').append(img);
            }
        });
    }

    update_image_previews();

    $('body').on('click', '.upload_image_button', function (e) {
        e.preventDefault();

        var button = $(this);
        var custom_uploader = wp.media({
            title: 'Добавить изображение',
            library: { type: 'image' },
            button: { text: 'Выбрать' },
            multiple: false
        }).on('select', function () {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            button.siblings('input[type="hidden"]').val(attachment.url);
            button.siblings('img').attr('src', attachment.url);
            update_image_previews();
        }).open();
    });

    $('body').on('click', '.remove_image_button', function (e) {
        e.preventDefault();

        var button = $(this);
        button.siblings('input[type="hidden"]').val('');
        button.siblings('img').attr('src', '');
        update_image_previews();
    });

 
 
 // Загрузка фото "До"
    $('body').on('click', '#upload_before_image', function (e) {
        e.preventDefault();

        var button = $(this);
        var input_field = button.prevAll('input[type="hidden"]').first();
        var img_preview = button.prevAll('img').first();

        var custom_uploader = wp.media({
            title: 'Добавить изображение',
            library: { type: 'image' },
            button: { text: 'Выбрать' },
            multiple: false
        }).on('select', function () {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            input_field.val(attachment.url);
            img_preview.attr('src', attachment.url);
        }).open();
    });

   

    
});



