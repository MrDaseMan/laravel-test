@section('content')
<div class="content">
    <h1>
        <a href="/">Главная</a> /
        <a href="/tags">Теги</a> /
        <a href="/tags/create">Добавить тег</a>
    </h1>
    <div class="block">
        <form action="{{ 'store' }}" method="post">
            @csrf
            <div>
                <label for="name">Название</label>
                <input type="text" name="name" id="name" placeholder="Название тега..." required>
            </div>
            <button type="submit" submit="button">Add tag</button>
        </form>
    </div>
</div>
@vite('resources/scss/main.scss')