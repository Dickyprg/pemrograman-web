<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Anggota</title>
    <style>
        .inputan {
            width: 100px;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <p>Registrasi</p>
    <form method="post" action="konfirmasi.php">
        <label>Username</label>
        <input class="inputan" type="text" name="username"><br>
        <label>Password</label>
        <input class="inputan" type="password" name="password"><br>
        <label>Nama Depan</label>
        <input class="inputan" type="text" name="namadepan"><br>
        <label>Nama Belakang</label>
        <input class="inputan" type="text" name="namabelakang"><br>
        <label>Email</label>
        <input class="inputan" type="text" name="email">
        <input type="submit" name="daftar" value="Daftar">
    </form>
</body>
</html>