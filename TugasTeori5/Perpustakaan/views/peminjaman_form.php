<form action="index.php" method="POST">
    <h2>Peminjaman Buku</h2>
    <label for="id_buku">ID Buku:</label>
    <input type="text" id="id_buku" name="id_buku" required>
    
    <label for="id_user">ID Pengguna:</label>
    <input type="text" id="id_user" name="id_user" required>
    
    <label for="tanggal_pinjam">Tanggal Pinjam:</label>
    <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" required>
    
    <label for="tanggal_kembali">Tanggal Kembali:</label>
    <input type="date" id="tanggal_kembali" name="tanggal_kembali" required>
    
    <input type="submit" value="Pinjam Buku">
</form>
