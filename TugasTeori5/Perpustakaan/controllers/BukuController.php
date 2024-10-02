<?php
include_once './config/Database.php';
include_once './models/Buku.php';

class BukuController {
    private $buku;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->buku = new Buku($db);
    }

    public function create($judul, $pengarang, $tahun_terbit, $jumlah) {
        $this->buku->judul = $judul;
        $this->buku->pengarang = $pengarang;
        $this->buku->tahun_terbit = $tahun_terbit;
        $this->buku->jumlah = $jumlah;
        return $this->buku->create();
    }

    public function readAll() {
        return $this->buku->readAll();
    }

    public function delete($id) {
        $this->buku->id = $id;
        return $this->buku->delete();
    }

    public function update($id, $judul, $pengarang, $tahun_terbit, $isbn, $jumlah) {
        $this->buku->id = $id;
        $this->buku->judul = $judul;
        $this->buku->pengarang = $pengarang;
        $this->buku->tahun_terbit = $tahun_terbit;
        $this->buku->isbn = $isbn;
        $this->buku->jumlah = $jumlah;
        return $this->buku->update();
    }
}
