<x-layout>
    <main class="container mx-auto mb-32">
        <form method="POST" action="/posts/store" enctype="multipart/form-data">
            <input type="file" name="images[]" multiple>
            <button type="submit">Upload</button>
        </form>
    </main>
</x-layout>
