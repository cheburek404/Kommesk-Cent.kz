@extends('layouts.app')

@section('content')

    <div class="main">
        <div class="container">
            <header class="header">
                <div class="header-top">
                    <div class="header-adress">
                        <button class="hamburger hamburger--collapse" type="button" style="display:none;">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                    <div class="header-buttons">
                        <button class="btn btn-feedback" id="gotofeedback">Обратная связь</button>
                        <!-- <button class="btn btn-help">Помощь</button>-->
                        <a class="header-email" href="mailto:info@cent.kz">info@cent.kz</a>
                    </div>
                </div>
                <div class="header-bottom">
                    <a class="logo" href="/"><img src="https://cent.kz/images/logo8.png"></a>
                </div> <br>
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
                                    <a href="{{ url('product/'.$prod->id) }}">
                                        <img src="{{ asset('assets/uploads/product/'.$prod->image) }}" alt="Product image">
                                    </a>
                                </div>
                                <p style="font-weight: bold">{{ $prod->title }}</p>
                                <p style="font-size: 13px">{{ $prod->subtitle }}</p>
                            </div>
                            @endforeach
                        </div>
                    {{--<p id="nextlink"><a href="javascript:void(0);" onclick="showmore(8,$(&quot;#thisget&quot;).val())">показать еще</a><input type="hidden" id="thisget" value=""></p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="feedback" id="feedback">
        <div class="container">
            <h2>Обратная связь</h2>
            <div class="feedback-grid">
                <p class="feedback-descr">Вы можете оставить отзыв или предложение по использованию нашего сайта. Мы обязательно его учтем и будем благодарны за обратную связь!</p>
                <div class="feedback-form">
                    <div class="feedback-form_item">
                        <input type="text" placeholder="Фамилия" name="lname" id="lname" class="feedback-input formes">
                        <input type="text" placeholder="Имя" name="fname" id="fname" class="feedback-input formes">
                    </div>
                    <div class="feedback-form_item">
                        <input type="email" placeholder="e-mail" name="email" id="email" class="feedback-input formes">
                        <input type="tel" placeholder="Телефон" name="tel" id="tel" class="feedback-input formes">
                    </div>
                    <textarea name="message" id="message" placeholder="Комментарий..." class="feedback-input textarea formes"></textarea>

                    <button type="submit" class="btn btn-feedback_bottom" onclick="SendMessage()">Оставить заявку</button>
                    <div id="mesres">
                    </div>

                </div>
            </div>
        </div></section>


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

    <footer class="footer">
        <div class="container">
            <a href="#" class="footer-logo">CENT.KZ</a>
            <nav class="footer-menu">
                <ul>
                    <li><a href="/oferta">Публичная оферта</a></li>
                    <li><a href="/dl/policy.pdf">Политика конфиденциальности</a></li>
                    <!-- <li><a href="#">Контакты</a></li>
                     <li><a href="#">Почта</a></li>-->
                </ul>
                <ul style="color:white">
                    <!--  <li><a href="#">Пользовательское соглашение</a></li>-->
                    <li>Адрес: г. Алматы, Наурызбай батыра 17, БЦ "Сатори", 213 каб.
                    </li><li>Телефон: +7 777 017 92 73</li>
                    <li>Email: info@cent.kz</li>

                </ul>
                <div class="social-links">
                    <li><a href="https://instagram.com/cent.kz?utm_medium=copy_link" target="_blank"><i class="icon-instagram"></i></a></li>
                </div>
            </nav>
        </div>
    </footer>
    {{--<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/newdesign/js/main.js"></script>

    <script src="/fjs/jquery-3.3.1.min.js"></script>
    <script src="/fjs/jquery-migrate-3.0.1.min.js"></script>
    <script src="/fjs/jquery-ui.js"></script>
    <script src="/fjs/main.js?v=1"></script>--}}
@endsection
