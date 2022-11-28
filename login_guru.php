
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SISTEM AKADEMIK</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>   
  </head>

  <body class="size-1280">
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-primary-dott full-width sticky">          
        <div class="top-nav"> 
          <!-- mobile version logo -->              
                  
          <p class="nav-text"></p>
          
          <!-- left menu items -->
          

      </nav>
    </header> 
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Header -->
      <header class="section-top-padding background-image text-center" style="background-image:url(img/img-05.jpg)">
        <h1 class="text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-70 text-line-height-1 margin-bottom-30 margin-top-110">
          SEKOLAH NEGRI SWASTA
        </h1>
        <h2 class="text-extra-thin text-white text-s-size-20 text-m-size-30 text-size-40 text-line-height-1 margin-bottom-40 margin-top-50">
          LOGIN
        </h2>
          <article>
            <form method="post" action="cek_login_guru.php">
			<center>
			
				<h4>
				NIP
				<input type="text" name="nip" placeholder="NIP">
				Password
				<input type="password" name="password" placeholder="Password"></h4>
			
					<?php 
						if(isset($_GET['pesan'])){
						if($_GET['pesan'] == "gagal"){
						echo "Login Gagal! NIP dan Password Salah!";
						}else if($_GET['pesan'] == "logout"){
						echo "Anda Telah Berhasil Logout";
						}else if($_GET['pesan'] == "belum_login"){
						echo "Anda Harus Login Terlebih Dahulu";
						}
						}
					?>
					<H4>
					<input type="submit" value="ENTER">
					</H4>
					<p>.</p>
			<center>
          </article>
      
        <img class="arrow-object" src="img/arrow-object-dark.svg" alt="">
      </header>

    <!-- FOOTER -->
    <footer>
      <section class="section background-dark">
        <div class="line"> 
          <div class="margin2x">
           
            <div class="s-12 m-6 l-3 xl-2">
               <h4 class="text-white text-strong margin-m-top-30">Useful Links</h4>
               <a class="text-primary-hover" href="page.html">FAQ</a><br>      
              
               <a class="text-primary-hover" href="blog.html">Blog</a>
            </div>
            <div class="s-12 m-6 l-3 xl-2">
               <h4 class="text-white text-strong margin-m-top-30">Term of Use</h4>
               <a class="text-primary-hover" href="page.html">Terms and Conditions</a><br>
               <a class="text-primary-hover" href="page.html">Refund Policy</a><br>
               <a class="text-primary-hover" href="page.html">Disclaimer</a>
            </div>
            <div class="s-12 m-6 l-3 xl-3">
               <h4 class="text-white text-strong margin-m-top-30">Contact Us</h4>
                <p><i class="icon-sli-screen-smartphone text-primary"></i> +62 123 456</p>
                <a class="text-primary-hover" href="mailto:contact@sampledomain.com"><i class="icon-sli-mouse text-primary"></i> sistemakademik@gmail.com</a><br>
          
            </div>
          </div>  
		</div>    
		  </section>
		  <div class="background-dark">
			 <div class="line">
				<hr class="break margin-top-bottom-0" style="border-color: #777;">
			 </div>
		  </div>
		  <!-- Bottom Footer -->
		  <section class="padding-2x background-dark full-width">
			<div class="line">
			  <div class="s-12 l-6">
				<p class="text-size-12">Copyright 2020</p>
			   
			  </div>
			  <div class="s-12 l-6">
				<a class="right text-size-12 text-primary-hover" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> by kelompok 8</a>
			  </div>
			</div>  
		</section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
  </body>
</html>