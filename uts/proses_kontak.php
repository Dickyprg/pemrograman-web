<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Stylish Portfolio - Start Bootstrap Template</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">
  <?php
include("koneksi.php");

if (isset($_POST['id'])) {

    $id = $_POST['email'];
    $tgl = $_POST['ig'];
    $judul = $_POST['wa'];


    $strsql = "UPDATE kontak SET email='$email', ig='$ig', wa='$wa WHERE id=$id";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_kontak.php?status=sukses');
    } else {
        die("Location: list_kontak.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}