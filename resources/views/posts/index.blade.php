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
        <h1 class="text-red-300">チーム開発会へようこそ！</h1>
        <h2>投稿一覧画面</h2>
        <a href='/posts/create'>新規投稿</a>
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
