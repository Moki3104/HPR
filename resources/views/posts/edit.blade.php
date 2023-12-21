<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
             <div class="category">
                <h3>ジャンル</h3>
                    <select name="post[category_id]">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                    </select>
            </div>
            <div class="content_title">
                <h2>作品名</h2>
                <input type="text" name="post[title]" placeholder="タイトルを入力" value="{{ $post->title }}"/>
            </div>
            <div class="content_body">
                <h2>詳細</h2>
                <textarea name="post[body]" placeholder="その場所について（どのシーンか）、感想、周辺情報...etc">{{ $post->body }}</textarea>
                </div>
                <input type="submit" value="投稿"/>
            </form>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>