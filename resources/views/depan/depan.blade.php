<html lang="en">
<!-- <![endif]-->
<!-- head -->
<head>
<title>Website Resmi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Situbondo</title>
@include('depan.bagian.css_favicon')
<!-- custom css -->
<!-- end theme style -->
<style>
.float{
	position:fixed;
	padding: 7px;
	width:180px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}


.my-float{
    margin-top: 50px;
	width: 50px;
}
</style>
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader --> 
@include('depan.bagian.header')
<!-- end preloader --> 
<!--  top bar -->
 <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Selamat Datang di <span>DPMPTSP <br>Kabupaten Situbondo</span></h2>
          <p>Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu Kabupaten Situbondo</p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ asset('tema/sendiri_dpmptsp/assets/img/logo-blubut.png')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a target="_blank" href="http://oss.go.id/" class="stretched-link">OSS</a></h4>
              <span style="color: white;">Online Single Submission Berbasis RBA</span>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a target="_blank" href="https://sipinter.situbondokab.go.id" class="stretched-link">Si Pinter</a></h4>
              <span style="color: white;">Apliksi Sistem Pelayanan Online Terpadu</span>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a  href="#" class="stretched-link">Si Peni</a></h4>
              <span style="color: white;">Safari Pengurusan Nomor Induk Berusaha</span>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a target="_blank" href="https://sitajin.situbondokab.go.id" class="stretched-link">Si Tajin</a></h4>
              <span style="color: white;">Sistem Informasi Data dan Arsip Perizinan</span>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
<!--  end navigation -->
<section>
<img style="width: 100%; padding: 40px" src="{{ asset('tema/sendiri_dpmptsp/assets/img/banner1.jpg')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
<img style="width: 100%; padding: 40px" src="{{ asset('SPSOP2023/PENGADUAN.png')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
</section>
  <section id="faq" class="faq ">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Yang sering <strong>Ditanyakan</strong></h3>
              <p>
               Pertanyaan yang sering di tanyakan oleh masyarakat kepada Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu Kabupaten Situbondo.
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Bagaimana Cara Menerbitkan Perizinan Usaha Saya ?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Anda dapat mengakses link <a href="https://oss.go.id">www.oss.go.id</a>, kemudian mendaftar dan mengisi perizinan usaha yang anda miliki di sistem OSS.<br>Anda juga dapat mendatangi kantor DPMPTSP untuk mendapatkan pelayanan berbantuan untuk menerbitkan perizinan anda.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                     Bagaimana Cara Menerbitkan Perizinan Bagunan Saya ?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Anda dapat mengakses link <a href="https://simbg.pu.go.id">www.simbg.pu.go.id</a>, kemudian mendaftar dan mengisi perizinan bangunan yang anda miliki di sistem SIMBG.<br>Anda juga dapat mendatangi kantor DPMPTSP untuk mendapatkan pelayanan berbantuan untuk menerbitkan perizinan bangunan anda.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                     Bagaimana Cara Menerbitkan Perizinan Praktik Saya ?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Anda dapat mengakses link <a href="https://sipinter.situbondokab.go.id">www.sipinter.situbondokab.go.id</a>, kemudian mendaftar dan mengisi perizinan praktik yang anda miliki di sistem SiPinter.<br>Anda juga dapat mendatangi kantor DPMPTSP untuk mendapatkan pelayanan berbantuan untuk menerbitkan perizinan bangunan anda.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                     Kapan SiPeni datang ke Desa saya ?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Informasi kunjungan SiPeni dapat anda lihat di Instagram resmi DPMPTSP Kab. Situbondo di link berikut <a href="https://www.instagram.com/dpmptsp_situbondo/?hl=id" class="instagram"><i class="bi bi-instagram"></i> Instagram</a>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Apakah Pengurusan Perizinan dipungut Biaya ?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Pengurusan tidak dipungut biaya apapun kecuali perizinan yang terkait perda tentang retribusi
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
        <section id="about" class="about sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="{{ asset('gambar/logo_antikorup.jpg')}}" style="margin: 10px;" class="img-fluid rounded-4 mb-4" alt="">
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
            <p>
            Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu Berdasarkan Peraturan Bupati Situbondo No. 8 tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah, Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Situbondo adalah dinas daerah tipe “B” yang secara umum bertugas untuk menyelenggarakan urusan pemerintahan bidang Penanaman Modal. Dinas daerah tipe “B” menurut PP No. 18 tahun 2016 tentang Perangkat Daerah adalah dinas daerah dengan beban kerja besar yang menjalankan fungsi berupa:
            </p>
            <ul>
            <li><i class="bi bi-check-circle-fill"></i>Perumusan kebijakan;</li>
<li><i class="bi bi-check-circle-fill"></i>Pelaksanaan kebijakan;</li>
<li><i class="bi bi-check-circle-fill"></i>Pelaksanaan evaluasi dan pelaporan;</li>
<li><i class="bi bi-check-circle-fill"></i>Pelaksanaan administrasi dinas; dan</li>
<li><i class="bi bi-check-circle-fill"></i>Pelaksanaan fungsi lain yang diberikan oleh bupati terkait tugas dan fungsinya.</li>
            </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

 <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="{{ asset('tema/sendiri_dpmptsp/assets/img/stats-img.svg')}}" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Data NIB</strong> diterbitkan oleh OSS wilayah Kabupaten Situbondo</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="1257" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>SIP Praktik</strong> diterbitkan oleh SiPinter</p>
            </div><!-- End Stats Item -->

          

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->
 <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>BERITA TERBARU DPMPTSP</h2>
          <p>Berita Kegiatan Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu</p>
        </div>

        <div class="row gy-4">
           @foreach($posts1 as $berita1)
          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img style="padding:10px; height: 350px; width: 100%; background-position: center; background-size: cover;" src="{{asset($berita1->gambar)}}" alt="" class="img-fluid">
              </div>

              <p class="post-category">News</p>

              <h2 class="title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                <a href="{{url('berita/'.$berita1->slug)}}">{{$berita1->judul}}</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('tema/sendiri_dpmptsp/assets/img/blog/blog-author.jpg')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Admin DPMPTSP</p>
                   <?php
                    $tgl = date('d', strtotime($berita1->tgl_buat));
                    $bln = date('M', strtotime($berita1->tgl_buat));
                    $th = date('Y', strtotime($berita1->tgl_buat));
                    ?>
                  <p class="post-date">
                    <time datetime="{{$berita1->tgl_buat}}">{{$tgl}} {{$bln}} {{$th}}</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->
          @endforeach

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->


  <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>INFORMASI DPMPTSP</h2>
          <p>Informasi Kegiatan Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4 portfolio-container">

             @foreach($infos1 as $info1)
            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{url('informasi/'.$info1->slug)}}" data-gallery="portfolio-gallery-app" class="glightbox"><img style="padding:10px; height: 350px; width: 100%; background-position: center; background-size: cover;" src="{{asset($info1->gambar)}}" class="img-fluid" alt="{{$info1->judul}}"></a>
                <div class="portfolio-info">
                  <h4 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><a href="{{url('informasi/'.$info1->slug)}}" title="More Details">{{$info1->judul}}</a></h4>
                  <!--<p>Lorem ipsum, dolor sit amet consectetur</p>-->
                </div>
              </div>
            </div><!-- End Portfolio Item -->
 @endforeach
          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
     {{-- <section id="team" class="team sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pegawai DPMPTSP</h2>
          <p>Barisan para pegawai Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu Kabupaten Situbondo</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img style="height: 300px;" src="{{ asset('tema/sendiri_dpmptsp/assets/img/pegawai/196708111999012001.jpg')}}" class="img-fluid" alt="">
              <h4>Ir. QURATUL AINI, M.Si.</h4>
              <span>Kepala Dinas</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img style="height: 300px;" src="{{ asset('tema/sendiri_dpmptsp/assets/img/pegawai/197512051996021003.jpg')}}" class="img-fluid" alt="">
              <h4>IDDHA ARUM BAWANA, SSTP, M.Si.</h4>
              <span>Sekretaris Dinas</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img style="height: 300px;" src="{{ asset('tema/sendiri_dpmptsp/assets/img/pegawai/196403271994031005.jpg')}}" class="img-fluid" alt="">
              <h4>Drs. Ec. BUDI NARWANTO, M.Si.</h4>
              <span>Koordinator Bidang PM</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img style="height: 300px;" src="{{ asset('tema/sendiri_dpmptsp/assets/img/pegawai/196403271993031008.jpg')}}" class="img-fluid" alt="">
              <h4>Ir. H. PURWANTO, M.Si.</h4>
              <span>Koordinator Bidang PT</span>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section --> --}}


<!-- Code begins here -->

<a href="http://wa.me/6281252690759?text=Halo%20Admin%20Pengaduan%20DPMPTSP%20Kabupaten%20Situbondo..." class="float">
            <i class="bi bi-whatsapp my-float"></i>
             Layanan<br>Pengaduan
</a>
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


