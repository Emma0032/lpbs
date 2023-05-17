@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="list-group">
            @if(auth()->user()->id == 1)
            @foreach ($users as $user)
                <section class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-0">{{ $user->fullname }}</h5>
                        <small class="text-muted">{{ $user->local_government }}</small>
                        <small class="text-muted">{{ $user->ward }}</small>
                        <small class="text-muted">{{ $user->polling_unit }}</small>
                    </div>
                    <p class="mb-0">{{ $user->email }}</p>
                    <small class="text-muted">{{ $user->phone_number }}</small>
                </section>
            @endforeach
            @elseif(auth()->user()->local_government == 'Askira/Uba')
            @foreach ($askira as $user)
                <section class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-0">{{ $user->fullname }}</h5>
                        <small class="text-muted">{{ $user->local_government }}</small>
                        <small class="text-muted">{{ $user->ward }}</small>
                        <small class="text-muted">{{ $user->polling_unit }}</small>
                    </div>
                    <p class="mb-0">{{ $user->email }}</p>
                    <small class="text-muted">{{ $user->phone_number }}</small>
                </section>
            @endforeach
            @elseif(auth()->user()->local_government == 'Bayo')
            @foreach ($bayo as $user)
                <section class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-0">{{ $user->fullname }}</h5>
                        <small class="text-muted">{{ $user->local_government }}</small>
                        <small class="text-muted">{{ $user->ward }}</small>
                        <small class="text-muted">{{ $user->polling_unit }}</small>
                    </div>
                    <p class="mb-0">{{ $user->email }}</p>
                    <small class="text-muted">{{ $user->phone_number }}</small>
                </section>
            @endforeach
            @elseif(auth()->user()->local_government == 'Biu')
            @foreach ($biu as $user)
                <section class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-0">{{ $user->fullname }}</h5>
                        <small class="text-muted">{{ $user->local_government }}</small>
                        <small class="text-muted">{{ $user->ward }}</small>
                        <small class="text-muted">{{ $user->polling_unit }}</small>
                    </div>
                    <p class="mb-0">{{ $user->email }}</p>
                    <small class="text-muted">{{ $user->phone_number }}</small>
                </section>
            @endforeach
            @elseif(auth()->user()->local_government == 'Chibok')
            @foreach ($chibok as $user)
                <section class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-0">{{ $user->fullname }}</h5>
                        <small class="text-muted">{{ $user->local_government }}</small>
                        <small class="text-muted">{{ $user->ward }}</small>
                        <small class="text-muted">{{ $user->polling_unit }}</small>
                    </div>
                    <p class="mb-0">{{ $user->email }}</p>
                    <small class="text-muted">{{ $user->phone_number }}</small>
                </section>
            @endforeach
            @elseif(auth()->user()->local_government == 'Damboa')
            @foreach ($damboa as $user)
                <section class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-0">{{ $user->fullname }}</h5>
                        <small class="text-muted">{{ $user->local_government }}</small>
                        <small class="text-muted">{{ $user->ward }}</small>
                        <small class="text-muted">{{ $user->polling_unit }}</small>
                    </div>
                    <p class="mb-0">{{ $user->email }}</p>
                    <small class="text-muted">{{ $user->phone_number }}</small>
                </section>
            @endforeach
            @elseif(auth()->user()->local_government == 'Gwoza')
            @foreach ($gwoza as $user)
                <section class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-0">{{ $user->fullname }}</h5>
                        <small class="text-muted">{{ $user->local_government }}</small>
                        <small class="text-muted">{{ $user->ward }}</small>
                        <small class="text-muted">{{ $user->polling_unit }}</small>
                    </div>
                    <p class="mb-0">{{ $user->email }}</p>
                    <small class="text-muted">{{ $user->phone_number }}</small>
                </section>
            @endforeach
            @elseif(auth()->user()->local_government == 'Hawul')
            @foreach ($hawul as $user)
                <section class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-0">{{ $user->fullname }}</h5>
                        <small class="text-muted">{{ $user->local_government }}</small>
                        <small class="text-muted">{{ $user->ward }}</small>
                        <small class="text-muted">{{ $user->polling_unit }}</small>
                    </div>
                    <p class="mb-0">{{ $user->email }}</p>
                    <small class="text-muted">{{ $user->phone_number }}</small>
                </section>
            @endforeach
            @elseif(auth()->user()->local_government == 'Kwaya Kusar')
            @foreach ($kwaya as $user)
                <section class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-0">{{ $user->fullname }}</h5>
                        <small class="text-muted">{{ $user->local_government }}</small>
                        <small class="text-muted">{{ $user->ward }}</small>
                        <small class="text-muted">{{ $user->polling_unit }}</small>
                    </div>
                    <p class="mb-0">{{ $user->email }}</p>
                    <small class="text-muted">{{ $user->phone_number }}</small>
                </section>
            @endforeach
            {{-- @elseif(auth()->user()->local_government == 'Shani') --}}
            @else
            @foreach ($shani as $user)
                <section class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-0">{{ $user->fullname }}</h5>
                        <small class="text-muted">{{ $user->local_government }}</small>
                        <small class="text-muted">{{ $user->ward }}</small>
                        <small class="text-muted">{{ $user->polling_unit }}</small>
                    </div>
                    <p class="mb-0">{{ $user->email }}</p>
                    <small class="text-muted">{{ $user->phone_number }}</small>
                </section>
            @endforeach
            @endif
        </div>
    </div>

    <div class="row justify-content-center"> 
    @if(auth()->user()->id == 1)
        @foreach ($reviews as $review)
            @if($review->status == 'Approved')
                <section class="list-group-item list-group-item-action flex-column align-items-start mt-3">
                    <div class="d-flex w-100 justify-content-between">
                        <p class="mb-1">{{ $review->review }}</p>
                        <small class="text-muted">{{ $review->city }}</small>, <small class="text-muted">{{ $review->country }}</small>
                        <small class="text-success">{{ $review->status }}</small>
                    </div>
                </section>
            @endif
        @endforeach
    @endif
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="mb-3 mt-1">
        @csrf
        
        <button onclick="return confirm('Are you sure you want to logout?')" type="submit" class="btn btn-small btn-danger float-end">Log Out</button>
    </form>
</div>
@endsection
