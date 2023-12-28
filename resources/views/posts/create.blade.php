@section('content')
<div class="content">
    <h1>
        <a href="/">Главная</a> /
        <a href="/posts">Посты</a> /
        <a href="/posts/create">Добавить пост</a>
    </h1>
    <div class="block">
        <form action="{{ 'store' }}" method="post">
            @csrf
            <div>
                <label for="title">Заголовок</label>
                <input type="text" name="title" id="title" placeholder="Дайте креативное название вашему посту..." required>
            </div>
            <div>
                <label for="content">Текст</label>
                <textarea type="text" name="content" id="content" placeholder="Я люблю писать посты" required rows="5"></textarea>
            </div>
            <div>
                <label for="user_id">Автор</label>
                <select name="user_id" id="user_id" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" submit="button">Add post</button>
        </form>
</div>
@vite('resources/scss/main.scss')