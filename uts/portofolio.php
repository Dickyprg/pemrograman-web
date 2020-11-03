<!DOCTYPE html>
<html lang="en">

<head>

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
        <a class="js-scroll-trigger" href="bisnis.php">Bisnisku</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="kontak.php">Contact</a>
      </li>
    </ul>
  </nav>

  <!-- Portfolio -->
  <?php
    include "koneksi.php";
    $strSQL = "SELECT * FROM portofolio";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);


    ?>
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Portfolio</h3>
        <h2 class="mb-5">DATA PRIBADI</h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item">
            <div class="caption">
              <div class="caption-content">
              <?php if ($jmlRowData <= 0) {
                    echo 'Tidak Ada Data Dalam Database';
                }
                else {
                    while($row = mysqli_fetch_assoc($runStrSQL)) {
                ?>
                <p class="mb-0"><?php echo $row["data"] ?></p>
               
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Pendidikan</div>
                <p class="mb-0"><?php echo $row["pendidikan"] ?></p>
              </div>
            </div>
            <img class="img-fluid" src="img/pendidikan.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Kemampuan</div>
                <p class="mb-0"><?php echo $row["kemampuan"] ?></p>
              </div>
            </div>
            <img class="img-fluid" src="img/kemampuan.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
    <?php }
                }
                ?>
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
