<!DOCTYPE html>
<html>
<head>
	<?php include_once 'front_end_source.php'; ?>
	<title>Jurnal 8</title>
</head>
<body>
<div class="container">
	<div class="row login-form">
		<div class="col-md-12">
			<h2>Registrasi</h2>
			<form action="proses/proses_user.php?proses=registrasi" method="POST">
				<div class="form-group">
				    <label for="exampleInputEmail1">Username</label>
				    <input type="text" class="form-control" name="username" placeholder="Username">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" name="password" placeholder="Password">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Confirm Password</label>
				    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
				  </div>
				  <button type="submit" name="submit" class="btn btn-primary pull-right">Daftar</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
