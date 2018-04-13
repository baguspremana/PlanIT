@extends('layout.template')
@section('title')
	Pendaftaran - Sistem Informasi - ITCC 2018
@endsection

@section('navbar')
<li><a href="/">Beranda</a></li>
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
<li><a href="/faq">FAQ</a></li>
@endsection

@section('content')
<!--HEADER WEBSITE-->
<div id="bg-signup" >
    <div class="container">
    	<div class="row" style="margin-top: 90px;">

    		<div class="col-md-4 login-page" style="background: #232323; height: 650px; margin-top: 50px;">
                <img src="asset/images/logo-itcc5.png" style=" width: 70%;margin-left: 65px;margin-top: 70px;" class="img-responsive center-block ">
                     
                <h4 style="color:#a2c8cc; text-align: center;">"Tema"</h4>
                <h3 style="color: white; text-align: center;">Sistem Informasi</h3>
                <hr style="width: 80%; color: white; margin-bottom: 5px;">
                <p style="color: white; text-align: center;">
                	Sistem Informasi merupakan salah satu perlombaan yang kembali hadir setelah tahun 2016 ditiadakan. Pada ITCC 2018 lomba Sistem Informasi bertujuan untuk mengajak masyarakat Indonesia mengembangkan Ide melalui TIK. Lomba ini diperuntukkan untuk mahasiswa dengan cara membuat proposal bisnis serta prototype produk.

                </p>

                <p style="margin-left: 105px;"><a href="https://www.facebook.com/ITCC.Udayana"><img style="width: 30px;" src="asset/images/facebook.png"></a><a href="https://twitter.com/ITCCUdayana"><img style="width: 30px;" src="asset/images/twitter.png"></a><a href="https://www.instagram.com/itcc_udayana/"><img style="width: 30px;" src="asset/images/instagram.png"></a><a href="https://ask.fm/itcc_udayana"><img style="width: 30px;" src="asset/images/Askfm.png"></a><a href="https://bit.ly/ITCCUdayana"><img style="width: 30px;" src="asset/images/line.png"></a></p>
            </div>

            <div class="col-md-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            	<section id="daftar">
            		<div class="form" style="background-color: white;">
            			<div class="box" style="margin-top: 50px;">
                     		<form action="#" class="form-horizontal" method="post" accept-charset="utf-8">
                     
                     			<div class="box-body">
                      				<h3 style="text-align: center; font-size: 30px;">Form Pendaftaran Sistem Informasi</h3>
                        			<div class="box-body-col">
                           				<h4>Data Tim</h4>
                           				<div class="form-group row">
                             				<label class="col-form-label col-md-3">Nama Tim</label>
				                            <div class="col-md-9">
				                                <input class="form-control" placeholder="ex. 'Team Greentea'" name="groupname" type="text">
				                            </div>
                           				</div>
                           				<div class="form-group row">
                             				<label class="col-form-label col-md-3">Asal Institusi</label>
                             				<div class="col-md-9">
                                 				<input class="form-control" placeholder="ex. 'Universitas Udayana'" name="institution" type="text">
                             				</div>
                           				</div>
                           			</div>

                           			<div class="box-body-col">
                           				<h4>Data Ketua Tim</h4>
                           				<div class="form-group row">
				                            <label class="col-form-label col-md-3">Nama Lengkap</label>
				                            <div class="col-md-9">
				                                <input class="form-control" placeholder="ex. 'Nama Brata'" name="fullname" type="text">
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-form-label col-md-3">Tanggal Lahir</label>
				                            <div class="col-md-9">
				                                <input class="form-control" placeholder="ex. '1995/12/27'" name="birthday" type="date">
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-form-label col-md-3">Email</label>
				                            <div class="col-md-9">
				                                <input class="form-control" placeholder="ex. 'mail@site.com'" name="email" type="email">
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                        	<label class="col-form-label col-md-3">Nomor Kontak</label>
				                            <div class="col-md-9">
				                                <input class="form-control" placeholder="ex. '081632111111'" name="contact" type="text">
				                            </div>
				                        </div>
				                        <div class="form-group">
				                            <label class="col-form-label col-md-3">Vegetarian</label>
				                            <div class="col-md-9">
				                               <label><input type="radio" value="Y" name="vegetarian"> Ya </label> <label><input type="radio" value="N" name="vegetarian"> Tidak</label>
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-form-label col-md-3">Kartu Identitas</label>
				                            <div class="col-md-9">
				                                <input name="photo" type="file" class="form-control" accept="image/*">
				                                <small>Gambar dalam bentuk file .jpg</small>
				                            </div>
				                        </div>
			                            <div class="form-group row">
			                              	<label class="col-form-label col-md-3">Baju Peserta</label>
			                              	<div class="col-md-9">
			                                  	<label><input type="radio" id="baju-yes" value="Y" name="baju"> Ya </label> <label><input type="radio" id="baju-no" value="N" name="baju"> Tidak</label><br>
			                                  	<small>Apabila Anda membeli baju peserta, akan dikenakan biaya tambahan sebesar Rp....</small>
			                              	</div>
			                            </div>
			                            <div class="form-group row" id="ukuran-baju" style="display: none;">
			                              	<label class="col-form-label col-md-3">Ukuran Baju</label>
			                              	<div class="col-md-9">
				                                <select id="select-ukuran" name="size" class="form-control" >
					                                <option value="">Pilih Ukuran Baju</option>
					                                <option value="s">Small</option>
					                                <option value="m">Medium</option> 
					                                <option value="l">Large</option>
					                                <option value="xl">Extra Large</option>          
				                                </select>
				                                <small>*peserta yang lolos babak penyisihan akan mendapatkan baju official ITCC 2017. Size Chart dapat dilihat</small> <a data-toggle="modal" data-target="#sizeChart">DISINI</a>
			                              </div>
			                            </div>
                        			</div>
                        			<div class="box-body-col">
                           				<h4>Data Autentifikasi</h4>
				                        <div class="form-group row">
				                        	<label class="col-form-label col-md-3">Username</label>
				                            <div class="col-md-9">
				                                <input class="form-control" placeholder="nama pengguna" name="username" type="text">
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-form-label col-md-3">Password</label>
				                            <div class="col-md-9">
				                                <input class="form-control" placeholder="kata sandi" name="password" id="pass" type="password">
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-form-label col-md-3">Konfirmasi Password</label>
				                        	<div class="col-md-9">
				                                <input class="form-control" placeholder="ulangi kata sandi" name="passconf" id="pass2nd" type="password">
				                                 <span id='message'></span>
				                            </div>
				                        </div>
                           			</div>
				                        
                        			
                        			<!--script type="text/javascript">
			                           $('#pass2nd').on('keyup', function () {
			                                 if ($(this).val() == $('#pass').val()) {
			                                     $('#message').html('Konfirmasi Password Cocok').css('color', 'green');
			                              } 
			                              else $('#message').html('Konfirmasi Password Tidak Cocok').css('color', 'red');
			                           });
                        			</script-->
                         			<button type="submit" style="margin: 0px;width: 100%;margin-top: 20px;">Daftar</button>
                     			</div>
                     
                     		</form>
                  		</div>
            		</div>
            	</section>
            </div>
    	</div>
    </div>
</div>
<!--//HEADER WEBSITE-->
@endsection