@extends('layouts.app')

@section('content')
<div class="container">
  <p class="mb-1">Pending Reviews</p>
  @foreach ($reviews as $review)
    @if ($review->status == 'Pending')
      <div class="card-body">
        <div class="d-flex flex-start">
          {{-- <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp" alt="avatar" width="60" height="60" /> --}}
          <div>
            <h6 class="fw-bold">{{ $review->user->fullname }}</h6>
            <div class="d-flex align-items-center">
              <p class="mb-0">
                {{-- March 15, 2021 --}}
                {{ date("F j, Y", strtotime($review->created_at)) }}
                <span class="badge bg-primary">{{ $review->status }}</span>
              </p>
              {{-- <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2">DaPhaneZ</i></a> --}}
              {{-- <a href="#!" class="text-success"><i class="fas fa-file-alt ms-2"></i></a>
              <a href="#!" class="link-danger"><i class="fas fa-archive ms-2"></i></a> --}}
              <form action="{{ route('review.approve', $review->id) }}" method="POST">
                @csrf
                @method('POST')

                <button type="submit" onclick="return confirm('Are you sure you want to approve review?')" class="btn btn-transparent btn-outline-none text-success"><i class="im im-check-mark"></i></button>
              </form>

              <form action="{{ route('review.delete', $review->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" onclick="return confirm('Are you sure you want to approve review?')" class="btn btn-transparent btn-outline-none link-danger"><i class="im im-x-mark"></i></button>
              </form>
            </div>
            <p class="mb-0">{{ $review->review }}</p>
          </div>
        </div>
      </div>
    @endif
  @endforeach

  Approved Reviews
  @foreach ($reviews as $review)
    @if ($review->status == 'Approved')
      <div class="card-body">
        <div class="d-flex flex-start">
          {{-- <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp" alt="avatar" width="60" height="60" /> --}}
          <div>
            <h6 class="fw-bold">{{ $review->user->fullname }}</h6>
            <div class="d-flex align-items-center">
              <p class="mb-0">
                {{-- March 15, 2021 --}}
                {{ date("F j, Y", strtotime($review->created_at)) }}
                <span class="badge bg-success">{{ $review->status }}</span>
              </p>
              {{-- <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a> --}}
              {{-- <a href="#!" class="text-success"><i class="fas fa-redo-alt ms-2"></i></a> --}}
              {{-- <a href="#!" class="link-danger"><i class="fas fa-archive ms-2"></i></a> --}}
              <form action="{{ route('review.delete', $review->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" onclick="return confirm('Are you sure you want to approve review?')" class="btn btn-transparent link-danger"><i class="im im-x-mark"></i></button>
              </form>
            </div>
            <p class="mb-0">{{ $review->review }}</p>
          </div>
        </div>
      </div>
    @endif
  @endforeach
</div>
@endsection
