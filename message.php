<?php
include 'db.php';

$result = $conn->query("SELECT * FROM messages");
?>

<h2>Daftar Pesan</h2>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Subjek</th>
        <th>Pesan</th>
        <th>Aksi</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['phone'] ?></td>
        <td><?= $row['subject'] ?></td>
        <td><?= $row['message'] ?></td>
        <td>
            <a href="delete.php?id=<?= $row['id'] ?>">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
