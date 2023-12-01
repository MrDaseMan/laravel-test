@section('content')
<div>
    <h1>Home</h1>
    <h2>Links</h2>
    <ul>
        @foreach ($links as $link)
            <li>
                <a href="{{ $link->url }}">{{ $link->name }}</a>
            </li>
        @endforeach
    </ul>

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