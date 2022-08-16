<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /** validation login */
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
            'nome' => ['required','min:3'],
            // 'seasonQty'=> ['required'],
            // 'episodesPerSeason' => ['required']
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'nome.required' => 'O campo nome é obrigatório',
    //         'min' => 'O campo nome requer no mínimo de :min caracteres'
    //     ];
    // }
}
