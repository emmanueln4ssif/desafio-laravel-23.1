<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAulaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'inicio_treino' => 'required|date',
            'termino_treino' => 'required|date|after:inicio_treino',
            'custo' => 'required|numeric',
            'aluno_id'=>'required|integer',
            'funcionario_id'=>'required|integer',

            
        ];
    }
}
