function tinymce_init_callback(editor) {
    editor.remove();
    editor = null;

    tinymce.init({
        menubar: false,
        selector: 'textarea',
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount',
            'legacyoutput'
        ],
        toolbar1:
            'undo redo | fontselect | fontsizeselect | styleselect |' +
            'forecolor | bold italic underline | numlist bullist',
        toolbar2: 'alignleft aligncenter alignright alignjustify |' +
            'outdent indent | link image | code',
    })
}
