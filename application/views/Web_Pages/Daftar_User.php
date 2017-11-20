<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final.css">
</head>
<body class="login_page">
	<div class="container">
		<?php
         $error_msg=$this->session->flashdata('error_msg');
         if($error_msg)
	         {
	           echo $error_msg;
	         }
      ?>
		<form role="form" class="form-signin" method="POST" action="<?php echo base_url('index.php/Daftar_User/register_user'); ?>">
			<h1 class="form-signin-heading text-muted">Daftar Akun Hooneyan</h1><br>
			<input type="text" placeholder="Nama Lengkap" name="nama_user" required>
			<input type="email" placeholder="Email Anda" name="email" required>
			<input type="password" placeholder="Password" name="password" required>
			<input type="text" placeholder="Nomor Telpon" name="no_kontak" required>
			<br>
			<label for="tipe_akun" style="color: white">Tipe Akun</label><br>
		  <input type="radio" name="tipe_akun" value="1"><span style="color: white">User</span><br>
		  <input type="radio" name="tipe_akun" value="2"><span style="color: white">Agen</span><br><br>
		  <label for="tgl_lhr" style="color: white">Tanggal Lahir : </label>
		  <input type="date" name="tgl_lahir"><br><br>		
			<center><input type="submit" value="Daftar" name="register"></center>
		</form>
			<!--for centered text-->
		<center>
			<b style="color:white">Sudah punya Akun?</b><br>
			</b><a href="<?php echo base_url('index.php/Login'); ?>" style="color: white"><u>Masuk disini</u></a>
		</center>
	</div>
</body>
</html>