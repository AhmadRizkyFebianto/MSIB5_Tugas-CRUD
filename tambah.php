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
			<div class="card-header bg-success text-white">
				Tambah data MataKuliah
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group mb-2">
						<label>Kode MataKuliah</label>
						<input type="text" name="Kode_Mk" required="" class="form-control">
					</div>
					<div class="form-group mb-2">
						<label>Nama MataKuliah</label>
						<input type="text" name="Nama_Mk" class="form-control">
					</div>
					<div class="form-group mb-2">
						<label>SKS</label>
						<input type="text" name="Sks" class="form-control">
					</div>
					<div class="form-group mb-3">
						<label>Semester</label>
						<input type="text" name="Semester" class="form-control">
					</div>

					
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$kode_mk = $_POST['Kode_Mk'];
					$nama_mk = $_POST['Nama_Mk'];
					$sks = $_POST['Sks'];
					$semester = $_POST['Semester'];

					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "INSERT INTO kuliah (Kode_Mk,Nama_Mk,Sks,Semester) VALUES ('$kode_mk', '$nama_mk', '$sks', '$semester')");
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
				}
				?>
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>