<?php
include_once './config/Database.php';
include_once './models/User.php';

class UserController {
    private $user;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->user = new User($db);
    }

    public function create($nama, $email) { // Hapus password dari parameter
        $this->user->nama = $nama;
        $this->user->email = $email;
        return $this->user->create();
    }

    public function readAll() {
        return $this->user->readAll();
    }

    public function delete($id) {
        $this->user->id = $id;
        return $this->user->delete();
    }
}
