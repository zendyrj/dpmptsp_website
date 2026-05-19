
@extends('belakang.tpl')
@section('css')
<link href="{{asset('admin/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('bc')
<li>
    <span>List Pengaduan</span>
</li>
@endsection
@section('isi')
@if(Session::has('berhasil'))
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {{Session::get('berhasil')}}.
  </div>
@endif
<button class="btn btn-success" id="list-aduan">ADUAN MASYARKAT</button>
<button class="btn btn-danger" id="list-admin">BALASAN ADMIN</button>
<div class="portlet light" id="pengadu">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-bulb font-green"></i>Daftar Pengaduan Masyarakat
        </div>
        <div class="actions">
            <div class="btn-group">
               
            </div>
        </div>
    </div>    
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Judul Pengaduan </th>
                        <th> Pelapor </th>
                        <th> NIK </th>
                        <th> Nomer Telp </th>
                       
                        <th> Isi Laporan </th>
                        <th> Tanggal Laporan </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                <?php $x=1; ?>
                @foreach($aduan as $aduan)
                    <tr>
                        <td> {{$x++}} </td>
                        <td> {{$aduan->subject}} </td>
                        <td> {{$aduan->nama}} </td>
                        <td> {{$aduan->nik}} </td>
                        <td> {{$aduan->telp}} </td>
                       
                        <td> {{$aduan->laporan}} </td>
                        <?php
                          $tgl = date('d F Y', strtotime($aduan->created_at));
                          
                        ?>
                        <td> {{$tgl}} </td>
                        <td> 
                            <a class="btn btn-xs btn-success" href="{{url('panel/pengaduan/balas/'.$aduan->id) }}"><i class="fa fa-reply"></i></a>
                             <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"

                             data-frm="<form id='hapus-pengaduan-{{$aduan->id}}' action='{{url('/panel/pengaduan/'.$aduan->id)}}' method='POST'><input type='hidden' name='_token' value='{{ csrf_token() }}'><input type='hidden' name='_method' value='DELETE'><button type='button' data-dismiss='modal' class='btn dark btn-outline'>Tidak</button><button type='submit' class='btn red'>Hapus</button></form>"

                             data-title="Apakah anda yakin menghapus informasi dengan judul : '{{$aduan->subject}}'?"
                             data-target="#HapusModal" ><i class="icon-close"></i></button>
                        </td>
                    </tr>
                @endforeach

                @foreach($sudah as $aduan)
                    <tr>
                        <td> {{$x++}} </td>
                        <td> {{$aduan->subject}} </td>
                        <td> {{$aduan->nama}} </td>
                        <td> {{$aduan->nik}} </td>
                        <td> {{$aduan->telp}} </td>
                       
                        <td> {{$aduan->laporan}} </td>
                        <?php
                          $tgl = date('d F Y', strtotime($aduan->created_at));
                          
                        ?>
                        <td> {{$tgl}} </td>
                        <td> 
                            <!-- <a class="btn btn-xs btn-success" href="{{url('panel/pengaduan/balas/'.$aduan->id) }}"><i class="fa fa-reply"></i></a> -->
                             <!-- <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"

                             data-frm="<form id='hapus-pengaduan-{{$aduan->id}}' action='{{url('/panel/pengaduan/'.$aduan->id)}}' method='POST'><input type='hidden' name='_token' value='{{ csrf_token() }}'><input type='hidden' name='_method' value='DELETE'><button type='button' data-dismiss='modal' class='btn dark btn-outline'>Tidak</button><button type='submit' class='btn red'>Hapus</button></form>"

                             data-title="Apakah anda yakin menghapus informasi dengan judul : '{{$aduan->subject}}'?"
                             data-target="#HapusModal" ><i class="icon-close"></i></button> -->
                             <button class="btn btn-xs btn-success btn-circle"><i class="fa fa-check"></i></button>
                            @if ($aduan->id_parent==0)
                             <a class="btn btn-xs btn-info" href="{{url('panel/pengaduan/balas/'.$aduan->id) }}"><i class="fa fa-reply"></i></a>
                            @else
                              
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="portlet light" id="admin">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-bulb font-green"></i>Daftar Balasan Admin
        </div>
        <div class="actions">
            <div class="btn-group">
               
            </div>
        </div>
    </div>    
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_2">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Judul Pengaduan </th>
                        <th> Pelapor </th>
                        <th> Nomer Telp </th>
                       
                        <th> Isi Laporan </th>
                        <th> Tanggal Laporan </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                <?php $x=1; ?>
                @foreach($balas_admin as $aduan)
                    <tr>
                        <td> {{$x++}} </td>
                        <td> {{$aduan->subject}} </td>
                        <td> {{$aduan->nama}} </td>
                        <td> {{$aduan->telp}} </td>
                       
                        <td> {{$aduan->laporan}} </td>
                        <?php
                          $tgl = date('d F Y', strtotime($aduan->created_at));
                          
                        ?>
                        <td> {{$tgl}} </td>
                        <td> 
                            <a class="btn btn-xs btn-success" href="{{url('panel/pengaduan/edit/'.$aduan->id) }}"><i class="fa fa-pencil"></i></a>
                             <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"

                             data-frm="<form id='hapus-pengaduan-{{$aduan->id}}' action='{{url('/panel/pengaduan/'.$aduan->id)}}' method='POST'><input type='hidden' name='_token' value='{{ csrf_token() }}'><input type='hidden' name='_method' value='DELETE'><button type='button' data-dismiss='modal' class='btn dark btn-outline'>Tidak</button><button type='submit' class='btn red'>Hapus</button></form>"

                             data-title="Apakah anda yakin menghapus informasi dengan judul : '{{$aduan->subject}}'?"
                             data-target="#HapusModal" ><i class="icon-close"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="HapusModal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
                <div class="modal-body" id="isi"></div>
            </div>
            <div class="modal-footer">
                
                <span id="z"></span>
                <!-- <a id="y" class="btn green">Ya</a> -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('admin/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/pages/scripts/table-datatables-fixedheader.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(window).ready(function(){
        $("#admin").hide();
    });
    $("#list-aduan").on("click",function() {
        $("#admin").hide();
        $("#pengadu").show();
    });
    $("#list-admin").on("click",function() {
        $("#admin").show();
        $("#pengadu").hide();
    });
    $(function() {
        $('#HapusModal').on("show.bs.modal", function (e) {
             $("#isi").html($(e.relatedTarget).data('title'));
             $("#z").html($(e.relatedTarget).data('frm'));
        });
    });

</script>
@endsection