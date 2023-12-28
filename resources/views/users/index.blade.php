@section('content')
<div class="content">
    <h1>
        <a href="/">Главная</a> /
        <a href="/users">Пользователи</a>
        @if (isset($user_id))
            / <a href="/users/{{ $user_id }}/posts">Пользователь {{ $user_id }}</a>
        @endif
    </h1>
    <div class="block">
        <button type="submit" submit="button" onclick="window.location='{{ '/users/create' }}'">Добавить пользователя</button>
        <h2>Наши пользователи</h2>
        @foreach ($users as $user)
            <div class="user">
                <h3>Никнейм: {{ $user->name }}#{{ $user->id }}</h3>
                <p>Почта: {{ $user->email }}</p>
                <div class="user__buttons">
                    <button type="submit" submit="button" onclick="window.location='{{ '/users/' . $user->id . '/posts' }}'">Посты</button>
                    <button type="submit" submit="button" onclick="window.location='{{ '/users/' . $user->id . '/latest-post' }}'">Последняя запись</button>
                    <button type="submit" submit="button" onclick="window.location='{{ '/users/' . $user->id . '/delete' }}'">Удалить</button>
                </div>
            </div>
        @endforeach
        @if (count($users) <= 0)
            <p>Пользователи отсутствуют...</p>
        @endif
    </div>
</div>
@vite('resources/scss/main.scss')