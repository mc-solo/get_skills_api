<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-tr from-gray-900 to-gray-800 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-2xl rounded-2xl p-10 max-w-2xl w-full relative">
        <!-- X Button -->
        <a href="/landing-page" class="absolute top-4 right-4 text-2xl font-bold text-red-500 hover:text-red-700">&times;</a>

        <h1 class="text-3xl font-extrabold mb-6 text-gray-800 text-center">Student Registration</h1>
        <form id="registration-form" class="space-y-6">
            <!-- Name -->
            <div>
                <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-lg font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
            </div>

            <!-- Parent Information -->
            <div>
                <label for="parent" class="block text-lg font-medium text-gray-700">Parent Information</label>
                <select id="parent" name="parent" class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
                    <option value="">Select Parent</option>
                    <option value="name">Name</option>
                    <option value="email">Email</option>
                    <option value="phone">Phone Number</option>
                </select>
                <div id="parent-info-name" class="mt-4 hidden">
                    <input type="text" id="parent-name" placeholder="Parent Name" class="block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
                </div>
                <div id="parent-info-email" class="mt-4 hidden">
                    <input type="email" id="parent-email" placeholder="Parent Email" class="block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
                </div>
                <div id="parent-info-phone" class="mt-4 hidden">
                    <input type="text" id="parent-phone" placeholder="Parent Phone Number" class="block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
                </div>
            </div>

            <!-- Address -->
            <div>
                <label for="address" class="block text-lg font-medium text-gray-700">Address</label>
                <input type="text" id="address" name="address" class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
            </div>

            <!-- Date of Birth -->
            <div>
                <label for="dob" class="block text-lg font-medium text-gray-700">Date of Birth</label>
                <input type="date" id="dob" name="dob" class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
            </div>

            <!-- Gender -->
            <div>
                <label for="gender" class="block text-lg font-medium text-gray-700">Gender</label>
                <select id="gender" name="gender" class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Educational Level -->
            <div>
                <label for="education" class="block text-lg font-medium text-gray-700">Educational Level</label>
                <select id="education" name="education" class="mt-2 block w-full border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 text-sm px-4 py-2">
                    <option value="">Select Level</option>
                    <option value="highschool">High School</option>
                    <option value="undergraduate">Undergraduate</option>
                    <option value="postgraduate">Postgraduate</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between mt-8">
                <button type="reset" class="px-6 py-2 bg-gray-500 text-white rounded-lg shadow-md hover:bg-gray-600 focus:ring-2 focus:ring-gray-400">Clear</button>
                <button type="submit" class="px-6 py-2 bg-indigo-500 text-white rounded-lg shadow-md hover:bg-indigo-600 focus:ring-2 focus:ring-indigo-400">Submit</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('parent').addEventListener('change', function () {
            const parentInfoName = document.getElementById('parent-info-name');
            const parentInfoEmail = document.getElementById('parent-info-email');
            const parentInfoPhone = document.getElementById('parent-info-phone');

            parentInfoName.classList.add('hidden');
            parentInfoEmail.classList.add('hidden');
            parentInfoPhone.classList.add('hidden');

            if (this.value === 'name') {
                parentInfoName.classList.remove('hidden');
            } else if (this.value === 'email') {
                parentInfoEmail.classList.remove('hidden');
            } else if (this.value === 'phone') {
                parentInfoPhone.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>
