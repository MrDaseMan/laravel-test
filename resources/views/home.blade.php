@section('content')
<div class="content">
    <h1>Home</h1>
    
    <div class="block">
        <h2>Links</h2>
        <ul>
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link->url }}">{{ $link->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="block"> 
        <h2>Contact info</h2>
        <p>
            {{-- add text icons for words --}}
            <div>
                Phone ☎: 
                <span>{{ $data->phone }}</span>
            </div>
            <div>
                Message 📧: 
                <span>{{ $data->message }}</span>
            </div>
        </p>
    </div>
</div>

@vite('resources/scss/main.scss')
