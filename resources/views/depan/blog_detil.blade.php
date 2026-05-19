<!DOCTYPE html>
<html>

<head>
   
    <title>Website Resmi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Situbondo</title>
    @include('depan.bagian.css_favicon')
</head>
<body>
<link itemprop="thumbnailUrl" href="{{asset($halaman->gambar)}}"> <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> <link itemprop="url" href="{{asset($halaman->gambar)}}"> </span>
@include('depan.bagian.header')
@include('depan.bagian.isi_blog_detail')
@include('depan.bagian.footer')
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
</body>
</html>