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
					<form id="jual-rumah" action="<?php echo base_url(); ?>index.php/JualSewa_Page/jual_sewa" method="post">
						<input type="hidden" name="status_properti" value="Jual">
						<input type="hidden" name="kategori_properti" value="Rumah">
						<a class="navbar-list" onclick="document.getElementById('jual-rumah').submit()">Rumah</a>
					</form>
					<form id="jual-ruko" action="<?php echo base_url(); ?>index.php/JualSewa_Page/jual_sewa" method="post">
						<input type="hidden" name="status_properti" value="Jual">
						<input type="hidden" name="kategori_properti" value="Ruko">
						<a class="navbar-list" onclick="document.getElementById('jual-ruko').submit()">Ruko</a>
					</form>			
					<form id="jual-apartemen" action="<?php echo base_url(); ?>index.php/JualSewa_Page/jual_sewa" method="post">
						<input type="hidden" name="status_properti" value="Jual">
						<input type="hidden" name="kategori_properti" value="Apartemen">
						<a class="navbar-list" onclick="document.getElementById('jual-apartemen').submit()">Apartemen</a>
					</form>			
					<a class="navbar-list" href="#">| Sewa</a>
					<form id="sewa-rumah" action="<?php echo base_url(); ?>index.php/JualSewa_Page/jual_sewa" method="post">
						<input type="hidden" name="status_properti" value="Sewa">
						<input type="hidden" name="kategori_properti" value="Rumah">
						<a class="navbar-list" onclick="document.getElementById('sewa-rumah').submit()">Rumah</a>
					</form>			
					<form id="sewa-apartemen" action="<?php echo base_url(); ?>index.php/JualSewa_Page/jual_sewa" method="post">
						<input type="hidden" name="status_properti" value="Sewa">
						<input type="hidden" name="kategori_properti" value="Apartemen">
						<a class="navbar-list" onclick="document.getElementById('sewa-apartemen').submit()">Apartemen</a>
					</form>			
					<form id="sewa-ruko" action="<?php echo base_url(); ?>index.php/JualSewa_Page/jual_sewa" method="post">
						<input type="hidden" name="status_properti" value="Sewa">
						<input type="hidden" name="kategori_properti" value="Ruko">
						<a class="navbar-list" onclick="document.getElementById('sewa-ruko').submit()">Ruko</a>
					</form>			
					<form id="sewa-villa" action="<?php echo base_url(); ?>index.php/JualSewa_Page/jual_sewa" method="post">
						<input type="hidden" name="status_properti" value="Sewa">
						<input type="hidden" name="kategori_properti" value="Villa">
						<a class="navbar-list" onclick="document.getElementById('sewa-villa').submit()">Villa</a>
					</form>			
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
			<form id="properti_data" action="<?php echo base_url('index.php/Properti_Page/update_data'); ?>" method="post"  enctype="multipart/form-data">
				<?php 
					foreach($properti->result() as $prop)
						{?>
						<input type='hidden' name='id_properti' value='<?php echo $prop->id_properti;?>'>
						<input type='hidden' name='id' value='<?php echo $this->session->userdata('id');?>'>
						<input type='hidden' name='tipe_akun' value='<?php echo $this->session->userdata('tipe_akun');?>'>
						<input type='hidden' name='email' value='<?php echo $this->session->userdata('email');?>'>
							<table>
								<tbody>
									<tr>
										<td valign="top">
											<label class="font-color">Nama Properti</label><br>
							  			<input class="textbox" name="nama_properti" type="textarea" value="<?php echo $prop->nama_properti; ?>">
										</td>
										<td class="spaced-col"></td>
										<td>
												<label class="font-color">Deskripsi Properti</label><br>								
												<textarea	 rows="5" cols="35" name="desc_properti" form="properti_data" value="<?php echo $prop->desc_properti; ?>"></textarea>
										</td>
									</tr>
									<tr class="spaced-row"></tr>
									<tr>
										<td>
											<label class="font-color">Kategori Properti</label><br>
						  				<select class="textbox" name="kategori_properti">
												<option value="Rumah" <?php if($prop->kategori_properti == "Rumah"):?> selected <?php endif;?>>Rumah</option>
												<option value="Ruko" <?php if($prop->kategori_properti == "Ruko"):?> selected <?php endif;?>>Ruko</option>
												<option value="Apartemen" <?php if($prop->kategori_properti == "Apartemen"):?> selected <?php endif;?>>Apartemen</option>
												<option value="Villa" <?php if($prop->kategori_properti == "Villa"):?> selected <?php endif;?>>Villa</option>
											</select>
										</td>
										<td class="spaced-col"></td>
										<td>
											<label class="font-color">Opsi Jual</label><br>
											<select class="textbox" name="status_properti">
												<option value="Jual" <?php if($prop->status_properti == "Jual"):?> selected <?php endif;?>>Jual</option>
												<option value="Sewa" <?php if($prop->status_properti == "Sewa"):?> selected <?php endif;?>>Sewa</option>
											</select>
										</td>
									</tr>
									<tr class="spaced-row"></tr>
									<tr>
										<td valign="top">
											<label class="font-color">Kondisi Properti</label><br>
							  			<select class="textbox" name="kondisi_properti">
												<option value="Bagus" <?php if($prop->kondisi_properti=="Bagus"):?> selected <?php endif;?>>Bagus</option>
												<option value="Layak" <?php if($prop->kondisi_properti=="Layak"):?> selected <?php endif;?>>Layak</option>
												<option value="Kurang" <?php if($prop->kondisi_properti=="Kurang"):?> selected <?php endif;?>>Kurang</option>
											</select>
										</td>
										<td class="spaced-col"></td>
										<td>
					  					<label class="font-color">Lokasi Properti</label><br>
											<textarea	 rows="5" cols="35" name="lokasi_properti" form="properti_data" value="<?php echo $prop->lokasi_properti; ?>"></textarea>	
										</td>
									</tr>
									<tr class="spaced-row"></tr>
									<tr>
										<td>
						  				<label class="font-color">Luas Properti</label><br>
						  				<input class="textbox" name="luas_properti" type="textarea" value="<?php echo $prop->luas_properti; ?>">
										</td>
										<td class="spaced-col"></td>
										<td>
						  				<label class="font-color">Luas Tanah</label><br>
						  				<input class="textbox" name="luas_tanah" type="textarea" value="<?php echo $prop->luas_tanah; ?>">								
										</td>
									</tr>
									<tr class="spaced-row"></tr>
									<tr>
										<td>
						  				<label class="font-color">Jumlah Lantai</label><br>
						  				<input class="textbox" type="number" name="jumlah_lantai" value="<?php echo $prop->jumlah_lantai; ?>">
										</td>
										<td class="spaced-col"></td>
										<td>
						  				<label class="font-color">Daya Listrik</label><br>
						  				<input class="textbox" type="textarea" name="daya_listrik" value="<?php echo $prop->daya_listrik; ?>">								
										</td>
									</tr>
									<tr class="spaced-row"></tr>
									<tr>
										<td>
						  				<label class="font-color">Jumlah Kamar</label><br>
						  				<input class="textbox" type="number" name="jumlah_ktidur" value="<?php echo $prop->jumlah_ktidur; ?>">								
										</td>
										<td class="spaced-col"></td>
										<td>
						  				<label class="font-color">Jumlah Kamar Mandi</label><br>
						  				<input class="textbox" type="number" name="jumlah_kmandi" value="<?php echo $prop->jumlah_kmandi; ?>">								
										</td>
									</tr>
									<tr class="spaced-row"></tr>
									<tr>
										<td>
						  				<label class="font-color">Jumlah Garasi</label><br>
						  				<input class="textbox" type="number" name="jumlah_garasi" value="<?php echo $prop->jumlah_garasi; ?>">								
										</td>
										<td class="spaced-col"></td>
										<td>
						  				<label class="font-color">Harga Properti</label><br>
						  				<input class="textbox" type="textarea" name="harga_properti" value="<?php echo $prop->harga_properti; ?>">								
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
						  				<input class="button button-blue" type="submit" name="submit" value="Ubah Data">
										</td>
									</tr>
								</tbody>
							</table>
			<?php
					} ?>
			</form>
		</div>
		<div class="col-3"></div>
	</div>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br><br>
   <!-- Footer -->
  <div class="footer font-only" align="center">
			<br>Copyright &copy; 2017 <br><br>
			140810160054 - Ibnu Ahsani |
			140810160004 - Ahsan Nurrijal |
			140810179001 - Muhammad Affandi
  </div>   
</body>
</html>