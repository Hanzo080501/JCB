<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KegiatanStoreRequest extends FormRequest
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
            'deskripsi' => ['required', 'string', 'max:255'],
            'image' => ['required', 'nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul Tidak Boleh Kosong',
            'title.max' => 'Judul Terlalu Besar',
            'title.string' => 'Judul Harus Berupa String',
            'deskripsi.max' => 'Deskripsi Terlalu Besar',
            'deskripsi.string' => 'Deskripsi Harus Berupa String',
            'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
            'image.required' => 'Image Tidak Boleh Kosong',
            'image.image' => 'File harus berupa gambar',
            'image.max' => 'File terlalu besar',
            'image.mimes' => 'File harus berupa jpeg, png, jpg, gif, svg',
            'image.nullable' => 'File Tidak Boleh Kosong',
            'image.required' => 'File Tidak Boleh Kosong',
        ];
    }
}
