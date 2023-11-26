<x-app-layout>
    <h1 class="title">早起きアプリ</h1>
    <h3>あなたの段位は{{$rank}}段です</h3>
    <div class="content">
            <p><a href="/start/song" class="btn btn--cornflowerblue" type="button" onClick="sound_01()">01</a></p>
            <audio id="sound-file01" preload="auto">
                <source src="{{ asset('') }}" type="audio/mp3">
            </audio>
        </form>
    </div>
    <h2>今日の運勢を知りたい方はこちら↓</h2>
    <a href="/start/fortune"><button>占う</button></a>
    <script>
        function sound_01(){ document.getElementById( 'sound-file01' ).play() ; }
    </script>
</x-app-layout>
