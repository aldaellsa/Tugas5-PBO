<?php
include 'koneksi.php';
$id_mahasiswa = $_POST['id_mahasiswa'];
$nim       = $_POST['nim'];
$nama_mhs  = $_POST['nama_mhs'];
$jk     = $_POST['jk'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];
$foto = $_FILES['foto'];
$email = $_POST['email'];

$query = "UPDATE mahasiswa 
        SET nim = '$nim',
            nama_mhs = '$nama_mhs',
            jk = '$jk',
            alamat = '$alamat',
            prodi = '$prodi',
            foto = '$foto',
            email = '$email'
        WHERE id_mahasiswa = '$id_mahasiswa'";

$hasil = mysqli_query($db, $query);
if ($hasil == true) {
    header('Location: index.php');
} else {
    header('Location: form-edit.php');
}