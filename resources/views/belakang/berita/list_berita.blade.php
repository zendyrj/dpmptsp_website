@extends('belakang.tpl')
@section('css')
<link href="{{asset('admin/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('bc')
<li>
    <span>Berita</span>
</li>
@endsection
@section('isi')
@if(Session::has('berhasil'))
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {{Session::get('berhasil')}}.
  </div>
@endif

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-doc font-green"></i>Daftar Berita
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn btn-sm btn-info" href="{{url('panel/berita/create')}}"> <i class="icon-plus"></i> Berita
                </a>
            </div>
        </div>
    </div>    
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Judul </th>
                        <th> Status </th>
                        <th> Oleh </th>
                        <th> Tanggal </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                <?php $x=1; ?>
                @foreach($posts as $post)
                    <tr>
                        <td> {{$x++}} </td>
                        <td> {{$post->judul}} </td>
                        <td> {{$post->status}} </td>
                        <td> {{$post->user->name}} </td>
                        <td> {{$post->tgl_buat}} </td>
                        <td> 
                            <a class="btn btn-xs btn-info" href="{{url('/panel/berita/'.$post->id.'/duplikasi')}}"><i class="icon-docs"></i></a>
                            <a class="btn btn-xs btn-warning" href="{{url('/panel/berita/'.$post->id.'/edit')}}"><i class="icon-note"></i></a>
                             <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"

                             data-frm="<form id='hapus-berita-{{$post->id}}' action='{{url('/panel/berita/'.$post->id)}}' method='POST'><input type='hidden' name='_token' value='{{ csrf_token() }}'><input type='hidden' name='_method' value='DELETE'><button type='button' data-dismiss='modal' class='btn dark btn-outline'>Tidak</button><button type='submit' class='btn red'>Hapus</button></form>"

                             data-title="Apakah anda yakin menghapus berita dengan judul : '{{$post->judul}}'?"
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
    $(function() {
        $('#HapusModal').on("show.bs.modal", function (e) {
             $("#isi").html($(e.relatedTarget).data('title'));
             $("#z").html($(e.relatedTarget).data('frm'));
        });
    });
</script>
@endsection