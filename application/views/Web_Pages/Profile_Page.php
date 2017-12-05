<?php
	$email=$this->session->userdata('email');
	if(!$email)
		{
		  redirect('Login');
		}
 ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final.css">

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
	<!--  -->

</head>
<body class="container-fluid" style="margin: 0"px>
	
	<!-- Upper Task Bar -->
     <nav cl>
   <ul style="background-color: #062F4f; width: 100% ; margin: 0px">
      <li style="margin: 11px; margin-left: 20; float: left;"><a href="<?php echo base_url(); ?>index.php/Homepage"><img src="<?php echo base_url(); ?>/assets/pictures/house.png" style="height: 42px; width: 42px"></a></li>
     <li class="dropdown" style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 80px; float: left;">
       <button href="javascript:void(0)" class="dropbtn" style="font-size: 13px">Menu</button> 
          <div class="dropdown-content">
            <a href="#">| Jual</a>
            <a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Rumah</a>
            <a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Ruko</a>
            <a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Apartemen</a>
            <a href="#">| Sewa</a>
            <a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Rumah</a>
            <a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Apartemen</a>
            <a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Ruko</a>
            <a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Villa</a>
          </div>
       </li>
      <li style="width: 40%; float: left;"><input type="text" class="search1" name="search" placeholder="Search.."></li>
      <li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
         <button class="dropbtn" style="font-size: 13px"><?php echo anchor('Login/user_logout','Sign-Out'); ?></button>
      </li>
      <?php 
      	$tipe_akun=$this->session->userdata('tipe_akun');
      	if($tipe_akun == 1):
	   ?>
	      <li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
	         <button class="dropbtn" style="font-size: 13px"><a href="<?php echo base_url(); ?>index.php/Daftar_Properti">Tambah Properti</button></a>
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
		<div class="col-2">
			<ul style="color: #062F4f; margin-top: 54%">
				<?php
					$nama=$this->session->userdata('nama');
					$no_kontak=$this->session->userdata('no_kontak');
					$email=$this->session->userdata('email');
				 ?>
				<li><?php echo $nama ?></li>
				<li><?php echo $no_kontak ?></li>
				<li><?php echo $email ?></li>
				<li>Alamat</li>
			</ul>
		</div>
		<div class="col-4"></div>
		<div class="col-2" style="height: 30%; color: #062F4f;">
 			<img class="img" src="<?php echo base_url(); ?>/assets/pictures/logo.jpg" alt="Logo Picture">
 		</div>
		<div class="col-1"></div>
	</div>

	<!-- Spacing -->
	<div class="row spacing"></div>

	<!-- Grey Line -->
	<div class="row" style="height: 15%; background-color: #D9D9D9">
		<div class="hr" style="margin: 1%;"><hr></div>
	</div>

	<!-- Spacing -->
	<div class="row spacing"></div>

	<!-- Teks "Iklan Tayang" -->
	<div class="row">
		<h1 style="color: #062F4f; margin-left: 9%">Iklan Tayang</h1>
	</div>
	<?php  
		if($properti->result() == NULL)
			{ ?>
				<center>
					<h1>Properti Anda Kosong</h1>
				</center>
			<?php }
		else
			{
			foreach ($properti->result() as $prop) 
				{ ?>
				<!-- Iklan Row 1 -->
				<div class="row" style="margin: 2%;">
					<div class="col-2"></div>
					<div class="col-8" style="display: flex;">
						<div class="col-5" style="height: 100%">
							<?php
								foreach ($properti->result() as $data)
									{ 
								   	echo"  <img src='".base_url("gambar/".$data->gambar)."' style=width:300px;height:180px; >";
									}
							?>
						</div>
						<div class="col-7">
							<ul style="color: #062F4f;">
								<li></li>
								<li><h4><a href=""><?php echo $prop->nama_properti;?></a></h4></li>
								<li></li><li></li>
								<li><h5>Rp.<?php echo $prop->harga_properti;?></h5></li>
								<li>Tipe Properti: <?php echo $prop->kategori_properti;?></li>
								<li>Status Jual: <?php echo $prop->status_properti;?></li>
								<li>Lokasi: <?php echo $prop->lokasi_properti;?></li>
							</ul>
						</div>
						</div>
					<div class="col-2"></div>
				</div>
	<?php } }?>

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
  <div class="footer" align="center">
      <h3>About Us</h3>
			Copyright &copy; 2017 <br>
			140810160054 - Ibnu Ahsani<br>
			140810160004 - Ahsan Nurrijal<br>
			140810179001 - Muhammad Affandi
  </div>    
</body>
</html>