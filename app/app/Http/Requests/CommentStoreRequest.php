<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentStoreRequest extends FormRequest
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
            'name' => 'required',
            'comment' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Имя обязательно для заполнения',
            'comment.required' => 'Сообщение обязательно для заполнения',
        ];
    }
}
