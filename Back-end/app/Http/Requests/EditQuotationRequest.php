<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class EditQuotationRequest extends FormRequest
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
            'content' => 'required',
            'author' => 'required',
            'category_Id'=> 'required'
        ];
    }

    public function failedValidation(Validator $validator)
    {

        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => true,
            'message' => 'Erreur de la validation',
            'errorsList' => $validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            'content.required' => 'La citation doit être fournie',
            'author.required' => 'L\'auteur doit être fourni',
            'category_Id.required' => 'Le thème doit être choisi'
        ];
    }
}
