$(document).ready(function(){
    // First register any plugins
    $.fn.filepond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageCrop,
        FilePondPluginImageResize,
        FilePondPluginImageTransform
    );

    $('.my-pond').filepond({
        allowMultiple: false,
        imagePreviewHeight: 150,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 180,
        imageResizeTargetHeight: 180,
        stylePanelLayout: 'compact circle',
        styleLoadIndicatorPosition: 'center bottom',
        styleProgressIndicatorPosition: 'right bottom',
        styleButtonRemoveItemPosition: 'left bottom',
        styleButtonProcessItemPosition: 'right bottom',
        server: {
            url: '/profile/temporary-upload',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        },
    });
});