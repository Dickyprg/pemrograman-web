<?php

if (isset($_POST['tombolsubmit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "anto" && $password == "123"){
        echo "Sukses";
    }
    else {
        echo"Username / Password salah";
    }
}
else{
 echo"mohon maaf login tidak bisa diakses langsung";
}
?>