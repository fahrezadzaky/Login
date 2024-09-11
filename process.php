<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == '123') {
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
} else {
    echo "<script>alert('Username atau Password salah!'); window.location.href='login.php';</script>";
}
?>
