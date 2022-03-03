@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="container">
            <header class="header">
                <div class="header-top">
                    <div class="header-adress">
                    </div>
                    <div class="header-buttons">
                        <button class="btn btn-feedback" id="gotofeedback">Обратная связь</button>
                        <!-- <button class="btn btn-help">Помощь</button>-->
                        <a class="header-email" href="mailto:info@cent.kz">info@cent.kz</a>
                    </div>
                </div>
                <div class="header-bottom">
                    <a class="logo" href="/"><img src="https://cent.kz/images/logo8.png"></a>
                </div>
            </header>
        </div>
    </div>
    <section class="item-page">
        <div class="container">
            <div class="item-inside">
                <a href="{{ url('user/home') }}">Назад</a><br><br>
                <div class="item_top">
                    <img src="{{ asset('assets/uploads/product/'.$product->image) }}" alt="Image" class="item-inside_img">
                    <div class="item-inside_content ">
                        <h1>{{ $product->title }}</h1>
                        <p>{{ $product->pre_description }}</p>
                        <div class="topdesc">
                            <p class="price">Стоимость: {{ $product->price }} тг.<p>
                            <div class="counts">
                                <span class="count-minus" onclick="minus()">-</span>
                                <span class="count-total" id="totalq">1</span>
                                <span class="count-plus" onclick="plus()">+</span>
                            </div>
                            <br>
                            <span class="price">Итого: <span id="totalp">{{ $product->price }}</span> тг.</span>

                            <br><br>
                            <a class="btn btn-info">Заказать</a>
                        </div>
                    </div>
                </div>
                <div class="item-inside_descr">
                    {{ $product->description }}
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
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <a href="#" class="footer-logo">CENT.KZ</a>
            <nav class="footer-menu">
                <ul>
                    <li><a href="/oferta">Публичная оферта</a></li>
                    <li><a href="/dl/policy.pdf">Политика конфиденциальности</a></li>
                </ul>
                <ul style="color:white">
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
@endsection
