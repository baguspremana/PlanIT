@extends('layout.dashboard-template')

@section('title')
    Dashboard - ITCC 2018
@endsection

@section('content')
<div class="container-fluid">
    <!-- OVERVIEW -->
    
    <!-- END OVERVIEW -->
    <div class="row">
        <div class="col-md-6">
            <!-- DATA TIM -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Tim</h3>
                    <div class="right">
                        <button type="button" class="btn-toggle-collapse"><i class="fa fa-chevron-up"></i></button>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tbody>
<<<<<<< HEAD
=======
                            <?php /*
                            @foreach($data as $peserta)
>>>>>>> 59194e805f2f4af22a29bfbfe48fa3d70eafbfce
                            <tr>
                                <td><b>Kode</b></td>
                                <td><b>Kode</b></td>
                            </tr>
                            <tr>
                                <td><b>Nama Tim</b></td>
                                <td><b>Nama Tim</b></td>
                            </tr>
                            <tr>
                                <td><b>Asal Institusi</b></td>
                                <td><b>Asal Institusi</b></td>
                            </tr>
                            <tr>
                                <td><b>Status</b></td>
                                <td>
                                    Belum Terverifikasi <i class="glyphicon glyphicon-remove" style="color:red"></i><br>
                                    Telah Terverifikasi <i class="glyphicon glyphicon-ok" style="color:green"></i>
                                </td>
                            </tr>
<<<<<<< HEAD
=======
                            @endforeach
                            */?>
>>>>>>> 59194e805f2f4af22a29bfbfe48fa3d70eafbfce
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END DATA TIM -->
        </div>
        <div class="col-md-6">
            <!-- PEMBERITAHUAN -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Pemberitahuan!</h3>
                    <div class="right">
                        <button type="button" class="btn-toggle-collapse"><i class="fa fa-chevron-up"></i></button>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="alert alert-warning">
                        <p style="font-weight:bold">Hai, Gus Luis.</p>
                        <p style="text-align: justify;text-justify: inter-word;">Pastikan Anda telah melengkapi data peserta, biaya pendaftaran dan memverifikasikan data ke panitia ITCC 2018. Salam hangat dari admin ITCC 2018. Semangat dan sukses ! </p>
                     </div>
                </div>
            </div>
            <!-- END PEMBERITAHUAN -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- DATA ANGGOTA -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><center>Data Anggota Tim</center></h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>Kartu Identitas</th>
                               <th>Nomer Peserta</th>
                               <th>Nama Lengkap</th>
                               <th>Tanggal Lahir</th>
                               <th>Email</th>
                               <th>Nomer Kontak</th>
                               <th>Veget</th>
                               <th>Kaos</th>
                               <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>fotonya</td>
                                <td>nomor</td>
                                <td>nama</td>
                                <td>tgl lahir</td>
                                <td>email</td>
                                <td>kontak</td>
                                <td>veget</td>
                                <td>kaos</td>
                                <td><a class="btn btn-info btn-sm edit" title="Edit" style="margin:2px;"><i class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModal"></i></a> 
                                    <a class="btn btn-danger btn-sm" style="margin:2px;" title="Hapus" onclick="return confirm('Anda Yakin menghapus data ini?')" ><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END DATA ANGGOTA -->
        </div>
    </div>
</div>
@endsection

