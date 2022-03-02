@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add product</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            <h4>{{ session('success') }}</h4>
                        </div>
                    @endif
                    <div class="card card-primary">
                        <form method="POST" action="{{ url('insert-product') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Subtitle</label>
                                    <input type="text" name="subtitle" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Pre description</label>
                                    <textarea class="form-control" name="pre_description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" name="price" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Categories</label>
                                    <select class="form-control" name="category">
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name_of_category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{--<div class="form-group">
                                    <label for="exampleFormControlFile">File input</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile" name="image">
                                </div>--}}
                                <div class="form-group">
                                    <label>File input</label>
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        <input type="file" class="custom-file-input" name="image" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" required></textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

