@extends('layout.dashboard-admin-template')

@section('title')
    Dashboard Admin - ITCC 2018
@endsection

@section('content')
<div class="container-fluid">
    <!-- OVERVIEW -->
    
    <!-- END OVERVIEW -->
    <div class="row">
        <div class="col-md-12">
            <!-- DATA ANGGOTA -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><center>Data Peserta</center></h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>Kode</th>
                               <th>Nama</th>
                               <th>Tim</th>
                               <th>Foto</th>
                               <th>Instansi</th>
                               <th>Email</th>
                               <th>Kontak</th>
                               <th>Veget</th>
                               <th>Baju</th>
                               <th>Verifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>kodenya</td>
                                <td>namanya</td>
                                <td>timnya</td>
                                <td><a class="btn btn-info btn-sm view" style="margin:2px;"><i class="glyphicon glyphicon-picture"></i></a></td>
                                <td>instansinya</td>
                                <td>emailnya</td>
                                <td>kontaknya</td>
                                <td><b class='label label-danger'>Tidak veget</b>
                                       <b class='label label-success'>Veget</b>
                                </td>
                                <td>bajunya</td>
                                <td align="center"><i title='Belum Terverifikasi' class='glyphicon glyphicon-remove' style='color:red'></i>
                                    <i title='Sudah Terverifikasi' class='glyphicon glyphicon-ok' style='color:green'></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END DATA ANGGOTA -->
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title"><center>Rekapan</center></h4>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                               <th>Berdasarkan</th>
                               <th width="50px"><small class="pull-right">Jumlah</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>gatau</td>
                                <td><small class="pull-right"> tes</small></td>
                            </tr>
                            <tr>
                              <td>Peserta</td>
                              <td><small class="pull-right">berapa peserta</small></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

