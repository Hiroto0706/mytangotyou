<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;
use App\Http\Requests\WordRequest;

class WordController extends Controller
{
    public function word()
    {
        return view('index');
    }

    public function list()
    {
        $words = Word::latest()->get();

        return view('words.list')
        ->with(['words' => $words]);
    }


    public function show(Word $word)//implicit binding
    {
        return view('words.show')
        ->with(['word' => $word]);
    }

    public function create()
    {
        return view('words.create');
    }

    public function store(WordRequest $request)
    {
        $word = new Word();
        $word->WordClass = $request->WordClass;
        $word->tango = $request->tango;
        $word->meaning = $request->meaning;
        $word->save();

        return redirect()
            ->route('words.list');
    }

    public function edit(Word $word)
    {
        return view('words.edit')
            ->with(['word' => $word]);
    }

    public function update(WordRequest $request, Word $word)
    {
        $word->WordClass = $request->WordClass;
        $word->tango = $request->tango;
        $word->meaning = $request->meaning;
        $word->save();

        return redirect()
            ->route('words.show', $word);
    }

    public function destroy(Word $word)
    {
        $word->delete();

        return redirect()
            ->route('words.list');
    }

    public function check(Request $request, Word $word)
    {
        $word->check = $request->word_check;
        $word->save();

        return redirect()
            ->route('words.list');
    }

}
