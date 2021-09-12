<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'WordClass' => 'required',
            'tango' => 'required|min:2',
            'meaning' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'WordClass.required' => '品詞を入力してください！',
            'tango.required' => '覚えたい単語を入力してください！',
            'tango.min' => ':min文字以上入力してください！',
            'meaning.required' => '単語の意味を入力してください！'
        ];
    }
}
