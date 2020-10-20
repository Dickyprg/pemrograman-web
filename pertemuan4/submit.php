<?php

if (isset($_POST['daftar'])){
    $namadepan = $_POST['namadepan'];
    $namabelakang = $_POST['namabelakang'];
    $email = $_POST['email'];
    
    
    echo $namadepan." ".$namabelakang;
    echo"<br>";
    echo $email;
}
?>