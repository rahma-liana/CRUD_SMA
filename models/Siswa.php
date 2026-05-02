<?php
class Siswa {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM siswa");
    }

    public function getById($id) {
        return $this->conn->query("SELECT * FROM siswa WHERE id=$id");
    }

    public function create($nama, $kelas, $jurusan, $id_siswa, $jk) {
        return $this->conn->query("INSERT INTO siswa(nama,kelas,jurusan,id_siswa,jenis_kelamin) 
        VALUES('$nama','$kelas','$jurusan','$id_siswa','$jk')");
    }

    public function update($id, $nama, $kelas, $jurusan, $id_siswa, $jk) {
        return $this->conn->query("UPDATE siswa SET 
        nama='$nama',
        kelas='$kelas',
        jurusan='$jurusan',
        id_siswa='$id_siswa',
        jenis_kelamin='$jk'
        WHERE id=$id");
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM siswa WHERE id=$id");
    }
}
?>