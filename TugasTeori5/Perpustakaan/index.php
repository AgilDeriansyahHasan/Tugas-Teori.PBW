<?php
include_once './controllers/BukuController.php';
include_once './controllers/UserController.php';
include_once './controllers/PeminjamanController.php';

$BukuController = new BukuController();
$UserController = new UserController();
$PeminjamanController = new PeminjamanController();

// Pengelolaan Buku
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['judul'])) {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $jumlah = $_POST['jumlah'];
    $BukuController->create($judul, $pengarang, $tahun_terbit, $jumlah);
}

// Pengelolaan Pengguna
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $UserController->create($nama, $email);
}

// Peminjaman Buku
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id_buku'])) {
    $id_buku = $_POST['id_buku'];
    $id_user = $_POST['id_user'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $PeminjamanController->create($id_buku, $id_user, $tanggal_pinjam, $tanggal_kembali);
}

// Include view
include 'views/buku_form.php';
include 'views/bukulist.php';
include 'views/user_form.php';
include 'views/userlist.php';
include 'views/peminjaman_form.php';
include 'views/peminjamanlist.php';
?>
<link rel="stylesheet" type="text/css" href="./style/style.css">;
