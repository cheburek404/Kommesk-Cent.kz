@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="container">
            <header class="header">
                @include('layouts.header')
            </header>
        </div>
    </div>

    <div class="basket-page">
        <div class="container">
            <h1>Корзина</h1>
            <div class="basket_items">
                {{--<h3><b>Вы выбрали продукт: </b></h3>--}}
                <div class="basket_item">
                    <img src="{{ asset('assets/uploads/product/'.$product->image) }}">
                    <div class="basket_info">
                        <h2>  Вы выбрали продукт <b><a href="{{ url('show/'.$product->id) }}" target="_blank">{{ $product->title }}</a></b> стоимостью {{ $product->price }} тг.</h2>
                        <p>{{ $product->pre_description }}</p>
                    </div>
                </div>

                <div class="feedback-form">
                    <div class="feedback-form_item cart_item">
                        @foreach($order as $plh)
                        <br>
                        <input type="text" placeholder="{{ $plh->placeholder_name }}" class="form-control inp-order">
                        @endforeach
                    </div>

                    <div class="feedback-form_item_ cart_item_">
                        <a href="#" id="sendb" class="btn btn-black" style="cursor:pointer;">Заказать</a>
                    </div>
                    <br><br>
                    {{--<div class="feedback-form_item cart_item">
                        <input type="text" id="promocode" name="promocode" value="" placeholder="Промокод" class="form-control">
                    </div>
                    <div class="feedback-form_item_ cart_item_">
                        <a href="#" id="sendb" class="btn btn-black" style="cursor:pointer;">Заказать по промокоду</a>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <br><br>
    @include('layouts.feedback')

    @include('layouts.footer')
@endsection
