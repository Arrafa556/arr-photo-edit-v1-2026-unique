# contoh Code Php 

CREATE DATABASE latihan_php;
USE latihan_php;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (nama, email) VALUES
('Arsyard', 'arsyard@example.com'),
('Budi', 'budi@example.com');

# Koneksi mysql ke php 

<?php
$host = "localhost";
$db   = "latihan_php";
$user = "root";
$pass = "";          // default XAMPP kosong
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

# Contoh CRUDE sederhana (read)
# (Pakai <?Php)

require 'koneksi.php';

$stmt = $pdo->query("SELECT * FROM users");
foreach ($stmt as $row) {
    echo $row['nama'] . " - " . $row['email'] . "<br>";
}
# Tambah Data Create


require 'koneksi.php';

$stmt = $pdo->prepare("INSERT INTO users (nama, email) VALUES (?, ?)");
$stmt->execute(['Citra', 'citra@example.com']);

echo "Data berhasil ditambahkan!";


# update Data 
# Pakai (<?Php)


$stmt = $pdo->prepare("UPDATE users SET nama = ? WHERE id = ?");
$stmt->execute(['Citra Baru', 3]);

# Hapus Data 

$stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
$stmt->execute([3]);

# Jangan pernah gabung input User Langsung Ke query Seperti Ini 

// ❌ BAHAYA — jangan pakai cara ini
$email = $_POST['email'];
$pdo->query("SELECT * FROM users WHERE email = '$email'");


