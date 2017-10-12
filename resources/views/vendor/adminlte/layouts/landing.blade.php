<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>LBB Express</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <!-- start: CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/slider1.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/slider2.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/slider3.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app" >
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top" style="background-color:white" >
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                
                <a class="navbar-brand" href="#"><b>Express</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
                    <li><a href="#aboutus" class="smoothScroll">About Us</a></li>
                    <li><a href="#keunggulan" class="smoothScroll">Keunggulan</a></li>
                    <li><a href="#program" class="smoothScroll">Program</a></li>
                    <li><a href="#testimonial" class="smoothScroll">Testimonial</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home">

    <div id="home">

        <div class="demo-1">


            <div id="slider" class="sl-slider-wrapper">

                <div class="sl-slider">

                    <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                        <div class="sl-slide-inner">
                            
                            <img src="{{ asset('/img/banner.jpg') }}" width="100%" height="10%" />"
                            
                        </div>
                    </div>

                    <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                        <div class="sl-slide-inner">
                            <img src="{{ asset('/img/map2.jpg') }}" width="100%" />"
                            
                        </div>
                    </div>

                    <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            
                            <img src="{{ asset('/img/map3.jpg') }}" width="100%" />"
                        </div>
                    </div>

                    <div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="deco" data-icon="I"></div>
                            <h2>WeB Eksklusif bagi Siswa</h2>
                            <blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>
                        </div>
                    </div>

                    <div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="deco" data-icon="t"></div>
                            <h2>Konsultasi Tugas dan Materi 24 Jam</h2>
                            <blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><cite>Margi Clarke</cite></blockquote>
                        </div>
                    </div>
                </div><!-- /sl-slider -->

                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>

                <nav id="nav-dots" class="nav-dots">
                    <span class="nav-dot-current"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </nav>

            </div><!-- /slider-wrapper -->
            </div>
            </div>

    </section>

    <section id="aboutus" name="aboutus">
       <div id="about" class="color yellow">
        
        <!--start: Container -->
        <div class="container">

            <!--start: Wrapper -->
            <div class="wrapper span12">

                            <!-- start: Page Title -->
            <div id="page-title">

                <div id="page-title-inner">

                        <h1><span><marquee>SELAMAT DATANG</marquee></span></h1>

                </div>  

            </div>
            <!-- end: Page Title -->                
        
            <!--start: Row -->
            <div class="row-fluid">
        
                <div class="span12">
                    
                    <!-- start: About Us -->
                    <div id="story">
                        
                        <h3>
                            Apakah anda mencari layanan guru les privat tang handal dan profesional di Surabaya ? Dengan beragam pilihan les privat yang tersedia , LBB Express hadir dengan berbagai keunggulan yang ada mulai dari tentor yang berkualitas dari perguruan tinggi terbaik di surabaya , berbagai fasilitas yang lengkap mulai dari modul , free konsultasi dan bertanya via web eksklusif bagi setiap siswa , free pendaftaran dan masih banyak lagi.
                        </h3>
                        <h3>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        </>
                    
                    </div>  
                    <!-- end: About Us -->

                    <!-- start: History -->
                    
                    <!-- end: History -->

                </div>
                
            </div>
            <!--end: Row -->
            
            <!-- start: Row -->
            <div class="row-fluid">     
                
                <div class="span12">
                    
                    <!-- start: Skills -->
                    
                    <!-- end: Skills -->
                        
                </div>
                
            </div>
            <!--end: Row -->
            </div>
            <!-- end: Wrapper -->
        
        </div>
        <!--end: Container -->
        
    </div>
    </section>

    <section id="keunggulan" name="keunggulan" style="background-color:black">
       <div id="services" class="color black">
        
        <!--start: Container -->
        <div class="container">

            <!--start: Wrapper -->
            <div class="wrapper span12">
                
                            <!-- start: Page Title -->
            <div id="page-title">

                <div id="page-title-inner">

                    <h2><span>Mengapa Memilih LBB Expres ?</span></h2>

                </div>  

            </div>
            <!-- end: Page Title -->
            
            <!-- start: Row -->
            
            <!-- end: Row -->   
    
            <!-- start: Row -->
            <div class="row-fluid">
    
                <div class="span4">
                    <div class="icons-box">
                        
                        <i class="fa fa-thumbs-o-up"></i>
                        <h3>Tentor Berkualitas</h3>
                        <p>
                            Tentor LBB Expree berasal dari perguruan tinggi terbaik di Surabaya yaitu Unair , ITS , dan Unesa
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="span4">
                    <div class="icons-box">
                        <i class="fa fa-money"></i>
                        <h3>Biaya Terjangkau</h3>
                        <p>
                            Harga les privat di LBB Express sangat terjangkau di bandingkan dengan Lembaga bimbingan belajar lainya
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="span4">
                    <div class="icons-box">
                        <i class="fa fa-dollar"></i>
                        <h3>Free Biaya Pendaftaran</h3>
                        <p>
                            Jika di Lbb lain ada biaya untuk pendaftaran , beda dengan di LBB Express yang tanpa biaya pendafatran , alias Gratis!!
                    </p>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>

            <div class="row-fluid">
    
                <div class="span4">
                    <div class="icons-box">
                        <i class="fa fa-book"></i>
                        <h3>Fasilitas Lengkap</h3>
                        <p>
                            LBB Express menghadirkan banyak fasilitas bagi setiap siswa mulai dari modul , konsultasi atau tanya jawab pr via web express dan masih banyak lagi
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="span4">
                    <div class="icons-box">
                        <i class="fa fa-crosshairs"></i>
                        <h3>Fokus</h3>
                        <p>
                            Harga les privat di LBB Express sangat terjangkau di bandingkan dengan Lembaga bimbingan belajar lainya
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="span4">
                    <div class="icons-box">
                        <i class="fa fa-line-chart"></i>
                        <h3>Lembar Evaluasi</h3>
                        <p>
                            Jika di Lbb lain ada biaya untuk pendaftaran , beda dengan di LBB Express yang tanpa biaya pendafatran , alias Gratis!!
                    </p>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <!-- end: Row -->
            
            <div class="clearfix"></div>
            <hr class="clean">                  
            </div>
            <!-- end: Wrapper -->
        
        </div>
        <!--end: Container -->
        
    </div>
    <!-- end: 2nd Page - Services -->
    </section>

    <section id="program" name="program">
       <!-- start: 3rd Page - Pricing Tables -->
    <div id="pricing" class="color blue">
        
        <!--start: Container -->
        <div class="container">

            <!--start: Wrapper -->
            <div class="wrapper span12">

                            <!-- start: Page Title -->
            <div id="page-title">

                <div id="page-title-inner">

                    <h2><span>Pilihan Program Les</span></h2>

                </div>  

            </div>
            <!-- end: Page Title -->
                
            <!-- start: Table -->
            <div class="four-tables">
                
                <!-- start: Row -->
                <div class="row-fluid">
                    
                    <div class="span3">
                        <div class="pricing-table">
                            <div class="color-cccddd">
                                <h3>Les Privat SD</h3>
                                <!--<h4><span class="price">30.000</span> <span class="time">per meet</span></h4>-->
                                <ul>
                                    <h3>Program les privat yang didesain khusus untuk siswa sekolah dasar mulai dari kelas 1 sampai kelas 6. Materi yang disesuaikan untuk siswa SD berdasarkan jenjangnya dengan diajarkan oleh tutor-tutor friendly , ramah , pintar , daan professional.</h3>
                                    
                    
                                </ul>
                                <a href="#" class="buy"><span>Daftar</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="pricing-table">
                            <div class="color-cccddd">
                                <h3>Les Privat SMP</h3>
                                <!--<h4><span class="price">30.000</span> <span class="time">per meet</span></h4>-->
                                <ul>
                                    <h3>Les privat untuk siswa SMP/MTS mulai dari kelas 7 sampai kelas 9. Termasuk paket persiapam menghadapi ujian nasional SMP. Materi pelajaran SMP yang disesuaikan dengan kebutuhan siswa menjadikan kegiatan belajar lebih efektif.</h3>
                                    
                    
                                </ul>
                                
                                <a href="#" class="buy"><span>Daftar</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="pricing-table">
                            <div class="color-666777">
                                <h3>Les Privat SMA</h3>
                                <!--<h4><span class="price">30.000</span> <span class="time">per meet</span></h4>-->
                                <ul>
                                    <h3>Les privat untuk siswa SMA , mulai dari kelas 10 , 11 , dan 12 , hingga persipan Ujian Nasional , SBMPTN , atau tes masuk Perguruan Tinggi Favorit. Dengan tutor yang professional dan ahli di bidangnya , membuat kegiatan belajar lebih berkualitas.</h3>
                                    
                    
                                </ul>
                                    
                                
                                <a href="#" class="buy"><span>Daftar</span></a>
                            </div>
                        </div>
                    </div>  

                    <div class="span3">
                        <div class="pricing-table">
                            <div class="color-666777">
                                <h3>Les Privat Mahasiswa</h3>
                                <!--<h4><span class="price">30.000</span> <span class="time">per meet</span></h4>-->
                                <ul>
                                    <h3>LBB Express membuka program les privat bagi mahasiswa. Jika anda mahasiswa membutuhkan tutor untuk memahami mata kuliah - mata kuliah yang sulit. LBB Express siap menyediakan tutor tutor terbaik untuk membantu belajar anda.</h3>
                                    
                    
                                </ul>
                                    
                                
                                <a href="#" class="buy"><span>Daftar</span></a>
                            </div>
                        </div>
                    </div>  
                    </div>
                    </div>

                    <div class="four-tables">
                
                <!-- start: Row -->
                <div class="row-fluid">
                    
                    <div class="span3">
                        <div class="pricing-table">
                            <div class="color-cccddd">
                                <h3>Les Privat Bahasa Inggris</h3>
                                <!--<h4><span class="price">30.000</span> <span class="time">per meet</span></h4>-->
                                <ul>
                                    <h3>Anda mencari les privat Bahasa inggris yang berkualitas ? LBB Express membuka proram les privat Bahasa inggris mulai dari tingkat dasar , menengah , hingga lanjutan, untuk persiapan tes TOEFL/IELTS ,ataupun untuk persiapan ke Luar negri .</h3>
                                    
                    
                                </ul>
                                <a href="#" class="buy"><span>Daftar</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="pricing-table">
                            <div class="color-cccddd">
                                <h3>Les Privat Bahasa Arab</h3>
                                <!--<h4><span class="price">30.000</span> <span class="time">per meet</span></h4>-->
                                <ul>
                                    <h3>Kami membuka program les privat computer dengan guru datang ke rumah anda. Jika anda ingin menguasai beberapa skill computer dari mulai basic hingga lanjutan , atau bahkan ingin belajar Bahasa pemrograman, LBB Express pilihan yang tepat.</h3>
                                    
                    
                                </ul>
                                
                                <a href="#" class="buy"><span>Daftar</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="pricing-table">
                            <div class="color-666777">
                                <h3>Les Privat Agama Islam</h3>
                                <!--<h4><span class="price">30.000</span> <span class="time">per meet</span></h4>-->
                                <ul>
                                    <h3>LBB Express membuka program les privat membaca Alquran dan berbagai pengetahuan agama islam. Jika anda mencari guru mengaji / guru agama islam di Surabaya LBB Express menyediakan guru mengaji yang siap datang ke rumah anda.</h3>
                                    
                    
                            
                                    
                                </ul>
                                <a href="#" class="buy"><span>Daftar</span></a>
                            </div>
                        </div>
                    </div>  

                    <div class="span3">
                        <div class="pricing-table">
                            <div class="color-666777">
                                <h3>Les Privat Lainya</h3>
                                <!--<h4><span class="price">30.000</span> <span class="time">per meet</span></h4>-->
                                <ul>
                                    <h3>Kami selalu berusaha memberikan layanan yang terbaik untuk anda. Seandainya anda memiliki kebutuhan les privat lainya , silahkan hubungi kami , dan kami akan berusaha mencarikan tentor yang terbaik sesuai dengan kebutuhan anda.</h3>
                                    
                    
                                </ul>
                                    
                            
                                <a href="#" class="buy"><span>Daftar</span></a>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    
                <!--end: Row -->

            </div>
            <!-- end: Table -->
            </div>
            <!-- end: Wrapper -->
        
        </div>
    </section>


    <section id="testimonial" name="testimonial">
    <div id="team" class="color white">
        
        <!--start: Container -->
        <div class="container">

            <!--start: Wrapper -->
            <div class="wrapper span12">

                <!-- start: Page Title -->
<div id="page-title">

    <div id="page-title-inner">

            <h2><span>What Client Say ? </span></h2>

    </div>  

</div>
<!-- end: Page Title -->                

<!-- start: Row -->
<div class="row-fluid">
    
    <div class ="span12">
        
        <!-- start: Team -->    
        <div id="team">
                        
            <!-- start: Row -->
            <div class="row-fluid">
            
                <!-- start: About Member -->
                <div class="span3">
                    <div class="avatar">
                        <img class="img-circle" src="img/murid.jpg" alt="team member">
                    </div>  
                    <div class="team-name">Alam</div>
                    <div class="position">SMA Al-Hikmah</div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                    </p>
                    
                </div>
                <!-- end: About Member -->
                
                <hr class="clean visible-phone">

                <!-- start: About Member -->
                <div class="span3">
                    <div class="avatar">
                        <img class="img-circle" src="img/murid.jpg" alt="team member">
                    </div>  
                    <div class="team-name">Alam</div>
                    <div class="position">SMA Al-Hikmah</div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                    </p>
                    
                </div>
                <!-- end: About Member -->
                
                <hr class="clean visible-phone">
                
                <!-- start: About Member -->
                <div class="span3">
                    <div class="avatar">
                        <img class="img-circle" src="img/murid.jpg" alt="team member">
                    </div>  
                    <div class="team-name">Alam</div>
                    <div class="position">SMA Al-Hikmah</div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                    </p>
                    
                </div>
                <!-- end: About Member -->
                
                <hr class="clean visible-phone">

                <!-- start: About Member -->
                <div class="span3">
                    <div class="avatar">
                        <img class="img-circle" src="img/murid.jpg" alt="team member">
                    </div>  
                    <div class="team-name">Alam</div>
                    <div class="position">SMA Al-Hikmah</div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                    </p>
                    
                </div>
                <!-- end: About Member -->
                
                <hr class="clean visible-phone">    
            
            </div>
            <!-- end: Row -->

        </div>
        <!-- end: Team -->
        
    </div>  
    
</div>  
<!-- end: Row -->
            </div>
            <!-- end: Wrapper -->
        
        </div>
        <!--end: Container -->
        
    </div>
    </section>
      <section id="contact" name="contact">
      <!-- end: 6th Page - Team -->
    <div id="services" class="color black">
        
        <!--start: Container -->
        <div class="container">

            <!--start: Wrapper -->
            <div class="wrapper span12">
                
                            <!-- start: Page Title -->
            <div id="page-title">

                <div id="page-title-inner">

                    <h2><span> Hubungi Kami </span></h2>

                </div>  

            </div>
            <!-- end: Page Title -->
            
            <!-- start: Row -->
            
            <!-- end: Row -->   
    
            <!-- start: Row -->
            <div class="row-fluid">
    
                <div class="span4">
                    <div class="icons-box">
                        
                        <i class="material-icons">&#xe0b0;</i>
                        <h3>082145886861</h3>
                        
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="span4">
                    <div class="icons-box">
                        <h3>Line</h3>
                        <h3>siffiyan</h3>
                        
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="span4">
                    <div class="icons-box">
                        <i class="fa fa-instagram"></i>
                        <h3>express.lbb</h3>
                        
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            </div>
            </div>
            </div>
      </section>
    <footer style="background-color:black">
        
                <p style="color:white">
                   
                    <strong>Copyright &copy; 2017 <a href="#">Express-Dev</a></strong> 
                   
                </p>

    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ mix('/js/app-landing.js') }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/isotope.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.imagesloaded.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/flexslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/fancybox.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/twitter.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/modernizr.custom.79639.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.ba-cond.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.slitslider.js') }}"></script>

<script type="text/javascript" src="{{ asset('/js/excanvas.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.flot.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.flot.pie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.flot.stack.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.flot.resize.min.js') }}"></script>
<script defer="defer" src="{{ asset('/js/custom.js') }}"></script>
<script type="text/javascript"> 
    $(function() {
    
        var Page = (function() {

            var $navArrows = $( '#nav-arrows' ),
                $nav = $( '#nav-dots > span' ),
                slitslider = $( '#slider' ).slitslider( {
                    onBeforeChange : function( slide, pos ) {

                        $nav.removeClass( 'nav-dot-current' );
                        $nav.eq( pos ).addClass( 'nav-dot-current' );

                    }
                } ),

                init = function() {

                    initEvents();
                    
                },
                initEvents = function() {

                    // add navigation events
                    $navArrows.children( ':last' ).on( 'click', function() {

                        slitslider.next();
                        return false;

                    } );

                    $navArrows.children( ':first' ).on( 'click', function() {
                        
                        slitslider.previous();
                        return false;

                    } );

                    $nav.each( function( i ) {
                    
                        $( this ).on( 'click', function( event ) {
                            
                            var $dot = $( this );
                            
                            if( !slitslider.isActive() ) {

                                $nav.removeClass( 'nav-dot-current' );
                                $dot.addClass( 'nav-dot-current' );
                            
                            }
                            
                            slitslider.jump( i + 1 );
                            return false;
                        
                        } );
                        
                    } );

                };

                return { init : init };

        })();

        Page.init();
    
    });
</script>
</body>
</html>
