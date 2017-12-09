<?php
	$email=$this->session->userdata('email');
	if(!$email)
		{
		  redirect('Login');
		}
 ?>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">	
	<meta charset="UTF-8">
	<title>Daftar Properti</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Final.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final4.css">
	<!-- JS Dropdown -->
	<script>
	/* When the user clicks on the button, 
	toggle between hiding and showing the dropdown content */
	function myFunction() 
		{
		    document.getElementById("myDropdown").classList.toggle("show");
		}
	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event) 
		{
		  if (!event.target.matches('.dropbtn')) 
			  {
			    var dropdowns = document.getElementsByClassName("dropdown-content");
			    var i;
			    for (i = 0; i < dropdowns.length; i++) 
				    {
				      var openDropdown = dropdowns[i];
				      if (openDropdown.classList.contains('show')) 
					      {
					        openDropdown.classList.remove('show');
					      }
				    }
			  }
		}
	</script>
</head>
<body class="container-fluid" style="margin: 0"px>
	<!-- Upper Task Bar -->
   <nav cl>
   <ul style="background-color: #062F4f; width: 100% ; margin: 0px">
      <li style="margin: 11px; margin-left: 20; float: left;">
				<a class="text-logo" href="<?php echo base_url(); ?>index.php/Homepage">
					Hooneyan
				</a>
			</li>
     <li class="dropdown">
       <a href="javascript:void(0)" class="dropbtn navbar-button">Menu</a>
				<div class="dropdown-content">
					<a class="navbar-list" href="#">| Jual</a>
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Rumah</a>
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Ruko</a>
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Apartemen</a>
					<a class="navbar-list" href="#">| Sewa</a>
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Rumah</a>
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Apartemen</a>
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Ruko</a>
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Villa</a>
				</div>
      </li>
      <?php
				$email=$this->session->userdata('email');
				if(!$email){
			?>
			<li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
				<a class="navbar-button" href="<?php echo base_url(); ?>index.php/Login">Sign-In</a>
			</li>
			<?php }else{ ?>
			<li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
				<a class="navbar-button" href="<?php echo base_url(); ?>index.php/Login/user_logout">Sign-Out</a>
			</li>
			<li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
				<a class="navbar-button" href="<?php echo base_url(); ?>index.php/Profile_Page">My Profile</a>
			</li>
			<?php } ?>
   </ul>
   </nav>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<br><br>		
			<h1 class="font-color"><u>Daftar Properti</u></h1>	
			<form id="properti_data" action="<?php echo base_url('index.php/Daftar_Properti/tambah_properti'); ?>" method="post"  enctype="multipart/form-data">
				<table>
					<tbody>
						<tr>
							<td valign="top">
								<label class="font-color">Nama Properti</label><br>
				  			<input name="nama_properti" type="textarea" placeholder="Nama Properti">
							</td>
							<td class="spaced-col"></td>
							<td>
									<label class="font-color">Deskripsi Properti</label><br>								
									<textarea	 rows="5" cols="35" name="desc_properti" form="properti_data"></textarea>
							</td>
						</tr>
						<tr class="spaced-row"></tr>
						<tr>
							<td>
								<label class="font-color">Kategori Properti</label><br>
			  				<select name="kategori_properti">
									<option value="Rumah">Rumah</option>
									<option value="Ruko">Ruko</option>
									<option value="Apartemen">Apartemen</option>
									<option value="Villa">Villa</option>
								</select>
							</td>
							<td class="spaced-col"></td>
							<td>
								<label class="font-color">Opsi Jual</label><br>
								<select name="status_properti">
									<option value="Jual">Jual</option>
									<option value="Sewa">Sewa</option>
								</select>
							</td>
						</tr>
						<tr class="spaced-row"></tr>
						<tr>
							<td valign="top">
								<label class="font-color">Kondisi Properti</label><br>
				  			<select name="kondisi_properti">
									<option value="Bagus">Bagus</option>
									<option value="Layak">Layak</option>
									<option value="Kurang">Kurang</option>
								</select>
							</td>
							<td class="spaced-col"></td>
							<td>
	  					<label class="font-color">Lokasi Properti</label><br>
							<textarea	 rows="5" cols="35" name="lokasi_properti" form="properti_data"></textarea>								
							</td>
						</tr>
						<tr class="spaced-row"></tr>
						<tr>
							<td>
			  				<label class="font-color">Luas Properti</label><br>
			  				<input name="luas_properti" type="textarea" placeholder="Satuan m2">
							</td>
							<td class="spaced-col"></td>
							<td>
			  				<label class="font-color">Luas Tanah</label><br>
			  				<input name="luas_tanah" type="textarea" placeholder="Satuan m2">								
							</td>
						</tr>
						<tr class="spaced-row"></tr>
						<tr>
							<td>
			  				<label class="font-color">Jumlah Lantai</label><br>
			  				<input type="number" name="jumlah_lantai" placeholder="Masukkan dalam Angka">
							</td>
							<td class="spaced-col"></td>
							<td>
			  				<label class="font-color">Daya Listrik</label><br>
			  				<input type="textarea" name="daya_listrik" placeholder="Satuan Watt">								
							</td>
						</tr>
						<tr class="spaced-row"></tr>
						<tr>
							<td>
			  				<label class="font-color">Jumlah Kamar</label><br>
			  				<input type="number" name="jumlah_ktidur" placeholder="Masukkan dalam Angka">								
							</td>
							<td class="spaced-col"></td>
							<td>
			  				<label class="font-color">Jumlah Kamar Mandi</label><br>
			  				<input type="number" name="jumlah_kmandi" placeholder="Masukkan dalam Angka">								
							</td>
						</tr>
						<tr class="spaced-row"></tr>
						<tr>
							<td>
			  				<label class="font-color">Jumlah Garasi</label><br>
			  				<input type="number" name="jumlah_garasi" placeholder="Masukkan dalam Angka">								
							</td>
							<td class="spaced-col"></td>
							<td>
			  				<label class="font-color">Harga Properti</label><br>
			  				<input type="textarea" name="harga_properti" placeholder="Rp.100000000">								
							</td>
						</tr>
						<tr class="spaced-row"></tr>
						<tr>
							<td>
							   <label class="font-color">Gambar Properti</label><br>
								<input type=file name='gambar'>
							</td>
							<td class="spaced-col"></td>
							<td>
			  				<input type="submit" name="submit" value="Daftarkan">
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
		<div class="col-3"></div>
	</div>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br>
   <!-- Footer -->
  <div class="footer font-only" align="center">
			<br>Copyright &copy; 2017 <br><br>
			140810160054 - Ibnu Ahsani |
			140810160004 - Ahsan Nurrijal |
			140810179001 - Muhammad Affandi
  </div>   
</body>
</html>