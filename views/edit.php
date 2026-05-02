<?php
include_once "../controllers/SiswaController.php";
$controller = new SiswaController();

// ambil id dari URL
$id = $_GET['id'];
$data = $controller->model->getById($id);
$row = $data->fetch_assoc();

// proses update
if(isset($_POST['update'])) {
    $controller->model->update(
        $id,
        $_POST['nama'],
        $_POST['kelas'],
        $_POST['jurusan'],
        $_POST['id_siswa'],
        $_POST['jk']
    );

    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #36d1dc, #5b86e5);
            color: white;
            text-align: center;
        }
        form {
            background: white;
            color: black;
            padding: 20px;
            margin: auto;
            width: 300px;
            border-radius: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            margin-top: 10px;
            padding: 10px;
            background: #36d1dc;
            border: none;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<h2>Edit Data Siswa</h2>
<h3>SMAN 1 SIBOLGA</h3>

<form method="POST">

Nama:
<input type="text" name="nama" value="<?= $row['nama']; ?>">

<br><br>

Kelas:
<select name="kelas">
    <option <?= $row['kelas']=="X"?"selected":""; ?>>X</option>
    <option <?= $row['kelas']=="XI"?"selected":""; ?>>XI</option>
    <option <?= $row['kelas']=="XII"?"selected":""; ?>>XII</option>
</select>

<br><br>

Jurusan:
<select name="jurusan">
    <option <?= $row['jurusan']=="IPA"?"selected":""; ?>>IPA</option>
    <option <?= $row['jurusan']=="IPS"?"selected":""; ?>>IPS</option>
</select>

<br><br>

ID Siswa:
<input type="text" name="id_siswa" value="<?= $row['id_siswa']; ?>">

<br><br>

Jenis Kelamin:
<select name="jk">
    <option <?= $row['jenis_kelamin']=="Laki-laki"?"selected":""; ?>>Laki-laki</option>
    <option <?= $row['jenis_kelamin']=="Perempuan"?"selected":""; ?>>Perempuan</option>
</select>

<br><br>

<button type="submit" name="update">Update</button>

</form>

</body>
</html>