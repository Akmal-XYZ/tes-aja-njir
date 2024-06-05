<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "username", "password", "forum_chat");

//ambil data inputan pesan
$message = $_POST['message'];
$user = "User";

//simpan pesan ke database
$query = "INSERT INTO messages (user, message) VALUES ('$user', '$message')";
mysqli_query($conn, $query);

//redirect kembali ke halaman utama setelah mengirim pesan
header("Location: index.php");
?>
