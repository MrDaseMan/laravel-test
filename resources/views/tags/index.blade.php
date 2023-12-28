@section('content')
<div class="content">
    <h1>
        <a href="/">Главная</a> /
        <a href="/tags">Теги</a>
    </h1>
    <div class="block">
        <button type="submit" submit="button" onclick="window.location='{{ '/tags/create' }}'">Добавить тег</button>
        <h2>Наши теги</h2>
        @foreach ($tags as $tag)
            <div class="tag">
                <h3>{{ $tag->name }}</h3>
                <div class="tag__buttons">
                    <button type="submit" submit="button" onclick="window.location='{{ '/tags/' . $tag->id . '/delete' }}'">х</button>
                </div>
            </div>
        @endforeach
        @if (count($tags) <= 0)
            <p>Теги отсутствуют...</p>
        @endif
    </div>
</div>
@vite('resources/scss/main.scss')