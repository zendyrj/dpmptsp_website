@extends('depan.page')

@section('title')
<title>Website Resmi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Situbondo | {{$halaman->nama}}</title>
@endsection

@section('judul')
{{$halaman->nama}}
@endsection

@section('isi')
{!!$halaman->isi!!}
@endsection