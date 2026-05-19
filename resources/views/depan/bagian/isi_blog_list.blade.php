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
        <div class="col-md-8"> 
        @yield('list')
        @yield('pagination')
        </div>
        
        <!-- Side Bar -->
        <div class="col-md-4">
          <div class="side-bar"> 
            @include('depan.bagian.modul_kategori')
            @include('depan.bagian.modul_berita_terbaru')
            @include('depan.bagian.modul_info_terbaru')
            <div id="gpr-kominfo-widget-container" class=" margin-top-50"></div>
          </div>

        </div>
      </div>
    </div>
  </section>
</div>