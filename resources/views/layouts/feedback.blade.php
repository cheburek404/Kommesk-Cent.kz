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
