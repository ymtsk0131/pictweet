<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TweetRequest extends FormRequest
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
            //
          'name' => 'required',
          'image' => 'required',
          'content' => 'required|max:20'
        ];
    }

    public function messages() {
        return [
            'name.required' => '名前は必須です！！'
        ];
    }
}