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
    include_once 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM kontak WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <div class="container">
        <form id="myform" method="post" action="proses_profil.php">
                <div class="form-group">         
                    <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
                </div>
                <div class="form-group"> 
                    <label>Nama</label>   
                     <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Umur</label>   
                     <input type="number" class="form-control" name="umur" value="<?php echo $d['umur']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Email</label>   
                     <input type="text" class="form-control" name="email" value="<?php echo $d['email']; ?>">
                 </div>
                 
                 <div class="form-group"> 
                    <label>Nomor Telepon</label>   
                     <input type="text" class="form-control" name="no_telp" value="<?php echo $d['wa']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Instagram</label>   
                     <input type="text" class="form-control" name="instagram" value="<?php echo $d['ig']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Deskripsi</label>   
                     <textarea class="ckeditor" name="deskripsi" value="<?php echo $d['deskripsi']; ?>"></textarea>
                 </div>
                    <input type="submit" class="btn btn-primary">    
        </form>
    </div>
        <?php 
    }
    ?>
 
</body>
</html>