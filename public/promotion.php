<!DOCTYPE html>
<html lang="en">

<body class="bg-gray-900 text-white">
    <!-- Header -->
    <?php include 'config/header.php';?>

    <!-- Banner -->
    <div class="bg-cover bg-center h-48" style="background-image: url('https://source.unsplash.com/1600x900/?casino,promotion');">
        <div class="container mx-auto h-full flex items-center justify-center">
            <div class="bg-black bg-opacity-50 p-4 rounded">
                <h2 class="text-3xl font-bold">Exclusive Promotions</h2>
                <p class="mt-2">Get the best deals and offers here!</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto p-4">
        <!-- Promotions Section -->
        <section class="mt-8">
            <h3 class="text-2xl font-bold mb-4">Current Promotions</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Promotion 1 -->
                <div class="bg-gray-800 p-4 rounded shadow-lg">
                    <img src="https://source.unsplash.com/400x300/?casino,bonus" alt="Promotion Image" class="rounded mb-4">
                    <h4 class="text-xl font-bold mb-2">Welcome Bonus</h4>
                    <p class="mb-4">Get a 100% match bonus on your first deposit up to $500. Join now and start winning!</p>
                    <button class="bg-yellow-400 text-black px-4 py-2 rounded">Claim Now</button>
                </div>
                <!-- Promotion 2 -->
                <div class="bg-gray-800 p-4 rounded shadow-lg">
                    <img src="https://source.unsplash.com/400x300/?casino,free" alt="Promotion Image" class="rounded mb-4">
                    <h4 class="text-xl font-bold mb-2">Free Spins</h4>
                    <p class="mb-4">Enjoy 50 free spins on our latest slot game. No deposit required!</p>
                    <button class="bg-yellow-400 text-black px-4 py-2 rounded">Play Now</button>
                </div>
                <!-- Promotion 3 -->
                <div class="bg-gray-800 p-4 rounded shadow-lg">
                    <img src="https://source.unsplash.com/400x300/?casino,cashback" alt="Promotion Image" class="rounded mb-4">
                    <h4 class="text-xl font-bold mb-2">Cashback Offer</h4>
                    <p class="mb-4">Get 10% cashback on all your losses every weekend. Play more to earn more!</p>
                    <button class="bg-yellow-400 text-black px-4 py-2 rounded">Get Cashback</button>
                </div>
                <!-- Add more promotions as needed -->
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 p-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 GambleOnline. All Rights Reserved.</p>
            <nav class="space-x-4 mt-2">
                <a href="#" class="hover:text-yellow-400">Privacy Policy</a>
                <a href="#" class="hover:text-yellow-400">Terms of Service</a>
                <a href="#" class="hover:text-yellow-400">Contact Us</a>
            </nav>
        </div>
    </footer>
</body>

</html>
