
<style>
	.has-error {
		border: 1px solid red;
	}
</style>
<!--HEADER WEBSITE-->
<div id="bg-signup">
    <div class="container">
    	<div class="row" style="margin-top: 90px;">

    		<div class="col-md-4 login-page" style="background: #232323; height: 650px; margin-top: 50px;">
                <img src="{{asset('asset/images/logo-itcc5.png')}}" style=" width: 70%;margin-left: 65px;margin-top: 60px;" class="img-responsive center-block ">
                     
                <h4 style="color:#a2c8cc; text-align: center;">"Tema"</h4>
                <h3 style="color: white; text-align: center;">Pengembangan Ide Bisnis TIK</h3>
                <hr style="width: 80%; color: white; margin-bottom: 5px;">
                <p style="color: white; text-align: center;">
                	Pengembangan Ide Bisnis TIK merupakan salah satu perlombaan yang diselenggarakan pada kegiatan ITCC 2018 untuk mengajak masyarakat Indonesia mengembangkan bisnis melalui produk TIK. Lomba ini diperuntukkan untuk umum (maksimal umur 24 tahun) dengan cara membuat proposal bisnis serta prototype produk.

                </p>

                <p style="margin-left: 105px;"><a href="https://www.facebook.com/ITCC.Udayana"><img style="width: 30px;" src="{{asset('asset/images/facebook.png')}}"></a><a href="https://twitter.com/ITCCUdayana"><img style="width: 30px;" src="{{asset('asset/images/twitter.png')}}"></a><a href="https://www.instagram.com/itcc_udayana/"><img style="width: 30px;" src="{{asset('asset/images/instagram.png')}}"></a><a href="https://ask.fm/itcc_udayana"><img style="width: 30px;" src="{{asset('asset/images/Askfm.png')}}"></a><a href="https://bit.ly/ITCCUdayana"><img style="width: 30px;" src="{{asset('asset/images/line.png')}}"></a></p>
            </div>

            <div class="col-md-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            	<section id="daftar">
            		<div class="form" style="background-color: white;">
            			<div class="box" style="margin-top: 50px;">
                     		<form action="{{url('/daftar')}}" class="form-horizontal" method="post" accept-charset="utf-8" enctype="multipart/form-data">
								{{ csrf_field() }}
								<input type="hidden" value="4" name="competition_id" />
                     			<div class="box-body">
                      				<h3 style="text-align: center; font-size: 30px;">Form Pendaftaran Pengembangan Ide Bisnis TIK</h3>
                        			<div class="box-body-col">
                           				<h4>Data Tim</h4>
                           				<div class="form-group row{{ $errors->has('group_name') ? ' has-error' : '' }}">
                             				<label for="groupname" class="col-md-3 col-form-label">Nama Tim</label>
				                            <div class="col-md-9">
				                                <input value="{{old('group_name')}}" class="form-control" placeholder="ex. 'Team Greentea'" name="group_name" type="text">
												<span style="color: red; font-size: 12pt"></span>
				                            </div>
                           				</div>
                           				<div class="form-group row{{ $errors->has('institution') ? ' has-error' : '' }}">
                             				<label for="institution" class="col-md-3 col-form-label">Asal Institusi</label>
                             				<div class="col-md-9">
                                 				<input value="{{old('institution')}}" class="form-control" placeholder="ex. 'Universitas Udayana'" name="institution" type="text">
                             				</div>
                           				</div>
                           			</div>

                           			<div class="box-body-col">
                           				<h4>Data Ketua Tim</h4>
                           				<div class="form-group row{{ $errors->has('full_name') ? ' has-error' : '' }}">
				                            <label for="fullname" class="col-md-3 col-form-label">Nama Lengkap</label>
				                            <div class="col-md-9">
				                                <input value="{{old('full_name')}}" class="form-control" placeholder="ex. 'Nama Brata'" name="full_name" type="text">
				                            </div>
				                        </div>
                           				<div class="form-group row{{ $errors->has('birthdate') ? ' has-error' : '' }}">
				                            <label for="birthdate" class="col-md-3 col-form-label">Tanggal Lahir</label>
				                            <div class="col-md-9">
				                                <input value="{{old('birthdate')}}" class="form-control" placeholder="ex. '1995/12/27'" name="birthdate" type="date">
				                            </div>
				                        </div>
                           				<div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
				                            <label for="email" class="col-md-3 col-form-label">Email</label>
				                            <div class="col-md-9">
				                                <input value="{{old('email')}}" class="form-control" placeholder="ex. 'mail@site.com'" name="email" type="email">
				                            </div>
				                        </div>
                           				<div class="form-group row{{ $errors->has('contact') ? ' has-error' : '' }}">
				                        	<label for="contact" class="col-md-3 col-form-label">Nomor Kontak</label>
				                            <div class="col-md-9">
				                                <input value="{{old('contact')}}" class="form-control" placeholder="ex. '081632111111'" name="contact" type="number">
				                            </div>
				                        </div>
                           				<div class="form-group row{{ $errors->has('vegetarian') ? ' has-error' : '' }}">
				                            <label class="col-md-3 col-form-label">Vegetarian</label>
				                            <div class="col-md-9">
				                               <label><input {{ old('vegetarian')=="1"?"checked":"" }} type="radio" value="1" name="vegetarian"> Ya </label> <label><input {{ old('vegetarian')=="0"?"checked":"" }}  type="radio" value="0" name="vegetarian"> Tidak</label>
				                            </div>
				                        </div>
                           				<div class="form-group row{{ $errors->has('photo') ? ' has-error' : '' }}">
				                            <label class="col-md-3 col-form-label">Kartu Identitas</label>
				                            <div class="col-md-9">
				                                <input name="photo" type="file" class="form-control" accept="image/*">
				                                <small>Gambar dalam bentuk file .jpg</small>
				                            </div>
				                        </div>
                           				<div class="form-group row{{ $errors->has('buy_shirt') ? ' has-error' : '' }}">
			                              	<label class="col-md-3 col-form-label">Baju Peserta</label>
			                              	<div class="col-md-9">
			                                  	<label><input {{ old('buy_shirt')=="1"?"checked":"" }} type="radio" id="baju-yes" value="1" name="buy_shirt"> Ya </label> <label><input {{ old('buy_shirt')=="0"?"checked":"" }} type="radio" id="baju-no" value="0" name="buy_shirt"> Tidak</label><br>
			                                  	<small>Apabila Anda membeli baju peserta, akan dikenakan biaya tambahan sebesar Rp</small><small id="harga_baju">{{$harga_baju}}</small>
			                              	</div>
			                            </div>
			                            <div class="form-group row{{ $errors->has('size') ? ' has-error' : '' }}" id="ukuran-baju" style="display: none;">
			                              	<label class="col-md-3 col-form-label">Ukuran Baju</label>
			                              	<div class="col-md-9">
				                                <select id="select-ukuran" name="size" class="form-control">
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
                           				<div class="form-group row{{ $errors->has('username') ? ' has-error' : '' }}">
				                        	<label class="col-md-3 col-form-label">Username</label>
				                            <div class="col-md-9">
				                                <input value="{{old('username')}}" class="form-control" placeholder="nama pengguna" name="username" type="text">
				                            </div>
				                        </div>
                           				<div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
				                            <label class="col-md-3 col-form-label">Password</label>
				                            <div class="col-md-9">
				                                <input class="form-control" placeholder="kata sandi" name="password" id="pass" type="password">
				                            </div>
				                        </div>
                           				<div class="form-group row{{ $errors->has('passconf') ? ' has-error' : '' }}">
				                            <label class="col-md-3 col-form-label">Konfirmasi Password</label>
				                        	<div class="col-md-9">
				                                <input class="form-control" placeholder="ulangi kata sandi" name="passconf" id="pass2nd" type="password">
												<span id='message'></span>
				                            </div>
				                        </div>
                           			</div>
				                        
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

	$('#pass2nd').on('keyup', function () {
			if ($(this).val() == $('#pass').val()) {
				$('#message').html('Konfirmasi Password Cocok').css('color', 'green');
		} 
		else $('#message').html('Konfirmasi Password Tidak Cocok').css('color', 'red');
	});

	$('#baju-yes').click(function(e){
		$('#ukuran-baju').show();
	});
	$('#baju-no').click(function(e){
		$('#ukuran-baju').hide();
	});
</script>