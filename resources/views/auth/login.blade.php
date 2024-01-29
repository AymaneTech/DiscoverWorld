<x-layout class="overflow-hidden">
    <main class="flex flex-col items-center justify-center h-screen px-4 space-y-4 lg:flex-row lg:justify-around lg:px-0">
        <div class="w-full lg:w-auto lg:max-w-md">
            <div class="form-container w-[350px]">
                <h2 class="font-bold text-2xl text-blue-500 mb-4">Welcome to Agile Scrum!</h2>
                <form class="space-y-4" action="/login" method="post">
                    @csrf
                    <x-input type="email" name="email" label="Email"/>
                    <x-input type="password" name="password" label="Password"/>

                    <x-btn.submit-btn>Login</x-btn.submit-btn>
                </form>
            </div>
        </div>
        <div class="hidden lg:block lg:w-[50vw]">
            <h2 class="text-4xl font-bold text-center text-blue-500 my-2">Unleash the Power of Agile Scrum</h2>
            <p class="text-center ">Join us to revolutionize your workflow and experience true collaboration!</p>

            <img src="images/img1.jpg" alt="">
        </div>
    </main>
</x-layout>
