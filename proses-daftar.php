<?php
include("config.php");

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama)
            VALUE ('$nama', '$alamat', '$jk', '$agama')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-siswa.php?status=sukses');
    } else {
        header('Location: list-siswa.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
