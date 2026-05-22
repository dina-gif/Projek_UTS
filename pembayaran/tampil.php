<?php
include 'koneksi.php';

$data = mysqli_query($conn, "
SELECT pembayaran.*, siswa.nama 
FROM pembayaran 
JOIN siswa ON pembayaran.siswa_id = siswa.id
");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">

<a href="../dashboard.php" class="btn btn-secondary mb-3">
    ← Kembali ke Dashboard
</a>

<h3>Pembayaran</h3>

<a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Pembayaran</a>

<table class="table table-bordered">
<tr>
    <th>Nama Siswa</th>
    <th>Tanggal</th>
    <th>Jumlah</th>
    <th>Status</th>
</tr>

<?php while ($d = mysqli_fetch_array($data)) { ?>
<tr>
    <td><?= $d['nama'] ?></td>
    <td><?= $d['tanggal'] ?></td>
    <td><?= $d['jumlah'] ?></td>
    <td><?= $d['status'] ?></td>
</tr>
<?php } ?>

</table>

</div>