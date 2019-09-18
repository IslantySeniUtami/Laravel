      <!-- Navigation -->
      <link href="css/freelancer.min.css" rel="stylesheet">
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Laravel</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
               @if (Route::has('register'))
              <li class="nav-item">
                       <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
        @else
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger" href="home">HOME</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger" href="siswa">SISWA</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger" href="guru">GURU</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger" href="kelas">KELAS</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger" href="walikelas">WALIKELAS</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger" href="about">ABOUT</a>
          </li>
          <li class="nav-item dropdown">
           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                  </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
                     </form>
                    </div>
                 </li>
                        @endguest
        </ul>
      </div>
    </div>
  </nav>
