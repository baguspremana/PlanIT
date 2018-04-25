@extends('layout.dashboard-template')

@section('title')
    Upload Data - ITCC 2018
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3><center>Verifikasi</center></h3>
		</div>
	</div>

	<div class="row">
		
		<div class="col-md-6">
			<div class="panel">
				<div class="panel">

					<div class="panel-heading">
						<h3 class="panel-title"><center>Upload Bukti Pembayaran</center></h3>
						<div class="right">
							<button type="button" class="btn-toggle-collapse"><i class="fa fa-chevron-up"></i></button>
						</div>
					</div>
					<div class="panel-body">
						<form action="#" method="post">

							<div class="form-group">
								<label class="control-label col-md-3">Bukti Pembayaran</label>
								<div class="col-md-9">
									<input type="file" name="photo" class="form-control" accept="images/*">
									<small>Gambar dalam bentuk file .jpg</small>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Komen</label>
								<div class="col-md-9">
									<textarea class="form-control" name="komen" placeholder="Input Komen"></textarea>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>

						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel">
				
				<div class="panel-heading">
					<h3 class="panel-title">Notifikasi</h3>
					<div class="right">
						<button type="button" class="btn-toggle-collapse"><i class="fa fa-chevron-up"></i></button>
					</div>
				</div>
				<div class="panel-body">
					<div class="alert alert-warning">
						<p style="font-weight: bold;">Hai, Nama Peserta</p>
						<p style="text-align: justify; text-justify: inter-word;">Apakah data anda sudah terisi lengkap? Silahkan dilanjutkan dengan pembayaran pendaftaran lomba melalui ATM pada rekening <b>Nama Bank</b><i> no rekening a.n Nama Bendahara</i>.
							Nominal uang yang ditransfer adalah <b>Rp. Jumlah Biaya</b></p>
						<p style="text-align: left">Rincian Biaya sebagai berikut :
							<ul>
								<li style="text-align: left">Biaya Pendaftaran Rp. </li>
								<li style="text-align: left">Baju Peserta Rp. </li>
							</ul>
						</p><br>
						<p><b>INGAT! Nominal harus sesuai dengan yang disebutkan diatas. Jika tidak, maka data tidak akan diproses.</b></p>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>
@endsection