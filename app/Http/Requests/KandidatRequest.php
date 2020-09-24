<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KandidatRequest extends FormRequest
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
            'nama' => 'required|max:150',
            'nim' => 'required|max:15',
            'jurusan' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'foto' => 'required|image|max:5000|mimes:jpg,png,jpeg',
            'jenis_kandidat' => 'required',
        ];
    }
}
