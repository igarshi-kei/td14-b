<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            Index
        </x-slot>
    <body>
        <h1 class="text-red-600">サンタクロースとお話しよう！！</h1>
        <h2>✨投稿一覧画面✨</h2>
        <p class="text-lg">みんなの【ききたいこと】や【つたえたいこと】をサンタさんにおくると、おへんじがもらえるよ❕</p>
        <div class="mt-2 mb-2">
            <a href='/posts/create' class="bg-green-600 hover:bg-green-500 text-white rounded px-4 py-2"">新規投稿</a>
        </div>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        タイトル：<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </p>
                    <p>カテゴリー：{{ $post->category->name }}</p>
                    <img src="{{$post->image}}">
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
        {{ Auth::user()->name }}
    </body>
    </x-app-layout>
</html>
