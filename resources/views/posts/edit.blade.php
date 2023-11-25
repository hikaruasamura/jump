<x-app-layout>
    <h1 class="title">占い</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            <button onclick="fortuneButton()">占う</button>
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='post[body]' value="{{ $post->body }}">
            </div>
            <input type="submit" value="保存">
        </form>
    <script>
        function fortuneButton() {
            var fortunes = ['大吉','中吉','小吉'];
            var randomFortune = fortunes[Math.floor(Math.random()*fortunes.length)];
            
            alert('今日の運勢は「'+ randomFortune +'」です');
        }
    </script>
    </div>
</x-app-layout>
