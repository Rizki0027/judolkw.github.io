<!DOCTYPE html>
<html lang="en">


<body class="bg-gray-900 text-white">
    <?php
    include 'config/header.php';
    ?>
    <!-- Banner -->
    <div class="bg-cover bg-center h-48" style="background-image: url('https://images.unsplash.com/photo-1518895312237-a9e23508077d?q=80&w=1484&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="container mx-auto h-full flex items-center justify-center">
            <div class="bg-black bg-opacity-50 p-4 rounded">
                <h2 class="text-3xl font-bold">Discover Our Games</h2>
                <p class="mt-2">Play and win big with our exciting selection of games!</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto p-4">
        <!-- Games Section -->
        <section class="mt-8">
                <h3 class="text-3xl font-bold mb-4">Popular Games</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <div class="bg-gray-800 p-4 rounded shadow-lg">
                        <img src="https://images.unsplash.com/photo-1511193311914-0346f16efe90?q=80&w=1473&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Poker" class="w-full h-40 object-cover rounded">
                        <h4 class="mt-2 text-xl font-bold">Poker</h4>
                        <p class="mt-1">Tunjukan skil kamu</p>
                    </div>
                    <div class="bg-gray-800 p-4 rounded shadow-lg">
                        <img src="https://images.unsplash.com/photo-1604028297236-42130c7dcc3a?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Slots" class="w-full h-40 object-cover rounded">
                        <h4 class="mt-2 text-xl font-bold">Slot</h4>
                        <p class="mt-1">Kemenangan terbesar takan pernah datang di awal</p>
                    </div>
                    <div class="bg-gray-800 p-4 rounded shadow-lg">
                        <img src="https://images.unsplash.com/photo-1625888791210-40ea41c1d0f3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Roulette" class="w-full h-40 object-cover rounded">
                        <h4 class="mt-2 text-xl font-bold">Roulette</h4>
                        <p class="mt-1">Nomor Terbaikmu Wajib Di pertaruhkan.</p>
                    </div>
                    <div class="bg-gray-800 p-4 rounded shadow-lg">
                        <img src="https://images.unsplash.com/photo-1542645976-dfdbd69ee770?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Blackjack" class="w-full h-40 object-cover rounded">
                        <h4 class="mt-2 text-xl font-bold">Blackjack</h4>
                        <p class="mt-1">Untuk Mu Yang Classic</p>
                    </div>
                </div>
            </section>
    </main>

    <!-- Footer -->
   <?php include 'config/footer.php';?>
</body>

</html>
