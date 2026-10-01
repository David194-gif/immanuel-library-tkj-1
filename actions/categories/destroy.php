<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Kategori - Simulasi</title>
    <link rel="stylesheet" href="../../styles/books/index.css">
</head>
<body style="font-family: sans-serif; padding: 40px; text-align: center;">
    <div style="max-width: 450px; margin: auto; padding: 24px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
        <h2 style="color: #2e7d32; margin-top: 0;">Berhasil Dihapus! (Simulasi)</h2>
        <p>Data kategori dengan ID <strong><?= htmlspecialchars($id) ?></strong> berhasil dihapus dari sistem.</p>
        <br>
        <a href="../../pages/categories/index.php" class="btn btn-primary" style="display: inline-block; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 4px;">Kembali ke Daftar Kategori</a>
    </div>
</body>
</html>