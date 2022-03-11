@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="container">
            <header class="header">
                @include('layouts.header')
            </header>
        </div>
    </div>
    <section class="item-page">
        <div class="container">
            <div class="item-inside">
                <a href="{{ url('/') }}">Назад</a><br><br>
                <div class="item_top">
                    <img src="{{ asset('assets/uploads/product/'.$product->image) }}" alt="Image" class="item-inside_img">
                    <div class="item-inside_content">
                        <h1>{{ $product->title }}</h1>
                        <p class="item-inside_descr">{{ $product->pre_description }}</p>
                        <div class="topdesc">
                            <div class="counts">
                                <span class="count-minus">-</span>
                                <span type="text" name="quantity" class="count-total" id="totalq">1</span>
                                <span class="count-plus">+</span>
                            </div>
                            <br>
                            <span class="price">Итого: <span id="totalp">{{ $product->price }}</span> тг.</span>
                            <br><br>
                            <a class="btn btn-info" href="{{ url('order/'.$product->id) }}">Заказать</a>
                        </div>
                    </div>
                </div>
                <div class="item-inside_descr">
                    {!! $product->description !!}
                </div>
            </div>
        </div>
    </section>
    @include('layouts.feedback')

    @include('layouts.footer')
@endsection
