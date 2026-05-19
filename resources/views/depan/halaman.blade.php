<html lang="en">
<!-- <![endif]-->
<!-- head -->
<head>
<title>Website Resmi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Situbondo | {{$halaman->nama}}</title>
@include('depan.bagian.css_favicon')
<!-- custom css -->
<!-- end theme style -->

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader --> 
@include('depan.bagian.header')
<!-- end preloader --> 
<!--  top bar -->
  
  <main id="main">
<!--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
<!--  Launch demo modal-->
<!--</button>-->

<!-- Modal -->
<!--<div class="modal fade" id="exampleModal" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog" role="document">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--          <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--      </div>-->
<!--      <div class="modal-body">-->
<!--        ...-->
<!--      </div>-->
<!--      <div class="modal-footer">-->
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--        <button type="button" class="btn btn-primary">Save changes</button>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-12 text-center">
              <h2>{{$halaman->nama}}</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>{{$halaman->nama}}</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <!--<div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/portfolio/app-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/product-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/branding-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/books-1.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>-->

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-12">
            <div class="portfolio-description">
                {!!$halaman->isi!!}

            </div>
          </div>

         <!-- <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong> <span>Web design</span></li>
                <li><strong>Client</strong> <span>ASU Company</span></li>
                <li><strong>Project date</strong> <span>01 March, 2020</span></li>
                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
              </ul>
            </div>
          </div>

        </div> -->

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  <!-- Button trigger modal -->
<!--<div class="modal fade" id="exampleModal" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog" role="document">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--          <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--      </div>-->
<!--      <div class="modal-body">-->
<!--        ...-->
<!--      </div>-->
<!--      <div class="modal-footer">-->
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--        <button type="button" class="btn btn-primary">Save changes</button>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
     
        <div class="modal-header">
          <h4 class="modal-title">DPMPTSP KABUPATEN SITUBONDO</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closemd()">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
    
        <div class="modal-body">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe id="declinedframe" height="100%" src="https://cdn.dribbble.com/users/1186261/screenshots/3718681/_______.gif"></iframe>
          </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closemd()">Close</button>
        </div>
        
      </div>
    </div>
  </div>


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

  <script type="text/javascript">
        function klik_view(url_file) {
           $('#declinedframe').attr('src', url_file+"#toolbar=1&navpanes=0&statusbar=1&view=Fit;readonly=false&embedded=true; disableprint=false");
        //   $('#myModal').modal({ show: true });
           $('#myModal').modal('show'); 
        }
        
        function closemd(){
             $('#myModal').modal('toggle'); 
        }
  </script>