<x-app-layout>
        <h1>HPR~聖地投稿アプリ~</h1>
        <a href='/posts/create'>create</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
                @if($post->image_url)
                <div>
                    <img class="size-1/2" src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
                </div>
                @endif
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>