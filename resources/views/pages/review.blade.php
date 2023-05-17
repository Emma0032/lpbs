@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Create Review') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('review.store') }}">
                        @csrf

                        <div class="col-sm-12 mb-1">
                            <div class="form-group">
                                <label for="review">{{ __('Review*') }}</label>

                                <div class="input-group">
                                    <textarea id="review" class="form-control @error('review') is-invalid @enderror" name="review" required cols="7"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Post Review') }}
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection