<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "username", "password", "forum_chat");

//ambil pesan dari database
$query = "SELECT * FROM messages";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    echo $row['user']. ': ' . $row['message'] . '<br>';
}
?>
