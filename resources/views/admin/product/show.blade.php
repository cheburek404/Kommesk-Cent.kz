@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-8">
                        <h1 class="m-0">Product title: {{ $product->title }}</h1>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('products') }}" class="btn btn-danger" style="float:right; font-size:1em">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Image:</h3>
                            <img src="{{ asset('assets/uploads/product/'.$product->image) }}" alt="Product image" height="250" width="370">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Title:</h3>
                            <p class="card-text">{{ $product->title }}</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Price:</h3>
                            <p class="card-text">{{ $product->price }}</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Category:</h3>
                            <p class="card-text">{{ $product->cat->name_of_category }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Subtitle:</h3>
                    <p class="card-text">{{ $product->subtitle }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Pre description:</h3>
                    <p class="card-text">{{ $product->pre_description }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Description:</h3>
                    <p class="card-text">{{ $product->description }}</p>
                </div>
            </div>
        </section>
    </div>
@endsection
