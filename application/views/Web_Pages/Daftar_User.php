<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final.css">

</head>
<body class="login_page">
	<div class="container">
		<?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
        ?>
		<form role="form" class="form-signin" method="POST" action="<?php echo base_url('index.php/Daftar_User/register_user'); ?>">
			<h1 class="form-signin-heading text-muted">Daftar Akun Hooneyan</h1>
			<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_user" required autofocus>
			<input type="email" class="form-control" placeholder="Email Anda" name="email" required autofocus>
			<input type="password" class="form-control" placeholder="Masukkan Password Anda" name="password" required>
			<br>
			<input type="submit" value="Daftar" name="register" >
		</form>
		<center><b style="color:white">Already registered ?</b> <br></b><a href="<?php echo base_url('index.php/Login'); ?>">Login here</a></center><!--for centered text-->

	</div>
</body>
</html>