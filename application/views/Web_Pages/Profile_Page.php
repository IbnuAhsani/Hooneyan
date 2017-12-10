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
	<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final3.css">
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
      <li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
				<a class="navbar-button" href="<?php echo base_url(); ?>index.php/Login/user_logout">Sign-Out</a>
      </li>
      <?php 
      	$tipe_akun=$this->session->userdata('tipe_akun');
      	if($tipe_akun == 1):
	   ?>
	      <li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
   				<a class="navbar-button" href="<?php echo base_url(); ?>index.php/Daftar_Properti">Tambah Properti</a>
	      </li>
	   <?php endif; ?>
   </ul>
   </nav>

	<!-- Spacing -->
	<div class="row spacing"></div>

	<!-- Photo, Info and Logo -->
	<div class="row">
		<div class="col-1" ></div>
		<div class="col-2">
			<img class="img" src="<?php echo base_url(); ?>/assets/pictures/Profile_pic.png" alt="Profile Picture">
		</div>
		<div class="col-4">
			<ul class="font-color" style="margin-top: 16%">
				<?php
					foreach($user->result() as $us){
				 ?>
				<li><h2 style="margin-bottom: 0"><?php echo $us->nama; ?></h2></li>
				<li style="font-size: 18px"><?php echo $us->email; ?></li>
				<li style="font-size: 18px">
					<?php echo $us->alamat; ?>
				</li>
			</ul>
		</div>
		<div class="col-2">
			<ul class="font-color" style="margin-top: 33%">
				<li><h2>Nomor Kontak:</h2></li>
				<?php 
					foreach($kontak->result() as $kontk){
				?>
				<li style="font-size: 18px"><?php echo $kontk->no_kontak; ?></li>
				<?php } ?>
			</ul>
		</div>
		<div class="col-2" style="height: 30%; color: #062F4f;">
 			<img class="img" src="<?php echo base_url(); ?>/assets/pictures/logo.jpg" alt="Logo Picture">
 		</div>
 		<?php 
 			} 
 		?>
		<div class="col-1"></div>
	</div>

	<!-- Spacing -->
	<div class="row spacing"></div>

	<!-- Grey Line -->
	<div class="row" style="height: 15%; background-color: #D9D9D9">
		<div class="hr" style="margin: 3%;"><hr></div>
	</div>

	<!-- Spacing -->
	<div class="row spacing"></div>

	<!-- Teks "Iklan Tayang" -->
	<div class="row">
		<h1 class="font-color" style="margin-left: 9%"><u>Iklan Tayang</u></h1>
	</div>
	<?php  
		if($properti->result() == NULL)
			{ 
				if($this->session->userdata('tipe_akun') == 2)
					{?>
						<form action="<?php echo base_url('index.php/Profile_Page/change_account'); ?>" method="post">
							<center>
								<h3 class="font-color">Anda tidak punya Properti karena Anda terdaftar sebagai 'User'</h3>
								<h3 class="font-color">Klik Tombol di Bawah untuk mengganti Akun menjadi 'Agen'</h3>
								<input type="hidden" name="id" value="<?php echo $this->session->userdata('id');?>">
								<input type="hidden" name="password" value="<?php echo $this->session->userdata('password');?>">
								<input type="hidden" name="nama" value="<?php echo $this->session->userdata('nama');?>">
								<input type="hidden" name="email" value="<?php echo $this->session->userdata('email');?>">
								<input type="hidden" name="tgl_lahir" value="<?php echo $this->session->userdata('tgl_lahir');?>">
								<input type="hidden" name="no_kontak" value="<?php echo $this->session->userdata('no_kontak');?>">
			  				<input type="submit" name="submit" value="Ganti Akun">
							</center>
						</form>
					<?php 
					}
				else
					{ ?>
						<center>
							<h1 class="font-color">Properti Anda Kosong</h1>
						</center>
					<?php
					}
			}
		else
			{
				$i=1;
			foreach ($properti->result() as $prop) 
				{ ?>
				<!-- Iklan Row 1 -->
					<div class="row" style="margin: 2%;">
						<div class="col-2"></div>
						<div class="col-8" style="display: flex;">
							<div class="col-5" style="height: 100%">
							<?php 
						   	echo"<img src='".base_url("gambar/".$prop->gambar)."' style=width:300px;height:190px; >";		
							?>
							</div>
							<div class="col-7">
								<ul class="navbar-list">
									<form id="<?php echo $i; ?>" action="<?php echo base_url('index.php/Properti_Page/get_data'); ?>" method="post">
									<input type="hidden" name="id_properti" value="<?php echo $prop->id_properti;?>">
									<input type="hidden" name="id_agen" value="<?php echo $prop->id_agen;?>">
									<li>
										<h2><a class="font-color" style="margin: 0" onclick="document.getElementById('<?php echo $i; ?>').submit()"><?php echo $prop->nama_properti;?></a></h2>						
									</li>
									<li><h5 class="navbar-list" style="margin-bottom: 5px; margin-top: 5px">Rp.<?php echo $prop->harga_properti;?></h5></li>
									<li>Tipe Properti: <?php echo $prop->kategori_properti;?></li>
									<li>Status Jual: <?php echo $prop->status_properti;?></li>
									<li>Lokasi: <?php echo $prop->lokasi_properti;?></li>
									<?php if($prop->isBooked == 0) {?>
										<li>Status Properti: <font style="color: green">Available</font></li>
									<?php }else{ 
											if($prop->id_booker != 0 && $prop->konfirmasi == 0) {?>
										<li>Status Properti: <font style="color: orange">Waiting For Confirmation</font></li>
									<?php }else{  ?>
										<li>Status Properti: <font style="color: red">Booked</font></li>
									<?php }
											} 
									?>
				</form>
								</ul>
							</div>
							</div>
						<div class="col-2"></div>
					</div>
			<?php 
					$i++;
				} 
			}?>

	<!-- Iklan Row 3 -->
	<!-- <div class="row" style="margin: 2%;">
		<div class="col-6" style="display: flex;">
			<div class="col-5" style="height: 100%">
				<img class="img" src="<?php echo base_url(); ?>/assets/pictures/rumah3.jpg" alt="Gambar Properti">
			</div>
			<div class="col-7">
				<ul style="color: #062F4f;">
					<li><h4>Nama Properti</h4></li>
					<li></li><li></li>
					<li><h5>Harga Properti</h5></li>
					<li>Tipe Properti</li>
					<li>Status Jual</li>
					<li>Lokasi Jual</li>
					<li>Fitur Properti</li>
				</ul>
			</div>
		</div>
		<div class="col-6" style="display: flex;">
			<div class="col-5" style="height: 100%">
				<img class="img" src="<?php echo base_url(); ?>/assets/pictures/rumah1.jpg" alt="Gambar Properti">
			</div>
			<div class="col-7">
				<ul style="color: #062F4f;">
					<li><h4>Nama Properti</h4></li>
					<li></li><li></li>
					<li><h5>Harga Properti</h5></li>
					<li>Tipe Properti</li>
					<li>Status Jual</li>
					<li>Lokasi Jual</li>
					<li>Fitur Properti</li>
				</ul>
			</div>
		</div>
	</div> -->
	<!-- Spacing -->
	<div class="row spacing"></div>
   <!-- Footer -->
  <div class="footer font-only" align="center">
			<br>Copyright &copy; 2017 <br><br>
			140810160054 - Ibnu Ahsani |
			140810160004 - Ahsan Nurrijal |
			140810179001 - Muhammad Affandi
  </div>   
</body>
</html>