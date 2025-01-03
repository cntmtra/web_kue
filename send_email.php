<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $whatsapp = htmlspecialchars($_POST['whatsapp']);
    $pesan = htmlspecialchars($_POST['pesan']);

    $to = "c.mutiarasinuraya@gmail.com"; 
    $subject = "Pesan dari Kontak CintaCake";
    
    $message = "Nama: $nama\n";
    $message .= "Email: $email\n";
    $message .= "WhatsApp: $whatsapp\n";
    $message .= "Pesan: $pesan\n";

    $headers = "From: $email";

    // Kirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Gagal mengirim pesan.";
    }
} else {
    echo "Metode tidak valid.";
}
?>