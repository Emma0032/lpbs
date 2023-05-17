@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ ('Create Slide') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-sm-12 mb-1">
                            <div class="form-group">
                                <label for="image">{{ __('Upload cover (1920 x 1080)*') }}</label>

                                <div class="input-group">
                                    <input id="image" name="image" type="file" class="form-control @error('image') is-invalid @enderror" accept=".png, .jpg, .jpeg" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-1">
                            <div class="form-group">
                                <label for="title">{{ __('Title*') }}</label>

                                <div class="input-group">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-1">
                            <div class="form-group">
                                <label for="body_1">{{ __('Body 1*') }}</label>

                                <div class="input-group">
                                    <textarea id="body_1" type="text" class="form-control @error('body_1') is-invalid @enderror" name="body" required cols="7"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Create') }}
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