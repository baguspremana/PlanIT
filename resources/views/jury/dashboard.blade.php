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
                        <table class="table table-striped" id="example">
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
                                @foreach($group as $t)
                                <tr>
                                    @if($t->total_nilai==null and Auth::user()->id!=$t->jury_id)
                                        <td>{{$t->institution}}</td>
                                        <td>{{$t->group_name}}</td>
                                        <td>{{$t->title}}</td>
                                        
                                        <td>{{'Belum Nilai'}}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm view" style="margin:2px;" data-toggle="tooltip" data-placement="right" title="Input Nilai" href="{{route('form-nilai.show',$t->id)}}"><i class="glyphicon glyphicon-plus"></i></a>
                                        </td>
                                    @elseif($t->total_nilai!=null and Auth::user()->id==$t->jury_id)
                                        <td>{{$t->institution}}</td>
                                        <td>{{$t->group_name}}</td>
                                        <td>{{$t->title}}</td>
                                        <td>{{$t->total_nilai}}</td>
                                        <td>
                                            <a href="{{route('form-nilai.edit',$t->id_score)}}" class="btn btn-warning btn-sm view" style="margin:2px;" data-toggle="tooltip" data-placement="right" title="Edit Nilai"><i class="glyphicon glyphicon-pencil"></i></a>
                                        </td>
                                    @endif
                                </tr>
                                @endforeach
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
</script>
@endsection