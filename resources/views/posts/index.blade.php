@section('content')
<div class="content">
    <h1>
        <a href="/">Главная</a> /
        <a href="/posts">Посты</a>
        {{-- if exist user id --}}
        @if (isset($user_id))
            / <a href="/users/{{ $user_id }}/posts">Посты пользователя {{ $user_id }}</a>
        @endif
        @if (isset($post_comments_id))
            / <a href="/posts/{{ $post_comments_id }}/comments">Комментарии к посту {{ $post_comments_id }}</a>
        @endif
    </h1>
    <div class="block">
        <button type="submit" submit="button" onclick="window.location='{{ '/posts/create' }}'">Добавить пост</button>
        <h2>Все посты</h2>
        @foreach ($posts as $post)
            @if (isset($post->title) && isset($post->content))
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <p>Автор: 
                        <a href="{{ '/posts/' . $post->user_id . '/user'}}">{{ $post->user->name }}</a>
                    </p>
                    <div class="post__buttons">
                        {{-- <select name="tag_id">
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" submit="button" onclick="window.location='{{ '/posts/' . $post->id . '/tag' }}'">Применить</button> --}}
                        <button type="submit" submit="button" onclick="window.location='{{ '/posts/' . $post->id . '/delete' }}'">Удалить</button>
                    </div>
                    <div class="post__comments">
                        <h4>Комментарии:</h4>
                        <form action="{{ '/posts/' . $post->id . '/comment' }}" class="post__comment__post">
                            @csrf
                            <select name="user_id">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            <input type="text" id="content" name="content" placeholder="Напишите комментарий...">
                            <button type="submit" submit="button" onclick="window.location='{{ '/posts/' . $post->id . '/comment' }}'">Отправить</button>
                        </form>
                        
                        @if (!isset($post_comments_id) && count($post->comments()->get()) > 0)
                            <button type="submit" submit="button" onclick="window.location='{{ '/posts/' . $post->id . '/comments' }}'">Показать все комментарии</button>
                        @endif

                        @if (count($post->comments()->get()) > 0)
                            @if (isset($post_comments_id))
                                @foreach ($post->comments()->get() as $comment)
                                    <div class="post__comment">
                                        <p><a href="{{ '/posts/' . $comment->user->id . '/user'}}">{{ $comment->user->name }}</a>: {{ $comment->content }}</p>
                                        <button type="submit" submit="button" onclick="window.location='{{ '/posts/' . $comment->id . '/delete-comment' }}'">x</button>
                                    </div>
                                @endforeach
                            @else
                                <div class="post__comment">
                                    @if (count($post->comments()->get()) > 0 && isset($post->comments()->get()[0]->content))
                                        <p><a href="{{ '/posts/' . $post->comments()->get()[0]->user->id . '/user'}}">{{ $post->comments()->get()[0]->user->name }}</a>: {{ $post->comments()->get()[0]->content }}</p>
                                    @endif
                                </div>
                            @endif
                        @else
                            <div class="post__comment">
                                Нет комментариев...
                            </div>
                        @endif
                    </div> 
                </div>
            @endif
        @endforeach
        @if (count($posts) <= 0)
            <p>Стена пользователя пуста...</p>
        @endif
    </div>
</div>
@vite('resources/scss/main.scss')