@extends('layout.dashboard-admin-template')

@section('title')
    Log Unggah - Admin
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		
		<div class="col-md-1 hidden-sm hidden-xs"></div>
		
		<div class="col-md-10">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Log Unggah</h3>
				</div>

				<div class="panel-body">
					<table class="table table-striped table-bordered table-responsive data">
						<thead>
							<tr>
								<th>Kode</th>
								<th>Nama</th>
								<th>Nama Tim</th>
								<th>Instansi</th>
								<th>Email</th>
								<th>Kontak</th>
								<th>Terakhir Unggah</th>
							</tr>
						</thead>
						<tbody>
							<td>Kodenya</td>
							<td>Namanya</td>
							<td>Nama Timnya</td>
							<td>Instansinya</td>
							<td>Emailnya</td>
							<td>Kontaknya</td>
							<td>Terakhir Unggahnya</td>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-1 hidden-sm hidden-xs"></div>

	</div>
</div>
@endsection