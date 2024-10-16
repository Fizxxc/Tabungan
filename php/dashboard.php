<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <h1>Dashboard</h1>
        </div>
    </header>

    <main>
        <section class="dashboard-section">
            <div class="container">
                <h2>Selamat Datang, <?php echo $user['username']; ?>!</h2>
                <p>Saldo Anda: Rp <?php echo number_format($user['saldo'], 2); ?></p>
                
                <!-- Fitur tambahan seperti histori transaksi, transfer saldo, dll. -->
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <div class="container">
            <p>&copy; 2024 Website Tabungan Online. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>