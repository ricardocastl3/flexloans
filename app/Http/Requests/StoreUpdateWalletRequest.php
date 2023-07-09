<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateWalletRequest extends FormRequest
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
            "name" => "required",
            "balance" => "required|numeric"
        ];
    }

    public function messages() : array
    {
        return [
            "name.required" => "Preencha o nome da carteira.",
            "balance.required" => "Preencha o saldo inicial da carteira.",
            "balance.numeric" => "O saldo precisa ser numérico."
        ];
    }
}

