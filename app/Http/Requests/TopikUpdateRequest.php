<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TopikUpdateRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'publish_by' => ['required', 'string', 'max:255'],
            'publish_at' => ['required', 'date'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul topik harus diisi',
            'publish_by.required' => 'Penerbit harus diisi',
            'publish_at.required' => 'Waktu penerbitan harus diisi',
        ];
    }
}
