<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f6f9;">

<div class="container mt-4">

<a href="tampil.php" class="btn btn-secondary mb-3">
    ← Kembali
</a>

<div class="card shadow">
    <div class="card-body">

        <h3>📅 Tambah Jadwal Les</h3>

        <form method="post">

            <label>Mapel</label>
            <input type="text" name="mapel" class="form-control mb-2" required>

            <label>Hari</label>
            <input type="text" name="hari" class="form-control mb-2" required>

            <label>Jam</label>
            <input type="text" name="jam" class="form-control mb-3" placeholder="contoh: 16:00 - 17:30" required>

            <button type="submit" name="simpan" class="btn btn-success">
                Simpan Jadwal
            </button>

        </form>

        <?php
        if (isset($_POST['simpan'])) {

            mysqli_query($conn, "INSERT INTO jadwal VALUES(
                NULL,
                '$_POST[mapel]',
                '$_POST[hari]',
                '$_POST[jam]'
            )");

            echo "<script>
                alert('Jadwal berhasil ditambahkan!');
                location='tampil.php';
            </script>";
        }
        ?>

    </div>
</div>

</div>

</body>
</html>