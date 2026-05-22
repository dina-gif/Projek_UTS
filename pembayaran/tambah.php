<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f6f9;">

<div class="container mt-4">

<a href="tampil.php" class="btn btn-secondary mb-3">
    ← Kembali
</a>

<div class="card shadow">
    <div class="card-body">

        <h3>💰 Tambah Pembayaran</h3>

        <form method="post">

            <label>Pilih Siswa</label>
            <select name="siswa_id" class="form-control mb-2" required>

                <option value="">-- Pilih Siswa --</option>

                <?php
                $siswa = mysqli_query($conn, "SELECT * FROM siswa");
                while ($s = mysqli_fetch_array($siswa)) {
                    echo "<option value='$s[id]'>$s[nama]</option>";
                }
                ?>

            </select>

            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control mb-2" required>

            <label>Jumlah Bayar</label>
            <input type="number" name="jumlah" class="form-control mb-2" required>

            <label>Status</label>
            <select name="status" class="form-control mb-3" required>
                <option value="Lunas">Lunas</option>
                <option value="Belum Lunas">Belum Lunas</option>
            </select>

            <button type="submit" name="simpan" class="btn btn-success">
                Simpan Pembayaran
            </button>

        </form>

        <?php
        if (isset($_POST['simpan'])) {

            mysqli_query($conn, "INSERT INTO pembayaran VALUES(
                NULL,
                '$_POST[siswa_id]',
                '$_POST[tanggal]',
                '$_POST[jumlah]',
                '$_POST[status]'
            )");

            echo "<script>
                alert('Pembayaran berhasil ditambahkan!');
                location='tampil.php';
            </script>";
        }
        ?>

    </div>
</div>

</div>

</body>
</html>