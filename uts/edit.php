<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mata Kuliah</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body>
    <?php
    include_once "koneksi.php"; 
    $status = 2;  
    if (isset($_POST['id'])) {
        
        $id = $_POST['id'];
        $tgl = $_POST['tgl'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi']; 

         //buat koneksi
         $strsql = "INSERT INTO about (id, tgl, judul, isi) 
         VALUES ('$id','$tgl','$judul','$isi')";
         
         $runSQL = mysqli_query($conn,$strsql);        
         if ($runSQL) {
             $status = 1; //sukses
         }  
         else {
             $status = 0; //tidak sukses;
         }       
    }        
    else if (isset($_GET['id'])) {
        $_id = $_GET['id'];
        $strSQL = "SELECT * FROM about WHERE id='".$_id."'";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0) {
            while ($row = mysqli_fetch_assoc($runStrSQL)) {
                $_tgl = $row["tgl"];
                $_judul = $row["judul"];
                $_isi = $row["isi"];
            }
        }
    }  
    else {
        $jngiseng = "disabled";
        $_tgl = "";
        $_judul = "";
        $_isi = "";
        $_id = "";
    }  
    ?>
    <div class="container">
        <h2>Pendaftaran Mata Kuliah versi 2 (dg Modal)</h2>   
    <!-- Ini Modal -->
        <div class="modal" id="pesan">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- ini header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Pendaftaran</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- body -->
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-6"><b>Kode Mata Kuliah</b></div>
                                <div class="col-6"><span id="id"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Mata Kuliah</b></div>
                                <div class="col-6"><span id="tgl"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>judul</b></div>
                                <div class="col-6"><span id="judul"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>isi</b></div>
                                <div class="col-6"><span id="isi"></span> isi</div>
                            </div>
                        </div>
                    </div>

                    <!-- footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Edit</button>
                        <button id="proses" type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- ini end modal -->
        <?php 
            if ($status == 1) {
        ?>    
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data berhasil diinput ke dalam database.
            </div>
        <?php 
            }
            else if ($status == 0){
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data tidak berhasil diinput ke dalam database.
            </div>
        <?php 
            }
        
        ?>
        <form id="myform" method="post" action="about.php">
            <div class="form-group">
                <label>id</label>
                <input id="id" class="form-control" type="text" name="id" value="<?php echo $_id ?>">
            </div>
            <div class="form-group">
                <label>tgl</label>
                <input id="tgl" class="form-control" type="text" name="tgl" value="<?php echo $_tgl ?>">
            </div>
            <div class="form-group">
                <label>judul</label>
                <input id="judul" class="form-control" type="text" name="tgl" value="<?php echo $_judul ?>">
            </div>
            <div class="form-group">
                <label>isi</label>
                <input id="isi" class="form-control" type="text" name="isi" value="<?php echo $_isi ?>">
            </div>           
                <input class="btn btn-primary" type="button" id="tombol" value="Simpan">   
        </form>
        
    </div>
    <?php 
    ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#proses').click(function(){
            $('#myform').submit();
        });
        $('#tombol').click(function(){
            //ambil data dari form
            const id = $('#id').val();
            const tgl = $('#tgl').val();
            const judul = $('#judul').val();
            const isi = $('#isi').val();

            $('#kdmk').text(id);
            $('#nmmk').text(tgl);
            $('#kat').text(judul);
            $('#isimk').text(isi);
         
            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    
    </script>
</body>
</html>