@extends('layout.dashboard-admin-template')

@section('title')
    Daftar Request Verifikasi - Admin
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Daftar Request Verifikasi</h3>
				</div>

				<div class="panel-body">
					<table class="table table-striped table-bordered table-responsive data" id="example">
						<thead>
							<tr>
								<th>Nama Tim</th>
								<th>Instansi</th>
								<th>Biaya Pendaftaran (Rp)</th>
								<th>Biaya Baju (Rp)</th>
								<th>Total (Rp)</th>
								<th>Bukti Bayar</th>
								<th>Tanggal</th>
								<th>Note</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Nama Tim</td>
								<td>Instansi</td>
								<td>Biaya Pendaftaran (Rp)</td>
								<td>Biaya Baju (Rp)</td>
								<td>Total (Rp)</td>
								<td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalGambar"><i class="glyphicon glyphicon-picture"></i></button></td>
								<td>Tanggal</td>
								<td>Note</td>
								<td><input type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalKonfir" value="Verifikasi"></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</div>

	</div>

	<!-- Modal Konfir -->
    <div id="modalKonfir" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: #0575e6; color: #fff;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Konfirmasi</center></h4>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin melakukan verifikasi?</p>
                </div>
                <div class="modal-footer">
                    <form method="post" action="#">
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- End Modal Konfir -->

    <!-- Modal Gambar -->
    <div id="modalGambar" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: #0575e6; color: #fff;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Bukti Pembayaran</center></h4>
                </div>
                <div class="modal-body">
                    <img src="{{asset('asset1/img/portfolio/card1.jpg')}}" style="width: 100%;">
                </div>
                <div class="modal-footer" style="background-color: #0575e6;">

                </div>
            </div>

        </div>
    </div>
    <!-- End Modal Gambar -->

</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@endsection