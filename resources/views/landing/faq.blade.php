@extends('layout.template')
@section('title')
	FAQ - ITCC 2018
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
<div id="bg-content">
	<div class="container">
		<div class="row" style="margin-top: 130px;">
			<div class="col-md-2 hidden-sm hidden-sx"></div>
			<div class="col-md-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<div class="box">

					<div class="box-head" style="background-color: #021b79;">
						<h3>Frequently Asked Questions (FAQ)</h3>
					</div>

					<div class="box-body">
						<dl>
                            <dt>Cara Mendaftar ITCC 2018</dt>
                            <dd style="padding: 10px;"><p>Caranya sangat mudah.
                            <br>
                                Daftar pada bagian pendaftaran di navbar atas.
                                <br>
                                Lengkapi data diri dan/atau data anggota tim.<br>
                                Bayar lomba melalui ATM pada rekening <b>Nama Bank</b>, <b><i>Nomor rek a.n Nama bendahara</i></b>
                                Kirim foto bukti pembayaran pada <a href="#" style="color: #021b79;">halaman verifikasi</a>. Pastikan kamu sudah masuk(login) ke ITCC 2018.
                                Tunggu proses verifikasi selesai.<p></dd>
                            
                            <dt>Kartu Identitas Pada Saat Pendaftaran</dt>
                            <dd style="padding: 10px;"><p>Kartu identitas yang dimaksud untuk kategori Pengembangan Ide Bisnis TIK adalah Kartu Tanda Penduduk atau jika tidak ada bisa menggunakan Kartu Tanda Siswa/Mahasiswa, untuk cabang lomba Sistem Informasi menggunakan Kartu Tanda Mahasiswa. Sedangkan untuk kategori Pemrograman, Desain Web dan juga Cerdas Cermat kartu identitas yang dimaksud adalah Kartu Tanda Siswa.</p></dd>
                            
                            <dt>Lokasi Lomba Diadakan</dt>
                            <dd>Lokasi lomba akan diadakan di kampus Teknologi Informasi Udayana Bukit, Jimbaran. (<a target="_blank" href="#" style="color: #021b79;">Google Maps</a>)</dd>
                            
                            <dt>Kalangan yang dapat Mengikuti Kategori Lomba Umum</dt>
                            <dd>Pada kategori lomba umum dibatasi dengan usia maksimal 28 tahun.</dd>
                            
                            <dt>Hadiah Jalan-Jalan di Bali</dt>
                            <dd>Hadiah jalan-jalan di Bali hanya berlaku bagi pemenang lomba Pengembangan Ide Bisnis TIK dan Sistem Informasi.</dd>

                            <dt>Pendaftaran ITCC 2018</dt>
                            <dd>Pendaftaran hanya tersedia Online melalui laman <a href="#" style="color: #021b79;">nama website</a></dd>

                            <dt>Pembayaran Biaya Pendaftaran di ATM</dt>
                            <dd>Nominal pembayaran bisa di lihat di halaman 'Verifikasi'. Nominal pembayaran harus sesuai untuk mempermudah proses.</dd>

                            <dt>Arti dari Tema ITCC 2018</dt>
                            <dd>Melalui ITCC 2018 diharapkan mampu mendukung terciptanya inovasi dalam teknologi, khususnya teknologi informasi yang akan berdampak terhadap lingkungan hidup, baik itu sosial maupun alam.</dd>
                        </dl>
                        <style type="text/css">
                            dl {
                                background: #e3e3e3;
                                border: 1px solid rgba(0,0,0, .2);
                            }

                            dl, dt, dd{
                                /*border-radius: 5px;*/
                            }

                            dt {
                                background-color:#021b79;
                                border-bottom: 1px solid #0575e6;
                                border-top: 1px solid #0575e6;
                                color: #FAFAFA;
                                cursor: pointer;
                                font-size: 12pt;
                                
                                line-height: 2em;
                                /*text-shadow: -1px -1px 0px #1169c3;*/
                            }

                            dt:first-child {
                                border-top: 0;
                            }

                            dt:last-of-type {
                                border-bottom: 0;
                            }

                            dd {
                                margin-left: 0;
                                padding: 0;
                            }
                        </style>
                        <script type="text/javascript">
                            (function() {
                               
                                $('dd').filter(':nth-child(n+4)').hide();
                                    
                                $('dl').on("mouseenter", 'dt', function() {
                                    $(this)
                                        .next()
                                        .slideDown(300)
                                        .siblings('dd')
                                        .slideUp(300);
                                });    
                            })();
                        </script>
					</div>

				</div>
			</div>
			<div class="col-md-2 hidden-sm hidden-xs"></div>
		</div>
	</div>
</div>
@endsection