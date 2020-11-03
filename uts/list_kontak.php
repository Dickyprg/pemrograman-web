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
      include_once "koneksi.php";
    ?>
    <div class="Contact-bg ">
  <div class="container ">
    <div class="row ">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="abouttitle ">
         <h2>List Contact</h2>
       </div>
       </div>
    </div>
  </div>
</div>
      <div class="row">
        <div class="col-md-12">
        <table id="listtable" class="table table-striped">
          <thead>
            <tr>
              <th>Email</th>
              <th>Instagram</th>
              <th>Nomer</th>
              <th>Tombol Aksi</th>
            </tr>
          </thead>
          <tbody>
    <?php
    //buat sql
    $strSQL = "SELECT * FROM kontak";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
            <tr>
              <td><?php echo $row["email"] ?></td>
              <td><?php echo $row["ig"] ?></td>
              <td><?php echo $row["wa"] ?></td>
              <td>
                <a href="edit_kontak.php?id=<?php echo $row["id"] ?>" class="btn btn-succes"><i class="fa fa-pen"></i></a>
                <a href="delete_kontak.php?id=<?php echo $row["id"]?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
    <?php 
      }
    }
    ?>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#listtable').DataTable();
    } );
    </script>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  