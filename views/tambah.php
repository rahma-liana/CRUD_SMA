<?php
include_once "../controllers/SiswaController.php";
$controller = new SiswaController();

if(isset($_POST['simpan'])) {
    $controller->model->create(
        $_POST['nama'],
        $_POST['kelas'],
        $_POST['jurusan'],
        $_POST['id_siswa'],
        $_POST['jk']
    );
    header("Location: ../index.php");
}
?>

<h2>Tambah Data Siswa - SMAN 1 SIBOLGA</h2>

<form method="POST">
Nama: <input type="text" name="nama"><br><br>
Kelas: <input type="text" name="kelas"><br><br>
Jurusan: <input type="text" name="jurusan"><br><br>
ID Siswa: <input type="text" name="id_siswa"><br><br>
Jenis Kelamin:
<select name="jk">
    <option>Laki-laki</option>
    <option>Perempuan</option>
</select>
<br><br>

<button type="submit" name="simpan">Simpan</button>
</form>