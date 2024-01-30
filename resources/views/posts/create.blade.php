<x-layout>
    <main class="container mx-auto mb-32">
        <form method="POST" action="/posts/store" enctype="multipart/form-data">
            <input id="imageUpload" type="file" name="images[]" multiple>
            @if(request("images"))
                @php echo "here" ;@endphp
            @endif
            <div id="imagePreview" class="imagePreview"></div>

            <button type="submit">Upload</button>
        </form>

        <script>
            document.getElementById('imageUpload').addEventListener('change', function () {
                let preview = document.getElementById('imagePreview');
                let files = this.files;
                for (let i = 0; i < files.length; i++) {
                    let file = files[i];
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        let img = document.createElement('img');
                        img.src = event.target.result;
                        <img src="" alt="" className="style maxWidt"/>h = '200px'; // Set maximum width for preview image
                        preview.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                }
            });
        </script>
    </main>
</x-layout>
