<?php
include 'connect.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);

        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['password']; // Ambil password yang disimpan dari database
            if ($password === $storedPassword) {
                $_SESSION['email'] = $email; // Bandingkan dengan password yang diinput
                header("location:../index.php?pesan=sukses");
                // Redirect atau lakukan tindakan setelah login berhasil
            } else {
                echo "Password salah!";
            }
        } else {
            echo "Email tidak ditemukan!";
        }
    }
}

$conn->close();
?>
