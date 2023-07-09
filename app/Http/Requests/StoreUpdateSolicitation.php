<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateSolicitation extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "requested_balance" => "required",
            "rate" => "required",
            "deadline" => "required",
            "wallet" => "nullable"
        ];
    }

    public function messages() : array 
    {
        return [
            "requested_balance.required" => "Informe o plano pretendido!",
            "rate.required" => "Especifique a taxa por favor.",
            "deadline.required" => "Informe a data limite por favor."
        ];
    }
}
