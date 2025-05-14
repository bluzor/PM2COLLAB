<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/YOUR_FA_KIT.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
     <!-- foldernya ada di public ya mas backend -->
      <!-- di baca ya -->
    <nav class="bg-white shadow-md p-4 flex justify-between items-center">
        <div class="text-2xl font-bold text-green-600 flex items-center">
            <i class="fas fa-store mr-2"></i>MyShop
        </div>
        <ul class="flex space-x-6">
            <li><a href="#" class="text-gray-600 hover:text-green-500">Home</a></li>
            <li><a href="#" class="text-gray-600 hover:text-green-500">Products</a></li>
            <li><a href="#" class="text-gray-600 hover:text-green-500">About</a></li>
            <li><a href="/history.html" class="text-gray-600 hover:text-blue-500"><i class="fas fa-history"></i> View History</a></li>
            <li><a href="/seller_dashboard.html" class="text-gray-600 hover:text-blue-500"><i class="fas fa-user"></i> Seller Dashboard</a></li>

        </ul>
        <div>
        <a href="/auth/login.html" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md mr-2"><i class="fas fa-sign-in-alt"></i> Login</a>
<a href="/register" class="px-4 py-2 bg-blue-500 text-white rounded-md"><i class="fas fa-user-plus"></i> Register</a>


        </div>
    </nav>
    
    <!-- Main Content -->
    <div class="container mx-auto mt-8 grid grid-cols-5 gap-6">
        <!-- Card Template -->
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="https://via.placeholder.com/150" class="w-full h-40 object-cover rounded-md" alt="Product Image">
            <h2 class="text-lg font-bold mt-2">Product Name</h2>
            <p class="text-sm text-gray-500">By Seller Name</p>
            <p class="text-gray-600 text-sm mt-2">Short product description goes here.</p>
            <p class="text-xl font-bold text-green-600 mt-2">$99.99</p>
            <button class="w-full bg-green-500 text-white py-2 rounded-md mt-2">Buy Now</button>
        </div>
        <!-- Repeat this div for other cards -->
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="https://via.placeholder.com/150" class="w-full h-40 object-cover rounded-md" alt="Product Image">
            <h2 class="text-lg font-bold mt-2">Product Name</h2>
            <p class="text-sm text-gray-500">By Seller Name</p>
            <p class="text-gray-600 text-sm mt-2">Short product description goes here.</p>
            <p class="text-xl font-bold text-green-600 mt-2">$99.99</p>
            <button class="w-full bg-green-500 text-white py-2 rounded-md mt-2">Buy Now</button>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="https://via.placeholder.com/150" class="w-full h-40 object-cover rounded-md" alt="Product Image">
            <h2 class="text-lg font-bold mt-2">Product Name</h2>
            <p class="text-sm text-gray-500">By Seller Name</p>
            <p class="text-gray-600 text-sm mt-2">Short product description goes here.</p>
            <p class="text-xl font-bold text-green-600 mt-2">$99.99</p>
            <button class="w-full bg-green-500 text-white py-2 rounded-md mt-2">Buy Now</button>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="https://via.placeholder.com/150" class="w-full h-40 object-cover rounded-md" alt="Product Image">
            <h2 class="text-lg font-bold mt-2">Product Name</h2>
            <p class="text-sm text-gray-500">By Seller Name</p>
            <p class="text-gray-600 text-sm mt-2">Short product description goes here.</p>
            <p class="text-xl font-bold text-green-600 mt-2">$99.99</p>
            <button class="w-full bg-green-500 text-white py-2 rounded-md mt-2">Buy Now</button>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="https://via.placeholder.com/150" class="w-full h-40 object-cover rounded-md" alt="Product Image">
            <h2 class="text-lg font-bold mt-2">Product Name</h2>
            <p class="text-sm text-gray-500">By Seller Name</p>
            <p class="text-gray-600 text-sm mt-2">Short product description goes here.</p>
            <p class="text-xl font-bold text-green-600 mt-2">$99.99</p>
            <button onclick="window.location.href='/product/detail.html'" class="w-full bg-blue-500 text-white py-2 rounded-md mt-2">
    Buy Now
</button>

        </div>
    </div>
</body>
</html>
