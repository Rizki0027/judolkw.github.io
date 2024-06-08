<?php
session_start();
include 'connect.php';

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Fetch user details for the logged-in user using email
$email = $_SESSION['email'];
$sql = "SELECT id, nama, card, nama_kartu, no_rek, pin FROM user WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $user_id = $row['id'];
    $nama= $row['nama'];
    $card = $row['card'];
    $nama_kartu = $row['nama_kartu'];
    $no_rek = $row['no_rek'];
    $pin = $row['pin'];
} else {
    echo "User data not found!";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nominal = $conn->real_escape_string($_POST['nominal']);
    
    // Insert the deposit data into the deposits table
    $sql = "INSERT INTO deposits (nominal, tanggal, id_user, nama, no_rek) VALUES ('$nominal', NOW(), '$user_id','$nama','$no_rek')";
    if ($conn->query($sql) === TRUE) {
        header("location:../index.php?pesan=sukses");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
