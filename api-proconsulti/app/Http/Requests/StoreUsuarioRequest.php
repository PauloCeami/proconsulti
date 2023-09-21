<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nome' => [
                'required',
                'min:4',
                'max:50',

            ],
            'cpf' => [
                'required',
                'min:11',
                'max:11',
                'unique:usuarios'
            ],
            'email' => [
                'required',
                'unique:usuarios'
            ],
            'senha' => [
                'required',
                'min:4',
                'max:10',
            ],
            'tipo' => [
                'min:4',
                'max:10',
            ]
        ];
    }



    public function messages() {
        return [
            'nome.required' => 'Nome  obrigatório',
            'nome.min' => 'O minimo de chars deve ser de 4 para o nome do usuario',
            'nome.max' => 'Voce ultrapassou o limite de chars para o nome do usuario',
            'cpf.unique' => 'Este cpf de usuario já existe',
            'cpf.required' => 'cpf do usuario é obrigatória',
            'cpf.min' => 'O minimo de chars deve ser de 11 para a descrição do usuario',
            'cpf.max' => 'Voce ultrapassou o limite de chars na descrição do usuario',
            'email.required' => 'email  do usuario é obrigatória',
            'email.unique' => 'Este email de usuario já existe',
            'senha.required' => 'senha  do usuario é obrigatória',
            'senha.min' => 'O minimo de chars deve ser de 4 para a senha do usuario',
            'senha.max' => 'Voce ultrapassou o limite de chars na senha do usuario',
            'tipo.min' => 'O minimo de chars deve ser de 4 para a senha do usuario',
            'tipo.max' => 'Voce ultrapassou o limite de chars na tipo do usuario',
        ];
    }
}
