<?php
session_start();
if (empty($_POST['username']) || empty($_POST['password'])) {
    $_SESSION['login_error'] = 'Username atau password belum diisi.';
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat anda berhasil login</h1>
</body>
</html>