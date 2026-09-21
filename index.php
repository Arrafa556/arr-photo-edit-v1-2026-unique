<?php
// === Koneksi database (langsung di sini, tanpa file terpisah) ===
$host = "localhost";
$db   = "latihan_php";
$user = "root";
$pass = "";
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

// === Ambil data JOIN ===
$stmt = $pdo->query("
    SELECT users.nama, posts.judul, posts.created_at
    FROM posts
    INNER JOIN users ON posts.user_id = users.id
    ORDER BY posts.created_at DESC
");

$semuaPost = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Daftar Postingan</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }
            .post {
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 10px;
                border-radius: 5px;
            }
            .post h3 {
                margin: 0;
                font-size: 1.2em;
            }
            .post .meta {
                font-size: 0.9em;
                color: #555;
            }
        </style>
    </head>
    <body>
        <h1>Daftar Postingan</h1>
        <?php if (count($semuaPost) === 0): ?>
            <p>Belum ada postingan.</p>
        <?php else: ?>
            <?php foreach ($semuaPost as $post): ?>
                <div class="post">
                    <h3><?= htmlspecialchars($post['judul']) ?></h3>
                    <div class="meta">
                        oleh <?= htmlspecialchars($post['nama']) ?> — <?= $post['created_at'] ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>