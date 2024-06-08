<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judi GA BIKIN KAYA</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<?php
include '../public/proses/connect.php';
session_start() ?>
        </header>

        <!-- Hamburger Menu -->
<input type="checkbox" id="menu-toggle" class="hidden">
<label for="menu-toggle" class="menu-icon">&#9776;</label>

<!-- Header -->
<header class="bg-gray-800 p-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Judi Online = Scam</h1>
        <nav class="space-x-4">
            <a href="./index.php" class="hover:text-yellow-400">Home</a>
            <a href="./games.php" class="hover:text-yellow-400">Games</a>
            <a href="./promotion.php" class="hover:text-yellow-400">Promotions</a>
            <?php 
            if(isset($_SESSION['email'])) {
                // Jika pengguna sudah login, tampilkan link logout
                echo '<a href="./logout.php" class="hover:text-yellow-400">Logout</a>';
            } else {
                // Jika pengguna belum login, tampilkan link login dan register
                echo '<a href="./login.php" class="hover:text-yellow-400">Login</a>';
            }
            ?>
        </nav>
    </div>
</header>

<!-- CSS -->
<style>
    /* Styling untuk hamburger menu */
    .menu-icon {
        display: none;
        cursor: pointer;
        color: white;
    }

    /* Media query untuk tampilan mobile */
    @media (max-width: 768px) {
        .menu-icon {
            display: block;
            position: absolute;
            top: 10px;
            right: 20px;
            z-index: 1000;
        }

        /* Styling untuk menu toggle */
        .menu-icon:hover {
            color: yellow;
        }

        /* Styling untuk checkbox */
        #menu-toggle {
            display: none;
        }

        /* Styling untuk navigasi */
        nav {
            display: none;
            flex-direction: column;
            background-color: #333;
            position: absolute;
            top: 60px;
            right: 0;
            width: 100%;
            padding: 10px;
            z-index: 999;
        }

        /* Styling untuk tautan dalam navigasi */
        nav a {
            color: white;
            padding: 8px 0;
            text-align: center;
            width: 100%;
            border-bottom: 1px solid #555;
        }

        /* Styling untuk tautan hover dalam navigasi */
        nav a:hover {
            background-color: #555;
        }

        /* Styling untuk toggle checkbox yang dicentang */
        #menu-toggle:checked + nav {
            display: flex;
        }
    }
</style>
