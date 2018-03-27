<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!--fav icon-->
    <link rel="icon" type="image/jpg" href="{{asset('asset/images/logoitcc.png')}}">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!--css-->
    <link href="{{asset('asset/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  	<link href="{{asset('asset/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  	<link href="{{asset('asset/lib/animate-css/animate.min.css')}}" rel="stylesheet">
  	<link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
  	<link href="{{asset('asset/css/myStyle.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/custom.css')}}" rel="stylesheet">

    <!--meta-->
    <meta name       ="description" content="Information Technology Creative Competition (ITCC) adalah kompetisi bidang Teknologi Informasi yang diselenggarakan oleh Himpunan Mahasiswa Teknologi Informasi (HMTI), Fakultas Teknik, Universitas Udayana.">
    <meta name       ='keywords' content="ITCC 2017, TI Udayana, Fakultas Teknik, Universitas Udayana, ITCC Unud, ITCC Udayana"/>
    <meta http-equiv ="content-type" content="text/html;charset=UTF-8">
    <meta property   ="og:type" content="website" />
    <meta property   ="og:title" content="ITCC 2017" />
    <meta property   ="og:site_name" content="ITCC 2017"/>
    <meta property   ="og:image" itemprop="image" content="images/capture1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--javascript-->
  	<script src="{{asset('asset/lib/jquery/jquery-1.10.2.min.js')}}"></script>
  	<script src="{{asset('asset/lib/jquery/jquery.min.js')}}"></script>
  	<script src="{{asset('asset/lib/bootstrap/js/bootstrap.js')}}"></script>
  	<script src="{{asset('asset/lib/superfish/hoverIntent.js')}}"></script>
  	<script src="{{asset('asset/lib/superfish/superfish.min.js')}}"></script>
  	<script src="{{asset('asset/lib/morphext/morphext.min.js')}}"></script>
  	<script src="{{asset('asset/lib/wow/wow.min.js')}}"></script>
  	<script src="{{asset('asset/lib/stickyjs/sticky.js')}}"></script>
  	<script src="{{asset('asset/lib/easing/easing.js')}}"></script>
  	<script src="{{asset('asset/js/custom.js')}}"></script>
  	<script src="{{asset('asset/contactform/contactform.js')}}"></script>
</head>
<body>
	<div id="preloader"></div>
	<!--header-->
	<header id="header" class="color-red">
		<div class="container">

			<div id="logo" class="pull-left">
				<a href="/"><img src="asset/images/logo-header1.png" alt="" title="" /></img></a>
			</div>

			<!--navbar-->
			<nav id="nav-menu-container">
		        <ul class="nav-menu">
			        <li><a href="/">Beranda</a></li>
			        <li><a href="/login">Masuk</a></li>
			        <li><a href="/signup">Pendaftaran</a></li>
			        <li><a href="#">FAQ</a></li>
		        </ul>
      		</nav>
      		<!--end navbar-->
			
		</div>
	</header>
	<!--end header-->

	@yield('content')

	<!--footer-->
	<div id="footer" style="background-color: #f7f7f7;">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-12 col-md-6">
	                <div class="contact-box wow fadeInUp  all-shadow" data-wow-duration="1000ms" data-wow-delay="300ms">
	                    <div class="contact-box-head" style="background-color: #650802;">
	                        <h3 style="font-family: 'Open Sans'">Sponsorship</h3>
	                    </div>
	                    <div class="contact-box-body" style="padding:20px;">
	                        <!--img title="Sponsorship" src="images/sponsor.png" style="width:100%;height:auto;float:left;margin: 2px;"-->
	                    </div>
	                </div>
	            </div>
	                     
	            <div class="col-sm-12 col-md-6">
	                <div class="contact-box wow fadeInUp  all-shadow" data-wow-duration="1000ms" data-wow-delay="700ms">
	                    <div class="contact-box-head" style="background-color: #650802;">
	                        <h3 style="font-family: 'Open Sans'">Media Partner</h3>
	                    </div>
	                    <div class="contact-box-body" style="padding:20px;">
	                        <!--img title="Media Partner" src="images/mediapartner.png" style="width:100%;height:auto;float:left;margin: 2px;"-->
	                    </div>
	                </div>                    
	            </div>
	        </div>
	    </div>

	    <p style="color: #650802;">&copy; Information Technology Creative Competition 2018 | <a href="http://it.unud.ac.id" style="color: #ec6b63;">Teknologi Informasi Udayana</a></p>
	         
	</div>
	<!--end footer-->

	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

</body>
</html>