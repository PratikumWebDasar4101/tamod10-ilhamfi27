<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'front_end_source.php'; ?>
	<title>TA 10</title>
</head>
<body>
<?php include_once 'navbar.php'; ?>
<div class="container">
	<div class="row dashboard-panel">
		<div class="col-md-3">
			<?php include_once 'side_nav.php'; ?>
		</div>
		<div class="col-md-9">
			<h2>Registrasi</h2>
			<form action="proses/proses_data_mahasiswa.php?proses=input" method="POST">
				<div class="form-group">
				    <label for="nama_depan">Nama Depan</label>
				    <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan">
				</div>
				<div class="form-group">
				    <label for="nama_belakang">Nama Belakang</label>
				    <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang">
				</div>
				<div class="form-group">
				    <label for="nim">NIM</label>
				    <input type="text" class="form-control" name="nim" placeholder="NIM">
				</div>
				<div class="form-group">
				    <label for="kelas">Kelas</label>
				    <select name="kelas" class="form-control">
						<option>-- Kelas --</option>
						<option value="D3MI-41-01">D3MI-41-01</option>
						<option value="D3MI-41-02">D3MI-41-02</option>
						<option value="D3MI-41-03">D3MI-41-03</option>
						<option value="D3MI-41-04">D3MI-41-04</option>
					</select>
				</div>
				<div class="form-group">
				    <label for="tanggal_lahir">Tanggal Lahir</label>
				    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
				</div>
				<div class="form-group">
				    <label for="hobby">Hobby</label>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Bersepeda">
					    Bersepeda
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Futsal">
					    Futsal
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Berenang">
					    Berenang
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Menulis">
					    Menulis
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Membaca">
					    Membaca
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Jogging">
					    Jogging
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Travelling">
					    Travelling
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Camping">
					    Camping
					  </label>
					</div>
				</div>
				<div class="form-group">
				    <label for="tempat_wisata">Tempat Wisata</label>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="tempat_wisata[]" value="Lembang">
					    Lembang
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="tempat_wisata[]" value="Dago">
					    Dago
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="tempat_wisata[]" value="Ciwidey">
					    Ciwidey
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="tempat_wisata[]" value="Surabaya">
					    Surabaya
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="tempat_wisata[]" value="Bali">
					    Bali
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="tempat_wisata[]" value="Pangandaran">
					    Pangandaran
					  </label>
					</div>
				</div>
				<div class="form-group">
				    <label for="genre_film">Genre Film</label>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="genre_film[]" value="Action">
					    Action
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="genre_film[]" value="Horror">
					    Horror
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="genre_film[]" value="Comedy">
					    Comedy
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="genre_film[]" value="Romance">
					    Romance
					  </label>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
