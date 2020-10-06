<?php

if (isset($_POST['daftar'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $namadepan = $_POST['namadepan'];
    $namabelakang = $_POST['namabelakang'];
    $email = $_POST['email'];
    
    
    echo $username;
    echo"<br>";
    echo $email;
    echo"<br>";
    echo $namadepan." ".$namabelakang;
}
?>