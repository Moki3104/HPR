<x-app-layout>
        <h1>HPR~聖地投稿アプリ~</h1>
        <form action="/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="Comment">
                <h2>コメント</h2>
                <textarea name="comment" rows="6" cols="40" placeholder="投稿に対しての感想、追加情報...etc"{{ old('post.body') }}></textarea>
                <p class="comment__error" style="color:red">{{ $errors->first('comment') }}</p>
            </div>
            <input type="submit" value="コメント投稿"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>