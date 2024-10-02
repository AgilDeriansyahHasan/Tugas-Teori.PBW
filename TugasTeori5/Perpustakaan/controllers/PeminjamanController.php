<?php
include_once './config/Database.php';
include_once './models/Peminjaman.php';

class PeminjamanController {
    private $peminjaman;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->peminjaman = new Peminjaman($db);
    }

    public function create($id_buku, $id_user, $tanggal_pinjam, $tanggal_kembali) {
        $this->peminjaman->id_buku = $id_buku;
        $this->peminjaman->id_user = $id_user;
        $this->peminjaman->tanggal_pinjam = $tanggal_pinjam;
        $this->peminjaman->tanggal_kembali = $tanggal_kembali;
        return $this->peminjaman->create();
    }

    public function readAll() {
        return $this->peminjaman->readAll();
    }

    public function updateStatus($id, $status) {
        return $this->peminjaman->updateStatus($id, $status);
    }
}
