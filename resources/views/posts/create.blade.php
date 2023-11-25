<x-app-layout>
    <h1>新規登録</h1>
    <form action="/posts" method="POST">
        @csrf
        <div>
            <h2>ユーザー名</h2>
            <input type="text" name="post[username]" placeholder="" value="{{ old('post.username') }}"/>
            <p class="username" >{{ $errors->first('post.username') }}</p>
        </div>
        <div>
            <h2>パスワード</h2>
            <input type="password" name="post[password]" placeholder="英数字8文字以上"{{ old('post.password') }}/>
            <p class="password">{{ $errors->first('post.password') }}</p>
        </div>
        <div>
            <h2>起床時間</h2>
            <input type="time" name="post[awaketime]" placeholder="" value="{{ old('post.awaketime') }}"/>
            <p class="awaketime">{{ $errors->first('post.awaketime') }}</p>
        </div>
        <div>
            <h2>曲選択</h2>
                <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
        </div>
        <input type="submit" value="登録"/>
    </form>
    <div><a href="/">戻る</a></div>
</x-app-layout>
