@section('content')
<div class="content">
    <h1>
        <a href="/">Главная</a> /
        <a href="/users">Пользователи</a> /
        <a href="/users/create">Добавить пользователя</a>
    </h1>
    <div class="block">
        <form action="{{ 'store' }}" method="post">
            @csrf
            <div>
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" placeholder="Ваше имя..." required>
            </div>
            <div>
                <label for="email">Почта</label>
                <input type="email" name="email" id="email" placeholder="Ваша почта..." required>
            </div>
            <div>
                <label for="password">Пароль</label>
                <input type="password" name="password" id="password" placeholder="Ваш пароль..." required>
            </div>
            <button type="submit" submit="button">Добавить пользователя</button>
        </form>
    </div>
</div>
@vite('resources/scss/main.scss')
