<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container col-md-12 mt-4">
		<h1>TABEL MataKuliah</h1>
		<div class="card">
			<div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
				DATA MataKuliah <a href="tambah.php" class="btn btn-md btn-primary justify-content-end" style='left='>Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr class='text-center'>
							<th>No</th>
							<th>Kode MataKuliah</th>
							<th>Nama MataKuliah</th>
							<th>Sks</th>
							<th>Semester</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
                    <?php
							include('koneksi.php');
							$datas = mysqli_query($koneksi, 'SELECT * FROM kuliah');

							$no = 1;

							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['Kode_Mk']; ?></td>
						<td><?= $row['Nama_Mk']; ?></td>
						<td><?= $row['Sks']; ?></td>
						<td><?= $row['Semester']; ?></td>
						<td class='text-center'>
								<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>