<x-app-layout>
        <h1>HPR~聖地投稿アプリ~</h1>
        <form action="/posts" method="POST">
            @csrf
             <div class="category">
                <h3>ジャンル</h3>
                    <select name="post[category_id]">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                    </select>
            </div>
            <div class="title">
                <h2>作品名</h2>
                <input type="text" name="post[title]" placeholder="タイトルを入力" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>詳細</h2>
                <textarea name="post[body]" placeholder="その場所について（どのシーンか）、感想、周辺情報...etc">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="投稿"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>