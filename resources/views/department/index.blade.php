@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        List Department
                        <a href="{{ route('department.create') }}" class="btn btn-success">
                            Create
                        </a>
                    </div>
                    <div class="card-body">
                        @component('partials.flashMessage') @endcomponent
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if ($departments)
                                    @foreach($departments as $department)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $department->name }}</td>
                                            <td>
                                                <a href="{{ route('department.edit', ['department' => $department->id]) }}" class="btn btn-warning">
                                                    Edit
                                                </a>
                                                <form method="POST" action="{{ route('department.destroy', ['department' => $department->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
