<?php

require 'koneksi.php';

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $sql = 'DELETE FROM kader WHERE Id=?';
    $row = $koneksi->execute_query($sql,[$id]);

    if ($row) {
        header("location: dashboard-admin.html");
    }
}

?>