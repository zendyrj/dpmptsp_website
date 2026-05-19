@extends('belakang.tpl')
@section('bc')
<li>
    <span>Pengaturan</span>
</li>
@endsection

@section('isi')

@if(Session::has('berhasil'))
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {{Session::get('berhasil')}}.
  </div>
@endif
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
<div class="row">
<div class="col-md-6">
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-settings font-green"></i>
            <span class="caption-subject bold uppercase"> Pengaturan Alamat</span>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" action="{{url('panel/pengaturan1/'.$setting->id)}}">
        {{ csrf_field() }}{{ method_field('PUT') }}
            <div class="form-body">
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="nama" value="{{$setting->nama}}" >
                    <label for="form_control_1">Instansi</label>
                    <span class="help-block">Isikan dengan nama instansi</span>
                </div>
                <div class="form-group form-md-line-input">
                    <textarea class="form-control" rows="5" name="alamat">{!! $setting->alamat !!}</textarea>
                    <label for="form_control_1">Alamat</label>
                    <span class="help-block">isikan dengan alamat lengkap instansi</span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="telepon" value="{{$setting->telepon}}" >
                    <label for="form_control_1">Nomor Telepon</label>
                    <span class="help-block">Isikan dengan nomor telepon instansi</span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="email" value="{{$setting->email}}" >
                    <label for="form_control_1">Email</label>
                    <span class="help-block">Isikan dengan alamat email</span>
                </div>
            </div>
            <div class="form-actions noborder">
                <button type="submit" class="btn blue">Simpan</button>
                <a href="{{url('/panel/jam_besuk')}}" class="btn default">Batal</a>
            </div>
        </form>
    </div>
</div>
</div>
<div class="col-md-6">
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-info font-green"></i>
            <span class="caption-subject bold uppercase"> Pengaturan Identitas Instansi</span>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" action="{{url('panel/pengaturan2/'.$setting->id)}}" enctype="multipart/form-data">
        {{ csrf_field() }}{{ method_field('PUT') }}
            <div class="form-body">
            <div class="row">
                <div class="col-md-4">
                    <img style="max-height: 100px; background-color: #00aced;" class="img-responsive" src="{{url('/'.$setting->logo)}}">                    
                </div>
                <div class="form-group col-md-8">
                    <label>Logo</label>
                    <input type="file" name="logo">
                </div>
            </div><br/>
            <div class="row">
                <div class="col-md-4">
                    <img style="max-height: 100px; background-color: #00aced;" class="img-responsive" src="{{url('/'.$setting->gambar_1)}}">                    
                </div>
                <div class="form-group col-md-8">
                    <label>Gambar Header</label>
                    <input type="file" name="gambar_header">
                </div>
            </div><br/>
            <div class="row">
                <div class="col-md-4">
                    <img style="max-height: 100px; background-color: #00aced;" class="img-responsive" src="{{url('/'.$setting->gambar_2)}}">                    
                </div>
                <div class="form-group col-md-8">
                    <label>Gambar 1</label>
                    <input type="file" name="gambar_1">
                </div>
            </div><br/>
            </div>
            <div class="form-actions noborder">
                <button type="submit" class="btn blue">Simpan</button>
                <a href="{{url('/panel/jam_besuk')}}" class="btn default">Batal</a>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection