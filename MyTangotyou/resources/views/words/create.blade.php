<x-layout>
    <x-slot name="title">
        単語の追加 - MY単語
    </x-slot>



        <div>
            &laquo; <a href="{{route('words.view')}}">戻る</a>
        </div>
        <h1>単語の追加</h1>
        <form method="post" action="{{route('words.store')}}">
            @csrf

            <ul>
                <li>
                    <label>
                        品詞
                        <input type="text" name="WordClass" value={{old('WordClass')}}>
                    </label>
                    @error('WordClass')
                        <div class="error">{{$message}}</div>
                    @enderror
                </li>

                <li>
                    <label>
                        覚えたい単語
                        <input type="text" name="tango" value={{old('tango')}}>
                    </label>
                    @error('tango')
                        <div class="error">{{$message}}</div>
                    @enderror
                </li>

                <li>
                    <label>
                        単語の意味
                        <textarea name="meaning">{{old('meaning')}}</textarea>
                    </label>
                    @error('meaning')
                        <div class="error">{{$message}}</div>
                    @enderror
                </li>
            </ul>

            <button >追加</button>
        </form>
</x-layout>
