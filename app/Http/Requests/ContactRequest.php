<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Заполните поле 'Имя'",
            'email.required' => "Заполните поле 'Email'",
            'email.email' => "Поле 'Email' не соответствует маске",
            'subject.required' => "Заполните поле 'Тема сообщения'",
            'subject.min' => "Некорректная длина поля 'Тема сообщения' (не менее 5 символов)",
            'subject.max' => "Некорректная длина поля 'Тема сообщения' (не более 50 символов)",
            'message.required' => "Заполните поле 'Сообщение'",
            'message.min' => "Некорректная длина поля 'Сообщение' (не менее 15 символов)",
            'message.max' => "Некорректная длина поля 'Сообщение' (не более 500 символов)",
        ];
    }
}
