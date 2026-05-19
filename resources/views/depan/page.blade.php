<!DOCTYPE html>
<html>

<head>
    
    <title>Website Resmi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Situbondo</title>
    @include('depan.bagian.css_favicon')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<link itemprop="thumbnailUrl" href="{{asset('tema/kominfo_dpmptsp/favicon.png')}}"> <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> <link itemprop="url" href="{{asset('tema/kominfo_dpmptsp/favicon.png')}}"> </span>
@include('depan.bagian.header')
  <!-- SUB BANNER -->
  <section class="sub-bnr bnr-2" style="background: url({{asset($almt->gambar_2)}}) no-repeat;" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Home</a></li>
          <li class="active">{{$halaman->nama}}</li>
        </ol>
      </div>
    </div>
  </section>
@include('depan.bagian.isi_halaman')
@include('depan.bagian.footer')
<script src="{{asset('/tema/kominfo_dpmptsp/js/jquery-1.11.0.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_dpmptsp/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_dpmptsp/js/own-menu.js')}}"></script> 
<script src="{{asset('/tema/kominfo_dpmptsp/js/jquery.isotope.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_dpmptsp/js/owl.carousel.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_dpmptsp/js/jquery.colio.min.js')}}"></script> 
<script src="{{asset('/tema/kominfo_dpmptsp/js/main.js')}}"></script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
</body>
</html>