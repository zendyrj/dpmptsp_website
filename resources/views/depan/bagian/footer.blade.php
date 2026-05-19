<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>DPMPTSP</span>
          </a>
          <p>Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu Kabupaten Situbondo, merupakan dinas yang memberikan pelayananan perizinan melalui sistem SiPinter dan sistem OSS RBA guna mempermudah dan meningkatkan penanaman modal serta investasi di Kabupaten Situbondo.</p>
          <div class="social-links d-flex mt-4">
             @foreach($sosmeds as $sosmed)
               <a href="{{$sosmed->link}}" class="{{$sosmed->nama}}"><i class="bi bi-{{$sosmed->nama}}"></i></a>
                @endforeach
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Hubungi Kami</h4>
          <p>
            Jl. PB. Sudirman No. 20<br>
            Kelurahan Patokan<br>
            Kecamatan Situbondo<br>
            Kabupaten Situbondo<br>
            Provinsi Jawa Timur<br><br>
            <strong>Phone:</strong> (0338) 672155 <br>
            <strong>Fax:</strong> (0338) 679155 <br>
            <strong>Email:</strong> dpmptsp@situbondokab.go.id<br>
          </p>

        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        
          <h4>Lokasi Dinas</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2757.2411121767027!2d113.99418672292103!3d-7.70886699976641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd72999147e9223%3A0x3a3b321848cfebfb!2sDinas%20Penanaman%20Modal%20dan%20Pelayanan%20Terpadu%20Satu%20Pintu%20(%20DPMPTSP%20)%20Kabupaten%20Situbondo!5e0!3m2!1sid!2sid!4v1682988716157!5m2!1sid!2sid" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>DPMPTSP Kabupaten Situbondo</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://instagram.com/zendyrj" target="_blank">ZendyRJ</a>
      </div>
    </div>

  </footer><!-- End Footer -->