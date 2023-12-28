@section('content')
<div class="content">
    <h1>
        <a href="/">Главная</a> /
        <a href="/contact">Свяжитесь с нами</a>
    </h1>

    <div class="block">
        <h2>Напрямую</h2>
        <p>
            <div>
                email: <a href="mailto:work.mrdaseman@gmail.com" target="_blank">work.mrdaseman@gmail.com</a>
            </div>
            <div>
                github: <a href="https://github.com/mrdaseman" target="_blank">https://github.com/mrdaseman</a>
            </div>
        </p>
    </div>

    <div class="block">
        <h2>Или отправьте контактные данные и сообщение</h2>
        <form method="post" action="{{ 'sendContacts' }}">
            @csrf
            <div>
                <label for="phone">Номер телефона</label>
                <input type="tel" name="phone" id="phone" placeholder="Номер телефона для связи..." required>
            </div>
            <div>
                <label for="message">Сообщение</label>
                <textarea type="text" name="message" id="message" placeholder="Я хочу связаться с вами, чтобы..." required rows="5"></textarea>
            </div>
            <button type="submit" submit="button">Отправить</button>
        </form>
    </div>
</div>

@vite('resources/scss/main.scss')