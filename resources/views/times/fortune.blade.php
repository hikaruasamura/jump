<x-app-layout>
    <h1 class="title">占い</h1>
    <div class="content">
            <button onclick="fortuneButton()">占う</button>
    <script>
        function fortuneButton() {
            var fortunes = ['大吉','中吉','小吉'];
            var randomFortune = fortunes[Math.floor(Math.random()*fortunes.length)];
            
            alert('今日の運勢は「'+ randomFortune +'」です');
        }
    </script>
    </div>
</x-app-layout>
