<?php
	$email=$this->session->userdata('email');
	if($email)
		{
		  redirect('Homepage');
		}
 ?>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">
	<title>Login</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final4.css">
</head>
<body class="login_page">
	<div class="container">
		<center>
		<form class="form-signin" role="form" method="post" action="<?php echo base_url('index.php/Login/login_user'); ?>">
			<h1 class="form-signin-heading font-only" style="margin: 0">Selamat Datang di</h1>
			<h1 class="form-signin-heading font-logo" style="margin-top: 0">Hooneyan</h1>
			<input type="text" class="form-control" placeholder="Masukkan Email Anda" name="email" required="" autofocus>
			<input type="password" class="form-control" placeholder="Masukkan Password Anda" name="password" required>
				<button class="button button-white" type="submit">Sign In</button><br><br>
				<font class="font-only" style="color: white; font-size: 18px; text-align: center;">
					Belum punya akun?<br>
					Klik 
					<a href="<?php echo base_url('/index.php/Daftar_user') ?>" style="color: white;">
						<u>disini</u>
					<a><br>
				</font>
				<font class="font-only" style="color: white; font-size: 18px; text-align: center;">
					Klik 
					<a href="<?php echo base_url('/index.php/Homepage') ?>" style="color: white;">
						<u>disini</u>
					<a>
					untuk kembali ke Homepage
				</font>				
			</center>
			<br><br>
		</form>
	</div>
</body>
</html>