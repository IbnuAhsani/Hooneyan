<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">	
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final4.css">	
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
		<center>
		<form id="user_data" role="form" method="POST" action="<?php echo base_url('index.php/Daftar_User/register_user'); ?>">
				<h1 class="form-signin-heading font-only" style="margin: 0">Daftar Akun</h1>
				<h1 class="form-signin-heading font-logo" style="margin: 0">Hooneyan</h1><br>
				<table>
					<tbody>
						<tr>
							<td valign="top">
								<label class="font-only" style="color: white">Nama Lengkap</label><br>
								<input class="textbox" type="text" name="nama" required>
							</td>
							<td class="spaced-col"></td>
							<td>
									<label class="font-only" style="color: white">Tanggal Lahir</label><br>								
								  <input class="textbox" type="date" name="tgl_lahir"><br><br>		
							</td>
						</tr>
						<tr class="spaced-row"></tr>
						<tr>
							<td valign="top">
								<label class="font-only" style="color: white">Tipe Akun</label><br>
							  <input type="radio" name="tipe_akun" value="2"><span style="color: white">User</span><br>
							  <input type="radio" name="tipe_akun" value="1"><span style="color: white">Agen</span><br><br>
							</td>
							<td class="spaced-col"></td>
							<td>
									<label class="font-only" style="color: white">Alamat</label><br>								
									<textarea rows="4" cols="21" name="alamat" form="user_data" placeholder="Alamat"></textarea>
							</td>
						</tr>
						<tr class="spaced-row"></tr>
						<tr>
							<td valign="top">
								<label class="font-only" style="color: white">Email</label><br>
								<input class="textbox" type="email" name="email" required>
							</td>
							<td class="spaced-col"></td>
							<td>
									<label class="font-only" style="color: white">Password</label><br>								
									<input class="textbox" type="password" name="password" required>
							</td>
						</tr>
						<tr class="spaced-row"></tr>
						<tr>
							<td valign="top">
								<label class="font-only" style="color: white">No Kontak 1</label><br>
								<input class="textbox" type="text" name="no_kontak_1" required>
							</td>
							<td class="spaced-col"></td>
							<td>
									<label class="font-only" style="color: white">No Kontak 2</label><br>								
									<input class="textbox" type="text" name="no_kontak_2">
							</td>
						</tr>
						<tr class="spaced-row"></tr>
						<tr>
							<td valign="top">
								<label class="font-only" style="color: white">No Kontak 3</label><br>
								<input class="textbox" type="text" name="no_kontak_3">
							</td>
							<td class="spaced-col"></td>
							<td></td>
						</tr>																														
					</tbody>
				</table>
			<br>
			<center>
				<input class="button button-white" type="submit" value="Daftar" name="register">
			</center>
		</form>
		</center>				
		<center>
			<font class="font-only" style="color: white; font-size: 20px">Sudah punya Akun?</font><br>
			<a class="font-only" href="<?php echo base_url('index.php/Login'); ?>" style="color: white; font-size: 20px">
				<u>Masuk disini</u>
			</a>
		</center>
	</div>
</body>
</html>