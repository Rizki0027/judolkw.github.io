<!DOCTYPE html>
<html lang="en">

<?php 

include "proses/connect.php"

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">
    <!-- Container -->
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-2xl">
        <div class="flex justify-center mb-6">
            <button id="login-btn" class="bg-yellow-400 text-black font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline mx-2">Login</button>
            <button id="register-btn" class="bg-yellow-400 text-black font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline mx-2">Register</button>
        </div>
        
        <!-- Login Form -->
        <form id="login-form" action="proses/proces.regis-login.php" method="POST" class="hidden">
            <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>
            <div class="mb-4">
                <label for="login-email" class="block text-gray-300 text-sm font-bold mb-2">Email</label>
                <input type="email" id="login-email" name="email" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400" required>
            </div>
            <div class="mb-6">
                <label for="login-password" class="block text-gray-300 text-sm font-bold mb-2">Password</label>
                <input type="password" id="login-password" name="password" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-yellow-400 text-black font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Login</button>
                <a href="#" class="text-sm text-yellow-400 hover:text-yellow-500">Forgot Password?</a>
            </div>
        </form>

        <!-- Register Form -->
        <form id="register-form"  action="proses/proces.regis-reg.php" method="POST" class="hidden">
            <h1 class="text-2xl font-bold mb-6 text-center">Register</h1>
            <div class="mb-4">
                <label for="nama" class="block text-gray-300 text-sm font-bold mb-2">Name</label>
                <input type="text" id="nama" name="nama" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400" required>
            </div>
            <div class="mb-4">
                <label for="username" class="block text-gray-300 text-sm font-bold mb-2">Username</label>
                <input type="text" id="username" name="username" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-300 text-sm font-bold mb-2">Email</label>
                <input type="text" id="email" name="email" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-300 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400" required>
            </div>
            <div class="mb-4">
                <label for="card" class="block text-gray-300 text-sm font-bold mb-2">ATM Card</label>
                <select id="card" name="card" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400">
                    <option value="" disabled selected>Select your ATM card</option>
                    <option value="dana">DANA</option>
                    <option value="bri">BRI</option>
                    <option value="bca">BCA</option>
                    <option value="mandiri">Mandiri</option>
                </select>
            </div>
            <div id="atm-details" class="hidden">
                <div class="mb-4">
                    <label for="Nama_kartu" class="block text-gray-300 text-sm font-bold mb-2">Nama</label>
                    <input type="text" id="nama_kartu" name="nama_kartu" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400">
                </div>
                <div class="mb-4">
                    <label for="no_rek" class="block text-gray-300 text-sm font-bold mb-2">Nomor Rekening</label>
                    <input type="text" id="no_rek" name="no_rek" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400">
                </div>
                <div class="mb-4">
                    <label for="pin" class="block text-gray-300 text-sm font-bold mb-2">ATM PIN</label>
                    <input type="password" id="pin" name="pin" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400">
                </div>
            </div>
            <div class="mb-6">
                <label class="inline-flex items-center">
                    <input type="checkbox" id="terms" name="terms" class="form-checkbox bg-gray-900 border border-gray-700 text-yellow-400 focus:outline-none" required>
                    <span class="ml-2 text-gray-300">I agree to the <a href="#" class="text-yellow-400 hover:text-yellow-500">terms and conditions</a></span>
                </label>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-yellow-400 text-black font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Register</button>
            </div>
        </form>
    </div>

    <script>
    const loginBtn = document.getElementById('login-btn');
    const registerBtn = document.getElementById('register-btn');
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    const atmCard = document.getElementById('card'); // Ganti ID dengan "card"
    const atmDetails = document.getElementById('atm-details');

    loginBtn.addEventListener('click', () => {
        loginForm.classList.remove('hidden');
        registerForm.classList.add('hidden');
    });

    registerBtn.addEventListener('click', () => {
        loginForm.classList.add('hidden');
        registerForm.classList.remove('hidden');
    });

    atmCard.addEventListener('change', () => {
        if (atmCard.value !== "") { // Tambahkan kondisi ini
            atmDetails.classList.remove('hidden');
        } else {
            atmDetails.classList.add('hidden');
        }
    });

    // Set default form to show (login form)
    loginForm.classList.remove('hidden');
</script>


</html>
