<?php
include("koneksi.php");

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];


    $strsql = "UPDATE about SET tgl='$tgl', judul='$judul', isi='$isi' WHERE id='$id'";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_about.php?status=sukses');
    } else {
        die("Location: list_about.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}