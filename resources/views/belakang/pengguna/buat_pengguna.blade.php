@extends('belakang.tpl')
@section('bc')
<li>
    <a href="{{url('/panel/pengguna')}}">Pengguna</a>
    <i class="fa fa-angle-right"></i>
</li>
<li>
    <span>Tambah pengguna</span>
</li>
@endsection

@section('isi')

@if(count($errors)>0)
  <div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    Periksa kembali data isian, mungkin ada yang salah /tidak lengkap.<br/>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
  </div>
@endif

<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-user-follow font-green"></i>
            <span class="caption-subject bold uppercase"> Tambah pengguna</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn btn-sm btn-warning" href="{{url('/panel/pengguna')}}"> <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" action="{{url('panel/pengguna')}}">
        {{ csrf_field() }}
            <div class="form-body">
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="name" value="{{ old('name') }}" >
                    <label for="form_control_1">Nama pengguna</label>
                    <span class="help-block">Masukkan nama pengguna...</span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="email" value="{{ old('email') }}" >
                    <label for="form_control_1">Alamat email</label>
                    <span class="help-block">Masukkan alamat email...</span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <select class="form-control edited" id="form_control_1" name="level_id">
                    @foreach($levels as $level)
                        <option value="{{$level->id}}">{{$level->nama_level}}</option>
                    @endforeach
                    </select>
                    <label for="form_control_1">Hak akses</label>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="password" class="form-control" id="form_control_1" name="password" >
                    <label for="form_control_1">Password</label>
                    <span class="help-block">Masukkan password...</span>
                </div>
            </div>
            <div class="form-actions noborder">
                <button type="submit" class="btn blue">Simpan</button>
                <a href="{{url('/panel/pengguna')}}" class="btn default">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
