<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'         => 'required',
            'body'          => 'required',
            'image'         => 'image|mimes:png,jpg,jpeg',
            'author_id'     => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Judul Dilarang Kosong',
            'image.image'           => 'Extensi Gambar Harus png,jpeg,jpg',
            'body.required'         => 'Body Dilarang Kosong',
            'author_id.required'    => 'Login dulu',
        ];
    }
}