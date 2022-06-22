<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/* use Illuminate\Validation\Rule;

use Dotenv\Validator; */




class PostRequest extends FormRequest
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

/*         Validator::make($data, [
            'title' => [
                'required',
                Rule::unique('posts')->ignore($post->title),
            ],
        ]); */

        return [
            'title' => ['required', 'unique:posts', 'max:150'],
            'cover_image' => ['nullable'],
            'content' => ['nullable'],
        ];
    }
}
