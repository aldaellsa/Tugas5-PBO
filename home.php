<?php 
    session_start(); 

    //jika belum login, alihkan ke login
    if (empty($_SESSION['user'])) {
        header('Location: index.php');
        exit();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <!-- Header-->
    <nav class="navbar-nav bg-primary">
        <div style="box-shadow: 0px 0px 5px #0056b3;">
            <div class="container">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">
                        <span style="color: #fff;"><b>MAHASISWA</b></span>
                    </a>
                    <a href="proses-logout.php" class="navbar-brand float-right text-light">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <!-- End Header-->
    <div class="container-fluid">
        <div class="row" >
            <!-- Input Data Mahasiswa -->
            <div class="col-lg-3">
                <div class="card">
                    <div class="container">
                        <form action="proses-input.php" method="post">
                            <div class="form-group">
                            <label>NIM</label>
                                <input type="text" class="form-control" name="nim" maxlength="15">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama_mhs">
                            </div>
                            <div class="form-group">
                            <label>Jenis Kelamin</label>
                                <select name="jk" class="form-control">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            <div class="form-group">
                                <label>Prodi</label>
                                <select name="prodi" class="form-control">
                                    <option>S1 Teknik Informatika</option>
                                    <option>S1 Sistem Informasi</option>
                                    <option>S1 Pendidikan Teknologi Informasi</option>
                                </select>
                            </div>
                            <div class="form-group">
								<label>Foto</label>
								<input required type="file" calss="form-control" name="img">
							</div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Input Data Mahasiswa -->
            <!-- List Data Mahasiswa -->
            <div class="col-lg-9">
                <div class="card">
                    <div class="container">
                        <table class="table tble-striped table-hover">
                            <tr>
                                <th width="1%">No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Prodi</th>
                                <th>Foto</th>
                                <th>Email</th>
                                <th>Pilihan</th>
                            </tr>
                            <?php 
                                include 'proses-list.php';
                                $no=1;
                                foreach ($data_mahasiswa as $mahasiswa) :
                            ?>
                            <tr>
                                <td><?= $no++;?>.</td>
                                <td><?= $mahasiswa['nim']?></td>
                                <td><?= $mahasiswa['nama_mhs']?></td>
                                <td><?= $mahasiswa['jk']?></td>
                                <td><?= $mahasiswa['alamat']?></td>
                                <td><?= $mahasiswa['prodi']?></td>
                                <td><img src="img/<?= $mahasiswa['foto']; ?>" style="width: 50px"></td>
                                <td><?= $mahasiswa['email']?></td>
                                <td>
                                    <a href="form-edit.php?id_mahasiswa=<?php echo $mahasiswa['id_mahasiswa']; ?>" class="btn btn-sm btn-success">Edit</a>
                                    <a href="proses-hapus.php?id_mahasiswa=<?php echo $mahasiswa['id_mahasiswa']; ?>"class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin akan menghapus data?');">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End List Data Mahasiswa -->
        </div>
    </div>
</body>
</html>