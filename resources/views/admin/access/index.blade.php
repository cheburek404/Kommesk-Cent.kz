@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All users</h1>
                    </div>
                </div>
                {{--<form action="{{ url('search') }}" method="GET">
                    <input type="text" class="form-control search" name="search" placeholder="Search by email" required/>
                    <button class="btn btn-primary search-btn" type="submit">Search</button>
                </form>--}}
                <form action="{{ url('search') }}" method="GET">
                    <div class="inner-form">
                        <div class="input-field second-wrap">
                            <input id="search" type="text" placeholder="Search by Email" name="search">
                        </div>
                        <div class="input-field third-wrap">
                            <button class="btn-search" type="submit">
                                <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <h4>{{ session('success') }}</h4>
                    </div>
                @endif
            </div>
        </div>
        <section class="content">
            <div class="card">
                <div class="card-body p-0" style="display: block;">
                    <table class="table table-hover table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">ID</th>
                            <th style="width:25%">Name</th>
                            <th style="width:30%">Email</th>
                            <th style="width:20%">Roles</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role_as }}</td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ url('give-access/'.$user->id) }}">
                                        <i class="fa fa-lock-open">
                                        </i> Give access
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-3">
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
