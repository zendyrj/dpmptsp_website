@extends('belakang.tpl')
@section('bc')
<li>
    <span>Penguna</span>
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
            <i class="icon-user font-green"></i>Daftar pengguna
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn btn-sm btn-info" href="{{url('panel/pengguna/create')}}"> <i class="icon-plus"></i> Pengguna
                </a>
            </div>
        </div>
    </div>    
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Email </th>
                        <th> Nama </th>
                        <th> Hak akses </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                <?php $x=1; ?>
                @foreach($users as $user)
                    <tr>
                        <td> {{$x++}} </td>
                        <td> {{$user->email}} </td>
                        <td> {{$user->name}} </td>
                        <td> {{$user->level->nama_level}} </td>
                        <td> <a class="btn btn-xs btn-warning" href="{{url('/panel/pengguna/'.$user->id.'/edit')}}"><i class="icon-note"></i></a>
                            @if($user->email != Auth::user()->email)
                             <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"

                             data-frm="<form id='hapus-akun-{{$user->id}}' action='{{url('/panel/pengguna/'.$user->id)}}' method='POST'><input type='hidden' name='_token' value='{{ csrf_token() }}'><input type='hidden' name='_method' value='DELETE'><button type='button' data-dismiss='modal' class='btn dark btn-outline'>Tidak</button><button type='submit' class='btn red'>Hapus</button></form>"

                             data-title="Apakah anda yakin menghapus akun dengan email : '{{$user->email}}'?"
                             data-target="#HapusModal" ><i class="icon-close"></i></button>
                            @endif
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
<script type="text/javascript">
    $(function() {
        $('#HapusModal').on("show.bs.modal", function (e) {
             $("#isi").html($(e.relatedTarget).data('title'));
             $("#z").html($(e.relatedTarget).data('frm'));
        });
    });
</script>
@endsection