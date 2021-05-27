<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaStoreRequest extends FormRequest
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
            'nombres'   => 'required|min:3|max:255',
            'apellidos' => 'required|min:3|max:255',
            'cedula'    => 'required|min:10|max:13',
            'edad'      => 'integer',
            'email'     => 'email'
        ];
    }
}
