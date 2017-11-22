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
	<title>Daftar Properti</title>
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
</head>
<body class="container-fluid" style="margin: 0"px>
	<!-- Upper Task Bar -->
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
      <li style="width: 40%; float: left;"><input type="text" class="search1" name="search" placeholder="Search.."></li>
      <li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
         <button class="dropbtn" style="font-size: 13px"><?php echo anchor('Login/user_logout','Sign-Out'); ?></button>
      </li>
      <li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
         <button class="dropbtn" style="font-size: 13px"><a href="<?php echo base_url(); ?>/index.php/Profile_Page">My Profile</button></a>
      </li>
   </ul>
   </nav>

	<!-- Form Row 1 -->
	<div class="row">
		<div class="col-1"></div>
			<form class="col-10" role="form" method="POST" action="<?php echo base_url('index.php/Daftar_Properti/register_properti'); ?>">
				<br><br><br>
				<h2>Daftar Properti</h2>
		  		<div class="row">
		  			<div class="col-6">
				  		<label>Nama Properti</label><br>
				  		<input id="NamaProperti" type="textarea" placeholder="Nama Properti" name="nama_properti">
		  			</div>
		  			<div class="col-6">
				  		<label>Deskripsi</label><br>
				  		<input id="Deskripsi" type="textarea" placeholder="Deskripsi Properti" nama="desc_properti">
		  			</div>
		  		</div>
		  	</form>
	  </div>
	<!-- Form Row 2 -->
	<div class="row">
		<div class="col-1"></div>
		<form class="col-10" role="form" method="POST" action="<?php echo base_url('index.php/Daftar_Properti/register_properti'); ?>"> 	
			<div class="row">
				<div class="col-6">
	  				Kategori Properti<br>
	  				<select name="mydropdown">
					<option name="tipe_properti" value="Rumah">Rumah</option>
					<option name="tipe_properti" value="Ruko">Ruko</option>
					<option name="tipe_properti" value="Apartemen">Apartemen</option>
					<option name="tipe_properti" value="Villa">Villa</option>
					</select>
				</div>
				<div class="col-6">
	  				Opsi Penjualan<br>
	  				<select name="mydropdown">
					<option name="status_properti" value="Jual">Jual</option>
					<option name="status_properti" value="Sewa">Sewa</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Luas Bangunan<br>
	  				<input type="textarea" id="LuasBangunan" name="luas_properti" placeholder="Satuan m2">
				</div>
				<div class="col-6">
	  				Luas Tanah<br>
	  				<input type="textarea" id="Luas Tanah" name="luas_tanah" placeholder="Satuan m2">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Jumlah Kamar<br>
	  				<input type="textarea" id="JumlahKamar" name="jumlah_ktidur" placeholder="Masukkan dalam Angka">
				</div>
				<div class="col-6">
	  				Jumlah Kamar Mandi<br>
	  				<input type="textarea" id="JumlahKamarMandi" name="jumlah_kmandi" placeholder="Masukkan dalam Angka">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Daya Listrik<br>
	  				<input type="textarea" id="DayaListrik" name="daya_listrik" placeholder="Satuan Watt">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Jumlah Lantai<br>
	  				<input type="textarea" id="Jumlah Lantai" name="jumlah_lantai" placeholder="Masukkan dalam Angka">
				</div>
				<div class="col-6">
	  				Kondisi Properti<br>
	  				<select name="mydropdown">
					<option name="kondisi_properti" value="Bagus">Bagus</option>
					<option name="kondisi_properti" value="Layak">Layak</option>
					<option name="kondisi_properti" value="Kurang">Kurang</option>
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
<<<<<<< HEAD
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
||||||| merged common ancestors
	</div>
=======
>>>>>>> b248b48883c15a6830d3c67f57c1849d795f7c3b
</body>
</html>