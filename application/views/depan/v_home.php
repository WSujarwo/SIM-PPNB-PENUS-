<!DOCTYPE html>
<html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<!-- Stylesheet -->
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">


  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <!-- <link href="favicon.ico" rel="shortcut icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url().'template/imperial/lib/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url().'template/imperial/lib/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'template/imperial/lib/animate-css/animate.min.css'?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url().'template/imperial/css/style.css'?>" rel="stylesheet">
  <!-- <link href="<?php echo base_url().'assets/layout.min.css'?>" rel="stylesheet" type="text/css"/> -->


<!-- xman template -->
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300i,400,400i,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/bootstrap.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/slicknav.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/bootstrap-theme.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/font-awesome.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/owl.carousel.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/owl.theme.default.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/animate.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/magnific-popup.css'?>">
    
    <!-- Xman CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/normalize.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'template/xman/style.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'template/xman/css/responsive.css'?>">

        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/flexslider.css'>
        <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

        <!-- news template -->

        <link rel="stylesheet" href="<?php echo base_url().'assets/news/css/owl.carousel.css'?>" >
        <link rel="stylesheet" href="<?php echo base_url().'assets/news/css/owl.theme.css'?>" >
        <!-- <link rel="stylesheet" href="assets/news/css/owl.transitions.css" > -->

        <!-- Custom CSS -->
        <link href="<?php echo base_url().'assets/news/css/style.css'?>" rel="stylesheet">
<?php 
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
                
    ?>
</head>
<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="<?php echo base_url().'template/imperial/img/welcome.png'?>" alt="Imperial">
        </div>
        <img class="penus" src="<?php echo base_url().'template/imperial/img/newpenus.png'?>" alt="Imperial">
        <!-- <p style="font-size: 70px; color: white;">SMK PLUS PELITA NUSANTARA</p> -->
        <h2>Success By Caracter: <span class="rotating">Terampil, Entrepreneur, Religius</span></h2>
        <div class="actions">
          <a href="#about" class="btn-get-started" style="width: 350px">Rekayasa Perangkat Lunak</a>
          <a href="#services" class="btn-services" style="width: 350px">Teknik Komputer dan Jaringan</a>
          <a href="#about" class="btn-get-started" style="width: 330px">Multimedia</a>
          <a href="#services" class="btn-services" style="width: 350px">Perbankan</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="<?php echo base_url().'template/imperial/img/penusweb.png'?>" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#team">Team</a></li>
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  About Section
  ============================-->
  
            <!-- Start about -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="about-content">
            <div class="col-md-3 col-sm-2 col-xs-12">
              <div class="section-title">
                <h2>Profil<br><span> Pelita Nusantara</span></h2>
              </div>
            </div>
            <div class="col-md-6  col-sm-6 col-xs-12">
              <div class="single-about ">
                <div class="accordion">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a class="panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Visi Sekolah
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                              <ul class="list-group" style="color: blue; font-size: 13pt; text-align: justify;">
                                                <li class="list-group-item">"Sebagai pusat pendidikan dan pengembangan kepribadian peserta didik yang cerdas, terampil, bermartabat dan religius agar mampu bersaing dalam era globalisasi"</li>
                                              </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Misi Sekolah
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <ul class="list-group" style="color: black; font-size: 13pt; text-align: justify;">
                                                  <li class="list-group-item">Menyelenggarakan pendidikan secara efektif untuk mengoptimalkan potensi peserta didik dengan berbasis teknologi informasi</li>
                                                  <li class="list-group-item">Mewujudkan peserta didik yang disiplin, unggul, kreatif, religius dan berakhlak mulia</li>
                                                  <li class="list-group-item">Memberikan bekal kecakapan hidup peserta didik melalui pembelajaran keterampilan diluar jam pembelajaran efektif</li>
                                                  <li class="list-group-item">Menciptakan peserta didik menjadi tenaga profesional yang mampu bersaing dipasar kerja, atau melanjutkan pendidikan kejenjang yang lebih tinggi</li>
                                                  <li class="list-group-item">Mengikuti berbagai event-event akademis, keagamaan, olahraga, dan kesenian dalam rangka meningkatkan wawasan dan pengetahuan</li>
                                                  <li class="list-group-item">Menciptakan kepedulian terhadap lingkungan sosial masyarakat yang aman dan nyaman</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Outstanding Results
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                
              </div>
            </div>
            <div style="text-align: center;" class="col-md-3  col-sm-6 col-xs-12">
              <div class="single-about">
                  <div class="cv">
                    <a href="https://www.youtube.com/watch?v=TkwcDBN8AlI" class="video video-popup mfp-iframe">Video Profil Sekolah</a>
                  </div>
                  <div class="image">
                  <img src="<?php echo base_url().'template/xman/img/favicon.png'?>" alt="#">
                  <a href="https://www.youtube.com/watch?v=TkwcDBN8AlI" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ End about --> 
    
    <!-- Start service -->
    <section id="service" class="service section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="section-title">
              <h2>Program <br><span>Unggulan</span></h2>
            </div> 
          </div>
          <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                <!-- single-service --> 
                <div class="single-service">
                  <i class="fa fa-laptop"></i>
                  <h5>Student Centered learning</h5>
                  <p>Model pembelajaran yang memfasilitasi para mahasiswa untuk berpartisipasi aktif dalam proses pembelajaran.</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                <!-- single-service --> 
                <div class="single-service">
                  <i class="fa fa-mobile"></i>
                  <h5>English Conversation</h5>
                  <p>memberikan wadah dalam meningkatkan kemampuan berbicara bahasa Inggris sebagai pendukung ketrampilan berkomunikasi.</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                <!-- single-service --> 
                <div class="single-service">
                  <i class="fa fa-paper-plane"></i>
                  <h5>Stadium General</h5>
                  <p>Suatu wadah yang mampu memberikan motivasi dan pengetahuan baru dengan mendatangkan ahli-ahli di bidangnya.</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                <!-- single-service --> 
                <div class="single-service">
                  <i class="fa fa-pencil"></i>
                  <h5>Super Camp</h5>
                  <p>sebuah program pembelajaran dan pelatihan bagi siswa agar kecerdasannya bertambah dua kali lipat dari sebelumnya.</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
                <!-- single-service --> 
                <div class="single-service">
                  <i class="fa fa-camera"></i>
                  <h5>Outing Class</h5>
                  <p> program pembelajaran yg bertujuan memberikan keterampilan dan keahlian dasar tertentu sebagai sarana menumbuhkan kreativitas siswa.</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                <!-- single-service --> 
                <div class="single-service">
                  <i class="fa fa-life-ring"></i>
                  <h5>Prakerin / Magang</h5>
                  <p>pembelajaran yang dilaksanakan didunia usaha atau dunia industri yang relevan dengan dengan kompetensi (kemampuan) siswa sesuai bidangnya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ End service --> 

    <!-- Start skill -->
    
    <!--/ End skill --> 
    <!-- Start Latest News Section -->
    <section id="skill" class="blog section">
        <section id="latest-news" class="latest-news-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-4 col-xs-12">
                      <div class="section-title">
                        <h2>Latest <span>Post</span></h2>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="latest-news">
                        <div class="col-md-12 wow fadeInRight" style="background: rgb(1, 63, 44); border:green 1px solid;">
                            <div class="latest-post">
                                <img src="assets/news/images/about-01.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details" style="background-color: green;">
                                    <span class="date"><strong>31</strong> <br>Dec , 2014</span>
                                    
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <a href="#" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-12 wow fadeInRight" style="background: rgb(1, 63, 44); border:green 1px solid;">
                            <div class="latest-post">
                                <img src="assets/news/images/about-02.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details">
                                    <span class="date"><strong>17</strong> <br>Feb , 2014</span>
                                    
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <a href="#" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-12 wow fadeInRight" style="background: rgb(1, 63, 44); border:green 1px solid;">
                            <div class="latest-post ">
                                <img src="assets/news/images/about-03.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details">
                                    <span class="date"><strong>08</strong> <br>Aug , 2014</span>
                                    
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <a href="#" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-12 wow fadeInRight" style="background: rgb(1, 63, 44); border:green 1px solid;">
                            <div class="latest-post">
                                <img src="assets/news/images/about-01.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details">
                                    <span class="date"><strong>08</strong> <br>Aug , 2014</span>
                                    
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <a href="#" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-12 wow fadeInRight" style="background: rgb(1, 63, 44); border:green 1px solid;">
                            <div class="latest-post">
                                <img src="assets/news/images/about-02.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details">
                                    <span class="date"><strong>08</strong> <br>Aug , 2014</span>
                                    
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <a href="#" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-12 wow fadeInRight" style="background: rgb(1, 63, 44); border:green 1px solid;"">
                            <div class="latest-post">
                                <img src="assets/news/images/about-03.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details">
                                    <span class="date"><strong>08</strong> <br>Aug , 2014</span>
                                    
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <a href="#" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- End Latest News Section -->
    
    <!-- Start Story -->
    <section id="story" class="story section">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="section-title">
              <h2>UPCOMMING <span>EVENT</span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
            <div class="story-content">
              <!-- single-story -->
              <div class="single-story">
                <span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">09-05-2019</span>
                <div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
                  <h3>Penilaian Akhir Semester Genap</h3>
                  <p>Lead Web Designer</p>
                  <p class="p2">This was the time when we started our company. We had no idea how far we would go, we werenâ€™t even sure that we would be able to survive for a few years. What drove us to start the company was the understanding that we could provide a service no one else was providing.</p>
                </div>
              </div>
              <!-- single-story -->
              <div class="single-story">
                <span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">13-05-2019</span>
                <div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
                  <h3>Pengumuman Hasil Kelulusan</h3>
                  <p>Lead Web Designer</p>
                  <p class="p2">This was the time when we started our company. We had no idea how far we would go, we werenâ€™t even sure that we would be able to survive for a few years. What drove us to start the company was the understanding that we could provide a service no one else was providing.</p>
                </div>
              </div>
              <!-- single-story -->
              <div class="single-story">
                <span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">16-05-2019</span>
                <div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
                  <h3>Sidang Laporan Prakerin</h3>
                  <p>Lead Web Designer</p>
                  <p class="p2">This was the time when we started our company. We had no idea how far we would go, we werenâ€™t even sure that we would be able to survive for a few years. What drove us to start the company was the understanding that we could provide a service no one else was providing.</p>
                </div>
              </div>
              <!-- single-story -->
              <div class="single-story">
                <span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">21-05-2019</span>
                <div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
                  <h3>Paket Ceria Ramadhan</h3>
                  <p>Lead Web Designer</p>
                  <p class="p2">This was the time when we started our company. We had no idea how far we would go, we werenâ€™t even sure that we would be able to survive for a few years. What drove us to start the company was the understanding that we could provide a service no one else was providing.</p>
                </div>
              </div>
              <!-- single-story -->
              <div class="single-story">
                <span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">23-05-2019</span>
                <div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
                  <h3>Buka Puasa Bersama</h3>
                  <p>Lead Web Designer</p>
                  <p class="p2">This was the time when we started our company. We had no idea how far we would go, we werenâ€™t even sure that we would be able to survive for a few years. What drove us to start the company was the understanding that we could provide a service no one else was providing.</p>
                </div>
              </div>
              <!-- single-story -->
              <div class="single-story">
                <span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.6s">25-05-2019</span>
                <div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                  <h3>Pembagian Raport</h3>
                  <p>Lead Web Designer</p>
                  <p class="p2">This was the time when we started our company. We had no idea how far we would go, we werenâ€™t even sure that we would be able to survive for a few years. What drove us to start the company was the understanding that we could provide a service no one else was providing.</p>
                </div>
              </div>
              <!-- single-story -->
              <div class="single-story">
                <span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">30-06-2019</span>
                <div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                  <h3>Wisuda / HPJS</h3>
                  <p>Lead Web Designer</p>
                  <p class="p2">This was the time when we started our company. We had no idea how far we would go, we werenâ€™t even sure that we would be able to survive for a few years. What drove us to start the company was the understanding that we could provide a service no one else was providing.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ End story --> 
    
    
    <!-- Testimonials -->
    <section id="testimonials" class="testimonials section">
      <section id="team" class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-4 col-xs-12">
                  <div class="section-title">
                    <h2 style="color: white;">OUR <span>TEAM</span></h2>
                  </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div id="team-section">
                    
                        
                
                

                                <div class="our-team">

                                    <div class="team-member">
                                        <img src="assets/news/images/team/manage-1.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="assets/news/images/team/manage-2.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="assets/news/images/team/manage-3.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>    

                                    <div class="team-member">
                                        <img src="assets/news/images/team/manage-4.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="assets/news/images/team/manage-1.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="assets/news/images/team/manage-2.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>

                    
                    </div>
                </div>
            </div>
                
        </div>
    </section>
    </section>
    <!--/ End testimonial -->
    <!--/ End testimonial -->
    

    <!-- Clients -->
        <div id="clients" class="clients section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="owl-carousel clients-slider">
                  <div class="single-clients">
                    <img src="template/xman/img/brand-1.png" alt="#">
                  </div>
                  <div class="single-clients">
                    <img src="template/xman/img/brand-2.png" alt="#">
                  </div>
                  <div class="single-clients">
                    <img src="template/xman/img/brand-3.png" alt="#">
                  </div>
                  <div class="single-clients">
                    <img src="template/xman/img/brand-4.png" alt="#">
                  </div>
                  <div class="single-clients">
                    <img src="template/xman/img/brand-5.png" alt="#">
                  </div>
                  <div class="single-clients">
                    <img src="template/xman/img/brand-6.png" alt="#">
                  </div>
                  <div class="single-clients">
                    <img src="template/xman/img/brand-1.png" alt="#">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!--/ End Clients -->
  <!--==========================
  Contact Section
  ============================-->
  
  <br>
<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
            -->
            Bootstrap Templates by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <script src="template/xman/js/jquery.min.js">  </script>
    <script src="template/xman/js/bootstrap.min.js"></script>
    <script src="template/xman/js/jquery.nav.js"></script>
    <script src="template/xman/js/jquery.slicknav.min.js"></script>
    <script src="template/xman/js/easing.min.js"></script>
    <script src="template/xman/js/jquery-appear.js"></script>
    <script src="template/xman/js/jquery.scrollUp.min.js"></script>
    <script src="template/xman/js/owl.carousel.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="template/xman/js/jquery.counterup.min.js"></script>
    <script src="template/xman/js/isotope.pkgd.min.js"></script>
    <script src="template/xman/js/wow.min.js"></script>
    <script src="template/xman/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
    <script type="text/javascript" src="template/xman/js/gmaps.min.js"></script>
    <script src="template/xman/js/main.js"></script>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider.js'></script>
    <script  src="template/xman/css/js/index.js"></script>


    <!-- news script -->
    <script src="assets/news/js/jquery-2.1.1.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/news/asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/news/js/jquery.easing.1.3.js"></script>
    <script src="assets/news/js/classie.js"></script>
    <script src="assets/news/js/count-to.js"></script>
    <script src="assets/news/js/jquery.appear.js"></script>
    <script src="assets/news/js/cbpAnimatedHeader.js"></script>
    <script src="assets/news/js/owl.carousel.min.js"></script>
    <script src="assets/news/js/jquery.fitvids.js"></script>
    <script src="assets/news/js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/news/js/jqBootstrapValidation.js"></script>
    <script src="assets/news/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/news/js/script.js"></script>

</body>

  <!-- Required JavaScript Libraries -->
  <!-- <script src="<?php echo base_url().'template/imperial/lib/jquery/jquery.min.js'?>"></script> -->
  <!-- <script src="<?php echo base_url().'template/imperial/lib/bootstrap/js/bootstrap.min.js'?>"></script> -->
  <!-- <script src="<?php echo base_url().'template/imperial/lib/superfish/hoverIntent.js'?>"></script> -->
  <script src="<?php echo base_url().'template/imperial/lib/superfish/superfish.min.js'?>"></script>
  <script src="<?php echo base_url().'template/imperial/lib/morphext/morphext.min.js'?>"></script>
  <!-- <script src="<?php echo base_url().'template/imperial/lib/wow/wow.min.js'?>"></script> -->
  <script src="<?php echo base_url().'template/imperial/lib/stickyjs/sticky.js'?>"></script>
  <!-- <script src="<?php echo base_url().'template/imperial/lib/easing/easing.js'?>"></script> -->

  <!-- Template Specisifc Custom Javascript File -->
  <script src="<?php echo base_url().'template/imperial/js/custom.js'?>"></script>
  <!-- <script src="<?php echo base_url().'template/imperial/contactform/contactform.js'?>"></script> -->
</html>
