<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePendakiRequest extends FormRequest
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
            'no_ktp' => 'required|string|max:20|unique:pendakis,no_ktp,' . $this->pendaki,
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'tanggal_pendakian' => 'required|date',
            'no_hp' => 'required|string|max:20'
        ];
    }
}
