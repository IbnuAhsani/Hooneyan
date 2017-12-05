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
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/Final.css">
	
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
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Rumah</a>
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Ruko</a>
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Apartemen</a>
            <a href="#">| Sewa</a>
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Rumah</a>
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Apartemen</a>
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Ruko</a>
            <a href="<?php echo base_url(); ?>/index.php/JualSewa_Page">Villa</a>
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
	<div class="row" style="height: 1100px">
		<div class="col-1"></div>
		<!-- Left Colomn -->
		<div class="col-7"> 
			
			<div class="row">
				<img src="<?php echo base_url(); ?>/assets/pictures/rumah1.jpg" style="height:480px; width:720px">
			</div>

			<br>
			 <div style="padding:20px;border: 1px solid black;">
				<div class="row" style="height: 90px">
					<div class="col-12">Nama Properti: asa</div>
				</div>
				<div class="row" style="height: 120px">
					<div class="col-6">Lokasi</div>
					<div class="col-6">Harga</div>
				</div>
				<div class="row" style="height: 90px">
					<div class="col-12">
						<p>Deskripsi: </p>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<p>Luas Bangunan</p>
						<p>Luas Tanah</p>
						<p>Kamar Tidur</p>
						<p>Kamar Mandi</p>
					</div>
					<div class="col-6">
						<p>Daya Listrik</p>
						<p>Jumlah Lantai</p>
						<p>Kondisi</p>
					</div>
				</div>
				<br><br>
			</div>			
		</div>

		<!-- Right Colomn -->
		<div class="col-3 round1 polaroid" style="height: 310px">
			<form action="/action_page.php" style="text-align: center; margin: 0 auto ">
				<!-- <img src="Profile_pic.png"> -->
				<img src="<?php echo base_url(); ?>/assets/pictures/Profile_pic.png" height="144px" width="144px">
				<h1>Nama Agen</h1>
				<br>
			  	<input type="submit" value="Kontak">
			  	<br>
			  <input type="submit" value="Book">
			</form> 
		</div>
		<div class="col-1"></div>
	</div>
	

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