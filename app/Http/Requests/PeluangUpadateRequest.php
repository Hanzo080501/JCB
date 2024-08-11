<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeluangUpadateRequest extends FormRequest
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
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'materi' => ['required', 'string'],
            'isi' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
            'topik_id' => ['required', 'exists:topik_models,id'],
            // 'file' => ['required|file|mimes:pdf,doc,docx,ppt,pptx,xls,xlsx|max:20480'],
            // 'video' => ['required|file|mimes:mp4,avi,mkv,webm|max:20480000'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Field ini harus diisi.',
            'string' => 'Field ini harus berupa teks.',
            'max' => 'Field ini tidak boleh melebihi :max karakter.',
            'image' => 'File harus berupa gambar.',
            'date' => 'Field ini harus berupa tanggal.',
            'exists' => 'Field ini tidak valid.',
            'file' => 'File harus berupa file.',
            'max' => 'File harus berukuran kurang dari :max kilobyte.',
            'video' => 'File harus berupa video.',
            'mimes' => 'File harus berupa video.',
            'materi' => 'Field ini harus diisi.',
            'isi' => 'Field ini harus diisi.',
            'description' => 'Field ini harus diisi.',
            'topik_id' => 'Field ini harus diisi.',
            'file' => 'File harus berupa file.',
        ];
    }
}
