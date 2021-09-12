<x-layout>
    <x-slot name="title">
        単語の編集 - MY単語
    </x-slot>



        <div>
            &laquo; <a href="{{route('words.show', $word)}}">戻る</a>
        </div>
        <h1>単語の編集</h1>
        <form method="post" action="{{route('words.update', $word)}}">
            @method('PATCH')
            @csrf

                <label>
                    品詞
                    <input type="text" name="WordClass" value={{old('WordClass', $word->WordClass)}}>
                </label>
            @error('WordClass')
                <div class="error">{{$message}}</div>
            @enderror

                <label>
                    覚えたい単語
                    <input type="text" name="tango" value={{old('tango', $word->tango)}}>
                </label>
            @error('tango')
                <div class="error">{{$message}}</div>
            @enderror

                <label>
                    単語の意味
                    <textarea name="meaning">{{old('meaning', $word->meaning)}}</textarea>
                </label>
            @error('meaning')
                <div class="error">{{$message}}</div>
            @enderror

            <button >アップデート</button>
        </form>
</x-layout>
