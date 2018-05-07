@extends('layout.template')

@section('title')
Pemrograman - ITCC 2018
@endsection

@section('head')
<!-- Template Timeline -->
<link rel="stylesheet" href="{{asset('asset1/timeline/css/reset.css')}}"> <!-- CSS reset -->
<link rel="stylesheet" href="{{asset('asset1/timeline/css/style.css')}}"> <!-- Resource style -->
<script src="{{asset('asset1/timeline/js/modernizr.js')}}"></script> <!-- Modernizr -->
<script src="{{asset('asset1/timeline/js/jquery-2.1.4.js')}}"></script>
<script src="{{asset('asset1/timeline/js/jquery.mobile.custom.min.j')}}s"></script>
<script src="{{asset('asset1/timeline/js/main.js')}}"></script> <!-- Resource jQuery -->
@endsection

@section('navbar')
<li><a href="/">Beranda</a></li>
<li><a href="#jadwal">Jadwal</a></li>
<li><a href="#contact">Kontak</a></li>
<li><a href="/login">Masuk</a></li>
<li><a href="/faq">FAQ</a></li>
@endsection

@section('intro')
<!--==========================
      Intro Section
============================-->
<section id="hero">
    <div class="hero-container wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      	<h1>Cabang Lomba Pemrograman</h1>
      	<h2>Uji Kemampuan Logika dan Coding-mu</h2>
      	<div class="actions">
      		<a href="#profile" class="btn-detail">Selengkapnya</a>
      		<a href="/daftar/pemrograman" class="btn-daftar">Yuk Daftar!</a>
      	</div>
    </div>
</section><!-- #hero -->

<!--==========================
      Profile Section
============================-->
<section id="profile">
  	<div class="container wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="margin-top: 50px; margin-bottom: 50px;">
  		
  		<header class="section-header">
  			<h3>Deskripsi</h3>
  		</header>

  		<center>
	  		<div class="row col-md-9" style="margin-top: 40px;">
	  			<p style="font-size: 16px;">Cabang Lomba Pemrograman merupakan salah satu perlombaan yang ada dalam kegiatan ITCC 2018 yang dikhususkan untuk pelajar tingkat SMA/SMK sederajat Se-Bali.<br>Cabang lomba pemrograman bertujuan untuk menjaring siswa/siswi SMA, SMK ataupun jenjang yang sederajat seluruh Bali yang memiliki kompetensi di bidang komputer khususnya logika komputasi dan pemrograman.<br>Cabang lomba pemrograman merupakan jenis perlombaan individu dengan biaya pendaftaran Rp. 85.000,- untuk setiap peserta.</p>
	  		</div>
	  		<a href="#" class="btn-get-started">Download Peraturan</a>
  		</center>

  	</div>
</section>

<!--==========================
      Hadiah Section
============================-->
<section id="hadiah">
    <div class="container">
      
      	<header class="section-header">
        	<h3>Hadiah</h3>
      	</header>

      	<div class="row about-cols" style="margin-top: 40px;">

        	<div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
		         <div class="about-col">
		            <div class="img">
		              	<img src="{{asset('asset1/images/logo-itcc5.png')}}">
		              	<div class="icon"><i class="fa fa-code"></i></div>
		            </div>
		            <h2>Juara 1<br>Rp. 1.000.000,-</h2>
		            <center>
		              	<p>
		                	Sertifikat<br>Plakat<br>Hadiah Menarik
		              	</p>
		            </center>
		         </div>
        	</div>

        	<div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
		        <div class="about-col">
		            <div class="img">
		              	<img src="{{asset('asset1/images/logo-itcc5.png')}}">
		              	<div class="icon"><i class="fa fa-code"></i></div>
		            </div>
		            <h2>Juara 2<br>Rp. 750.000,-</h2>
		            <center>
		              	<p>
		                	Sertifikat<br>Plakat<br>Hadiah Menarik
		              	</p>
		            </center>
		        </div>
        	</div>

        	<div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
		        <div class="about-col">
		            <div class="img">
		              	<img src="{{asset('asset1/images/logo-itcc5.png')}}">
		              	<div class="icon"><i class="fa fa-code"></i></div>
		            </div>
		            <h2>Juara 3<br>Rp. 500.000,-</h2>
		            <center>
		              	<p>
		                	Sertifikat<br>Plakat<br>Hadiah Menarik
		              	</p>
		            </center>
		        </div>
        	</div>
        
      	</div>

    </div>
</section>

<!--==========================
      Jadwal Section
============================-->
<section id="jadwal" class="cd-horizontal-timeline wow fadeInUp" style="background-color: #f7f7f7; padding-top: 80px; padding-bottom: 60px;">
    <div class="section-header">
          <h3 class="section-title">Jadwal</h3>
    </div>

  	<div class="timeline" style="margin-top: 50px;">
    	<div class="events-wrapper">
		    <div class="events">
		        <ol>
		          	<li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
		          	<li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
		          	<li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
		          	<li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
		          	<li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
		        </ol>

		        <span class="filling-line" aria-hidden="true"></span>
		    </div> <!-- .events -->
    	</div> <!-- .events-wrapper -->
      
    	<ul class="cd-timeline-navigation">
      		<li><a href="#0" class="prev inactive">Prev</a></li>
      		<li><a href="#0" class="next">Next</a></li>
    	</ul> <!-- .cd-timeline-navigation -->
  	</div> <!-- .timeline -->

  	<div class="events-content">
    	<ol>
		    <li class="selected" data-date="16/01/2014">
		        <center>
		          	<em>January 16th, 2014</em>
		          	<h1 class="text-black">Pendaftaran online</h1>
		        </center>
		    </li>

		    <li data-date="20/04/2014">
		        <center>
		          	<em>March 20th, 2014</em>
		          	<h1 class="text-black">Penutupan Pendaftaran</h1>
		        </center>
		    </li>

		    <li data-date="09/07/2014">
		        <center>
		          	<em>July 9th, 2014</em>
		          	<h1 class="text-black">Technical Meeting</h1>
		        </center>
		    </li>

		    <li data-date="30/08/2014">
		        <center>
		          	<em>August 30th, 2014</em>
		          	<h1 class="text-black">Penyisihan</h1>
		        </center>
		    </li>

		    <li data-date="15/09/2014">
		        <center>
		          	<em>September 15th, 2014</em>
		          	<h1 class="text-black">Final</h1>
		        </center>
		    </li>

    	</ol>
  	</div> <!-- .events-content -->
</section>

<!--==========================
      Lomba Lain Section
============================-->
<section id="lomba-lainnya" style="background-color: #fff;">
  	<div class="container">
    
    	<header class="section-header">
      		<h3>Lomba Lainnya</h3>
    	</header>

    	<div class="row" style="margin-top: 50px;">

		    <div class="col-lg-6">
		        <div class="box wow fadeInLeft">
		          	<div class="icon"><i class="fa fa-css3" style="padding-top: 40px;"></i></div>
		          	<h4 class="title">Desain Web</h4>
		          	<p class="description justify">Cabang Lomba <b>Desain Web</b> diperuntukan kepada siswa SMA/SMK Sederajat se-Bali. Biaya Pendaftaran Rp. 85.000,-</p>
		          	<a href="/landing/desainWeb" class="btn-get-started">Selengkapnya</a>
		        </div>
		    </div>

		    <div class="col-lg-6">
		        <div class="box wow fadeInRight">
		          	<div class="icon"><i class="fa fa-bell" style="padding-top: 40px;"></i></div>
		          	<h4 class="title">Cerdas Cermat</h4>
		          	<p class="description justify">Cabang Lomba <b>Cerdas Cermat</b> diperuntukan kepada siswa SMA/SMK Sederajat se-Bali. Biaya Pendaftaran Rp. 150.000,-</p>
		          	<a href="/landing/cerdasCermat" class="btn-get-started">Selengkapnya</a>
		        </div>
		    </div>

    	</div>

    	<div class="row">

		    <div class="col-lg-6">
		        <div class="box wow fadeInLeft">
		          	<div class="icon"><i class="fa fa-info-circle" style="padding-top: 40px;"></i></div>
		          	<h4 class="title">Sistem Informasi</h4>
		          	<p class="description justify">Cabang Lomba <b>Sistem Informasi</b> diperuntukan kepada mahasiswa maksimal jenjang S1 seluruh Universitas yang terdapat Indonesia. Biaya Pendaftaran Rp. 150.000,-</p>
		          	<a href="/landing/sistemInformasi" class="btn-get-started">Selengkapnya</a>
		        </div>
		    </div>

		    <div class="col-lg-6">
		        <div class="box wow fadeInRight">
		          	<div class="icon"><i class="fa fa-money" style="padding-top: 40px;"></i></div>
		          	<h4 class="title">Pengembangan Ide Bisnis TIK</h4>
		          	<p class="description justify">Cabang Lomba <b>Pengembangan Ide Bisnis TIK</b> diperuntukan kepada kalangan Umum (maksismal 28 tahun) seluruh Indonesia. Biaya Pendaftaran Rp. 200.000,-</p>
		          	<a href="/landing/ideBisnis" class="btn-get-started">Selengkapnya</a>
		        </div>
		    </div>
      
    	</div>

  	</div>
</section>

<!--==========================
      Contact Lain Section
============================-->
<section id="contact">
    <div class="container wow fadeInUp" style="padding-bottom: 60px;">
        <div class="section-header">
          	<h3 class="section-title">Kontak</h3>
        </div>
    </div>

    <div class="container wow fadeInUp">

        <div class="row" style="margin-bottom: 20px;">

          	<div class="col-sm-12 col-md-4 twitter">
            	<h3><b>Twitter</b> Feed</h3>
              	<a class="twitter-timeline" data-width="360" data-height="500" data-theme="light" data-link-color="#021b79" href="https://twitter.com/ITCCUdayana" style="color: #0575e6;">Tweets by ITCCUdayana</a>
          	</div>

          	<div class="col-sm-12 col-md-4 facebook">
            	<h3><b>Facebook</b> Feed</h3>
            	<div class="fb-page" data-href="https://www.facebook.com/ITCC.Udayana/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ITCC.Udayana/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ITCC.Udayana/" style="color: #0575e6;">ITCC Udayana</a></blockquote></div>
                 
          	</div>
          	<div class="col-sm-12 col-md-4">

            	<h3>Hubungi Kami</h3>
            	<hr>
            	<p>Teknologi Informasi Jimbaran <br>
            	Gedung Teknologi Informasi-Fakultas Teknik, <br>
            	Jalan Raya Kampus UNUD, Jimbaran, Badung, Bali</p>
            	<hr>
            	<p>CP 1<br>
            	CP 2</p><br>
            	<p><a href="https://www.facebook.com/ITCC.Udayana"><img style="width: 30px;" src="{{asset('asset1/images/facebook.png')}}"></a><a href="https://twitter.com/ITCCUdayana"><img style="width: 30px;" src="{{asset('asset1/images/twitter.png')}}"></a><a href="https://www.instagram.com/itcc_udayana/"><img style="width: 30px;" src="{{asset('asset1/images/instagram.png')}}"></a><a href="https://ask.fm/itcc_udayana"><img style="width: 30px;" src="{{asset('asset1/images/Askfm.png')}}"></a><a href="https://bit.ly/ITCCUdayana"><img style="width: 30px;" src="{{asset('asset1/images/line.png')}}"></a></p>
                    
          	</div>

        </div>

    </div>
</section><!-- #contact -->
@endsection