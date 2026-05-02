<?php
include_once dirname(__DIR__) . "/config/Database.php";
include_once dirname(__DIR__) . "/models/Siswa.php";

class SiswaController {
    public $model;

    public function __construct() {
        $database = new Database();
        $db = $database->connect();
        $this->model = new Siswa($db);
    }
}
?>