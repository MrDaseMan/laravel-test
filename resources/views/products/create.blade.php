@section('product_create')
<div>
    <h1>
        <a href="/">Главная</a> /
        <a href="/products">Продукты</a> /
        <a href="/products/create">Добавить продукт</a>
    </h1>
    <form action="{{ 'store' }}" method="post">
        @csrf
        <div>
            <label for="name">Название</label>
            <input type="text" name="name" id="name" placeholder="Дайте креативное название вашему продукту..." required>
        </div>
        <div>
            <label for="price">Цена</label>
            <input type="text" name="price" id="price" placeholder="Объявите цену вашего продукта..." required>
        </div>
        <div>
            <label for="description">Описание</label>
            <textarea type="text" name="description" id="description" placeholder="Опишите ваш продукт..." required rows="5"></textarea>
        </div>
        <button type="submit" submit="button">Добавить продукт</button>
    </form>
</div>

@vite('resources/scss/main.scss')