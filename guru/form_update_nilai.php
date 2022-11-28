
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
		  
          <div class="top-nav left-menu">
             <ul class="center top-ul chevron">
                <li><a href="select_biodata.php">Biodata</a></li>
				<li><a href="absen.php">Absen</a></li>
				<li><a href="jadwal.php">Jadwal Mengajar</a></li>
				<li><a href="select_nilai.php">Penilaian Siswa</a></li>
				<li><a href="logout.php">Logout</a></li>
             </ul>
          </div>
          

      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Header -->
      <header class="section-top-padding background-image text-center" style="background-image:url(img/img-05.jpg)">
        <h1 class="text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-70 text-line-height-1 margin-bottom-30 margin-top-110">SEKOLAH NEGERI SWASTA</h1>
    
	<?php session_start();
	if($_SESSION['status']!="user"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
	<h4 class="text-extra-thin text-white text-s-size-20 text-m-size-20 text-size-20 text-line-height-1 margin-bottom-40 margin-top-80">Selamat Datang, <?php echo $_SESSION['nama_user']; ?>!</h4>
       
          <article>
			<center>
        
					<p>-</p> <center>
          </article>
      
        <img class="arrow-object" src="img/arrow-object-dark.svg" alt="">
      </header>       
     
	   <!-- Section 1 -->
      <section class="section-small-padding background-dark text-center">  
		 <div class="line">
          <div class="m-10 l-6 xl-4 center">
            <div class="margin">
				<?php
					include 'koneksi.php';
					$sql = "SELECT * FROM nilai where nis='".$_GET['nis']."' ";
					$exec = mysqli_query($koneksi, $sql);
					$data = mysqli_fetch_assoc($exec);
				?>

				<form method='post' action='update_nilai.php'>
					<table bgcolor="#454545" width="400" border="1">
					  <tr>
						<td>NIS</td>
						<td>:</td>
						<td><input type='text' name='nis' value='<?php echo $data['nis'] ?>'><p></td>
						<td><input type='hidden' name='nis2' value='<?php echo $data['nis'] ?>'><p></td>
					  </tr>
					   <tr>
						<td>Nama Siswa</td>
						<td>:</td>
						<td><input type='text' name='nama_siswa' value='<?php echo $data['nama_siswa'] ?>'><p></td>
					  </tr>
					  <tr>
						<td>Kelas</td>
						<td>:</td>
						<td><select name='kelas'>
 							<option value='1'>Pilih Kelas</option>
							<option value='4'>4</option>
							<option value='5'>5</option>
							<option value='6'>6</option>
						  </select></td>
					  </tr>
					  <tr>
						<td>Pelajaran</td>
						<td>:</td>
						<td><select name='mapel'>
 							<option value='1'>Pilih Mata Pelajaran</option>
							<option value='Bahasa Indonesia'>Bahasa Indonesia</option>
							<option value='Matematika'>Matematika</option>
							<option value='IPA'>IPA</option>
							<option value='Bahasa Inggris'>Bahasa Inggris</option>
						  </select></td>
					  </tr>
					  <tr>
						<td>Tugas</td>
						<td>:</td>
						<td><input type='text' name='tugas' value='<?php echo $data['tugas'] ?>'><p></td>
					  </tr>
					  <tr>
						<td>Absen</td>
						<td>:</td>
						<td><input type='text' name='absen' value='<?php echo $data['absen'] ?>'><p></td>
					  </tr>
					  <tr>
						<td>Attitude</td>
						<td>:</td>
						<td><input type='text' name='attitude' value='<?php echo $data['attitude'] ?>'><p></td>
					  </tr>
					  <tr>
						<td>UTS</td>
						<td>:</td>
						<td><input type='text' name='uts' value='<?php echo $data['uts'] ?>'><p></td>
					  </tr>
					  <tr>
						<td>UAS</td>
						<td>:</td>
						<td><input type='text' name='uas' value='<?php echo $data['uas'] ?>'><p></td>
					  </tr>
					  <tr>
						<td>Nilai Akhir</td>
						<td>:</td>
						<td><input type='text' name='nilai_akhir' value='<?php echo $data['nilai_akhir'] ?>'><p></td>
					  </tr>
					  <tr>
						<td>Grade</td>
						<td>:</td>
						<td><input type='text' name='grade' value='<?php echo $data['grade'] ?>'><p></td>
					  </tr>
					  <tr>
						<td><button type='submit'>Simpan</button></td>
					  </tr>
					</table>
				</form>
            </div>
          </div>                                                                                               
        </div>
		 
	</section>
    <!-- FOOTER -->
    <footer>
      <!-- Social -->
      <div class="background-primary padding text-center">
        <a href="/"><i class="icon-facebook_circle text-size-25 text-dark"></i></a> 
        <a href="/"><i class="icon-twitter_circle text-size-25 text-dark"></i></a>
        <a href="/"><i class="icon-google_plus_circle text-size-25 text-dark"></i></a>
        <a href="/"><i class="icon-instagram_circle text-size-25 text-dark"></i></a> 
        <a href="/"><i class="icon-linked_in_circle text-size-25 text-dark"></i></a>                                                                       
      </div>
      <!-- Main Footer -->
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