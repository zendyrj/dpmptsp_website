<html lang="en">
<!-- <![endif]-->
<!-- head -->
<head>
<title>Website Resmi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Situbondo | {{$halaman->judul}}</title>
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
            <div class="col-lg-12 text-center">
              <h2>{{$halaman->judul}}</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/berita')}}">Berita</a></li>
            <li>{{$halaman->judul}}</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="{{asset($halaman->gambar)}}"  style="padding:10px; width: 100%; background-position: center; background-size: cover;" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{$halaman->judul}}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Admin DPMPTSP</a></li>
                    <?php
              $tgl = date('d', strtotime($halaman->tgl_buat));
              $bln = date('M', strtotime($halaman->tgl_buat));
              $thn = date('Y', strtotime($halaman->tgl_buat));
          ?>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{$tgl}} {{$bln}} {{$thn}}</time></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                {!!$halaman->berita!!}
              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Arsip DPMPTSP</a></li>
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Informasi Terkini</h3>

                <div class="mt-3">
                  @foreach($infos as $info)
                  <div class="post-item">
                    <img src="{{asset($info->gambar)}}" alt="">
                    <div>
                      <h4><a href="{{url('/informasi/'.$info->slug)}}">{{$info->judul}}</a></h4>
                        <?php
              $tgl1 = date('d', strtotime($info->tgl_buat));
              $bln1 = date('M', strtotime($info->tgl_buat));
              $thn1 = date('Y', strtotime($info->tgl_buat));
          ?>
                      <time datetime="2020-01-01">{{$tgl1}} {{$bln1}} {{$thn1}}</time>
                    </div>
                  </div><!-- End recent post item-->
                  @endforeach
                </div>


              </div><!-- End sidebar recent posts-->


            </div><!-- End Blog Sidebar -->
            <br>
              <div class="sidebar">

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Berita Terkini</h3>

                <div class="mt-3">
                  @foreach($posts as $post)
                  <div class="post-item">
                    <img src="{{asset($post->gambar)}}" alt="">
                    <div>
                      <h4><a href="{{url('/berita/'.$post->slug)}}">{{$post->judul}}</a></h4>
                        <?php
              $tgl1 = date('d', strtotime($post->tgl_buat));
              $bln1 = date('M', strtotime($post->tgl_buat));
              $thn1 = date('Y', strtotime($post->tgl_buat));
          ?>
                      <time datetime="2020-01-01">{{$tgl1}} {{$bln1}} {{$thn1}}</time>
                    </div>
                  </div><!-- End recent post item-->
                  @endforeach
                </div>
                

              </div><!-- End sidebar recent posts-->


            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

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


