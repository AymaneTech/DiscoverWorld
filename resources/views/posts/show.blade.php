<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-2 lg:text-center lg:pt-14 mb-10">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published
                        <time>{{ $post->created_at->diffForHumans() }}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">{{ $post->author->name }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-span-10">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                           class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>
                        <x-category-btn :destination="$post->destination"/>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {{ $post->title }}
                    </h1>
                    <div class="flex flex-wrap gap-8">
                        <img src="/images/storage/{{ $post->image[1]->url }}" alt="shit"
                             class="w-[100%] h-[200px] object-cover rounded-xl shadow-lg"
                        >
                        @foreach($post->image->skip(1) as $image)
                            <img src="/images/storage/{{ $image->url }}" alt="shit"
                                 class="w-[200px] h-[200px] object-cover rounded-xl shadow-lg"
                            >
                        @endforeach
                    </div>
                    <div class="space-y-4 lg:text-lg leading-loose">
                        <h3 class="text-lg font-bold text-[#515F08] font-bold">Description : </h3>
                        <p class="italic font-bold">
                            {{ $post->description }}
                        </p>
                    </div>
                    <div class="space-y-4 lg:text-lg leading-loose mt-24">
                        <h3 class="text-lg font-bold text-[#515F08] font-bold">Body : </h3>
                        <p>
                            {!! $post->body  !!}
                        </p>
                    </div>
                </div>
            </article>
        </main>

    </section>

</x-layout>
