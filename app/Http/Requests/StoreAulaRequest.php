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
            'inicio_treino' => 'required|unique:aulas|date',
            'termino_treino' => 'required|unique:aulas|date|after:inicio_treino',
            'custo' => 'required|numeric',
            'aluno_id'=>'required|integer',
            'funcionario_id'=>'required|integer'
        ];
    }

    public function attributes()
    {
        return [
            'inicio_treino' => 'inicio da aula',
            'termino_treino' => 'fim da aula',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'unique' => 'Você já possui uma aula agendada neste horário'
        ];
    }
}
