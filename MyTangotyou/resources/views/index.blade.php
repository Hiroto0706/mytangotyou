<x-layout>
    <x-slot name="title">
        MY単語
    </x-slot>

        <h1>MY 単語</h1>
        <ul>
            <li>
                <a href="{{route('words.create')}}">単語の追加</a>
            </li>
            <li>
                <a href="{{route('words.list')}}">単語の一覧</a>
            </li>
            <li>
                <a href="">単語テスト！</a>
            </li>
        </ul>
</x-layout>

