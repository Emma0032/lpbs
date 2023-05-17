@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12 col-md-6 mb-1">
                                <div class="form-group">
                                    <label for="fullname">{{ __('Fullname*') }}</label>

                                    <div class="input-group">
                                        <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname"  placeholder="Fullname">

                                        @error('fullname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 mb-1">
                                <div class="form-group">
                                    <label for="email">{{ __('Email Address*') }}</label>

                                    <div class="input-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-1">
                            <div class="form-group">
                                <label for="phone_no">{{ __('Phone number*') }}</label>

                                <div class="input-group">
                                    <input id="phone_no" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" placeholder="Phone number">

                                    @error('phone_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6 mb-1">
                                <div class="form-group">
                                    <label for="phone_no">{{ __('Password*') }}</label>

                                    <div class="input-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 mb-1">
                                <div class="form-group">
                                    <label for="phone_no">{{ __('Confirm Password*') }}</label>

                                    <div class="input-group">
                                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-1">
                            <div class="form-group">
                                <label for="lga">{{ __('L.G.A*') }}</label>

                                <div class="input-group">
                                    <select id="lga" class="form-control" name="local_governemnt_id">
                                        <option value="">-- Select Local Government --</option>
                                        @foreach ($lgas as $data)
                                            <option value="{{ $data->id }}">{{ $data->local_government }}</option>
                                        @endforeach
                                    </select>

                                    <input type="text" class="form-control @error('local_government') is-invalid @enderror" name="local_government" id="lgaInput" hidden>

                                    @error('local_government')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6 mb-1">
                                <div class="form-group">
                                    <label for="ward">{{ __('Ward*') }}</label>

                                    <div class="input-group">
                                        <input type="text" class="form-control @error('ward') is-invalid @enderror" name="ward" id="wardInput">

                                        @error('ward')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 mb-1">
                                <div class="form-group">
                                    <label for="polling_unit">{{ __('Polling Unit*') }}</label>

                                    <div class="input-group">
                                        <input type="text" class="form-control @error('polling_unit') is-invalid @enderror" name="polling_unit" id="polling_unit">

                                        @error('polling_unit')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#lga').on('change', function(){
            var lga = $(this).val();
            var lgaText = $("#lga option:selected").text();
            $('#lgaInput').val(lgaText);
            // $.ajax({
            //     type:'GET',
            //     url:'{!! URL::to('fetch-ward') !!}',
            //     data:{'local_governemnt_id': lga},
            //     dataType: 'json',
            //     success:function(data){
            //         $('#ward').html('<option value="">-- Select Ward --</option>');
            //         $.each(data.wards, function (key, value) {
            //             $('#ward').append('<option value="' + value.id + '">' + value.ward + '</option>');

            //             // $('#ward').append('<input type="text" name="ward" id="idDisplay" value="' + value.ward + '">');
            //         });
            //     }
            // });
            console.log(lgaText);
        });
    });
</script>
@endsection