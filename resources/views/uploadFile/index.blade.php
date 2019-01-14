@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{ route('file.upload') }}" class="form-row justify-content-center" enctype="multipart/form-data">
            @csrf
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">File Upload</div>
                    <div class="card-body">
                        @component('partials.flashMessage') @endcomponent
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Upload</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control{{ $errors->has('profile') ? ' is-invalid' : '' }}" name="profile">
                                @if ($errors->has('profile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            Upload
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
