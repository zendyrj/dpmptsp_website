@extends('belakang.tpl')
@section('css')
<link href="{{asset('admin/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('bc')
<li>
    <span>Menu</span>
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
            <i class="icon-list font-green"></i>Menu
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn btn-sm btn-info" href="{{url('panel/menu/create')}}"> <i class="icon-plus"></i> Menu
                </a>
            </div>
        </div>
    </div>    
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                <thead>
                    <tr>
                        <th> Menu </th>
                        <th> Urut </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($menus as $item)
                    @if($item->children->count() == 0)
                        <tr><td>{{$item->nama}}</td>
                        <td>{{$item->urutan}}</td>
                        <td> <a class="btn btn-xs btn-warning" href="{{url('/panel/menu/'.$item->id.'/edit')}}"><i class="icon-note"></i></a>
                             <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"

                             data-frm="<form id='hapus-menu-{{$item->id}}' action='{{url('/panel/menu/'.$item->id)}}' method='POST'><input type='hidden' name='_token' value='{{ csrf_token() }}'><input type='hidden' name='_method' value='DELETE'><button type='button' data-dismiss='modal' class='btn dark btn-outline'>Tidak</button><button type='submit' class='btn red'>Hapus</button></form>"

                             data-title="Apakah anda yakin menghapus menu : '{{$item->nama}}'?"
                             data-target="#HapusModal" ><i class="icon-close"></i></button>
                        </td>
                        </tr>
                    @else
                        <tr><td>{{$item->nama}}</td>
                        <td>{{$item->urutan}}</td>
                        <td> <a class="btn btn-xs btn-warning" href="{{url('/panel/menu/'.$item->id.'/edit')}}"><i class="icon-note"></i></a>
                             <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"

                             data-frm="<form id='hapus-menu-{{$item->id}}' action='{{url('/panel/menu/'.$item->id)}}' method='POST'><input type='hidden' name='_token' value='{{ csrf_token() }}'><input type='hidden' name='_method' value='DELETE'><button type='button' data-dismiss='modal' class='btn dark btn-outline'>Tidak</button><button type='submit' class='btn red'>Hapus</button></form>"

                             data-title="Apakah anda yakin menghapus menu : '{{$item->nama}}'?"
                             data-target="#HapusModal" ><i class="icon-close"></i></button>
                        </td>
                        </tr>
                        @foreach($item->children->sortBy('urutan') as $submenu)
                        <tr><td>&nbsp; ---- &nbsp; {{$submenu->nama}}</td>
                        <td>&nbsp; ---- &nbsp; {{$submenu->urutan}}</td>
                        <td> <a class="btn btn-xs btn-warning" href="{{url('/panel/menu/'.$submenu->id.'/edit')}}"><i class="icon-note"></i></a>
                             <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"

                             data-frm="<form id='hapus-menu-{{$submenu->id}}' action='{{url('/panel/menu/'.$submenu->id)}}' method='POST'><input type='hidden' name='_token' value='{{ csrf_token() }}'><input type='hidden' name='_method' value='DELETE'><button type='button' data-dismiss='modal' class='btn dark btn-outline'>Tidak</button><button type='submit' class='btn red'>Hapus</button></form>"

                             data-title="Apakah anda yakin menghapus menu : '{{$submenu->nama}}'?"
                             data-target="#HapusModal" ><i class="icon-close"></i></button>
                        </td>
                        </tr>
                        @endforeach
                    @endif
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
<script src="{{asset('admin/pages/scripts/table-datatables-fixedheader.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $('#HapusModal').on("show.bs.modal", function (e) {
             $("#isi").html($(e.relatedTarget).data('title'));
             $("#z").html($(e.relatedTarget).data('frm'));
        });
    });
</script>
@endsection