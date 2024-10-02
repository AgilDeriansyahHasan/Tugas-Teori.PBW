<?php
class Buku {
    private $conn;
    private $table_name = "buku";

    public $id;
    public $judul;
    public $pengarang;
    public $tahun_terbit;
    public $isbn;
    public $jumlah;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET judul=:judul, pengarang=:pengarang, tahun_terbit=:tahun_terbit, isbn=:isbn, jumlah=:jumlah";
        $stmt = $this->conn->prepare($query);

        $this->judul = htmlspecialchars(strip_tags($this->judul));
        $this->pengarang = htmlspecialchars(strip_tags($this->pengarang));
        $this->tahun_terbit = htmlspecialchars(strip_tags($this->tahun_terbit));
        $this->isbn = htmlspecialchars(strip_tags($this->isbn));
        $this->jumlah = htmlspecialchars(strip_tags($this->jumlah));

        $stmt->bindParam(":judul", $this->judul);
        $stmt->bindParam(":pengarang", $this->pengarang);
        $stmt->bindParam(":tahun_terbit", $this->tahun_terbit);
        $stmt->bindParam(":isbn", $this->isbn);
        $stmt->bindParam(":jumlah", $this->jumlah);

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

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET judul=:judul, pengarang=:pengarang, tahun_terbit=:tahun_terbit, isbn=:isbn, jumlah=:jumlah WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $this->judul = htmlspecialchars(strip_tags($this->judul));
        $this->pengarang = htmlspecialchars(strip_tags($this->pengarang));
        $this->tahun_terbit = htmlspecialchars(strip_tags($this->tahun_terbit));
        $this->isbn = htmlspecialchars(strip_tags($this->isbn));
        $this->jumlah = htmlspecialchars(strip_tags($this->jumlah));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(":judul", $this->judul);
        $stmt->bindParam(":pengarang", $this->pengarang);
        $stmt->bindParam(":tahun_terbit", $this->tahun_terbit);
        $stmt->bindParam(":isbn", $this->isbn);
        $stmt->bindParam(":jumlah", $this->jumlah);
        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
