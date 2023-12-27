<x-app-layout>
    <x-slot name="header">
            かきなおしがめん
        </x-slot>
    <!DOCTYPE HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
        </head>
        <body>
            <h1 class="title">かきなおす</h1>
            <br>
            <br>
            <div class="content">
                <form action="/posts/{{ $post->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class='content__title'>
                        <h2>タイトル</h2>
                        <input type='text' name='post[title]' value="{{ $post->title }}">
                    </div>
                    <br>
                    <div class='content__body'>
                        <h2>ないよう</h2>
                        <input type='text' name='post[body]' value="{{ $post->body }}">
                    </div>
                    <br>
                    <br>
                    <input type="submit" class="text-white-700 bg-orange-300" value="ほぞん">
                </form>
            </div>
        </body>
</html>
</x-app-layout>
