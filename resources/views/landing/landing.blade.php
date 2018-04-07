@extends('layout.template')

@section('title')
ITCC 2018
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
<li><a href="#hero">Beranda</a></li>
<li><a href="#profile">Profile</a></li>
<li><a href="#lomba">Lomba</a></li>
<li><a href="#jadwal">Jadwal</a></li>
<li><a href="#contact">Kontak</a></li>
<li class="menu-has-children"><a href="#">Pendaftaran</a>
  	<ul>
    	<li><a href="/signup-prog">Lomba Pemrograman</a></li>
    	<li><a href="/signup-web">Lomba Desan Web</a></li>
    	<li><a href="/signup-lcc">Lomba Cerdas Cermat</a></li>
    	<li><a href="/signup-si">Lomba Sistem Informasi</a></li>
    	<li><a href="/signup-idea">Lomba Pengembangan Ide Bisnis TIK</a></li>
  	</ul>
</li>
<li><a href="/login">Masuk</a></li>
<li><a href="#">FAQ</a></li>
@endsection

@section('intro')
<!--==========================
    Hero Section
============================-->
<section id="hero">
    <div class="container">

      	<div class="row" style="padding-top: 170px;">
        	<div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="500ms">
          		<h1>Information Technology Creative Competition</h1>
          		<p>Information Technology Creative Competition (ITCC) adalah kompetisi bidang Teknologi Informasi yang diselenggarakan oleh Himpunan Mahasiswa Teknologi Informasi (HMTI) Universitas Udayana. ITCC 2018 hadir dengan lima cabang lomba yang bertujuan untuk menumbuhkan kreativitas dalam diri peserta khususnya yang berkaitan dengan bidang Teknologi Informasi dan Komnunikasi.</p>
          		<a href="#profile" class="btn-get-started">Selengkapnya</a>
        	</div>
        	<div id="logo" class="col-lg-6 wow fadeInUp hide-sm" data-wow-duration="1500ms" data-wow-delay="500ms">
          		<img src="asset1/images/logo-itcc5.png" style="width: 100%;">
        	</div>
      	</div>

    </div>
</section><!-- #hero -->
@endsection

@section('content')
<!--==========================
      About Us Section
============================-->
<section id="profile">
    <div class="container">

    	<div class="row wow fadeInUp">

          	<div class="col-lg-6">
            	<div class="video-container" >
              		<div onclick="thevid=document.getElementById('thevideo'); thevid.style.display='block'; this.style.display='none'">
                 		<img class="img-responsive" src="asset1/images/imgvid3.jpg" style="margin:0 0 0 0;cursor:pointer; width: 100%">
              		</div>
              		<div id="thevideo" style="display:none;">
                 		<!--iframe width="560" height="315" src="https://www.youtube.com/embed/NU9h19h574Q" frameborder="0" allowfullscreen></iframe-->
              		</div>
            	</div>
          	</div>

          	<div class="col-lg-6">
            	<h1>ITCC 2018</h1>
            	<p class="justify">Information Technology Createve Competition (ITCC) 2018 merupakan penyelenggaran ketujuh dari Himpunana Mahasiswa Teknologi Informasi, Fakultas Teknik, Universitas Udayana. ITCC 2018 mengambil tema</p>
            	<h2>"Tema"</h2>
            	<p class="justify">Information Technology Createve Competition (ITCC) 2018 merupakan penyelenggaran ketujuh dari Himpunana Mahasiswa Teknologi Informasi, Fakultas Teknik, Universitas Udayana. ITCC 2018 mengambil tema</p>
          	</div>

    	</div>

    </div>
</section><!-- #about -->

<!--==========================
      Lomba Section
============================-->
<section id="lomba">
    <div class="container">

        <header class="section-header">
          	<h3>Kategori Lomba</h3>
        </header>

        <div class="row about-cols">

          	<div class="col-md-4 wow fadeInUp">
            	<div class="about-col">
             		<div class="img">
                		<img src="asset1/img/about-mission.jpg">
                		<div class="icon"><i class="fa fa-code"></i></div>
              		</div>
              		<h2>Pemrograman</h2>
              		<p>
                		Cabang Lomba <b>Pemrograman</b> diperuntukan kepada siswa SMA/SMK Sederajat se-Bali. Biaya Pendaftaran Rp. 85.000,-
              		</p>
              		<center><a href="/pemrograman" class="btn-get-started">Selengkapnya</a></center>
            	</div>
          	</div>

          	<div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            	<div class="about-col">
              		<div class="img">
                		<img src="asset1/img/about-plan.jpg">
                		<div class="icon"><i class="fa fa-css3"></i></div>
              		</div>
              		<h2>Desain Web</h2>
              		<p>
                		Cabang Lomba <b>Desain Web</b> diperuntukan kepada siswa SMA/SMK Sederajat se-Bali. Biaya Pendaftaran Rp. 85.000,-
              		</p>
              		<center><a href="/desain-web" class="btn-get-started">Selengkapnya</a></center>
            	</div>
          	</div>

          	<div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            	<div class="about-col">
              		<div class="img">
                		<img src="asset1/img/about-vision.jpg">
                	<div class="icon"><i class="fa fa-bell"></i></div>
              		</div>
              		<h2>Cerdas Cermat</h2>
              		<p>
                		Cabang Lomba <b>Cerdas Cermat</b> diperuntukan kepada siswa SMA/SMK Sederajat se-Bali. Biaya Pendaftaran Rp. 150.000,-
              		</p>
              		<center><a href="/cerdas-cermat" class="btn-get-started">Selengkapnya</a></center>
            	</div>
          	</div>

        </div>

        <div class="row about-cols">

          	<div class="col-md-6 wow fadeInUp">
            	<div class="about-col">
              		<div class="img">
                		<img src="asset1/img/about-mission.jpg">
                		<div class="icon"><i class="fa fa-info-circle"></i></div>
              		</div>
              		<h2>Sistem Informasi</h2>
              		<p>
                		Cabang Lomba <b>Sistem Informasi</b> diperuntukan kepada mahasiswa maksimal jenjang S1 seluruh Universitas yang terdapat Indonesia. Biaya Pendaftaran Rp. 150.000,-
              		</p>
              		<center><a href="/sistem-informasi" class="btn-get-started">Selengkapnya</a></center>
            	</div>
          	</div>

          	<div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            	<div class="about-col">
              		<div class="img">
                		<img src="asset1/img/about-plan.jpg">
                		<div class="icon"><i class="fa fa-money"></i></div>
              		</div>
              		<h2>Pengembangan Ide Bisnis TIK</h2>
              		<p>
                		Cabang Lomba <b>Pengembangan Ide Bisnis TIK</b> diperuntukan kepada kalangan Umum (maksismal 28 tahun) seluruh Indonesia. Biaya Pendaftaran Rp. 200.000,-
              		</p>
              		<center><a href="/idea" class="btn-get-started">Selengkapnya</a></center>
            	</div>
          </div>
          
        </div>


    </div>
    
</section><!-- #lomba -->

<!--==========================
    Call To Action Section
============================-->
<section id="call-to-action">
    <div class="container wow fadeIn">
        <div class="row">

          	<div class="col-lg-12 text-center">
            	<h3 class="cta-title">ITCC 2018</h3>
            	<h4 class="cta-text">"Tema"</h4>
          	</div>

        </div>
    </div>
</section><!-- #call-to-action -->

<!--==========================
      Informasi
============================-->
<section id="informasi">
    <div class="container wow fadeInUp">

        <div class="section-header">
          	<h3 class="section-title">Informasi ITCC 2018</h3>
        </div>

        <div class="row" style="padding-top: 60px;">

          	<div class="col-lg-4">
            	<h3>Icon ITCC</h3>
            	<h4>Comming Soon</h4>
          	</div>

          	<div class="col-lg-8 about-itcc">
              	<div class="head-news" style="background-color: #202a2d;padding: 15px;">
                	<h2 style="color: #fafafa; text-align: center; margin: 0px;"> Informasi Terbaru <b>ITCC 2018</b></h2>
             	</div>
              	<div class="body-news" style="border-style: solid; border-color: #202a2d;">
                	<ul style="padding-right: 40px;">
                  		<li>
                  			<h4 style="margin: 0px;color: #0575e6;  margin-top: 10px;">Pendaftaran ITCC 2017</h4>
                        	<p style="color: #202a2d; text-align: justify;"> Pendaftaran dibuka pada tanggal 25 Juli 2017 sampai dengan 25 Agustus 2017, peserta diperbolehkan untuk langsung berkas lomba sesuai cabang lomba yang diikuti.</p>
                  		</li>
                  		<hr style="margin-right: 100px; background-color:#202a2d; ">
                  		<li>
                  			<h4 style="margin: 0px;color: #0575e6;  margin-top: 10px; ">Finalis Lomba Pengembangan Ide Bisnis TIK</h4>
                        	<p style="color: #202a2d; text-align: justify;"> "Pengumuman finalis pada cabang lomba pengembangan ide bisnis TIK dapat dilihat <a href="#" >disini</a></p>
                  		</li>
                  		<hr style="margin-right: 100px; background-color:#202a2d; ">
                  		<li> 
                        	<h4 style="margin: 0px;color: #0575e6;  margin-top: 10px; ">Finalis Lomba Sistem Informasi</h4>
                        	<p style="color: #202a2d; text-align: justify;">"Pengumuman finalis pada cabang lomba sistem informasi dapat dilihat <a href="#">disini</a></p>
                  		</li>
                   		<hr style="margin-right: 100px; background-color:#202a2d; ">
                	</ul>
             	 </div>
            </div>
          
        </div>
        
    </div>
</section><!-- #informasi -->

<!--==========================
      Jadwal
============================-->
<section id="jadwal" class="cd-horizontal-timeline wow fadeInUp" style="background-color: #fff; padding-top: 80px; padding-bottom: 60px;">
    <div class="section-header">
          <h3 class="section-title">Jadwal ITCC 2018</h3>
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
	          		<li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
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
			        <h1 class="text-black">Pendaftaran</h1>
			        <em>January 16th, 2014</em>
			        <p style="font-size: 15px;"><i class="fa fa-bars"></i> 
			            Desain Web, Cerdas Cermat, Pemrograman, Pengembangan Ide Bisnis TIK, Sistem Informasi
			        </p>
			        <p>
			            Pendaftaran online peserta pada halaman web ITCC 2018. Pengunggahan berkas lomba Desain Web, Pengembangan Ide Bisnis TIK, Sistem Informasi
			        </p>
	        	</center>
	      	</li>

		    <li data-date="20/04/2014">
		    	<center>
		          	<h1 class="text-black">Penutupan Pendaftaran</h1>
		          	<em>March 20th, 2014</em>
		          	<p style="font-size: 15px;"><i class="fa fa-bars"></i> 
		            	Desain Web, Cerdas Cermat, Pemrograman, Pengembangan Ide Bisnis TIK, Sistem Informasi
		          	</p>
		          	<p> 
		            	Penutupan Pendaftaran bagi seluruh cabang lomba serta batas pengumpulan berkas lomba Desain Web, Pengembangan Ide Bisnis TIK dan Sistem Informasi.
		          	</p>
		        </center>
		    </li>

	      	<li data-date="09/07/2014">
		        <center>
		          	<h1 class="text-black">Pengumuman Peserta Lolos Babak Final</h1>
		          	<em>July 9th, 2014</em>
		          	<p style="font-size: 15px;"><i class="fa fa-bars"></i> 
		             	Pengembangan Ide Bisnis TIK, Sistem Informasi
		          	</p>
		          	<p> 
		            	Pengumuman peserta yang lolos babak final dari kategori Mahasiswa/Umum
		          	</p>
		        </center>
	      	</li>

	      	<li data-date="30/08/2014">
		        <center>
		          	<h1 class="text-black">Technical Meeting</h1>
		          	<em>August 30th, 2014</em>
		          	<p style="font-size: 15px;"><i class="fa fa-bars"></i> 
		            	Desain Web, Cerdas Cermat, Pemrograman, Pengembangan Ide Bisnis TIK, Sistem Informasi
		          	</p>
		          	<p> 
		            	Technical Meeting bertempat di Kampus Teknologi Informasi Fakultas Teknik Universitas Udayana, Bali
		          	</p>
		        </center>
	      	</li>

	      	<li data-date="15/09/2014">
		        <center>
		          	<h1 class="text-black">Babak Penyisihan</h1>
		          	<em>September 15th, 2014</em>
		          	<p style="font-size: 15px;"><i class="fa fa-bars"></i> 
		              	Desain Web, Cerdas Cermat, Pemrograman, Pengembangan Ide Bisnis TIK, Sistem Informasi
		          	</p>
		          	<p> 
		            	Babak penyisihan Pemrograman, Desain Web dan Semifinal Sesi 1 dan 2 Lomba Cerdas Cermat
		          	</p>
		        </center>
	      	</li>

	      	<li data-date="01/11/2014">
		        <center>
		          	<h1 class="text-black">Puncak Acara</h1>
		          	<em>November 1st, 2014</em>
		          	<p style="font-size: 15px;"><i class="fa fa-bars"></i> 
		                Desain Web, Cerdas Cermat, Pemrograman, Pengembangan Ide Bisnis TIK, Sistem Informasi
		          	</p>
		          	<p> 
		            	Puncak Acara - Semi Final Sesi 3 dan 4 untuk cabang lomba Cerdas Cermat. Babak Final untuk semua cabang lomba.
		          	</p>
		        </center>
	      	</li>

    	</ol>
  	</div> <!-- .events-content -->
</section>

<section id="google-map" data-latitude="-8.796310" data-longitude="115.176455"></section>

<!--==========================
      Contact Section
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
            	<p><a href="https://www.facebook.com/ITCC.Udayana"><img style="width: 30px;" src="asset1/images/facebook.png"></a><a href="https://twitter.com/ITCCUdayana"><img style="width: 30px;" src="asset1/images/twitter.png"></a><a href="https://www.instagram.com/itcc_udayana/"><img style="width: 30px;" src="asset1/images/instagram.png"></a><a href="https://ask.fm/itcc_udayana"><img style="width: 30px;" src="asset1/images/Askfm.png"></a><a href="https://bit.ly/ITCCUdayana"><img style="width: 30px;" src="asset1/images/line.png"></a></p>
                    
          	</div>

        </div>

    </div>
</section><!-- #contact -->
@endsection