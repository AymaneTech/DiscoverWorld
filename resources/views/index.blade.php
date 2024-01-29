<x-layout>
    <section>
        <main class="container flex justify-between mx-auto my-8">
            <div class="flex flex-col gap-y-8 mt-16">
                <h1 class="text-4xl font-bold text-start text-[#515F08] my-2">Unleash the Power of Agile Scrum, Join us
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
                    <a href="/dashboard" class="w-fit font-semibold text-white bg-[#515F08] px-8 py-2 rounded-3xl">
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
        </main>
        <x-bladewind::button onclick="showModal('custom-actions')">
            CLick me for custom actions
        </x-bladewind::button>

        <x-bladewind::modal
            backdrop_can_close="false"
            name="form-mode"
            ok_button_action="saveProfile()"
            ok_button_label="Update"
            close_after_action="false"
            center_action_buttons="true">

            <form method="post" action="" class="profile-form">
                @csrf
                <b class="mt-0">Edit Your Profile</b>
                <div class="grid grid-cols-2 gap-4 mt-6">
                    <x-bladewind::input required="true" name="first_name"
                                        error_message="Please enter your first name" label="First name"/>

                    <x-bladewind::input required="true" name="last_name"
                                        error_message="Please enter your last name" label="Last name"/>
                </div>
                <x-bladewind::input required="true" name="email"
                                    error_message="Please enter your email" label="Email address"/>

                <x-bladewind::input numeric="true" name="mobile" label="Mobile"/>
            </form>
        </x-bladewind::modal>




        <x-bladewind::modal
           >

        </x-bladewind::modal>
        <script>
            saveProfile = () => {
                if (validateForm('.profile-form')) {
                    domEl('.profile-form').submit();
                } else {
                    return false;
                }
            }
        </script>
    </section>
</x-layout>
