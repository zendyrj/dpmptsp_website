@extends('depan.blog_list')

@section('title')
<title>Website Resmi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Situbondo | BERITA</title>
@endsection

@section('breadcrumb')
<li>Berita</li>
@endsection

@section('list')
@foreach($list as $post)
  <article> <img class="img-responsive" src="{{asset($post->gambar)}}" alt="{{$post->judul}}" >
    <!-- Date -->
    <div class="date">
        <?php
        $tgl = date('d', strtotime($post->tgl_buat));
        $bln = date('M', strtotime($post->tgl_buat));
        ?>
         {{$tgl}} <span>{{$bln}}</span> 
    </div>
    <!-- Detail -->
    <div class="post-detail">
      <h5 class="font-normal"><a href="{{url('berita/'.$post->slug)}}">{{$post->judul}}</a></h5>
      {!! Str::words($post->berita, 15,' ....</p>')  !!}
    </div>
  </article>
@endforeach
@endsection

@section('pagination')
<nav>{{ $list->links() }}</nav>
@endsection