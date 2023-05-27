<script src="https://cdn.tiny.cloud/1/97egs0buj5frr6n0dcfok2jsu1gaf7hex82iaun1pnhkaekk/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: 'textarea#editor',
        language: 'ja',
        icons: 'thin',
        statusbar: false,
        menubar: false,
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount code',
        toolbar: 'blocks bold italic underline strikethrough forecolor removeformat | emoticons link image table | numlist bullist | code',
        block_formats: 'Paragraph=p; Header 1=h3; Header 2=h4; Header 3=h5',
        color_map: [
            '#BFEDD2', 'Light Green',
            '#FBEEB8', 'Light Yellow',
            '#F8CAC6', 'Light Red',
            '#ECCAFA', 'Light Purple',
            '#C2E0F4', 'Light Blue',
            
            '#2DC26B', 'Green',
            '#F1C40F', 'Yellow',
            '#E03E2D', 'Red',
            '#B96AD9', 'Purple',
            '#3598DB', 'Blue',
            
            '#169179', 'Dark Turquoise',
            '#E67E23', 'Orange',
            '#BA372A', 'Dark Red',
            '#843FA1', 'Dark Purple',
            '#236FA1', 'Dark Blue',
            
            '#ECF0F1', 'Light Gray',
            '#CED4D9', 'Medium Gray',
            '#95A5A6', 'Gray',
            '#7E8C8D', 'Dark Gray',
            '#34495E', 'Navy Blue',
            
            '#000000', 'Black',
            '#ffffff', 'White',
        ],

        // ここから下がイメージの貼り付けをするための処理
        image_title: true,
        automatic_uploads: true,
        images_upload_url: '/upload', // 画像が貼り付けられるとアクセスするリンク
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        }
    });
</script>