<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">
 <title>Hooneyan</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script type="text/javascript" src = "<?php echo base_url(); ?>/assets/js/jquery.cycle2.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final3.css">
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
   <!-- SlideShow -->
   <div class="cycle-slideshow">
     <span class="cycle-pager"></span>
     <!-- Untuk membuat tanda bulat atau link pada slider -->
		 <?php
				foreach ($properti->result() as $prop)
					{ 
				   	echo"  <img class='home_page carousel-size-homepage' src='".base_url("gambar/".$prop->gambar)."' >";
					}
			?>
   </div>
   <!-- Spacing -->
   <div class="row spacing"></div>
  <!-- Grey Line -->
  <div class="row" style="height: 15%;">
    <div class="hr" style="margin-top: 3%"><hr></div>
  </div>
   <!-- Spacing -->
   <div class="row spacing"></div>
  <!-- Iklan Terbaru -->
  <h1 class="font-color" id="kiri"><u>Terbaru</u></h1><br>
	  <div class="row">
	  	<div class="col-1" style="margin-right: 50px"></div>
		  <?php 
		  	$i=1;
		  	if(!empty($properti))
		  		{
		  			foreach($properti->result() as $prop)
		  				{
		  					if($i<4)
		  					{ ?>
			  					<div class="col-3">
										<form id="<?php echo $i; ?>" action='http://localhost/Hooneyan/index.php/Properti_Page/get_data' method='post'>
												<img src="<?php echo base_url(); ?>/gambar/<?php echo $prop->gambar;?>" alt='rumah' style='width: 304px; height: 228px;'>
												<br>
												<input type='hidden' name='id_properti' value='<?php echo $prop->id_properti;?>'>
												<input type='hidden' name='id_agen' value='<?php echo $prop->id_agen;?>'>
												<h2><a class="font-color" style="margin: 0" onclick="document.getElementById('<?php echo $i; ?>').submit()"><?php echo $prop->nama_properti;?></a></h2>
												<h4 class='font-color' style="margin-bottom: 0"><?php echo $prop->lokasi_properti;?></h4>
												<?php 
													if($prop->isBooked == 0) 
														{ ?>
															<font class='font-color' style='font-size: 15px'>
																Status Properti: <font style='color: green'>Available</font>
															</font>
	 											<?php 
	 													}
	 												else
	 													{ 
															if($prop->id_booker != 0 && $prop->konfirmasi == 0) 
																{	?>
																	<font class='font-color' style='font-size: 15px'>
																		Status Properti: <font style='color: orange'>Waiting For Confirmation</font>
																	</font>						
	 													<?php 
	 															}
	 														else
	 															{ ?>
																	<font class='font-color' style='font-size: 15px'>
																		Status Properti: <font style='color: red'>Booked</font>
																	</font>
	 															<?php
	 															}
	 													} 
	 											?>
										</form>
			  					</div>
		  				<?php 
		  					}
		  					$i++;
		  				}
		  		}
		  	else
		  		{ ?>
						<p>Data tidak ada</p>
		  		<?php
		  		}
		   ?>
			<div class="col-1"></div>
	  </div>
	  <br><br>
	  <div class="row">
	  	<div class="col-1"  style="margin-right: 50px"></div>
		  <?php 
		  	$j=1;
		  	if(!empty($properti))
		  		{
		  			foreach($properti->result() as $prop)
		  				{
		  					if($j<4)
		  						{
		  							$j++;
		  						}
		  					else
		  					{ ?>
			  					<div class="col-3">
										<form id="<?php echo $j; ?>" action='http://localhost/Hooneyan/index.php/Properti_Page/get_data' method='post'>
												<img src="<?php echo base_url(); ?>/gambar/<?php echo $prop->gambar;?>" alt='rumah' style='width: 304px; height: 228px;'>
												<br>
												<input type='hidden' name='id_properti' value='<?php echo $prop->id_properti;?>'>
												<input type='hidden' name='id_agen' value='<?php echo $prop->id_agen;?>'>
												<h2><a class="font-color" style="margin: 0" onclick="document.getElementById('<?php echo $j; ?>').submit()"><?php echo $prop->nama_properti;?></a></h2>
												<h4 class='font-color' style="margin-bottom: 0"><?php echo $prop->lokasi_properti;?></h4>
												<?php 
													if($prop->isBooked == 0) 
														{ ?>
															<font class='font-color' style='font-size: 15px'>
																Status Properti: <font style='color: green'>Available</font>
															</font>
	 											<?php 
	 													}
	 												else
	 													{ 
															if($prop->id_booker != 0 && $prop->konfirmasi == 0) 
																{	?>
																	<font class='font-color' style='font-size: 15px'>
																		Status Properti: <font style='color: orange'>Waiting For Confirmation</font>
																	</font>						
	 													<?php 
	 															}
	 														else
	 															{ ?>
																	<font class='font-color' style='font-size: 15px'>
																		Status Properti: <font style='color: red'>Booked</font>
																	</font>
	 															<?php
	 															}
	 													} 
	 											?>
										</form>
			  					</div>
		  				<?php 
		  					}
		  				}
		  		}
		   ?>
			<div class="col-1"></div>
	  </div>
		<br><br>
   <!-- Spacing -->
   <div class="row spacing"></div>
   <!-- Footer -->
  <div class="footer font-only" align="center">
			<br>Copyright &copy; 2017 <br><br>
			140810160054 - Ibnu Ahsani |
			140810160004 - Ahsan Nurrijal |
			140810179001 - Muhammad Affandi <br>
  </div>    
</body>
</html>
