<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hooneyan</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src = "<?php echo base_url(); ?>/assets/js/jquery.cycle2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final.css">

</head>

<body class="container-fluid" style="margin: 0"px>   
   <!-- Upper Task Bar -->
	<nav cl>
		<ul style="background-color: #062F4f; width: 100% ; margin: 0px">
			<li style="margin: 11px; margin-left: 20; float: left;"><a href="<?php echo base_url(); ?>index.php/Homepage">
				<img src="<?php echo base_url(); ?>/assets/pictures/house.png" style="height: 42px; width: 42px"></a>
			</li>
			<li class="dropdown" style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 80px; float: left;">
				<button href="javascript:void(0)" class="dropbtn" style="font-size: 13px">Menu</button> 
				<div class="dropdown-content">
					<a href="#">| Jual</a>
					<a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Rumah</a>
					<a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Ruko</a>
					<a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Apartemen</a>
					<a href="#">| Sewa</a>
					<a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Rumah</a>
					<a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Apartemen</a>
					<a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Ruko</a>
					<a href="<?php echo base_url(); ?>index.php/JualSewa_Page">Villa</a>
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

   <!-- SlideShow -->
   <div class="cycle-slideshow">
     <span class="cycle-prev">&#9001;</span>
     <!-- Untuk membuat tanda panah di kiri slider -->
     <span class="cycle-next">&#9002;</span>
     <!-- Untuk membuat tanda panah di kanan slider -->
     <span class="cycle-pager"></span>
     <!-- Untuk membuat tanda bulat atau link pada slider -->
	 <?php
	foreach ($properti->result() as $data){ 
   echo"  <img class='home_page carousel-size-homepage' src='".base_url("gambar/".$data->gambar)."' >";
	}

?>
   </div>

   <!-- Spacing -->
   <div class="row spacing"></div>

   <!-- Grey Line -->
   <div class="row" style="height: 15%; background-color: #D9D9D9">
     <div class="col-sm-4"></div>
     <div class="col-sm-6">
         <form>
            <span><input type="text" class="search rounded" placeholder="Search..."></span>
         </form>
     <div class="col-sm-2"></div>
    </div>
   </div>

   <!-- Spacing -->
   <div class="row spacing"></div>
   

   <!-- Grey Line -->
   <div class="row" style="height: 15%;">
      <div class="hr" style="margin-top: 3%"><hr></div>
   </div>

  <!-- Iklan Terbaru -->
  <h2 id="kiri">Terbaru</h2><br>
  <div class="row" style=" margin-left:30px;">
  <?php
if( ! empty($properti)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
	foreach ($properti->result() as $data){ 
		echo "  <div class='row' style=' margin-left:30px;'>";
   echo" <a href='Properti_Page' style='text-decoration:none'>";
   echo"  <div class='col-sm-4'><img src='".base_url("gambar/".$data->gambar)."' alt='rumah' style='width:304px;height:228px;'>";
   echo"   <br>";
   echo"   <h3><font color='black'>".$data->nama_properti."</font></h3>";
   echo"   <h5><font color='black'>".$data->lokasi_properti."</font></h5>";
   echo" </a>
    </div>
   
  </div>";
	}
}else{ // Jika data tidak ada
	echo "<p>Data tidak ada</p>";
}
?>
  </div>


   <!-- Spacing -->
   <div class="row spacing"></div>

   <!-- Footer -->
  <div class="footer" align="center">
      <h3>About Us</h3>
			Copyright &copy; 2017 <br>
			140810160054 - Ibnu Ahsani<br>
			140810160004 - Ahsan Nurrijal<br>
			1408101790001 - Muhammad Affandi

  </div>    
</body>
</html>
