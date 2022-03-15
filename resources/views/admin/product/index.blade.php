@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All products</h1>
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
                            <th style="width:30%">Title</th>
                            <th style="width:20%">Category</th>
                            <th>Created date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->cat->name_of_category }}</td>
                                {{--<td><img src="{{ asset('assets/uploads/product/'.$item->image) }}" height="100" width="100"></td>--}}
                                <td>{{ $item->created_at }}</td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ url('show-product/'.$item->id) }}">
                                        <i class="fas fa-folder">
                                        </i> View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ url('edit-product/'.$item->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" data-toggle="modal" id="smallButton" data-attr="{{ route('delete', $item->id) }}" title="Delete Project">
                                        <i class="fas fa-trash">
                                        </i> Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-3">
                        {!! $product->links('pagination-links') !!}
                    </div>
                    <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true"  style="border-radius: 10px">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-body" id="smallBody">
                                    <!-- the result to be displayed apply here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
