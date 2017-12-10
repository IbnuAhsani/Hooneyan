<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">
	<meta charset="UTF-8">
	<title>Profile Page</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final5.css"> 
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
       <?php
				$email=$this->session->userdata('email');
				if(!$email){
			?>
			<li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
				<a class="navbar-button" href="<?php echo base_url(); ?>index.php/Login">Sign-In</a>
			</li>
			<?php }else{ ?>
			<li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
				<a class="navbar-button" href="<?php echo base_url(); ?>index.php/Login/user_logout">Sign-Out</a>
			</li>
			<li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
				<a class="navbar-button" href="<?php echo base_url(); ?>index.php/Profile_Page">My Profile</a>
			</li>
			<?php } ?>
   </ul>
   </nav>
	<!-- Spacing -->
	<br>
	<!-- Parent Div -->
	<div class="row" style="height: 880px; color: #062F4f">
		<div class="col-1"></div>
		<!-- Left Colomn -->
		<div class="col-7"> 
		<?php 
			foreach ($properti->result() as $prop) 
				{ ?>
			<div class="row">
			<?php 
			  	echo"<img src='".base_url("gambar/".$prop->gambar)."' style=width:785px;height:400px; >";		
			?>
			</div>
			<br>
			 <div class="round1" style="padding:20px;">
				<div class="row" style="height: 50px">
					<div class="col-6 font-color" style="font-size: 25px">Nama Properti: <?php echo $prop->nama_properti;?></div>
					<?php if($prop->isBooked == 0) {?>
						<div class="col-6 font-color" style="font-size: 18px">Status Properti: <font style="color: green">Available</font></div>
					<?php }else{ 
							if($prop->id_booker != 0 && $prop->konfirmasi == 0) {?>
								<div class="col-6 font-color" style="font-size: 18px">Status Properti: <font style="color: orange">Waiting For Confirmation</font></div>
					<?php }else{  ?>
								<div class="col-6 font-color" style="font-size: 18px">Status Properti: <font style="color: red">Booked</font></div>
					<?php }
							} ?>
				</div>
				<br>
				<div class="row" style="height: 50px">
					<div class="col-6 font-color" style="font-size: 20px">Lokasi: <?php echo $prop->lokasi_properti;?></div>
					<div class="col-6 font-color" style="font-size: 20px">Harga: Rp.<?php echo $prop->harga_properti;?></div>
				</div>
				<div class="row" style="height: 70px">
					<div class="col-12 font-color" style="font-size: 18px">
						<p >Deskripsi: <?php echo $prop->desc_properti;?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-6 font-color" style="font-size: 18px"><br>
						<font>Luas Bangunan: <?php echo $prop->luas_properti;?></font><br>
						<font>Luas Tanah: <?php echo $prop->luas_tanah;?></font><br>
						<font>Kamar Tidur: <?php echo $prop->jumlah_ktidur;?></font><br>
						<font>Kamar Mandi: <?php echo $prop->jumlah_kmandi;?></font><br>
					</div>
					<div class="col-6 font-color" style="font-size: 18px"><br>
						<font>Daya Listrik: <?php echo $prop->daya_listrik;?></font><br>
						<font>Jumlah Lantai: <?php echo $prop->jumlah_lantai;?></font><br>
						<font>Kondisi: <?php echo $prop->kondisi_properti;?></font><br>
					</div>
				</div>
				<br><br><br>
			</div>			
		</div>
		<!-- Right Colomn -->
		<?php 
			foreach ($agen->result() as $ag) 
				{ 
					foreach ($properti->result() as $prop) 
				{
					$email=$this->session->userdata('email');
					if(!$email)
						{ ?>
							<div class="col-3 round1" style="height: 310px">
						<?php
						}
					elseif($email && $this->session->userdata('id') != $ag->id)
						{ ?>
							<div class="col-3 round1" style="height: 370px">
						<?php
						}
					elseif($this->session->userdata('id') != $ag->id && $prop->isBooked == 1)
						{?>
							<div class="col-3 round1" style="height: 310px">
						<?php
						}
					elseif($this->session->userdata('id') == $ag->id && $prop->isBooked == 0)
						{ ?>
							<div class="col-3 round1" style="height: 370px">
						<?php
						}
					else
						{?>
							<div class="col-3 round1" style="height: 435px">
						<?php
						}
				 ?>
			<form action="<?php echo base_url('index.php/Properti_Page/book_properti'); ?>" style="text-align: center; margin: 0 auto " method="post">
				<!-- <img src="Profile_pic.png"> -->
				<img src="<?php echo base_url(); ?>/assets/pictures/Profile_pic.png" height="144px" width="144px">
				<input type="hidden" name="id_properti" value="<?php echo $prop->id_properti;?>">
				<input type="hidden" name="harga_properti" value="<?php echo $prop->harga_properti;?>">
				<input type="hidden" name="tipe_akun" value="<?php echo $ag->tipe_akun;?>">
				<input type="hidden" name="email" value="<?php echo $ag->email;?>">
				<?php } ?>
					<input type="hidden" name="id_agen" value="<?php echo $ag->id;?>">
					<input type="hidden" name="id_booker" value="<?php echo $this->session->userdata('id');?>">
				<h2 class="font-color">Nama Agen<br><?php echo $ag->nama;?></h2>
				<h4 class="font-color">No Kontak<br><?php echo $ag->no_kontak;?></h4>
				<?php 
				$email=$this->session->userdata('email');
				if(!$email)
					{}
				else
					{
						if($this->session->userdata('id') != $ag->id && $prop->isBooked == 0)
							{ ?>
									<input class="button button-blue" type="submit" name="book" value="Book">
								<?php 
							}
					}	 
				if($this->session->userdata('id') == $ag->id)
					{	
						?>
						<input class="button button-orange" type="submit" name="edit" value="Edit Properti">
						<input class="button button-maroon" type="submit" name="delete" value="Hapus Properti"><br>
						<?php 
							if($prop->isBooked != 0)
								{ ?>
									<font class="font-color">Konfirmasi Booking:</font><br>		
									<input class="button button-green" type="submit" name="confirm" value="Konfirmasi">
									<input class="button button-red" type="submit" name="deny" value="Batalkan">
					<?php
								}
					}
				?>
			</form>
			<?php } ?> 
		<?php } ?>
		</div>
		<div class="col-1"></div>
	</div>
   <!-- Footer -->
  <div class="footer font-only" align="center">
			<br>Copyright &copy; 2017<br><br>
			140810160054 - Ibnu Ahsani |
			140810160004 - Ahsan Nurrijal |
			140810179001 - Muhammad Affandi
  </div>  
</body>
</html>