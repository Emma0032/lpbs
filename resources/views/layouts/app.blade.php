{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="content">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Title -->
  <title>Political - A Responsive Political Website Template</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('assets/image/favicon.ico')}}">
  <!-- gulp:css -->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
  <!-- endgulp -->
  @yield('css')

</head>

<body>
  <!-- ==================== Header Area ========================= -->
  <div class="preloader">
    <div class="lds-ripple">
      <div></div>
      <div></div>
    </div>
  </div>
  <header class="header-area">
    <nav class="header-topbar">
      <div class="container">
        <ul class="list-inline m-0">
          <li class="list-inline-item">
            <i class="im im-location"></i>New York, USA
          </li>
        </ul>
        <ul class="list-inline m-0">
          <li class="list-inline-item">
            <a href="#"><i class="im im-facebook"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#"><i class="im im-twitter"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#"><i class="im im-youtube"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#"><i class="im im-pinterest"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="header-bottombar">
      <div class="container">
        <nav class="header-navbar navbar navbar-expand-lg">
          <a class="navbar-brand" href="/">Movement For The Emancipation of Southern Borno</a>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <nav class="navbar-mean ms-auto">
              <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="/">Home</a></li>

                <li class="nav-item"> <a class="nav-link" href="about.html">About</a></li>

                <li class="nav-item">
                  <a class="nav-link toogler" href="#"> Blog </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('blog') }}">Blog</a></li>
                    <li><a class="dropdown-item" href="blog-details.html">Single Blog</a></li>
                  </ul>
                </li>

                <li class="nav-item"> <a class="nav-link" href="{{ route('group.chat') }}">Group</a></li>

                @auth
                  @if(Auth::user()->id == '1')
                    <li class="nav-item"> <a class="nav-link cart-bar" href="{{ route('review.approval') }}">
                      <i class="im im-shopping-cart"></i><span>{{ \App\Models\Review::count() }}</span></a>
                    </li>
                  @endif
                @endauth
                      
                <li class="nav-item"> <a class="nav-link search-bar" data-bs-toggle="modal"
                    data-bs-target="#searchmodal" href="#"><i class="im im-magnifier"></i></a></li>
              </ul>
            </nav>
            <div class="modal fade" id="searchmodal" tabindex="-1" role="dialog">
              <button type="button" class="close" data-bs-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>

              <div class="modal-dialog " role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <form action="#">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Here">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button">
                            <i class="im im-magnifier"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

  @include('layouts.msg')

    <main class="py-1">
        @yield('content')
    </main>

  <!-- ==================== Footer Area ========================= -->
  <footer class="footer-area position-relative bg-primary">
    <div class="footer-top pt-5 pb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-widget text-light ">
              <a href="index1.html" class="footer-brand mb-2"><img src="{{asset('assets/image/footer-brand.png')}}" alt="image"></a>

              <ul class="contact-nav mt-2 list-inline">
                <li><i class="im im-location"></i>4732 Elk Creek Road, GA, <br />30085, USA</li>
                <li><i class="im im-phone"></i>666 777 888</li>
                <li><i class="im im-mail"></i>support@themeix.com</li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 offset-md-1">
            <div class="footer-widget text-light ">
              <h5 class="mb-2">Useful Links</h5>
              <ul class="footer-nav list-inline">
                <li><a href="volenteer.html">Volenteers</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="footer-widget text-light  m-0">
              <h5 class="mb-2">Subscribe Now</h5>
              <p>The continued my minutes arm used one walls anyone into cities so, called vows</p>
              <form class="footer-newsletter mt-2">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Your Email">
                  <div class="input-group-append d-flex">
                    <button type="submit" class="input-group-text"><i class="im im-paperplane"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="footer-bottom py-2">
        <p class="footer-copywright  m-0 text-light">&copy; <script>
            document.write(new Date().getFullYear())
          </script> Political - HTML5 Template <i class="im im-heart"></i> Developed by <a
            href="https://themeix.com">Themeix</a></p>
        <ul class="footer-bottom-nav  small-text list-inline m-0">
          <li class="list-inline-item"><a href="privacy-policy.html"> Privacy Policy</a></li>
          <li class="list-inline-item"><a href="terms-conditions.html"> Terms & Conditions</a></li>
        </ul>
      </div>
    </div>
    <a href="#" class="footer-back"><i class="im im-angle-up"></i></a>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <!-- gulp:js -->
  <script src="{{asset('assets/js/build.min.js')}}"></script>
  <!-- endgulp -->
  <script src="{{asset('assets/js/ckeditor.js')}}"></script>

  @yield('script')

</body>

</html>
