<x-layout>
    <x-slot name="title">
        単語の詳細 - MY単語
    </x-slot>



        <div>
            &laquo; <a href="{{route('words.list')}}">戻る</a>
        </div>
        <p>{{$word->WordClass}}</p>
        <h1>{{$word->tango}}</h1>
        <p>{!! nl2br(e($word->meaning)) !!}</p>


        <form>
            <a href="{{route('words.edit', $word)}}">編集</a>
        </form>

</x-layout>

