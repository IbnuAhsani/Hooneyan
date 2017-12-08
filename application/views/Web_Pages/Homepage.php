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
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Rumah</a>
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Ruko</a>
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Apartemen</a>
					<a class="navbar-list" href="#">| Sewa</a>
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Rumah</a>
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Apartemen</a>
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Ruko</a>
					<a class="navbar-list" href="<?php echo base_url(); ?>index.php/JualSewa_Page">Villa</a>
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
  <div class="row" style="height: 15%; background-color: #D9D9D9">
    <div class="hr" style="margin-top: 3%"><hr></div>
  </div>
   <!-- Spacing -->
   <div class="row spacing"></div>
  <!-- Iklan Terbaru -->
  <h1 class="font-color" id="kiri"><u>Terbaru</u></h1><br>
	  <div class="row" style=" margin-left:100px;">
		  <?php
				if(!empty($properti))
					{ 
						// Jika data pada database tidak sama dengan empty (alias ada datanya)
						foreach ($properti->result() as $prop)
							{
								echo "<form action='http://localhost/Hooneyan/index.php/Properti_Page/get_data' method='post'>"; 
								echo "<div class='row' style=' margin-left:30px;'>";
							  echo " 	<div class='col-sm-4'>";
							  echo "		<img src='".base_url("gambar/".$prop->gambar)."' alt='rumah' style='width: 304px; height: 228px;'>";
							  echo "   		<br>";
							  echo "			<input type='hidden' name='id_properti' value='".$prop->id_properti."'>";
							  echo "			<input type='hidden' name='id_agen' value='".$prop->id_agen."'>";
 							  echo "   		<input class='linkButton' type='submit' value='".$prop->nama_properti."'>";
							  echo "   		<h2 class='font-color'>".$prop->lokasi_properti."</h2>";
							  if($prop->isBooked == 0){
							  	echo "   		<h3 class='font-only' style='color: green'>Available</h3>";							  	
							  }
							  else{
							  	echo "   		<h3 class='font-only' style='color: orange'>Waiting For Confirmation</h3>";
							  }
							  echo " 		</div>
							  			</div>
  										</form>";
							}
					}
				else
					{ 
						// Jika data tidak ada
						echo "<p>Data tidak ada</p>";
					}
			?>
	  </div>
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
