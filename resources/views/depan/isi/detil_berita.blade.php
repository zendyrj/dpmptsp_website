@extends('depan.blog_detil')

@section('title')
<title>Website Resmi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Situbondo | {{$halaman->judul}}</title>
@endsection

@section('breadcrumb')
<li><a href="{{url('/berita')}}">Berita</a></li>
<li>{{$halaman->judul}}</li>
@endsection

@section('gambar')
<img class="img-responsive" src="{{asset($halaman->gambar)}}" alt="{{$halaman->judul}}" >
@endsection

@section('tanggal')
<?php
$tgl = date('d', strtotime($halaman->tgl_buat));
$bln = date('M', strtotime($halaman->tgl_buat));
?>
 {{$tgl}} <span>{{$bln}}</span> 
@endsection

@section('judul_blog')
{{$halaman->judul}}
@endsection


@section('isi')
{!!$halaman->berita!!}
@endsection

@section('js')
<script async defer src="http://platform.instagram.com/en_US/embeds.js"></script>
@endsection