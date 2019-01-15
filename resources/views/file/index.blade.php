@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @csrf
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        File List
                        <a href="{{ route('file.create') }}" class="btn btn-success">
                            Upload
                        </a>
                    </div>
                    <div class="card-body">
                        @component('partials.flashMessage') @endcomponent
                        <div class="d-flex flex-wrap">
                            @if($files)
                                @foreach($files as $file)
                                    <div class="p-1 m-1 bg-primary">
                                        <img src="{{ asset($file->absolute_path) }}" alt="{{ $file->name }}" width="100">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
