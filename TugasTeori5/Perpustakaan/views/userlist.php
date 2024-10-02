</style>
<h2>Daftar Pengguna</h2>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Nama</th>
        <th>Email</th>
    </tr>
    <?php while ($row = $UserController->readAll()->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['nama']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
        </tr>
    <?php } ?>
</table>
