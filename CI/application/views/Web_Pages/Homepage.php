<?php
$email=$this->session->userdata('email');

if(!$email){

  redirect('Login');
}

 ?>
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
      <li style="margin: 11px; margin-left: 20; float: left;"><a href="http://localhost/CI/index.php/Homepage"><img src="<?php echo base_url(); ?>/assets/pictures/house.png" style="height: 42px; width: 42px"></a></li>
     <li class="dropdown" style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 80px; float: left;">
       <button href="javascript:void(0)" class="dropbtn" style="font-size: 13px">Menu</button> 
          <div class="dropdown-content">
            <a href="#">| Jual</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Rumah</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Ruko</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Apartemen</a>
            <a href="#">| Sewa</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Rumah</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Apartemen</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Ruko</a>
            <a href="http://localhost/CI/index.php/JualSewa_Page">Villa</a>
          </div>
       </li>
      <li style="width: 40%; float: left;"><input type="text" name="search" placeholder="Search.."></li>
	 
      <li style="margin-top: 16px; margin-bottom: 15px; margin-left: 30px; margin-right: 15px;float: right;">
         <button class="dropbtn" style="font-size: 13px"><?php echo anchor('Login/user_logout','Sign-Out'); ?></button>
      </li>
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
     <img class="home_page carousel-size-homepage" src="<?php echo base_url(); ?>/assets/pictures/rumah1.jpg" alt="Gambar Pertama">
     <img class="home_page carousel-size-homepage" src="<?php echo base_url(); ?>/assets/pictures/rumah2.jpg" alt="Gambar Kedua">
     <img class="home_page carousel-size-homepage" src="<?php echo base_url(); ?>/assets/pictures/rumah3.jpg" alt="Gambar Ketiga">
   </div>

   <!-- Spacing -->
   <div class="row spacing"></div>

   <!-- Grey Line -->
   <div class="row" style="height: 15%; background-color: #D9D9D9">
     <div class="col-sm-2"></div>
     <div class="col-sm-8">
         <form>
            <span><input type="text" class="search rounded" placeholder="Search..."></span>
         </form>
     <div class="col-sm-2"></div>
    </div>
   </div>

   <!-- Spacing -->
   <div class="row spacing"></div>
   
   <!-- Iklan Terpopuler -->
   <h2 style="margin-left:30px;">Terpopuler</h2>
  <br>
  <div class="row" id="kiri">
    <div class="col-sm-4"><img src="<?php echo base_url(); ?>/assets/pictures/rumah1.jpg" alt="rumah1" style="width:304px;height:228px;">
      <br>
      <h3>Meikarta</h3>
      <h5>Cikarang, Bekasi</h5>
    </div>
    <div class="col-sm-4"><img src="<?php echo base_url(); ?>/assets/pictures/rumah2.jpg" alt="rumah2" style="width:304px;height:228px;">
      <br>
      <h3>Griya Bandung Indah</h3>
      <h5>Ciwastra, Bandung</h5>
    </div>
    <div class="col-sm-4 "><img src="<?php echo base_url(); ?>/assets/pictures/rumah3.jpg" alt="rumah3" style="width:304px;height:228px;">
      <br>
      <h3>Margahayu</h3>
      <h5>Buah Batu, Bandung</h5>
    </div>
  </div>
  <div class="row" id="kiri">
    <div class="col-sm-4"><img src="<?php echo base_url(); ?>/assets/pictures/rumah2.jpg" alt="rumah2" style="width:304px;height:228px;">
      <br>
      <h3>Legok Hangseur Residence</h3>
    </div>
    <div class="col-sm-4"><img src="<?php echo base_url(); ?>/assets/pictures/rumah3.jpg" alt="rumah3" style="width:304px;height:228px;">
      <br>
      <h3>Griya Bandung Indah</h3>
    </div>
    <div class="col-sm-4"><img src="<?php echo base_url(); ?>/assets/pictures/rumah1.jpg" alt="rumah1" style="width:304px;height:228px;">
      <br>
      <h3>Margahayu</h3>
    </div>
  </div>

   <!-- Grey Line -->
   <div class="row" style="height: 15%;">
      <div class="hr" style="margin-top: 3%"><hr></div>
   </div>

  <!-- Iklan Terbaru -->
  <h2 id="kiri">Terbaru</h2><br>
  <div class="row" style=" margin-left:30px;">
    <div class="col-sm-4"><img src="<?php echo base_url(); ?>/assets/pictures/rumah1.jpg" alt="rumah1" style="width:304px;height:228px;">
      <br>
      <h3>Legok Hangseur Residence</h3>
    </div>
    <div class="col-sm-4"><img src="<?php echo base_url(); ?>/assets/pictures/rumah2.jpg" alt="rumah2" style="width:304px;height:228px;">
      <br>
      <h3>Griya Bandung Indah</h3>
    </div>
    <div class="col-sm-4"><img src="<?php echo base_url(); ?>/assets/pictures/rumah3.jpg" alt="rumah3" style="width:304px;height:228px;">
      <br>
      <h3>Margahayu</h3>
    </div>
  </div>
  <div class="row" id="kiri">
    <div class="col-sm-4"><img src="<?php echo base_url(); ?>/assets/pictures/rumah2.jpg" alt="rumah2" style="width:304px;height:228px;">
      <br>
      <h3>Legok Hangseur Residence</h3>
    </div>
    <div class="col-sm-4"><img src="<?php echo base_url(); ?>/assets/pictures/rumah3.jpg" alt="rumah3" style="width:304px;height:228px;">
      <br>
      <h3>Griya Bandung Indah</h3>
    </div>
    <div class="col-sm-4"><img src="<?php echo base_url(); ?>/assets/pictures/rumah1.jpg" alt="rumah1" style="width:304px;height:228px;">
      <br>
      <h3>Margahayu</h3>
    </div>
  </div>

   <!-- Spacing -->
   <div class="row spacing"></div>

   <!-- Footer -->
   <div class="footer">
      <p>Footer</p>
   </div>    
</body>
</html>
