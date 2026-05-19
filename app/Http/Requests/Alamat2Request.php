<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Alamat2Request extends FormRequest
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
            'logo' => 'mimes:jpeg,bmp,png',
            'gambar_header' => 'mimes:jpeg,bmp,png',
            'gambar_1' => 'mimes:jpeg,bmp,png',
        ];
    }
}
