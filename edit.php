<?php
include_once 'models/Mahasiswa_model.php';
$mm = new Mahasiswa_model();
session_start();
if (!isset($_SESSION['username'])) {
	header('location: index.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
	$d = $mm->detail_mahasiswa($id);
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
			<h2>Registrasi</h2>
			<form action="proses/proses_data_mahasiswa.php?proses=update" method="POST">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
				<div class="form-group">
				    <label for="nama_depan">Nama Depan</label>
				    <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" value="<?php echo $d['nama_depan']; ?>">
				</div>
				<div class="form-group">
				    <label for="nama_belakang">Nama Belakang</label>
				    <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" value="<?php echo $d['nama_belakang']; ?>">
				</div>
				<div class="form-group">
				    <label for="nim">NIM</label>
				    <input type="text" class="form-control" name="nim" placeholder="NIM" value="<?php echo $d['nim']; ?>">
				</div>
				<div class="form-group">
				    <label for="kelas">Kelas</label>
				    <select name="kelas" class="form-control">
						<option>-- Kelas --</option>
						<option value="D3MI-41-01" <?php echo $d['kelas'] == "D3MI-41-01" ? "selected=\"selected\"" : ""; ?>>D3MI-41-01</option>
						<option value="D3MI-41-02" <?php echo $d['kelas'] == "D3MI-41-02" ? "selected=\"selected\"" : ""; ?>>D3MI-41-02</option>
						<option value="D3MI-41-03" <?php echo $d['kelas'] == "D3MI-41-03" ? "selected=\"selected\"" : ""; ?>>D3MI-41-03</option>
						<option value="D3MI-41-04" <?php echo $d['kelas'] == "D3MI-41-04" ? "selected=\"selected\"" : ""; ?>>D3MI-41-04</option>
					</select>
				</div>
				<div class="form-group">
				    <label for="tanggal_lahir">Tanggal Lahir</label>
				    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $d['tanggal_lahir']; ?>">
				</div>
				<div class="form-group">
                    <?php
                    $hobby = explode(", ", $d['hobby']);
                    ?>
				    <label for="hobby">Hobby</label>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Bersepeda" <?php echo in_array("Bersepeda", $hobby) ? "checked" : ""; ?>>
					    Bersepeda
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Futsal" <?php echo in_array("Futsal", $hobby) ? "checked" : ""; ?>>
					    Futsal
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Berenang" <?php echo in_array("Berenang", $hobby) ? "checked" : ""; ?>>
					    Berenang
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Menulis" <?php echo in_array("Menulis", $hobby) ? "checked" : ""; ?>>
					    Menulis
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Membaca" <?php echo in_array("Membaca", $hobby) ? "checked" : ""; ?>>
					    Membaca
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Jogging" <?php echo in_array("Jogging", $hobby) ? "checked" : ""; ?>>
					    Jogging
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="hobby[]" value="Travelling" <?php echo in_array("Travelling", $hobby) ? "checked" : ""; ?>>
					    Travelling
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
                        <input type="checkbox" name="hobby[]" value="Camping" <?php echo in_array("Camping", $hobby) ? "checked" : ""; ?>>
                        Camping
					  </label>
					</div>
				</div>
                <div class="form-group">
                    <?php
                    $wisata = explode(", ", $d['wisata_favorit']);
                    ?>
				    <label for="tempat_wisata">Tempat Wisata</label>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="tempat_wisata[]" value="Lembang" <?php echo in_array("Lembang", $wisata) ? "checked" : ""; ?>>
					    Lembang
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="tempat_wisata[]" value="Dago" <?php echo in_array("Dago", $wisata) ? "checked" : ""; ?>>
					    Dago
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="tempat_wisata[]" value="Ciwidey" <?php echo in_array("Ciwidey", $wisata) ? "checked" : ""; ?>>
					    Ciwidey
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="tempat_wisata[]" value="Surabaya" <?php echo in_array("Surabaya", $wisata) ? "checked" : ""; ?>>
					    Surabaya
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="tempat_wisata[]" value="Bali" <?php echo in_array("Bali", $wisata) ? "checked" : ""; ?>>
					    Bali
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="tempat_wisata[]" value="Pangandaran" <?php echo in_array("Pangandaran", $wisata) ? "checked" : ""; ?>>
					    Pangandaran
					  </label>
					</div>
				</div>
				<div class="form-group">
                    <?php
                    $film = explode(", ", $d['genre_film_favorit']);
                    ?>
				    <label for="genre_film">Genre Film</label>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="genre_film[]" value="Action" <?php echo in_array("Action", $film) ? "checked" : ""; ?>>
					    Action
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="genre_film[]" value="Horror" <?php echo in_array("Horror", $film) ? "checked" : ""; ?>>
					    Horror
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="genre_film[]" value="Comedy" <?php echo in_array("Comedy", $film) ? "checked" : ""; ?>>
					    Comedy
					  </label>
					</div>
				    <div class="checkbox">
					  <label>
					    <input type="checkbox" name="genre_film[]" value="Romance" <?php echo in_array("Romance", $film) ? "checked" : ""; ?>>
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
