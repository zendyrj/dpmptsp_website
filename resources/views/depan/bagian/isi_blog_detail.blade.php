  <!-- SUB BANNER -->
  <section class="sub-bnr bnr-2" style="background: url({{asset($almt->gambar_2)}}) no-repeat;" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Home</a></li>
          @yield('breadcrumb')
        </ol>
      </div>
    </div>
  </section>

  <div id="content"> 
  
  <!-- BLOG -->
  <section class="blog blog-pages blog-single padding-top-70 padding-bottom-70">
    <div class="container">
      <div class="row">
        <div class="col-md-8" style="margin-bottom: 20px"> 
          
          <!-- Post -->
          <article> @yield('gambar')
            <!-- Date -->
            <div class="date">@yield('tanggal')</div>
            <!-- Detail -->
            <div class="post-detail">
              <h5 class="font-normal">@yield('judul_blog')</a></h5>
              @yield('isi')
              <!-- Tags -->
              <!-- <ul class="tags margin-bottom-20">
                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="http://twitter.com/share?url={{Request::url()}}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/share?url={{Request::url()}}"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="whatsapp://send?text={{Request::url()}}"><i class="fa fa-whatsapp"></i></a></li>
              </ul> --></div>
          </article>
          
        </div>
        
        <!-- Side Bar -->
        <div class="col-md-4">
          <div class="side-bar"> 
            @include('depan.bagian.modul_kategori')
            @include('depan.bagian.modul_berita_terbaru')
            @include('depan.bagian.modul_info_terbaru')
          </div>

        </div>
      </div>
    </div>
  </section>
</div>
