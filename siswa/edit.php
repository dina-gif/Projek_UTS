<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM siswa WHERE id='$id'");

$d = mysqli_fetch_array($data);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">

<a href="tampil.php" class="btn btn-secondary mb-3">
    ← Kembali
</a>

<h3>Edit Siswa</h3>

<form method="post">

<input type="text"
name="nama"
class="form-control mb-2"
value="<?= $d['nama']; ?>">

<input type="text"
name="kelas"
class="form-control mb-2"
value="<?= $d['kelas']; ?>">

<input type="text"
name="sekolah"
class="form-control mb-2"
value="<?= $d['sekolah']; ?>">

<input type="text"
name="no_hp"
class="form-control mb-2"
value="<?= $d['no_hp']; ?>">

<button type="submit"
name="update"
class="btn btn-primary">
    Update
</button>

</form>

<?php
if(isset($_POST['update'])) {

    mysqli_query($conn,
    "UPDATE siswa SET

    nama='$_POST[nama]',
    kelas='$_POST[kelas]',
    sekolah='$_POST[sekolah]',
    no_hp='$_POST[no_hp]'
    WHERE id='$id'
");

    echo "
    <script>
    alert('Data berhasil diupdate');
    location='tampil.php';
    </script>
    ";

}