<?php
session_start();
include 'koneksi.php';

if(isset($_POST['favorite'])){
    $user_id = $_SESSION['user_id'];
    $produk_id =$_POST['produk_id'];

    $stmt = $pdo->prepare("INSERT INTO favorite (user_id, produk_id)VALUES (?, ?)");
    $stmt ->execute([$user_id, $produk_id]);

    echo"Produk berhasil ditambahkan ke favorite!";
}
?>