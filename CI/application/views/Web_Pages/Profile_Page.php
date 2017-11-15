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
	  <li style="margin: 11px; margin-left: 20; float: left;"><img src="<?php echo base_url(); ?>/assets/pictures/house.png" style="height: 42px; width: 42px"></li>
	  <li class="dropdown" style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 80px; float: left;">
	    <button href="javascript:void(0)" class="dropbtn" style="font-size: 13px">Menu</button> 
		    <div class="dropdown-content">
		      <a href="#">| Jual</a>
		      <a href="#">Rumah</a>
		      <a href="#">Ruko</a>
		      <a href="#">Apartemen</a>
		      <a href="#">| Sewa</a>
		      <a href="#">Rumah</a>
		      <a href="#">Apartemen</a>
		      <a href="#">Ruko</a>
		      <a href="#">Villa</a>
		    </div>
		 </li>
		<li style="width: 40%; float: left;"><input type="text" name="search" placeholder="Search.."></li>
		<li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
			<button class="dropbtn" style="font-size: 13px">Sign-Up / Login</button>
		</li>
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
				<li>Nama Agen</li>
				<li>No Kontak</li>
				<li>e-mail</li>
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
		<div class="hr" style="margin-top: 3%"><hr></div>
	</div>

	<!-- Spacing -->
	<div class="row spacing"></div>

	<!-- Teks "Iklan Tayang" -->
	<div class="row">
		<h1 style="color: #062F4f; margin-left: 9%">Iklan Tayang</h1>
	</div>

	<!-- Iklan Row 1 -->
	<div class="row" style="margin: 2%;">
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
		<div class="col-6" style="display: flex;">
			<div class="col-5" style="height: 100%">
				<img class="img" src="<?php echo base_url(); ?>/assets/pictures/rumah2.jpg" alt="Gambar Properti">
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
	</div>

	<!-- Iklan Row 2 -->
	<div class="row" style="margin: 2%;">
		<div class="col-6" style="display: flex;">
			<div class="col-5" style="height: 100%">
				<img class="img" src="<?php echo base_url(); ?>/assets/pictures/rumah2.jpg" alt="Gambar Properti">
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
	</div>


	<!-- Iklan Row 3 -->
	<div class="row" style="margin: 2%;">
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
	</div>
	
	<!-- Spacing -->
	<div class="row spacing"></div>

	<!-- Footer -->
	<div class="Footer">
		<p>Footer</p>
	</div>
</body>
</html>