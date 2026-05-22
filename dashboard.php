<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Bimbel NURSYAELAH</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f6f9;">

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-primary px-4">
    <a class="navbar-brand" href="#">
        📚 BIMBEL NURSYAELAH
    </a>

    <a href="logout.php" class="btn btn-light btn-sm">
        Logout
    </a>
</nav>

<!-- CONTENT -->
<div class="container mt-4">

    <h3 class="mb-3">Dashboard Admin</h3>

    <div class="row">

        <!-- SISWA -->
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-success shadow">
                <div class="card-body">
                    <h4>👨‍🎓 Siswa</h4>
                    <p>Kelola data siswa</p>
                    <a href="siswa/tampil.php" class="btn btn-light btn-sm">
                        Masuk
                    </a>
                </div>
            </div>
        </div>

        <!-- JADWAL -->
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-warning shadow">
                <div class="card-body">
                    <h4>📅 Jadwal</h4>
                    <p>Kelola jadwal les</p>
                    <a href="jadwal/tampil.php" class="btn btn-light btn-sm">
                        Masuk
                    </a>
                </div>
            </div>
        </div>

        <!-- PEMBAYARAN -->
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-danger shadow">
                <div class="card-body">
                    <h4>💰 Pembayaran</h4>
                    <p>Kelola pembayaran siswa</p>
                    <a href="pembayaran/tampil.php" class="btn btn-light btn-sm">
                        Masuk
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>