<?php
include '../controller/koneksi.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$bahan = $_POST['bahan'];
$langkah = $_POST['langkah'];
$kesulitan = $_POST['kesulitan'];
$image_url = $_POST['image_url'];

if ($id) {
    // Update recipe
    $sql = "UPDATE resep SET name=?, description=?, bahan=?, langkah=?, kesulitan=?, image_url=? WHERE id=?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("ssssssi", $name, $description, $bahan, $langkah, $kesulitan, $image_url, $id);
} else {
    // Insert new recipe
    $sql = "INSERT INTO resep (name, description, bahan, langkah, kesulitan, image_url) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("ssssss", $name, $description, $bahan, $langkah, $kesulitan, $image_url);
}

$stmt->execute();
$stmt->close();
$koneksi->close();

header("Location: ../public/index.php");
?>
