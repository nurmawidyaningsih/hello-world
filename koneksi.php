<?php

$server = "localhost";
$user = "root";
$password ="";
$nama_database = "kasir_nurma";

$db = mysli_connect($server, $use, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>