<?php
$email=$this->session->userdata('email');

if(!$email){

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
   </ul>
   </nav>

	<!-- Form Row 1 -->
	<div class="row">
		<div class="col-1"></div>
		<form class="col-10" action="<?php echo base_url('index.php/Daftar_Properti/tambah_properti'); ?>" method="post"  enctype="multipart/form-data">
			<br><br><br>
			<h2>Daftar Properti</h2>
	  		<div class="row">
	  			<div class="col-6">
			  		<label>Nama Properti</label><br>
			  		<input name="nama_properti" type="textarea" placeholder="Nama Properti">
	  			</div>
	  			<div class="col-6">
			  		<label>Deskripsi</label><br>
			  		<input name="desc_properti" type="textarea" placeholder="Deskripsi Properti" >
	  			</div>
	  		</div>

			<div class="row">
				<div class="col-6">
	  				Kategori Properti<br>
	  				<select name="kategori_properti">
					<option value="rumah">Rumah</option>
					<option value="ruko">Ruko</option>
					<option value="apartemen">Apartemen</option>
					<option value="villa">Villa</option>
					</select>
				</div>
				<div class="col-6">
	  				Opsi Properti<br>
	  				<select name="status_properti">
					<option value="jual">Jual</option>
					<option value="sewa">Sewa</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Kondisi Properti<br>
	  				<select name="kondisi_properti">
					<option value="bagus">Bagus</option>
					<option value="layak">Layak</option>
					<option value="kurang">Kurang</option>
					</select>
				</div>
				<div class="col-6">
	  				Lokasi Properti<br>
	  				<input type="textarea" name="lokasi_properti" placeholder="Kota / Kabupaten">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Luas Properti<br>
	  				<input name="luas_properti" type="textarea" placeholder="Satuan m2">
				</div>
				<div class="col-6">
	  				Luas Tanah<br>
	  				<input name="luas_tanah" type="textarea" placeholder="Satuan m2">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Jumlah Lantai<br>
	  				<input type="number" name="jumlah_lantai" placeholder="Masukkan dalam Angka">
				</div>
				<div class="col-6">
	  				Daya Listrik<br>
	  				<input type="textarea" name="daya_listrik" placeholder="Satuan Watt">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Jumlah Kamar<br>
	  				<input type="number" name="jumlah_ktidur" placeholder="Masukkan dalam Angka">
				</div>
				<div class="col-6">
	  				Jumlah Kamar Mandi<br>
	  				<input type="number" name="jumlah_kmandi" placeholder="Masukkan dalam Angka">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
	  				Jumlah Garasi<br>
	  				<input type="number" name="jumlah_garasi" placeholder="Masukkan dalam Angka">
				</div>
				<div class="col-6">
	  				Harga Properti<br>
	  				<input type="textarea" name="harga_properti" placeholder="Rp.100000000">
				</div>
			</div>

			<div class="row">
				<div class="col-6">
				    Gambar Properti<br>
					<input type=file name='gambar' > 
					
				</div>
				<div class="col-6">
	  				<input type="submit" name="submit" value="Daftarkan">
				</div>
			</div>
		</form>	

	</div>

<div class="col-1"></div>
<div class="col-1"></div>

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