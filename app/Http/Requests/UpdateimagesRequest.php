<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateimagesRequest extends FormRequest
{public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
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
