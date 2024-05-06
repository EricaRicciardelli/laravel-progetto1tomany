<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nome"=>'required|string|max:255',
            "descrizione"=>'required|string',
            "immagine"=>'required|image',
        ];
    }

        public function messages(){
           return [
            "nome.required"=>"Inserisci il nome",
            "descrizione.required"=>"Inserisci la descrizione",
            "immagine.required"=>"Inserisci l'immagine",
           ];
    }
    
}
