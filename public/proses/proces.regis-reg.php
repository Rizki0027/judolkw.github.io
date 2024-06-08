<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['nama']) && isset($_POST['username']) && isset($_POST['card'])) {
      
            $nama = $conn->real_escape_string($_POST['nama']);
            $username = $conn->real_escape_string($_POST['username']);
            $email = $conn->real_escape_string($_POST['email']);
             $password = $conn->real_escape_string($_POST['password']);
            $card = $conn->real_escape_string($_POST['card']);
            $nama_kartu = $conn->real_escape_string($_POST['nama_kartu']);
            $no_rek = $conn->real_escape_string($_POST['no_rek']);
            $pin = $conn->real_escape_string($_POST['pin']);
            
            

        
        

            $sql = "INSERT INTO user (nama, username, email, password, card, nama_kartu , no_rek, pin) VALUES ('$nama', '$username', '$email', '$password', '$card', '$nama_kartu', '$no_rek', '$pin')";

            if ($conn->query($sql) === TRUE) {
                header("location:../login.php?pesan=sukses");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } 
    }


$conn->close();
?>
