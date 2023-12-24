<x-app-layout>
        <h1>HPR~聖地投稿アプリ~</h1>
        <a href='/posts/create'>create</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
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
                
                @if($post->user_id == Auth::id())
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                @csrf
                @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </form>
                @endif
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    <script>
    function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
    </script>
</x-app-layout>