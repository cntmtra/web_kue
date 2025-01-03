<?php
session_start();
include 'koneksi.php';

if(isset($_POST['keranjang'])){
    $user_id = $_SESSION['user_id'];
    $produk_id = $_POST['produk_id'];
    $quantity = $_POST['quantity'];

    $stmt = $pdo->prepare("INSERT INTO cart(user_id, produk_id, quantity) VALUES (?, ?, ?)");
    $stmt->execute([$user_id, $produk_id, $quantity]);

    echo"Produk berhasil ditambahkan ke keranjang!";
}
?>