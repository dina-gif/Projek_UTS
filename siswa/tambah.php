<?php
    include 'koneksi.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-4">
    <a href="tampil.php" class="btn btn-secondary mb-3">
        ← Kembali
    </a>

<h3>Tambah Siswa</h3>

<form method="post">

    <input type="text" name="nama"
    class="form-control mb-2"
    placeholder="Nama" required>

    <input type="text" name="kelas"
    class="form-control mb-2"
    placeholder="Kelas" required>

    <input type="text" name="sekolah"
    class="form-control mb-2"
    placeholder="Sekolah" required>

    <input type="text" name="no_hp"
    class="form-control mb-2"
    placeholder="No HP" required>

    <button type="submit"
        name="simpan"
        class="btn btn-success">
        Simpan
    </button>

</form>

<?php
if(isset($_POST['simpan'])) {

    mysqli_query($conn,
    "INSERT INTO siswa VALUES(
    NULL,
    '$_POST[nama]',
    '$_POST[kelas]',
    '$_POST[sekolah]',
    '$_POST[no_hp]')");

    echo "
    <script>
    alert('Data berhasil ditambah');
    location='tampil.php';
    </script>
    ";

}
?>