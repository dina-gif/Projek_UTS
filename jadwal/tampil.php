<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM jadwal");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">

<a href="../dashboard.php" class="btn btn-secondary mb-3">
    ← Kembali ke Dashboard
</a>

<h3>Jadwal Les</h3>

<a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Jadwal</a>

<table class="table table-bordered">
<tr>
    <th>Mapel</th>
    <th>Hari</th>
    <th>Jam</th>
    <th>Aksi</th>
</tr>

<?php while ($d = mysqli_fetch_array($data)) { ?>
<tr>
    <td><?= $d['mapel'] ?></td>
    <td><?= $d['hari'] ?></td>
    <td><?= $d['jam'] ?></td>
    <td>
        <a class="btn btn-danger btn-sm" href="hapus.php?id=<?= $d['id'] ?>">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>
</div>