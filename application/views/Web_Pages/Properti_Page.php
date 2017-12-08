<html>
<head>
	<meta charset="UTF-8">
	<title>Profile Page</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
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
      <li style="margin: 11px; margin-left: 20; float: left;"><a href="<?php echo base_url(); ?>/index.php/Homepage"><img src="<?php echo base_url(); ?>/assets/pictures/house.png" style="height: 42px; width: 42px"></a></li>
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

	<!-- Spacing -->
	<br>

	<!-- Parent Div -->
	<div class="row" style="height: 880px">
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
			 <div style="padding:20px;border: 1px solid black;">
				<div class="row" style="height: 50px">
					<div class="col-6">Nama Properti: <?php echo $prop->nama_properti;?></div>
					<?php if($prop->isBooked == 0) {?>
						<div class="col-6">Status Properti: <b style="color: green">Available</b></div>
					<?php }else{ 
							if($prop->id_booker != 0 && $prop->konfirmasi == 0) {?>
								<div class="col-6">Status Properti: <b style="color: orange">Waiting For Confirmation</b></div>
					<?php }else{  ?>
								<div class="col-6">Status Properti: <b style="color: red">Booked</b></div>
					<?php }
							} ?>
				</div>
				<div class="row" style="height: 50px">
					<div class="col-6">Lokasi: <?php echo $prop->lokasi_properti;?></div>
					<div class="col-6">Harga: Rp.<?php echo $prop->harga_properti;?></div>
				</div>
				<div class="row" style="height: 70px">
					<div class="col-12">
						<p>Deskripsi: <?php echo $prop->desc_properti;?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<p>Luas Bangunan: <?php echo $prop->luas_properti;?></p>
						<p>Luas Tanah: <?php echo $prop->luas_tanah;?></p>
						<p>Kamar Tidur: <?php echo $prop->jumlah_ktidur;?></p>
						<p>Kamar Mandi: <?php echo $prop->jumlah_kmandi;?></p>
					</div>
					<div class="col-6">
						<p>Daya Listrik: <?php echo $prop->daya_listrik;?></p>
						<p>Jumlah Lantai: <?php echo $prop->jumlah_lantai;?></p>
						<p>Kondisi: <?php echo $prop->kondisi_properti;?></p>
					</div>
				</div>
				<br><br><br>
			</div>			
		</div>
		<!-- Right Colomn -->
		<div class="col-3 round1 polaroid" style="height: 280px">
			<?php 
				foreach ($agen->result() as $ag) 
					{ ?>
			<form action="<?php echo base_url('index.php/Properti_Page/book_properti'); ?>" style="text-align: center; margin: 0 auto " method="post">
				<!-- <img src="Profile_pic.png"> -->
				<img src="<?php echo base_url(); ?>/assets/pictures/Profile_pic.png" height="144px" width="144px">
				<?php 
					foreach ($properti->result() as $prop) 
				{ ?>
					<input type="hidden" name="id_properti" value="<?php echo $prop->id_properti;?>">
				<?php } ?>
					<input type="hidden" name="id_agen" value="<?php echo $ag->id;?>">
					<input type="hidden" name="id_booker" value="<?php echo $this->session->userdata('id');?>">
				<h4><?php echo $ag->nama;?></h4>
				<h3><?php echo $ag->no_kontak;?></h3>
				<?php 
				$email=$this->session->userdata('email');
				if(!$email)
					{?>
						<input type="hidden" value="Book">
					<?php
					}
				else
					{
						if($this->session->userdata('id') != $ag->id)
							{
								if($prop->isBooked == 0) {?>
									<input type="submit" name="book" value="Book">
								<?php }else{ ?>
									<input type="hidden" value="Book">
								<?php }
							}
					}	 
				if($this->session->userdata('id') == $ag->id && $prop->isBooked != 0)
					{	?>
						<input type="submit" name="confirm" value="Confirm">
						<input type="submit" name="deny" value="Deny">
					<?php
					}
				?>
			</form>
			<?php } ?> 
		<?php } ?>
		</div>
		<div class="col-1"></div>
	</div>
   <!-- Footer -->
  <div class="footer" align="center">
			<br>Copyright &copy; 2017<br><br>
			140810160054 - Ibnu Ahsani |
			140810160004 - Ahsan Nurrijal |
			140810179001 - Muhammad Affandi
  </div>  
</body>
</html>