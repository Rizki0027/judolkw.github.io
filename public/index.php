

    <body class="bg-gray-900 text-white">
        <!-- Header -->

       
        <?php
include 'config/header.php';

// Fungsi untuk mengambil nilai tukar dari Rupiah ke Dolar
function getExchangeRate() {
    // Ganti URL API sesuai dengan penyedia data nilai tukar mata uang
    $url = 'https://api.exchangerate-api.com/v4/latest/USD';
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    return $data['rates']['IDR']; // Mendapatkan nilai tukar dari Dolar ke Rupiah
}

$nominal_rupiah = "Rp 0";
$nominal_dollar = "$0.00";

// Check if the user is logged in
if (isset($_SESSION['email'])) {
    // Fetch user details for the logged-in user using email
    $email = $_SESSION['email'];
    $sql = "SELECT nominal FROM deposits INNER JOIN user ON deposits.id_user = user.id WHERE user.email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nominal = $row['nominal'];

        // Get exchange rate
        $exchange_rate = getExchangeRate();

        // Format nominal to Indonesian Rupiah
        $nominal_rupiah = "Rp " . number_format($nominal, 0, ',', '.');

        // Convert nominal to Dollar
        $nominal_dollar = $nominal / $exchange_rate;
        $nominal_dollar = number_format($nominal_dollar, 2); // Format to 2 decimal places
    }
}

$conn->close();
?>

        <!-- Main Content -->
        <main class="container mx-auto p-4">
            <!-- Deposit Section -->
            <section class="mt-8">
                <div class="bg-gray-800 p-4 rounded shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Deposit Info</h3>
                    <p class="mb-4">Saldo Kamu : <?php echo $nominal_rupiah; ?> (<?php echo "$" . $nominal_dollar; ?>)</p>
                    <a href="./deposit.php" class="inline-block bg-yellow-400 text-black px-4 py-2 rounded">Depo Lagi</a>
                </div>
            </section>
        </main>
        <!-- Banner -->
        <div class="bg-cover bg-center h-64 bg-fixed" style="background-image: url('https://images.unsplash.com/photo-1716881763995-097b7a68ea3d?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <div class="container mx-auto h-full flex items-center justify-center">
                <div class="bg-black bg-opacity-50 p-4 rounded">
                    <h2 class="text-4xl font-bold">Selamat Datang</h2>
                    <p class="mt-2">Game Online Terbaik</p>
                    <?php 
            if(isset($_SESSION['email'])) {
                // Jika pengguna sudah login, tampilkan link logout
                echo ' <a href="games.php" class="mt-4 inline-block bg-yellow-400 text-black px-4 py-2 rounded">Main</a>';
            } else {
                // Jika pengguna belum login, tampilkan link login dan register
                echo ' <a href="login.php" class="mt-4 inline-block bg-yellow-400 text-black px-4 py-2 rounded">Join Now</a>';
              
            }
            ?>
                   
                </div>
            </div>
        </div>
    
        <!-- Main Content -->
        <main class="container mx-auto p-4">
            <!-- Games Section -->
            <section class="mt-8">
                <h3 class="text-3xl font-bold mb-4">Popular Games</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <a href="https://roulette-simulator.info/en/simulator/?mode=simple&new=1"><div class="bg-gray-800 p-4 rounded shadow-lg">
                        <img src="https://images.unsplash.com/photo-1511193311914-0346f16efe90?q=80&w=1473&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Poker" class="w-full h-40 object-cover rounded">
                        <h4 class="mt-2 text-xl font-bold">Poker</h4>
                        <p class="mt-1">Tunjukan skil kamu</p>
                    </div></a>
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
    
            <!-- Promotions Section -->
            <section class="mt-8">
                <h3 class="text-3xl font-bold mb-4">Current Promotions</h3>
                <div class="bg-yellow-400 text-black p-4 rounded shadow-lg">
                    <h4 class="text-xl font-bold">50% Welcome Bonus</h4>
                    <p class="mt-1">Sign up today and get a 50% bonus on your first deposit.</p>
                    <a href="#" class="mt-2 inline-block bg-gray-800 text-white px-4 py-2 rounded">Learn More</a>
                </div>
            </section>
        </main>
    
        <!-- Footer -->
        <?php
include 'config/footer.php'; ?>

    </body>
    
    </html>
    
    
</body>
</html>