<li class="nav-item start ">
    <a href="{{url('/panel')}}" class="nav-link">
        <i class="icon-home"></i>
        <span class="title">Panel</span>
        <!-- <span class="arrow"></span> -->
    </a>
</li>
<li class="nav-item  ">
    <a href="{{url('/panel/berita')}}" class="nav-link nav-toggle">
        <i class="icon-doc"></i>
        <span class="title">Berita</span>
        <!-- <span class="arrow"></span> -->
    </a>
</li>
<li class="nav-item  ">
    <a href="{{url('/panel/info')}}" class="nav-link nav-toggle">
        <i class="icon-bulb"></i>
        <span class="title">Informasi</span>
    </a>
</li>
<li class="nav-item  ">
    <a href="{{url('/panel/pengaduan')}}" class="nav-link nav-toggle">
        <i class="icon-question"></i>
        <span class="title">Pengaduan</span>
    </a>
</li>
<li class="nav-item  ">
    <a href="{{url('/panel/menu')}}" class="nav-link nav-toggle">
        <i class="icon-list"></i>
        <span class="title">Menu</span>
    </a>
</li>
<li class="nav-item  ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-share"></i>
        <span class="title">Media Sosial</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="{{url('/panel/sosmed/twitter')}}" class="nav-link ">
                <span class="title">Twitter</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{url('/panel/sosmed/instagram')}}" class="nav-link ">
                <span class="title">Instagram</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{url('/panel/sosmed/facebook')}}" class="nav-link ">
                <span class="title">Facebook</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{url('/panel/sosmed/youtube')}}" class="nav-link ">
                <span class="title">Youtube</span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item  ">
    <a href="{{url('/panel/pengguna')}}" class="nav-link">
        <i class="icon-user"></i>
        <span class="title">Pengguna</span>
        <span class="arrow"></span>
    </a>
</li>
<li class="nav-item  ">
    <a href="{{url('/panel/pengaturan')}}" class="nav-link">
        <i class="icon-settings"></i>
        <span class="title">Pengaturan</span>
        <span class="arrow"></span>
    </a>
</li>
@include('belakang.bagian.menu_modul')