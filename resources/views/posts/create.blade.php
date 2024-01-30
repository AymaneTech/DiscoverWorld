<x-layout>
    <main class="container mx-auto mb-32">
        <form action="/posts/create" method="post"
              class="container mx-auto  w-[60vw]"
              enctype="multipart/form-data"
        >
            <h2 class="text-4xl font-bold text-start text-[#515F08] my-2">Create a new Adventure story</h2>
            @csrf
            <div class="mb-6">
                <label for="title" class="block mb-1">Title</label>
                <input
                    id="title"
                    type="text"
                    name="title"
                    class="w-full bg-transparent text-blue-gray-700 font-sans font-normal outline-none focus:outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-blue-gray-200 placeholder-opacity-50 border border-blue-gray-200 focus:border-gray-900 rounded-lg px-3 py-2.5"
                    placeholder="Enter your title"
                    value="{{ old('title') }}"
                />

                @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <div class="group flex justify-between">
                <div class="mb-6 w-[45%]">
                    <label for="title" class="block mb-1">Slug</label>
                    <input
                        id="slug"
                        type="text"
                        name="slug"
                        class="w-full bg-transparent text-blue-gray-700 font-sans font-normal outline-none focus:outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-blue-gray-200 placeholder-opacity-50 border border-blue-gray-200 focus:border-gray-900 rounded-lg px-3 py-2.5"
                        placeholder="Enter your slug"
                        value="{{ old('slug') }}"
                    />
                </div>
                <div class="mb-6 w-[45%]">
                    <label for="category" class="block mb-1">Category</label>
                    <select name="category_id" id="category"
                            class="block w-full mt-1 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-6">
                <label for="category" class="block mb-1">Category</label>
                <select name="category_id" id="category"
                        class="block w-full mt-1 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label for="description" class="block mb-1">Description</label>
                <textarea name="description" id="description" placeholder="Enter the description of adventure"
                          class="w-full border border-blue-gray-200 focus:border-gray-900 rounded-lg px-3 py-2.5"
                          cols="120" rows="5">{{ old('description') }}</textarea>

                @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="body" class="block mb-1">Content</label>
                <textarea name="body" id="body" placeholder="Enter the body of post"
                          class="w-full border border-blue-gray-200 focus:border-gray-900 rounded-lg px-3 py-2.5"
                          cols="120" rows="5">{{ old('body') }}</textarea>

                @error('body')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-center w-full mb-6">
                <label for="dropzone-file"
                       class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag
                            and drop</p>
                        <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input name="image" id="dropzone-file" type="file" class="hidden"/>
                </label>
            </div>
            <div class="button flex items-start justify-end space-y-4">
                <button class="font-semibold text-white bg-[#515F08] px-8 py-2 rounded-3xl">Create </button>
            </div>

        </form>
    </main>
</x-layout>
