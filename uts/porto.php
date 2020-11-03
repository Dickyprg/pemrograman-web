<?php 
include_once "koneksi.php";
    ?>
    <div class="Contact-bg ">
  <div class="container ">
    <div class="row ">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="abouttitle ">
         <h2>List About</h2>
       </div>
       </div>
    </div>
  </div>
</div>
<div class="container ">
      <div class="row mb-3 mt-3">
        <div class="col-md-12">
        <a href="input_inf.php" class="btn btn-success">Input About</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <table id="listtable" class="table table-hover">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Judul</th>
              <th>Isi</th>
              <th>Tombol Aksi</th>
            </tr>
          </thead>
          <tbody>
    <?php
    //buat sql
    $strSQL = "SELECT * FROM about";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
            <tr>
              <td><b><?php echo $row["tgl"] ?></b></td>
              <td><?php echo $row["judul"] ?></td>
              <td><?php echo $row["isi"] ?></td>
              <td>
                <a href="edit_about.php?id=<?php echo $row["id"] ?>" class="btn btn-info"><i class="fa fa-pen"></i></a>
                <a href="delete_about.php?id=<?php echo $row["id"]?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>

              </td>
            </tr>
    <?php 
      }
    }
    ?>
<!-- modal konfirmasi-->
        <div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Konfirmasi</h4>
                </div>
                <div class="modal-body btn-info">
                    Apakah Anda yakin ingin menghapus data ini ?
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-danger" id="hapus-true-data">Hapus</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
                 
                </div>
            </div>
        </div>