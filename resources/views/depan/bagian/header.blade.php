  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:dpmptsp@situbondokab.go.id">dpmptsp@situbondokab.go.id&nbsp;&nbsp;</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{$almt->telepon}}&nbsp;&nbsp;</span></i>
        
        <i class="bi bi-folder d-flex align-items-center ms-4"><a href="http://ppid.situbondokab.go.id"><span>PPID</span> </a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        @foreach($sosmeds as $sosmed)
               <a href="{{$sosmed->link}}" class="{{$sosmed->nama}}"><i class="bi bi-{{$sosmed->nama}}"></i></a>
                @endforeach
       
      </div>
    </div>
  </section>
<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('tema/kominfo_dpmptsp/gambar/logo-header-dpmptsp.png') }}" alt="logo" style="max-width: 240px"> -->
        <h1>DPMPTSP<span>Situbondo</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}"><b>Home</b></a></li>

            @foreach($menus as $item)
              @if($item->children->count() > 0)
          <li class="dropdown"><a href="#"><span>{{$item->nama}}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                @foreach($item->children as $submenu)
                  <li> <a href="{{url('/halaman/'.$submenu->alamat)}}">{{$submenu->nama}}</a> </li>
                @endforeach
                </ul>
              </li>
              @else
              <li> <a href="{{url('/halaman/'.$item->alamat)}}">{{$item->nama}}</a> </li>
              @endif
            @endforeach

        <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                
                  <li> <a href="{{ url('/berita')}}"> Berita </a></li>
              <li> <a href="{{ url('/informasi')}}"> Informasi </a></li>
                
                </ul>
              </li>
             
             <li class="dropdown"><a href="#"><span>Pengaduan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul >
                
                  <li> <a href="{{url('alur-layanan-pengaduan')}}">Alur Layanan Pengaduan</a> </li>
                  <li> <a href="{{url('pejabat-penanganan-pengaduan')}}">Pejabat Penanganan Pengaduan</a> </li>
                  <li> <a href="{{url('pengaduan-dpmptsp')}}">Formulir Layanan Pengaduan</a> </li>
                
                </ul>
              </li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
