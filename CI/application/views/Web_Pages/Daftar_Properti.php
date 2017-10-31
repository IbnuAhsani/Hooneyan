<html>
<head>
	<meta charset="UTF-8">
	<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="../Final.css">
	
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
	<nav>
	<ul class="nav-bar">
	  <li class="logo"><img src="../Pictures/house.png"></li>
	  <li class="dropdown">
	    <button href="javascript:void(0)" class="dropbtn">Menu</button> 
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
		<li><input type="text" name="search" placeholder="Search.."></li>
		<li class="login">
			<button class="dropbtn">Sign-Up / Login</button>
		</li>
	</ul>
	</nav>

	<!-- Form Row 1 -->
	<div class="row">
		<div class="col-1"></div>
		<form class="col-10" action="/action_page.php">
			<br><br><br>
			<h2>Daftar Properti</h2>
	  		<div class="row">
	  			<div class="col-6">
			  		<label>Nama Properti</label><br>
			  		<input id="NamaProperti" type="text" value="Nama Properti">
	  			</div>
	  			<div class="col-6">
			  		<label>Deskripsi</label><br>
			  		<input id="Deskripsi" type="text" value="Deskripsi Properti">
	  			</div>
	  		</div>
	  	</form>
	  </div>

	<!-- Form Row 2 -->
	<div class="row">
		<div class="col-1"></div>
		<form class="col-10" action="/action_page.php"> 	
			<div class="row">
				<div class="col-6">
	  				Kategori Properti<br>
	  				<select name="mydropdown">
					<option value="Rumah">Rumah</option>
					<option value="Ruko">Ruko</option>
					<option value="Apartemen">Apartemen</option>
					<option value="Villa">Villa</option>
					</select>
				</div>
				<div class="col-6">
	  				Opsi Properti<br>
	  				<select name="mydropdown">
					<option value="Jual">Jual</option>
					<option value="Sewa">Sewa</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Luas Bangunan<br>
	  				<input id="LuasBangunan" type="text" value="Satuan m2">
				</div>
				<div class="col-6">
	  				Luas Tanah<br>
	  				<input id="Luas Tanah" type="text" value="Satuan m2">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Jumlah Kamar<br>
	  				<input id="JumlahKamar" type="text" value="Masukkan dalam Angka">
				</div>
				<div class="col-6">
	  				Jumlah Kamar Mandi<br>
	  				<input id="JumlahKamarMandi" type="text" value="Masukkan dalam Angka">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Daya Listrik<br>
	  				<input id="DayaListrik" type="text" value="Satuan Watt">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Jumlah Lantai<br>
	  				<input id="Jumlah Lantai" type="text" value="Masukkan dalam Angka">
				</div>
				<div class="col-6">
	  				Kondisi Properti<br>
	  				<select name="mydropdown">
					<option value="Rumah">Bagus</option>
					<option value="Ruko">Layak</option>
					<option value="Apartemen">Kurang</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
				</div>
				<div class="col-6">
	  				<input type="submit" value="Daftarkan">
				</div>
			</div>
		</form>	
		<div class="col-1"></div>
	</div>
	</form> 
	<div class="col-1"></div>
	</div>
</body>
</html>