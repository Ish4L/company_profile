<?php
$conn = mysqli_connect("localhost", "root", "", "db_jajandjaland");

// Check koneksi apabila gagal muncul pesan di bawah ini
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . nysqli_connect_error();
}
?>