<?php
include("koneksi.php");

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $isi = $_POST['judul'];
    $alamat = $_POST['isi'];


    $strsql = "UPDATE bisnis SET data='$data', nama='$nama', isi='$isi', alamat='$alamat' WHERE id='$id'";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_bisnis.php?status=sukses');
    } else {
        die("Location: list_bisnis.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}