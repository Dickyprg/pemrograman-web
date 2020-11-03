<?php
include("koneksi.php");

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];


    $strsql = "UPDATE portofolio SET data='$data', pendidikan='$pendidikan', kemampuan='$kemampuan' WHERE id='$id'";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_portofolio.php?status=sukses');
    } else {
        die("Location: list_portofolio.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}