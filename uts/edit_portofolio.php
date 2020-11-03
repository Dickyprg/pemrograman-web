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
    ?>
    <div class="Contact-bg ">
  <div class="container ">
    <div class="row ">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="abouttitle ">
         <h2>Edit Portofolio</h2>
       </div>
       </div>
    </div>
  </div>
</div>
    <?php
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM portofolio WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <div class="container">
        <form id="myform" method="post" action="proses_portofolio.php">
                <div class="form-group">         
                    <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
                </div>
                <div class="form-group"> 
                    <label>Data</label>   
                     <input type="text" class="form-control" name="data" value="<?php echo $d['data']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Pendidikan</label>   
                     <input type="text" class="form-control" name="pendidikan" value="<?php echo $d['pendidikan']; ?>">
                 </div>
                 <div class="form-group">
                    <label>Isi Portofolio</label>   
                     <textarea class="ckeditor" name="kemampuan" value="<?php echo $d['kemampuan']; ?>"></textarea>
                 </div>
                    <input type="submit" class="btn btn-success">
                       
        </form>
    </div>
        <?php 
    }
    ?>
 <?php include "footer.php"?>