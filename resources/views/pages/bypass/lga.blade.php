@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Create Article') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('lga.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-sm-12 mb-1">
                            <div class="form-group">
                                <label for="lga">{{ __('LGA*') }}</label>

                                <div class="input-group">
                                    <select id="lga" class="form-control" name="local_government">
                                        <option value="Askira/Uba">ASKIRA/UBA</option>
                                        <option value="Bayo">BAYO</option>
                                        <option value="Biu">BIU</option>
                                        <option value="Chibok">CHIBOK</option>
                                        <option value="Damboa">DAMBOA</option>
                                        <option value="Gwoza">GWOZA</option>
                                        <option value="Hawul">HAWUL</option>
                                        <option value="Kwaya Kusar">KWAYA KUSAR</option>
                                        <option value="Shani">SHANI</option>
                                    </select>
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