    <?php
    include_once 'koneksi.php';
    ?>
    <div class="Contact-bg ">
  <div class="container ">
    <div class="row ">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="abouttitle ">
         <h2>Edit Bisnis</h2>
       </div>
       </div>
    </div>
  </div>
</div>
    <?php
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM bisnis WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <div class="container">
        <form id="myform" method="post" action="proses_bisnis.php">
                <div class="form-group">         
                    <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
                </div>
                <div class="form-group"> 
                    <label>Nama</label>   
                     <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Isi</label>   
                     <input type="text" class="form-control" name="isi" value="<?php echo $d['isi']; ?>">
                 </div>
                 <div class="form-group">
                    <label>Alamat</label>   
                     <textarea class="ckeditor" name="alamat" value="<?php echo $d['alamat']; ?>"></textarea>
                 </div>
                    <input type="submit" class="btn btn-success">
                       
        </form>
    </div>
        <?php 
    }
    ?>
 <?php include "footer.php"?>