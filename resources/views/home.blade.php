@section('content')
<div class="content">
    <h1><a href="/">Главная</a></h1>
    
    <div class="block">
        <h2>Ссылки</h2>
        <div class="links"> 
        @foreach ($links as $link)
            <a href="{{ $link->url }}">{{ $link->name }}</a>
        @endforeach
        </div>
    </div>

    <div class="block"> 
        <h2>Контактная информация</h2>
        <p>
            <div>
                Номер телефона ☎: 
                <span>{{ $data->phone }}</span>
            </div>
            <div>
                Сообщение 📧: 
                <span>{{ $data->message }}</span>
            </div>
        </p>
    </div>
</div>

@vite('resources/scss/main.scss')