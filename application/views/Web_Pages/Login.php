<html>
<head>
	<title>Login</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final.css">

</head>
<body class="login_page">
	<div class="container">
		<form class="form-signin" role="form" method="post" action="<?php echo base_url('index.php/Login/login_user'); ?>">
			<h1 class="form-signin-heading text-muted">Selamat Datang di Hooneyan</h1>
			<input type="text" class="form-control" placeholder="Masukkan Email Anda" name="email" required="" autofocus>
			<input type="password" class="form-control" placeholder="Masukkan Password Anda" name="password" required>
			<p>Lupa Password?</p>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
			<p>Belum punya akun? klik <a href="http://localhost/CI/index.php/Daftar_user">disini<a></p>
		</form>
	</div>
</body>
</html>