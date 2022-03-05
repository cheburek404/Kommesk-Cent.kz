@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update product</h1>
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
                        <form method="POST" action="{{ url('update-product/'.$product->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" value="{{ $product->title }}" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Subtitle</label>
                                    <input type="text" value="{{ $product->subtitle }}" name="subtitle" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Pre description</label>
                                    <textarea class="form-control" name="pre_description">{{ $product->pre_description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" value="{{ $product->price }}" name="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Categories</label>
                                    <select class="form-control">
                                        {{--@foreach($category as $cat)
                                            <option value="{{ $cat->id }}" @if ($cat->id == $product->category) selected
                                                @endif>{{ $cat->name_of_category }}</option>
                                        @endforeach--}}
                                        <option value={{ $product->id }}>{{ $product->cat->name_of_category }}</option>
                                    </select>
                                </div>
                                @if($product->image)
                                    <label>Your image</label><br>
                                    <img src="{{ asset('assets/uploads/product/'.$product->image) }}" alt="Product image" height="300" width="300">
                                @endif
                                <br><br>
                                <div class="form-group">
                                    <label>File input</label>
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        <input type="file" class="custom-file-input" name="image">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description">{{ $product->description }}</textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ url('products') }}" class="btn btn-danger" style="float:right">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

