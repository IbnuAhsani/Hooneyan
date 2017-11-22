<?php
$email=$this->session->userdata('email');

if(!$email){

  redirect('Login');
}

 ?>
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
      <li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
         <button class="dropbtn" style="font-size: 13px"><?php echo anchor('Login/user_logout','Sign-Out'); ?></button>
      </li>
   </ul>
   </nav>

	</span>
	<center>
		<form id="search">
			<span>
					<select name="mydropdown">
				<option value="jual">Jual</option>
				<option value="sewa">Sewa</option>
				</select>
			<input name="search" type="text" size="50" placeholder="Search..." />
			<input type="submit" name="" value="Cari">
		</form>
	</center>

	<!-- Spacing -->
	<div class="row spacing"></div>
	<div class="container" id="body">
<div class="content-bordered-box row-centered">
	<!-- dropdown -->
	<div class="row" >
		<div class="down">
				<select id="" name="tipe_properti">
						<option selected="selected" value="rumah">Rumah</option>
						<option value="apartemen">Apartemen</option>
						<option value="ruko">Ruko</option>
						<option value="villa">Villa</option>
				</select>
				<select id="" name="harga">
						<option selected="selected" value="50jt">&gt; Rp.50.000.000,-</option>
						<option value="100jt">&gt; Rp.100.000.000,-</option>
						<option value="150jt">&gt; Rp.150.000.000,-</option>
						<option value="200jt">&gt; Rp.200.000.000,-</option>
				</select>
				<select id="" name="luas_bangunan">
						<option selected="selected" value="50m2">50 m2</option>
						<option value="100m2">100 m2</option>
						<option value="150m2">150 m2</option>
						<option value="200m2">200 m2</option>
				</select>
				<select id="" name="luas_tanah">
					<option selected="selected" value="50m2">50 m2</option>
					<option value="100m2">100 m2</option>
					<option value="150m2">150 m2</option>
					<option value="200m2">200 m2</option>
			</select>
			<button type="reset" name="reset_filter"> Reset Filter</button>
				</select>

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
	<div align="center"><a href="#" >1</a>&nbsp<a href="#" >2</a>&nbsp<a href="#" >3</a>&nbsp<a href="#" >4</a>&nbsp<a href="#" >...</a>&nbsp<a href="#" >Last</a>&nbsp<a href="#" >Selanjutnya</a>&nbsp</div>

</div>
</div>

	<!-- Footer -->
  <div class="footer">
      <h5>About Us</h5>
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3"><img src="<?php echo base_url(); ?>/assets/pictures/fb.png" alt="facebook" style="width:50px;height:50px;">
        </div>
        <div class="col-sm-3"><img src="<?php echo base_url(); ?>/assets/pictures/twit.png" alt="twitter" style="width:50px;height:50px;;">
        </div>
        <div class="col-sm-3"><img src="<?php echo base_url(); ?>/assets/pictures/wa.png" alt="whatsapp" style="width:50px;height:50px;;">
        </div>                
        <div class="col-sm-2"><img src="<?php echo base_url(); ?>/assets/pictures/ig.png" alt="instagram" style="width:50px;height:50px;;">
        </div>
      </div>
  </div>   
</body>
</html>
