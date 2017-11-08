<html>
<head>
	<meta charset="UTF-8">
	<title>Jual Sewa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assests/Final.css">

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
	  <li style="margin: 11px; margin-left: 20; float: left;"><img src="<?php echo base_url(); ?>/assests/pictures/house.png" style="height: 42px; width: 42px"></li>
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

	</span>
	<center>
		<form id="search">
			<span>
					<select name="mydropdown">
				<option value="jual">Jual</option>
				<option value="sewa">Sewa</option>
				</select>
			<input name="search" type="text" size="50" placeholder="Search..." />
			<input type="submit" name="" value="cari">
		</form>
	</center>
	<!-- lokasi populer -->
	<div class="container" align="center">
<div class="content-bordered-box">


				<!-- RIGHT COLUMN - POPULAR LOCATION ITEMS -->
				<div class="col-md-10 border-right">
						<div class="sub-area">

								<div class="sub-area-title">
										<h3>Lokasi populer</h3>
								</div>

								<!-- Start sub area small -->
								<div class="sub-area-lists list-small" id="lokasi">

										<ul>
												<li><a href="lokasi1.html" >Lokasi 1</a></li>
												<li><a href="lokasi2.html" >Lokasi 2</a></li>
												<li><a href="lokasi3.html" >Lokasi 3</a></li>
												<li><a href="lokasi4.html" >Lokasi 4</a></li>
												<li><a href="lokasi5.html" >Lokasi 5</a></li>
										</ul>

										<ul>
											<li><a href="lokasi6.html" >Lokasi 6</a></li>
											<li><a href="lokasi7.html" >Lokasi 7</a></li>
											<li><a href="lokasi8.html" >Lokasi 8</a></li>
											<li><a href="lokasi9.html" >Lokasi 9</a></li>
											<li><a href="lokasi10.html" >Lokasi 10</a></li>
										</ul>

																</div>

				</div>
				<!-- END RIGHT COLUMN - POPULAR LOCATION ITEMS -->

		</div>

</div>

</div>
</div>
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
				<img class="img" src="<?php echo base_url(); ?>/assests/pictures/rumah1.jpg" alt="Gambar Properti">
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
				<img class="img" src="<?php echo base_url(); ?>/assests/pictures/rumah2.jpg" alt="Gambar Properti">
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
				<img class="img" src="<?php echo base_url(); ?>/assests/pictures/rumah3.jpg" alt="Gambar Properti">
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
	<div class="Footer">
		<p>Footer</p>
	</div>
</body>
</html>
