<?php

include("koneksi.php");

if (isset($_GET['id'])) {


    $id = $_GET['id'];

    $strsql = "DELETE FROM about WHERE id =$id";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: admin.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>