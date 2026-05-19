<html lang="en">
<!-- <![endif]-->
<!-- head -->
<head>
<title>Website Resmi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Situbondo | Informasi</title>
@include('depan.bagian.css_favicon')
<!-- custom css -->
<!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader --> 
@include('depan.bagian.header')
<!-- end preloader --> 
<!--  top bar -->
  


 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Informasi Terkini</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Informasi</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 posts-list">

          @foreach($list as $post)
          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img style="padding:10px; height: 350px; width: 100%; background-position: center; background-size: cover;" src="{{asset($post->gambar)}}" alt="" class="img-fluid">
              </div>

              <p class="post-category">News</p>

              <h2 class="title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                <a href="{{url('informasi/'.$post->slug)}}" >{{$post->judul}}</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('tema/sendiri_dpmptsp/assets/img/blog/blog-author.jpg')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author-list">Admin DPMPTSP</p>
                   <?php
                    $tgl = date('d', strtotime($post->tgl_buat));
                    $bln = date('M', strtotime($post->tgl_buat));
                    $th = date('Y', strtotime($post->tgl_buat));
                    ?>
                  <p class="post-date">
                    <time datetime="{{$post->tgl_buat}}">{{$tgl}} {{$bln}} {{$th}}</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->
          @endforeach

        </div><!-- End blog posts list -->

        <div class="blog-pagination">
          {{ $list->links() }}
        </div><!-- End blog pagination -->

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

<!--  end latest news -->
<!--  clients -->
@include('depan.bagian.footer')
<!--  end map -->
<!--  footer -->

<!--  end footer -->
<!-- jquery -->
@include('depan.bagian.script')
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
<!-- end jquery -->
</body>
<!--body end -->
</html>