@section('products')
<div>
    <h1>
        <a href="/">Главная</a> /
        <a href="/products">Продукты</a>
    </h1>
    <table>
        <thead>
            <tr>
                <th>Название</th>
                <th>Цена</th>
                <th>Описание</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button onclick="window.location='{{ '/products/create' }}'">Добавить продукт</button>
</div>

@vite('resources/scss/main.scss')
