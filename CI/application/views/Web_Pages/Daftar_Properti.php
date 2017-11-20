<?php
$email=$this->session->userdata('email');

if(!$email){

  redirect('Login');
}

 ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Final.css") ?>">

	
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
      <li style="margin: 11px; margin-left: 20; float: left;"><a href="http://localhost/CI/index.php/Homepage"><img src="<?php echo base_url(); ?>/assets/pictures/house.png" style="height: 42px; width: 42px"></a></li>
     <li class="dropdown" style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 80px; float: left;">
       <button href="javascript:void(0)" class="dropbtn" style="font-size: 13px">Menu</button> 
          <div class="dropdown-content">
            <a href="#">| Jual</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Rumah</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Ruko</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Apartemen</a>
            <a href="#">| Sewa</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Rumah</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Apartemen</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Ruko</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Villa</a>
          </div>
       </li>
      <li style="width: 40%; float: left;"><input type="text" name="search" placeholder="Search.."></li>
	 
      <li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
         <button class="dropbtn" style="font-size: 13px"><?php echo anchor('Login/user_logout','Sign-Out'); ?></button>
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
			  		<input id="NamaProperti" type="textarea" value="Nama Properti">
	  			</div>
	  			<div class="col-6">
			  		<label>Deskripsi</label><br>
			  		<input id="Deskripsi" type="textarea" value="Deskripsi Properti">
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
	  				<input id="LuasBangunan" type="textarea" value="Satuan m2">
				</div>
				<div class="col-6">
	  				Luas Tanah<br>
	  				<input id="Luas Tanah" type="textarea" value="Satuan m2">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Jumlah Kamar<br>
	  				<input id="JumlahKamar" type="textarea" value="Masukkan dalam Angka">
				</div>
				<div class="col-6">
	  				Jumlah Kamar Mandi<br>
	  				<input id="JumlahKamarMandi" type="textarea" value="Masukkan dalam Angka">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Daya Listrik<br>
	  				<input id="DayaListrik" type="textarea" value="Satuan Watt">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Jumlah Lantai<br>
	  				<input id="Jumlah Lantai" type="textarea" value="Masukkan dalam Angka">
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