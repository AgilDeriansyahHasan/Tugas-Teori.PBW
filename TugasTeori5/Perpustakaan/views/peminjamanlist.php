<h2>Daftar Peminjaman Buku</h2>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID Buku</th>
        <th>ID Pengguna</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Status</th>
    </tr>
    <?php while ($row = $PeminjamanController->readAll()->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['id_buku']); ?></td>
            <td><?php echo htmlspecialchars($row['id_user']); ?></td>
            <td><?php echo htmlspecialchars($row['tanggal_pinjam']); ?></td>
            <td><?php echo htmlspecialchars($row['tanggal_kembali']); ?></td>
            <td><?php echo htmlspecialchars($row['status_peminjaman']); ?></td>
        </tr>
    <?php } ?>
</table>
