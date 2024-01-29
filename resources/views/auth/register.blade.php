<x-layout class="overflow-hidden">
    <main class="flex flex-col items-center justify-center h-screen px-4 space-y-4 lg:flex-row lg:justify-around lg:px-0">
        <div class="w-full lg:w-auto lg:max-w-md">
            <div class="form-container w-[350px]">
                <h2 class="font-bold text-2xl text-blue-500 mb-4">Welcome to Agile Scrum!</h2>
                <form class="space-y-4" action="/register" method="post">
                    @csrf
                    <x-input type="text" name="name" label="Name"/>
                    <x-input type="text" name="username" label="Username"/>
                    <x-input type="email" name="email" label="Email"/>
                    <div class="mb-4">
                        <label for="job_title" class="block mb-1">Your job title</label>
                        <select name="job_title" id="job_title"
                                class="w-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        >
                            <option value="developer">Developer</option>
                            <option value="student">Student</option>
                            <option value="scrum master">Scrum Master</option>
                            <option value="designer">Designer</option>
                            <option value="product owner">Product Owner</option>
                        </select>
                    </div>
                    <x-input type="password" name="password" label="Password"/>
                    <x-input type="password" name="password_confirmation" label="Confirm Password"/>

                    <x-btn.submit-btn>Create Account</x-btn.submit-btn>
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
