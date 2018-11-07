<?php
include_once 'models/Mahasiswa_model.php';
$mm = new Mahasiswa_model();
session_start();
if (!isset($_SESSION['username'])) {
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'front_end_source.php'; ?>
	<title>Jurnal 8</title>
</head>
<body>
<?php include_once 'navbar.php'; ?>
<div class="container">
	<div class="row dashboard-panel">
		<div class="col-md-3">
			<?php include_once 'side_nav.php'; ?>
		</div>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-5 pull-right">
					<form action=" " method="get">
						<div class="input-group">
							<span class="input-group-addon">NIM</span>
							<input type="text" name="nim" class="form-control" placeholder="NIM Mahasiswa">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit">Cari</button>
							</span>
						</div><!-- /input-group -->
					</form>
				</div><!-- /.col-lg-6 -->
			</div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>NIM</th>
							<th>Kelas</th>
							<th>Tanggal Lahir</th>
							<th>Hobby</th>
							<th>Wisata Favorit</th>
							<th>Genre Film Favorit</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$n = 1;
						isset($_GET['nim']) ? $nim = $_GET['nim'] : null;
						foreach ($mm->list_mahasiswa($nim) as $d) {
						?>
							<tr>
								<td><?php echo $n; ?></td>
								<td><?php echo $d['nim']; ?></td>
								<td><?php echo $d['nama']; ?></td>
								<td><?php echo $d['kelas']; ?></td>
								<td><?php echo $d['tanggal_lahir']; ?></td>
								<td><?php echo $d['hobby']; ?></td>
								<td><?php echo $d['wisata_favorit']; ?></td>
								<td><?php echo $d['genre_film_favorit']; ?></td>
								<td><a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a> | <a href="proses/proses_data_mahasiswa.php?proses=hapus&id=<?php echo $d['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');">Hapus</a></td>
							</tr>
							<?php
							$n++;
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>
