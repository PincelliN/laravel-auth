<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
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
            'title'=>'required|unique:works|max:100|min:3',
            'slug'=>'required|unique:works|max:100|min:3',
            'subject'=>'required|max:100|min:3',
            'start_date'=>'required|date',
            'end_date'=>'nullable|date',
            'post'=>'required|numeric|min:1',
            'collaborators'=>'required|min:1|max:10',
            'description'=>'max:100|min:10'
        ];
    }
    public function messages()
    {
        return [
    'title.required' => 'Il titolo è obbligatorio.',
    'title.unique' => 'Il titolo è già stato utilizzato. Scegline uno diverso.',
    'title.max' => 'Il titolo non può superare i 100 caratteri.',
    'title.min' => 'Il titolo deve avere almeno 3 caratteri.',

    'slug.required' => 'Lo slug è obbligatorio.',
    'slug.unique' => 'Lo slug è già stato utilizzato. Scegline uno diverso.',
    'slug.max' => 'Lo slug non può superare i 100 caratteri.',
    'slug.min' => 'Lo slug deve avere almeno 3 caratteri.',

    'subject.required' => 'Il soggetto è obbligatorio.',
    'subject.max' => 'Il soggetto non può superare i 100 caratteri.',
    'subject.min' => 'Il soggetto deve avere almeno 3 caratteri.',

    'start_date.required' => 'La data di inizio è obbligatoria.',
    'start_date.date' => 'Inserisci una data valida per la data di inizio.',

    'end_date.date' => 'Inserisci una data valida per la data di fine.',

    'post.required' => 'Il numero di post è obbligatorio.',
    'post.numeric' => 'Il campo post deve essere un numero.',
    'post.min' => 'Il numero di post deve essere almeno 1.',

    'collaborators.required' => 'Il numero di collaboratori è obbligatorio.',
    'collaborators.min' => 'Deve esserci almeno 1 collaboratore.',
    'collaborators.max' => 'Non puoi avere più di 10 collaboratori.',

    'description.max' => 'La descrizione non può superare i 100 caratteri.',
    'description.min' => 'La descrizione deve avere almeno 10 caratteri.',
];
    }
}