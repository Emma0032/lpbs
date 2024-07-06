@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Create Article') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                        <div class="col-12 col-md-5 form__cover">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label for="image">Upload cover (270 x 400)</label>

                                        <input id="image" name="image" type="file" class="form-control @error('image') is-invalid @enderror" accept=".png, .jpg, .jpeg">
                                    </div>
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

                        <div class="row">
                        <div class="col-sm-12 col-md-6 mb-1">
                            <div class="form-group">
                                <label for="body_1">{{ __('Body 1*') }}</label>

                                <div class="input-group">
                                    <textarea id="body_1" type="text" class="form-control @error('body_1') is-invalid @enderror" name="body_1" required cols="7"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 mb-1">
                            <div class="form-group">
                                <label for="body_2">{{ __('Body 2*') }}</label>

                                <div class="input-group">
                                    <textarea id="body_2" type="text" class="form-control @error('body_2') is-invalid @enderror" name="body_2" required cols="7"></textarea>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-sm-12 mb-1">
                            <div class="form-group">
                                <label for="subtitle_1">{{ __('SubTitle 1*') }}</label>

                                <div class="input-group">
                                    <input id="subtitle_1" type="text" class="form-control @error('subtitle_1') is-invalid @enderror" name="subtitle_1" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-1">
                            <div class="form-group">
                                <label for="body_3">{{ __('Body 3*') }}</label>

                                <div class="input-group">
                                    <textarea id="body_3" type="body_3" class="form-control @error('body_3') is-invalid @enderror" name="body_3" required cols="7"></textarea>
                                </div>
                            </div>
                        </div>

                            <div class="col-sm-12 mb-1">
                            <div class="form-group">
                                <label for="subtitle_2">{{ __('SubTitle 2*') }}</label>

                                <div class="input-group">
                                    <input id="subtitle_2" type="text" class="form-control @error('subtitle_2') is-invalid @enderror" name="subtitle_2" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-1">
                            <div class="form-group">
                                <label for="body_4">{{ __('Body 4*') }}</label>

                                <div class="input-group">
                                    <textarea id="body_4" type="text" class="form-control @error('body_4') is-invalid @enderror" name="body_4" required cols="7"></textarea>
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
