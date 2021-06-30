<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SiCeMet!</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <title>Sicemet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        }
        .containers {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin-top: 14px;
        }
        #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 78%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
          font-size: 20px;
        }

        #customers tr{
          background-color: #C5C6C7;
          color: #1F2833;
        }

        #customers tr:hover {
          background-color: #ddd;
          color:  #1F2833;
        }

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color:#0ace6;
          color: white;
        }
        body{
            background-image: url("jpg1.jpg");
              /* Full height */
          height: 100%;

          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
       
    </style>

  <!-- =======================================================
  * Template Name: Gp - v2.1.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">SiCeMet<span style="color: #66FCF1">!</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about1">About</a></li>
          <li><a href="#testimonials">Team</a></li>
          <li class="drop-down"><a href="">Metodologi</a>
            <ul>
              <li><a href="extreme.html">Extreme</a></li>
              <li><a href="incremental.html">Incremental</a></li>
              <li><a href="prototype.html">Prototyping</a></li>
              <li><a href="rad.html">RAD</a></li>
              <li><a href="scrum.html">SCRUM</a></li>
              <li><a href="spiral.html">SPIRAL</a></li>
              <li><a href="v.html">V Shape Model</a></li>
              <li><a href="waterfall.html">Waterfall</a></li>
            </ul>
          </li>

        </ul>
      </nav><!-- .nav-menu -->
      <a href="form.html" class="get-started-btn scrollto">Get Started</a>

    </div>
    </header><!-- End Header -->

    <div style=" background-image: url(assets/img/bg.png); opacity: 0.8; padding-top:  15%; height:  600px;"   > 
         
        <table id="customers" align="center">
        <tr style="color: #696969;">
            <th>Nama Metodologi</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>
          <?php
          $metode=[];
          if (isset($_GET['ka']) && isset($_GET['kmplks']) && isset($_GET['waktu']) && isset($_GET['jtim']) && isset($_GET['ktim']) && isset($_GET['klien'])){
              if(($_GET['ka']=="Belum Jelas")){
                  if(($_GET['kmplks']!="Sangat Kompleks")){
                      if(($_GET['waktu']=='1-3 bulan')){
                          if(($_GET['ktim']!='Berpengalaman')){
                              $metode[]="PROTOTYPE";
                          }
                          else {$metode[]="RAD";}
                      }
                      else if(($_GET['waktu']=='4-6 bulan')){
                          if(($_GET['ktim']!='Tidak Berpengalaman')){
                              $metode[]="EXTREME";
                              $metode[]="SCRUM";
                          }
                          else{$metode[]="INCREMENTAL";
                          }
                      }
                      else {$metode[]="SPIRAL";}
                  }
                  else if(($_GET['kmplks']=="Sangat Kompleks") && ($_GET['waktu']=="4-6 bulan") && ($_GET['jtim']=="< 12 Orang")){
                          if(($_GET['ktim']!="Tidak Berpengalaman")){
                              $metode[]="SCRUM";
                              $metode[]="EXTREME";
                          }
                          else{$metode[]="V";}
                  }
                  else if(($_GET['kmplks']=="Sangat Kompleks") && ($_GET['waktu']=="6-12 bulan") && ($_GET['jtim']=="> 12 Orang")){
                          $metode[]="SPIRAL";
                  }
                  else {$metode[]="...............";}

              }
          
              else if(($_GET['kmplks']!="Sangat Kompleks") && ($_GET['waktu']!="6-12 bulan")){
                  {$metode[]="WATERFALL";
              }
          }
          else {$metode[]="...............";}
          }
          else {$metode[]="...............";}
          echo $metode[0];
          $detail='';
              if($metode[0]=='WATERFALL'){
                  $detail='waterfall.html';}
              elseif($metode[0]=='PROTOTYPE'){
                  $detail='prototype.html';}
              else if($metode[0]=='RAD'){
                  $detail='rad.html';}
              else if($metode[0]=='SCRUM'){
                  $detail='scrum.html';}
              else if($metode[0]=='EXTREME'){
                  $detail='extreme.html';}
              else if($metode[0]=='SPIRAL'){
                  $detail='spiral.html';}
              else if($metode[0]=='V'){
                  $detail='v.html';}        
              else if($metode[0]=='INCREMENTAL'){
                  $detail='incremental.html';} 
          echo "<td><a class='btn btn-primary' href='".$detail."' role='button'>Detail</a></td>";
          ?>
        </tr>
        <tr>
            <td><?php
                    if (count($metode)>1){
                        echo $metode[1];
                        $detail='';
                      if($detail==''){
                          if($metode[1]=='WATERFALL'){
                              $detail='waterfall.html';}
                          elseif($metode[1]=='PROTOTYPE'){
                              $detail='prototype.html';}
                          else if($metode[1]=='RAD'){
                              $detail='rad.html';}
                          else if($metode[1]=='SCRUM'){
                              $detail='scrum.html';}
                          else if($metode[1]=='EXTREME'){
                              $detail='extreme.html';}
                          else if($metode[1]=='SPIRAL'){
                              $detail='spiral.html';}
                          else if($metode[1]=='V'){
                              $detail='v.html';}        
                          else if($metode[1]=='INCREMENTAL'){
                              $detail='incremental.html';} 
                          else{$detail ='#';}
                      }
                      echo "<td><a class='btn btn-primary' href='".$detail."' role='button'>Detail</a></ 
                           </td>";
                    }
                    else{
                        echo "...............";
                        echo "<td>-</td>";
                  }
                 ?>
        </tr>
        <tr>
            
            <td><?php
                    if (count($metode)>2){
                        echo $metode[2];
                        $detail='';
                        if($detail==''){
                            if($metode[2]=='WATERFALL'){
                                $detail='waterfall.html';}
                            elseif($metode[2]=='PROTOTYPE'){
                                $detail='prototype.html';}
                            else if($metode[2]=='RAD'){
                                $detail='rad.html';}
                            else if($metode[2]=='SCRUM'){
                                $detail='scrum.html';}
                            else if($metode[2]=='EXTREME'){
                                $detail='extreme.html';}
                            else if($metode[2]=='SPIRAL'){
                                $detail='spiral.html';}
                            else if($metode[2]=='V'){
                                $detail='v.html';}        
                            else if($metode[2]=='INCREMENTAL'){
                                $detail='incremental.html';} 
                            else{$detail ='#';}
                        }
                        echo "<td><a class='btn btn-primary' href='".$detail."' role='button'>Detail</a></ 
                             </td>";
                    }
                    else{
                        echo "...............";
                         echo "<td>-</td>";
                        }
                 ?>
        </tr>
    </table>
</div>
</div>

       <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Back To Form</h3>
          <p> Find More About Your Project!</p>
          <a class="cta-btn" href="form.html">Go To Form</a>
        </div>

      </div>
    </section><!-- End Cta Section -->
  <main id="main">
   <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/aldi.jpeg" class="testimonial-img" alt="">
            <h3>ALDIANTO NUGRAHA SAROSA</h3>
            <h4>J3D118092</h4>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/andam.jpeg" class="testimonial-img" alt="">
            <h3>ANDAM BAHIAQI R</h3>
            <h4>J3D118165</h4>
          </div>
            
          <div class="testimonial-item">
            <img src="assets/img/df.jpg" class="testimonial-img" alt="">
            <h3>Dian Fara Andrian</h3>
            <h4>J3D218187</h4>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/nopan.jpeg" class="testimonial-img" alt="">
            <h3>M NAUFAN NAIL KHANZA W</h3>
            <h4>J3D118154</h4>
          </div>
          <div class="testimonial-item">
            <img src="assets/img/imam.jpeg" class="testimonial-img" alt="">
            <h3>IMAM MAULANA</h3>
            <h4>J3D118084</h4>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/gopal.jpeg" class="testimonial-img" alt="">
            <h3>NAUFAL RIFKI K</h3>
            <h4>J3D118108</h4>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/jojo.jpeg" class="testimonial-img" alt="">
            <h3>JOSEPHINE ALLBERTA PUTRI WIDJAJA KILIN</h3>
            <h4>J3D218185</h4>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/liya.jpeg" class="testimonial-img" alt="">
            <h3>AWALIYAH HAYATUN</h3>
            <h4>J3D118086</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <<!-- ======= About Section ======= -->
    <section id="about1" class="about1">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Kelompok 3 RPL TEK 55 Sekolah Vokasi </p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
             Web ini dibuat unutk memenuhi tugas kuliah 
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Mata Kuliah Rekaya Perangkat Lunak</li>
              <li><i class="ri-check-double-line"></i> Kelas B</li>
              <li><i class="ri-check-double-line"></i>Teknik Kompupter Angkatan 55 Sekolah Vokasi </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              SiCeMet merupakan aplikasi simulasi untuk cek metodologi agar sesuai dengan karakteristik proyek dalam pengembangan sistem. Selamat Mencoba :)
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sicemet</span></strong>. Kelompok 3
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>