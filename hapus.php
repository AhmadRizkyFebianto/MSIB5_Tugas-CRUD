<?php				
			include 'koneksi.php';
			$id = $_GET['id'];

			//query hapus
			$datas = mysqli_query($koneksi, "delete from kuliah where id ='$id'");

			//alert dan redirect ke index.php
			echo "<script>alert('data berhasil dihapus.');window.location='index.php';</script>";
	?>