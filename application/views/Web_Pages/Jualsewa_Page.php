<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">
	<meta charset="UTF-8">
	<title>Jual Sewa</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final.css">
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final3.css">
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
	<center>
		<h1 class="font-color"><u>Sewa Jual Properti</u></h1>
	</center>
	<!-- Spacing -->
	<div class="container" id="body">
		<div class="content-bordered-box row-centered">
			<!-- dropdown -->
				<?php 
				foreach ($properti->result() as $j)
				{
	 ?>
			<div class="row" style="margin: 2%;" >
				<div class="col-12" style="display: flex;">
					<div class="col-5" style="height: 100%">
						<?php	echo "<img class='img' src='".base_url("gambar/".$j->gambar)."' alt='properti'>";?>
					</div>
					<div class="col-4">
						<ul class="navbar-list">
							<li><h4 class="navbar-list">Nama Properti : <?php echo $j->nama_properti;?></h4></li>
							<li></li><li></li>
							<li><h5 class="navbar-list">Harga Properti : <?php echo $j->harga_properti;?></h5></li>
							<li>Kategori Properti : <?php echo $j->kategori_properti;?></li>
							<li>Status : <?php echo $j->status_properti;?></li>
							<li>Lokasi : <?php echo $j->lokasi_properti;?></li>
							<?php if($j->isBooked == 0) {?>
								<li>Status Properti: <font style="color: green">Available</font></li>
							<?php }else{ 
									if($j->id_booker != 0 && $j->konfirmasi == 0) {?>
								<li>Status Properti: <font style="color: orange">Waiting For Confirmation</font></li>
							<?php }else{  ?>
								<li>Status Properti: <font style="color: red">Booked</font></li>
							<?php }
									} ?>
						</ul>
					</div>
				</div>
			</div>
			<?php } ?> 
			
			<!-- Spacing -->
			<div class="row spacing"></div>
		</div>
	</div>


   <!-- Footer -->
  <div class="footer font-only" align="center">
			<br>Copyright &copy; 2017 <br><br>
			140810160054 - Ibnu Ahsani |
			140810160004 - Ahsan Nurrijal |
			140810179001 - Muhammad Affandi
  </div>  
</body>
</html>
