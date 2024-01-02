<?php
// require __DIR__ . '/url.php';
$databaseHost = 'localhost';
$databaseName = 'poli_bk';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, 
    $databaseUsername, $databasePassword, $databaseName);

// Periksa koneksi
if (!$mysqli) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

try {
    $pdo = new PDO("mysql:databaseHost=.$databaseHost;databaseName=$databaseName", $databaseUsername, $databasePassword);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// $conn = $mysqli_connect($databaseHost, $databaseName, $databaseUsername );
// $conn = mysqli_connect(
//     $databaseHost,
//     $databaseUsername,
//     $databasePassword,
//     $databaseName
// );

// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }

// function query($query){
//     global $conn;
//     $result = mysqli_query($conn, $query);
//     $rows = [];
//     while ($row = mysqli_fetch_assoc($result)) {
//         $rows[] = $row;
//     }
//     return $rows;
// }

