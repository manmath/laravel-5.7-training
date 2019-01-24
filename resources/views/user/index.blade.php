@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                       List User
                    </div>
                    <div class="card-body">
                        @component('partials.flashMessage') @endcomponent
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if ($users)
                                    @foreach($users as $user)
                                        <tr>
                                            <td>
                                                @if ($user->photo)
                                                    <img src="{{ asset($user->photo->absolute_path) }}" alt="{{ $user->photo->name }}" width="80">
                                                @else
                                                    <img src="{{ asset('uploads/dummy/user.jpg') }}" alt="" width="80">
                                                @endif
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                $nbsp;
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="4">{{ $users->links() }}</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
