<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestQuestion extends FormRequest
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
        switch ($this->method()){
            case 'POST':
                return [
                    'title'         => ['required', 'string', 'min:3', 'max:191'],
                    'slug'          => ['required', 'string', 'min:3', 'max:191'],
                    'body'          => ['required', 'string', 'min:0', 'max:2000'],
                    'category_id'   => ['nullable', 'integer'],
                ];
            case 'PUT':
                return [
                    'title'         => ['required', 'string', 'min:3', 'max:191'],
                    'slug'          => ['required', 'string', 'min:3', 'max:191'],
                    'body'          => ['required', 'string', 'min:0', 'max:2000'],
                    'category_id'   => ['nullable', 'integer'],
                    //validar o usuario que esta editando
                ];
        }

    }
}
