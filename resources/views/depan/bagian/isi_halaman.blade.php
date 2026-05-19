  <!-- Content -->
<div id="content"> 
  
  <!-- BLOG -->
  <section class="blog blog-pages blog-single padding-top-70 padding-bottom-70">
    <div class="container" style="padding-bottom: 110px; padding-top: 30px">
      <div class="row">
        <div class="col-md-8"> 
          
          <!-- Post -->
          <article>
            <!-- Detail -->
            <div class="post-detail" style="padding-top: 10px">
              <h5 class="font-normal">@yield('judul')</a></h5>
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