<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #3175bf">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="" class="nav-link active">Home</a>
			<a href="<?php echo(base_url('mahasiswa/tambah_data')) ?>" class="nav-link">Tambah Data</a>
			
		</div>
		<div class="navbar-nav ml-auto">
		<a href="" class="nav-link active"> aliq </a>
		</div>
	</nav>
	<div class="alert alert-success text-center mt-2">
		Data Mahasiswa
		
	</div>

	<div class=" container">
		
		
	
	<table class="table table-bordered table-sm">
		<tr>
			<th>No</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>

		<tr>
			<td>1</td>
			<td>1810330069</td>
			<td>Khaliqul Wafiq</td>
			<td>Mataram</td>
			<td>
				<a href="" class="btn btn-info btn-sm">EDIT</a>
				<a href="" class=" btn btn-danger btn-sm">HAPUS</a>
			</td>
			
		</tr>
	</table>
</div>
</body>
</html>