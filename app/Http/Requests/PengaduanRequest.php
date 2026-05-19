<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengaduanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required|string',
            'nik' => 'required|string',
            'nik' => 'required|min:16',
            'telp' => 'required|string',
            'telp' => 'required|min:8',
            'subject' => 'required|string',
            'laporan' => 'required|string',
            'file' => 'mimes:jpeg,png,bmp,pdf |max:5120',
        ];
    }
}