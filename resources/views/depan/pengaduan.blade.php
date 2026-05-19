<html lang="en">
<!-- <![endif]-->
<!-- head -->
<head>
<title>Website Resmi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Situbondo | Pengaduan</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('depan.bagian.css_favicon')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
              <h2>Penanggung Jawab Pengaduan</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Penanggung Jawab Pengaduan</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
 <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pusat Layanan Pengaduan Masyarakat</h2>
          <p>Harap diisi dengan lengkap dan benar. Pengaduan anda akan ditangani semestinya.</p>
        </div>
     @if(session()->has('message'))
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session()->get('message') }}
        </div>
        @endif

        @if(count($errors)>0)
          <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Periksa kembali data isian, mungkin ada yang salah /tidak lengkap.<br/>
         
          </div>
        @endif
        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Lokasi:</h4>
                  <p>Jl. PB. Sudirman No. 20<br>
Kelurahan Patokan<br>
Kecamatan Situbondo<br>
Kabupaten Situbondo<br>
Provinsi Jawa Timur</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>dpmptsp@situbondokab.go.id</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>(0338) 672155</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>
                  Senin-Kamis: 07.00 - 16.00 WIB<br>
                  Jum'at: 06.45 - 11.15 WIB
                  </p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form id="contact-form" class="php-email-form" method="post" action="{{url('pengaduan-dpmptsp')}}" enctype="multipart/form-data">
             {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" maxlength="16" required minlength="16" class="form-control" id="nik" name="nik" placeholder="Nomer Induk Penduduk 16 Karakter">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                </div>
              </div>
              <div class="form-group mt-3">
               <input type="text" class="form-control" minlength="8" name="telp" placeholder="Nomer Telepon Minimal 8 Karakter">
              </div>
              <div class="form-group mt-3">
               <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul Laporan">
              </div>
              <div class="form-group mt-3">
               <textarea id="message" class="form-control" name="laporan" rows="6" placeholder="Masukan Laporan Anda di sini"></textarea>
              </div>
                            <div class="form-group mt-3">
              <input type="file" class="form-control" accept="image/*,application/pdf" name="file" id="file" placeholder="Upload Dokumen">
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"> <button type="submit" class="btn btn-default">Kirim</button>        </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->
    <section class="sections-bg">
    <div class="section text-center">
      <h3 class="section-heading">LIST PENGADUAN MASYARAKAT</h3>
      <p class="sub-heading">Harap diisi dengan lengkap dan benar. <br> Pengaduan anda akan ditangani semestinya.</p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="portlet-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-header-fixed" id="tabel-data">
                    <thead>
                        <tr style="background-image: linear-gradient(#02bae4, #c0f3f3);">
                            <th> No </th>
                            <th> Judul Pengaduan </th>
                            <th> Pelapor </th>
                            <th> Nomer Telp </th>
                           
                            <th> Isi Laporan </th>
                            <th> Tanggal Laporan </th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $x=1; ?>
                    @foreach($aduan as $aduan)
                        <tr style="background: #f1f1f1">
                            <td> {{$x++}} </td>
                            <td> {{$aduan->subject}} </td>
                            <td><span class="label label-danger">Nama Dirahasiakan</span> </td>
                            <td> {{substr($aduan->telp,0,-5)}}XXXXX </td>
                           
                            <td> {{$aduan->laporan}} </td>
                            <?php
                              $tgl = date('d F Y', strtotime($aduan->created_at));
                              
                            ?>
                            <td> {{$tgl}} </td>
                            <td>
                                <button type="button" onclick="ajax('{{$aduan->id}}')" class="btn-xs btn-info btn-lg" data-toggle="modal" data-target="#myModal">Lihat <i class="fa fa-reply"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div> 
        </div>
      </div>
    </div>
    </section>

  </main><!-- End #main -->


  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content" id="isi-ajax">
      
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



<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable({
        responsive: true,
        columnDefs: [
        { responsivePriority: 1, targets: 0 },
        { responsivePriority: 2, targets: -1 }
    ]
        });
    });
</script>
<script type="text/javascript">
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  function ajax(id) {
    $.ajax({
      url : "{{url('pengaduan-ajax')}}",
      type : "post",
      data : {id:id},
      success : function(report) {
        $("#isi-ajax").html(report);
      }
    });
  }

   $("#nik").on("keypress keyup blur",function (event) {    
       $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
</script>
<!-- end jquery -->
</body>
<!--body end -->
</html>


