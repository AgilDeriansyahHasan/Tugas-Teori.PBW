<h2>Daftar Buku</h2>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Jumlah</th>
    </tr>
    <?php while ($row = $BukuController->readAll()->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['judul']); ?></td>
            <td><?php echo htmlspecialchars($row['pengarang']); ?></td>
            <td><?php echo htmlspecialchars($row['tahun_terbit']); ?></td>
            <td><?php echo htmlspecialchars($row['jumlah']); ?></td>
        </tr>
    <?php } ?>
</table>
