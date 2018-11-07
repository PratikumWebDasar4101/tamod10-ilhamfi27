<?php
require_once 'models/User_model.php';
$um = new User_model();
session_start();
if (!isset($_SESSION['username'])) {
	header('location: index.php');
}
$id_user = $_SESSION['user_id'];
$d = mysqli_fetch_array($um->detail_user($id_user));
if (isset($_SESSION['update_profile_success'])) {
?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Success!</strong> <?php echo $_SESSION['update_profile_success'] ?>.
	</div>
<?php
unset($_SESSION['update_profile_success']);
}
if (isset($_SESSION['update_profile_error'])) {
?>
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Warning!</strong> <?php echo $_SESSION['update_profile_error'] ?>.
	</div>
<?php
unset($_SESSION['update_profile_error']);
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
		    <div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Profil</h3>
				</div>
		        <div class="panel-body">
					<form action="proses/proses_user.php?proses=update_profile" method="post">
						<input type="hidden" name="id" value="<?php echo $id_user; ?>">
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $d['username']; ?>">
						</div>
						<div class="form-group">
							<label>Nama Depan</label>
							<input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" value="<?php echo $d['nama_depan']; ?>">
						</div>
						<div class="form-group">
							<label>Nama Belakang</label>
							<input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" value="<?php echo $d['nama_belakang']; ?>">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<div class="radio">
								<label>
									<input type="radio" name="jenis_kelamin" placeholder="Jenis Kelamin" value="L" <?php echo $d['jenis_kelamin'] == "L" ? "checked" : ""; ?>> Laki-Laki
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="jenis_kelamin" placeholder="Jenis Kelamin" value="P" <?php echo $d['jenis_kelamin'] == "P" ? "checked" : ""; ?>> Perempuan
								</label>
							</div>
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $d['tanggal_lahir']; ?>">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $d['email']; ?>">
						</div>
						<div class="form-group">
							<label>Password Baru</label>
							<input type="password" class="form-control" name="password" placeholder="password">
						</div>
						<div class="form-group">
							<label>Konfirmasi Password Baru</label>
							<input type="password" class="form-control" name="konfirmasi_password" placeholder="konfirmasi_password">
						</div>
						<div class="form-group">
							<label>Password Lama</label>
							<input type="password" class="form-control" name="password_lama" placeholder="password_lama">
						</div>
						<button type="submit" name="submit" class="btn btn-primary pull-right">Daftar</button>
					</form>
		        </div>
		    </div>
		</div>
	</div>
</div>
</body>
</html>
