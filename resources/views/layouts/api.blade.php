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

  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('5f2c974b53822b84c2d7', {
      cluster: 'eu'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>

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
          <img src="{{ asset('logo.png') }}" alt="" width="250" height="80">
          {{-- <a class="navbar-brand" href="/">Movement For The Emancipation of Southern Borno</a> --}}
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

    <main class="py-1">
        @yield('content')
    </main>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <!-- gulp:js -->
  <script src="{{asset('assets/js/build.min.js')}}"></script>
  <!-- endgulp -->
  <script src="{{asset('assets/js/ckeditor5/ckeditor.js')}}"></script>
  <script>
    ClassicEditor
      .create( document.querySelector( '#editor' ), {
        // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
      } )
      .then( editor => {
        window.editor = editor;
      } )
      .catch( err => {
        console.error( err.stack );
      } );
  </script>

  @yield('script')

</body>

</html>
