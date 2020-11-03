<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BISNIS</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">



  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="index.php">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="about.php">About</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="portofolio.php">Portfolio</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="kontak.php">Contact</a>
      </li>
    </ul>
  </nav>
  <?php
    include "koneksi.php";
    $strSQL = "SELECT * FROM bisnis";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);


    ?>
  <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
      <h1 class="text-secondary mb-0">Bisnisku</h1>
      <?php if ($jmlRowData <= 0) {
                    echo 'Tidak Ada Data Dalam Database';
                }
                else {
                    while($row = mysqli_fetch_assoc($runStrSQL)) {
                ?>
                  
        </div>
      <div class="row">
        <div class="col-md-12 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <a href = "https://www.instagram.com/kedai.tgh/?hl=id" ><i class="icon-social-instagram"></i></a>
          </span>
          <h4>
           <strong><?php echo $row["nama"]?></strong></a>
          </h4>
          <p class="text-faded mb-0"> <?php echo $row["isi"]?></p>
          <p class="text-faded mb-0"> <?php echo $row["alamat"]?></p>
        </div>
        
      <?php }
                }
                ?>
      </div>
    </div>
  </section>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
