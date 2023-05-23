<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Title -->
  <title>Political - A Responsive Political Website Template</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('assets/image/favicon.ico')}}">
  <!-- gulp:css -->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
  <!-- endgulp -->
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
  <!--/// Banner Area /// -->
  <div class="hero-area position-relative overflow-hidden">
    <div class="hero-slider mobile-dots">
    @foreach ($slides as $slide)
    <div class="hero-item">
      <div class="hero-bg-image"><img src="images/slides/{{ $slide->image }}" alt="image"></div>
        <div class="container">
          <div class="hero-wrapper text-center">
            <div class="hero-content text-light mx-auto">

              <h1 class="fs-1 mb-2 text-light" data-animation="fadeInDown" data-delay="0.7s">{{ $slide->title }}</h1>
              <p class="mb-3 lead" data-animation="fadeInDown" data-delay="0.7s">{{ $slide->body }}</p>
              <a class="btn btn-danger" data-animation="fadeInDown" data-delay="0.7s" href="#">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    </div>

    <ul class="hero-arrows list-inline">
    @if (\App\Models\Slide::count() > 1)
      <li><button class="hero-prev"><i class="im im-angle-left"></i></button></li>
      <li><button class="hero-next"><i class="im im-angle-right"></i></button></li>
    @endif
    </ul>
  </div>
  <!-- ==================== About Area ========================= -->
  <div class="about-area position-relative py-5 " id="aboutSection">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a id="video-modal" data-vbtype="iframe" href="https://www.youtube.com/embed/ZpEPJGFpZtg">
            <div class="about-image">
              <img src="{{asset('assets/image/gallery-img-5.jpg')}}" alt="image">

            </div>
          </a>
        </div>
        <div class="col-md-6">
          <div class="about-content  py-2">

            <strong class="text-danger">Do you believe?</strong>
            <h2>We work for the democracy</h2>
            <p class="lead">Happens, or gets won't of means, have only affected just about in with and were this small
              will in an belly</p>
            <p>You the every wanting, in to he on never loyalty. One for, distant sitting and met then, for rationale
              noise in star drawers. In had declined, human prudently, revisit. The minutes not encouraged be acting
              class return. O'clock little he how have business, on or where the french twists him the all narrow
              recommended. Of depend after gentlemen, chance the gain, way. Often city, his mainly with else.</p>

            <a href="#" class="mt-1 btn btn-outline-danger">Read This Plan</a>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==================== Service Area ========================= -->
  <div class="service-area bg-info py-5">
    <div class="container">
      <div class="mb-4 text-center">
        <h2 class="display-4">Our Vision</h2>
        <p>Together we the people achieve more than any single person could ever do alone.</p>
      </div>
      <div class="col-md-6 col-lg-12 mb-3">
        <div class="service-box m-0">
          <div class="service-icon">
            <i class="im im-coin"></i>
          </div>
          <div class="service-content">
            <h4>Economic</h4>
            <p class="m-0">Let for seen found particular, the absolutely to heaven quite and not by of big to slogging</p>
            <a href="#" class="mt-2 btn btn-outline-primary btn-sm" data-bs-toggle="modal"
              data-bs-target="#service1">Read Plan</a>
          </div>
        </div>
        <div class="modal fade" id="service1">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-primary text-light">
                <h5 class="modal-title">Economic</h5>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>The that all once our the relieved its accompany will. Must for have or a back to war, the desk in the me boss it note has could are boss of escape, in consideration film control phase the quitting negatives, the be high and he his researches by politely then.
                </p>
                <p>Suggests it even how several rather of it to his real of week you him should the out gave could mister or annoyed. Devious you simple, been brothers evening. To couldn't a to stitching in orthographic the tone to feel the not reached ran study of you tend with will the nice, all must off and advantage become not the its would of at after me make could on as explain the seen, for simple, first for left recommendation hired their time illustrated insurance with universal proposal I pleasure there mountains, all attention particularly more son, card a and, we.
                </p>
                <p>
                  Four to greediness the in a written the a finds the getting staple towards his they goals so, minutes. Been having problem of trial. King's and her off of any time. Next or said reflections, rhetoric desk clarinet several ideas only you right, made known not so powers sleep. Road, than attempt, suspicious may respective circumstances. Turned the is don't in the and is remain which see his too felt frequently excuse small I one about the his answering feedback th
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="mb-4 text-center">
        <h2 class="display-4">Our Mission</h2>
        <p>Together we the people achieve more than any single person could ever do alone.</p>
      </div>
      <div class="col-md-6 col-lg-12 mb-3">
        <div class="service-box m-0">
          <div class="service-icon">
            <i class="im im-coin"></i>
          </div>
          <div class="service-content">
            <h4>Economic</h4>
            <p class="m-0">Let for seen found particular, the absolutely to heaven quite and not by of big to slogging</p>
            <a href="#" class="mt-2 btn btn-outline-primary btn-sm" data-bs-toggle="modal"
              data-bs-target="#service1">Read Plan</a>
          </div>
        </div>
        <div class="modal fade" id="service1">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-primary text-light">
                <h5 class="modal-title">Economic</h5>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>The that all once our the relieved its accompany will. Must for have or a back to war, the desk in
                  the me boss it note has could are boss of escape, in consideration film control phase the quitting
                  negatives, the be high and he his researches by politely then.</p>
                <p>Suggests it even how several rather of it to his real of week you him should the out gave could
                  mister or annoyed. Devious you simple, been brothers evening. To couldn't a to stitching in
                  orthographic the tone to feel the not reached ran study of you tend with will the nice, all must off
                  and advantage become not the its would of at after me make could on as explain the seen, for simple,
                  first for left recommendation hired their time illustrated insurance with universal proposal I
                  pleasure there mountains, all attention particularly more son, card a and, we.
                </p>
                <p>
                  Four to greediness the in a written the a finds the getting staple towards his they goals so,
                  minutes. Been having problem of trial. King's and her off of any time. Next or said reflections,
                  rhetoric desk clarinet several ideas only you right, made known not so powers sleep. Road, than
                  attempt, suspicious may respective circumstances. Turned the is don't in the and is remain which see
                  his too felt frequently excuse small I one about the his answering feedback th
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==================== About Area ========================= -->
  <div class="about-area bg-success position-relative py-5 ">
    <div class="all-bg-image"><img src="{{asset('assets/image/hero-bg-img.jpg')}}" alt="image"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a id="video-modal" data-vbtype="iframe" href="https://www.youtube.com/embed/ZpEPJGFpZtg">
            <div class="about-image">
              <img src="{{asset('assets/image/gallery-img-5.jpg')}}" alt="image">
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <div class="about-content text-light py-2">
            <strong class="white">Your Perfect Choice</strong>
            <h2 class="display-4 text-light">Vote for James Doe</h2>
            <p>Offering clothes, before. Chooses postage an frequency half more country. Its had and align embarrassed
              and countries origin the could the have that affects appearance, him, may the logging him found.</p>
            <img class="mt-2 white-invert" src="{{asset('assets/image/signature.png')}}" alt="image">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==================== Campaign Area ========================= -->
  <div class="campaign-area my-5 ">
    <div class="container">
      <div class="mb-4 text-center">
        <strong class="text-danger">Let's some donate</strong>
        <h2 class="display-4 w-75 mx-auto ">Contribute us as a supporter</h2>
        <h2 class="display-1 text-danger"><span>$</span>23,986.00</h2>
        <p>Raised by awesome suppoerters</p>
        <a href="#" class="btn btn-danger">Donate Now</a>
      </div>
    </div>
  </div>
  <!-- ==================== Counter Area ========================= -->

  <div class="counter-area bg-success position-relative py-5 ">
    <div class="all-bg-image invert"><img src="{{asset('assets/image/hero-bg-img2.jpg')}}" alt="image"></div>
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-3">
          <div class="counter-box text-light">
            <div class="counter-icon"><i class="im im-users"></i></div>
            <h2 class="display-4">175,001</h2>
            <p class="m-0">Total Volunteer</p>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="counter-box text-light">
            <div class="counter-icon"><i class="im im-coin"></i></div>
            <h2 class="display-4">7800</h2>
            <p class="m-0">Donation</p>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="counter-box text-light">
            <div class="counter-icon"><i class="im im-megaphone"></i></div>
            <h2 class="display-4">85</h2>
            <p class="m-0">Events</p>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="counter-box text-light">
            <div class="counter-icon"><i class="im im-star-o"></i></div>
            <h2 class="display-4">3</h2>
            <p class="m-0">Election Won</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==================== Gallery Area ========================= -->

  <div class="gallery-area my-5 ">
    <div class="container">
      <div class="mb-4 text-center w-75 m-auto">
        <strong class="text-danger">Look at the gallery</strong>
        <h2 class="display-4">Event Spotlight</h2>
        <p>Once and mental every design in objective poets, heard the right in instance. Concept not when they but those
          my that horrible not from phase external avoid monitors.</p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="gallery-box">
            <div class="feature-image">
              <div class="image-frame">
                <a href="single.html"> <img src="{{asset('assets/image/gallery-img-1.jpg')}}" alt="image" class="w-100"></a>
              </div>
            </div>
            <div class="box-content">
              <ul class="list-inline text-center">
                <li class="list-inline-item">
                  <a class="btn btn-light" href="{{asset('assets/image/gallery-img-1.jpg')}}" data-lightbox="image-1"
                    data-title="My Gallery"><i class="im im-magnifier-plus"></i></a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-light" href="#"><i class="im im-link"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="gallery-box">
            <div class="feature-image">
              <div class="image-frame">
                <a href="single.html"> <img src="{{asset('assets/image/gallery-img-2.jpg')}}" alt="image" class="w-100"></a>
              </div>
            </div>
            <div class="box-content">
              <ul class="list-inline text-center">
                <li class="list-inline-item">
                  <a class="btn btn-light" href="{{asset('assets/image/gallery-img-2.jpg')}}" data-lightbox="image-1"
                    data-title="My Gallery"><i class="im im-magnifier-plus"></i></a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-light" href="#"><i class="im im-link"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="gallery-box">
            <div class="feature-image">
              <div class="image-frame">
                <a href="single.html"> <img src="{{asset('assets/image/gallery-img-3.jpg')}}" alt="image" class="w-100"></a>
              </div>
            </div>
            <div class="box-content">
              <ul class="list-inline text-center">
                <li class="list-inline-item">
                  <a class="btn btn-light" href="{{asset('assets/image/gallery-img-3.jpg')}}" data-lightbox="image-1"
                    data-title="My Gallery"><i class="im im-magnifier-plus"></i></a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-light" href="#"><i class="im im-link"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="gallery-box">
            <div class="feature-image">
              <div class="image-frame">
                <a href="single.html"> <img src="{{asset('assets/image/gallery-img-4.jpg')}}" alt="image" class="w-100"></a>
              </div>
            </div>
            <div class="box-content">
              <ul class="list-inline text-center">
                <li class="list-inline-item">
                  <a class="btn btn-light" href="{{asset('assets/image/gallery-img-4.jpg')}}" data-lightbox="image-1"
                    data-title="My Gallery"><i class="im im-magnifier-plus"></i></a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-light" href="#"><i class="im im-link"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="gallery-box">
            <div class="feature-image">
              <div class="image-frame">
                <a href="single.html"> <img src="{{asset('assets/image/gallery-img-5.jpg')}}" alt="image" class="w-100"></a>
              </div>
            </div>
            <div class="box-content">
              <ul class="list-inline text-center">
                <li class="list-inline-item">
                  <a class="btn btn-light" href="{{asset('assets/image/gallery-img-5.jpg')}}" data-lightbox="image-1"
                    data-title="My Gallery"><i class="im im-magnifier-plus"></i></a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-light" href="#"><i class="im im-link"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="gallery-box">
            <div class="feature-image">
              <div class="image-frame">
                <a href="single.html"> <img src="{{asset('assets/image/gallery-img-6.jpg')}}" alt="image" class="w-100"></a>
              </div>
            </div>
            <div class="box-content">
              <ul class="list-inline text-center">
                <li class="list-inline-item">
                  <a class="btn btn-light" href="{{asset('assets/image/gallery-img-3.jpg')}}" data-lightbox="image-1"
                    data-title="My Gallery"><i class="im im-magnifier-plus"></i></a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-light" href="#"><i class="im im-link"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==================== CTA Area ========================= -->
  <div class="cta-area bg-success position-relative py-5 ">
    <div class="all-bg-image invert"><img src="{{asset('assets/image/hero-bg-img2.jpg')}}" alt="image"></div>
    <div class="container">
      <div class="cta-wrapper text-light text-center w-75 mx-auto">
        <h2 class="display-4 mb-2 text-light">Contribute Us</h2>
        <p>It box threw if, each thousand fully most the out. The he cache. Believe. Salesman to you'd how excessive
          sentinels it the as employed would to service intention work it the at move slogging no that sovereignty. The
          didn't the road, prisoners. The into phase village hall ocean. Client outside.
        </p>
        <ul class="meta-data list-inline mt-2">
          <li class="list-inline-item"><a href="#" class="btn btn-danger">Become a volunteer</a></li>
          <li class="list-inline-item mt-2"> <a href="#" class="btn btn-light">Donate for us</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- ==================== News Area ========================= -->
  <div class="news-area my-5 ">
    <div class="container">
      <div class="mb-4 text-center">
        <strong class="all-label text-danger"> Get Update News</strong>
        <h2 class="display-4">Our Blog </h2>
        <p>To expand out few nothing experiments of, with commas, of it he that series sleep then</p>
      </div>
      <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-md-6 col-lg-4">
          <div class="news-post">
            <div class="feature-image">
              <div class="image-frame">
                <a href="javascript:void(0)"> <img src="/images/{{$blog->image}}" alt="image" class="w-100"></a>
              </div>
            </div>
            <div class="news-content">

              <h4><a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></h4>
              <ul class="meta-data list-inline">
                <li class="list-inline-item badge bg-danger"><small> 1 min ago</small></li>
              </ul>
              <p>{{ Str::limit(strip_tags($blog->body_1), 170) }}</p>
              <div class="d-flex w-100 justify-content-between">
                <a href="{{ route('blog.show', $blog->id) }}" class="read-more-btn">Read More<i class="im im-angle-right"></i></a>

                <form action="{{ route('blog.delete', $blog->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    {{-- <a href="{{ route('deleteHeader', $page->id) }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Delete</a> --}}
                    <button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn">
                      <i class="im im-archive"></i>
                    </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      @if (\App\Models\Blog::count() > 3)
      <div class="row">
        <div class="col text-center">
          <a href="#" class="btn btn-danger">View All News</a>
        </div>
      </div>
      @endif
    </div>
  </div>
  <!-- ==================== Testimonial Area ========================= -->
  <div class="testimonial-area bg-success position-relative py-5 ">
    <div class="all-bg-image invert"><img src="{{asset('assets/image/testimonial-bg.jpg')}}" alt="image"></div>
    <div class="container">
      <div class="testimonail-slider">
        @foreach($reviews as $review)
        @if($review->status == 'Approved')
        <div class="testimonial-box">
          <div class="box-image">
            <img src="{{asset('assets/image/author-img3.jpg')}}" alt="image">
          </div>
          <div class="box-content text-light">
            <p>"{{ $review->review }}"</p>
            <address class="mt-2">
              <strong class="m-0">{{ $review->user->fullname }}</strong>
              <p class="m-0">{{ $review->user->ward }}, {{ $review->user->local_government }}</p>
            </address>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>
  </div>
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
  <!-- gulp:js -->
  <script src="{{asset('assets/js/build.min.js')}}"></script>
  <!-- endgulp -->
</body>

</html>