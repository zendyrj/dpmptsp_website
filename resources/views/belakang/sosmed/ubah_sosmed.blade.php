@extends('belakang.tpl')
@section('bc')
<li>
    <a href="{{url('/panel/sosmed')}}">Media Sosial</a>
    <i class="fa fa-angle-right"></i>
</li>
<li>
    <span>{{$sosmed->nama}}</span>
</li>
@endsection

@section('isi')

@if(Session::has('berhasil'))
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {{Session::get('berhasil')}}.
  </div>
@endif

<div class="col-md-6">
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-social-{{$sosmed->nama}} font-green"></i>
            <span class="caption-subject bold uppercase"> {{$sosmed->nama}}</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn btn-sm btn-warning" href="{{url('/panel/sosmed')}}"> <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" action="{{url('panel/sosmed/'.$sosmed->id)}}">
        {{ csrf_field() }}{{ method_field('PUT') }}
            <div class="form-body">
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="link" value="{{$sosmed->link}}" >
                    <label for="form_control_1">Link</label>
                    <span class="help-block">Misal: https://twitter.com/kominfo_sit</span>
                </div>
                @if($sosmed->nama == 'twitter' || $sosmed->nama == 'facebook')
                <div class="form-group form-md-line-input">
                    <textarea class="form-control" rows="5" name="embed">{!! $sosmed->embed !!}</textarea>
                    <label for="form_control_1">Kode embed</label>
                    <span class="help-block">Misal: https://twitter.com/kominfo_sit</span>
                </div>
                @endif
            </div>
            <div class="form-actions noborder">
                <button type="submit" class="btn blue">Simpan</button>
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
            <span class="caption-subject bold uppercase"> Informasi Petunjuk</span>
        </div>
    </div>
    <div class="portlet-body form">
        isi petunjuk
    </div>
</div>
</div>
@endsection