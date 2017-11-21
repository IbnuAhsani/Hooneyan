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
       </li>
            <li style="width: 40%; float: left;"><input type="text" class="search1" name="search" placeholder="Search.."></li>
      <li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
         <button class="dropbtn" style="font-size: 13px"><?php echo anchor('Login/user_logout','Sign-Out'); ?></button>
      </li>
   </ul>
   </nav>

	<!-- Spacing -->
	<br>

	<!-- Parent Div -->
	<div class="row" style="height: 1100px">
		<div class="col-1"></div>
		<!-- Left Colomn -->
		<div class="col-7">
			<!-- Carousel -->
			<div class="row">
				<div class="mySlides fade polaroid">
					<div class="numbertext">1 / 3</div>
					<img src="<?php echo base_url(); ?>/assets/pictures/rumah1.jpg" style="width:100%">
				</div>

				<div class="mySlides fade polaroid">
					<div class="numbertext">2 / 3</div>
					<img src="<?php echo base_url(); ?>/assets/pictures/rumah2.jpg" style="width:100%">
				</div>

				<div class="mySlides fade polaroid">
					<div class="numbertext">3 / 3</div>
					<img src="<?php echo base_url(); ?>/assets/pictures/rumah3.jpg" style="width:100%">
				</div>	
			</div>
			<div class="row" style="text-align:center; height: 10px">
				<div class="col-4"></div>
				<div class="col-4">
					<span class="dot"></span> 
					<span class="dot"></span> 
					<span class="dot"></span> 
				</div>
				<div class="col-4"></div>				
			</div>
			<br>
			<div class="round1 polaroid">
				<div class="row" style="height: 90px">
					<div class="col-12">Nama Properti</div>
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
						<h4>Luas Bangunan</h4>
						<h4>Luas Tanah</h4>
						<h4>Kamar Tidur</h4>
						<h4>Kamar Mandi</h4>
					</div>
					<div class="col-6">
						<h4>Daya Listrik</h4>
						<h4>Jumlah Lantai</h4>
						<h4>Kondisi</h4>
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
	

	<!-- Script JS Carousel -->
	<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	    var i;
	    var slides = document.getElementsByClassName("mySlides");
	    var dots = document.getElementsByClassName("dot");
	    for (i = 0; i < slides.length; i++) {
	       slides[i].style.display = "none";  
	    }
	    slideIndex++;
	    if (slideIndex > slides.length) {slideIndex = 1}    
	    for (i = 0; i < dots.length; i++) {
	        dots[i].className = dots[i].className.replace(" active", "");
	    }
	    slides[slideIndex-1].style.display = "block";  
	    dots[slideIndex-1].className += " active";
	    setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
	</script>	
	<!-- Footer -->
	<div class="row Footer">
		<p style="margin-left: 100px">Footer</p>
	</div>
</body>
</html>