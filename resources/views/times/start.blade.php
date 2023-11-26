<x-app-layout>
    <h1 class="title">早起きアプリ</h1>

     @if($rank<3)
        <h3 class="one">あなたの段位は初段です</h3>
        @elseif($rank<10)
        <h3 class="two">あなたの段位は二段です</h3>
        @else
        <h3 class="three">あなたの段位は三段です</h3>
    @endif  
    <div class="content">
           <button class="music" onclick="sound()" id='button'>再生</button>
            <audio id="sound-file01" preload="auto">
                <source src="{{ asset('/mp3/'.$song->song) }}" type="audio/mp3">
            </audio>
        </form>
    </div>
    <h2>今日の運勢を知りたい方はこちら↓</h2>
    <a href="/start/fortune"><button>占う</button></a>
    <script>
        function sound(){ 
            const music = document.getElementById( 'sound-file01' );
            if (music.paused){
                document.getElementById('button').innerHTML = '一時停止';
                music.play();
                fetch('/start/song')
            .then((res)=>{
                console.log(res);
                console.log('OK');
            })
            .catch((err)=>{
                console.log(err);
                console.log('NG');
            })
            } else{
                 document.getElementById('button').innerHTML = '再生';
                music.pause();
            }
            
        }
    </script>
</x-app-layout>
