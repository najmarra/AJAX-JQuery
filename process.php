<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $email === '' || $message === '') {
        echo "⚠️ Semua kolom wajib diisi.";
        exit;
    }

    echo "✅ Terima kasih, <b>$name</b>! Pesanmu berhasil dikirim.";
} else {
    echo "❌ Gagal mengirim pesan.";
}
?>
