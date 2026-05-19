@extends('belakang.tpl')
@section('bc')
<li>
    <a href="{{url('/panel/pengaduans')}}">pengaduans</a>
    <i class="fa fa-angle-right"></i>
</li>
<li>
    <span>Ubah pengaduans</span>
</li>
@endsection
@section('isi')

<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-user-following font-green"></i>
            <span class="caption-subject bold uppercase"> Balas Pengaduans</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn btn-sm btn-warning" href="{{url('/panel/pengaduan')}}"> <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
    @foreach($pengaduans as $aduan)
    <div class="portlet-body form">
        <form role="form" method="POST" action="{{url('pengaduan-edit')}}">
            {{ csrf_field() }}
            <div class="form-body">
                <div class="form-group form-md-line-input form-md-floating-label">
                   <input type="hidden" name="id_parent" value="{{ $aduan->id }}" >
                   <input type="hidden" name="parent" value="{{ $aduan->id_parent }}" >
                   <input type="hidden" name="subject" value="{{ $aduan->subject }}" >
                   @foreach($ts as $ts)
                    <input type="text" class="form-control" id="form_control_1" name="nama" value="{{ $ts->nama }} - {{$ts->telp}}" readonly="">
                    <label for="form_control_1">Nama Pengadu</label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="subject" value="{{ $ts->subject }}" readonly="">
                    @endforeach
                    <label for="form_control_1">Judul Pengaduan</label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <textarea class="form-control" name="laporan" rows="12">{{ $aduan->laporan }}</textarea>
                    <label for="form_control_1">Isi Pengaduan</label>
                    @if (is_null($aduan->file))

                    @else
                      <p><b><a target="_blank" href="{{url('pengaduan/'.$aduan->file)}}" style="color: #0037ff">Dokumen</a></b></p>
                    @endif
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <label for="form_control_1">Dokumen</label>
                    <input type="file" class="form-control" id="form_control_1" name="file" accept="image/*,application/pdf">
                    <span class="help-block"></span>
                </div>
            </div>
            <div class="form-actions noborder">
                <button type="submit" class="btn blue">Simpan</button>
                <a href="{{url('/panel/pengaduan')}}" class="btn default">Batal</a>
            </div>
        </form>
    </div>
    @endforeach
</div>
@endsection