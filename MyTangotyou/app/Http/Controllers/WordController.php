<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;
use App\Http\Requests\WordRequest;

class WordController extends Controller
{
    //indexの表示
    public function word()
    {
        return view('index');
    }

    //list.balade.phpの表示
    public function list()
    {
        $words = Word::latest()->get();

        return view('words.list')
        ->with(['words' => $words]);
    }


    //show.blade.phpの表示
    public function show(Word $word)//implicit binding
    {
        return view('words.show')
        ->with(['word' => $word]);
    }

    //create.blade.phpの表示
    public function create()
    {
        return view('words.create');
    }

    //wordの保存保存（作成）
    public function store(WordRequest $request)
    {
        //新しいインスタンスを作成し、requestされた内容を代入
        $word = new Word();
        $word->WordClass = $request->WordClass;
        $word->tango = $request->tango;
        $word->meaning = $request->meaning;
        $word->save();

        return redirect()
            ->route('words.list');
    }


    //edit.blade.phpの表示
    public function edit(Word $word)
    {
        return view('words.edit')
            ->with(['word' => $word]);
    }


    //wordの編集機能
    public function update(WordRequest $request, Word $word)
    {
        //requestされたものをwordに代入
        $word->WordClass = $request->WordClass;
        $word->tango = $request->tango;
        $word->meaning = $request->meaning;
        $word->save();

        return redirect()
            ->route('words.show', $word);
    }

    //wordの削除
    public function destroy(Word $word)
    {
        $word->delete();

        return redirect()
            ->route('words.list');
    }

}
