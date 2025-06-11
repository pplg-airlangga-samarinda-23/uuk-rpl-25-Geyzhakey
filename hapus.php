<?php

require 'koneksi.php';

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

   $sql = "SELECT * FROM kader";
    $row = $db->prepare("SELECT * FROM `kader`");
    $row->execute();

    if ($row) {
        header("location: dashboard-admin.php");
    }
}

?>