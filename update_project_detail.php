<?php
require_once 'db_connect.php'; // Menggunakan file koneksi database yang telah dibuat sebelumnya

// Mengambil data yang dikirim dari JavaScript
$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id']; // ID dari bagian proyek yang diubah
$newText = $data['newText']; // Teks baru yang disimpan

// Query untuk melakukan update di database
$sql = "UPDATE projects SET description = ? WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('si', $newText, $id);

// Melakukan eksekusi query
if ($stmt->execute()) {
    // Mengirimkan respon JSON ke JavaScript jika berhasil
    echo json_encode(array('success' => true));
} else {
    // Mengirimkan respon JSON ke JavaScript jika gagal
    echo json_encode(array('success' => false));
}

$stmt->close();
$mysqli->close();
?>
