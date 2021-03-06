<x-layout>
    <x-slot name="title">
        MY単語リスト - MY単語
    </x-slot>


        <div>
            &laquo; <a href="{{route('words.view')}}">戻る</a>
        </div>
        <ul>
            @forelse ($words as $word)
                <li class="wordlist">
                    <form>
                    </form>
                    <a href="{{route('words.show', $word)}}">
                        {{$word->tango}}
                    </a>
                    <form method="post" action="{{route('words.destroy', $word)}}" id="delete_word">
                        @method("DELETE")
                        @csrf

                        <button class="btn">[削除]</button>
                    </form>
                </li>
            @empty
               <li>覚える単語がありません。</li>
            @endforelse
        </ul>
        <script>
            'use script'

            {
                document.getElementById('delete_word').addEventListener('submit', e =>{
                    e.preventDefault();

                    if(confirm('本当に削除しますか？')){
                        e.target.submit();
                    }
                    return;
                })

        //         function myfunc(value) {

        //         if(checkword.value){
        //             document.getElementById('checkword').value = 1;
        //         }else{
        //             document.getElementById('checkword').value = 0;
        //         }

        //         return;
        // }
            }
        </script>
</x-layout>
