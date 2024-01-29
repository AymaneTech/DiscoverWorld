<x-layout>
    <section>
        <main class="container flex justify-between mx-auto my-8">
            <div class="flex flex-col gap-y-8 mt-16">
                <h1 class="text-4xl font-bold text-start text-blue-500 my-2">Unleash the Power of Agile Scrum, Join us
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
                    <a href="/dashboard" class="w-fit font-semibold text-white bg-[#0155B7] px-8 py-2 rounded-3xl">Go to
                        Workspace</a>
                @else
                    <a href="/login" class="w-fit font-semibold text-white bg-[#0155B7] px-8 py-2 rounded-3xl">Grt Started</a>
                @endauth
            </div>
            <div class="">
                <img src="images/img2.jpg" alt="">
            </div>
        </main>
    </section>
</x-layout>
