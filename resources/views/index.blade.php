<x-layout>
    <section>
        <main class="container mx-auto">
            <div class="hero flex justify-between my-8">
                <div class="flex flex-col gap-y-8 mt-16">
                    <h1 class="text-4xl font-bold text-start text-[#515F08] my-2">Unleash the Power of Agile Scrum, Join
                        us
                        to revolutionize your workflow and experience true collaboration!</h1>
                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolorem dolorum
                        ipsam
                        iure odio quidem quod sed! A accusantium adipisci aliquid autem, dolore dolores doloribus porro
                        quidem
                        saepe, sequi voluptatem?
                    </p>
                    <p class="my-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolorem dolorum
                        ipsam
                        iure odio quidem quod sed! A accusantium adipisci aliquid autem, dolore dolores doloribus porro
                        quidem
                        saepe, sequi voluptatem?</p>
                    @auth
                        <a href="/posts/create"
                           class="w-fit font-semibold text-white bg-[#515F08] px-8 py-2 rounded-3xl">
                            Share Experience
                        </a>
                    @else
                        <a href="/login" class="w-fit font-semibold text-white bg-[#515F08] px-8 py-2 rounded-3xl">Get
                            Started</a>
                    @endauth
                </div>
                <div class="mt-16">
                    <img class="rounded-xl shadow-xl" src="images/nature/img1.jpg" alt="">
                </div>
            </div>

            <section class="flex justify-between statistic mt-24">
                <div class="pr-8 w-[70%]">
                    <h3 class="text-4xl font-bold text-start text-[#515F08] my-2 mb-4">Discover Our Impact</h3>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis justo ultrices, faucibus velit
                        nec, cursus lorem. Sed euismod porta enim, et consequat nisi. Nulla sit amet nisl nec lorem
                        ullamcorper dapibus. Phasellus tempus libero nec sapien scelerisque, ac tristique urna
                        fermentum. Duis vitae velit sit amet tortor convallis ullamcorper non vitae dui. Suspendisse
                        potenti. Proin interdum dapibus convallis. Donec nec magna dapibus, dictum lorem ut, posuere
                        risus.
                    </p>
                </div>
                <div class="items flex flex-col justify-center">
                    <div class="item border-b pb-4">
                        <h4 class="text-5xl font-bold text-[#515F08]">{{ $statistics["posts"] }}</h4>
                        <p class="text-sm text-gray-600">Posts Published</p>
                    </div>
                    <div class="item border-b pb-4">
                        <h4 class="text-5xl font-bold text-[#515F08]">{{ $statistics["destinations"] }}</h4>
                        <p class="text-sm text-gray-600">destinations</p>
                    </div>
                    <div class="item">
                        <h4 class="text-5xl font-bold text-[#515F08]">{{ $statistics["users"] }}</h4>
                        <p class="text-sm text-gray-600">Active Users</p>
                    </div>
                </div>
            </section>

            <section class="destination">
                <h3 class="text-4xl font-bold text-center text-[#515F08] my-2 mb-4">Popular Destinations</h3>

            </section>
            <section>
                <div class="flex flex-col gap-8">
                    <h2 class="text-3xl text-[#515F08] text-center font-bold ">Discover the world from here !</h2>
                    <p class="text-center mx-64"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab
                        distinctio dolorem est ex fugit id in itaque, magnam nemo non nostrum, officia possimus quia
                        quidem quod reprehenderit sunt ullam vero.</p>

                    <div class="options flex justify-center gap-8">
                        <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button @click="show = !show"
                                            class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold focus:outline-none">
                                        <span class="mr-2">destinations</span>
                                        <x-icon name="down-arrow" class="absolute pointer-events-none"/>
                                    </button>
                                </x-slot>

                                <x-dropdown-item :active="request()->routeIs('home')" href="/">All</x-dropdown-item>
                                @foreach($destinations as $destination)
                                    <x-dropdown-item href="/?destination={{ $destination->slug}}"
                                                     :active="request()->is('/?=destination'. $destination->slug)"
                                    >{{ucwords($destination->name)}}</x-dropdown-item>
                                @endforeach
                            </x-dropdown>
                        </div>
                        <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button @click="show = !show"
                                            class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold focus:outline-none">
                                        <span class="mr-2">Date</span>
                                        <x-icon name="down-arrow" class="absolute pointer-events-none"/>
                                    </button>
                                </x-slot>
                                <x-dropdown-item href="/">Latest</x-dropdown-item>
                                <x-dropdown-item href="/">Oldest</x-dropdown-item>
                            </x-dropdown>
                        </div>
                        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                            <form method="GET" action="/">
                                <input type="text"
                                       name="search"
                                       placeholder="Find something"
                                       class="bg-transparent placeholder-black font-semibold text-sm"
                                       value="{{ request("search") }}"
                                >
                            </form>
                        </div>

                    </div>
                    @if($posts->count())
                        <x-posts-grid :posts="$posts"/>
                    @else
                        <p class="text-center">No Posts yet. Please check back later !!! </p>
                @endif

            </section>
        </main>


    </section>
</x-layout>
