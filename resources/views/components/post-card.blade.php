@props(["post"])
<article
    {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5">
        <div class="w-100 mx-auto">
            <img src="/images/storage/{{ $post->image[0]->url ?? null}}" alt="Blog Post illustration" class="rounded-xl w-[100%] h-[313px] object-cover ">
        </div>


        <div class="mt-8 flex flex-col justify-between">
            <header>
                <x-category-btn :destination="$post->destination"/>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/posts/{{$post->title}}">
                            {{$post->title}}
                        </a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{$post->created_at->diffForHumans()}}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 space-y-4">
                {{ substr($post->description, 0, 500) }}
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <div class="ml-3">
                       <h5 class="font-bold" >  <span class="font-normal">Created by</span>{{ $post->author->name }}</h5>
                    </div>
                </div>

                <div>
                    <a href="/posts/{{$post->slug}}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
