@extends('belakang.tpl')
@section('bc')
<li>
    <a href="{{url('/panel/jam_besuk')}}">Jam Besuk</a>
    <i class="fa fa-angle-right"></i>
</li>
<li>
    <span>Tambah Jam Besuk</span>
</li>
@endsection

@section('isi')

<div class="col-md-2 col-sm-2 col-xs-6">
    <div class="color-demo tooltips" data-original-title="Click to view demos for this color" data-toggle="modal" data-target="#demo_modal_dark">
        <div class="color-view bg-dark bg-font-dark bold uppercase"> #2f353b </div>
        <div class="color-info bg-white c-font-14 sbold"> dark </div>
    </div>
</div>

@endsection
