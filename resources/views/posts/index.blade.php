    <x-app-layout>
        <x-slot name="header">
            いちらん
        </x-slot>

        <h1 class="text-red-600">サンタクロースとおはなししよう！！</h1>
        <h2>✨みんなのとうこう✨</h2>
        <p class="text-lg">みんなの【ききたいこと】や【つたえたいこと】をサンタさんにおくると、おへんじがもらえるよ❕</p>
        <div class="mt-2 mb-2">
            <a href='/posts/create' class="bg-green-600 hover:bg-green-500 text-white rounded px-4 py-2">とうこうする</a>
        </div>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        タイトル：<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </p>
                    <p>おなまえ：{{ $post->user->name }}</p>
                    <p>カテゴリー：{{ $post->category->name }}</p>
                    <img src="{{$post->image}}">
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">けす</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id){
                'use strict'
                
                if(confirm('けすと　もどせないよ！\nほんとうに　けしていいの？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </x-app-layout>
