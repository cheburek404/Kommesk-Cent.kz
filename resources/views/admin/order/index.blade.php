@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All placeholders</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="card">
                <div class="card-body p-0" style="display: block;">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">ID</th>
                            <th style="width:20%">Placeholder</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->placeholder_name }}</td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ url('edit-category/'.$item->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm delete-btn" href="{{ url('delete-category/'.$item->id) }}">
                                        <i class="fas fa-trash">
                                        </i> Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
