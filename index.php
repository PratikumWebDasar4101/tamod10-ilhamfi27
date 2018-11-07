<!DOCTYPE html>
<html>
<head>
	<?php include_once 'front_end_source.php'; ?>
	<title>TA 10</title>
</head>
<body>
<div class="container">
	<div class="row login-form">
		<div class="col-md-12">
			<h2>Login Admin</h2>
			<form action="proses/proses_user.php?proses=login" method="POST">
				<div class="form-group">
				    <label for="exampleInputEmail1">Username</label>
				    <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Username">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
			</form>
			Registrasi di <a href="registrasi.php">Sini</a>!
		</div>
	</div>
</div>
</body>
</html>
