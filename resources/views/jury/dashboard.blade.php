@extends('layout.dashboard-juri-template')

@section('title')
    Dashboard Juri - ITCC 2018
@endsection

@section('content')
<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA ANGGOTA -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title"><center>Daftar Karya Peserta</center></h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Instansi</th>
                                    <th>Tim</th>
                                    <th>Judul Ide</th>
                                    <th>Total Nilai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                           <tbody>
                                <tr>
                                    <td>instansinya</td>
                                    <td>nama timnya</td>
                                    <td>judul idenya</td>
                                    <td>total nilainya</td>
                                    <td><a class="btn btn-warning btn-sm view" style="margin:2px;"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a class="btn btn-danger btn-sm view" style="margin:2px;"><i class="glyphicon glyphicon-trash"></i></a>
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
</div>
<!-- END MAIN CONTENT -->
@endsection