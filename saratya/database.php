<?php
$host = 'localhost';
$dbname = 'saratsya_pkl';
$user = 'root'; // Username default XAMPP
$password = ''; // Password default XAMPP kosong

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
