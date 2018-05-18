@extends('layout.template')
@section('title')
	Pendaftaran - Pemrograman - ITCC 2018
@endsection

@section('navbar')
<li><a href="/">Beranda</a></li>
<li class="menu-has-children"><a href="#">Pendaftaran</a>
  	<ul>
    	<li><a href="/daftar/pemrograman">Lomba Pemrograman</a></li>
    	<li><a href="/daftar/desainweb">Lomba Desan Web</a></li>
    	<li><a href="/daftar/cerdascermat">Lomba Cerdas Cermat</a></li>
    	<li><a href="/daftar/idebisnis">Lomba Sistem Informasi</a></li>
    	<li><a href="/daftar/idebisnis">Lomba Pengembangan Ide Bisnis TIK</a></li>
  	</ul>
</li>
<li><a href="/login">Masuk</a></li>
<li><a href="/faq">FAQ</a></li>
@endsection

@section('intro')
<!--HEADER WEBSITE-->
<div id="bg-signup" >
    <div class="container">
    	<div class="row" style="margin-top: 90px;">

    		<div class="col-md-4 login-page" style="background: #232323; height: 650px; margin-top: 50px;">
                <img src="{{asset('asset/images/logo-itcc5.png')}}" style=" width: 70%;margin-left: 65px;margin-top: 70px;" class="img-responsive center-block ">
                     
                <h4 style="color:#a2c8cc; text-align: center;">"Tema"</h4>
                <h3 style="color: white; text-align: center;">Pemrograman</h3>
                <hr style="width: 80%; color: white; margin-bottom: 5px;">
                <p style="color: white; text-align: center;">
                	Pemrograman tingkat SMA/SMK sederajat Se-Bali merupakan salah satu cabang perlombaan yang ada dalam kegiatan ITCC 2018 yang bertujuan untuk menjaring siswa/siswi SMA, SMK ataupun jenjang yang sederajat seluruh Bali yang memiliki kompetensi<br> di bidang komputer khususnya <br>logika komputasi dan pemrograman.

                </p>

                <p style="margin-left: 105px;"><a href="https://www.facebook.com/ITCC.Udayana"><img style="width: 30px;" src="{{asset('asset/images/facebook.png')}}"></a><a href="https://twitter.com/ITCCUdayana"><img style="width: 30px;" src="{{asset('asset/images/twitter.png')}}"></a><a href="https://www.instagram.com/itcc_udayana/"><img style="width: 30px;" src="{{asset('asset/images/instagram.png')}}"></a><a href="https://ask.fm/itcc_udayana"><img style="width: 30px;" src="{{asset('asset/images/Askfm.png')}}"></a><a href="https://bit.ly/ITCCUdayana"><img style="width: 30px;" src="{{asset('asset/images/line.png')}}"></a></p>
            </div>

            <div class="col-md-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            	<section id="daftar">
            		<div class="form" style="background-color: white;">
            			<div class="box" style="margin-top: 50px;">
                     		<form action="#" class="form-horizontal" method="post" accept-charset="utf-8">
								{{ csrf_field() }}
								<input type="hidden" value="1" name="competition_id" />
                     			<div class="box-body">
                      				<h3 style="text-align: center; font-size: 30px;">Form Pendaftaran Pemrograman</h3>
                        			<div class="box-body-col">
                           				<h4>Data Diri</h4>
                           				<div class="form-group row">
                             				<label class="col-form-label col-md-3">Asal Sekolah</label>
                             				<div class="col-md-9">
                                 				<input class="form-control{{ $errors->has('institution') ? ' is-invalid' : '' }}" placeholder="ex. 'SMA/SMK Permata'" name="institution" type="text" value="{{old('institution')}}">

                                 				@if ($errors->has('institution'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('institution') }}</strong>
				                                    </span>
				                                @endif
                             				</div>
                           				</div>
				                        <div class="form-group row">
				                            <label class="col-form-label col-md-3">Nama Lengkap</label>
				                            <div class="col-md-9">
				                                <input class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" placeholder="ex. 'Nama Brata'" name="fullname" type="text" value="{{old('fullname')}}">

				                                @if ($errors->has('fullname'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('fullname') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-form-label col-md-3">Tanggal Lahir</label>
				                            <div class="col-md-9">
				                                <input class="form-control {{ $errors->has('birthdate') ? ' is-invalid' : '' }}" placeholder="ex. '1995/12/27'" name="birthdate" type="date" value="{{old('birthdate')}}">

				                                @if ($errors->has('birthdate'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('birthdate') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-form-label col-md-3">Email</label>
				                            <div class="col-md-9">
				                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="ex. 'mail@site.com'" name="email" type="email" value="{{old('email')}}">

				                                @if ($errors->has('email'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('email') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                        	<label class="col-form-label col-md-3">Nomor Kontak</label>
				                            <div class="col-md-9">
				                                <input class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" placeholder="ex. '081632111111'" name="contact" type="text" value="{{old('contact')}}">

				                                @if ($errors->has('contact'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('contact') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-form-label col-md-3">Vegetarian</label>
				                            <div class="col-md-9">
				                               <label><input {{ old('vegetarian')=="1"?"checked":"" }} class="{{ $errors->has('vegetarian') ? ' is-invalid' : '' }}" type="radio" value="1" name="vegetarian"> Ya </label> <label><input {{ old('vegetarian')=="0"?"checked":"" }}  type="radio" value="0" class="{{ $errors->has('vegetarian') ? ' is-invalid' : '' }}" name="vegetarian"> Tidak</label>
				                               @if ($errors->has('vegetarian'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('vegetarian') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-form-label col-md-3">Kartu Identitas</label>
				                            <div class="col-md-9">
				                                <input name="photo" type="file" class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" accept="image/*">
				                                <small>Gambar dalam bentuk file .jpg</small>

				                                @if ($errors->has('photo'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('photo') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
			                            <div class="form-group row">
			                              	<label class="col-form-label col-md-3">Baju Peserta</label>
			                              	<div class="col-md-9">
			                                  	<label><input {{ old('buy_shirt')=="1"?"checked":"" }} type="radio" id="baju-yes" class="{{ $errors->has('buy_shirt') ? ' is-invalid' : '' }}" value="1" name="buy_shirt"> Ya </label> <label><input {{ old('buy_shirt')=="0"?"checked":"" }} type="radio" id="baju-no" class="{{ $errors->has('buy_shirt') ? ' is-invalid' : '' }}" value="0" name="buy_shirt"> Tidak</label><br>
			                                  	<small>Apabila Anda membeli baju peserta, akan dikenakan biaya tambahan sebesar Rp</small><small id="harga_baju">{{$harga_baju}}</small>
			                                  	@if ($errors->has('buy_shirt'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('buy_shirt') }}</strong>
				                                    </span>
				                                @endif
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
				                                <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="nama pengguna" name="username" type="text" value="{{old('username')}}">

				                                @if ($errors->has('username'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('username') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-form-label col-md-3">Password</label>
				                            <div class="col-md-9">
				                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="kata sandi" name="password" id="pass" type="password">

				                                @if ($errors->has('password'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('password') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <label class="col-form-label col-md-3">Konfirmasi Password</label>
				                        	<div class="col-md-9">
				                                <input class="form-control" placeholder="ulangi kata sandi" name="password_confirmation" id="pass2nd" type="password">
				                                @if ($errors->has('password_confirmation'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
				                                    </span>
				                                @endif
				                                 <!-- <span id='message'></span> -->
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
<script>
	$('#baju-yes').click(function(e){
		$('#ukuran-baju').show();
	});
	$('#baju-no').click(function(e){
		$('#ukuran-baju').hide();
	});
</script>
@endsection