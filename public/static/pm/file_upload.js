$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = '/uploadfile',
        uploadButton = $('<button/>')
            .addClass('btn btn-primary')
            .attr('type','button')
            .prop('disabled', true)
            .text('准备...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('正在上传...')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                //提交或拒绝执行的操作
                data.submit().always(function () {
                    $this.remove();
                });
            });
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(mp4)$/i,
        maxFileSize: 0,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
        //图片添加完成后触发的事件
    }).on('fileuploadadd', function (e, data) {
        data.context = $('<span/>').appendTo('#files');
        $('#files').find('video').remove();
        $.each(data.files, function (index, file) {
                var node = $('<span/>').text(file.name);
                if (!index) {
                    node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
                }
            
            
            
            node.appendTo(data.context);

        });
        //当一个单独的文件处理队列结束触发(验证文件格式和大小)
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('上传')
                .prop('disabled', !!data.files.error);
        }

        //显示上传进度条
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
        //上传请求成功时触发的回调函数
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                data.context = $('<p><span style="color:green;">上传成功</span></p>').appendTo('#files');
                $('#video_src').val(file.name);

            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
        //上传请求失败时触发的回调函数
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('文件上传失败.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});