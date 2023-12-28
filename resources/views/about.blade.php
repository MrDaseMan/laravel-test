@section('content')
<div class="content">
    <h1>
        <a href="/">Главная</a> / 
        <a href="/about">О сайте</a>
    </h1>
    <p>
        {{$about}}
    </p>
</div>

@vite('resources/scss/main.scss')