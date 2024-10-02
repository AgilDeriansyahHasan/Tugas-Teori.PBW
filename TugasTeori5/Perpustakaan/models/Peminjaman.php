<?php
class Peminjaman {
    private $conn;
    private $table_name = "peminjaman";

    public $id;
    public $id_buku;
    public $id_user;
    public $tanggal_pinjam;
    public $tanggal_kembali;
    public $status_peminjaman;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET id_user=:id_user, id_buku=:id_buku, tanggal_pinjam=:tanggal_pinjam, tanggal_kembali=:tanggal_kembali, status_peminjaman=:status_peminjaman";
        $stmt = $this->conn->prepare($query);
    
        // Mengikat parameter
        $stmt->bindParam(":id_user", $this->id_user);
        $stmt->bindParam(":id_buku", $this->id_buku);
        $stmt->bindParam(":tanggal_pinjam", $this->tanggal_pinjam);
        $stmt->bindParam(":tanggal_kembali", $this->tanggal_kembali);
        $stmt->bindParam(":status_peminjaman", $this->status_peminjaman);
    
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function updateStatus($id, $status) {
        $query = "UPDATE " . $this->table_name . " SET status_peminjaman=:status WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":status", $status);
        $stmt->bindParam(":id", $id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
