<!-- header start -->
<header class="header-area transparent-bar sticky-bar header-padding header-padding header-hm6">
  <div class="container-fluid">
    <div class="header-wrap header-flex">
      <div class="logo mt-45">
        <a href="{{ route('home') }}">
          <img class="logo-normally-none" alt="" src="{{ url('frontend/images/kpu-white.png') }}">
          <img class="logo-sticky-none" alt="" src="{{ url('frontend/images/kpu-black.png') }}">
        </a>
      </div>
      <div class="main-menu">
        <nav>
          <ul>
            <li><a class=" {{ Request::is('/') ? 'active' : null }}" href="{{ route('home') }}">Beranda</a>
            </li>
            <li><a class=" {{ Request::is('kandidat/*') ? 'active' : null }}" href="#">Kandidat </a>
              <ul class="submenu">
                <li><a href="/kandidat/dpm">DPM</a></li>
                <li><a href="/kandidat/bem">BEM</a></li>
               
                <li><a href="/kandidat/himti">HIMTI</a></li>
                 
                <li><a href="/kandidat/himsisfo">HIMSISFO</a></li>
              
              </ul>
            </li>
            <li><a class=" {{ Request::is('pemungutan-suara/*') ? 'active' : null }}" href="#">Pemungutan Suara </a>
              <ul class="submenu">
                <li><a href="/pemungutan-suara/dpm">DPM</a></li>
                <li><a href="/pemungutan-suara/bem">BEM</a></li>
                @guest
                  <li><a href="/pemungutan-suara/himti">HIMTI</a></li>
                  <li><a href="/pemungutan-suara/himsisfo">HIMSISFO</a></li>
                @endguest
                @auth
                @if (Auth::user()->jurusan == 'teknik informatika')
                <li><a href="/pemungutan-suara/himti">HIMTI</a></li>
                    @else
                    <li><a href="/pemungutan-suara/himsisfo">HIMSISFO</a></li>
                    @endif
                  @endauth
              </ul>
            </li>
            
            
            <li><a class=" {{ Request::is('perhitunganlangsung') ? 'active' : null }}" href="/perhitunganlangsung">Perhitungan Langsung</a></li>
            @auth
             <li><a href="{{ route('settings') }}">Settings</a></li> 
             <li><a href="">Status Akun : &nbsp; <span class="{{ Auth::user()->status_verifikasi == false ? 'text-danger' : 'text-success' }}">{{ Auth::user()->status_verifikasi == false ? 'Akun Belum Terverifikasi' : 'Akun Terverifikasi' }}</span></a></li> 
            @endauth
            <li>
                
                @guest
                <a href="{{ route('login') }}" class="">Login</a>
                @endguest
                
                @auth
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <button style="cursor: pointer; " class="btn single-shortcode-button small-button btn-hover">Logout</button>
                </form>
                @endauth</li>
                
              </ul>
            </nav>
          </div>
        </div>
        <div class="mobile-menu-area">
          <div class="mobile-menu">
            <nav id="mobile-menu-active">
              <ul class="menu-overflow">
                <li><a class=" {{ Request::is('/') ? 'active' : null }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li><a class=" {{ Request::is('kandidat/*') ? 'active' : null }}" href="#">Kandidat </a>
                  <ul class="submenu">
                    <li><a href="/kandidat/dpm">DPM</a></li>
                    <li><a href="/kandidat/bem">BEM</a></li>
                
                    <li><a href="/kandidat/himti">HIMTI</a></li>
        
                    <li><a href="/kandidat/himsisfo">HIMSISFO</a></li>
  
                  </ul>
                </li>
                <li><a class=" {{ Request::is('pemungutan-suara/*') ? 'active' : null }}" href="#">Pemungutan Suara </a>
                  <ul class="submenu">
                    <li><a href="/pemungutan-suara/dpm">DPM</a></li>
                    <li><a href="/pemungutan-suara/bem">BEM</a></li>
                  @guest
                    <li><a href="/pemungutan-suara/himti">HIMTI</a></li>
                     <li><a href="/pemungutan-suara/himsisfo">HIMSISFO</a></li>
                  @endguest
                     @auth
                    @if (Auth::user()->jurusan == 'teknik informatika')
                    <li><a href="/pemungutan-suara/himti">HIMTI</a></li>
                    @else
                    <li><a href="/pemungutan-suara/himsisfo">HIMSISFO</a></li>
                    @endif
                    @endauth
                  </ul>
                </li>
                <li><a class=" {{ Request::is('perhitunganlangsung') ? 'active' : null }}" href="/perhitunganlangsung">Perhitungan Langsung</a></li>
                @auth
                     
                <li><a href="{{ route('settings') }}">Settings</a></li> 
                   <li><a href="">Status Akun : &nbsp; <span class="{{ Auth::user()->status_verifikasi == false ? 'text-danger' : 'text-success' }}">{{ Auth::user()->status_verifikasi == false ? 'Akun Belum Terverifikasi' : 'Akun Terverifikasi' }}</span></a></li> 
            
                @endauth 
                <li>
                  @guest
                  <a href="{{ route('login') }}" style="font-size: 18px;">Login</a>
                  @endguest
                  @auth
                      <form action="{{ route('logout') }}" method="post">
                      @csrf
                     <button style="cursor: pointer;" class="btn   mx-3 single-shortcode-button small-button btn-hover">Logout</button>
                    </form>
                  @endauth
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>