<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Post extends FormRequest
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
            'titre' => 'required|min:8',
            'description' => 'required|min:100',
            'arctile1' => 'number',
            'arctile2' => 'number',
            'arctile3' => 'number',
            'format' => 'required',
            'categorie' => 'required',
            'file' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'titre.required' => "Le titre de l'article est requis ",
            'titre.min' => "Le titre de l'article doit contenir au moins 8 caractère ",
            'description.required' => "Le contenu de l'article est requis ",
            'description.min' => "Le contenu de l'article doit contenir au moins 100 caractère ",
            'article1.number' => "Le champs article lié doit contenu que des chiffres comme ID ",
            'article2.number' => "Le champs article lié doit contenu que des chiffres comme ID ",
            'article3.number' => "Le champs article lié doit contenu que des chiffres comme ID ",
            'format.required' => "Le format de l'article est requis ",
            'categorie.required' => "Labcatégorie de l'article est requis ",
            'file.required' => "Un fichier est requis ",




        ];
    }
}
