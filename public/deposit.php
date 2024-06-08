
    <?php

    include "proses/connect.php";
    session_start(); // Mulai session
    
    // Periksa apakah pengguna sudah login
    if (!isset($_SESSION['email'])) {
        // Jika tidak, redirect ke halaman login
        header("Location: login.php");
        exit();
    }
    
    // Ambil informasi kartu dari database untuk pengguna yang sedang login
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $card = $row['card'];
    $nama_kartu = $row['nama_kartu'];
    $no_rek = $row['no_rek'];
    $pin = $row['pin'];
    ?>
 <title>Judi GA BIKIN KAYA</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<body class="bg-gray-900 text-white">


    <!-- Banner -->
    <div class="bg-cover bg-center h-48" style="background-image: url('https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fG1vbmV5fGVufDB8fDB8fHww');">
        <div class="container mx-auto h-full flex items-center justify-center">
            <div class="bg-black bg-opacity-50 p-4 rounded">
                <h2 class="text-3xl font-bold">Deposit Now</h2>
                <p class="mt-2">Enter the amount you want to deposit and select your ATM card.</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="block container mx-auto p-4">
    <!-- Deposit Form -->
    <section class="grid grid-cols-2 gap-4">
        <!-- Bagian Kiri -->
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg mx-auto w-1/2">
        <form action="proses/deposit.php" method="POST">
            <div class="mb-4">
                <label for="nominal" class="block text-gray-300 text-sm font-bold mb-2">Nominal</label>
                <input type="number" id="nominal" name="nominal" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400" min="10000" required>
            </div>
            <div class="mb-4">
                <label for="card" class="block text-gray-300 text-sm font-bold mb-2">ATM Card</label>
                <input type="text" id="card" name="card" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400" value="<?php echo $card; ?>" disabled>
            </div>
            <div class="mb-4">
                <label for="nama_kartu" class="block text-gray-300 text-sm font-bold mb-2">Nama Kartu</label>
                <input type="text" id="nama_kartu" name="nama_kartu" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400" value="<?php echo $nama_kartu; ?>" disabled>
            </div>
            <div class="mb-4">
                <label for="no_rek" class="block text-gray-300 text-sm font-bold mb-2">Nomor Rekening</label>
                <input type="text" id="no_rek" name="no_rek" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400" value="<?php echo $no_rek; ?>" disabled>
            </div>
            <div class="mb-4">
                <label for="pin" class="block text-gray-300 text-sm font-bold mb-2">ATM PIN</label>
                <input type="password" id="pin" name="pin" class="bg-gray-900 border border-gray-700 text-white rounded-lg w-full py-2 px-3 focus:outline-none focus:border-yellow-400" value="<?php echo $pin; ?>" disabled>
            </div>
            <div class="mb-5 text-center">
                <button type="submit" class="bg-yellow-400 text-black px-4 py-2 rounded">Deposit</button>
            </div>
        </form>
        </div>
                    <div class="bg-gray-800 p-8 rounded-lg shadow-lg" ><img src="image/shareqr.png" class=""></div>
         </section>
    </main>

    <!-- Footer -->
    <?php
include 'config/footer.php';?>

    <script>
        // Function to show/hide bank account details based on card selection
        document.getElementById('card').addEventListener('change', function() {
            var selectedCard = this.value;
            var bankDetails = document.getElementById('bankDetails');
            if (selectedCard === 'visa' || selectedCard === 'mastercard' || selectedCard === 'amex') {
                bankDetails.style.display = 'block';
            } else {
                bankDetails.style.display = 'none';
            }
        });
    </script>
</body>

</html>
