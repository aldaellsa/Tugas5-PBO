<?php
include 'koneksi.php';

$nim       = $_POST['nim'];
$nama_mhs  = $_POST['nama_mhs'];
$jk     = $_POST['jk'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];
$foto = $_FILES['foto'];
$email    = $_POST['email'];

$query = "INSERT INTO mahasiswa (nim, nama_mhs, jk, alamat, prodi, foto, email) VALUES ('$nim','$nama_mhs','$jk','$alamat','$prodi','$foto', '$email')";
$hasil = mysqli_query($db, $query);
if ($hasil == true){
  header('Location: index.php');
} else {
  header('Location: index.php');
}
