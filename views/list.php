<?php
include_once "controllers/SiswaController.php";
$controller = new SiswaController();
$data = $controller->model->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #333;
            text-align: center;
        }
        h1 {
            color: white;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 10px 15px;
        }
        th {
            background: #4facfe;
            color: white;
        }
        tr:hover {
            background: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: blue;
        }
        .btn {
            padding: 8px 12px;
            background: #00c6ff;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<h1>DATA SISWA</h1>
<h2>SMAN 1 SIBOLGA</h2>

<a class="btn" href="views/tambah.php">+ Tambah Data</a>
<br><br>

<table border="1">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Jurusan</th>
    <th>ID Siswa</th>
    <th>Jenis Kelamin</th>
    <th>Aksi</th>
</tr>

<?php $no=1; while($row = $data->fetch_assoc()) { ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['kelas']; ?></td>
    <td><?= $row['jurusan']; ?></td>
    <td><?= $row['id_siswa']; ?></td>
    <td><?= $row['jenis_kelamin']; ?></td>
    <td>
        <a href="views/edit.php?id=<?= $row['id']; ?>">Edit</a> |
        <a href="index.php?hapus=<?= $row['id']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>