<?php
include_once "controllers/SiswaController.php";

$controller = new SiswaController();

// proses hapus data
if(isset($_GET['hapus'])) {
    $controller->model->delete($_GET['hapus']);
    header("Location: index.php");
}

// tampilkan list
include_once "views/list.php";
?>