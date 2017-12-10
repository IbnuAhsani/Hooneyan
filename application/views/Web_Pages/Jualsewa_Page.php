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
   <br><br>
	<center>
		<?php 
			if($this->input->post('status_properti') == 'Jual' && $this->input->post('kategori_properti') == 'Rumah' ) 
				{
		?>
					<h1 class="font-color"><u>Properti Rumah yang dijual</u></h1>
		<?php 
				} 
			if($this->input->post('status_properti') == 'Jual' && $this->input->post('kategori_properti') == 'Ruko' ) 	
				{		
		?>
					<h1 class="font-color"><u>Properti Ruko yang dijual</u></h1>
		<?php 
				} 
			if($this->input->post('status_properti') == 'Jual' && $this->input->post('kategori_properti') == 'Apartemen' ) 			
				{
		?>
					<h1 class="font-color"><u>Properti Apartemen yang dijual</u></h1>
		<?php 
				} 
			if($this->input->post('status_properti') == 'Sewa' && $this->input->post('kategori_properti') == 'Rumah' ) 			
				{
		?>
					<h1 class="font-color"><u>Properti Rumah yang disewa</u></h1>
		<?php 
				} 
			if($this->input->post('status_properti') == 'Sewa' && $this->input->post('kategori_properti') == 'Apartemen' ) 			
				{
		?>
					<h1 class="font-color"><u>Properti Apartemen yang disewa</u></h1>
		<?php 
				} 
			if($this->input->post('status_properti') == 'Sewa' && $this->input->post('kategori_properti') == 'Ruko' ) 			
				{
		?>
					<h1 class="font-color"><u>Properti Ruko yang disewa</u></h1>
		<?php 
				} 
			if($this->input->post('status_properti') == 'Sewa' && $this->input->post('kategori_properti') == 'Villa' ) 			
				{
		?>
					<h1 class="font-color"><u>Properti Villa yang disewa</u></h1>		
		<?php 	
				} 
		?>			
	</center>
	<br>
	<div class="container" id="body">
		<div class="content-bordered-box row-centered">
			<?php 
			if($properti->result() != NULL)
				{
					$i=1;
					foreach ($properti->result() as $j)
						{ ?>
							<div class="row" style="margin: 2%;" >
								<div class="col-12" style="display: flex;">
									<div class="col-5" style="height: 100%">
										<img src='<?php echo base_url();?>/gambar/<?php echo $j->gambar ?>' style="height: 100%; width: 80%;" align="right" alt='properti'>
									</div>
									<div class="col-7">
										<form id="<?php echo $i; ?>" action='http://localhost/Hooneyan/index.php/Properti_Page/get_data' method='post'>
										 <input type="hidden" name="id_properti" value="<?php echo $j->id_properti;?>">
										 <input type="hidden" name="id_agen" value="<?php echo $j->id_agen;?>">
											<ul class="navbar-list">
												<li>
													<h2><a class="font-color" style="margin: 0" onclick="document.getElementById('<?php echo $i; ?>').submit()">Nama Properti : <?php echo $j->nama_properti;?></a></h2>						
												</li>
												<li>
													<h3 class="font-color" style="margin-bottom: 10px">Harga Properti : Rp.<?php echo $j->harga_properti;?>
													</h3>
												</li>
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
										</form>
									</div>
								</div>
							</div>
			<?php $i++;
					}
				}
			else
				{ ?>
					<br>
					<center>
						<h2 class="font-color">Tidak ada yang mengiklankan properti yang Anda cari</h2>
					</center>
			<?php 
				} ?>
			<!-- Spacing -->
			<div class="row spacing"></div>
		</div>
	</div>
	<?php 
		if($properti->result() != NULL)
			{
	 ?>
	 			<br><br><br>
			   <!-- Footer -->
			  <div class="footer font-only" align="center">
						<br>Copyright &copy; 2017 <br><br>
						140810160054 - Ibnu Ahsani |
						140810160004 - Ahsan Nurrijal |
						140810179001 - Muhammad Affandi
			  </div>
  <?php }
  else
  	{ ?>
			<br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br>
		   <!-- Footer -->
		  <div class="footer font-only" align="center">
					<br>Copyright &copy; 2017 <br><br>
					140810160054 - Ibnu Ahsani |
					140810160004 - Ahsan Nurrijal |
					140810179001 - Muhammad Affandi
		  </div>
  <?php 
		} 
	?>  
</body>
</html>