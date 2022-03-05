@extends('layouts.app')

@section('content')

    <div class="main">
        <div class="container">
            <header class="header">
                @include('layouts.header')
                <div class="banner-slider">
                    <a href="/"><img src="https://cent.kz/images/banner8__.png" alt="" style="border-radius:15px;" id="banner_1"></a>
                    <a href="/"><img src="https://cent.kz/images/banner82.png" alt="" style="border-radius:15px;" id="banner_2"></a>
                </div>

                <div class="menu-bottom">
                    <ul class="bottom-menu">
                        <li class="bottom-menu_item"><a href="{{ url('user/home') }}">All</a></li>
                        @foreach($category as $cat)
                            <li class="bottom-menu_item"><a href="{{ url('category/'.$cat->id) }}">{{ $cat->name_of_category }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </header>
        </div>
    </div>

    <section class="catalog-page">
        <div class="container">
            <div class="catalog_content">
                <div class="catalog-items">
                    <div class="catalog-items_contents grid grid-4" id="prodrow">
                        @foreach($featured_products as $prod)
                        <div class="catalog-item">
                            <div class="catalog-item_top">
                                <a href="{{ url('show/'.$prod->id) }}">
                                    <img src="{{ asset('assets/uploads/product/'.$prod->image) }}" alt="Product image" style="border-radius: 25% 10%;">
                                </a>
                            </div>
                            <p style="font-weight: bold">{{ $prod->title }}</p>
                            <p style="font-size: 15px">{{ $prod->subtitle }}</p>
                        </div>
                        @endforeach
                    </div>
                    {{--<p id="nextlink"><a href="javascript:void(0);" onclick="showmore(8,$(&quot;#thisget&quot;).val())">показать еще</a><input type="hidden" id="thisget" value=""></p>--}}
                </div>
            </div>
        </div>
    </section>

    @include('layouts.feedback')

    <section class="bottom-banner">
        <div class="container">
            <div class="bottom-banner_content">
                <div class="bottom-banner_text">
                    <h2>CENT.KZ- с заботой о вас и ваших близких!</h2>
                    <p>Самое главное для человека – это благополучие его близких! Мы разработали проект Cent.kz для того, чтобы вы могли позаботиться о своих родных. Здесь вы найдете продукты и сервисы для самых важных людей для вас и для всех сфер их жизни. </p>
                </div>
                <div class="bottom-banner_images">
                    <div class="bottom-banner_collection">
                        <img src="https://cent.kz/images/01a.png" alt="">
                        <img src="https://cent.kz/images/02a.png" alt="">
                    </div>
                    <div class="bottom-banner_collection">
                        <img src="https://cent.kz/images/03a.png" alt="">
                        <img src="https://cent.kz/images/04a.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
    {{--<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/newdesign/js/main.js"></script>

    <script src="/fjs/jquery-3.3.1.min.js"></script>
    <script src="/fjs/jquery-migrate-3.0.1.min.js"></script>
    <script src="/fjs/jquery-ui.js"></script>
    <script src="/fjs/main.js?v=1"></script>--}}
@endsection
