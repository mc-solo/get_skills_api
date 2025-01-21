<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-tr from-gray-900 to-gray-800 min-h-screen flex items-center justify-center">
    {{-- <div class="bg-white shadow-2xl rounded-2xl p-10 max-w-md  w-full relative"> --}}
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-lg w-full relative">

            <!-- X Button -->
            <a href="/landing-page"
                class="absolute top-4 right-4 text-2xl font-bold text-red-500 hover:text-red-700">&times;</a>

            <h1 class="text-3xl font-extrabold mb-6 text-gray-800 text-center">Student Registration</h1>
            <form id="registration-form" class="space-y-6">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name"
                        class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email"
                        class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
                </div>

                <!-- Password -->
                {{-- <div class="relative">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm pr-12">

                    <button id="toggle-password" type="button" data-hs-toggle-password='{
                        "target": "#hs-toggle-password"
                      }'
                        class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-none focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                        <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                            <path class="hs-password-active:hidden"
                                d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                            <path class="hs-password-active:hidden"
                                d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                            <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                            <path class="hidden hs-password-active:block"
                                d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                            <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div> --}}

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative flex items-center mt-1">
                        <input type="password" id="password" name="password"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm pr-10">
                        <button id="toggle-password" type="button"
                            class="absolute right-2 text-gray-400 hover:text-blue-600 focus:outline-none">
                            <svg id="eye-icon" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12c0 3.866-3.582 7-8 7s-8-3.134-8-7 3.582-7 8-7 8 3.134 8 7z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.88 9.88a3 3 0 1 0 4.24 4.24" />
                            </svg>
                        </button>
                    </div>
                </div>


                <!-- Address -->
                <div>
                    <label for="address" class="block text-lg font-medium text-gray-700">Address</label>
                    <input type="text" id="address" name="address"
                        class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
                </div>

                <!-- Date of Birth -->
                <div>
                    <label for="dob" class="block text-lg font-medium text-gray-700">Date of Birth</label>
                    <input type="date" id="dob" name="dob"
                        class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
                </div>

                <!-- Gender -->
                <div>
                    <label for="gender" class="block text-lg font-medium text-gray-700">Gender</label>
                    <select id="gender" name="gender"
                        class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Educational Level -->
                <div>
                    <label for="education" class="block text-lg font-medium text-gray-700">Educational Level</label>
                    <select id="education" name="education"
                        class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
                        <option value="">Select Level</option>
                        <option value="highschool">High School</option>
                        <option value="undergraduate">Undergraduate</option>
                        <option value="postgraduate">Postgraduate</option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end mt-8 space-x-4">
                    <a href="#"
                        class="text-sm text-indigo-500 hover:underline hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition">Already
                        have an account?</a>
                    <button type="reset"
                        class="px-6 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-gray-600 focus:ring-2 focus:ring-gray-400">Clear</button>
                    <button type="submit"
                        class="px-6 py-2 bg-[#0ea6e9] text-white rounded-lg shadow-md hover:bg-indigo-600 focus:ring-2 focus:ring-indigo-400">Submit</button>
                </div>
            </form>
        </div>

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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12c0 3.866-3.582 7-8 7s-8-3.134-8-7 3.582-7 8-7 8 3.134 8 7z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                `;
                svgIcon.classList.remove('text-blue-500');
            }        
    });
        </script>

</body>

</html>