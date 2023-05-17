@extends('layouts.app')

@section('content')
<!--/// Page Title Area /// -->
  <div class="page-title-area py-5 position-relative overflow-hidden">
    <div class="all-bg-image"><img src="{{asset('assets/image/hero-bg-img.jpg')}}" alt="image"></div>
    <div class="container">
      <div class="page-title-wrapper text-light text-center">
        <h1>Latest News</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Blog</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>


  <!-- ==================== News Area ========================= -->

  <div class="news-area my-5 ">
    <div class="container">

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
              <p>{{Str::limit(strip_tags($blog->body_1), 170)}}</p>
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
      <nav class="news-navigation">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>
  </div>
@endsection