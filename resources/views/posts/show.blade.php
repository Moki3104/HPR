<x-app-layout>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
            @if($post->image_url)
            <div>
                    <img class="size-1/2" src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
            </div>
            @endif
            <div class="comment"><a href="/posts/{{ $post->id }}/comment">コメント</a></div>
        </div>
            @foreach($post->comments as $comment)
                <p>{{ $comment->comment }}</p>
            @endforeach
        <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>