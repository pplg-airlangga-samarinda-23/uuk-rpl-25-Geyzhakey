<?php
require 'koneksi.php';

$sql = "SELECT * FROM kader";
$row = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead style="background-color: gray;">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Umur</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 0; foreach ($row as $rows) : ?>
          <tr>
            <td><?php ++$no?></td>
            <td><?= $rows["Nama"] ?></td>
            <td><?= $rows["Gender"] ?></td>
            <td><?= $rows["Umur"] ?></td>
            <td><?= $rows["Tinggi_badan"] ?></td>
            <td><?= $rows["Berat_badan"] ?></td>
            <td>
                <a href="#">edit</a>/
                <a href="hapus.php?id=<?= $rows['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>