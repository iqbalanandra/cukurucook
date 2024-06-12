<?php
include '../controller/koneksi.php';

$id = $_GET['id'];

// Delete recipe
$sql = "DELETE FROM resep WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();
$conn->close();

header("Location: ../public/index.php");
?>
