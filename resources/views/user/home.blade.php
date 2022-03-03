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
                        <div class="select-city" style="display:none;">
                            <i class="icon-city"></i>
                            <p>Выберите город</p>
                            <ul class="dropdown-city">
                                <li>Алматы</li>
                                <li>Астана</li>
                                <li>Павлодар</li>
                                <li>Шымкент</li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-buttons">
                        <button class="btn btn-feedback" id="gotofeedback">Обратная связь</button>
                        <!-- <button class="btn btn-help">Помощь</button>-->
                        <a class="header-email" href="mailto:info@cent.kz">info@cent.kz</a>
                    </div>
                </div>
                <div class="header-bottom">
                    <a class="logo" href="/"><img src="https://cent.kz/images/logo8.png"></a>
                    {{--<ul class="menu">
                        <li class="menu-item"><a href="#"><i class="icon-basket"></i>
                                <p>Корзина</p>
                            </a></li>
                        <li class="menu-item"><a href="#"><i class="icon-hearth"></i>
                                <p>Избранное</p>
                            </a></li>
                        <li class="menu-item"><a href="#"><i class="icon-user"></i>
                                <p>Личный кабинет</p>
                            </a></li>
                        <li class="menu-item"><a href="#"><i class="icon-settings"></i>
                                <p>Настройки</p>
                            </a>
                        </li>
                    </ul>--}}
                </div> <br><div class="banner-slider">
                    <a href="/"><img src="https://cent.kz/images/banner8__.png" alt="" style="border-radius:15px;" id="banner_1"></a>
                    <a href="/"><img src="https://cent.kz/images/banner82.png" alt="" style="border-radius:15px;" id="banner_2"></a>
                </div>

                <div class="menu-bottom">
                    <ul class="bottom-menu">
                        @foreach($category as $cat)
                            <li class="bottom-menu_item catlink"><a href="" class="catlink active ">{{ $cat->name_of_category }}</a></li>
                        @endforeach
                        {{--<li class="bottom-menu_item catlink active" id="cat0"><a href="javascript:void(0)" class="catlink active " onclick="changecat(0, &quot;&quot;)">Все </a></li><li class="bottom-menu_item catlink " id="cat1"><a href="javascript:void(0)" onclick="changecat(1, &quot;&quot;)">Авто</a></li>
                        <li class="bottom-menu_item catlink " id="cat2"><a href="javascript:void(0)" onclick="changecat(2, &quot;&quot;)">Здоровье</a></li>
                        <li class="bottom-menu_item catlink " id="cat3"><a href="javascript:void(0)" onclick="changecat(3, &quot;&quot;)">Дом</a></li>
                        <li class="bottom-menu_item catlink " id="cat4"><a href="javascript:void(0)" onclick="changecat(4, &quot;&quot;)">Туризм</a></li>
                        <li class="bottom-menu_item catlink " id="cat5"><a href="javascript:void(0)" onclick="changecat(5, &quot;&quot;)">8 марта</a></li>--}}
                        {{--<li class="bottom-menu_item mobile"><a href="#">Корзина</a></li>
                        <li class="bottom-menu_item mobile"><a href="#">Избранное</a></li>
                        <li class="bottom-menu_item mobile"><a href="#">Личный кабинет</a></li>
                        <li class="bottom-menu_item mobile"><a href="#">Настройки</a></li>--}}
                    </ul>
                    {{--<div class="header-search">
                        <input required="" min="1" type="text" class="search-input" id="search" name="search">
                        <label><i class="icon-search"></i>Поиск...</label>
                        <button type="submit" class="search-btn">Найти</button>
                    </div>--}}
                </div>
                {{--<div class="burger-content">
                    <div class="close-burger">×</div>
                    <ul>
                        <li><a href="#">Меню 1</a></li>
                        <li><a href="#">Меню 2</a></li>
                        <li><a href="#">Меню 3</a></li>
                        <li><a href="#">Меню 4</a></li>
                        <li><a href="#">Меню 5</a></li>
                        <li><a href="#">Помощь</a></li>
                        <li><a href="#">Обратная связь</a></li>
                    </ul>
                </div>--}}
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
                                    <a href="/show/101">
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
