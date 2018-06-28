<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'name'      => 'required|string',
            'email'     => 'required|string|email|unique:users,email',
            'password'  => 'required|confirmed',

        ];
    }

    public function messages()
    {
        return [
            'name.required'        => 'Precisamos que digite seu nome',
            'email.unique'          => 'Este email já esta sendo usado',
            'email.required'        => 'Precisamos que digite seu e-mail',
            'password.required'     => 'Precisamos que digite uma senha',
            'password.confirmed'    => 'Essas senhas não estão batendo',
        ];
    }
}
