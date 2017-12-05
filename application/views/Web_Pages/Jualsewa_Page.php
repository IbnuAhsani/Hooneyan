<html>
<head>
	<meta charset="UTF-8">
	<title>Jual Sewa</title>
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
      <li style="margin: 11px; margin-left: 20; float: left;"><a href="<?php echo base_url(); ?>/index.php/Homepage"><img src="<?php echo base_url(); ?>/assets/pictures/house.png" style="height: 42px; width: 42px"></a></li>
     <li class="dropdown" style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 80px; float: left;">
       <button href="javascript:void(0)" class="dropbtn" style="font-size: 13px">Menu</button> 
          <div class="dropdown-content">
            <a href="#">| Jual</a>
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Rumah</a>
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Ruko</a>
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Apartemen</a>
            <a href="#">| Sewa</a>
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Rumah</a>
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Apartemen</a>
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Ruko</a>
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Villa</a>
          </div>
       </li>
      	<?php
				$email=$this->session->userdata('email');
				if(!$email){
			?>
			<li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
				<button class="dropbtn" style="font-size: 13px"><a href="<?php echo base_url(); ?>index.php/Login">Sign-In</button></a>
			</li>
			<?php }else{ ?>
			<li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
				<button class="dropbtn" style="font-size: 13px"><?php echo anchor('Login/user_logout','Sign-Out'); ?></button>
			</li>
			<li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
				<button class="dropbtn" style="font-size: 13px"><a href="<?php echo base_url(); ?>index.php/Profile_Page">My Profile</button></a>
			</li>
			<?php } ?>
   </ul>
   </nav>
	<center>
		<h1>Jual Rumah</h1>
	</center>
	<!-- Spacing -->
	<div class="container" id="body">
		<div class="content-bordered-box row-centered">
			<!-- dropdown -->
			<div class="row" >
				<div class="down">
					<select id="" name="harga">
						<option value="" disabled selected>Harga</option>
						<option value="50">&gt; Rp.50.000.000,-</option>
						<option value="100">&gt; Rp.100.000.000,-</option>
						<option value="150">&gt; Rp.150.000.000,-</option>
						<option value="200">&gt; Rp.200.000.000,-</option>
					</select>
					<select id="" name="luas_bangunan">
						<option value="" disabled selected>Luas Bangunan</option>
						<option value="50">50m2</option>
						<option value="100">100m2</option>
						<option value="150">150m2</option>
						<option value="200">200m2</option>
					</select>
					<select id="" name="luas_tanah">
						<option value="" disabled selected>Luas Tanah</option>
						<option value="50">50m2</option>
						<option value="100">100m2</option>
						<option value="150">150m2</option>
						<option value="200">200m2</option>
					</select>
					<button type="reset" name="reset_filter"> Reset Filter</button>
				</div>
			</div>
			<!-- Row 1 -->
			<div class="row" style="margin: 2%;" >
				<div class="col-12" style="display: flex;">
					<div class="col-5" style="height: 100%">
						<img class="img" src="<?php echo base_url(); ?>/assets/pictures/rumah1.jpg" alt="Gambar Properti">
					</div>
					<div class="col-4">
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
			<!-- Row 2 -->
			<div class="row" style="margin: 2%;" >
				<div class="col-12" style="display: flex;">
					<div class="col-5" style="height: 100%">
						<img class="img" src="<?php echo base_url(); ?>/assets/pictures/rumah2.jpg" alt="Gambar Properti">
					</div>
					<div class="col-4">
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
			<!-- Row 3 -->
			<div class="row" style="margin: 2%;" >
				<div class="col-12" style="display: flex;">
					<div class="col-5" style="height: 100%">
						<img class="img" src="<?php echo base_url(); ?>/assets/pictures/rumah3.jpg" alt="Gambar Properti">
					</div>
					<div class="col-4">
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
			<div align="center">
				<a href="#" >1</a>&nbsp
				<a href="#" >2</a>&nbsp
				<a href="#" >3</a>&nbsp
				<a href="#" >4</a>&nbsp
				<a href="#" >...</a>&nbsp
				<a href="#" >Last</a>&nbsp
				<a href="#" >Selanjutnya</a>&nbsp
			</div>
		</div>
	</div>


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
