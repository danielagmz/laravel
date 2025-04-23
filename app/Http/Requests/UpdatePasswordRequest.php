<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdatePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
       return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'current_password' => ['required', 'current_password'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    /**
     * Personaliza los mensajes de error para la validación.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'current_password.required' => 'Por favor, introduce tu contraseña actual.',
            'current_password.current_password' => 'La contraseña actual no es correcta.',
            'new_password.required' => 'Por favor, introduce una nueva contraseña.',
            'new_password.min' => 'La nueva contraseña debe tener al menos 8 caracteres.',
            'new_password.confirmed' => 'La confirmación de la nueva contraseña no coincide.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
  
        $errors = $validator->errors()->all();

   
        $html = '<div class="form-info form-info--error">';
        foreach ($errors as $error) {
            $html .= "<p>{$error}</p>";
        }
        $html .= '</div>';


        throw new HttpResponseException(
            response($html, 422)
                ->header('Content-Type', 'text/html')
        );
    }
}
