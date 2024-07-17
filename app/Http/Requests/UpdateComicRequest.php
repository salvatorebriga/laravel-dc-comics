<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
                'min:10',
                'max:255',
                Rule::unique('comics', 'title')->ignore($this->comic)
            ],
            'description' => 'required|string|min:10',
            'thumb' => 'required|url',
            'price' => 'required|string|max:15',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:255',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.min' => 'Il titolo deve avere almeno 10 caratteri.',
            'title.unique' => 'Il titolo deve essere unico.',
            'description.required' => 'La descrizione è obbligatoria.',
            'description.min' => 'La descrizione deve avere almeno 10 caratteri.',
            'thumb.required' => 'L\'URL della miniatura è obbligatorio.',
            'thumb.url' => 'L\'URL della miniatura deve essere un URL valido.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'series.required' => 'La serie è obbligatoria.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date' => 'La data di vendita deve essere una data valida.',
            'type.required' => 'Il tipo è obbligatorio.',
            'artists.required' => 'Gli artisti sono obbligatori.',
            'writers.required' => 'Gli scrittori sono obbligatori.',
        ];
    }
}
