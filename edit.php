<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container col-md-6 mt-4">
		<h1>Table Data</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Data
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; //mengambil id barang yang ingin diubah

				//menampilkan barang berdasarkan id
				$data = mysqli_query($koneksi, "select * from kuliah where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div class="form-group mb-2">
						<label>Kode MataKuliah</label>
						<!--  menampilkan nama barang -->
						<input type="text" name="Kode_Mk" required="" class="form-control" value="<?= $row['Kode_Mk']; ?>">

						<!-- ini digunakan untuk menampung id yang ingin diubah -->
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group mb-2">
						<label>Nama MataKuliah</label>
						<input type="text" name="Nama_Mk" class="form-control" value="<?= $row['Nama_Mk']; ?>">
					</div>
					<div class="form-group mb-2">
						<label>SKS</label>
						<input type="text" name="Sks" class="form-control" value="<?= $row['Sks']; ?>">
					</div>
					<div class="form-group mb-3">
						<label>Semester</label>
						<input type="text" name="Semester" class="form-control" value="<?= $row['Semester']; ?>">
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$kode_mk = $_POST['Kode_Mk'];
					$nama_mk = $_POST['Nama_Mk'];
					$sks = $_POST['Sks'];
					$semester = $_POST['Semester'];

					//query mengubah barang
					mysqli_query($koneksi, "update kuliah set Kode_Mk='$kode_mk', Nama_Mk='$nama_mk', Sks='$sks', Semester='$semester' where id ='$id'");

					//redirect ke halaman index.php
					echo "<script>alert('data berhasil diupdate.');window.location='index.php';</script>";
				}
				?>
			</div>
		</div>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>