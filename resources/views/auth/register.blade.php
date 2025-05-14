<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/YOUR_FA_KIT.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-96 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-blue-600"><i class="fas fa-user-plus"></i> Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label class="block text-gray-700">Full Name</label>
            <input type="text" name="name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your full name" required>

            <label class="block text-gray-700 mt-4">Username</label>
            <input type="text" name="username" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Choose a username" required>

            <label class="block text-gray-700 mt-4">Email</label>
            <input type="email" name="email" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>

            <label class="block text-gray-700 mt-4">Password</label>
            <input type="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Create a password" required>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md mt-4">Register</button>
        </form>
        <p class="mt-4 text-center text-sm">Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500">Login</a></p>
    </div>
</body>
</html>
