CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    judul VARCHAR(255) NOT NULL,
    isi TEXT, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES categories(user_id) ON DELETE CASCADE

);

INSERT  INTO posts (user_id, title, judul, isi) VALUES
(1, `Belajar MySQL 1, `Hari Ini Aku Belajar Join...`),
(1, 'Progress Snake Game', 'Nambahin fitur reset_game()...'),
(2, 'Halo Dunia', 'Postingan pertama Budi');

# Jenis jenis Join 
# inner join 

SELECT users.nama, posts.judul
FROM posts
INNER JOIN users ON posts.user_id = users.id;

# Jenis LEFT join 

SELECT users.nama, posts.judul
FROM users
LEFT JOIN posts ON users.id = posts.user_id;

# Implementasi join di php 

<?php
require 'koneksi.php';

$stmt = $pdo->query("
    SELECT users.nama, posts.judul, posts.created_at
    FROM posts
    INNER JOIN users ON posts.user_id = users.id
    ORDER BY posts.created_at DESC
");

foreach ($stmt as $row) {
    echo "<strong>{$row['judul']}</strong> oleh {$row['nama']} ({$row['created_at']})<br>";
}

# left join sql 


$stmt = $pdo->query("SELECT users.nama, posts.judul
FROM users
LEFT JOIN posts ON users.id = posts.user_id"

);

# INNER join sql 
$stmt = $pdo->query("SELECT users.nama, posts.judul
FROM posts
INNER JOIN users ON posts.user_id = users.id");


# Contoh Table 

CREATE TABLE absensi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    karyawan_id INT NOT NULL,
    tanggal DATE NOT NULL,
    jam_masuk TIME,
    jam_pulang TIME,
    status ENUM('Hadir', 'Izin', 'Sakit', 'Alpha') NOT NULL DEFAULT 'Hadir',
    FOREIGN KEY (karyawan_id) REFERENCES karyawan(id) ON DELETE CASCADE
);

#$CREATE TABLE karyawan (
    #id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nip VARCHAR(20) NOT NULL UNIQUE,
    jabatan VARCHAR(50) NOT NULL

$CREATE INTO karyawan (nama, nip, jabatan) VALUES
('Arsyard', '2026001', 'Staff IT'),
('Budi Santoso', '2026002', 'Admin'),
('Citra Dewi', '2026003', 'Manager');

INSERT INTO absensi (karyawan_id, tanggal, jam_masuk, jam_pulang, status) VALUES
(1, '2026-09-15', '08:00:00', '17:00:00', 'Hadir'),
(2, '2026-09-15', '08:15:00', '17:00:00', 'Hadir'),
(3, '2026-09-15', NULL, NULL, 'Izin');


# Contoh Update nya 
# UPDATE users
SET nama = 'Nama Baru', jabatan = 'Jabatan Baru'
WHERE id = 1;

Update users
SET nama = 'Arsyard santoso', email = 'Arsyard_santoso_3@example.com'
WHERE id = 1;

UPDATE users
SET nama = 'Gustav', email = 'Gustav_3@example.com'
WHERE id = 2;

Update Users 
SET nama = 'Budi Santoso', email = 'Budi_santoso_3@example.com'
WHERE id = 3;

UPDATE users
SET email = 'Arsyad@yahoo.com'
WHERE nama = 'Arsyard';
# Update Post 

UPDATE posts
SET judul = 'Belajar Arduino', isi = '1-3 Tahun Belajar Arduino'
WHERE id = 1;

UPDATE posts 
SET judul = 'Belajar mysql', isi = '1-2 Bulan belajar'
WHERE id = 2;

UPDATE posts 
SET judul = 'Belajar php', isi = '1 Tahun kurang'
WHERE id = 3;