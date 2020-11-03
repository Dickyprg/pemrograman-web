
    <?php
    include_once 'koneksi.php';
    ?>
    <div class="Contact-bg ">
  <div class="container ">
    <div class="row ">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="abouttitle ">
         <h2>Edit About</h2>
       </div>
       </div>
    </div>
  </div>
</div>
    <?php
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM about WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <div class="container">
        <form id="myform" method="post" action="proses_about.php">
                <div class="form-group">         
                    <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
                </div>
                <div class="form-group"> 
                    <label>Tanggal</label>   
                     <input type="text" class="form-control" name="tgl" value="<?php echo $d['tgl']; ?>">
                 </div>
                 <div class="form-group"> 
                    <label>Judul</label>   
                     <input type="text" class="form-control" name="judul" value="<?php echo $d['judul']; ?>">
                 </div>
                 <div class="form-group">
                    <label>Isi About</label>   
                     <textarea class="ckeditor" name="isi" value="<?php echo $d['isi']; ?>"></textarea>
                 </div>
                    <input type="submit" class="btn btn-success">
                       
        </form>
    </div>
        <?php 
    }
    ?>
 <?php include "footer.php"?>