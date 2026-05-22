<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($conn,
"SELECT * FROM users
WHERE username='$username'
AND password='$password'");

$data = mysqli_fetch_assoc($query);

if ($data) {

    $_SESSION['login'] = true;
    $_SESSION['username'] = $data['username'];

    header("location:dashboard.php");

} else {

    echo "
    <script>
    alert('Login gagal');
    location='login.php';
    </script>
    ";
}
?>