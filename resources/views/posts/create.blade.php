<x-app-layout>
    <x-slot name="header">
            さくせいがめん
        </x-slot>
        <h1>サンタクロースとはなそう🎅</h1>
        <h2>サンタさんにききたいことやつたえたいことを　じゆうにかいてみよう！</h2>
        <!-- formタグにenctypeを追加 -->
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div>
                <h2>ないよう</h2>
                <textarea name="post[body]" placeholder="サンタさんはどこに住んでいますか？">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <!-- ここから追加 -->
            <div class="image">
                <input type="file" name="image">
            </div>
            <!-- ここまで追加 -->
            <div>
                <h2>カテゴリー</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
</x-app-layout>