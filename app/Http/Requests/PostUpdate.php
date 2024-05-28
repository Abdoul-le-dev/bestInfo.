<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdate extends FormRequest
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
            'titre' => 'text',
            'description' => 'text',
            'arctile1' => 'number',
            'arctile2' => 'number',
            'arctile3' => 'number',
            'format'   => 'required',
            'categorie' => 'required',
            'file' => 'sometimes',
        ];
    }
    public function messages()
    {
        return [ ];
    }
    protected function prepareForValidation()
    {
        if($this->format == null)
        {
            $this->request->remove('file');
        }

    }
}
