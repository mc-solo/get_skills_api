<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <x-input-label for="phone_number" :value="__('Phone Number')" />
            <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number"
                :value="old('phone_number')" required />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <!-- Gender -->
        <div class="mt-4">
            <x-input-label for="gender" :value="__('Gender')" />
            <select id="gender" name="gender" class="block mt-1 w-full">
                <option value="" selected disabled>-- Select Gender --</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <!-- Date of birth -->
        <div class="mt-4">
            <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
            <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth"
                :value="old('date_of_birth')" required />
            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
        </div>

        <!-- Educational Level -->
        <div class="mt-4">
            <x-input-label for="educational_level" :value="__('Educational Level')" />
            <select id="educational_level" name="educational_level" class="block mt-1 w-full" required>
                <option value="" selected disabled>-- Select Educational Level --</option>
                <option value="high_school">High School</option>
                <option value="bachelor">Bachelor’s Degree</option>
                <option value="master">Master’s Degree</option>
                <option value="phd">PhD</option>
            </select>
            <x-input-error :messages="$errors->get('educational_level')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <div class="relative">
                <!-- Password Input -->
                <x-text-input id="password" class="block mt-1 w-full pr-10" type="password" name="password" required
                    autocomplete="new-password" />

                <!-- Toggle Button -->
                <button id="toggle-password" type="button"
                    class="absolute inset-y-0 right-3 flex items-center text-gray-400 hover:text-blue-600 focus:outline-none">
                    <svg id="eye-icon" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12s2-4 9-4 9 4 9 4-2 4-9 4-9-4-9-4z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 9l1.5 1.5"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 9l-1.5 1.5">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l0 2"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 13.5l1 1"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 13.5l-1 1">
                        </path>
                    </svg>
                </button>
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <div class="relative">
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <!-- Toggle Button -->
                <button id="toggle-password2" type="button"
                    class="absolute inset-y-0 right-3 flex items-center text-gray-400 hover:text-blue-600 focus:outline-none">
                    <svg id="eye-icon" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12s2-4 9-4 9 4 9 4-2 4-9 4-9-4-9-4z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 9l1.5 1.5"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 9l-1.5 1.5">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l0 2"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 13.5l1 1"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 13.5l-1 1">
                        </path>
                    </svg>
                </button>

            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button type="reset"
                class="px-6 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-gray-600 focus:ring-2 focus:ring-gray-400">
                Clear
            </x-primary-button>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        document.getElementById('toggle-password').addEventListener('click', function () {
        const passwordField = document.getElementById('password');

        const svgIcon = this.querySelector('svg');

        // Toggle password visibility
        const type = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = type;

        // Update the SVG for visibility toggle
        if (type === 'text') {
        svgIcon.innerHTML = `
            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
            <circle cx="12" cy="12" r="3"></circle>
        `;
        svgIcon.classList.add('text-blue-500');
        } else {
            svgIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12s2-4 9-4 9 4 9 4-2 4-9 4-9-4-9-4z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 9l1.5 1.5"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 9l-1.5 1.5"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l0 2"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 13.5l1 1"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 13.5l-1 1"></path>
            `;
            svgIcon.classList.remove('text-blue-500');
        }     
        
});

        document.getElementById('toggle-password2').addEventListener('click', function () {
            const passwordConfirmField = document.getElementById('password_confirmation');

            const svgIcon = this.querySelector('svg');

            // Toggle password visibility
            const type2 = passwordConfirmField.type === 'password' ? 'text' : 'password';
            passwordConfirmField.type = type2;

            // Update the SVG for visibility toggle
            if (type2 === 'text') {
            svgIcon.innerHTML = `
                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                <circle cx="12" cy="12" r="3"></circle>
            `;
            svgIcon.classList.add('text-blue-500');
            } else {
                svgIcon.innerHTML = `
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12s2-4 9-4 9 4 9 4-2 4-9 4-9-4-9-4z"></path>
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 9l1.5 1.5"></path>
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 9l-1.5 1.5"></path>
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l0 2"></path>
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 13.5l1 1"></path>
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.5 13.5l-1 1"></path>
`;
                svgIcon.classList.remove('text-blue-500');
            } 
        });


    </script>
</x-guest-layout>