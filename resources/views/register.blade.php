<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="container mx-auto px-4 py-12">
    <div class="flex justify-center">
        <div class="w-full max-w-md">

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                    <h4 class="text-xl font-semibold text-center text-gray-800">User Registration</h4>
                </div>
                <div class="p-6">

                    @if(session('success'))
                        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="/register">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-medium mb-2">First Name</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                id="name" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="mb-4">
                            <label for="last_name" class="block text-gray-700 text-sm font-medium mb-2">Last Name</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                id="last_name" name="last_name" value="{{ old('last_name') }}">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email address</label>
                            <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                id="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                            <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                id="password" name="password">
                        </div>

                        <div class="mb-6">
                            <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-2">Retype Password</label>
                            <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                id="password_confirmation" name="password_confirmation">
                        </div>

                        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Register
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>