<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AthleteFormRequest extends FormRequest
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
            'name' => ['required'],
            'birthday' => ['required'],
            'club_id' => ['required', 'integer'],
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'O campo Nome é obrigatório.',
            'birthday.required'     => 'O campo Nascimento é obrigatório.',
            'club_id.integer'       => 'O campo Clube deve ser um numero.',
            'club_id.required'      => 'O campo Clube é obrigatório.',
        ];
    }
}
